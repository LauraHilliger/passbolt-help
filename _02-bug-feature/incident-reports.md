---
title: Incident Reports
date: 2017-12-03 00:00:00 Z
categories:
- 02-bug-feature
description: Sometimes stuff happens, and we have to go firefighting. Here's some stuff that has happened and what we did about it.
type: Document
---

## Summary Chrome not available

### What happened?

On Thursday 9th of February 2016 evening, the extension was taken down by google from the chrome web store without notice. In parallel we started receiving report of the passbolt extension crashing during the setup, on the key generation step. On Friday afternoon the extension had reappeared on the web store, however the key generation was still unstable.

The issue was introduced in chrome release version 56.

### What is the current status?

Even though we cannot produce a bug fix for chrome itself we have reported the issue to Google as well as [Chrome](https://bugs.chromium.org/p/chromium/issues/detail?id=692721) and Openpgpjs maintainers and published a new version ( [v1.4.2](https://github.com/passbolt/passbolt_browser_extension/releases/tag/v1.4.2)) of passbolt with a workaround to make the plugin stable again.

### Why was this happening?

The browser and extension were crashing when calling some functions of cryptographic libraries in two situations.

![](<?php echo Router::url('/img/www_only/2017/02/09022017_incident/chrome-crash-report.png'); ?>)

Firstly Openpgpjs uses native functions implemented by the Web Cryptography API of the browser whenever available. In chrome 56, these native functions seem to be buggy and our extension crashed whenever it was trying to use them.

Also even without using the native chrome Crypto API another issue leading to crashes was identified when parsing the keys.

### What does it mean for passbolt security?

Since this is a chrome stability issue there is no change in the risk model.

### Status step by step

*   **Identification of the exact cause:** we know exactly which primitives are causing this crash. We have published a [test extension](https://github.com/passbolt/chrome56_openpgp_crashtest) to help other developers reproduce the issue.
*   **Make a fix for the extension:** we proposed a temporary fix until the bug in chrome gets fixed by Google.
*   **Republish it and wait:** we published the extension and waited for Google validation.
*   **Chrome extension is back in business**
*   **Wrap up this incident report**. We will work on follow up activities and potential fixes to avoid similar issue in the future.

#### Current status:

1. Root cause identification  
2. Make a fix for the extension  
3. Publish a new version  
4. Chrome extension is back  

##### Last updated: 2017-02-15 21:30:00 CET

#### Event timeline

*   2017-02-15 21:30:00 CET: Bug report filled on [Chrome tracker](https://bugs.chromium.org/p/chromium/issues/detail?id=692721).
*   2017-02-11 21:30:00 CET: A fix is published on Google chrome webstore. chrome extension download link is restored and don't link to this page anymore.
*   2017-02-11 21:00:00 CET: Reported the issue back to openpgpjs and chrome with details on how to reproduce the issue.
*   2017-02-11 20:30:00 CET: Update on twitter and this page. Fix in progress.
*   2017-02-11 17:00:00 CET: All issues isolated and published on a [minimal chrome extension](https://github.com/passbolt/chrome56_openpgp_crashtest)
*   2017-02-11 12:40:00 CET: Investigation on-going to try reproduce the issue. Switching openpgp.config.use_native = false solve the key generation issue but another issue is still present.
*   2017-02-10 15:40:00 CET: The passbolt plugin page is back on google chrome web store but the plugin key generation step is still unstable. Thomas from Mailvelope joined us to investigate the issue.
*   2017-02-10 13:30:00 CET: Investigation on-going. We publish this page. Still no response from Google.
*   2017-02-10 07:30:00 CET: Technical investigation continues. We?ll come up with a fix asap. Still waiting to hear from chrome team.
*   2017-02-10 03:03:00 CET: Contact the maintainers of openpgpjs and mailvelope by email to explain the issue and know if they received similar reports.
*   2017-02-10 02:30:00 CET: Communication on facebook / twitter about the chrome extension taken down. Firefox can still be used.
*   2017-02-10 00:50:00 CET: Chrome team confirms that they received our email, and that it has been forwarded to the pertinent team.
*   2017-02-10 00:30:00 CET: Realize that mailvelope another chrome extension, who is using openpgpjs1.x is not affected by the issue. The issue seems to be only between chrome56 and openpgpjs 2.x.
*   2017-02-09 23:30:00 CET: Write the the chrome team to have more details regarding the take down of our extension, through different channels.
*   2017-02-09 23:00:00 CET: After playing with openpgpjs configuration options, we realize that setting use_native=false (which disable the use of browser?s native crypto functions) fixes the crash issue during the setup when the key is generating. But introduces a new crash at password encryption. Setting use_native on and off could be a possible workaround.
*   2017-02-09 22:35:00 CET: Confirm the extension crashes only when generating a key. Importing a key works fine.
*   2017-02-09 22:25:00 CET: Confirm that the extension crashes during the setup on chrome 56 only. It?s working fine on chrome 55\. We start investigating in that direction.
*   2017-02-09 22:00:00 CET: Receive our first report saying that the plugin crashes during passbolt setup.
*   2017-02-09 20:50:00 CET: Start investigating and try to understand what changes we?ve made in our extension that could break the compliancy with the chrome rules.
*   2017-02-09 20:45:00 CET: Confirm that chrome extension has been taken down. We haven?t received any communication from google regarding the removal, nor any explanation.
*   2017-02-09 20:30:00 CET: Receive our user first feedback informing us that the chrome extension is not available anymore on the webstore.

## Summary xss on resource URLs

Passbolt API version 1.6.4 is vulnerable to a XSS in the url field on the password workspace grid and sidebar.

*   **CVE:** TBD.
*   **Product affected:** Passbolt API, Passbolt Docker.
*   **Version affected:** v1.6.4 and below.
*   **Version fixed:** v1.6.5
*   **Affected component:** Resource url
*   **Vulnerability Type:** Cross Site Scripting (XSS)

### Impact of issue

Code execution in the passbolt javascript application context. The confidentiality of passwords, passphrase and private key is not affected.

### Attack vector / exploitation

A registered passbolt user can create a malicious resource url and share it with one or more victims on the same passbolt instance. By clicking on the url of that resource the victim will run the javascript defined by the attacker. This can be used by the attacker to modify or delete resources that the victim has access to, therefore creating data integrity or availability issues.

### Credits

This issue was found and reported by Sumit Sahoo.

### Other information

#### How did this happen?

Initially, the passbolt resource url field implemented pretty strong validation rules allowing only certain url schemes such as http or https only. Naturally, with time, our early private alpha testers requested to allow other url schemes such as ftp or ssh, so more relaxed rules were introduced prior to the public launch. When the URL was later on made clickable the team missed the security implications of that decision.

#### Are there other XSS vulnerability present?

Passbolt is supposed to be fairly well protected from XSS triggered by users because we forbid the use of characters such as ?<? and ?>? in the form data input / api. However in this particular case this protection was not enough.

#### What are you doing about it?

With the upcoming version 2 we are in the process of relaxing user input even further, so to compensate for that extra risk we will review all our use of innerHTML function or similar (such as jQuery.html). We have already completed this review in the plugin with version 1.6.5\. We are also looking into adding additional automated XSS tests as part of our continuous integration processes.

#### Current status:

1\. Try first to reproduce the issue  
2\. Acknowledge to the reporter  
3\. Get a fix/patch prepared  
4\. Release new version.  
5\. Prepare a report about the issue.  
**6\. Feature the problem in the release.**

##### Last updated: 2017-09-14 16:40:00 CET

#### Event timeline

*   2017-09-13 22:30:00 CET: Passbolt team received a security vulnerability report from Sumit Sahoo.
*   2017-09-14 07:00:00 CET: early morning we acknowledge the issue, start working on a fix and start looking for similar issues in other part of the code.
*   2017-09-14 14:00:00 CET: We deploy a fix on the demo server
*   2017-09-14 14:00:00 CET: We notify the reporter that a fix has been deployed.
*   2017-09-14 14:30:00 CET: We publish the fix on github, the release notes and this report.

## Summary passphrase information leakage

Passbolt Extension version 1.6.6 is vulnerable to an information leakage during the setup.

*   **CVE:** TBD.
*   **Product affected:** Passbolt Extension.
*   **Version affected:** v1.6.6 and below.
*   **Version fixed:** v1.6.7
*   **Affected component:** Web extension private key passphrase entered before key generation.
*   **Vulnerability Type:** Information leakage.

### Impact of issue

Passphrase disclosure in the browser?s local storage between the key generation phase until the end of the setup.

### Attack vector / exploitation

An attacker having an access to the user file system during the extension setup, in the scenario where the key is generated by the extension (as opposed to being imported), at the time between the key generation step and the completion, could read the passphrase directly from the local storage. This information could be used to log in into passbolt on behalf of the user and access / decrypt the secrets, therefore creating data confidentiality, integrity and availability issues.

### Credits

This issue was found and reported by Juan Wajnerman.

### Other information

#### How did this happen?

Passbolt web extension use the local storage to store information about the setup so that a user that close the browser window can come back at a later stage to complete the setup instead of starting from scratch.

#### How bad is this?

From our perspective since the attacker requires an already high privilege in order to access to the local storage of the browser via the file system, and that this information is available only temporarily (e.g. it is removed when the setup is completed), we consider that the exploitability of this vulnerability is low. However considering the high impact and since this vulnerability can be mitigated we decided to act on it.

#### What are you doing about it?

From version 1.6.7 onward a user will not be able to continue the setup after closing the browser window and will have to start the process from scratch starting by clicking on the setup link in their mailbox.

#### Current status:

1. Try first to reproduce the issue  
2. Acknowledge to the reporter  
3. Get a fix/patch prepared  
4. Release new version.  
5. Prepare a report about the issue.  
6. **Feature the problem in the release.**

##### Last updated: 2017-10-13 12:00:00 CET

#### Event timeline

*   2017-10-13 04:40:00 CET: Juan Wajnerman notify passbolt team about the issue.
*   2017-10-13 08:00:00 CET: Passbolt team starts working on an impact assessment.
*   2017-10-13 08:50:00 CET: Passbolt team notify Juan and starts working on afix.
*   2017-10-13 10:40:00 CET: v.1.6.7 is being tested on continuous integration servers.
*   2017-10-13 12:00:00 CET: v.1.6.7 submitted on chrome webstore and firefox add-ons.
*   2017-10-13 12:00:00 CET: This incident report is published.