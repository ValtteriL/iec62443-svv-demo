# iec62443-svv-demo
A project to explore automation of security verification and validation in IEC-62443-4-1


# Requirements
- ansible
- make
- python3-pip

```
apt install -y make python3-pip
pip install --user ansible
```

## Setup

Install Jenkins on a server, install required plugins, and setup Jenkins jobs
```
make setup-ci HOST=<IP of the server>
```

## Run tests

SVV-1
```
make test-svv-1
```
