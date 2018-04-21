#!/bin/bash
cd /data/www/breakfast/brearfast
/usr/bin/git pull origin develop 2>>error.log
echo '更新成功'
