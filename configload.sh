configfile=$2
echo open 172.31.96.18 $1
 sleep 1
 echo -e "\r"
 echo  "enable"
 sleep 1
 echo -e "configure replace bootflash:blank.cfg force\r"
 sleep 2
 printf 'configure replace bootflash:ine/%s force\n' "${configfile}"
 sleep 2
