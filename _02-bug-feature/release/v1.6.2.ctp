<?php
$meta = [
    'title' => 'BoomBoom',
    'slug' => 'BoomBoom',
    'number' => 'v1.6.2',
    'created' => 'Sat, 12 August 2017 18:00:00 +0100',
    'song' => 'https://youtu.be/X70VMrH3yBg',
    'description' => 'Highlights: webextension migration for firefox, email notification settings, bug fixes.'
];
$this->set('releases', array_merge($this->get('releases'), array($meta)));
?>
<?php $this->start('article'); ?>
    <div class="row">
        <span id="<?php echo $meta['slug']; ?>" ></span>
        <span id="<?php echo $meta['number']; ?>" ></span>
        <div class="col7">
            <h2><a href="<?php echo $meta['song']; ?>" target="_blank"><?php echo $meta['number']; ?> ~ <?php echo $meta['title']; ?></a></h2>
            <p>Release date: <?php echo $this->Time->format($meta['created'], '%B %e, %Y'); ?>.</p>
            <p>
                This release is a maintenance release, with a few bug fixes and some additional settings to manage email notifications.
            </p>
            <p>
               The bulk of the work for this release was the migration for firefox, from the soon deprecated  SDK plugin format to the new webextension format.
               Quite a bit of work went into upgrading the selenium testsuite and providing a fully transparent data migration from the old to the new format.
               This is why this version is still running as a “legacy” plugin, with all the code embedded as a webextension, to make sure users have nothing to do to migrate.
               However please make sure your users upgrade to this version this month, otherwise they may need to perform an account recovery with the next version.
               Fret not, because unless they have disabled automatic update, the only thing firefox user need to do to update is to have the browser running.

            </p>
            <p>
                As a passbolt instance administrator I can find new settings manage email notifications in config/default.php under EmailNotification.
                If you want to override the default you can copy/paste them to your own app.php configuration.
                With these settings you can for example disable notifications when a user is added to a group, or when a password is deleted.
                It also allows to change the content of the notification and hide the username and/or the encrypted secret.
            </p>
            <p>
                Thank you to <a href="https://github.com/bluenetinc" target="_blank">@bluenetinc</a>, <a href="https://github.com/poeticode" target="_blank">@poeticode</a> and <a href="https://github.com/technogenus" target="_blank">@technogenus</a>
                for their suggestions and contributions to this release.
            </p>
            <p>
                Unless there is an issue with the 1.6.2, our next API release will be version v2.0, with an upgrade to Cakephp v3.
            </p>
            <div>
                <h3>Passbolt API & Extension</h3>
                <ul>
                    <li> PASSBOLT-2270: Fix modified_by not set on resource edit regression</li>
                    <li> PASSBOLT-2271: Fix no wrap issue on resource description</li>
                    <li> PASSBOLT-2284: GITHUB-98: As an administrator I can set which notifications are enabled for my organization</li>
                    <li> PASSBOLT-2284: GITHUB-114: As an administrator I can prevent encrypted secret or username to be sent in email notifications</li>
                    <li> PASSBOLT-1943: As an administrator I should not be able to install passbolt on a hostname that is not RFC3986 compliant</li>
                    <li> PASSBOLT-1937: As an administrator I should not be be able to install passbolt with a server key without an email id</li>
                    <li> PASSBOLT-2002: Refactor install script to reuse healthcheck library</li>
                    <li> PASSBOLT-2301: GITHUB-142: Remove additional slashes in passbolt.js urls such as model/users::find</li>
                </ul>
                <h3>Browser extension</h3>
                <ul>
                    <li> PASSBOLT-2198: Migrate from Firefox legacy SDK to embed/native webextensions</li>
                    <li> PASSBOLT-2254: Add log system to grab selenium tests traces</li>
                    <li> PASSBOLT-2210: Update Grunt build tasks</li>
                    <li> PASSBOLT-2200: Update to OpenPGP.js version 2.5.8</li>
                    <li> PASSBOLT-2069: Update to JQuery version 3.2.1</li>
                    <li> PASSBOLT-2248: Migrate from window.localStorage to chrome.storage on chrome</li>
                    <li> PASSBOLT-2283: Migrate from simplestorage to chrome.storage on firefox</li>
				</ul>
            </div>
        </div>
        <div class="col5 last" >
            <div class="tldr">
                <p>
                    "When ya walk that walk"
                </p>
                <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                    <i class="fa fa-music"></i>
                </a>
            </div>
        </div>
    </div>
<?php $this->end(); ?>
