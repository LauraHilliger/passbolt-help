---
title: FAQs
date: 2017-11-30 00:00:00 Z
description: Everyone needs to start somewhere.
type: Document
order: 2
---

## Frequently Asked Questions

### What is passbolt?

Passbolt is a free and open source password manager that allows team members to store and share credentials securely. For instance, the wifi password of your office, the administrator password of a router or your organisation social media account password, all of them can be secured using passbolt.

#### Um, the TL;DR?
* Free & Open source
* Designed for teams
* Extensible API

### How does it work?

![diagram showing how it works](<image src="images/diagrams/howitworks.svg">)

#### How it works

* Ada has a password to share with betty
* Ada encrypts the password using passbolt plugin,
* and Betty public key!
* The the password is sent encrypted over HTTPS
* and stored on the passbolt server!
* Betty receives and email notification
* Betty logs in to passsbolt with the CLI or web app
* Then using her private key,
* Betty decrypts the password and uses it to login!

### How is passbolt different from other password managers?

A lot of password solutions focus on personal needs. Passbolt is primarily designed for teams and not individuals. We have built passbolt taking into account the needs of small and medium organisations in mind. Moreover passbolt is free, open source and respectful of your privacy. It is also extensible thanks to its restful API.

### What functionalities do you support?

Here is an overview of the key functionality of passbolt at present (in blue), and what we have in mind for the future (in white). Click on the picture to enlarge.

![Passbolt Functional Overview](<image src="images/diagrams/functional_overview.png">)(<image src="images/diagrams/functional_overview.png")

### Why does my organisation need a password manager?

A password manager allows you to comfortably implement best security practices and therefore reduces the risks for you and your organisation.

With a password manager you can prevent your team from reusing the same password on multiple systems. You can also make sure they generate stronger passwords by default, since they do not have to remember them anymore. It also makes it easier to rotate credentials, e.g. help you change your passwords regularly, every 40 days for example.

Additionally, having an overview of who has access to what, allows you to reset passwords when somebody leaves your organisation. Reciprocally it can also help facilitate when someone is joining your team, since a new member can easily be given access to the all the password they need. It also prevents loss of credentials since you can perform backups.

#### Um, the TL;DR?
* Decrease password reuse
* Implement password rotation
* Increase password strength
* Help on-boarding new member

### Is sharing the same password with multiple users a bad practice?

Indeed, it is. Wherever possible you should try to have one user account and a unique password per person. However it is not always possible, especially for built-in privileged accounts (like the admin password of a router, a root password on a linux server, your organization instagram / twitter account password, etc.), and this is where passbolt can be of most help.


### I need a personal password manager, can passbolt help me?

Yes. You can also use passbolt to store those passwords that you do not want to share with anyone.

## License & Open source

### Under which license is passbolt distributed?

Unless stated otherwise in the project's files distributed on Github, including but not limited to passbolt application and browser extensions, testing and deployment tools, styleguide, documentation and artwork included with the code etc.)

* [Free Software Foundation's GNU AGPL v3.0](http://www.gnu.org/licenses/agpl-3.0.en.html).

Unless stated otherwise the text and illustrations on this website are available under:

* [Creative Commons BY SA 4.0](http://creativecommons.org/licenses/by-sa/4.0/).

For 3rd party libraries the flavor of the open source license will vary (MIT, MPL, etc.), you can check the source for more details.

Third party logos (such as Firefox, Docker, JSON, GnuPG, Github, etc.) are the sole property of their respective owners. They are used for illustrative use only. Their respective owners do not endorse passbolt or our use of their products.

[Creative Commons BY NC SA 4.0 logo](<image src="images/third_party/by-sa.png');?>)](http://creativecommons.org/licenses/by-sa/4.0/) 

[GNU AGPL v3.0 logo](<image src="images/third_party/agplv3.png">)](http://www.gnu.org/licenses/agpl-3.0.en.html) 

### Can I commercially host and distribute passbolt?

If you abide by the license terms, absolutely!

Our goal in selecting the AGPL v3.0, as our default license is to require that the source code is distributed to the end users, so that enhancements can be released back to the community. Traditional open source licenses such as GPL often do not achieve this when the software is runs as a web application, e.g. as hosted application available through a network.

If the AGPL v3 does not satisfy your organisation, commercial licenses are available. Feel free to contact us for more details.

### Can I review, modify and share passbolt source code?

Absolutely. The entire passbolt solution is composed of a free software. Our source code is made available in such a way that all of our users have the rights to:

* Use the software for any purpose,
* Change the software to suit their needs,
* Share the software with their friends and neighbors,
* Distribute the software and the changes they make.

You can learn more about free software on the [free software foundation website](http://www.gnu.org/philosophy/philosophy.html).

### Why should I care that passbolt is open source?

Typically, when the source code of a software is not available you need to trust your vendor without having any means to verify their claims. For example you do not have any guarantee that they will fix vulnerabilities, introduce backdoors or that they will not use your data without your consent. When the source code is freely available, anyone can organize a review and check if the level of security the product provides is adequate.

### Making the code available does not guarantee that it will get reviewed, right?

Correct. This is why organizing regular independent 3rd party audits is one of our main priorities. The code we use for encryption for example has already been reviewed by [Cure53](https://github.com/openpgpjs/openpgpjs/wiki/Cure53-security-audit) in 2014\. We also use known libraries and frameworks such as Cakephp that have been under scrutiny for years.

Organizing more regular independent 3rd party audits is one of our main priorities. We need your [support](#support) to be able to organize them.

### Wouldn’t an attacker find vulnerabilities more easily if the code is available to everyone?

Yes, but the corollary is also true, e.g. people without malicious intent too can find these vulnerabilities and fix them, making the solution stronger in the long term. Greater visibility allows more users and experts around the world to go through the source code, discover and fix bugs early.

## Security

### Is it secure to use passbolt in its current version?

Currently passbolt is in “alpha”, which means it is not yet a completely finished product. While we encourage you to try it out, the answer to whether you should store critical information with it depends on your security level requirements.

For instance, if your team currently stores its passwords in plaintext, passbolt will definitely be an improvement. Similarly, if you plan to host passbolt in way that it is only accessible on your local machine or network or via a VPN, then the security level is also likely to be appropriate.

On the other hand if you have very high security requirements, for example if you are dealing with systems holding credit card information, or if you are a human-rights organisation, you may want to wait before starting using passbolt!

We are currently working on a comprehensive risk analysis to give you a complete picture of the threat model.

### How does encryption work in passbolt?

Passbolt servers never have access to your passwords in clear text. Passwords are encrypted on the client side using a browser extension. The browser extension uses OpenPGP, a standard which provides a combination of strong public-key and symmetric cryptography. The private secret key used to decrypt your password is itself encrypted using a passphrase (aka your master password). On the client side passbolt uses [OpenPGP.js](openpgpjs.org) as a foundation for all its cryptographic functionalities.

On the server side passbolt uses both the [GnuPG Php Extension](http://php.net/manual/en/ref.gnupg.php) and [php-gpg](https://github.com/jasonhinkle/php-gpg) in order to perform public key validation and to support the [GPGAuth authentication](https://gpgauth.org/) protocol. By default the solution uses SSL to encrypt all communication between the server and the browser.

### Is all the data being encrypted, or is it only passwords?

There are three state of data to consider:

* The data in motion (on the wire),
* The data in use (in the memory or file system on the server or client side)
* The data at rest (on the filesystem when the power is off).

For the data in use, it is only passwords that are encrypted. For example, your username, the comments or the list of people you are sharing a password with are not encrypted using OpenPGP, and are stored in plaintext both on the client and server side. Obviously passwords can be available in decrypted form at some point (the later the better), but they will never be stored in plain text on the filesystem on either the client or server side.

For the data in motion, e.g. on the transport layer level, all the communication are encrypted using SSL. The strength of the security at that level is not controlled by the passbolt solution itself but rather a combination of other factors such as the level of security of the organization issuing the certificate and the operating system configuration chosen by the hosting provider.

For the data at rest, for most of the clients and servers, it is also possible to encrypt the database at the [file system](https://en.wikipedia.org/wiki/List_of_cryptographic_file_systems) level as well. This will add another encryption layer that can be useful, for example, in the case where the machine running passbolt is seized or stolen.

### Is Javascript cryptography secure?

Javascript cryptography is hard but not impossible. If you are new to this topic you can have a look at the articles from [Thomas Ptacek](https://www.nccgroup.trust/us/about-us/newsroom-and-events/blog/2011/august/javascript-cryptography-considered-harmful/) or [Nate Lawson](http://rdist.root.org/2010/11/29/final-post-on-javascript-crypto/).

The main issue has to do with being able to securely distribute and maintain the integrity of the code in charge of the cryptographic operations, as well as setting up a cryptographically secure random number generator. Currently, the recommendation to solve these problems is to use a browser extension. Passbolt follows this recommendation.

The other issue has to do with the quality of the javascript implementation of the cryptographic functionalities and the fact that Javascript has its fair share of [pitfalls](http://archive.oreilly.com/pub/a/javascript/excerpts/javascript-good-parts/bad-parts.html). This is true for any programming languages and can only be addressed through careful code review. Passbolt uses [OpenPGP.js](https://github.com/openpgpjs/openpgpjs) for its cryptographic core which have been reviewed by [Cure53](https://github.com/openpgpjs/openpgpjs/wiki/Cure53-security-audit) in 2014.

Organizing more regular independent 3rd party audits is one of our main priorities. We need your [support](#support) to be able to organize them.

### Why do I need browser extension?

A browser extension is needed for two reasons: first, to provide functionalities such as auto filling your passwords when visiting known websites. More importantly it is needed to maintain a higher level of security: to ensure the integrity of the cryptographic code and provide a secure random number generator.

### Why do I need to make a backup of my secret key during setup?

You should always make a backup. If you lose this key (by breaking or loosing your computer and not having a backup for example), your encrypted data will be lost even if you remember your master password. You can, for example, print it and mail it to a family member (along with a nice postcard!) and ask them to keep it somewhere safe. Or, even better, you can store it in a safe if you have one!

### I lost / don’t remember my passphrase, can you help?

Unfortunately, we cannot help you. If you lose your passphrase, you’ll be unable to decrypt any existing password. If you can’t remember your passphrase, the best thing to do is to start anew with a fresh key and ask for your team to share an existing password with you again.

### I think my secret key and passphrase are compromised, what do I do?

The secret key is in itself encrypted with a passphrase and cannot be used without it. If your passphrase has been compromised, you will need to start a new with a fresh key and use your revocation certificate (see next question).

### How can I change my passphrase?

Currently it is not possible to change your passphrase from within passbolt itself (we do have an item in our backlog for this, ref. PASSBOLT-1283).

However there is a non-trivial workaround if you really need it:

*   In passbolt, go to your profile and export your secret key
*   Import it in a GPG keyring (see. [MacOS](https://gpgtools.org/), [Windows](https://scand.com/products/wingpg/), [Linux](https://www.gnupg.org)).
*   From there you can update your passphrase
*   Export your key again
*   Perform an "account recovery" within passbolt with the new updated key.

### Does passbolt support revocation certificates?

A revocation certificate is a small encrypted message, that you generate at the same time you create your key. This can be uploaded when you need to tell your collaborators that your key has been compromised. This is required to render your previous key unusable and mitigate potential identity thefts.

Passbolt do not provide the ability to create or upload revocation certificate at the moment but we hope to be able to support it in a near future. We need your [support](#support) to be able to implement such functionalities. At the moment other software compatible with passbolt can help you with this. See the [GnuPG manual](https://www.gnupg.org/gph/en/manual/c14.html) for more information.

### How does authentication work in passbolt?

The authentication scheme is based on the [GPGAuth](https://gpgauth.org/) protocol. Both the client and the server send each other challenges to verify their identities. In practice this process ensure each party can decrypt a random secret with the key they are claiming to own. This is in essence very similar to other public-key authentication schemes used by solutions such as SSH.

### Is there Two-Factor Authentication available?

Unfortunately, that is not the case at the moment. However, we would like to offer such service in the near future. Please consider making a financial contribution if you are interested in such feature.

### How can I make backup of my data?

You can (and should) make a backup of your secret key during the setup after generating a new key. You can also do that at any moment when you are logged in the application by going to the profile section.

At the moment it is not possible to download a backup of your passwords from the client side. However if you have email notification enabled you should receive a copy of your encrypted passwords by email, which can act as a backup.

However on the server side you can make a regular backup of the entire database. Several methods are available and there is plenty of [documentation](http://dev.mysql.com/doc/refman/5.7/en/backup-methods.html) available online.


### What is a "security token" and why is it important?

This token is used to prevent malicious web pages to trick you by mimicking passbolt dialogs in order to steal your data, e.g. to protect your from phishing attacks.

<figure>![example of a security token](<image src="images/screenshots/LU_security_token.png');?>) <span class="legend">fig. example of security token</span></figure>

This cue will be shown whenever we ask you for your master password and other sensitive places to help make sure you are dealing with an authentic passbolt dialog and not a fake one!


### How do you ensure public keys are not tampered with?

Currently the client trust all the keys that are sent from the passbolt server. The server also trust the key sent by the client during setup. While we believe this setup can be sufficient for most organisations, we also acknowledge that it is far from ideal.

Our solution on the long term would be to implement key signatures, synchronization with public key repositories and the possibility for users to manually accept or reject keys. We need your [support](#support) to be able to implement such functionalities.

## Hosting and Services

### Can I try passbolt before installing it?

Yes. You can try passbolt on our [demo](https://demo.passbolt.com) environment. Please make sure you do not store any sensitive data there. You need to make sure you have read and agree to our [terms of services](legal/terms) and [privacy policy](legal/privacy). If you prefer you can book us for a guided tour by [contacting us](mailto:contact@passbolt.com).

### Do you provide a hosted/serviced version of passbolt?

We currently do not provide passbolt as a service. We plan to offer hosting services in the future. We propose a [demo](https://demo.passbolt.com) installation but you should not store any sensitive data there. You can also download and install passbolt on your own machine.

### How do I install passbolt on my own server?

You have several options:

*   Using docker: We provide [docker images](https://github.com/passbolt/passbolt_docker_debian) to make this as painless as possible. [Docker](http://www.docker.com/) is a platform to build, ship, and run web applications, whether on your laptop, data center, virtual machines or on hosting platform such as amazon web services.
*   Manually from scratch: We provide instructions in the readme files on our [code repository](https://www.github.com/passbolt).

![Docker Logo](<image src="images/third_party/docker_small_h.png")(https://github.com/passbolt/passbolt_docker_debian) 

## Functionalities and roadmap

### Will you release certain features (X or Y) in the near future?

If the feature is on our roadmap we will most likely get to it at some point. Good things take time and our capacity to add features depends on how many financial supporters and practical contributors we have. Please consider [supporting us](#support)!

### How do I get a feature added to the roadmap?

People that support us (financially or by contributing to the product) get to have a say in the development priorities. You can submit a feature request in [our community forum](https://community.passbolt.com/c/backlog). Please check first and see if your request already exists. If you support us and your request get upvoted by other supporters we will add it to the roadmap.

### I found a bug in the software, where can I report it?

Please send us an email at [contact@passbolt.com](mailto:contact@passbolt.com) or create an issue on [Github](https://www.github.com/passbolt) with screenshots and steps to reproduce the issue and we will be happy to fix it. Give as many details as possible about your environment (OS, Browser version, etc.).

### I found a security issue in the software, where can I report it?

Please send us an email at [contact@passbolt.com](mailto:contact@passbolt.com). Do not use Github or any other public channels. We ask that you keep the issue confidential until we have a fix and an announcement ready.

Once the security issue confirmed, our team will take the following actions:

*   Acknowledge to the reporter that we’ve received the issue, and are working on a fix.
*   Get a fix/patch prepared.
*   Prepare a post describing the vulnerability, and the possible exploits.
*   Release new versions of all affected versions.
*   Prominently feature the problem in the release announcement.

## Help and support

### How can I support you financially?

We would really appreciate and be grateful for any financial support you wish to provide us with! We will be setting up online donation facilities shortly, in the meantime if you are considering making a donation you can contact us at [contact@passbolt.com](mailto:contact@passbolt.com).

### Can I contribute with code?

We would like that very much ! We welcome any skilled front-end, mobile and backend developers, as well a network and system wizards to help us improve passbolt. You can fork any of our GIT repository, make some changes and send us a pull request.

Here are some tips to make sure your contribution get accepted:

*   Keep it simple, explain the problem you are trying to solve
*   Try to reuse existing standards and patterns
*   Make sure you follow the existing conventions
*   Develop new unit / functional tests to cover your changes
*   Check that you did not break any old tests

### I don’t know how to code, are there other ways I can support you?

Code is only a fraction of what we do. Therefore, if you are a designer, a linguist, a fundraiser, a writer, a jurist, a quality assurance tester, a project manager, you too contribute with your skills!

Send us an email at [contact@passbolt.com](mailto:contact@passbolt.com), tell us about your experience, where you feel like helping and we will get in touch with you!

### I have another question, how can I get help?

You can contact us by email at [contact@passbolt.com](mailto:contact@passbolt.com) Please do not use github tickets to ask support questions.





