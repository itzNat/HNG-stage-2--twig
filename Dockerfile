FROM php:8.1-cli

WORKDIR /app

# Install system dependencies and PHP extensions
RUN apt-get update \
    && apt-get install -y git unzip libzip-dev libonig-dev \
    && docker-php-ext-install mbstring zip pdo pdo_mysql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Copy composer from official image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy app
COPY . /app

# Install PHP dependencies (if network is available). If not, vendor/ can be used from the repo.
RUN if [ -f composer.json ]; then composer install --no-dev --optimize-autoloader --no-interaction || true; fi

# Default PORT fallback used by php's built-in server
ENV PORT 10000

EXPOSE 10000

# Start the PHP built-in server on the provided $PORT and serve the `public` directory
CMD ["sh","-c","php -S 0.0.0.0:${PORT} -t public"]
