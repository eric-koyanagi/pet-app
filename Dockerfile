FROM php:8.2

WORKDIR /var/www/html

COPY composer.json composer.lock . ./

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Dev dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip

# Install dependencies (don't use allow SU in prod)
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install --prefer-dist --no-scripts

WORKDIR /var/www/html/public

# Expose port for web server
EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80"]