
.PHONY: setup-ci
setup-ci:
	@ansible-playbook \
    	infra/playbooks/setup-ci.yaml \
		-i "${HOST},"

.PHONY: test-svv-1
test-svv-1:
	@robot --nostatusrc tests/TestSuite.robot

.PHONY: run-component
run-component:
	@rm product/db/database.sqlite && php -S localhost:8000 product/index.php

.PHONY: checksum
checksum:
	@find Makefile product/ -type f| xargs sha512sum

.PHONY: backup
backup:
	@git archive --format=tar.gz --output=backup.tar.gz HEAD

.PHONY: reset
reset:
	@git fetch origin && git reset --hard origin/main
