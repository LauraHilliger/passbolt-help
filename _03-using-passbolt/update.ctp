<?php
// Template variables
$this->assign('rootclass', 'background');
$this->assign('section', __('Tech'));
$this->assign('title', __('Update'));
$this->assign('subtitle', __('How to update passbolt on your server.'));

$crumbs = array(
	'crumbs' => array(
		__('home') => Router::url('/'),
		__('help') => Router::url('/help'),
		__('tech') => Router::url('/help/tech'),
		__('update') => Router::url('/help/tech/update'),
	)
);

$this->start('css');
echo $this->Html->css('prism');
$this->end();

// Javascript - see scriptbottom.ctp
$this->start('scriptbottom');
$scripts = ['bootstrap-scrollspy', 'prism', 'get-latest-version'];
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
			<li><a href="#toc_patch"><?php echo __('Patch update'); ?></a></li>
			<li><a href="#toc_minor"><?php echo __('Minor update'); ?></a></li>
			<li><a href="#toc_major"><?php echo __('Major update'); ?></a></li>
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
			<?php echo $this->element('breadcrumbs', $crumbs); ?>
		</div>
	</div>
	<div class="row">
		<div class="col7">
			<div>
				<h2>Introduction</h2>
				<h3>Which update process to follow?</h3>
				<p>
					Each passbolt release follows the concept of
						<a href="http://www.semver.org" target="_blank" rel="noopener nofollow">Semantic Versioning</a>.
					Given a version number MAJOR.MINOR.PATCH, we increment as follow:
				</p>
				<ul>
					<li><strong>PATCH</strong> version when we make backwards-compatible bug fixes.
						So let's say you are running passbolt v1.3.2 and the latest one available is v1.3.7 you will need to
						perform a patch update.
					</li>
					<li><strong>MINOR</strong> version when we add functionality in a backwards-compatible manner.
						Similarly say you have passbolt v1.2.0 installed and the latest version available
						is v1.3.2, you will need to perform a minor version update.
					</li>
					<li><strong>MAJOR</strong> version when incompatible API changes are made.
						You get the deal for major version update: that would mean going from v1.3.7 to v2.0.0
						for example.</li>
				</ul>
				<h3>Where to find the latest release version number?</h3>
				<p>
					You can find information about which version is the latest in the
					<a href="<?php echo Router::url('/release/notes',true); ?>">release notes</a>.
					It is generally a good idea to check these notes before running an update.
					You can also find it on the official
					<a href="https://github.com/passbolt/passbolt_api/blob/master/app/Config/version.php">GIT repository</a>.
				</p>
				<h3>Where to find the version number for a given installation?</h3>
				<p>
					You can check <code>app/Config/version.php</code> to know the version number for your local instance.
					You can also hover on the <i class="fa fa-heart-o"><span class="visuallyhidden">heart</span></i> icon
					at the bottom right corner of any passbolt screen. The first item is the server version,
					the second the one from the browser extension.
				</p>
				<figure>
					<img src="<?php echo Router::url('/img/www_only/AN_footer_version_help.png'); ?>" style="max-width:220px;"/>
					<span class="legend">fig. footer version helper</span>
				</figure>
			</div>
		</div>
		<div class="col5 last">
			<div class="tldr">
				<p>Something is not accurate in this documentation? Do let us know!</p>
				<a href="mailto:contact@passbolt.com" class="button primary">contact us</a>
			</div>
			<div class="tldr message notice">
				<h4>
					Latest tags on <a href="https://www.github.com/passbolt">github</a>:
				</h4>
				<ul>
					<li>API: <span class="js-passbolt_api-version"><em>checking please wait...</em></span></li>
					<li>Plugin: <span class="js-passbolt_browser_extension-version"><em>checking please wait...</em></span></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col7">
			<h2 id="toc_patch">Patch update</h2>
			<p>
				Performing a patch update is the easiest. All you need to do is checkout the latest version.
			</p>
			<pre class="language-bash"><code>$ git pull origin master</code></pre>
			<p>
				You can also checkout a specific version and use branches to switch versions.
				For example for version 1.0.9:
			</p>
			<pre class="language-bash"><code>$ git fetch --tags
$ git checkout tags/v1.0.9 -b tags/v1.0.9</code></pre>
			<p>Optionally, you can login as an administrator and check the status on the healthcheck page</p>
			<figure>
				<img alt="Passbolt Functional Overview" src="<?php echo Router::url('/img/screenshots/AD_healthcheck.jpg');?>" />
				<span class="legend">fig. example /healthcheck screen</span>
			</figure>
		</div>
		<div class="col5 last">
			<!-- sidebar placeholder -->
		</div>
	</div>

	<div class="row">
		<div class="col7">
			<h2 id="toc_minor">Minor update</h2>
			<p>
				Every now and again some releases will introduce some database and/or configuration files changes.
				Here is a step by step guide on how to perform a minor update.
			</p>
			<h3>1. Take your site down</h3>
			<p>
				Create a temporary webserver configuration to redirect all
				the requests to a maintenance page. You can find resources how to do this online:
				<a href="http://stackoverflow.com/questions/21709026/apache-enable-maintenance-mode-across-all-virtual-hosts" target="_blank" rel="noopener nofollow">
					here is an example for apache
				</a>.
			</p>
			<h3>2. Get the latest release</h3>
			<p>
            <pre><code class="language-bash">$ git fetch
$ git checkout tags/v1.x.x</code></pre>
			</p>
			<h3>3. Review the configuration files</h3>
			<p>
				While we try to provide backward compatibility by providing safe fallbacks for new configuration
				files items, it is recommended that you review your configuration files when the default changes.
			</p>
			<p>
				For example let's take the scenario where you are running v1.1.0 and you want to upgrade to
				v1.3.2. We can check that both the app and core files have changed as follow:
			</p>
			<pre><code class="language-bash">$ git diff --name-status v1.3.2 v1.1.0 | grep 'php.default'
M	app/Config/app.php.default
M	app/Config/core.php.default
</code></pre>
			</p>
			<h3>4. Make a backup of your database</h3>
			<p>
				Prior to running a database migration script it is very important that you perform a backup,
				in case something goes wrong.
				You can do this using mysqldump, with for example:
			<pre><code class="language-bash">$ mysqldump -u[user] -p[pass] db > /path/to/backup.sql</code></pre>
			</p>
			<h3>5. Run the migration script</h3>
			<p>
				To see if a database schema migration script is available you can run the following command:
			</p>
			<pre><code class="language-bash" style="font-size:.9em;">﻿﻿$ ./app/Console/cake Migrations.migration status
Cake Migration Shell
---------------------------------------------------------------
Application

Current version:
  #1465367816 1465367816_Migration_1.1.0
Latest version:
  #1479926461 1479926461_Migration_1.3.0
---------------------------------------------------------------
</code></pre>
			<p>
				In this case we can see that a migration is needed, so we run the following:
			</p>
            <pre><code class="language-bash" style="font-size:.9em;">﻿$ ./app/Console/cake Migrations.migration run all
Cake Migration Shell
---------------------------------------------------------------
Running migrations:
  [1474629203] 1474629203_Migration_1.2.0 (2016-09-23 16:43:23)
      > Changing field "uri" from table "resources".

  [1479926461] 1479926461_Migration_1.3.0 (2016-11-24 00:11:01)

Allow sending anonymous usage statistics? (y/n)
[n] > y
---------------------------------------------------------------
All migrations have completed.
</code></pre>
			<p>
				As you can see above, the migration script for v1.2.0 will also be applied automatically.
				Sometimes also, for example with the introduction of the anonymous usage statistics, the migration
				script can prompt you for input.
			</p>
			<h3>6. Put your site back online!</h3>
			<p>
				As an administrator (or as any user in debug mode) you can go and check on the /healthcheck page to see
				if your instance configuration is looking good.
			</p>
			<div class="message notice">
				<p>
					<strong>(Optional) If you run into some issues:</strong>
				</p>
				<ul>
					<li>Make a copy of the errors messages</li>
					<li>Checkout the previous working version using git</li>
					<li>Drop the database and load your backup data to restore to a previously working version.</li>
					<li>Send us an <a href="mailto:contact@passbolt.com">email</a> with the details of the error or fill
						in a bug report using github, using as much details as possible such as your OS, php, mysql
						environment versions.</li>
				</ul>
		</div>
		<div class="col5 last">
			<!-- sidebar placeholder -->
		</div>
	</div>

	<div class="row">
		<div class="col7">
			<h2 id="toc_major">Major update</h2>
			<p>
				There is nothing special to say about major updates yet since we have not done any yet!
				We will most likely provide an update manual for each major versions and list them here.
			</p>
		</div>
		<div class="col5 last">
			<!-- sidebar placeholder -->
		</div>
	</div>

	<div class="row">
		<div class="col7">
			<h3>Last updated</h3>
			<p>
				This article was last updated on January 20th, 2017.
			</p>
		</div>
		<div class="col5 last">
			<!-- sidebar placeholder -->
		</div>
	</div>
</article>
</div>
</div>
</div>