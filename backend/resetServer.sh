#!/bin/bash

shopt -s extglob
cd /var/HOSTINKEY/data
sudo rm -rf !(hostinkey.conf)
shopt -u extglob