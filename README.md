# IEC62443-SVV-demo
A project to explore automation of security verification and validation in IEC-62443-4-1

## What

We are the producers of an imaginary component X.
We want to certify it to IEC 62443-4-2 using ISASecure [CSA](https://isasecure.org/certification/iec-62443-csa-certification) or [ICSA](https://isasecure.org/certification/iec-62443-icsa-certification) schemes.

Before we can do that, we must certify its development process to IEC 62443-4-1 using ISASecure [SDLA](https://isasecure.org/certification/iec-62443-sdla-certification).
To achieve the SDLA certificate, we must demonstrate that we follow the 8 security practices defined in the [IEC 62443-4-1 standard](https://webstore.iec.ch/publication/33615).

Security Verification and Validation (SVV) is one of the 8 practices. Its purpose is to verify that the product security functions meet the security requirements and that the product handles error scenarios and invalid input correctly.

This project explores how and the extent the SVV practice could be automated, while producing the required evidence to show to auditors.

The hypothesis is that we can define most tests using Robot framework and other tools, and run them regularly against X to have up-to-date view of its compliance status with the security requirements.

### Implementation

The automation part is implemented using DevOps principles. There are test suites that are run against X regularly, as it is updated. 
The test suites are developed Robot Framework.

Jenkins will be used as the automation hub.

## Local requirements
- ansible
- make
- python3-pip

```
apt install -y make python3-pip
pip install --user ansible
```

## Setup

Given the IP of a server running Ubuntu 22.04, sets up Jenkins as an automation server and configures it to run the defined test suite(s) against X.
You need to have SSH access to the host and sudo privileges.

```
make setup-ci HOST=<IP of the server>
```

## Run tests locally

SVV-1
```
make test-svv-1
```


## Notes

SVV contains the following requirements:
1. [Security requirements testing (SVV-1)](SVV-1.md)
2. Threat mitigation testing (SVV-2)
3. Vulnerability testing (SVV-3)
4. Penetration testing (SVV-4)
5. Independence of testers (SVV-5)

Out of these, SVV-1, SVV-2, SVV-3 and perhaps SVV-4 have content that can be automated.
