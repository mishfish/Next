// Create containers and up them! 

sudo apt install docker-compose
sudo groupadd docker
sudo usermod -aG docker estidea
sudo apt-get update
sudo apt-key adv --keyserver hkp://p80.pool.sks-keyservers.net:80 --recv-keys 58118E89F3A912897C070ADBF76221572C52609D
sudo apt-add-repository 'deb https://apt.dockerproject.org/repo ubuntu-xenial main'
sudo apt-get update
apt-cache policy docker-engine
sudo apt-get install -y docker-engine
service mysql stop
sudo /etc/init.d/apache2 stop
docker-compose up -d

// Create the user
php app/bin/console fos:user:create
php app/bin/console fos:user:promote estidea ROLE_ADMIN\

// How to detect PORTs
sudo netstat -tpln | grep "tcp"

// STOP nginx
sudo service nginx stop


