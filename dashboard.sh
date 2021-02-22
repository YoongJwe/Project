#!/bin/bash


# GET MEMORY 
free -m > tmp.txt
sed '/Mem/!d' ./tmp.txt > memory.txt

## used memory
memUsed=$(awk '{print $3}' ./memory.txt)

## total memory
memTotal=$(awk '{print $2}' ./memory.txt)

## available memory
memAvailable=$(awk '{print $7}' ./memory.txt)

##memory used percentage
realUsed=$[$memTotal-$memAvailable]
memPer=`echo "scale=2;$realUsed/$memTotal*100"|bc`



# GET CPU
## used cpu percentage
cpuPer=$(mpstat | tail -1 | awk '{print 100-$NF}')


# GET DISK
df -P | grep -v ^Filesystem > disk.txt

## total disk size per GigaByte
diskTotal=$(awk '{sum += $2} END {print sum=int(sum/1024/1024*100+0.5)/100}' ./disk.txt)

## used disk size per GigaByte
diskUsed=$(awk '{sum += $3} END {print sum=int(sum/1024/1024*100+0.5)/100}' ./disk.txt)

## used disk percentage per GigaByte
diskPer=`echo "scale=2; $diskUsed/$diskTotal*100" | bc`

mysql KVM_DB -h 192.168.2.200 -u root -proot<<EOF
insert into cpu (srv, total, used, per) values ('kvm', 100, $cpuPer, $cpuPer);
insert into memory (srv, total, used, per) values ('kvm', $memTotal , $memUsed, $memPer);
insert into disk (srv, total, used, per) values ('kvm', $diskTotal , $diskUsed, $diskPer);
EOF

echo "{\"memory\":[{\"memoryTotal\":$memTotal, \"memoryUsed\":$memUsed, \"memoryPer\":$memPer}],\"cpu\":[{ \"cpuTotal\":100,\"cpuUsed\":$cpuPer,\"cpuPer\":$cpuPer}],\"disk\":[{ \"diskTotal\":$diskTotal,\"diskUsed\":$diskUsed,\"diskPer\":$diskPer }]}" > /var/www/html/monitering.json


