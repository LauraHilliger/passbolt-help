<?php
    $meta = [
        'title' => 'Sittin\' on the dock of the bay',
        'slug' => 'SittinOnTheDockOfTheBay',
        'number' => 'v1.0.10',
        'created' => 'Tue, 03 May 2016 12:00:00 +0500',
        'song' => 'https://youtu.be/PyxLaHmOaYM',
        'description' => 'Highlights: upgrade to cakephp 2.8.3, installation healthcheck, dual registration warning.'
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
            This release most notable improvement is a health-check page that can help administrators
            diagnose what is the status of their installation. This week we are still ironing out a few
            bugs and environment related issues.
        </p>
        <p> A big thank you to
            <a href="https://github.com/gunhu" target="_blank" rel="noopener nofollow">Alexis Vachette</a> and
            <a href="https://github.com/imami" target="_blank" rel="noopener nofollow">Ebrahim Imami</a>
            who are helping us with these, and all of you who sent us bug reports and suggestions!
        </p>
        <figure>
            <img alt="Passbolt Functional Overview" src="<?php echo Router::url('/img/screenshots/AD_healthcheck.jpg');?>" />
            <span class="legend">fig. example /healthcheck screen</span>
        </figure>
        <div>
            <h3>Passbolt API</h3>
            <h4>Added improvements</h4>
            <ul>
                <li>PASSBOLT-1419: Cleanup config.json for js client and remove useless config.</li>
                <li>PASSBOLT-1514: By default passbolt app should not be indexed by search engines.</li>
                <li>PASSBOLT-1474: API: Upgrade cakephp to 2.8.3.</li>
                <li>PASSBOLT-1288: As an AD during install I should have status page to help me.</li>
            </ul>
            <h4>Fixed bugs</h4>
            <ul>
                <li>PASSBOLT-1502: String is depracated in Cakephp since version 2.7 use CakeText instead.</li>
                <li>PASSBOLT-1466: GET /auth/verify.json Content-Type should not be text/html but JSON.</li>
                <li>PASSBOLT-1443: Copy to clipboard icon is misleading</li>
            </ul>
            <h3>Passbolt Firefox Add-on</h3>
            <h4>Added improvements</h4>
            <ul>
                <li>PASSBOLT-1316: As a AP trying to register again, I should sbe informed that the plugin is already configured.</li>
            </ul>
        </div>
    </div>
    <div class="col5 last" >
        <div class="tldr">
            <p>"I can't do what ten people tell me to do<br>
                So I guess I'll remain the same"</p>
            <a href="https://youtu.be/PyxLaHmOaYM" target="_blank" class="button primary">
                <i class="fa fa-music"></i>
            </a>
        </div>
    </div>
</div>
<?php $this->end(); ?>