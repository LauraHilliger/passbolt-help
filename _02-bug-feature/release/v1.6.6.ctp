<?php
$meta = [
    'title' => 'Relight My Fire',
    'slug' => 'RelightMyFire',
    'number' => 'v1.6.6',
    'created' => 'Mon, 2 October 2017 15:30:00 +0100',
    'song' => 'https://youtu.be/2-BFtrB-qdI',
    'description' => 'Drop firefox legacy SDK, fix parsing issue with minified jquery on chrome.'
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
                With this release passbolt extension drops the old Firefox SDK and switch to native web
                extension. While it took the team a little bit more time than planned to migrate, this new architecture
                offers advantages in terms of performance and security.
            </p>
            <p>
                We also used the occasion to fix two small issues, including one reported by Tomasz Kontusz.
                Our main focus now is the finalization of the migration to Cakephp version 3. The next release will end
                this maintenance cycle and allow us to focus on new features.
            </p>
            <p>
                Thank you for your patience and support!
            </p>
            <div>
                <h3>Browser extension</h3>
                <ul>
                    <li>PASSBOLT-2419: Remove FF legacy extension support
                    </li><li>PASSBOLT-2423 / GITHUB-175: Fix missing template when recovering an account
                    </li><li>PASSBOLT-2425: Fix Chrome 61 parsing issue with minified version of jquery
                    </li>
                </ul>
            </div>
        </div>
        <div class="col5 last" >
            <div class="tldr">
                <p>
                    "Turn back the time to the days when our love was new"
                </p>
                <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                    <i class="fa fa-music"></i>
                </a>
            </div>
        </div>
    </div>
<?php $this->end(); ?>
