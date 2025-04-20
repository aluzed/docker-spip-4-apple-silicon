#!/bin/bash

mkdir ./spip

brew install wget

wget https://files.spip.net/spip/archives/spip-v4.4.3.zip ./spip/
wget https://get.spip.net/spip_loader.php ./spip/

unzip ./spip/spip-v4.4.3.zip -d ./spip/

rm ./spip/spip-v4.4.3.zip

