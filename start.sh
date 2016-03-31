#!/bin/bash

DIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )

(cd $DIR && php -S 0.0.0.0:8888 -t public public/index.php)