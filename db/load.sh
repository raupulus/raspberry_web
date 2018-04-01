#!/usr/bin/env bash
# -*- ENCODING: UTF-8 -*-

BASE_DIR=$(dirname $(readlink -f "$0"))

if [[ "$1" != "test" ]]; then
    psql -h localhost -U plantilla -d plantilla < $BASE_DIR/plantilla.sql
    psql -h localhost -U plantilla -d plantilla < $BASE_DIR/plantilla_datos.sql
fi

psql -h localhost -U plantilla -d plantilla_test < $BASE_DIR/plantilla.sql
psql -h localhost -U plantilla -d plantilla_test < $BASE_DIR/plantilla_datos.sql
