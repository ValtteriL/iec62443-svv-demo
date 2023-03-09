# IEC62443-SVV-demo
A project to explore automation of security verification and validation in IEC-62443-4-1

## What

We have an imaginary component X.
We want to certify it to IEC62443 using ISASecure [CSA](https://isasecure.org/certification/iec-62443-csa-certification) or [ICSA](https://isasecure.org/certification/iec-62443-icsa-certification) schemes.
To achieve the certificate, among other things, we must assess the cybersecurity of the component.

This project explores how and the extent the assessment could be automated.

The hypothesis is that we can define most tests using Robot framework, and run them regularly against X to see the compliance status.

### Implementation

Given a server running Ubuntu 22.04, sets up Jenkins as an automation server and configures it to run the defined test suite(s) against X.

## Local requirements
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

## Run tests locally

SVV-1
```
make test-svv-1
```
