
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
