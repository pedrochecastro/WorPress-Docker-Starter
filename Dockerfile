FROM php:apache

RUN docker-php-source extract && docker-php-ext-install mysqli && docker-php-source delete

COPY ./conf/sites-available /etc/apache2/sites-available

RUN a2dissite 000-default.conf

RUN a2ensite 000-wordpress.conf

RUN a2enmod rewrite

#Setup vhost
# CMD ["a2dissite", "000-default.conf"]
# CMD  ["a2ensite", "000-wordpress.conf"]
# CMD ["service", "apache2 restart