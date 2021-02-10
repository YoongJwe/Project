#!/bin/bash
virsh net-destroy $1
virsh net-undefine $1

del_net=$(mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Network' -t | grep -w $1 | gawk '{print $8}' | rev | cut -c 2- | rev)0/24

iptables -D FORWARD -m state -d $del_net --state NEW,RELATED,ESTABLISHED -j ACCEPT

mysql KVM_DB -h 192.168.2.200 -u root -proot<<EOF
delete from Virtual_Network where NAME='$1'
EOF

