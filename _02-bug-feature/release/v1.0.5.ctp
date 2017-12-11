<?php
    $meta = [
        'title' => 'Move On Up',
        'slug' => 'MoveOnUp',
        'number' => 'v1.0.5',
        'created' => 'Tue, 22 March 2016 12:00:00 +0500',
        'song' => 'https://youtu.be/6Z66wVo7uNw',
        'description' => 'Highlights: command line installation, deleted account feedback.'
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
            That's one small release for both the browser add-on and the API but a giant leap for the
            project. Passbolt officially in Private Alpha and the first testers are starting to give
            us feedback. A big thank you to our first testers: Karthik, Lilian, Amitav and Parbhjot!
        </p>
        <p>
            It is also the first major version for the the API,
            we did so to make the plugin and the API share the same version numbers (Firefox addons can not start with number 0.x.x).
        </p>
        <div>
            <h3>Passbolt API</h3>
            <h4>Added improvements</h4>
            <ul>
                <li>PASSBOLT-1384: As a Sysops I should be able to register during installation.</li>
                <li>PASSBOLT-1310: As a AP if my account is deleted I should get feedback on login.</li>
            </ul>
            <h4>Fixed bugs</h4>
            <ul>
                <li>PASSBOLT-1415: As a AP the 'Please register' links are broken.</li>
                <li>PASSBOLT-1157: As a AP I should not see the application javascript on error pages.</li>
                <li>PASSBOLT-1243: As a LU I should see an error when I try to upload an avatar with a wrong file type / size</li>
            </ul>
            <h3>Passbolt Firefox Add-on</h3>
            <h4>Added improvements</h4>
            <ul>
                <li>PASSBOLT-1304: As a LU getting an Error500 when trying to authenticate I should see a retry button.</li>
                <li>PASSBOLT-1310: As a previously registered user I should get an appropriate feedback on login if my account was deleted.</li>
            </ul>
            <h4>Fixed bugs</h4>
            <ul>
                <li>PASSBOLT-1377: As LU I should be able to login again if my session timed out.</li>
                <li>PASSBOLT-1381: As LU I should not be able to share a password with a user who is registered but who has not completed his setup</li>
                <li>PASSBOLT-1418: The App worker should be attached only on private pages.</li>
            </ul>
        </div>
    </div>
    <div class="col5 last" >
        <div class="tldr">
            <p>"Bite your lip and take a trip"</p>
            <a href="https://youtu.be/6Z66wVo7uNw" target="_blank" class="button primary">
                <i class="fa fa-music"></i> Move on up!
            </a>
        </div>
    </div>
</div>
<?php $this->end(); ?>