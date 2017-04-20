#!/bin/bash
for port in {2001..2010}
 do
 /opt/configload.sh $port $1| telnet
done
