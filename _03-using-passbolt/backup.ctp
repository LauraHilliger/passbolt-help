<?php
// Template variables
$this->assign('rootclass', 'background');
$this->assign('section', __('Tech'));
$this->assign('title', __('Backup'));
$this->assign('subtitle', __('How to perform a backup of passbolt?'));

$crumbs = array('crumbs' => array(
    __('home') => Router::url('/'),
    __('help') => Router::url('/help'),
    __('tech') => Router::url('/help/tech'),
    __('backup') => Router::url('/help/tech/backup'),
));

// code styling
$this->start('css');
echo $this->Html->css('prism');
$this->end();
$this->start('scriptbottom');
$scripts = ['prism','bootstrap-scrollspy'];
foreach ($scripts as $s) echo $this->Html->script($s) . "\n";
$this->end();
?>
<?php echo $this->element('header2'); ?>
<div class="panel main ">
	<?php
	// left panel additional components
	$this->start('navigation'); ?>
	<!-- in page navigation -->
	<div class="navigation wizard scrollspy" role="navigation">
		<ul class="nav">
			<li><h2><?php echo __('On this page'); ?></h2></li>
			<li><a href="#toc_introduction"><?php echo __('Introduction'); ?></a></li>
			<li><a href="#toc_what"><?php echo __('What to backup'); ?></a></li>
			<li><a href="#toc_secret_keys"><?php echo __('Secret keys'); ?></a></li>
		</ul>
	</div>
	<?php $this->end(); ?>
	<?php echo $this->element('navigation');?>

    <!-- main -->
    <div class="panel middle" data-spy="scroll" data-target=".scrollspy">
        <div class="grid grid-responsive-12">
            <article>
            <div class="row" id="toc_introduction">
                <div class="col12">
                    <?php echo $this->element('breadcrumbs', $crumbs);?>
                </div>
            </div>
            <div class="row">
                <div class="col7">
                    <div>
                        <h2>Introduction</h2>
                        <p>
                            Making regular backups is a critical aspect of managing a passbolt instance.
														Because passbolt stores important information, it is equally important to
														have a backup strategy in place.
                        </p>
                        <p class="message warning">
														As a passbolt administrator it is your responsibility to define how often and when
													  to perform backups. Please automate and customize this process
														to match the needs and policies of your organization.
												</p>
												<p>
														Here are some best practices to keep in mind:
												</p>
												<ul style="padding-bottom:.5em;">
														<li>Ensure that the backups are taken at intervals that match your usage</li>
														<li>Take these backups off-site, or to another environment than the live one</li>
														<li>Make sure the backup is encrypted and stored in a safe location</li>
														<li>Practice drills and test the backups to make sure they work</li>
												</ul>
                    </div>
										<div id="toc_what">
												<h2>What to backup?</h2>
												<p>
													There are several elements you need to backup:
												</p>
												<h3>Backup these at regular intervals</h3>
												<h4>1. The database</h4>
												<p>This can be easily scripted using <a href="https://mariadb.com/kb/en/mariadb/mysqldump/" target="_blank" rel="noopener nofollow">mysqldump</a>
													for example:</p>
												<pre><code class="language-bash">mysqldump -u[user] -p[pass] db > /path/to/backup.sql</code></pre>
												<h4>2. The avatars</h4>
												<p> The images in <code>app/webroot/img/public</code> also need to be backed up, otherwise profile images will be lost.

												<h3>Backup these when they change</h3>
												<h4>
													3. The server public and private keys
												</h4>
												<pre><code class="language-bash">gpg --export-secret-key -a "passbolt user" > private.key</code></pre>
												<h4>
													4. The application configuration</h4><p>
													The files located in <code>app/Config</code> such as core.php, app.php, email.php, database.php.
													It is optional, but it can save you some time if you need to rebuild a new instance.
												</p>
										</div>
										<div id="toc_secret_keys">
											<h2>What about the secret keys of my collaborators?</h2>
											<p>
												Every user private key should also be backed up, this is however not something we/you can
												automate easily for now (passbolt might provide a functionality for this in the future).
												We believe it is best if this is the responsibility of the end user. There is a dedicated
												step during the extension setup to that purpose.
											</p>
											<p class="message notice">
												As an administrator you should stress the importance of backing up secret keys to
												other users. For example this warning could be part of the initial information message
												sent to introduce passbolt to new users.
											</p>
											<p>
												It is possible that having users back up their own keys may not be realistic or desirable in your case.
												In this case you can opt in for an alternative strategy such as setting up the account with/for them and
												taking a backup of the secret keys then. In the worst case scenario you could automate the process by
												installing a script on your users machine that would make that backup for you.</p>
										</div>
								</div>
                <div class="col5 last">
                    <div class="tldr">
                        <p>
                           Do you have a question about backups? Do you want to share your experience and best
                           practices?
                        </p>
                        <a href="mailto:contact@passbolt.com" class="button primary">Get in touch!</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col7">
                    <h3>Last updated</h3>
                    <p>
                        This article was last updated on June 15th, 2017.
                    </p>
                </div>
            </div>
            </article>
        </div>
    </div>
</div>
