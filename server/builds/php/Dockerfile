FROM php:8.1-fpm

RUN docker-php-ext-install pdo_mysql

RUN apt-get update \
    && apt-get install -y sudo \
    && apt-get install -y \
        curl \
        sed \
        zlib1g-dev \
        git \
        zip \
        unzip \
        nano \
        openssl \
        libssl-dev \
        libcurl4-openssl-dev \
        libxml2-dev \
    && apt-get clean -y \
    && docker-php-ext-install soap \
    && apt-get install -y zip libzip-dev \
    && docker-php-ext-install zip \
    && apt-get install -y supervisor

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

RUN ( \
                cd /tmp \
                && mkdir librdkafka \
                && cd librdkafka \
                && git clone https://github.com/edenhill/librdkafka.git . \
                && ./configure \
                && make \
                && make install \
            )
RUN apt-get install -y librdkafka-dev && pecl install rdkafka
RUN echo "extension=rdkafka.so" >> /usr/local/etc/php/conf.d/rdkafka.ini
RUN apt-get install -y cron
RUN apt-get update && apt-get install -y libpq-dev
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install pdo pdo_pgsql
RUN pecl install mongodb
RUN echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini
RUN docker-php-ext-configure intl && docker-php-ext-install intl
RUN cd ~
RUN sudo curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install sockets
RUN echo 'cd /var/www/html/app' >> ~/.bashrc
