FROM php:8.3-cli

# git and unzip let Composer fetch and extract dist packages.
RUN apt-get update \
    && apt-get install -y --no-install-recommends git unzip \
    && rm -rf /var/lib/apt/lists/*

# Composer for dependency management and running the dev tooling.
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app