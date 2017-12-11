<?php
    $meta = [
        'title' => 'Let\'s stay together',
        'slug' => 'LetsStayTogether',
        'number' => 'v1.0.9',
        'created' => 'Mon, 25 April 2016 12:00:00 +0500',
        'song' => 'https://youtu.be/COiIC3A0ROM',
        'description' => 'Highlights: better installation instructions, debug messages in firefox, time travel.'
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
            This release was mainly about bug fixes. Also, thanks to an article in the awesome magazine
            <a href="http://linuxfr.org/news/passbolt-un-nouveau-gestionnaire-de-mots-de-passe-pour-les-equipes">LinuxFR</a>,
            and people trying to install passbolt on their own machine, we published a new page containing the <a href="<?php echo Router::url('/help/tech/install'); ?>">installation instructions</a>.
        </p>
        <div>
            <h3>Passbolt API</h3>
            <h4>Added improvements</h4>
            <ul>
                <li>PASSBOLT-1495: Update installation instructions in README file.</li>
            </ul>
            <h4>Fixed bugs</h4>
            <ul>
                <li>PASSBOLT-1505: As AP, I should not get an error during setup if my key has been generated on a system that is not exactly on time.</li>
            </ul>
            <h3>Passbolt Firefox Add-on</h3>
            <h4>Added improvements</h4>
            <ul>
                <li>PASSBOLT-1456: When generating a password automatically it only generates a "fair" level password.</li>
            </ul>
            <h4>Fixed bugs</h4>
            <ul>
                <li>PASSBOLT-1457: As LU, I should not be able to create a resource without password.</li>
                <li>PASSBOLT-1441: Wordsmithing: a parenthesis is missing on set a security token step.</li>
                <li>PASSBOLT-1158: Remove all errors (plugin/client) from the browser console at passbolt start.</li>
            </ul>
        </div>
    </div>
    <div class="col5  last" >
        <div class="tldr">
            <p> "The music is the message, the message is the music."</p>
            <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                <i class="fa fa-music"></i>
                <?php echo $meta['title']; ?>
            </a>
        </div>
    </div>
</div>
<?php $this->end(); ?>