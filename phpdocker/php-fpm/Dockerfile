FROM phpdockerio/php:8.2-fpm
WORKDIR "/app"

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
        php8.2-http \ 
        php8.2-redis \ 
        php8.2-xdebug \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Configurações do PHP para exibir erros
RUN echo "display_errors=On" >> /etc/php/8.2/fpm/conf.d/99-overrides.ini
RUN echo "error_reporting=E_ALL" >> /etc/php/8.2/fpm/conf.d/99-overrides.ini