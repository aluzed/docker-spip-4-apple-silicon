FROM debian:bullseye-slim

RUN apt-get update && apt-get install -y \
    apache2 \
    php \
    php-mysql \
    php-gd \
    php-curl \
    php-xml \
    php-mbstring \
    php-zip \
    php-intl \
    wget \
    unzip \
    libapache2-mod-php \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN a2enmod php7.4 && a2enmod rewrite

RUN mkdir -p /var/www/spip

RUN sed -i 's|/var/www/html|/var/www/spip|g' /etc/apache2/sites-available/000-default.conf

RUN echo '<Directory /var/www/spip/>' >> /etc/apache2/sites-available/000-default.conf
RUN echo '    Options Indexes FollowSymLinks' >> /etc/apache2/sites-available/000-default.conf
RUN echo '    AllowOverride All' >> /etc/apache2/sites-available/000-default.conf
RUN echo '    Require all granted' >> /etc/apache2/sites-available/000-default.conf
RUN echo '</Directory>' >> /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /var/www/spip
RUN chmod -R 755 /var/www/spip

RUN mkdir -p /var/www/spip/plugins /var/www/spip/plugins/auto /var/www/spip/lib
RUN chown -R www-data:www-data /var/www/spip/plugins /var/www/spip/plugins/auto /var/www/spip/lib

EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]