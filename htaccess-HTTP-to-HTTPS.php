<!--
//2021-03-13
//www.seckin.co
//Seçkin Durası 
//https://github.com/durasi/Seckin-PHP-Library
-->

RewriteEngine On
RewriteBase /
RewriteCond %{HTTPS} off
#RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
#RewriteCond %{HTTP_HOST} !^www\.seckin\.co [NC] 
RewriteRule ^(.*)$ https://www.seckin.co/$1 [R=301,L]