<?php
    $meta = [
        'title' => 'Just The Way You Are',
        'slug' => 'JustTheWayYouAre',
        'number' => 'v1.0.13',
        'created' => 'Fri, 01 Jul 2016 18:00:00 +0500',
        'song' => 'https://www.youtube.com/watch?v=XF8ZRjfGACA',
        'description' => 'Highlights: Multi device / account recovery. Filter as you type. Bug fixes.'
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
            This release introduces the possibility to recover an account and install passbolt on multiple devices.
            This feature will be useful when you want to reuse an existing passbolt account on another machine (on both your
            home and work machines for example) or if you have reinstalled your browser or operating system.
            Of course this will only work if you have made a backup of your secret key.
        </p>
	    <figure>
		    <img alt="Account recovery" src="<?php echo Router::url('/img/screenshots/AN_recover.png');?>"
		         style="max-width:550px;"/>
		    <span class="legend">fig. Account recovery</span>
	    </figure>
	    <p>
            Another nice to have addition to the user interface is the ability to filter the list of passwords and users
            directly as you type. We also fixed a few bugs!
        </p>
        <div>
            <h3>Passbolt API</h3>
            <h4>Added improvements</h4>
            <ul>
                <li>PASSBOLT-1077: As a LU searching for a password (or a user) search results should filter as I type.</li>
	            <li>PASSBOLT-1588: As AN it should be possible to recover a passbolt account on a new device.</li>
            </ul>
            <h4>Fixed bugs</h4>
            <ul>
	            <li>PASSBOLT-1605: Set::extract to Hash::extract refactoring regression.</li>
	            <li>PASSBOLT-1601: ControllerLog Model should support IVP6 addresses.</li>
	            <li>PASSBOLT-1366: Worker bug when multiple passbolt instances are open in multiple windows.</li>
	            <li>PASSBOLT-1590: Styleguide bump to v1.0.38.</li>
	            <li>PASSBOLT-1613: As a user losing access to a password I selected, I shouldn't encounter an error.</li>
	            <li>PASSBOLT-1569: Cleanup: remove SetupController::ping.</li>
            </ul>
            <h3>Passbolt Firefox Plugin</h3>
            <h4>Added improvements</h4>
            <ul>
                <li>PASSBOLT-1588: As AN it should be possible to recover a passbolt account on a new device.</li>
            </ul>
            <h4>Fixed bugs</h4>
            <ul>
                <li>PASSBOLT-1366: Worker bug when multiple passbolt instances are open in multiple windows</li>
            </ul>

        </div>
    </div>
    <div class="col5 last" >
        <div class="tldr">
            <p>"You're not the only one who's made mistakes, but they're the only things that you can truly call your own."</p>
            <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                <i class="fa fa-music"></i>
            </a>
        </div>
    </div>
</div>
<?php $this->end(); ?>