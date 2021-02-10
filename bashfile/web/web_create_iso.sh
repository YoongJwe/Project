#!/bin/bash
ip_start=$(echo $3 | rev | cut -c 2- | rev)2
ip_end=$(echo $3 | rev | cut -c 2- | rev)254
virsh net-dumpxml default | grep -v uuid | grep -v mac | sed '3,7d' | sed "s/default/$1/g" | sed "s/virbr0/$2/g" | sed "s/192.168.122.1/$3/g" | sed "s/192.168.122.2/$ip_start/g" | sed "s/192.168.122.254/$ip_end/g" > $1.xml
virsh net-define $1.xml
virsh net-start $1
virsh net-autostart $1
rm -rf $1.xml
uuid=$(virsh net-info $1 | gawk '{print $2}' | sed -n 2p)
mysql KVM_DB -h 192.168.2.200 -u root -proot<<EOF
insert into Virtual_Network values('$1', '$uuid', '$2', '$3', 'ISO')
EOF
