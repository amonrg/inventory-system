FROM php:8.2-cli
COPY app/ /usr/src/inventory-system
WORKDIR /usr/src/inventory-system
RUN apt update && apt install -y libpq-dev \
    && docker-php-ext-configure pgsql --with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql
CMD ["php", "-S", "0.0.0.0:8000", "./hello.php"]