FROM ubuntu

RUN apt-get update && \
    apt-get install -y -q curl gnupg2

RUN curl http://nginx.org/keys/nginx_signing.key | apt-key add -
RUN apt-get update && \
    apt-get install -y -q nginx-full 

RUN apt-get install openssl

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt -subj '/CN=localhost'
RUN openssl dhparam -out /etc/nginx/dhparam.pem 2048

COPY self-signed.conf /etc/nginx/snippets/self-signed.conf
COPY ssl-params.conf /etc/nginx/snippets/ssl-params.conf

COPY default /etc/nginx/sites-available/default

EXPOSE 80/tcp
EXPOSE 443/tcp

CMD ["/usr/sbin/nginx", "-g", "daemon off;"]