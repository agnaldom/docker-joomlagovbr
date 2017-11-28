FROM php:7.0-fpm

# Disable remote database security requirements.
ENV JOOMLA_INSTALLATION_DISABLE_LOCALHOST_CHECK=1

# Install PHP extensions
RUN apt-get update && apt-get install -y libpng12-dev libjpeg-dev libmcrypt-dev zip unzip && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr \
    && docker-php-ext-install gd

RUN docker-php-ext-install mysqli
RUN docker-php-ext-install mcrypt
RUN docker-php-ext-install zip

VOLUME /var/www/html

# Download package and extract to web volume
RUN curl -o dev.zip -SL https://github.com/joomlagovbr/joomla-3.x/archive/dev.zip \
    && mkdir /usr/src/joomla \
    && unzip dev.zip -d /usr/src/joomla \
    && rm dev.zip \
    && chown -R www-data:www-data /usr/src/joomla

# Copy init scripts and custom .htaccess
COPY docker-entrypoint.sh /entrypoint.sh
COPY makedb.php /makedb.php

ENTRYPOINT ["/entrypoint.sh"]
CMD ["php-fpm"]
