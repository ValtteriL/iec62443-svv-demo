
.PHONY: setup-ci
setup-ci:
	@ansible-playbook \
    	infra/playbooks/setup-ci.yaml \
		-i "${HOST},"

.PHONY: test-svv-1
test-svv-1:
	@robot tests/TestSuite.robot