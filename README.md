# Shipyard Site

Let's get this project setup!

## Installs & Downloads

1. Download vagrant `https://www.vagrantup.com/downloads.html`

2. Install ansible `https://github.com/ansible/ansible`  `pip install ansible`

4. Download Sequel Pro `https://sequelpro.com/download`

3. `npm install --global gulp-cl`

## Setup Local Dev Environment 

1. `sudo nano /etc/hosts`

2. While in hosts file add the following: `192.168.34.30  shipyard.dev`

3. Go into Sequel Pro and create database `shipyard_dev` for login info go to `wp-config.development.php`

## Run Project Locally 

1. In terminal run `vagrant up` 

2. To exit project `vagrant halt`
