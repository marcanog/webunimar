web: vendor/bin/heroku-php-apache2 public/

// apache_app.conf
DirectoryIndex index.php index.html index.htm

RewriteEngine On
RewriteCond %{HTTPS} !=on
RewriteCond %{HTTP:X-Forwarded-Proto} !https
RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=307]
