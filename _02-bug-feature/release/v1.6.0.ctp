<?php
$meta = [
    'title' => 'Let\'s groove',
    'slug' => 'LetsGroove',
    'number' => 'v1.6.0',
    'created' => 'Wed, 21 Jun 2017 18:00:00 +0100',
    'song' => 'https://youtu.be/Lrle0x_DHBM',
    'description' => 'Highlights: Emails notifications for groups, bugs fixes.'
];
$this->set('releases', array_merge($this->get('releases'), array($meta)));
?>
<?php $this->start('article'); ?>
    <div class="row">
        <span id="<?php echo $meta['slug']; ?>" ></span>
        <span id="<?php echo $meta['number']; ?>" ></span>
        <div class="col7">
            <h2><a href="<?php echo $meta['song']; ?>" target="_blank" rel="noopener nofollow"><?php echo $meta['number']; ?> ~ <?php echo $meta['title']; ?></a></h2>
            <p>Release date: <?php echo $this->Time->format($meta['created'], '%B %e, %Y'); ?>.</p>
            <p>
                This release is mainly about shipping some of the missing "groups" features such as the email notifications.
                You will also find a few bug fixes, and an improvement in the default email configuration for those of you who use TLS authentication.
            </p>
            <p>
                It was also the occasion to update our <a href="https://hub.docker.com/r/passbolt/passbolt/" target="_blank" rel="noopener nofollow">docker container</a>. We fixed a few bugs and added email support.
            </p>
            <p>
                A big thank to all of you who tested and reported bugs for this release, especially Klugemara and Tomasz Kontusz.
            </p>
            <p class="message notice">
                <strong>How to upgrade:</strong> this version requires your passbolt instance administrator
                to run a migration script. Please checkout out the
                <a href="<?php echo Router::url('/help/tech/update', true); ?>">relevant online help section</a> for more information
                 on how to perform this operation.
            </p>
            <div>
                <h3>Passbolt API & Extension</h3>
                <h4>New features</h4>
                <ul>
                   <li>PASSBOLT-2099: As a user I should receive a notification when I am added to a group</li>
                   <li>PASSBOLT-2100: As a user I should receive a notification when I am deleted of a group</li>
                   <li>PASSBOLT-2102: As a group manager I should receive a notification when another group manager added a user to a group I manage</li>
                   <li>PASSBOLT-2103: As a group manager I should receive a notification when another group manager removed a user from a group I manage</li>
                   <li>PASSBOLT-2140: As a group manager I should receive a notification when another group manager changed the role of a user of a group I manage</li>
                   <li>PASSBOLT-2138: The TLS parameter should be part of the default email configuration</li>
                 </ul>
                 <h4>Fixed bugs & cleanups</h4>
                 <ul>
                   <li>PASSBOLT-2044: As an admin I shouldn’t be able to delete a user who is the sole owner of passwords shared with others</li>
                   <li>PASSBOLT-2078: As GM/AD I shouldn't be able to add a user who didn't complete the registration process to a group I edit/create</li>
                   <li>PASSBOLT-2111: As an admin I should be able to install passbolt under mydomain.tld/passbolt</li>
                   <li>PASSBOLT-2142: As an admin I should not see multiple ASCII banner when running the install script</li>
                   <li>PASSBOLT-1959: As LU when I unshare a password with a user or a group, associated secrets should be destroyed</li>
                   <li>PASSBOLT-1954: Security: Trackable behavior should override created_by and deleted_by when provided</li>
                   <li>PASSBOLT-2078: As GM/AD I shouldn't be able to add a user who didn't complete the registration process to a group I edit/create</li>
                </ul>

                 <h3>Passbolt docker container</h3>
                 <h4>New features</h4>
                 <ul>
                    <li>Added email set up support though environment variables</li>
                    <li>Added cronjob to send queued emails</li>
                    <li>Automated builds on the docker hub</li>
                 </ul>
                 <h4>Fixed bugs</h4>
                 <ul>
                   <li>Image build was failing when using alpine:latest. Switched to alpine:3.5</li>
                   <li>Deletion of passwords on docker image</li>
                   <li>Avoid importing already imported secret keys on the gpg keyring</li>
                 </ul>
            </div>
        </div>
        <div class="col5 last" >
            <div class="tldr">
                <p>
                    "Share the spice of life."
                </p>
                <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                    <i class="fa fa-music"></i>
                </a>
            </div>
        </div>
    </div>
<?php $this->end(); ?>