FROM php:8.1-apache

# Установка расширений PHP
RUN docker-php-ext-install pdo pdo_mysql

# Установка Composer (если нужен)
COPY --from=composer /usr/bin/composer /usr/bin/composer

# Копирование кода (опционально, для начальной загрузки)
# COPY . /var/www/html/

# Установка рабочей директории
WORKDIR /var/www/html
