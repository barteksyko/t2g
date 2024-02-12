ZADANIE: Utwórz docker-compose z działającym Wordpressem. Spraw, aby strona była dostępna po HTTPS podczas stawiania Dockera na localhost. Oprzyj kontenery Dockera o własne obrazy wywiedzione z Ubuntu (FROM ubuntu) 


Openssl was used to handle https because Let's Encrypt will not issue a certificate for the "localhost" domain as this is an address that is not publicly available on the Internet. A self-signed certificate is not verified by a certifying organization, so browsers may display security warnings when trying to access the site.