FROM dunglas/frankenphp:php8.4

COPY . /app
WORKDIR /app

EXPOSE 80