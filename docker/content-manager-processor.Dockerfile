FROM php:fpm AS dev
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
RUN docker-php-ext-install mysqli && pecl install xdebug && docker-php-ext-enable xdebug
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp
CMD php-fpm \
    && wp config create --allow-root --dbname=wordpress_db --dbuser=user --dbpass=password --dbhost=db \
    && wp core install --allow-root --url=localhost --title=Dev --admin_user=Admin --admin_password=password --admin_email=info@example.com

FROM php:fpm AS prod
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN docker-php-ext-install mysqli