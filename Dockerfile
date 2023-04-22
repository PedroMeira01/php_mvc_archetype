FROM php:7.4-apache

COPY . /var/www/html/

# Atualiza os pacotes do sistema
RUN apt-get update 

# Habilita o mod_rewrite do Apache
RUN a2enmod rewrite

# Instala as dependências necessárias para o Composer
RUN apt-get install -y git unzip

# Baixa e instala o Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('sha384', 'composer-setup.php') === trim(file_get_contents('https://composer.github.io/installer.sig'))) { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm composer-setup.php

# Define o diretório de trabalho do contêiner
WORKDIR /var/www/html

RUN composer install && \
    composer dump-autoload