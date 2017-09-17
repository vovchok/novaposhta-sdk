FROM php:7.0-cli

### Install phpunit

COPY ./scripts/phpunit-install.sh /usr/src/scripts/
RUN chmod +x /usr/src/scripts/phpunit-install.sh
RUN set -x && \
    /usr/src/scripts/phpunit-install.sh


### Install Composer

COPY ./scripts/composer-install.sh /usr/src/scripts/
RUN chmod +x /usr/src/scripts/composer-install.sh
RUN set -x && \
    /usr/src/scripts/composer-install.sh


### Install Developer Tools

RUN set -x && \
    apt-get update && \
    apt-get install -y git mc vim


### Install PHP extension zip

RUN apt-get update && apt-get install -y \
        zip \
        unzip \
        zlib1g-dev \
    && docker-php-ext-install -j$(nproc) zip \
    && docker-php-ext-configure zip \
    && docker-php-ext-install -j$(nproc) zip


### Install entrypoint

COPY ./scripts/entrypoint.sh /usr/src/scripts/
RUN chmod +x /usr/src/scripts/entrypoint.sh


### Setup project

COPY . /usr/src/novaposhta-sdk
WORKDIR /usr/src/novaposhta-sdk

COPY ./scripts/novaposhat-sdk-install-deps.sh /usr/src/scripts/
RUN chmod +x /usr/src/scripts/novaposhat-sdk-install-deps.sh
RUN set -x /usr/src/scripts/novaposhat-sdk-install-deps.sh


CMD [ "/usr/src/scripts/entrypoint.sh" ]
