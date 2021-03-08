#!/bin/sh

set -e

/usr/local/bin/docker-php-entrypoint

/bin/sh

docker-php-ext-install mysqli \
&& apache2-foreground

exec "$@"
