FROM public.ecr.aws/docker/library/php:8.1.4-fpm

WORKDIR /var/www/

COPY composer.lock composer.json /var/www/

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    libzip-dev \
    libpq-dev  \
    libonig-dev \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    bash

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql pdo_pgsql mbstring zip exif pcntl bcmath gd sockets

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY composer.* /var/www/

RUN composer install --no-scripts --no-suggest --no-interaction --prefer-dist --optimize-autoloader

RUN touch /usr/local/etc/php/conf.d/uploads.ini && echo "upload_max_filesize = 1000M;" >> /usr/local/etc/php/conf.d/uploads.ini
RUN echo "post_max_size = 1000M;" >> /usr/local/etc/php/conf.d/uploads.ini 

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www
RUN chmod +x ./aws/entrypoint.sh

# Add Fargate server configuration
RUN mkdir -p /var/www/nginx/conf.d
RUN cp ./aws/default.conf /var/www/nginx/conf.d/default.conf

# Change current user to www
USER www

# Declare volumes so that ECS can pick it up
VOLUME ["/var/www/nginx/conf.d"]
VOLUME ["/var/www"]

# Expose port 9000 and start php-fpm server
EXPOSE 9000

CMD ["./aws/entrypoint.sh"]