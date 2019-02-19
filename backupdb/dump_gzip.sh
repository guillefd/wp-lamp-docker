#!/bin/bash
#
prefix=$(date +"%m-%d_%H-%M__")
dbname=wpdb
echo ""
echo "[Dump DB: start]"
echo " dbname: $dbname"
echo " prefix: $prefix"
echo " dumping ..."
#
# GZIPPED
mysqldump -uroot -proot $dbname | gzip > /docker-custom-backupdb/$prefix$dbname".sql.gz"
#
if [ "$?" -eq 0 ]
then
    echo "[OK success]"
else
    echo "[Error: $?]"
fi
echo "[Dump DB: end]"
echo ""
#