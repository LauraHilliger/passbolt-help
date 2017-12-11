<?php
    $meta = [
        'title' => 'Boogie Wonderland',
        'slug' => 'BoogieWonderland',
        'number' => 'v1.0.6',
        'created' => 'Tue, 29 March 2016 12:00:00 +0500',
        'song' => 'https://youtu.be/god7hAPv8f0',
        'description' => 'Highlights: slack plugin, fast clickers bugfix.'
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
            Another release mostly focusing on bug fixes. Big shout out to our testers: Lilian, Nikki, Marcin and Vrindha!
        </p>
        <p>
            The only major new functionality is the release of a first version of a slack plugin for passbolt. You can now track the signup in slack.
            <a href="mailto:contact@passbolt.com">Get in touch with us</a> if you use slack and have some
            ideas on how you would like it to work in the future.
        </p>
        <figure>
            <img src="<?php echo Router::url('/img/screenshots/slack_signup_notification.jpg'); ?>" alt="a screenshot of slack notification"/>
            <span class="legend">fig. an example of notification in slack</span>
        </figure>
        <p>
            We decided not to make this feature available as part of the default passbolt API product
            since not everyone will make use of it. Instead it will be an extra plugin people can
            install on their won. We will make the code available once we have finished testing
            and documenting it.
        </p>
        <div>
            <h3>Passbolt API</h3>
            <h4>Added improvements</h4>
            <ul>
                <li>PASSBOLT-1343: A confirmation email link opened in chrome does not explain that passbolt works only in firefox.</li>
                <li>PASSBOLT-1416: Improved test coverage: auth token should not be invalidated when validateAccount fails.</li>
                <li>PASSBOLT-1444: Slack plugin for passbolt to keep track of passbolt signup registrations.</li>
            </ul>
            <h4>Fixed bugs</h4>
            <ul>
                <li>PASSBOLT-1395: Regression: As LU I should not be able to select two passwords.</li>
                <li>PASSBOLT-1396: As LU I should not see a mix of two dashboards data if I click quickly on the users and passwords menu links.</li>
                <li>PASSBOLT-1406: Space missing between first name and last name in registration email.</li>
            </ul>
            <h3>Passbolt Firefox Add-on</h3>
            <h4>Added improvements</h4>
            <ul>
                <li>No new functional improvements.</li>
            </ul>
            <h4>Fixed bugs</h4>
            <ul>
                <li>PASSBOLT-1424: Cleanup: in Firefox addon remove URL_PLUBLIC_REGISTRATION.</li>
                <li>PASSBOLT-1417: At the end of the setup, or in case of setup fatal error, setup data should be cleared.</li>
                <li>PASSBOLT-1359: Setup should restart where it was left.</li>
            </ul>
        </div>
    </div>
    <div class="col5 last" >
        <div class="tldr">
            <p>"It’s not music if you can’t dance to it."</p>
            <a href="https://youtu.be/god7hAPv8f0" target="_blank" class="button primary">
                <i class="fa fa-music"></i>
            </a>
        </div>
    </div>
</div>
<?php $this->end(); ?>