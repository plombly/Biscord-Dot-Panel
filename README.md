# Biscord Dot Panel

Biscord Dot is an all inclusive bot, with MySQL database support, passwords, music, a web panel, and much more!

/***WARNING***/ **THIS BOT DOES CHAT LOGGING** /***WARNING***/

Follow the install instructions below, to get started!

1. sudo apt-get install -y php7.2-fpm git nginx

2. mkdir -p /var/www/biscord; cd /var/www/biscord

3. git clone https://github.com/plombly/Biscord-Dot-Panel.git

4. mv Biscord-Dot-Panel/* ./

5. rm Biscord-Dot-Panel/ -r

6. chown -R www-data: ./; chmod -R 755 ./

7. nano biscord.conf

8. cp biscord.conf /etc/nginx/sites-available/

9. ln -s /etc/nginx/sites-available/biscord.conf /etc/nginx/sites-enabled/

10. nginx -t (make sure it looks like this: ***nginx: the configuration file /etc/nginx/nginx.conf syntax is ok / nginx: configuration file /etc/nginx/nginx.conf test is successful***)

11. systemctl reload nginx

***You can now go to the domain name that you set in "biscord.conf"***
