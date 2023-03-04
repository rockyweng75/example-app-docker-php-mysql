FROM php:8.2-cli
COPY . /usr/src/example
WORKDIR /usr/src/example

RUN docker-php-ext-install mysqli

CMD ["php", "artisan", "serve", "--host", "0.0.0.0"]
