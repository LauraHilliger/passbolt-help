---
title: Understanding and solving version incompatibilities
date: 2017-10-26 00:00:00 Z
categories:
- getting-started
description: Not all versions play nicely together.
type: Document
---

### Why am I getting a warning?

For each major release both the plugin and the client need to be updated. However depending on the timing of the update, your server or plugin may be behind one version or more.

Passbolt team take great care to make sure that the plugin and server are backward compatible but this is not always possible, especially when introducing new major features. You will be able to login and use your password but you may experience some issues. This is why the application will display the following warnings from time to time.

Here is how you can solve these issues.

### How to update the plugin

![a warning popup when the plugin is lagging behind]({{ "/images/screenshots/AN_partial_version_issue_client.png" | absolute_url }})

You can get this error when a new version of the plugin has been release but you are not using the latest version. By default the plugins updates themselves automatically but sometimes the roll out is not immediate, so you may want to trigger it manually.

It is also possible that the release is not available for automatic update if it is pending approval from either Mozilla or Google.

It is also possible that the automatic updates are disabled. Here are some resources that explains how to update your plugins:

#### On firefox

*   Got to [about:addons](about:addons)
*   Select passbolt plugin.
*   If auto update is disabled, click on "check for updates"

#### On chrome

*   Go to [chrome://extensions/](chrome://extensions/)
*   Check on update extensions now buttons.

### How to update the server

![a warning popup when the server is lagging behind]({{ "/images/screenshots/AN_partial_version_issue_server.png" | absolute_url }})

You can find instructions on how to update the passbolt backend on [this dedicated help page](<?php echo Router::url('/help/tech/update'); ?>). Feel free to contact us if you run into an issue.
