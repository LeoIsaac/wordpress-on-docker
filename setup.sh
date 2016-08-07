#!/bin/sh

script_dir=$(cd $(dirname ${BASH_SOURCE:-$0}); pwd)

checkcmd="wget unzip docker docker-compose"
for cmd in $checkcmd; do
    which $cmd 1>/dev/null 2>/dev/null
    if [ $? != 0 ]; then
        echo "$cmd is not found. Please install $cmd"
        exit
    fi
done

if [ -e "wordpress" ]; then
    echo "Directory wordpress is already exist"
    exit
fi

wget https://ja.wordpress.org/latest-ja.zip
unzip latest-ja.zip
rm latest-ja.zip
mv wp-config.php wordpress/

docker-compose up -d
docker exec -it wordpress_web chown -R www-data:www-data /var/www/html
