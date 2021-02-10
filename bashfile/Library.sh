#!bin/bash
temp=$(mktemp -t temp.XXXXXX)
temp_1=$(mktemp -t temp_1.XXXXXX)
temp_2=$(mktemp -t temp_2.XXXXXX)
temp_3=$(mktemp -t temp_3.XXXXXX)
temp_4=$(mktemp -t temp_4.XXXXXX)
temp_5=$(mktemp -t temp_5.XXXXXX)
temp_6=$(mktemp -t temp_6.XXXXXX)
temp_7=$(mktemp -t temp_7.XXXXXX)
temp_8=$(mktemp -t temp_8.XXXXXX)
temp_9=$(mktemp -t temp_9.XXXXXX)
temp_10=$(mktemp -t temp_10.XXXXXX)
temp_11=$(mktemp -t temp_11.XXXXXX)
temp_12=$(mktemp -t temp_12.XXXXXX)

Start_Program() {
	dialog --title "KVM_Manager" --menu "실행할 항목을 선택하세요." 20 40 10 \
	1 "가상 네트워크 매니저" \
	2 "가상 머신 매니저" \
	0 "종료" 2>$temp
}

Virtual_Network() {
	dialog --title "KVM_Manager" --menu "실행할 항목을 선택하세요." 20 40 10 \
	1 "가상 네트워크 생성" \
	2 "가상 네트워크 삭제" \
	3 "가상 네트워크 목록" \
	4 "이전 단계로" \
	0 "종료" 2>$temp
}

Make_Virtual_Network() {
	dialog --title "KVM_Manager" --menu "실행할 항목을 선택하세요." 20 40 10 \
	1 "NAT 네트워크 생성" \
	2 "Isolated 네트워크 생성" \
	3 "이전 단계로" \
	0 "종료" 2>$temp
}

Make_NAT_Network() {
	dialog --title "KVM Manager" --inputbox "사용할 네트워크 이름을 입력하세요." 20 40 2>$temp_1
	network_name=$(cat $temp_1)
	if [[ $network_name == "" ]]
	then
		dialog --title "Canceled" --msgbox "사용자 입력이 없어 네트워크 생성이 취소되었습니다." 20 40
  else
		dialog --title "KVM Manager" --inputbox "사용할 브릿지 이름을 입력하세요." 20 40 2>$temp_2
		bridge_name=$(cat $temp_2)
		if [[ $bridge_name == "" ]]
		then
			dialog --title "Canceled" --msgbox "사용자 입력이 없어 네트워크 생성이 취소되었습니다." 20 40
		else
			dialog --title "KVM Manager" --inputbox "사용할 IP 주소를 입력하세요.
현재 버전에서는 255.255.255.0(/24) 대역의 네트워크 생성만 지원하며, 브릿지는 해당 대역의 첫 주소(.1)를 사용해야만 합니다.

[입력 예시]
- 192.168.3.1
- 172.16.2.1" 20 40 2>$temp_3
			ip_address=$(cat $temp_3)
			check_ip=$(echo $ip_address | gawk '/^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}1$/{print}')
			if [[ $ip_address == "" ]]
			then
				dialog --title "Canceled" --msgbox "사용자 입력이 없어 네트워크 생성이 취소되었습니다." 20 40
			else
				while [[ $ip_address != $check_ip ]]
				do
					dialog --title "Error" --inputbox "사용할 IP 주소를 바르게 입력하지 않았습니다. 형식에 맞게 IP 주소를 다시 입력하세요." 20 40 2>$temp_3
					ip_address=$(cat $temp_3)
					check_ip=$(echo $ip_address | gawk '/^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}1$/{print}')
				done
				if [[ $ip_address == "" ]]
				then
					dialog --title "Canceled" --msgbox "사용자 입력이 없어 네트워크 생성이 취소되었습니다." 20 40
				else
					check_1=$(mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Network' | grep -x $network_name)
					check_2=$(mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Network' | grep $bridge_name)
					check_3=$(mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Network' | grep $ip_address)
					if [[ -z $check_1 && -z $check_2 && -z $check_3 ]]
					then
						ip_start=$(echo $ip_address | rev | cut -c 2- | rev)2
						ip_end=$(echo $ip_address | rev | cut -c 2- | rev)254
						virsh net-dumpxml default | grep -v uuid | grep -v mac | sed "s/default/$network_name/g" | sed "s/virbr0/$bridge_name/g" | sed "s/192.168.122.1/$ip_address/g" | sed "s/192.168.122.2/$ip_start/g" | sed "s/192.168.122.254/$ip_end/g" > $network_name.xml
						virsh net-define $network_name.xml
						virsh net-start $network_name
						virsh net-autostart $network_name
						rm -rf $network_name.xml
						uuid=$(virsh net-info $network_name | gawk '{print $2}' | sed -n 2p)
		
						mysql KVM_DB -h 192.168.2.200 -u root -proot<<EOF
						insert into Virtual_Network values('$network_name', '$uuid', '$bridge_name', '$ip_address', 'NAT')
EOF
						dialog --title "Created Successfully" --msgbox "가상 네트워크 생성이 완료되었고, DB에 등록되었습니다. 초기 화면으로 돌아갑니다." 20 40
					else
						dialog --title "Error" --msgbox "네트워크 이름 또는 브릿지 이름이 중복되거나 사용하려는 IP 주소가 이미 사용중입니다. 네트워크 정보를 다시 입력해 주세요." 20 40
					fi
  			fi
			fi
		fi
	fi
}

Make_Isolated_Network() {
	dialog --title "KVM Manager" --inputbox "사용할 네트워크 이름을 입력하세요." 20 40 2>$temp_1
	network_name=$(cat $temp_1)
	if [[ $network_name == "" ]]
	then
		dialog --title "Canceled" --msgbox "사용자 입력이 없어 네트워크 생성이 취소되었습니다." 20 40
  else
		dialog --title "KVM Manager" --inputbox "사용할 브릿지 이름을 입력하세요." 20 40 2>$temp_2
		bridge_name=$(cat $temp_2)
		if [[ $bridge_name == "" ]]
		then
			dialog --title "Canceled" --msgbox "사용자 입력이 없어 네트워크 생성이 취소되었습니다." 20 40
		else
			dialog --title "KVM Manager" --inputbox "사용할 IP 주소를 입력하세요.
현재 버전에서는 255.255.255.0(/24) 대역의 네트워크 생성만 지원하며, 브릿지는 해당 대역의 첫 주소(.1)를 사용해야만 합니다.

[입력 예시]
- 192.168.3.1
- 172.16.2.1" 20 40 2>$temp_3
			ip_address=$(cat $temp_3)
			check_ip=$(echo $ip_address | gawk '/^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}1$/{print}')
			if [[ $ip_address == "" ]]
			then
				dialog --title "Canceled" --msgbox "사용자 입력이 없어 네트워크 생성이 취소되었습니다." 20 40
			else
				while [[ $ip_address != $check_ip ]]
				do
					dialog --title "Error" --inputbox "사용할 IP 주소를 바르게 입력하지 않았습니다. 형식에 맞게 IP 주소를 다시 입력하세요." 20 40 2>$temp_3
					ip_address=$(cat $temp_3)
					check_ip=$(echo $ip_address | gawk '/^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}1$/{print}')
				done
				if [[ $ip_address == "" ]]
				then
					dialog --title "Canceled" --msgbox "사용자 입력이 없어 네트워크 생성이 취소되었습니다." 20 40
				else
					check_1=$(mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Network' | grep $network_name)
					check_2=$(mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Network' | grep $bridge_name)
					check_3=$(mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Network' | grep $ip_address)
					if [[ -z $check_1 && -z $check_2 && -z $check_3 ]]
					then
						ip_start=$(echo $ip_address | rev | cut -c 2- | rev)2
						ip_end=$(echo $ip_address | rev | cut -c 2- | rev)254
						virsh net-dumpxml default | grep -v uuid | grep -v mac | sed '3,7d' | sed "s/default/$network_name/g" | sed "s/virbr0/$bridge_name/g" | sed "s/192.168.122.1/$ip_address/g" | sed "s/192.168.122.2/$ip_start/g" | sed "s/192.168.122.254/$ip_end/g" > $network_name.xml
						virsh net-define $network_name.xml
						virsh net-start $network_name
						virsh net-autostart $network_name
						rm -rf $network_name.xml
						uuid=$(virsh net-info $network_name | gawk '{print $2}' | sed -n 2p)
		
						mysql KVM_DB -h 192.168.2.200 -u root -proot<<EOF
						insert into Virtual_Network values('$network_name', '$uuid', '$bridge_name', '$ip_address', 'ISO')
EOF
						dialog --title "Created Successfully" --msgbox "가상 네트워크 생성이 완료되었고, DB에 등록되었습니다. 초기 화면으로 돌아갑니다." 20 40
					else
						dialog --title "Error" --msgbox "네트워크 이름 또는 브릿지 이름이 중복되거나 사용하려는 IP 주소가 이미 사용중입니다. 네트워크 정보를 다시 입력해 주세요." 20 40
					fi
  			fi
			fi
		fi
	fi
}

Delete_Virtual_Network() {
	mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Network' | grep -v NAME>$temp
	temp_4=$(nl $temp | gawk '{print $1". [ "$2" ] "$5" / "$6}')
	dialog --title "KVM Manager" --inputbox "삭제할 [ ] 안의 네트워크 이름을 직접 입력하여 삭제합니다. 이전 화면으로 돌아가길 원할 경우 아래 항목을 빈 칸으로 제출합니다.

$temp_4" 20 40 2>$temp_5
	delete_network=$(cat $temp_5)
	check=$(echo $temp_4 | grep $delete_network)
	if [[ -z $delete_network || $delete_network == "default" || -z $check ]]
  then
    dialog --title "Error" --msgbox "입력한 가상 네트워크 정보가 없거나 [ default ] 네트워크는 삭제할 수 없습니다. 이전 화면으로 돌아갑니다." 20 40
	else
		virsh net-destroy $delete_network
		virsh net-undefine $delete_network
		mysql KVM_DB -h 192.168.2.200 -u root -proot<<EOF
		delete from Virtual_Network where NAME='$delete_network'
EOF
		dialog --title "Deleted Successfully" --msgbox "입력한 가상 네트워크를 삭제하였습니다. DB에서도 제거됩니다. 이전 메뉴로 돌아갑니다." 20 40
	fi
}

View_Network_List() {
	mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Network' -t>$temp
	dialog --title "Virtau Network List" --textbox $temp 20 100
}

Virtual_Machine() {
	dialog --title "KVM_Manager" --menu "실행할 항목을 선택하세요." 20 40 10 \
	1 "가상 머신 생성" \
	2 "가상 머신 삭제" \
	3 "가상 머신 목록" \
	4 "이전 단계로" \
	0 "종료" 2>$temp
}

Make_Virtual_Machine() {
	dialog --title "KVM_Manager" --menu "실행할 항목을 선택하세요." 20 40 10 \
	1 "CentOS" \
	2 "Ubuntu" \
	3 "Fedora" \
	4 "이전 단계로" \
	0 "종료" 2>$temp
}

Make_CentOS_Machine() {
	dialog --title "KVM Manager" --inputbox "설치할 가상 머신의 이름을 입력하세요." 20 40 2>$temp_6
	name=$(cat $temp_6)
	if [[ $name == "" ]]
	then
		dialog --title "Canceled" --msgbox "사용자 입력이 없어 가상 머신 생성이 취소되었습니다." 20 40
  else
		dialog --title "KVM Manager" --inputbox "가상 머신에서 사용할 CPU 개수를 입력하세요. 현재 버전은 1개 생성만을 지원합니다." 20 40 2>$temp_7
		cpu=$(cat $temp_7)
		if [[ $cpu == "" ]]
		then
			dialog --title "Canceled" --msgbox "사용자 입력이 없어 가상 머신 생성이 취소되었습니다." 20 40
		else
			dialog --title "KVM Manager" --inputbox "가상 머신에서 사용할 메모리 크기를 입력하세요(단위: GB). 현재 버전은 1GB 메모리 생성만을 지원합니다." 20 40 2>$temp_8
			ram=$(cat $temp_8)
			if [[ $ram == "" ]]
			then
				dialog --title "Canceled" --msgbox "사용자 입력이 없어 가상 머신 생성이 취소되었습니다." 20 40
			else
				dialog --title "KVM Manager" --yesno "추가 디스크를 사용하시겠습니까?" 20 40
				if [[ $? = "0" ]]	
				then
  				dialog --title "KVM Manager" --inputbox "추가할 디스크의 용량을 입력하세요(단위: GB). 추가 디스크의 용량은 최대 5GB까지 지원합니다." 20 40 2>$temp_9
    			disk=$(cat $temp_9)			
  				while [[ $disk -lt 1 || $disk -gt 5 ]]	
  				do
    				dialog --title "KVM Manager" --msgbox "디스크 용량을 잘못 입력했습니다. 1~5 사이의 정수를 입력하세요." 20 40
    				dialog --title "KVM Manager" --inputbox "추가할 디스크의 용량을 입력하세요(단위: GB). 추가 디스크의 용량은 최대 5GB까지 지원합니다." 20 40 2>$temp_9
    				disk=$(cat $temp_9)
  				done
					disk="$disk GB"
				else
  				disk="없음"
				fi
				mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Network' | grep -v NAME>$temp_10
				network_list=$(nl $temp_10 | gawk '{print $1". [ "$2" ] " $5}')
				dialog --title "KVM Manager" --inputbox "아래 목록 중 연결할 네트워크 이름을 직접 입력하세요.

$network_list" 20 40 2>$temp_10
				ram_mb=$[$ram*1024]
				network=$(cat $temp_10)
				check=$(mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Machine' | grep $name)
				check_1=$(mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Network' | grep $network)
				network_type=$(mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Network' | grep $network | gawk '{print $5}')
				bridge_name=$(mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Network' | grep $network | gawk '{print $3}')
				if [[ $check == "" && $check_1 != "" && $cpu == "1" && $ram_mb == "1024" ]]
				then
	  			dialog --title "KVM Manager" --yesno \
	"아래 사양으로 새로운 머신이 생성됩니다.

	# NAME: $name
	# CPU: $cpu CPU
	# RAM: $ram_mb MB
	# 추가 디스크: $disk
	# 연결할 네트워크: $network
	# 네트워크 브릿지: $bridge_name ($network_type)

	이대로 설치를 진행하시겠습니까?" 20 40
  				if [[ $? = "0" ]]
  				then
    				clear
    				echo "기본 이미지 복사중..."
    				cp /StorageDB/CentOS-7-x86_64-GenericCloud-2003.qcow2 /StorageDB/CentOS-7-x86_64-GenericCloud-2003-$name.qcow2
    				echo "이미지 커스텀중..."
    				virt-customize -a /StorageDB/CentOS-7-x86_64-GenericCloud-2003-$name.qcow2 --root-password password:root --hostname $name
    				echo "가상머신 생성중..." 
    				disk=$(cat $temp_9)
    				if [[ $disk == "" ]]
    				then
      				virt-install -q --import --name $name --vcpus $cpu --ram $ram_mb --graphics vnc --network network=$network --disk /StorageDB/CentOS-7-x86_64-GenericCloud-2003-$name.qcow2 --noautoconsole --wait=1
      				disk="none"
    				else
      				qemu-img create -f raw -o size="$disk"G /StorageDB/extra-disk-4-$name.img
      				virt-install -q --import --name $name --vcpus $cpu --ram $ram_mb --graphics vnc --network network=$network --disk /StorageDB/CentOS-7-x86_64-GenericCloud-2003-$name.qcow2 --disk /StorageDB/extra-disk-4-$name.img --noautoconsole --wait=1
      				disk="$disk GB" 
						fi
						ip_addr=$(virsh net-dhcp-leases $network | grep -w $name | sort | tail -n 1 | gawk '{print$5}')
						mysql KVM_DB -h 192.168.2.200 -u root -proot<<EOF
						insert into Virtual_Machine values('$name', '$cpu EA', '$ram_mb MB', '$disk', '$ip_addr', '$network ($network_type)')
EOF
						dialog --title "Created Successfully" --msgbox "가상 머신 생성이 완료되었고, DB에 등록되었습니다. 이전 화면으로 돌아갑니다." 20 40
					else
   					dialog --title "Canceled Successfully" --msgbox "생성을 취소 하였습니다. 이전 화면으로 돌아갑니다." 20 40
					fi
  			else
 					dialog --title "Error" --msgbox "입력하신 가상 머신의 이름은 현재 DB에서 사용중이거나 가상 머신 생성 정보가 올바르게 입력되지 않아 머신 생성에 실패했습니다. 또한 사용하고자 하는 네트워크 정보가 DB에 없을 수도 있습니다. 이는 현재 프로그램 버전에서 지원 가능한 가상 머신의 사양 이상의 값을 입력하였거나 입력 값을 비워둔 채로 다음 단계로 진행한 것이 원인일 수 있습니다. 설치 가이드에 따라 가상 머신 정보를 올바르게 입력하여 재시도해 주세요. 이전 화면으로 돌아갑니다." 20 40
				fi			
			fi		
		fi			
	fi
}

Make_Ubuntu_Machine() {
	dialog --title "KVM_Manager" --msgbox "Ubuntu 가상 머신 생성은 현재 서비스 준비중입니다." 20 40
}

Make_Fedora_Machine() {
	dialog --title "KVM_Manager" --msgbox "Fedora 가상 머신 생성은 현재 서비스 준비중입니다." 20 40
}

Delete_Virtual_Machine() {
	mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Machine' | grep -v NAME>$temp_11
	temp_12=$(nl $temp_11 | gawk '{print $1". [ "$2" ]"}')
	if [[ $temp_12 == "" ]]
	then
		dialog --title "KVM Manager" --msgbox "현재 설치된 가상 머신이 없습니다." 20 40
	else
		dialog --title "KVM Manager" --inputbox "삭제할 [ ] 안의 가상 머신 이름을 직접 입력하여 삭제할 수 있습니다.
$temp_12" 20 40 2>$temp_2
		delete_machine=$(cat $temp_2)
		check=$(echo $temp_12 | grep $delete_machine)
		if [[ $delete_machine == "" || $check == "" ]]
		then
    	dialog --title "Error" --msgbox "입력한 가상 머신 정보가 DB에 없거나 바른 입력을 하지 않았습니다. 이전 화면으로 돌아갑니다." 20 40
		else
			virsh destroy $delete_machine
			virsh undefine $delete_machine
			rm -rf /StorageDB/CentOS-7-x86_64-GenericCloud-2003-$delete_machine.qcow2
			rm -rf /StorageDB/extra-disk-4-$delete_machine.img
			mysql KVM_DB -h 192.168.2.200 -u root -proot<<EOF
			delete from Virtual_Machine where NAME='$delete_machine'
EOF
			dialog --title "Deleted Successfully" --msgbox "가상 머신 삭제를 완료하였습니다. 처음 화면으로 돌아갑니다." 20 40
		fi
  fi
}

View_Machine_List() {
	mysql KVM_DB -h 192.168.2.200 -u root -proot -e 'select * from Virtual_Machine' -t>$temp_5
	dialog --title "Virtual Machine List" --textbox $temp_5 20 100
}
