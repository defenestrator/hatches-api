#!/bin/bash
# Check status of a service and either remove or install it.
# The colors!
red=$'\e[31m'
grn=$'\e[32m'
red_bold=$'\e[1;31m'
yel=$'\e[33m'
blu=$'\e[34m'
mag=$'\e[35m'
cyn=$'\e[36m'
end=$'\e[0m'
# The functions
function check() {
ACTION=$1
SERVICE=$2
echo "SERVICE is ${SERVICE}"
echo "${grn}We are going to ${ACTION} ${SERVICE} ${end}"
if [ "$ACTION" == "remove" ]; then
    if ps ax | grep -v grep | grep "${SERVICE}" > /dev/null
        then
            echo "${red_bold} You're about to nuke the ${1} service, are you darn sure you
            want to do that?${end} (yes/no) "
            read CONSENT
            if [ "$CONSENT" == "yes" ]
            then
                apt-get ${ACTION} ${SERVICE} -y
                echo "${red_bold}Removing ${SERVICE}, we apparently don't need it ${end}"
            else
                echo "${grn}ok nevermind, ${SERVICE} shall live another day ${end}"
            fi
    else
        echo "${SERVICE} is not running, proceed"
    fi
elif [ "$ACTION" == "install" ];
    then
        if ps ax | grep -v grep | grep ${SERVICE} > /dev/null
            then
                echo "${grn}$SERVICE is already running, w00t${end}"
            else
                apt-get ${ACTION} ${SERVICE} -y
                echo "Installing $SERVICE, because you'll probably want it later."
        fi
else
    echo "Invalid action, try using install or remove instead of '$ACTION'"
fi
service "$SERVICE" status
}
check ${1} ${2}

exit