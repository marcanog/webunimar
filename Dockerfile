FROM ubuntu:20.04
MAINTAINER Silvestre Cardenas <sjcv1992@gmail.com>
WORKDIR /var/www/html
ENV DEBIAN_FRONTEND noninteractive
ENV TZ=UTC
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN apt-get update \
    && apt-get install -y gnupg gosu curl ca-certificates zip unzip git supervisor nano libcap2-bin libpng-dev \
    && mkdir -p ~/.gnupg \
    && chmod 600 ~/.gnupg \
    && echo "disable-ipv6" >> ~/.gnupg/dirmngr.conf \
    && apt-key adv --homedir ~/.gnupg --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys E5267A6C \
    && apt-key adv --homedir ~/.gnupg --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys C300EE8C \
    && echo "deb http://ppa.launchpad.net/ondrej/php/ubuntu focal fossa" > /etc/apt/sources.list.d/ppa_ondrej_php.list \
    && apt-get update \
    && apt-get install -y php7.4-cli php7.4-dev \
       php7.4-pgsql php7.4-sqlite3 php7.4-gd \
       php7.4-curl php7.4-memcached \
       php7.4-imap php7.4-mysql php7.4-mbstring \
       php7.4-xml php7.4-zip php7.4-bcmath php7.4-soap \
       php7.4-intl php7.4-readline php7.4-pcov \
       php7.4-msgpack php7.4-igbinary php7.4-ldap \
       php7.4-redis php7.4-xdebug \
    && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer \
    && apt-get install -y mysql-client \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
RUN setcap "cap_net_bind_service=+ep" /usr/bin/php7.4
RUN groupadd --force -g 1000 laravel
RUN useradd -ms /bin/bash --no-user-group -g 1000 -u 1337 laravel
COPY docker/start-container /usr/local/bin/start-container
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/php.ini /etc/php/7.4/cli/conf.d/99-laravel.ini
RUN chmod +x /usr/local/bin/start-container
COPY ./ /var/www/html
RUN chmod +x -R /var/www/html
RUN mkdir -p vendor
# Run without cache below
ARG CACHEBUST=1
RUN chmod +x -R vendor/
RUN composer install
EXPOSE 80
ENTRYPOINT ["start-container"]
