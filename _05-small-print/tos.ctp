<?php
$this->assign('rootclass', 'background');
$this->assign('section', __('Legal'));
$this->assign('title', __('Terms'));
$this->assign('subtitle', __('Terms of Service, now human readable!'));
$this->assign('description', __('Passbolt terms of service. They are human readable, we promise!'));

$crumbs = array('crumbs' => array(
		__('home') => Router::url('/'),
		__('legal') => Router::url('/legal'),
		__('terms of service') => Router::url('/terms')
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
						<h2>Terms of Service</h2>
						<p>
							This website, www.passbolt.com and its subdomains (collectively referred to as the "Site" in these Terms of Service)
							is owned and operated by Passbolt SARL ("we", "us" or "Passbolt"). By using and accessing our Site,
							you ("you", "user" or, "end user") agree to these Terms of Service (collectively, the "Terms of Service", “Terms and
							conditions” or "Agreement").
						</p><p>
							IF YOU DO NOT AGREE TO THE TERMS OF THIS AGREEMENT, IMMEDIATELY STOP ACCESSING THIS SITE.
						</p>
					</div>
					<div>
						<h3>Intellectual Property</h3>
						<p>
							You acknowledge and agree that all content and information on the Site is protected by proprietary rights and laws.
						<p></p>
							Unless otherwise noted, we own the intellectual property rights in the website and material on the website. Subject to
							the licenses below, all our intellectual property rights are reserved.
						</p>
						<p>
                            Passbolt and the passbolt key logo are registered trademarks of Passbolt SARL in The Benelux Office for Intellectual
                            Property (BOIP).
                        </p>
						<p>
							All 3rd party product names, logos, and brands are property of their respective owners. All company, product and service names used
							in this website are for identification purposes only and do not imply endorsement.
						</p>
					</div>
				</div>
				<div class="col5 last">
					<div class="tldr">
						<p>Do you have a question about our terms of service? Get in touch!</p>
						<a href="mailto:contact@passbolt.com" class="button primary">contact us</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col7">
					<div>
						<h3>Licenses</h3>
						<p>
							Unless otherwise noted, all Passbolt software presented on the Site (including but not limited to Passbolt application
							and browser extensions, testing and deployment tools, documentation and artwork included with the code etc.)
							is available under Free Software Foundation's
							<a href="http://www.gnu.org/licenses/agpl-3.0.html" target="_blank" rel="noopener nofollow">GNU AGPL v3.0</a>.
						</p>
						<p>
							Unless otherwise noted, the Site content (including but not limited to articles, blog entry, technical documentation,
							diagrams and illustrations, etc.) are licensed under
							<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank" rel="noopener nofollow">Creative Commons BY SA 4.0 License</a>.
							You can copy and redistribute the materials in any medium or format remix, transform, and build upon the material
							or any purpose, even commercially. You must give appropriate credit, provide a link to the license, and indicate if
							changes were made. You may do so in any reasonable manner, but not in any way that suggests we endorses you or your
							use. If you remix, transform, or build upon the material, you must distribute your contributions under the same license
							as the original.
						</p>
						<p>
							Licences and attribution for the components used within passbolt are available in
							the <a href="<?php Router::url('/credits'); ?>">credit section</a>.
						</p>
					</div>
				</div>
				<div class="col5 last">
					<div class="tldr">
						<h4 class="visuallyhidden">License Summary</h4>
						<p>
							<i class="fa fa-thumbs-o-up"></i> AGPL for the code
						</p>
						<p>
							<i class="fa fa-thumbs-o-up"></i> CC-BY-SA for the rest
						</p>
						<p>
							<i class="fa fa-hand-peace-o"></i>
							<a href="<?php echo Router::url('/credits'); ?>">Check out the credits</a>
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col7">
					<div>
						<h3>Privacy policy</h3>
						<p>
							Our privacy policy is an integral part of this Agreement and is available at:
							<a href="<?php echo Router::url('/privacy'); ?>">https://www.passbolt.com/privacy</a>.
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col7">
					<div>
						<h3>Modifications to this Agreement</h3>
						<p>
							Passbolt reserves the right to change or modify any of the terms and conditions contained in this Agreement at any time.
						</p>
						<p>
							You acknowledge and agree that it is your responsibility to review the Site and these terms of
							service from time to time.
						</p>
						<p>
							After a change in the term you have 30 days to respond (a) by informing us that you agree to the new terms or prices, (b) by
							informing us that you disagree, in which case we may on a case to case basis agree to continue providing you with the Service
							under the previous terms and/or prices, or (c) by giving us notice that you terminate this agreement regardless of the remaining
							duration you had agreed to under the previous terms.
						</p>
						<p>
							Continuation of use after 30 days will constitute agreement to the new terms.
						</p>
					</div>
				</div>
				<div class="col5 last">
					<div class="tldr">
						<h4 class="visuallyhidden">Modification (Summary)</h4>
						<p>
							<i class="fa fa-thumbs-o-up"></i> 30 days to review changes
						</p>
						<p>
							<i class="fa fa-thumbs-o-up"></i> Possibility to negotiate
						</p>
						<p>
							<i class="fa fa-thumbs-o-up"></i> Right to leave the service
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col7">
					<div>
						<h3>Termination of Use</h3>
						<p>
							Passbolt shall have the right to immediately terminate or suspend, in its discretion, your access to all or part of the Site
							with or without notice for any reason.
						</p>
					</div>
				</div>
				<div class="col5 last">
					<div class="tldr">
						<h4 class="visuallyhidden">Modification (Summary)</h4>
						<p>
							<i class="fa fa-thumbs-o-down"></i> Can be stopped at anytime
						</p>
						<p>
							<i class="fa fa-thumbs-o-down"></i> Can be stopped for any reason
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col7">
					<div>
						<h3>Disclaimer of Warranty</h3>
						<p>
							You expressly agree that use of the Site is at your sole risk and discretion. The Site and all content and other information
							contained on the Site is provided on an "AS IS" and "AS AVAILABLE" basis without warranty of any kind, whether express or implied.
							Passbolt makes no warranty that (a) the Site and content or information will be uninterrupted, timely, secure or error-free,
							(b) the results that may be obtained from use of this Site will be effective, accurate or reliable. The Site may include
							technical mistakes, inaccuracies or typographical errors. We reserves the right to change the Site content and information at
							any time without notice.
						</p>
					</div>
					<div>
						<h3>Limitation of Liability</h3>
						<p>
							In no event shall Passbolt or its affiliates be liable for any indirect, incidental, special, punitive damages or consequential
							damages of any kind, or any damages whatsoever arising out of or related to your use of the Site, the content and other information
							obtained therein.
						</p>
					</div>
					<div>
						<h3>Third-Party Sites</h3>
						<p>
							The Site may contain links to other websites maintained by third-parties. These links are provided solely as a convenience
							and does not imply endorsement of, or association with, the party by Passbolt.
						</p>
					</div>
				</div>
				<div class="col5 last">
					<div class="tldr">
						<h4 class="visuallyhidden">Modification (Summary)</h4>
						<p>
							<i class="fa fa-certificate"></i> No warranty, use at your own risk
						</p>
						<p>
							<i class="fa fa-bug"></i> May contain errors and bugs
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col7">
					<div>
						<h3>Indemnification</h3>
						<p>
							You will indemnify and hold harmless Passbolt, our affiliates, officers, agents, and employees from any claim, suit or
							action arising from or related to the use of the Services or violation of these terms, including any liability or expense
							arising from claims, losses, damages, suits, judgements, litigation costs and attorney's fees.
						</p>
					</div>
				</div>
				<div class="col5 last">
					<div class="tldr">
						<h4 class="visuallyhidden">Abuse (Summary)</h4>
						<p>
							<i class="fa fa-thumbs-o-down"></i> You shall defend and indemnify us
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col7">
					<div>
						<h3>Abuse</h3>
						<p>
							You will not abuse this service to invade the privacy and violate the rights of others. Abuse by making use of the Service
							includes sending unsolicited email (“Spam”) for which you explicitly agree to pay a compensation of 10 USD per incident and recipient.
						</p>
					</div>
				</div>
				<div class="col5 last">
					<div class="tldr">
						<h4 class="visuallyhidden">Abuse (Summary)</h4>
						<p>
							<i class="fa fa-thumbs-o-up"></i> Spammers will be fined
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col7">
					<div>
						<h3>Governing Law</h3>
						<p>
							Any disputes arising out of or related to these Terms of Service and/or any use by you of the Site shall be governed
							laws of the grand duchy of luxembourg, without regard to the conflicts of laws provisions therein.
						</p>
					</div>
				</div>
				<div class="col5 last">
					<div class="tldr">
						<h4 class="visuallyhidden">Governing Law (Summary)</h4>
						<p>
							<i class="fa fa-hand-peace-o"></i> Made in Europe!
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col7">
					<div>
						<h3>Date of Last Update</h3>
						<p>
							This agreement was last updated on August 30th, 2017.
						</p>
					</div>
				</div>
			</div>
			</article>
		</div>
	</div>
</div>
