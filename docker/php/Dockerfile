# FROM php:8.2-fpm

# FROM ubuntu:latest

# ENV DEBIAN_FRONTEND=noninteractive
# # WORKDIR /var/www/html
# # Aktualizacja pakietów i instalacja narzędzi
# RUN apt update && \
#     apt-get upgrade -y; \
#     apt-get install -y curl wget tar unzip && \
#     apt-get install -y php8.1 \
#     php8.1-fpm \
#     php8.1-mysql \
#     php8.1-cli \
#     php-json \
#     php8.1-opcache \
#     php8.1-mbstring \
#     php8.1-xml \
#     php8.1-gd \
#     php8.1-curl
# # RUN mkdir -p /var/www/html


# # RUN wget https://wordpress.org/latest.tar.gz && \
# #     tar -xzvf latest.tar.gz -C /var/www/html --strip-components=1

# # RUN chown -R www-data:www-data /var/www/html

# # RUN chmod -R 755 /var/www/html/

# # wget https://wordpress.org/latest.tar.gz
# # tar zxvf latest.tar.gz --strip-components=1 -C /var/www/html
# CMD ["/usr/sbin/php-fpm8.1", "-F"]


FROM ubuntu
WORKDIR /var/www/html
RUN apt-get update && \
    apt-get install -y -q software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt-get update && \
    apt-get install -y -q php8.1-fpm php8.1-mbstring php8.1-gd php8.1-mysql
RUN apt-get install -y wget tar

RUN sed -i 's/;date.timezone\s*=/date.timezone\s*= UTC/g' /etc/php/8.1/fpm/php.ini && \
    sed -i "s/;error_log\s*=\s*php_errors.log/error_log = \/var\/log\/php_errors.log/" /etc/php/8.1/fpm/php.ini && \
    # sed -i -e "s/\/run\/php\/php8.1-fpm.sock/\/var\/run\/php\/php8.1-fpm.sock/g" /etc/php/8.1/fpm/pool.d/www.conf && \
    sed -i -e "s/\/run\/php\/php8.1-fpm.sock/9000/g" /etc/php/8.1/fpm/pool.d/www.conf && \
    sed -i -e "s/;daemonize\s*=\s*yes/daemonize = no/g" /etc/php/8.1/fpm/php-fpm.conf

RUN wget https://wordpress.org/latest.tar.gz 

ADD wp-config.php /var/www/html/

RUN tar -xzvf latest.tar.gz -C . --strip-components=1

RUN chown -R www-data:www-data /var/www/html
# VOLUME ["/etc/php5","/var/run"]
RUN mkdir /run/php
EXPOSE 9000

ENTRYPOINT ["php-fpm8.1", "-F"]

