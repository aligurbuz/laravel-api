#!/bin/bash
sudo chmod +x docker-install.sh
./docker-install.sh
sudo curl -L "https://github.com/docker/compose/releases/download/1.27.4/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose
docker-compose --version
sudo docker-compose up -d
sudo docker exec -it php-app php /var/www/html/app/setup.php "$1" "$2"
