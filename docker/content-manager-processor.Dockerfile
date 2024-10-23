FROM php:fpm AS dev
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
RUN docker-php-ext-install mysqli && pecl install xdebug && docker-php-ext-enable xdebug
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp
COPY content-manager-processor.entrypoint.sh /usr/local/bin/content-manager-processor.entrypoint.sh
RUN chmod +x /usr/local/bin/content-manager-processor.entrypoint.sh
ENTRYPOINT ["/usr/local/bin/content-manager-processor.entrypoint.sh"]

FROM php:fpm AS prod
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN docker-php-ext-install mysqli