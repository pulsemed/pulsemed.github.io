#!/bin/sh
wget -e robots=off --mirror -k --adjust-extension --no-cache --page-requisites -P /usr/share/nginx/html $URL; exit 0