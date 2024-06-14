#! /bin/sh
#
#  This GIT installer for macOS is part 
#  of the installation package Moodle4Mac
# 
#  20230424 - Ralf Krause
#

echo
echo "+--------------------------------------------+"
echo "| GIT updater for your local Moodle server"
echo "+--------------------------------------------+"
echo

cd /Applications/MAMP/htdocs

if ! test -e moodle403/.git ; then
    ## the first git update must get everything including .git
    git clone --depth 1 -b master https://github.com/moodle/moodle.git moodle403-git
    if test -e moodle403-git ; then
        if test -e moodle403 ; then
            if test -e moodle403/config.php ; then
                cp moodle403/config.php moodle403-git/.
            fi
            DATE=`date +%Y%m%d-%H%M`
            mv moodle403 moodle403-$DATE
        fi
        mv moodle403-git moodle403
    fi
    ## the old folder can be deleted now
    ## if you want to do this please remove '##' from the following line
    ## rm -R moodle403-*
else
    ## the next git update only gets the new files
    cd moodle403
    git pull
    cd ..
fi
