<?php
$this->assign('rootclass', 'background');
$this->assign('section', __('Legal'));
$this->assign('title', __('Privacy'));
$this->assign('subtitle', __('TL;DR: We do our best to respect your privacy!'));
$this->assign('description', __('Passbolt privacy policy. We do our best to respect your privacy!'));

$crumbs = array('crumbs' => array(
		__('home') => Router::url('/'),
		__('legal') => Router::url('/legal'),
		__('privacy policy') => Router::url('/privacy')
));
?>
<?php echo $this->element('header2'); ?>
<div class="panel main ">
<?php echo $this->element('navigation'); ?>
	<!-- main -->
	<div class="panel middle">
		<div class="grid grid-responsive-12">
			<article>
			<div class="row" id="introduction">
				<div class="col12">
<?php echo $this->element('breadcrumbs', $crumbs);?>
				</div>
			</div>
			<div class="row">
				<div class="col7">
					<div>
						<h2>Privacy Policy</h2>
						<p>
							This website, passbolt.com is owned and operated by Passbolt SARL ("we", "us" or "passbolt"). By using and accessing our Site, you ("you", "user" or, "end user") agree to the terms of our Privacy Policy (collectively, the "privacy policy").
						</p>
						<p>
							This Privacy Policy is effective with respect to any data that we’ve collected, or collect, about and/or from you, according to our <a href="<?php echo Router::url('/terms'); ?>">Terms of Service</a>.
						</p>
					</div>
					<div>
						<h3>Definitions</h3>
						<p>
							We define ‘Personal Information’ (which refers with no exception to, “your information”) in the following manner:
						</p>
						<p>
							Any information that you provide to us about yourself while using the service that could help someone else  identify you as an individual entity. This may  include information such as your name, phone number, location, IP address, system locale and preferences, picture, public key information, etc.
						</p>
						<p>
							We define this website (also referred to as the "Site", or “Service”) as <a href="http://www.passbolt.com">www.passbolt.com</a> and any other subdomains such as <a href="https://demo.passbolt.com">demo.passbolt.com</a> (also reffered as “Demo Site”).
						</p>
					</div>
				</div>
				<div class="col5 last">
					<div class="tldr">
						<p>Do you have a question about this privacy policy? Get in touch!</p>
						<a href="mailto:contact@passbolt.com" class="button primary">contact us</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col7">
					<div>
						<h3>Cookies and Tracking</h3>
						<h4>Cookies</h4>
						<p>
							A <a href="https://support.mozilla.org/en-US/kb/cookies-information-websites-store-on-your-computer" target="_blank" rel="noopener nofollow">cookie</a> is information stored on your computer by a website you visit.
							This Site use cookies for two purposes:
						</p>
						<ul>
							<li>Sessions, e.g. to provide you with the functionality that keeps you logged in or to make sure your preferences are carried forward.</li>
							<li>For analytics (see next section). We do not use cookies to track you on third party sites.</li>
						</ul>
						<h4>Analytics</h4>
						<p>
							We use <a href="http://piwik.org/" target="_blank" rel="noopener nofollow">Piwik</a> to collect information about your usage of the Site,
							such as which page you visited, how long you stayed on the Site, etc.
							It is possible for you to opt-out of this analytics tracking by enabling your browser's
							"<a href="https://en.wikipedia.org/wiki/Do_Not_Track" target="_blank" rel="noopener nofollow">Do Not Track</a>" preference.
						</p>
						<h4>Demo Site application logs</h4>
						<p>
							The Demo Site itself collect information about your usage, such as when you created or edited a password, when you posted a comment,
							when you triggered a system error, etc. This is needed to provide functionalities such as access and control logs within the application.
							You should setup your own test environment if you are not comfortable with this.
						</p>


					</div>
				</div>
				<div class="col5 last">
					<div class="tldr">
						<h4 class="visuallyhidden">Cookie and Tracking (Summary)</h4>
						<p>
							<i class="fa fa-thumbs-o-up"></i> Respect "<a href="https://en.wikipedia.org/wiki/Do_Not_Track" target="_blank" rel="noopener nofollow">Do Not Track</a>"
						</p>
						<p>
							<i class="fa fa-thumbs-o-up"></i> No tracking on 3rd party sites
						</p>
						<p>
							<i class="fa fa-warning"></i> We keep usage logs on demo site
						</p>
					</div>
				</div>
			</div>
				<div class="row">
					<div class="col7">
						<div>
							<span id="statistics"></span>
							<h4>Passbolt API anonymous usage report</h4>
							<p>
								When installing the API application on your own server you will be asked if you want to share anonymous usage statistics.
								Such data are sent each time you install or update the passbolt API application and are composed of aggregated information only,
								such as the total number of users or passwords. These reports are stored as anonymized results, we do not store the IP address
								nor any personal information.
							</p>
							<p>
								This functionality is off by default.
								You can opt-out of these reports at any moment by changing a setting in the temporary application configuration files.
								This file is located in app/tmp/config/anonymous_statistics.php.
							</p>
						</div>
					</div>
					<div class="col5 last">
						<div class="tldr">
							<h4 class="visuallyhidden">Anonymous usage statistics</h4>
							<p>
								<i class="fa fa-thumbs-o-up"></i> Opt-in only usage statistics
							</p>
							<p>
								<i class="fa fa-thumbs-o-up"></i> Anonymous usage statistics
							</p>
							<p>
								<i class="fa fa-thumbs-o-up"></i> Easy opt-out from usage statistics
							</p>
						</div>
					</div>
				</div>
			<div class="row">
				<div class="col7">
					<div>
						<h4>Social buttons</h4>
						<p>
							To protect you from third party tracking, we do not include any third party javascript application such as “facebook like” or “google +1” buttons on this Site.
						</p>
					</div>
				</div>
				<div class="col5 last">
						<div class="tldr">
							<h4 class="visuallyhidden">Cookie and Tracking (Summary)</h4>
							<p>
								<i class="fa fa-thumbs-o-up"></i> No 'social button' tracking
							</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col7">
					<div>
						<h3>Our use of your personal information</h3>
						<p>
							We may use your personal information only for one or more of the following purposes:
						</p><p>
							<strong>To give you access to the Service.</strong> For example, if you register to the demo section of the Site we may send you a link by email to activate your account.
						</p><p>
							<strong>To notify you about any activity within the Service.</strong> For example if you are using the demo section of the Site and if another user shares a password with you, we may send you an email notification.
						</p><p>
							<strong>To provide you with support.</strong> For example, if you leave your personal information on the help section of the Site, we may contact you to help you solve your issues or answer your questions.
						</p><p>
							<strong>To promote our services.</strong> For example, if we think you might benefit from using another service we offer, or if we think an information about a change in the current Service is relevant for you, we may contact you to tell you about it.
						</p><p>
							<strong>To bill and collect money owed to us.</strong> This includes communications with regards to invoices, receipts, payment statuses and processing issues.
						</p>
					</div>
					<div>
						<h3>Disclosure of personal information</h3>
						<p>
							We may disclose your Personal Information for one or more of the following purposes:
						</p><p>
							<strong>To provide you with the Service.</strong> For example, if you register on the Demo Site other people will be able to see the email address and name you used to register and will be able to share information with you.
						</p><p>
							<strong>To meet legal requirements.</strong> In the event we are to comply with court orders and valid subpoenas or to defend a court, arbitration, or similar proceeding.
						</p><p>
							<strong>To provide information to representatives and advisors.</strong> These include engineers, attorneys and accountants, who help us comply with legal, accounting, or security requirements.
						</p><p>
							<strong>To transfer your information</strong> in the case of a sale, merger, consolidation, or acquisition, any acquirer will be subject to our obligations under this privacy policy, including your rights to edit and delete your personal data. We will notify you of the change either by sending you an email or posting a notice on our Web site, so that you can opt-out if you wish to do so.
						</p>
					</div>
				</div>
				<div class="col5 last">
					<div class="tldr">
						<h4 class="visuallyhidden">Cookie and Tracking (Summary)</h4>
						<p>
							<i class="fa fa-thumbs-o-up"></i> Limited use of personal data
						</p>
						<p>
							<i class="fa fa-warning"></i> Personal data visible on demo site
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col7">
					<div>
						<h3>3rd Party Access</h3>
						<p>
							We will not give, sell, rent or loan any personal information to any third party. The following third parties may have access
							to your personal data under certain conditions.
						</p>
						<h4>Governments</h4>
						<p>
							Our organization is registered in Luxembourg. We are therefore subject to
							<a href="https://cnpd.public.lu/en/legislation/index.html" target="_blank" rel="noopener nofollow">luxembourgish and european</a>
							  legislative texts on data protection and privacy.
						</p>
						<p>
							Our organization relies on services (such as hosting, help desk and newsletters) provided by companies registered in the USA.
							They are obliged to provide access to notices pursuant to the Digital Millennium Copyright Act as well as judicial,
							regulatory or other governmental orders or requests valid in USA.
						</p>
						<h4>Hosting provider</h4>
						<p>
							We use Amazon Web Services to host our websites.<br>
							See AWS <a href="https://aws.amazon.com/legal/" target="_blank" rel="noopener nofollow">legal framework</a>.
						</p><p>
						<h4>Newsletter provider</h4>
						<p>
							We use Mailchimp to send newsletters.<br>
							See Mailchimp <a href="http://mailchimp.com/legal/" target="_blank" rel="noopener nofollow">legal framework</a>.
						</p>
						<h4>Help desk provider</h4>
						<p>
							We use GrooveHQ to provide support by email or on social networks.<br>
							See GrooveHQ <a href="https://www.groovehq.com/our/privacy" target="_blank" rel="noopener nofollow">privacy policy</a>.
						</p>
						<h4>Analytics provider</h4>
						<p>
							We use Piwik Cloud Pro for analytics.<br>
							See the privacy section in the Piwik <a href="https://cloud.piwik.pro/tos/" target="_blank" rel="noopener nofollow">terms of services</a>.
						</p>
						<h4>Surveys provider</h4>
						<p>
							We use typeform for some of our surveys.<br>
							See the privacy section in the Typeform <a href="https://admin.typeform.com/to/dwk6gt" target="_blank" rel="noopener nofollow">terms of services</a>.
						</p>
					</div>
				</div>
				<div class="col5 last">
					<div class="tldr">
						<h4 class="visuallyhidden">3rd party access (Summary)</h4>
						<p>
							<i class="fa fa-thumbs-o-up"></i> European laws apply
						</p>
						<p>
							<i class="fa fa-thumbs-o-down"></i> Digital Millennium act apply
						</p>
						<p>
							<i class="fa fa-thumbs-o-up"></i> Transparency of 3rd party services
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col7">
					<div>
						<h3>Deleting, editing and accessing your personal information</h3>
						<p>
							You can stop receiving our promotional emails by following the unsubscribe instructions included in every email.
						</p><p>
							You can stop receiving Service notification emails by deleting your account in the demo section of our Site.
							To delete your account send us an email at: <a href="mailto:contact@passbolt.com">contact@passbolt.com</a>
							(in the future we will allow you to delete your account from your profile page).
						</p><p>
							We can also give you access to any personal information that we hold within 60 days of any request you make by contacting us: <a href="mailto:contact@passbolt.com">contact@passbolt.com</a>.
						</p>
					</div>
					<div>
						<h3>Information security</h3>
						<p>
						We work hard to prevent unauthorized access to or unauthorized alteration, disclosure or destruction of information we hold. In particular:
						</p>
						<ul>
							<li>We aim to encrypt all of our services using SSL.</li>
							<li>We regularly review our information collection, storage and processing practices, to guard against unauthorized access to systems.</li>
							<li>We restrict access to personal information to employees, contractors and agents who need to know that information in order to process it for us, and who are subject to strict contractual confidentiality obligations.</li>
						</ul>
					</div>
					<div>
						<h3>Date of Last Update</h3>
						<p>
						    <em>This privacy policy was last updated on 25th of July 2017.</em>
						</p>
					</div>
				</div>
				<div class="col5 last">
					<div class="tldr">
						<h4 class="visuallyhidden">Deleting data (Summary)</h4>
						<p>
							<i class="fa fa-thumbs-o-up"></i> You can request access to your data
						</p>
						<p>
							<i class="fa fa-thumbs-o-up"></i> You can delete your data
						</p>
					</div>
				</div>
			</div>
			</article>
		</div>
	</div>
</div>
