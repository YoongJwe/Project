#!/bin/bash
network_type=$(mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Network' | grep $5 | gawk '{print $5}')
cp /StorageDB/CentOS-7-x86_64-GenericCloud-2003-sample-image.qcow2 /StorageDB/CentOS-7-x86_64-GenericCloud-2003-$1.qcow2
export LIBGUESTFS_BACKEND=direct
virt-customize -a /StorageDB/CentOS-7-x86_64-GenericCloud-2003-$1.qcow2 --hostname $1

if [[ $4 == "none" ]]
then
  virt-install -q --import --name $1 --vcpus $2 --ram $3 --graphics vnc --network network=$5 --disk /StorageDB/CentOS-7-x86_64-GenericCloud-2003-$1.qcow2 --noautoconsole --wait=1
  
  ip_addr=$(virsh net-dhcp-leases $5 | grep -w $1 | sort | tail -n 1 | gawk '{print$5}')
  
  random_port=$(($RANDOM% 10000+50000))
  
  mysql KVM_DB -h 192.168.2.200 -u root -proot<<EOF
  insert into Virtual_Machine values('$1', '$2 EA', '$3 MB', '$4', '$ip_addr ($random_port)', '$5 ($network_type)')
EOF
else
  qemu-img create -f raw -o size="$4"G /StorageDB/extra-disk-4-$1.img
  virt-install -q --import --name $1 --vcpus $2 --ram $3 --graphics vnc --network network=$5 --disk /StorageDB/CentOS-7-x86_64-GenericCloud-2003-$1.qcow2 --disk /StorageDB/extra-disk-4-$1.img --noautoconsole --wait=1 
  
  ip_addr=$(virsh net-dhcp-leases $5 | grep -w $1 | sort | tail -n 1 | gawk '{print$5}')
  
  random_port=$(($RANDOM% 10000+50000))

  mysql KVM_DB -h 192.168.2.200 -u root -proot<<EOF
  insert into Virtual_Machine values('$1', '$2 EA', '$3 MB', '$4 GB', '$ip_addr ($random_port)', '$5 ($network_type)')
EOF
fi
  ip_addr_cut=$(echo $ip_addr | rev | cut -c 4- | rev)
  iptables -t nat -A PREROUTING -p tcp -d 192.168.0.110 --dport $random_port -j DNAT --to-destination $ip_addr_cut:4200
