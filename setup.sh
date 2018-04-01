#!/usr/bin/env bash
# -*- ENCODING: UTF-8 -*-

DIR="$(basename $(realpath .))"

sed -i s/plantilla/$DIR/g db/* config/* apache.conf codeception.yml
mv 'apache.conf' "$DIR.conf"
mv 'db/plantilla.sql' "db/$DIR.sql"
mv 'db/plantilla_datos.sql' "db/$DIR"'_datos'.sql
mv 'tests/_data/proyecto.sql' "tests/_data/$DIR.sql"
ln -sf ../../db/$DIR.sql "tests/_data/$DIR.sql"
rm -f $0
