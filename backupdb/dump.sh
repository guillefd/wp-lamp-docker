#!/bin/bash
#
prefix=$(date +"%m-%d_%H-%M__")
dbname=wpdb
echo ""
echo "[Dump DB: start]"
echo " dbname: $dbname"
echo " prefix: $prefix"
echo " dumping ..."
# NO GZIP
mysqldump -uroot -proot $dbname > /docker-custom-backupdb/$prefix$dbname".sql"
#
if [ "$?" -eq 0 ]
then
    echo "[OK success]"
else
    echo "[Error: $?]"
fi
echo "[Dump DB: end]"
echo ""
