<?php
$meta = [
    'title' => 'The World',
    'slug' => 'TheWorld',
    'number' => 'v1.3.1',
    'created' => 'Tue, 03 Jan 2017 15:30:00 +0100',
    'song' => 'https://youtu.be/moiUyFQQE-0',
    'description' => 'Highlights: PHP7 compatibility and bug fixes.'
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
               What a better way to start 2017 than with a maintenance release?
               You guessed it, this new year release is mainly about bug fixes.
               We also upgraded the API to the latest CakePHP version (v2.9.4) as well as the associated modules, which will
               improve even further the compatibility of passbolt with PHP v7.
            </p>
            <p>
                Also, not listed here, we started working on the specifications for the group/team feature. We
                hope to share this document for your input in the coming weeks, before we start building.
            </p>
            <p>
                Thank you all for your continued support, especially all of you who reported bugs:
                <a href="https://github.com/K0n24d" target="_blank" rel="noopener nofollow">@K0n24d</a>, Chad, Kyle, Travis, Amos, Nicolas, Dave,
                <a href="https://www.patpro.net/blog/" target="_blank" rel="noopener nofollow">@Patpr0</a>.
            </p>
            <p>
                Have a great 2017!
            </p>
            <div>
                <h3>Passbolt API</h3>
                <h4>Fixed bugs & new features</h4>
                <ul>
                    <li>PASSBOLT-1758 As LU sharing a password I should be able to filter users based on first name and last name</li>
                    <li>PASSBOLT-1779 Remove debug statement</li>
                    <li>PASSBOLT-1585 As AN I should be allowed to register if my lastname or firstname are 2 chars in length</li>
                    <li>PASSBOLT-1783 Form validation and translation: malformed error messages</li>
                    <li>PASSBOLT-1619 As AP I should not be allowed to recover my account if I have not completed the setup first</li>
                    <li>PASSBOLT-1767 As a AD installing passbolt I should be told if webroot/img/public is not writable</li>
                    <li>PASSBOLT-1793 Upgrade to CakePHP v2.9.4</li>
                    <li>PASSBOLT-1784 GITHUB-29 PHP7 compatibility issue in migration console tasks</li>
                    <li>PASSBOLT-1790 Fixed update context sent by anonymous usage statistics</li>
                </ul>
                <h3>Passbolt Browser Extension</h3>
                <h4>Fixed bugs & new features</h4>
                <ul>
                    <li>PASSBOLT-1606 Wrong message when auto logged out and passbolt is not the active tab</li>
                    <li>PASSBOLT-1769 Refactor extension bootstrap, prepare code to welcome future features</li>
                    <li>PASSBOLT-1759 Share: autocomplete list will appear even when there is no text entered in the search</li>
                    <li>PASSBOLT-1760 Share: image is broken in the autcomplete list after user has changed it</li>
                    <li>PASSBOLT-1566 Share autocomplete html is not valid</li>
                    <li>PASSBOLT-1778 Simplify toolbarController openPassboltTab function</li>
                    <li>PASSBOLT-1680 Increased the limit to 4096 chars for password field</li>
                    <li>PASSBOLT-1657 As AP I should not be able to complete the recovery process with my public key</li>
                </ul>
            </div>
        </div>
        <div class="col5 last" >
            <div class="tldr">
                <p>
                    "I'm just trying to give you guys the best of my soul. That's all I'm about."
                </p>
                <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                    <i class="fa fa-music"></i>
                </a>
            </div>
        </div>
    </div>
<?php $this->end(); ?>