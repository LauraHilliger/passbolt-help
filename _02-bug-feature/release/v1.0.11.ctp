<?php
    $meta = [
        'title' => 'Soul Makossa',
        'slug' => 'SoulMakossa',
        'number' => 'v1.0.11',
        'created' => 'Mon, 16 May 2016 18:00:00 +0500',
        'song' => 'https://youtu.be/aWK_Josc0Og',
        'description' => 'Highlights: Email notification on create, edit and delete. Remember my passphrase for 5 minutes. Swagger documentation for models.'
    ];
    $this->set('releases', array_merge($this->get('releases'), array($meta)));
?>
<?php $this->start('article'); ?>
<div class="row">
    <span id="<?php echo $meta['slug']; ?>" ></span>
    <div class="col7">
        <h2><a href="<?php echo $meta['song']; ?>" target="_blank" rel="noopener nofollow"><?php echo $meta['number']; ?> ~ <?php echo $meta['title']; ?></a></h2>
        <p>Release date: <?php echo $this->Time->format($meta['created'], '%B %e, %Y'); ?>.</p>
        <p>
            This release brings some new email notifications. Until now you could only receive a notification when
            someone was sharing a password with you. With this new set of features you will also receive a nudge when
            someone comment, edit or delete a password that you own (or that is shared with you).
        </p>
        <figure>
            <img alt="Email notification" src="<?php echo Router::url('/img/screenshots/LU_partial_email_comment.png');?>"
                style="max-width:450px;"/>
            <span class="legend">fig. example of new email notification</span>
        </figure>
        <p>
            Another interesting new feature that was requested by quite a few of you is a "remember for 5 minutes"
            checkbox on the passphrase / master password dialog. To be used with care!
        </p>
        <figure>
            <img alt="Email notification" src="<?php echo Router::url('/img/screenshots/LU_partial_passphrase_dialog.jpg');?>"
                 style="max-width:450px;"/>
            <span class="legend">fig. remember me!</span>
        </figure>
        <p>
            On the nerdy side we also squashed some annoying bugs on the plugin side, tidied up the code with PHPCS
            and gave the API documentation a head-start. If you are running your own instance, you can
            checkout /api/doc.json (available in debug mode) to get access to a Swagger compatible documentation file.
        </p>
        <p>
            This week round of thank you goes to Madalina Preda and Shruti Ravindran who are helping us get our
            first press releases out of the door.
        </p>
        <div>
            <h3>Passbolt API</h3>
            <h4>Added improvements</h4>
            <ul>
                <li>PASSBOLT-1388: As a user I should receive an email notification when a password is updated.</li>
                <li>PASSBOLT-1389: As a user I should receive an email notification when a password is created.</li>
                <li>PASSBOLT-1390: As a user I should receive an email notification when a password is deleted.</li>
                <li>PASSBOLT-1544: As a user I should receive an email notification when someone comments on a password.</li>
                <li>PASSBOLT-1221: API documentation with Swagger (Part I: models).</li>
            </ul>
            <h4>Fixed bugs</h4>
            <ul>
                <li>PASSBOLT-1094: Frontend: Server errors happening during a request should give a visual feedback.</li>
                <li>PASSBOLT-1438: Retry button is not working at setup first step (when user doesn't have the plugin installed).</li>
                <li>PASSBOLT-1564: As a sysop, installing passbolt with quiet mode should not output any information.</li>
                <li>PASSBOLT-1434: Wordsmithing: rename master password to passphrase.</li>
                <li>PASSBOLT-1274: Fix PHPCS errors for models</li>
            </ul>
            <h3>Passbolt Firefox Plugin</h3>
            <h4>Added improvements</h4>
            <ul>
                <li>PASSBOLT-1108: As LU when entering my master key I can have the plugin remember it for 5 min.</li>
            </ul>
            <h4>Fixed bugs</h4>
            <ul>
                <li>PASSBOLT-1494: After two consecutive setup, the plugin stops working and doesn't start anymore.</li>
            </ul>

        </div>
    </div>
    <div class="col5 last" >
        <div class="tldr">
            <p>"Wanna Be Startin' Something"</p>
            <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                <i class="fa fa-music"></i>
            </a>
        </div>
    </div>
</div>
<?php $this->end(); ?>