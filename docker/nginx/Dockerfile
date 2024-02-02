FROM ubuntu

RUN apt-get update && \
    apt-get install -y -q curl gnupg2

RUN curl http://nginx.org/keys/nginx_signing.key | apt-key add -

RUN apt-get update && \
    apt-get install -y -q nginx-full 

COPY default /etc/nginx/sites-available/default


# RUN apt-get install -y openssl

# RUN mkdir -p /etc/nginx/ssl
# RUN chmod -R 700 /etc/nginx/ssl

# # RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/example.key -out /etc/nginx/ssl/example.crt
# RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/example.key -out /etc/nginx/ssl/example.crt \
#     -subj "/C=US/ST=State/L=City/O=Organization/OU=Organizational Unit/CN=localhost"

EXPOSE 80/tcp

CMD ["/usr/sbin/nginx", "-g", "daemon off;"]