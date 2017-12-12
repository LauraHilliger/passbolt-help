---
title: Backup
date: 2017-12-02 00:00:00 Z
categories:
- 03-using-passbolt
description: How to perform a backup of passbolt
type: Document
---

# Introduction

Making regular backups is a critical aspect of managing a passbolt instance. Because passbolt stores important information, it is equally important to have a backup strategy in place.

As a passbolt administrator it is your responsibility to define how often and when to perform backups. Please automate and customize this process to match the needs and policies of your organization.

Here are some best practices to keep in mind:

*   Ensure that the backups are taken at intervals that match your usage
*   Take these backups off-site, or to another environment than the live one
*   Make sure the backup is encrypted and stored in a safe location
*   Practice drills and test the backups to make sure they work

# What to backup?

There are several elements you need to backup:

## Backup these at regular intervals

1. **The database**

This can be easily scripted using [mysqldump](https://mariadb.com/kb/en/mariadb/mysqldump/) for example:

    mysqldump -u[user] -p[pass] db > /path/to/backup.sql

2. **The avatars**

The images in `app/webroot/img/public` also need to be backed up, otherwise profile images will be lost.

## Backup these when they change

3. **The server public and private keys**

    gpg --export-secret-key -a "passbolt user" > private.key

4. The application configuration

The files located in `app/Config` such as core.php, app.php, email.php, database.php. It is optional, but it can save you some time if you need to rebuild a new instance.

# What about the secret keys of my collaborators?

Every user private key should also be backed up, this is however not something we/you can automate easily for now (passbolt might provide a functionality for this in the future). We believe it is best if this is the responsibility of the end user. There is a dedicated step during the extension setup to that purpose.

As an administrator you should stress the importance of backing up secret keys to other users. For example this warning could be part of the initial information message sent to introduce passbolt to new users.

It is possible that having users back up their own keys may not be realistic or desirable in your case. In this case you can opt in for an alternative strategy such as setting up the account with/for them and taking a backup of the secret keys then. In the worst case scenario you could automate the process by installing a script on your users machine that would make that backup for you.

Do you have a question about backups? Do you want to share your experience and best practices?

[Get in touch!](http://community.passbolt.com)

## Last updated

This article was last updated on June 15th, 2017.