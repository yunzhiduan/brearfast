#!/bin/bash
cd /data/www/brearfast/brearfast/
git checkout my
git add .
git commit -a -m 'init'
git checkout develop
git merge my
git push origin develop
git checkout my
echo '提交成功'
