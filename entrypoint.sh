#!/bin/sh

composer install --ignore-platform-reqs --verbose
exec "$@"