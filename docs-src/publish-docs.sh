#!/usr/bin/env bash
# -*- ENCODING: UTF-8 -*-

BASE_DIR="$(dirname $(readlink -f "$0"))"

api() {
    vendor/bin/apidoc api .,vendor/yiisoft/yii2 docs/api \
        --pageTitle="API del proyecto" --guide=.. --guidePrefix= \
        --exclude="docs,vendor,tests" --interactive=0 \
        --template="project" \
        --readmeUrl="file://$BASE_DIR/README-api.md"
}

guide() {
    vendor/bin/apidoc guide 'docs-src' docs \
        --pageTitle="Objetivos del proyecto" --guidePrefix= --apiDocs=./api \
        --interactive=0 --template="project"
    mv docs/README.html docs/index.html
    ln -sf index.html docs/README.html
    rm docs/README-api.html
}

ACTUAL="$PWD"

cd $BASE_DIR/.. || exit

if [[ "$1" = '-a' ]]; then
    rm -rf 'docs/api'
    api
elif [[ "$1" = '-g' ]]; then
    find 'docs' -maxdepth 1 -not -name 'api' -delete
    guide
else
    find docs -not -path 'docs' -not -name ".gitignore" -exec rm -Rf {} \;
    api
    guide
fi

touch 'docs/.nojekyll'

cd $ACTUAL || exit
