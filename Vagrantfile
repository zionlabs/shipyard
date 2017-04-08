# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  config.vm.box = "ubuntu/trusty64"

  config.vm.provider :virtualbox do |vb|
      vb.name = "Shipyard"
  end

  config.vm.network "private_network", ip: "192.168.34.30"
  config.vm.hostname = "shipyard.dev"

  config.ssh.insert_key = true
  config.ssh.username = "vagrant"
  config.ssh.password = "vagrant"

  # config.vm.synced_folder ".", "/var/www"
  config.vm.synced_folder "./", "/var/www", owner: "www-data", group: "www-data", mount_options: ["dmode=775,fmode=664"]
  config.vm.provision :ansible do |ansible|
    ansible.verbose = "vvvv"
    ansible.playbook = "./ansible/site.yml"
    # ansible.inventory_path = "./ansible/hosts"
    # ansible.limit = "local"
  end
end
