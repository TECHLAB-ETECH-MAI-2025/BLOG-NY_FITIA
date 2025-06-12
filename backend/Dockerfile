FROM php:8.2-fpm

# Dépendances système nécessaires à Symfony et à PostgreSQL
RUN apt-get update && apt-get install -y \
    git unzip curl libpq-dev zip \
    && docker-php-ext-install pdo pdo_pgsql

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Créer le dossier de travail
WORKDIR /app

# Copier le projet Symfony dans le conteneur
COPY . .

# Installer les dépendances PHP Symfony
RUN composer install

# Exposer le port 8000
EXPOSE 8000

# Lancer le serveur PHP intégré
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
