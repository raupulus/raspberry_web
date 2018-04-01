#!/usr/bin/env bash
# -*- ENCODING: UTF-8 -*-

if [[ "$1" = "travis" ]]; then
    psql -U postgres -c "CREATE DATABASE plantilla_test;"
    psql -U postgres -c "CREATE USER plantilla PASSWORD 'plantilla' SUPERUSER;"
else
    if [[ "$1" != "test" ]]; then
        sudo -u postgres dropdb --if-exists plantilla
        sudo -u postgres dropdb --if-exists plantilla_test
        sudo -u postgres dropuser --if-exists plantilla
    fi

    sudo -u postgres psql -c "CREATE USER plantilla PASSWORD 'plantilla' SUPERUSER;"

    if [[ "$1" != "test" ]]; then
        sudo -u postgres createdb -O plantilla plantilla
    fi

    sudo -u postgres createdb -O plantilla plantilla_test

    LINE="localhost:5432:*:plantilla:plantilla"
    FILE="$HOME/.pgpass"

    if [[ ! -f "$FILE" ]]; then
        touch "$FILE"
        chmod 600 "$FILE"
    fi

    if ! grep -qsF "$LINE" $FILE; then
        echo "$LINE" >> "$FILE"
    fi
fi
