<?php
/**
 * Riverbank functions file
 *
 * @author Themeisle
 * @package riverbank
 * @since 1.0.0
 */

namespace Riverbank;

/**
 * Bootstrap the theme.
 *
 * @return void
 */
function bootstrap() {
	global $_riverbank_bootstrap_errors;

	$_riverbank_bootstrap_errors = new \WP_Error();

	check_php();

	define_constants();

	check_build_files();

	maybe_add_notices();

	load_sdk();

	load_dependencies();

	run();
}

/**
 * Checks that the PHP version is correct.
 *
 * @return void
 */
function check_php() {
	global $_riverbank_bootstrap_errors;

	if ( version_compare( PHP_VERSION, '7.0' ) > 0 ) {
		return;
	}

	$_riverbank_bootstrap_errors->add(
		'php_version',
		sprintf(
		/* translators: %s message to upgrade PHP to the latest version */
			__( "Hey, we've noticed that you're running an outdated version of PHP which is no longer supported. Make sure your site is fast and secure, by %1\$s. Riverbank's minimal requirement is PHP%2\$s.", 'riverbank' ),
			sprintf(
			/* translators: %s message to upgrade PHP to the latest version */
				'<a href="https://wordpress.org/support/upgrade-php/">%s</a>',
				__( 'upgrading PHP to the latest version', 'riverbank' )
			),
			'7.0'
		)
	);
}

/**
 * Define theme constants.
 *
 * @return void
 */
function define_constants() {
	define( 'RIVERBANK_VERSION', '1.0.5' );
	define( 'RIVERBANK_DEBUG', defined( 'WP_DEBUG' ) && WP_DEBUG === true );
	define( 'RIVERBANK_DIR', trailingslashit( get_template_directory() ) );
	define( 'RIVERBANK_URL', trailingslashit( get_template_directory_uri() ) );
}

/**
 * Checks that the build files are present.
 *
 * @return void
 */
function check_build_files() {
	if ( defined( 'RIVERBANK_IGNORE_SOURCE_CHECK' ) ) {
		return;
	}

	$_files_to_check = array(
		RIVERBANK_DIR . 'vendor/autoload.php',
		RIVERBANK_DIR . 'assets/css/build/style.css',
		RIVERBANK_DIR . 'assets/css/build/editor.css',
		RIVERBANK_DIR . 'assets/css/build/style-rtl.css',
		RIVERBANK_DIR . 'assets/css/build/editor-rtl.css',
	);

	foreach ( $_files_to_check as $file ) {
		if ( is_file( $file ) ) {
			continue;
		}

		global $_riverbank_bootstrap_errors;

		$_riverbank_bootstrap_errors->add(
			'build_missing',
			sprintf(
			/* translators: %s: commands to run the theme */
				__( 'You appear to be running the Riverbank theme from source code. Please finish installation by running %s.', 'riverbank' ),
				'<code>composer install --no-dev &amp;&amp; yarn install --frozen-lockfile &amp;&amp; yarn run build</code>'
			)
		);

		return;
	}
}

/**
 * Adds notices if something went wrong and activates the default theme.
 *
 * @return void
 */
function maybe_add_notices() {
	global $_riverbank_bootstrap_errors;

	if ( ! $_riverbank_bootstrap_errors->has_errors() ) {
		return;
	}

	add_filter( 'template_include', '__return_null', 99 );
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] ); // phpcs:ignore WordPress.Security.NonceVerification.Recommended
	add_action(
		'admin_notices',
		function () {
			global $_riverbank_bootstrap_errors;

			printf( '<div class="notice notice-error"><p>%1$s</p></div>', wp_kses_post( $_riverbank_bootstrap_errors->get_error_message() ) );
		}
	);
}

/**
 * Load SDK.
 *
 * @return void
 */
function load_sdk() {
	add_filter(
		'themeisle_sdk_products',
		function ( $products ) {
			$products[] = RIVERBANK_DIR . 'style.css';

			return $products;
		} 
	);
}

/**
 * Load composer dependencies.
 *
 * @return void
 */
function load_dependencies() {
	$vendor_file = RIVERBANK_DIR . '/vendor/autoload.php';
	if ( is_readable( $vendor_file ) ) {
		require_once $vendor_file;
	}
}

/**
 * Run theme core.
 *
 * @return void
 */
function run() {
	Core::get_instance();
}

bootstrap();
