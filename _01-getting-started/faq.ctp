<?php
// Template variables
$this->assign('bodyid', 'faq-list');
$this->assign('rootclass', 'background faq');
$this->assign('section', 'help');
$this->assign('title', __('FAQ'));
$this->assign('subtitle', __('Frequently asked questions'));
$this->assign('description', __('Frequently asked questions about passbolt, the open source password manager for teams'));
$this->assign('search', true);

$crumbs = array('crumbs' => array(
		__('home') => Router::url('/'),
		__('help') => Router::url('/help'),
		__('frequently asked questions') => Router::url('/faq')
));

// Javascript - see scriptbottom.ctp
$this->start('scriptbottom');
$scripts = ['bootstrap-scrollspy', 'list.min', 'list.fuzzysearch.min', 'imagelightbox.min.js'];
foreach ($scripts as $s) echo $this->Html->script($s) . "\n";
?>
<script>
	$(function() {
		var faqlist = new List('faq-list', {
			valueNames: ['question', 'answer'],
			//plugins: [ ListFuzzySearch() ]
		});
	});
</script>
<?php
$this->end();
?>
<?php echo $this->element('header2'); ?>
<div class="panel main ">

	<!-- in page navigation -->
	<div class="panel left">
		<div class="navigation wizard scrollspy" role="navigation">
			<ul class="nav">
				<li><h2><?php echo __('FAQ'); ?></h2></li>
				<li><a href="#introduction"><?php echo __('Introduction'); ?></a></li>
				<li><a href="#licensing"><?php echo __('Licensing'); ?></a></li>
				<li><a href="#security"><?php echo __('Security'); ?></a></li>
				<li><a href="#services"><?php echo __('Hosting & Services'); ?></a></li>
				<li><a href="#roadmap"><?php echo __('Features & Roadmap'); ?></a></li>
				<li><a href="#support"><?php echo __('Help & Support'); ?></a></li>
			</ul>
		</div>
	</div>

	<!-- main -->
	<div class="panel middle" data-spy="scroll" data-target=".scrollspy">
		<div class="grid grid-responsive-12">
			<article>
			<div class="row" id="introduction">
				<div class="col12">
<?php echo $this->element('breadcrumbs', $crumbs);?>
				</div>
			</div>
			<ul class="list">
				<li>
					<div class="row">
						<div class="col7">
							<h2 >Frequently Asked Questions</h2>
							<h3 class="question">What is passbolt?</h3>
							<div class="answer">
								<p>
									Passbolt is a free and open source password manager that allows team members to
									store and share credentials securely. For instance, the wifi password of your
									office, the administrator password of a router or your organisation social media
									 account password, all of them can be secured using passbolt.
								</p>
							</div>
						</div>
						<div class="col5 last">
							<div class="tldr">
								<p><?php echo __('Do you have a question that is not in this list? Get in touch!'); ?></p>
								<a href="mailto:contact@passbolt.com" class="button primary"><?php echo __('contact us'); ?></a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">How does it work?</h3>
							<div class="answer">
								<img src="<?php echo Router::url('/img/diagrams/howitworks.svg'); ?>" alt="diagram showing how it works"
								style="max-width:640px;"/>
							</div>
						</div>
						<div class="col5 last">
							<div class="tldr">
								<h4>How it works</h4>
								<ul>
									<li>Ada has a password to share with betty</li>
									<li>Ada encrypts the password using passbolt plugin,</li>
									<li>and Betty public key!</li>
									<li>The the password is sent encrypted over HTTPS</li>
									<li>and stored on the passbolt server!</li>
									<li>Betty receives and email notification</li>
									<li>Betty logs in to passsbolt with the CLI or web app</li>
									<li>Then using her private key,</li>
									<li>Betty decrypts the password and uses it to login!</li>
								</ul>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">How is passbolt different from other password managers?</h3>
							<div class="answer">
								<p>
									A lot of password solutions focus on personal needs. Passbolt is primarily designed
									 for teams and not individuals. We have built passbolt taking into account the
									 needs of small and medium organisations in mind. Moreover passbolt is free, open
									 source and respectful of your privacy. It is also extensible thanks to its
									 restful API.
								</p>
							</div>
						</div>
						<div class="col5 last">
							<div class="tldr">
								<h4 class="visuallyhidden">Why (Summary)</h4>
								<p>
									<i class="fa fa-thumbs-o-up"></i> Free & Open source
								</p>
								<p>
									<i class="fa fa-thumbs-o-up"></i> Designed for teams
								</p>
								<p>
									<i class="fa fa-thumbs-o-up"></i> Extensible API
								</p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">What functionalities do you support?</h3>
							<div class="answer">
								<p>
									Here is an overview of the key functionality of passbolt at present (in blue), and
									what we have in mind for the future (in white). Click on the picture to enlarge.
								</p>
								<figure>
									<a href="<?php echo Router::url('/img/diagrams/functional_overview.png');?>" class="lightbox" target="_blank" rel="noopener nofollow">
										<img alt="Passbolt Functional Overview" src="<?php echo Router::url('/img/diagrams/functional_overview.png');?>" />
									</a>
								</figure>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">Why does my organisation need a password manager?</h3>
							<div class="answer">
								<p>
									A password manager allows you to comfortably implement best security practices and
									therefore reduces the risks for you and your organisation.
								</p>
								<p>
									With a password manager you can prevent your team from reusing the same password
									on multiple systems. You can also make sure they generate stronger passwords by
									default, since they do not have to remember them anymore. It also makes it easier
									to rotate credentials, e.g. help you change your passwords regularly, every 40
									days for example.
								</p>
								<p>
									Additionally, having an overview of who has access to what, allows you to reset
									passwords when somebody leaves your organisation. Reciprocally it can also help
									facilitate when someone is joining your team, since a new member can easily
									be given access to the all the password they need. It also prevents loss of
									credentials since you can perform backups.
								</p>
							</div>
						</div>
						<div class="col5 last">
							<div class="tldr">
								<h4 class="visuallyhidden">Why (Summary)</h4>
								<p>
									<i class="fa fa-thumbs-o-up"></i> Decrease password reuse
								</p>
								<p>
									<i class="fa fa-thumbs-o-up"></i> Implement password rotation
								</p>
								<p>
									<i class="fa fa-thumbs-o-up"></i> Increase password strength
								</p>
								<p>
									<i class="fa fa-thumbs-o-up"></i> Help on-boarding new member
								</p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">Is sharing the same password with multiple users a bad practice?</h3>
							<div class="answer">
								<p>
									Indeed, it is. Wherever possible you should try to have one user account and a
									unique password per person. However it is not always possible, especially for
									built-in privileged accounts (like the admin password of a router, a root password
									on a linux server, your organization instagram / twitter account password, etc.),
									and this is where passbolt can be of most help.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">I need a personal password manager, can passbolt help me?</h3>
							<div class="answer">
								<p>
									Yes. You can also use passbolt to store those passwords that you do not want to
									share with anyone.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>

				<li>
					<div class="row">
						<div class="col7">
							<h2 id="licensing">License & Open source</h2>
							<h3 class="question">Under which license is passbolt distributed?</h3>
							<div class="answer">
								<p>
									Unless stated otherwise in the project's files distributed on Github,
									including but not limited to passbolt application and browser extensions, testing
									and deployment tools, styleguide, documentation and artwork included with the code etc.)
								</p>
								<ul>
									<li><a href="http://www.gnu.org/licenses/agpl-3.0.en.html" target="_blank" rel="noopener nofollow">
										Free Software Foundation's GNU AGPL v3.0</a>.</li>
								</ul>
								<p>
									Unless stated otherwise the text and illustrations on this website
									are available under:
									<ul>
										<li><a href="http://creativecommons.org/licenses/by-sa/4.0/" target="_blank" rel="noopener nofollow">
										Creative Commons BY SA 4.0</a>.
										</li>
									</ul>
								</p>
								<p>
									For 3rd party libraries the flavor of the open source license will vary (MIT, MPL,
									etc.), you can check the source for more details.
								</p>
								<p>
									Third party logos (such as Firefox, Docker, JSON, GnuPG, Github, etc.)
									are the sole property of their respective owners. They are used for illustrative
									use only. Their respective owners do not endorse passbolt or our use of their
									products.
								</p>
							</div>
						</div>
						<div class="col5 last">
							<div class="tldr">
							<p>
								<a href="http://creativecommons.org/licenses/by-sa/4.0/" target="_blank" rel="noopener nofollow">
									<img alt="Creative Commons BY NC SA 4.0 logo" src="<?php echo Router::url('/img/third_party/by-sa.png');?>" style="max-width: 125px"/>
								</a>
							</p>
							<p>
								<a href="http://www.gnu.org/licenses/agpl-3.0.en.html" target="_blank" rel="noopener nofollow">
									<img alt="GNU AGPL v3.0 logo" src="<?php echo Router::url('/img/third_party/agplv3.png');?>" style="max-width: 125px"/>
								</a>
							</p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">Can I commercially host and distribute passbolt?</h3>
							<div class="answer">
								<p>
									If you abide by the license terms, absolutely!
								</p>
								<p>
									Our goal in selecting the AGPL v3.0, as our default license is to require that
									the source code is distributed to the end users, so that enhancements can be
									released back to the community. Traditional open source licenses
									such as GPL often do not achieve this when the software is runs as a web
									application, e.g. as hosted application available through a network.
								</p>
								<p>
									If the AGPL v3 does not satisfy your organisation, commercial licenses are
									available. Feel free to contact us for more details.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">Can I review, modify and share passbolt source code?</h3>
							<div class="answer">
								<p>
								Absolutely. The entire passbolt solution is composed of a free software.
								Our source code is made available in such a way that all of our users have
								the rights to:
								</p>
								<ul>
									<li>Use the software for any purpose,</li>
									<li>Change the software to suit their needs,</li>
									<li>Share the software with their friends and neighbors,</li>
									<li>Distribute the software and the changes they make.</li>
								</ul>
								<p>
									You can learn more about free software on the
									<a href="http://www.gnu.org/philosophy/philosophy.html" target="_blank" rel="noopener nofollow">
										free software foundation website</a>.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">Why should I care that passbolt is open source?</h3>
							<div class="answer">
								<p>
									Typically, when the source code of a software is not available you need to
									trust your vendor without having any means to verify their claims. For example
									you do not have any guarantee that they will fix vulnerabilities, introduce
									backdoors or that they will not use your data without your consent. When the
									source code is freely available, anyone can organize a review and check if the
									level of security the product provides is adequate.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">Making the code available does not guarantee that it will get
								reviewed, right?</h3>
							<div class="answer">
								<p>
									Correct. This is why organizing regular independent 3rd party audits is one of
									our main priorities. The code we use for encryption for example has already been
									reviewed by <a href="https://github.com/openpgpjs/openpgpjs/wiki/Cure53-security-audit" target="_blank" rel="noopener nofollow">Cure53</a>
									in 2014. We also use known libraries and frameworks such as Cakephp that have
									been under scrutiny for years.
								</p>
								<p>
									Organizing more regular independent 3rd party audits is one of our main
									priorities. We need your <a href="#support">support</a> to be able to organize them.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">Wouldn’t an attacker find vulnerabilities more easily if the code is
								available to everyone?</h3>
							<div class="answer">
								<p>
									Yes, but the corollary is also true, e.g. people without malicious intent too can
									find these vulnerabilities and fix them, making the solution stronger in the long
									term. Greater visibility allows more users and experts around the world to go
									through the source code, discover and fix bugs early.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h2 id="security">Security</h2>
							<h3 class="question">Is it secure to use passbolt in its current version?</h3>
							<div class="answer">
								<p>
									Currently passbolt is in “alpha”, which means it is not yet a completely
									finished product. While we encourage you to try it out, the answer to
									whether you should store critical information with it depends on your security
									level requirements.
								</p>
								<p>
									For instance, if your team currently stores its passwords in plaintext, passbolt
									will definitely be an improvement. Similarly, if you plan to host passbolt in way
									that it is only accessible on your local machine or network or via a VPN, then
									the security level is also likely to be appropriate.
								</p>
								<p>
									On the other hand if you have very high security requirements, for example if
									you are dealing with systems holding credit card information, or if you are a
									human-rights organisation, you may want to wait before starting
									using passbolt!
								</p>
								<p>
									We are currently working on a comprehensive risk analysis to give you a complete
									picture of the threat model.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">How does encryption work in passbolt?</h3>
							<div class="answer">
								<p>
									Passbolt servers never have access to your passwords in clear text.
									Passwords are encrypted on the client side using a browser extension.
									The browser extension uses OpenPGP, a standard which provides a combination of strong
									public-key and symmetric cryptography. The private secret key used to decrypt your
									password is itself encrypted using a passphrase (aka your master password). On the
									client side passbolt uses <a href="openpgpjs.org" target="_blank" rel="noopener nofollow">OpenPGP.js</a>
									as a foundation for all its cryptographic functionalities.
								</p>
								<p>
									On the server side passbolt uses both the
									<a href="http://php.net/manual/en/ref.gnupg.php">GnuPG Php Extension</a> and
									<a href="https://github.com/jasonhinkle/php-gpg" target="_blank" rel="noopener nofollow">php-gpg</a>
									in order to perform public key validation and to support the
									<a href="https://gpgauth.org/" target="_blank" rel="noopener nofollow">GPGAuth authentication</a>
									protocol. By default the solution uses SSL to encrypt all communication between
									the server and the browser.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">Is all the data being encrypted, or is it only passwords?</h3>
							<div class="answer">
								<p>
									There are three state of data to consider:
								</p>
								<ul>
									<li>The data in motion (on the wire),</li>
									<li>The data in use (in the memory or file system on the server or client side)</li>
									<li>The data at rest (on the filesystem when the power is off).</li>
								</ul>
								<p>
									For the data in use, it is only passwords that are encrypted. For example, your
									username, the comments or the list of people you are sharing a password with are
									not encrypted using OpenPGP, and are stored in plaintext both on the client and server
									side. Obviously passwords can be available in decrypted form at some point (the
									later the better), but they will never be stored in plain text on the filesystem
									on either the client or server side.
								</p>
								<p>
									For the data in motion, e.g. on the transport layer level, all the communication
									are encrypted using SSL. The strength of the security at that level is not
									controlled by the passbolt solution itself but rather a combination of other
									factors such as the level of security of the organization issuing the certificate
									and the operating system configuration chosen by the hosting provider.
								</p>
								<p>
									For the data at rest, for most of the clients and servers, it is also possible to
									encrypt the database at the
									<a href="https://en.wikipedia.org/wiki/List_of_cryptographic_file_systems" target="_blank" rel="noopener nofollow">file system</a>
									level as well. This will add another encryption layer that can be useful, for
									example, in the case where the machine running passbolt is seized or stolen.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">Is Javascript cryptography secure?</h3>
							<div class="answer">
								<p>
									Javascript cryptography is hard but not impossible. If you are new to this topic
									you can have a look at the articles from
									<a href="https://www.nccgroup.trust/us/about-us/newsroom-and-events/blog/2011/august/javascript-cryptography-considered-harmful/" target="_blank" rel="noopener nofollow">Thomas Ptacek</a> or
									<a href="http://rdist.root.org/2010/11/29/final-post-on-javascript-crypto/" target="_blank" rel="noopener nofollow">Nate Lawson</a>.
								</p>
								<p>
									The main issue has to do with being able to securely distribute and maintain the
									integrity of the code in charge of the cryptographic operations, as well as setting
									up a cryptographically secure random number generator. Currently, the
									recommendation to solve these problems is to use a browser extension.
									Passbolt follows this recommendation.
								</p>
								<p>
									The other issue has to do with the quality of the javascript implementation of the
									cryptographic functionalities and the fact that Javascript has its fair share of
									<a href="http://archive.oreilly.com/pub/a/javascript/excerpts/javascript-good-parts/bad-parts.html" target="_blank" rel="noopener nofollow">pitfalls</a>.
									This is true for any programming languages and can only be addressed through
									careful code review. Passbolt uses
									<a href="https://github.com/openpgpjs/openpgpjs" target="_blank" rel="noopener nofollow">OpenPGP.js</a>
									for its cryptographic core which
									have been reviewed by <a href="https://github.com/openpgpjs/openpgpjs/wiki/Cure53-security-audit" target="_blank" rel="noopener nofollow">Cure53</a>
									in 2014.
								</p>
								<p>
									Organizing more regular independent 3rd party audits is one of our main priorities.
									We need your <a href="#support">support</a> to be able to organize them.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">Why do I need browser extension?</h3>
							<div class="answer">
								<p>
									A browser extension is needed for two reasons: first, to provide functionalities
									such as auto filling your passwords when visiting known websites. More importantly
									it is needed to maintain a higher level of security: to ensure the integrity of
									the cryptographic code and provide a secure random number generator.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">Why do I need to make a backup of my secret key during setup?</h3>
							<div class="answer">
								<p>
									You should always make a backup. If you lose this key (by breaking or loosing
									your computer and not having a backup for example), your encrypted data will
									be lost even if you remember your master password. You can, for example, print
									it and mail it to a family member (along with a nice postcard!) and ask them
									to keep it somewhere safe. Or, even better, you can store it in a safe if you
									have one!
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">I lost / don’t remember my passphrase, can you help?</h3>
							<div class="answer">
								<p>
									Unfortunately, we cannot help you. If you lose your passphrase, you’ll be unable
									to decrypt any existing password. If you can’t remember your passphrase, the best
									thing to do is to start anew with a fresh key and ask for your team to share an
									existing password with you again.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">I think my secret key and passphrase are compromised, what do I do?</h3>
							<div class="answer">
								<p>
									The secret key is in itself encrypted with a passphrase and cannot be used
									without it. If your passphrase has been compromised, you will need to start a
									new with a fresh key and use your revocation certificate (see next question).
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">How can I change my passphrase?</h3>
							<div class="answer">
								<p>
									Currently it is not possible to change your passphrase from within passbolt itself
									(we do have an item in our backlog for this, ref. PASSBOLT-1283).
								</p>
								<p>
									However there is a non-trivial workaround if you really need it:
								</p>
								<ul>
									<li>In passbolt, go to your profile and export your secret key</li>
									<li>Import it in a GPG keyring (see.
										<a href="https://gpgtools.org/" target="_blank" rel="noopener nofollow">MacOS</a>,
										<a href="https://scand.com/products/wingpg/">Windows</a>,
										<a href="https://www.gnupg.org">Linux</a>).</li>
									<li>From there you can update your passphrase</li>
									<li>Export your key again</li>
									<li>Perform an "account recovery" within passbolt with the new updated key.</li>
								</ul>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">Does passbolt support revocation certificates?</h3>
							<div class="answer">
								<p>
									A revocation certificate is a small encrypted message, that you generate at the
									same time you create your key. This can be uploaded when you need to tell your
									collaborators that your key has been compromised. This is required to render your
									previous key unusable and mitigate potential identity thefts.
								</p>
								<p>
									Passbolt do not provide the ability to create or upload revocation certificate at
									the moment but we hope to be able to support it in a near future. We need your
									<a href="#support">support</a> to be able to implement such functionalities. At
									the moment other software compatible with passbolt can help you with this. See the
									<a href="https://www.gnupg.org/gph/en/manual/c14.html" target="_blank" rel="noopener nofollow">GnuPG manual</a>
									for more information.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">How does authentication work in passbolt?</h3>
							<div class="answer">
								<p>
									The authentication scheme is based on the
									<a href="https://gpgauth.org/" target="_blank" rel="noopener nofollow">GPGAuth</a> protocol. Both the
									client and the server send each other challenges to verify their identities. In
									practice this process ensure each party can decrypt a random secret with the key
									they are claiming to own. This is in essence very similar to other public-key
									authentication schemes used by solutions such as SSH.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">Is there Two-Factor Authentication available?</h3>
							<div class="answer">
								<p>
									Unfortunately, that is not the case at the moment. However, we would like
									to offer such service in the near future. Please consider making a
									financial contribution if you are interested in such feature.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">How can I make backup of my data?</h3>
							<div class="answer">
								<p>
									You can (and should) make a backup of your secret key during the setup after
									generating a new key. You can also do that at any moment when you are logged in
									the application by going to the profile section.
								</p>
								<p>
									At the moment it is not possible to download a backup of your passwords from the
									client side. However if you have email notification enabled you should receive a
									copy of your encrypted passwords by email, which can act as a backup.
								</p>
								<p>
									However on the server side you can make a regular backup of the entire database.
									Several methods are available and there is plenty of
									<a href="http://dev.mysql.com/doc/refman/5.7/en/backup-methods.html" target="_blank" rel="noopener nofollow">
									documentation</a> available online.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">What is a "security token" and why is it important?</h3>
							<div class="answer">
								<p>
									This token is used to prevent malicious web pages to trick you by mimicking
									passbolt dialogs in order to steal your data, e.g. to protect your from
									phishing attacks.
								</p>
								<figure>
									<img src="<?php echo Router::url('/img/screenshots/LU_security_token.png');?>"
										alt="example of a security token"
										style="max-width:450px;">
									<span class="legend">fig. example of security token</span>
								</figure>
								<p>
									This cue will be shown whenever we ask you for your master password and
									other sensitive places to help make sure you are dealing with an authentic
									passbolt dialog and not a fake one!
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">How do you ensure public keys are not tampered with?</h3>
							<div class="answer">
								<p>
									Currently the client trust all the keys that are sent from the passbolt server.
									The server also trust the key sent by the client during setup. While we believe
									this setup can be sufficient for most organisations, we also acknowledge that it is
									far from ideal.
								</p>
								<p>
									Our solution on the long term would be to implement key signatures, synchronization
									with public key repositories and the possibility for users to manually accept
									or reject keys. We need your <a href="#support">support</a> to be able to implement
									such functionalities.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h2 id="services">Hosting and Services</h2>
							<h3 class="question">Can I try passbolt before installing it?</h3>
							<div class="answer">
								<p>
									Yes. You can try passbolt on our <a href="https://demo.passbolt.com">demo</a>
									environment. Please make sure you do not store any sensitive data there.
									You need to make sure you have read and agree to our
									<a href="legal/terms">terms of services</a> and
									<a href="legal/privacy">privacy policy</a>. If you prefer you can book us for a
									guided tour by <a href="mailto:contact@passbolt.com">contacting us</a>.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h2 id="introduction"></h2>
							<h3 class="question">Do you provide a hosted/serviced version of passbolt?</h3>
							<div class="answer">
								<p>
									We currently do not provide passbolt as a service. We
									plan to offer hosting services in the future. We propose a
									<a href="https://demo.passbolt.com">demo</a> installation but you should not store
									any sensitive data there. You can also download and install passbolt on your own
									machine.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h2 id="introduction"></h2>
							<h3 class="question">How do I install passbolt on my own server?</h3>
							<div class="answer">
								<p>
									You have several options:
								</p>
								<ul>
									<li>
										Using docker: We provide
										<a href="https://github.com/passbolt/passbolt_docker_debian" target="_blank" rel="noopener nofollow">docker images</a>
										to make this as painless as possible.
										<a href="http://www.docker.com/" target="_blank" rel="noopener nofollow">Docker</a> is a platform to build, ship, and
										run web applications, whether on your laptop, data center, virtual machines
										or on hosting platform such as amazon web services.
									</li>
									<li>
										Manually from scratch: We provide instructions in the readme files on our
										<a href="https://www.github.com/passbolt" target="_blank" rel="noopener nofollow">code repository</a>.
									</li>
								</ul>
							</div>
						</div>
						<div class="col5 last">
							<div class="tldr">
								<p>
									<a href="https://github.com/passbolt/passbolt_docker_debian" target="_blank" rel="noopener nofollow">
										<img alt="Docker Logo" src="<?php echo Router::url('/img/third_party/docker_small_h.png');?>"
											style="max-width:333px;margin:auto;"/>
									</a>
								</p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h2 id="roadmap">Functionalities and roadmap</h2>
							<h3 class="question">Will you release certain features (X or Y) in the near future?</h3>
							<div class="answer">
								<p>
									If the feature is on our roadmap we will most likely get to it at some point.
									Good things take time and our capacity to add features depends on how many
									financial supporters and practical contributors we have. Please consider
									<a href="#support">supporting us</a>!
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">How do I get a feature added to the roadmap?</h3>
							<div class="answer">
								<p>
									People that support us (financially or by contributing to the product) get to
									have a say in the development priorities. If you support us and your request
									get upvoted by other supporters we will add it to the roadmap.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">I found a bug in the software, where can I report it?</h3>
							<div class="answer">
								<p>
									Please send us an email at
									<a href="mailto:contact@passbolt.com">contact@passbolt.com</a> or create an
									issue on <a href="https://www.github.com/passbolt">Github</a> with screenshots
									and steps to reproduce the issue and we will be happy to fix it. Give as many
									details as possible about your environment (OS, Browser version, etc.).
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">I found a security issue in the software, where can I report it?</h3>
							<div class="answer">
								<p>
									Please send us an email at
									<a href="mailto:contact@passbolt.com">contact@passbolt.com</a>.
									Do not use Github or any other public channels. We ask that you keep the issue
									confidential until we have a fix and an announcement ready.
								</p>
								<p>
									Once the security issue confirmed, our team will take the following actions:
								</p>
								<ul>
									<li>Acknowledge to the reporter that we’ve received the issue, and are working
										on a fix.</li>
									<li>Get a fix/patch prepared.</li>
									<li>Prepare a post describing the vulnerability, and the possible exploits.</li>
									<li>Release new versions of all affected versions.</li>
									<li>Prominently feature the problem in the release announcement.</li>
								</ul>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h2 id="support">Help and support</h2>
							<h3 class="question">How can I support you financially?</h3>
							<div class="answer">
								<p>
									We would really appreciate and be grateful for any financial support you wish
									to provide us with! We will be setting up online donation facilities shortly,
									in the meantime if you are considering making a donation you can contact us at
									<a href="mailto:contact@passbolt.com">contact@passbolt.com</a>.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">Can I contribute with code?</h3>
							<div class="answer">
								<p>
									We would like that very much ! We welcome any skilled front-end, mobile and
									backend developers, as well a network and system wizards to help us improve
									passbolt. You can fork any of our GIT repository, make some changes and send
									us a pull request.
								</p>
								<p>
									Here are some tips to make sure your contribution get accepted:
								</p>
								<ul>
									<li>Keep it simple, explain the problem you are trying to solve</li>
									<li>Try to reuse existing standards and patterns</li>
									<li>Make sure you follow the existing conventions</li>
									<li>Develop new unit / functional tests to cover your changes</li>
									<li>Check that you did not break any old tests</li>
								</ul>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">I don’t know how to code, are there other ways I can support you?</h3>
							<div class="answer">
								<p>
									Code is only a fraction of what we do. Therefore, if you are a designer, a
									linguist, a fundraiser, a writer, a jurist, a quality assurance tester, a project
									manager, you too contribute with your skills!
								</p>
								<p>
									Send us an email at <a href="mailto:contact@passbolt.com">contact@passbolt.com</a>,
									tell us about your experience, where you feel like helping and we will get in
									touch with you!
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col7">
							<h3 class="question">I have another question, how can I get help?</h3>
							<div class="answer">
								<p>
									You can contact us by email at
									<a href="mailto:contact@passbolt.com">contact@passbolt.com</a>
									Please do not use github tickets to ask support questions.
								</p>
							</div>
						</div>
						<div class="col5 last"></div>
					</div>
				</li>
			</ul>
			</article>
		</div>
	</div>
</div>
