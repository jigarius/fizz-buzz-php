FROM php:8.3-cli

# Composer for dependency management and running the dev tooling.
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app