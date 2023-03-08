
.PHONY: setup-ci
setup-ci:
	@ansible-playbook \
    	infra/playbooks/setup-ci.yaml \
		-i "${HOST},"

