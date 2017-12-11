<?php
    $meta = [
        'title' => 'Brick House',
        'slug' => 'BrickHouse',
        'number' => 'v1.0.12',
        'created' => 'Tue, 31 May 2016 18:00:00 +0500',
        'song' => 'https://www.youtube.com/watch?v=rrBx6mAWYPU',
        'description' => 'Highlights: Permissions are now visible in the sidebar. Bug fixes. Plugin improvement.'
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
            This release brings an interesting new feature: the possibility to see the list of the users a password is shared with at a glance, directly
	        from the sidebar.
        </p>
        <figure>
            <img alt="Email notification" src="<?php echo Router::url('/img/screenshots/LU_password_permission_sidebar.png');?>"
                style="max-width:400px;"/>
            <span class="legend">fig. permissions being displayed in the sidebar</span>
        </figure>
        <p>
            v1.0.12 also comes with its fair share of bug fixes, and some UI improvements.
	        As usual, we have also worked on increasing the coverage,
	        mostly for the selenium tests.
        </p>
	    <p>
		    Big thanks to the German DJ <a href="https://soundcloud.com/holgerhecler/holger-hecler-suma-beach-opening-istanbul-2014-06-08" target="_blank" rel="noopener nofollow">Holger Hecler</a> for making our heads move while coding!
	    </p>
        <div>
            <h3>Passbolt API</h3>
            <h4>Added improvements</h4>
            <ul>
                <li>PASSBOLT-1572: As LU, I should be able to see which users a password is shared with directly from the sidebar.</li>
	            <li>PASSBOLT-1407: As a LU there is no visual feedback when I upload a picture and that the process is in progress.</li>
            </ul>
            <h4>Fixed bugs</h4>
            <ul>
                <li>PASSBOLT-1439: Email is sent as anonymous when a user is created from the console.</li>
				<li>PASSBOLT-1509: As LU, when a password is shared with me in read only, I should not see the delete menu available in more.</li>
	            <li>PASSBOLT-1579: Segfault at the end of setup when trying to display login form.</li>
	            <li>PASSBOLT-1576: Fixed Hash component warning message in EmailQueue.</li>
	            <li>PASSBOLT-1322: Insertion of comments in unittest dataset display an error in the console.</li>
	            <li>PASSBOLT-1234: Authentication token used for account registration expiracy check.</li>
            </ul>
            <h3>Passbolt Firefox Plugin</h3>
            <h4>Added improvements</h4>
            <ul>
                <li>PASSBOLT-959: Plugin version number should be in the footer.</li>
	            <li>PASSBOLT-1488: As AP, I shouldn't be able to complete the setup if I import a key that already exist on server.</li>
            </ul>
            <h4>Fixed bugs</h4>
            <ul>
                <li>PASSBOLT-1255: Button height issues + missing tooltip on setup.</li>
            </ul>

        </div>
    </div>
    <div class="col5 last" >
        <div class="tldr">
            <p>"When your past calls, don't answer. It has nothing new to say."</p>
            <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                <i class="fa fa-music"></i>
            </a>
        </div>
    </div>
</div>
<?php $this->end(); ?>