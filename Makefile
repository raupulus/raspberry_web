.PHONY: all test tests cs codecept pre_codecept post_codecept run_codecept \
	fastcs fast phpcs docs api doc-src guide guia doc-src install psql clean

all: test

test tests: codecept phpcs

codecept: pre_codecept run_codecept post_codecept

pre_codecept:
	tests/run-acceptance.sh

post_codecept:
	tests/run-acceptance.sh -d

run_codecept:
	vendor/bin/codecept run

fastcs: fast phpcs

fast:
	vendor/bin/codecept run unit
	vendor/bin/codecept run functional

phpcs cs:
	vendor/bin/phpcs

docs:
	docs-src/publish-docs.sh

api:
	docs-src/publish-docs.sh -a

guide guia:
	docs-src/publish-docs.sh -g

serve:
	@[ -f .env ] && export $$(cat .env) ; ./yii serve

install:
	composer install
	composer run-script post-create-project-cmd

psql:
	db/psql.sh

clean:
	find 'runtime' -not -path 'runtime' -not -name ".gitignore" -exec rm -Rf {} \;
	find 'web/assets' -not -path 'web/assets' -not -name ".gitignore" -exec rm -Rf {} \;
	find 'web/tmp' -not -path 'web/tmp' -not -name ".gitignore" -exec rm -Rf {} \;
