FROM debian:buster

MAINTAINER Gonzalo Martin <gmartin-@student.42madrid.com>

RUN apt update && \
    apt -y upgrade && \
    apt install -y nginx && \
    apt install -y php-fpm php-mysql php-mbstring && \
    apt install -y mariadb-server openssl

COPY srcs/wordpress /var/www/html/wordpress/
COPY srcs/phpMyAdmin /var/www/html/phpMyAdmin/
COPY srcs/config.inc.php /var/www/html/phpMyAdmin/
COPY srcs/wp-config.php /var/www/html/wordpress/
COPY srcs/default /etc/nginx/sites-available/
COPY srcs/config.sql /tmp/

RUN chown -R www-data:www-data /var/www/* && \
    chmod -R 755 /var/www/* && \
    chmod 700 /etc/ssl/private && \
	openssl req -x509 -nodes -days 365 \
	-newkey rsa:2048 -subj "/C=SP/ST=Spain/L=Madrid/O=42/CN=127.0.0.1" \
	-keyout /etc/ssl/private/gmartin.key \
	-out /etc/ssl/certs/gmartin.crt && \
	openssl dhparam -out /etc/nginx/dhparam.pem 1000

RUN service mysql start && \
    mysql -u root --password= < /tmp/config.sql

CMD service nginx start && \
    service mysql start && \
    service php7.3-fpm start && \
    bash
