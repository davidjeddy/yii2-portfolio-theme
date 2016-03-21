#!/usr/bin/bash
if test -d ./frontend/web/themes; then
    echo 'Symlink for yii2-portfolio-theme already exists ';
else
    ln -sfn ../../vendor/davidjeddy/yii2-portfolio-theme/src ./frontend/web/theme;
fi
