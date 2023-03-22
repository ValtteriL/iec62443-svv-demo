# Security requirements testing (SVV-1)

This requirement depends on the security requirements defined in SR-3 Product security requirements in practice 2 - Specification of security requirements (SR).

There shall be functional tests for the security requirements, performance and scalability tests, as well as Boundary/edge condition, stress and malformed or unexpected input tests.

## Specification of security requirements (SR)
### SR-3 Product security requirements

The component, as a web application, needs to follow the Software Application Requirements (SAR) defined in IEC 62443-4-2.

As we are targeting Security Level 1, we need to consider the following Security Requirements:

1. FR 1 - Identification and authentication control (IAC)
    - CR 1.1 Human and user identification and authentication
    - CR 1.3 Account management
    - CR 1.4 Identifier management
    - CR 1.5 Authenticator management
    - CR 1.7 Strength of password-based authentication
    - CR 1.10 Authenticator feedback
    - CR 1.11 Unsuccessful login attempts
    - CR 1.12 System use notification
2. FR 2 - Use control (UC)
    - CR 2.1 Authentication enforcement
    - CR 2.2 Wireless use control
    - CR 2.4 Mobile code
    - CR 2.5 Session lock
    - CR 2.8 Auditable events
    - CR 2.9 Audit storage capacity
    - CR 2.10 Response to audit processing failures
    - CR 2.11 Timestamps
    - CR 2.12 Non-repudiation
3. FR 3 - System integrity (SI)
    - CR 3.1 Communication integrity
    - CR 3.2 Protection from malicious code
    - CR 3.3 Security functionality verification
    - CR 3.4 Software and information integrity
    - CR 3.5 Input validation
    - CR 3.6 Deterministic output
    - CR 3.7 Error handling
4. FR 4 - Data confidentiality (DC)
    - CR 4.1 Information confidentiality
    - CR 4.3 Use of cryptography
5. FR 5 - Restricted data flow (RDF)
    - CR 5.1 Network segmentation
6. FR 6 - Timely response to events (TRE)
    - CR 6.1 Audit log accessibility
7. FR 7 - Resource availability (RA)
    - CR 7.1 Denial of service protection
    - CR 7.2 Resource management
    - CR 7.3 Control system backup
    - CR 7.4 Control system recovery and reconstruction
    - CR 7.6 Network and security configuration settings
    - CR 7.7 Least functionality


The contents of these requirements are visible in the following table:

| Security Requirement (SR) title | Requirement |
| --- | --- |
|CR 1.1 Human and user identification and authentication|The component shall provide capability to identify and authenticate all human users on all interfaces capable of human user access.|
|CR 1.3 Account management|Components shall provide the capability to support the management of all accounts.|
|CR 1.4 Identifier management|Components shall provide the capability to integrate into a system that supports the management of identifiers and/or provide the capability to support the management of identifiers directly.|
|CR 1.5 Authenticator management|Components shall provide the capability to: support the use of initial authenticator content; support the recognition of changes to default authenticators made at installation time; function properly with periodic authenticator change/refresh operation; and protect authenticators from unauthorized disclosure and modification when stored, used and transmitted.|
|CR 1.7 Strength of password-based authentication|Components shall provide or integrate into a system that provides the capability to enforce configurable password strength according to internationally recognized and proven password guidelines.|
|CR 1.10 Authenticator feedback|Component shall provide the capability to obscure feedback of authenticator information during the authentication process.|
|CR 1.11 Unsuccessful login attempts|When a component provides an authentication capability the component shall provide the capability to: enforce a limit of a configurable number of consecutive invalid access attempts by any user during a configurable time period ; and deny access for a specified period of time or until unlocked by an administrator.|
|CR 1.12 System use notification|Component shall provide the capability to display a system use notification message before authenticating. The system use notification message shall be configurable by authorized personnel.|
|CR 2.1 Authentication enforcement|Components shall provide an authorization enforcement mechanism for all identified and authenticated users based on their assigned responsibilities.|
|CR 2.2 Wireless use control|If a component supports usage through wireless interfaces it shall provide the capability to integrate into the system that supports usage authorization, monitoring and restrictions according to commonly accepted industry practices.|
|CR 2.4 Mobile code|In the event that a software application utilizes mobile code technologies, that application shall provide the capability to enforce a security policy for the usage of mobile code technologies. The security policy shall allow, at a minimum, the following actions for each mobile code technology used on the software application: Control execution of mobile code; Control which users (human, software process, or device) are allowed to transfer mobile code to/from the application; Control the execution of mobile code based on the results of an integrity check prior to the code being executed.|
|CR 2.5 Session lock|If a component provides a human user interface, whether accessed locally or via a network, the component shall provide the capability to protect against further access by initiating a session lock after a configurable time period of inactivity or by manual initiation by the user (human, software process or device); and for the session lock to remain in effect until the human user who owns the session , or another authorized human user, re-establishes access using appropriate identification and authentication procedures.|
|CR 2.8 Auditable events|Components shall provide the capability to generate audit records relevant to securit y for the following categories: access control; request errors; control system events; backup and restore event; configuration changes; and audit log events. Individual audit records shall include: timestamp; source (originating device, software process or human user account); category; type; event ID; and event result.|
|CR 2.9 Audit storage capacity|Components shall provide the capability to allocate audit record storage capacity according to commonly recognized recommendations for log management; and provide mechanisms to protect against a failure of the component when it reaches or exceeds the audit storage capacity.|
|CR 2.10 Response to audit processing failures|Components shall provide the capability to protect against the loss of essential services and functions in the event of an audit processing failure; and provide the capability to support appropriate actions in response to an audit processing failure according to commonly accepted industry practices and recommendations.|
|CR 2.11 Timestamps|Components shall provide the capability to create timestamps (including date and time) for use in audit records.|
|CR 2.12 Non-repudiation|If a component provides a human user interface, the component shall provide the capability to determine whether a given human user took a particular action. Control elements that are not able to support such capability shall be listed in component documents|
|CR 3.1 Communication integrity|Components shall provide the capability to protect integrity of transmitted information.|
|CR 3.2 Protection from malicious code|The application product supplier shall qualify and document which protection from malicious code mechanisms are compatible with the application and note any special configuration requirements.|
|CR 3.3 Security functionality verification|Components shall provide the capability to support verification of the intended operation of security functions.|
|CR 3.4 Software and information integrity|Components shall provide the capability to perform or support integrity checks on software, configuration and other information as well as the recording and reporting of the results of these checks or be integrated into a system that can perform or support integrity checks.|
|CR 3.5 Input validation|Components shall validate the syntax, length and content of any input data that is used as an industrial process control input or input via external interface s that directly impacts the action of the component.|
|CR 3.6 Deterministic output|Components that physically or logically connect to an automation process shall provide the capability to set outputs to a predetermined state if normal operation as defined by the component supplier cannot be maintained.|
|CR 3.7 Error handling|Components shall identify and handle error conditions in a manner that does not provide information that could be exploited by adversaries to attack the IACS.|
|CR 4.1 Information confidentiality|Components shall provide the capability to protect the confidentiality of information at rest for which explicit read authorization is supported; and support the protection of the confidentiality of information in transit as defined in ISA‑62443‑3‑3 SR 4.1.|
|CR 4.3 Use of cryptography|If cryptography is required, the component shall use cryptographic security mechanisms according to internationally recognized and proven security practices and recommendations.|
|CR 5.1 Network segmentation|Components shall support a segmented network to support zones and conduits, as needed, to support the broader network architecture based on logical segment ation and criticality.|
|CR 6.1 Audit log accessibility|Components shall provide the capability for authorized humans and/or tools to access audit logs on a read-only basis.|
|CR 7.1 Denial of service protection|Components shall provide the capability to maintain essential functions when operating in a degraded mode as the result of a DoS event.|
|CR 7.2 Resource management|Components shall provide the capability to limit the use of resources by security functions to protect against resource exhaustion.|
|CR 7.3 Control system backup|Components shall provide the capability to participate in system level backup operations in order to safeguard the component state (user- and system-level information). The backup process shall not affect the normal component operations.|
|CR 7.4 Control system recovery and reconstruction|Components shall provide the capability to be recovered and reconstituted to a known secure state after a disruption or failure.|
|CR 7.6 Network and security configuration settings|Components shall provide the capability to be configured according to recommended network and security configurations as described in guidelines provided by the control system supplier. The component shall provide an interface to the currently deployed network and security configuration settings.|
|CR 7.7 Least functionality|Components shall provide the capability to specifically restrict the use of unnecessary functions, ports, protocols and/or services.|

### Security requirements applicability

#### CR 1.1 Human and user identification and authentication

The component has a web interface, which requires password authentication to use. The user identification and authentication is based on a password, there is only a sigle user thus no username is required.

Possible functional test cases:
- Test greeting generator with valid input (correct password, some name)


#### CR 1.3 Account management

The component only has a single user. It can be managed by changing its password. 
The password is changed by modifying the password environment variable and restarting the component.

Possible functional test cases:
- Test greeting generator with valid input (correct password, some name), change password, Retry with the new password

#### CR 1.4 Identifier management

The component only has a single user, which is impemented as only a password. It contains no user identifiers. Therefore this requirement is not applicable.

#### CR 1.5 Authenticator management

The only authenticator in the component is the password. There are no default passwords, user must choose their own password when starting the component.

If no password is chosen, the component will not work.

Possible functional test cases:
- Test that the application does not work if no password is set

#### CR 1.7 Strength of password-based authentication

The component follows NIST SP800-63-2 in its passwords. The standard only mandates that user-chosen passwords are at least 8 characters in length.

If the chosen password does not fulfill this requirement, the component will not work.

Possible functional test cases:
- Test that the application does not work with password shorther than 8 characters

#### CR 1.10 Authenticator feedback

The password field in the component is a html form input of type "password". Its value is obscured by default.
No tests seem required to verify this standard behavior.

If the password is incorrect, the component will fail with HTTP status 400. 
There are no usernames, thus the behavior cannot leak valid usernames.

#### CR 1.11 Unsuccessful login attempts

The component allows 5 incorrect password guesses within 30 minute period. If there are 5 incorrect attempts, the account is locked until the end of the 30min period. The locking can be reversed by authorized personnel by restarting the application.

Possible functional test cases:
- Attempt 5 incorrect passwords, verify that the account is locked, restart the application and verify its no longer locked

#### CR 1.12 System use notification

The component contains a system use notification, which can be modified by authorized personner through setting an environment variable.

Possible functional test cases:
- Set system use notification, verify it is visible

#### CR 2.1 Authentication enforcement

The component has only a single user, that is allowed to use the one single functionality in it.

Possible functional test cases:
- Verify anonymous user is unable to use the greeting functionality
- Verify authenticated user is able to use the greeting functionality

#### CR 2.2 Wireless use control

The component does not support usage through wireless interfaces. Therefore no functional tests are needed.

#### CR 2.4 Mobile code

The component does not utilize mobile code technologies. According to NIST SP 800-53, HTML5 counts as mobile code, but as the component does not utilize Javascript at all, we do not see it as mobile code.

#### CR 2.5 Session lock

The component does not implement sessions. Therefore no functional tests are needed.

#### CR 2.8 Auditable events

The component generates audit log of events relevant to security of relevant events in the given categories. Each log entry contains timestamp, source, category, type, event id, and event result. The event result is contained in the event type.

Possible functional test cases:
- Verify missing password env will result in invalid config log entry
- Verify too weak password env will result in invalid config log entry
- Verify successful greeting generation will generate success log entry
- Verify invalid password env will result in invalid password log entry
- Verify locked acccount will result in account locked log entry
- Verify invalid input will result in invalid input log entry

#### CR 2.9 Audit storage capacity

The component is designed to be run on a common server and its audit logs are stored into a file on disk. The disk space is not on the component's responsibility, but the server administrator's.

The component will continue to function even if the audit logging functionality fails to work. Failure could be caused by for example disk space running out.

Possible functional test cases:
- Verify greeting generation works even if the log file is read only

#### CR 2.10 Response to audit processing failures

The component will continue to function even if the audit logging functionality fails to work.

CR 2.9 covers the testing of this requirement.

#### CR 2.11 Timestamps

All audit log entries the component generates contain a unix timestamp. Unix timestamp captures both date and time.

Possible functional test cases:
- Verify log records contain unix timestamp

#### CR 2.12 Non-repudiation

Audit log records contain the IP and port of the client that did some action. This may be used to identify which client did which action.

As the component contains only a single account that may be shared among users, it is not possible to determine the human user based on authorization.

Possible functional test cases:
- Verify log records contain client IP and port

#### CR 3.1 Communication integrity

The transmitted information is not protected, it goes on plain HTTP. As a compensating countermeasure, the component listens only on loopback interface, which prevents others from being able to manipulate the traffic.

#### CR 3.2 Protection from malicious code

The one mechanism that the component uses as a protection against malicious code is input sanitization. Input sanitization prevents for example XSS attacks against the application.

Possible functional test cases:
- Verify input with HTML markup is sanitized

#### CR 3.3 Security functionality verification

The security functionality verification is already covered by the test cases defined for other Security Requirements.

#### CR 3.4 Software and information integrity

The component supports integrity checks on the software. The the checksums of the make, php and composer files can be provided for each version. Users can then recalculate the checksums and compare with the provided ones.

Possible functional test cases:
- Verify checksum calculation works

#### CR 3.5 Input validation
The only externally-controllable inputs in the component are:
1. Password from environment variable
2. System use notice from environment variable
3. User name as post data
4. Password as post data

The password from environment variable is validated by checking that it exists and that it is sufficiently long.
The system use notice does not affect the action of the component.
The user name from post data is not validated, but it is sanitized before printing out. It does not affect the action of the component.
The password from post data is simply compared to the one taken from environment variable, thus validating it is not necessary.

Possible functional test cases (already covered by previous test cases):
- Test that the application does not work if no password is set
- Test that the application does not work with password shorther than 8 characters

#### CR 3.6 Deterministic output

The component is not connected to automation process physically or logically.

#### CR 3.7 Error handling

No error messages displayed to the user disclose details that make attacker's life easier.
The two error messages displayed by the component are related to the password environment variable not being set, or password being too weak.

Possible functional test cases:
- Test that if no password is set, the component shows only message "PASSWORD env not set"
- Test that if the password env is shorther than 8 characters, the component shows only message "Password is too weak"

#### CR 4.1 Information confidentiality

The only confidential information handled by the component is the password environment variable. Protecting environment variables at rest is OS dependent and out of scope of the component.
The password is not transmitted at all.

#### CR 4.3 Use of cryptography

The component does not use encryption, as it is not required. The only confidential piece of information is the password, which is not stored to disk at all. In transit the password is not transferred over untrusted networks.

#### CR 5.1 Network segmentation

The component's network is segmented to allow access only from localhost.

Possible functional test cases:
- Verify that the component is accessible at localhost
- Verify that the component is not accessible at the IP address of the host machine

#### CR 6.1 Audit log accessibility

The component produces audit log file "app.log" with 644 permissions. This means the log is only writeable by the user running the component, and readable by all others. The logs are available on disk for users on the host machine.

Possible functional test cases:
- Verify the audit log has permissions 644

#### CR 7.1 Denial of service protection

The essential function of the component is greeting generation. The possible DoS attacks directly against the component include Slow HTTP and flooding the greeting generation with incorrect passwords to lock out the user.

The Slow HTTP attacks can be mitigated, but the account lockout not without considerable additional effort. The fact that the service is only accessible at localhost is seen as at least partly compensating countermeasure.

Possible functional test cases:
- Verify the greeting generation works under Slow HTTP attack

#### CR 7.2 Resource management

As the component is only a web application, operating system level security functions are out of scope.

The security functionality in the application capable of consuming resources is logging (disk space, I/O). Logging is done whenever the service is used. Rate limiting by for example source IP would reduce the risk of it being used in resource exhaustion attack. However, as the component is accessible form only localhost, this would rate limit also legitimate users. Another way would be to rate limit by a cookie or session, but as the component does utilize sessions, it is not seen as an alternative.

An attacker capable of accessing the component on localhost likely has access to the underlying host. From there they can mount more effective attacks for consuming disk space and I/O without involvement with the component.
