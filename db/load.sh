#!/usr/bin/env bash
# -*- ENCODING: UTF-8 -*-

BASE_DIR=$(dirname $(readlink -f "$0"))

if [[ "$1" != "test" ]]; then
    psql -h localhost -U raspberry_web -d raspberry_web < $BASE_DIR/raspberry_web.sql
    psql -h localhost -U raspberry_web -d raspberry_web < $BASE_DIR/raspberry_web_datos.sql
fi

psql -h localhost -U raspberry_web -d raspberry_web_test < $BASE_DIR/raspberry_web.sql
psql -h localhost -U raspberry_web -d raspberry_web_test < $BASE_DIR/raspberry_web_datos.sql
