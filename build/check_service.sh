#!/bin/bash
function check() {
SERVICE=$1
ACTION=$2
echo "SERVICE is ${SERVICE}"
echo "We are going to ${ACTION} ${SERVICE}"
if [ "$ACTION" == "remove" ]; then
    if ps ax | grep -v grep | grep "${SERVICE}" > /dev/null
        then
            sudo apt-get ${ACTION} ${SERVICE} -y
            echo "Uninstalling ${SERVICE}, we apparently don't need it."
    else
        echo "${SERVICE} is not running, proceed"
    fi
elif [ "$ACTION" == "install" ];
    then
        if ps ax | grep -v grep | grep "$SERVICE" > /dev/null
            then
                echo "$SERVICE is already running, w00t"
            else
                apt-get ${ACTION} ${SERVICE} -y
                echo "Installing $SERVICE, because you'll probably want it later."
        fi
else
    echo "Invalid action, try using install or remove instead of '$ACTION'"
fi
service "$SERVICE" status
}
check ${2} ${1}
