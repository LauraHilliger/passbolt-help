<?php
$meta = [
    'title' => 'Give Me The Night',
    'slug' => 'GiveMeTheNight',
    'number' => 'v1.6.4',
    'created' => 'Thu, 31 August 2017 19:00:00 +0100',
    'song' => 'https://youtu.be/imYJpr09IgQ',
    'description' => 'Highlights: limit web accessible resources in the browser extensions'
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
				This small maintenance release limit the number of web accessible resources in the plugin as suggested by the Mozilla addon reviewers as well as some other code clean up in the plugin related to Javascript promises.
            </p>
            <p>
				Thanks to the Mozilla addon review team for their suggestions for this release.
            </p>
            <div>
                <h3>Passbolt API</h3>
                <ul>
                    <li>PASSBOLT-2358: As a user registering on the demo instance I must click on a checkbox to confirm I understand the disclaimer</li>
                </ul>
                <h3>Browser extension</h3>
                <ul>
                    <li>PASSBOLT-2344: Remove content scripts from web accessible resources</li>
                    <li>PASSBOLT-2352: Webextension should not use defer, use native promise instead</li>
                    <li>PASSBOLT-2350: Move grunt-passbolt-ejs-template-compile as node module</li>
					<li>PASSBOLT-2370: Plugin upgrade openpgpjs to 2.5.10</li>
                </ul>
            </div>
        </div>
        <div class="col5 last" >
            <div class="tldr">
                <p>
                    "Because there's music in the air"
                </p>
                <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                    <i class="fa fa-music"></i>
                </a>
            </div>
        </div>
    </div>
<?php $this->end(); ?>
