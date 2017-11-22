<?php
// Template variables
$this->assign('rootclass', 'background');
$this->assign('section', __('Tech'));
$this->assign('title', __('Installation'));
$this->assign('subtitle', __('How to install passbolt on your own server.'));

$crumbs = array(
	'crumbs' => array(
		__('home') => Router::url('/'),
		__('help') => Router::url('/help'),
		__('tech') => Router::url('/help/tech'),
		__('installation') => Router::url('/help/tech/install'),
	)
);

$this->start('css');
echo $this->Html->css('prism');
$this->end();

// Javascript - see scriptbottom.ctp
$this->start('scriptbottom');
$scripts = ['bootstrap-scrollspy', 'prism'];
foreach ($scripts as $s) echo $this->Html->script($s) . "\n";
$this->end();

?>
<?php echo $this->element('header2'); ?>
<div class="panel main ">

	<!-- in page navigation -->
	<div class="panel left">
		<div class="navigation wizard scrollspy" role="navigation">
			<ul class="nav">
				<li><h2><?php echo __('Installation'); ?></h2></li>
				<li><a href="#toc_introduction"><?php echo __('Introduction'); ?></a></li>
				<li><a href="#toc_requirements"><?php echo __('Environment setup'); ?></a></li>
				<li><a href="#toc_gpg"><?php echo __('Generate GPG Keys'); ?></a></li>
				<li><a href="#toc_code"><?php echo __('Get the code'); ?></a></li>
				<li><a href="#toc_configure"><?php echo __('Configure the php app'); ?></a></li>
				<li><a href="#toc_install"><?php echo __('Run the install script'); ?></a></li>
				<li><a href="#toc_emails"><?php echo __('Enable emails'); ?></a></li>
				<li><a href="#toc_troubleshoot"><?php echo __('Troubleshoot'); ?></a></li>
			</ul>
		</div>
	</div>

<!-- main -->
<div class="panel middle" data-spy="scroll" data-target=".scrollspy">
<div class="grid grid-responsive-12">
<article>
	<div class="row" id="introduction">
		<div class="col12">
			<?php echo $this->element('breadcrumbs', $crumbs); ?>
		</div>
	</div>
	<div class="row">
		<div class="col7">
			<div>
				<h2 id="toc_introduction">Introduction</h2>
				<p>
					Passbolt is reported to work on a large variety of operating system configurations.
					Therefore this help page is a generic guide that should work for most environments.
				</p>
				<p>
					If you run into any issues with your particular configuration, feel free to get in touch, we will
					try our best to help you.
				</p>
				<h3>Other community guides</h3>
				<p>
					If you are looking for more system specific step by step guides please check out the following resources:
				</p>
				<ul>
					<li><a href="https://medium.com/passbolt/passbolt-on-debian-8-71-from-scratch-4438dad18908" target="_blank" rel="noopener nofollow">
						Debian 8 "Jessy" with Apache, MariaDB and PHP 5 (by Passbolt)</a></li>
					<li><a href="https://medium.com/passbolt/passbolt-on-centos-7-with-nginx-php7-fpm-mariadb-from-scratch-7b2a9b15f3a4" target="_blank" rel="noopener nofollow">
						Centos 7 with Nginx, MariaDB, PHP 7 (by  Passbolt)</a></li>
					<li><a href="https://www.patpro.net/blog/index.php/2016/09/22/3037-self-hosted-password-manager-installing-passbolt-on-freebsd/" target="_blank" rel="noopener nofollow">
						FreeBSD 10.3, Apache, Mysql 5.7, PHP 5.6  (by Patpro)</a></li>
					<li><a href="https://www.authbsd.com/blog/?p=60" target="_blank" rel="noopener nofollow">
						OpenBSD 6.1, Nginx, MariaDB, PHP 5.6/7.0 (by AuthBSD)
						</a></li>
				</ul>
			</div>
		</div>
		<div class="col5 last">
			<div class="tldr">
				<p>Something is not accurate in this documentation? Did you write or came accross a good step by step installation guide? Do let us know!</p>
				<a href="mailto:contact@passbolt.com" class="button primary">contact us</a>
			</div>
            <div class="tldr message warning">
                <p><strong>Issue with virtual machines: </strong>
                Make sure you have enough entropy before generating the server key.
                </p>
                <a href="https://github.com/passbolt/passbolt_api/issues/141" class="button"> View issue.</a>
            </div>
		</div>
	</div>

	<div class="row">
		<div class="col7">
			<h2 id="toc_requirements">Environment setup and baseline requirements</h2>
			<h3>Operating system</h3>
			<p>We recommend you install passbolt on stable Unix-like operating system distributions such as Debian, Centos or FreeBSD.
				We have not tested passbolt on Windows (please do let us know if you tried).
			</p>
			<h3>Web server requirements</h3>
			<ul>
				<li>Apache or Nginx web server with SSL enabled. </li>
				<li>Pretty urls</a>:
					with mod_rewrite
					<a href="http://book.cakephp.org/2.0/en/installation/url-rewriting.html#apache-and-mod-rewrite-and-htaccess">for apache</a>,
					and a site-available configuration
					<a href="http://book.cakephp.org/2.0/en/installation/url-rewriting.html#pretty-urls-on-nginx">for nginx</a>.
				</li>
			</ul>
		</div>
		<div class="col5 last">
			<div class="tldr">
				<h4 class="visuallyhidden">Available on docker</h4>
				<p>
					<a href="https://hub.docker.com/r/passbolt/passbolt/" target="_blank" rel="noopener nofollow">
						<img alt="Docker Logo" src="<?php echo Router::url('/img/third_party/docker_small_h.png'); ?>" style="max-width:333px;margin:auto;">
					</a>
				</p>
				<p>
					Passbolt is also available as a <a href="https://github.com/passbolt/passbolt_docker_debian" target="_blank" rel="noopener nofollow">docker container</a> (for demo purpose only).
				</p>
				<a href="https://hub.docker.com/r/passbolt/passbolt/" class="primary button">
					Get the demo container!
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col7">
			<h3>A word about SSL<a name="ssl"></a></h3>
			<p>
				By default passbolt is configured to force SSL connections, which means that whoever tries to access your passbolt instance
				without an https connection will automatically be redirected to https. For this reason, if https is not enabled on your host at the
				time of the installation, passbolt will not be able to work.
			</p>
			<p>
				However, if you know what you are doing, and wish to disable https, you can change this setting by editing
				<code>/app/Config/app.php</code> and set the parameter <code>App.force_ssl</code> to false.
				Keep in mind that this setting will make your installation unsecure and should be used for development or testing only.
			</p>
		</div>
		<div class="col5 last">
			<div class="tldr">
				<p>
					We highly recommend that you install https on your server. You can get a free SSL certificate
					with the <a href="https://letsencrypt.org/" target="_blank" rel="noopener nofollow">let's encrypt</a> initiative.
				</p>
				<a href="https://letsencrypt.org/" target="_blank" class="button primary">Let's encrypt!</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col7">
			<h3>PHP requirements</h3>
			<ul>
				<li>PHP >= 5.4.</li>
				<li>
					Either one of these image manipulation libraries (to manipulate avatars):
					<ul>
						<li><a href="http://php.net/manual/en/book.image.php">GD2</a>.</li>
						<li><a href="http://php.net/manual/en/book.imagick.php">Imagick</a>.</li>
						<li><a href="http://php.net/manual/en/book.gmagick.php">Gmagick</a>.</li>
					</ul>
				<li><a href="http://php.net/manual/en/gnupg.installation.php">GnuPG</a> for PHP: for key verification and authentication.</li>
				<li>PHP extensions (that may or may not come by default): PDO, intl, openssl, ctype, filter, hash, phar. </li>
			</ul>

			<h4>The following PHP modules are greatly recommended:</h4>
			<ul>
				<li><a href="http://php.net/manual/en/memcached.setup.php">Memcached</a>: to store sessions. If you are using memcached: json, session, pecl-memcached are also required as dependencies.</li>
			</ul>

			<h3>Database requirements</h3>
			<p class="message warning">
				Currently passbolt only works with Mysql due to the view we use to check
				permissions. If you want to help us make it work on postgresql, do get in touch!
			</p>
			<ul>
				<li>MySQL >= 5.0.</li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="col7">
			<h2 id="toc_gpg">Generate the GPG server key</h2>
			<p>
				The main <a href="<?php echo Router::url('/help/tech/auth'); ?>">authentication method</a> of passbolt is based on GPG. For this reason, it is required that you generate
				a GPG server key, and add it to the configuration.
			</p>

			<h3>Generate a new key</h3>
			<pre><code class="language-bash">gpg --gen-key</code></pre>
			<p>
				Answer the few questions asked by GPG, and <strong>do not enter a passphrase</strong>.
				Due to limitations of PHP GnuPG, passbolt can not work with a key that has a passphrase.
			</p>
			<p>
				When key generation is complete, make sure you note down the key fingerprint.
				It is a 40 char in length string, displayed at the end of the command output. For example:
			</p>
			<pre><code class="language-bash">pub   4096R/573EE67E 2015-10-26 [expires: 2019-10-26]
      Key fingerprint = 2FC8 9458 33C5 1946 E937  F9FE D47B 0811 573E E67E
uid   Passbolt Server Test Key &#x3C;no-reply@passbolt.com></code></pre></code></pre>
			<h3>Export the newly created key</h3>
			<p>Export the public and private key</p>
			<pre><code class="language-bash">gpg --armor --export-secret-keys your_email@domain.com > /var/www/passbolt/app/Config/gpg/private.key
gpg --armor --export your_email@domain.com > /var/www/passbolt/app/Config/gpg/public.key</code></pre>
			<p>
				Store both these files in a secure location on the server. They should be accessible by the web server user.
				In this example, we are storing them in the Config directory of passbolt.
			</p>
		</div>
	</div>

	<div class="row">
		<div class="col7">
			<h2 id="toc_code">Get the code</h2>
			<p>Get the passbolt code from the <a href="https://github.com/passbolt/passbolt">github repository</a>:</p>
			<pre><code class="language-bash">git clone https://github.com/passbolt/passbolt.git</code></pre>
			<h2 id="toc_code">Set the file permissions</h2>
			<p>
				Make sure the <code>app/tmp</code> and <code>app/webroot/img/public</code> are writable by the webserver user (www-data or similar).
			</p>
			<pre><code class="language-bash">chmod +w -R app/tmp
chmod +w app/webroot/img/public</code></pre>
			<h2 id="toc_configure">Configure the php application</h2>
			<p class="message warning">The configuration of your passbolt instance is a crucial step to make it work as per your needs
				and to ensure an optimal level of security. Pay a close attention to the steps described below.</p>
			<h3>core.php (core settings)</h3>
			<p>
				The CakePHP core configuration file (located in <code>app/Config/core.php</code>) is the base configuration file. It contains the settings
				that determine the application behavior (debug mode, cache, sessions, etc..).
			</p>
			<p>
				Copy the default core configuration file:
			</p>
			<pre><code class="language-bash">cp app/Config/core.php.default app/Config/core.php</code></pre>
			<p>
				However, you need to modify the cypherseed and salt. Passbolt do not actually use these,
				but it is part of the standard Cakephp installation to change these values.
			</p>
			<pre><code class="language-php">Configure::write('Security.salt', 'put your own salt here');
Configure::write('Security.cipherSeed', 'put your own cipher seed here');</code></pre>
			<p>
				Also for images that are sent in emails to work, we need to tell cakephp what is the base url.
				To fix this, uncomment and edit this line in <code>app/Config/core.php</code>:
			</p>
			<pre><code class="language-php">Configure::write('App.fullBaseUrl', 'http://{your domain without slash}');</code></pre>
			<p>
				The rest of the default version of core.php is good enough to be used as it is.
			</p>
			<h3>database.php (database connection settings)</h3>
			<p>
				The database configuration file (located in <code>app/Config/database.php</code>) file contains the database connection settings.
			</p>
			<p>
				Copy the default database configuration file :
			</p>
			<pre><code class="language-bash">cp app/Config/database.php.default app/Config/database.php</code></pre>
			<p>Then edit it.
				You will need to provide the name of your database, the username and password of the mysql user
				that passbolt can use to connect. For example:
			</p>
			<pre><code class="language-php">public $default = array(
	'datasource' => 'Database/Mysql',
	'persistent' => false,
	'host' => 'localhost',
	'login' => 'username',
	'password' => 'password',
	'database' => 'passbolt'
);</code></pre>
			<h3>app.php (application settings)</h3>
			<p>
				The passbolt application configuration (located in <code>app/Config/app.php</code>) contains the application settings.
				Copy the app.php.default configuration file to create one for your instance:
			</p>
			<pre><code class="language-bash">cp app/Config/app.php.default app/Config/app.php</code></pre>
			<p>You will need to specify the details of the GPG servery key, e.g. the location of the public and private key
			and the fingerprint. You also need to make sure that the webserver can access the gpg keyring. You can either
			add set it manually with <code>$GNUPGHOME</code> or in your config as follow:

			<pre><code class="language-php" style="font-size:.8em;">$config = [
		'GPG' => [
				'env' => [
						'setenv' => true,
						'home' => '/usr/share/httpd/.gnupg'
				],
				'serverKey' => [
						'fingerprint' => '2FC8945833C51946E937F9FED47B0811573EE67D',
						'public' => APP . 'Config' . DS . 'gpg' . DS . 'public.key',
						'private' => APP . 'Config' . DS . 'gpg' . DS . 'private.key',

				]
		]
				</code></pre>
			<p>
			The default file is good to be used as it is. However, you might want to look at these interesting options :</p>
			<ul>
				<li><strong>App.ssl.force</strong> (true or false, default: true): Defines if passbolt should force ssl connections.</li>
				<li><strong>App.registration.public</strong> (true or false, default: true): Defines if users can self register, or if only the administrator can create new accounts.</li>
				<li><strong>App.meta.robots.index</strong> (true or false, default: false): Defines if you want search engines to find and index your instance.</li>
				<li><strong>App.selenium.active</strong> (true or false, default:false): Do not change this to true unless you want to run the <a href="https://github.com/passbolt/passbolt_selenium">selenium tests</a>. It is to be used in development environment only, and setting this option to true will compromise the security of your installation.</li>
			</ul>

			<h3>email.php (email settings)</h3>
			<p>The <code>app/Config/email.php</code> configuration file defines your email settings to enable passbolt send emails to the world.
				Make sure you provide the correct settings. Without this, passbolt will not be able to send notifications email.</p>
			<pre><code class="language-bash">public $default = array(
	'transport' => 'Smtp',
	'from' => array('passbolt@yourdomain.com' => 'Passbolt'),
	'host' => 'smtp.yourserver.com',
	'port' => 587,
	'timeout' => 30,
	'username' => 'your@email.com',
	'password' => 'password',
);</code></pre>
			<p>You only need to modify the default variable, and leave the other sections of this file alone.</p>
		</div>
	</div>

	<div class="row">
		<div class="col7">
			<h2 id="toc_install">Run the install script</h2>
			<p>The configuration is all set! We can now install passbolt.</p>
			<p>Passbolt can be installed via a command line installation script.</p>
			<pre><code class="language-bash">app/Console/cake install --no-admin</code></pre>
			<p>In this command, we also mention that we do not want a default administrator. We will create one explicitely at the next step.</p>
			<p><strong>Note :</strong> To avoid any permission issues, mostly with the keyring, it is recommended to execute the PHP cli with the webserver rights. For instance:</p>
			<pre><code class="language-bash">su -s /bin/bash -c "app/Console/cake install --no-admin" www-data</code></pre>

			<h3>Create the first admin account</h3>
			<p>An admin user will be able to manage the other users on passbolt. You will need at least one:</p>
			<pre><code class="language-bash">app/Console/cake passbolt register_user -u me@domain.com -f myFirtsname -l myLastname -r admin</code></pre>
			<p>After the admin user creation, the command line tool will give you a setup link which will also be sent to you by email (if your emails are properly configured). Follow the link given to setup your account.</p>
		</div>
	</div>

	<div class="row">
		<div class="col7">
			<h2 id="toc_emails">Enabling emails</h2>
			<p>
				Emails are placed in a queue that needs to be processed by a CakePhp Shell.
				You can add a cron call to the script so the emails will be sent every minute.
				Add the following line to you crontab:
			</p>
			<pre><code class="language-bash"> * * * * * /var/www/passbolt/app/Console/cake EmailQueue.sender > /var/log/passbolt.log</code></pre>
			<p>
				And you are done!
			</p>
		</div>
	</div>

	<div class="row">
		<div class="col7">
			<h1 id="toc_troubleshoot">Troubleshooting</h1>
			<p>The healthcheck is a tool that can help you identify what are the problems with your install. It is accessible from the command line:
			</p>
			<pre><code class="language-bash">./app/Console/cake passbolt healthcheck</code></pre>
			<p>When the application is on debug mode (or if you are logged in as an administrator), a simplified dashboard version is also accessible directly in the browser at the url : /healthcheck</p>
			<figure>
				<img alt="Passbolt Functional Overview" src="<?php echo Router::url('/img/screenshots/AD_healthcheck.jpg');?>" />
				<span class="legend">fig. example /healthcheck screen</span>
			</figure>
			<p>You will find below a list of common errors, and how to solve them.</p>
			<h3>I get the error GPG Keyring is not available or not writable at install</h3>
			<p>
				It is possible that your <code>$GNUPGHOME</code> is not set or not available to either the php CLI or Apache users thus causing
				a segmentation fault.
			</p>
			<ul>
				<li>Check <code>app/Config/app.php</code>. If you don't have ssh access, it can be set at run time with <code>GPG.env.home</code> variable.</li>
				<li>Make sure the directory is accessible and writable for the PHP CLI and Apache users.</li>
			</ul>
			<p>It is commonly solved by executing this command:</p>
			<pre><code class="language-bash">chown -R www-data:www-data /home/www-data/.gnupg</code></pre>
			<h3>I get an error saying the GPG Server key defined in the config is not found</h3>
			<p>
				If you are running passbolt on FreeBSD make sure the <code>$PATH</code> for the www user include <code>/usr/local/{s,}bin</code>.
				Otherwise Apache won't be able to find the gpg modules. Something like this should do:
			<pre><code class="language-bash">PATH=/sbin:/bin:/usr/sbin:/usr/bin:/usr/local/sbin:/usr/local/bin</pre></code>
			<h3>I get the error that the GPG key fingerprint is not found in the keyring</h3>
			<p>
				It is possible that the keyring location specified by the app.php is not writable for the web application, or that
				you made a mistake in specifying $GNUPGHOME. You can check if the fingerprint exist in a given keyring for a given user as follow.
			</p>
			<pre><code class="language-bash">sudo su -s /bin/bash -c "gpg --list-keys --fingerprint --home /home/www-data/.gnupg" www-data | grep -i -B 2 'Passbolt Server'
pub   4096R/573EE67E 2015-10-26 [expires: 2019-10-26]
      Key fingerprint = 2FC8 9458 33C5 1946 E937  F9FE D47B 0811 573E E67E
uid   Passbolt Server Test Key &#x3C;no-reply@passbolt.com></code></pre>
			<h3>At the end of the setup I get an error saying "Invalid request method, should be PUT"</h3>
			<p>
				Make sure your webserver config is not rewriting the PUT method to POST.
				See. <a href="https://github.com/passbolt/passbolt_api/issues/52">Issue #52</a>.
			</p>
			<h3>Passbolt emails are not being sent by GMail</h3>
			<p>If you have two step verification enabled on your google account you will need to create an App Password.
				See. <a href="https://github.com/passbolt/passbolt_api/issues/51">Issue #51</a>.
			</p>
			<h3>When trying to login I'm stuck on "loading, please wait"</h3>
			<p>This can indicate that the fullBaseUrl is not set right in the app/Config/core.php, like the url is correct but not
				the SSL scheme (e.g. http instead of https).
				See. <a href="https://github.com/passbolt/passbolt_api/issues/47">Issue #47</a>.</p>
		</div>
	</div>

	<div class="row">
		<div class="col7">
			<h3>Last updated</h3>
			<p>
				This article was last updated on March 20th, 2017.
			</p>
		</div>
	</div>
</article>
</div>
</div>
</div>