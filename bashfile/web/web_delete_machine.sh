#!bin/bash
virsh destroy $1
virsh undefine $1
rm -rf /StorageDB/CentOS-7-x86_64-GenericCloud-2003-$1.qcow2
rm -rf /StorageDB/extra-disk-4-$1.img

del_ip=$(mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Machine' -t | grep $1 | gawk '{print $12}' | rev | cut -c 4- | rev
)

del_port=$(mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Machine' -t | grep $1 | gawk '{print $13}' | rev | cut -c 2- | rev | cut -c 2-)

iptables -t nat -D PREROUTING -p tcp -d 192.168.0.110 --dport $del_port -j DNAT --to-destination $del_ip:4200

mysql KVM_DB -h 192.168.2.200 -u root -proot<<EOF
delete from Virtual_Machine where NAME='$1'
EOF
