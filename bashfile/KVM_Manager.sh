#!/bin/bash
. ./Library.sh
while [ true ]
do
Start_Program
select=$(cat $temp)
case $select in
1)
	while [ true ]
	do
	Virtual_Network
	select=$(cat $temp)
	case $select in
	1)
		while [ true ]
		do
		Make_Virtual_Network
		select=$(cat $temp)
		case $select in
		1)
			Make_NAT_Network;;
		2)
			Make_Isolated_Network;;
		3)
			break;;
		0|*)
			clear
			exit;;
		esac
		done;;
	2)
		Delete_Virtual_Network;;
	3)
		View_Network_List;;
	4)
		break;;
	0|*)
		clear
		exit;;
	esac
	done;;
2)
	while [ true ]
	do
	Virtual_Machine
	select=$(cat $temp)
	case $select in
	1)
		while [ true ]
		do
		Make_Virtual_Machine
		select=$(cat $temp)
		case $select in
		1)
			Make_CentOS_Machine;;
		2)
			Make_Ubuntu_Machine;;
		3)
			Make_Fedora_Machine;;
		4)
			break;;
		0|*)
			clear
			exit;;
		esac
		done;;
	2)
		Delete_Virtual_Machine;;
	3)
		View_Machine_List;;
	4)
		break;;
	0|*)
		clear
		exit;;
	esac
	done;;
0|*)
	break;;
esac
done
clear
