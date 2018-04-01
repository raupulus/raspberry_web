#!/usr/bin/env bash
# -*- ENCODING: UTF-8 -*-

if [[ "$1" = "travis" ]]; then
    psql -U postgres -c "CREATE DATABASE raspberry_web_test;"
    psql -U postgres -c "CREATE USER raspberry_web PASSWORD 'raspberry_web' SUPERUSER;"
else
    if [[ "$1" != "test" ]]; then
        sudo -u postgres dropdb --if-exists raspberry_web
        sudo -u postgres dropdb --if-exists raspberry_web_test
        sudo -u postgres dropuser --if-exists raspberry_web
    fi

    sudo -u postgres psql -c "CREATE USER raspberry_web PASSWORD 'raspberry_web' SUPERUSER;"

    if [[ "$1" != "test" ]]; then
        sudo -u postgres createdb -O raspberry_web raspberry_web
    fi

    sudo -u postgres createdb -O raspberry_web raspberry_web_test

    LINE="localhost:5432:*:raspberry_web:raspberry_web"
    FILE="$HOME/.pgpass"

    if [[ ! -f "$FILE" ]]; then
        touch "$FILE"
        chmod 600 "$FILE"
    fi

    if ! grep -qsF "$LINE" $FILE; then
        echo "$LINE" >> "$FILE"
    fi
fi
