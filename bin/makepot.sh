#!/usr/bin/env bash

docker run \
  --user root \
  --rm \
  --volume  "$(pwd):/var/www/html/riverbank" \
  wordpress:cli bash -c 'php -d memory_limit=1024M "$(which wp)" i18n make-pot ./riverbank/ ./riverbank/languages/riverbank.pot --headers={\"Last-Translator\":\"friends@themeisle.com\"\,\"Project-Id-Version\":\"Riverbank\"\,\"Report-Msgid-Bugs-To\":\"https://github.com/Codeinwp/riverbank/issues\"\} --allow-root --exclude=dist,build,bundle,e2e-tests '