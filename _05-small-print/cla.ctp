<?php
$this->assign('rootclass', 'background');
$this->assign('section', __('Legal'));
$this->assign('title', __('CLA'));
$this->assign('subtitle', __('Passbolt Contributor License Agreement'));
$this->assign('description', __('Passbolt Contributor License Agreement'));

$crumbs = array('crumbs' => array(
		__('home') => Router::url('/'),
		__('legal') => Router::url('/legal'),
		__('CLA') => Router::url('/legal/cla')
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
						<h2>Frequently asked questions</h2>
						<h3>Why do we need a Contributor Licence Agreement?</h3>
						<p>
							At passbolt we are required to have agreement with everyone who submit contributions,
							in order to make sure that we, and the user of our software, are legally entitled
							to distribute your contributed code anywhere in the world.
						</p>
						<p>
							In effect, you still own the copyright but you are giving us a licence.
							You retain the right to modify your code and use it in other projects.
						</p>
						<h3>How do I sign the Contributor Licence Agreement?</h3>
						<p>
							As part of the pull request process on github you will be asked to electronically sign passbolt CLA,
							thanks to the <a href="https://cla-assistant.io/">CLA Assistant</a>. You only need to do
							this once. You can also print it and send it to us signed by email at
							<a href="mailto:contact@passbolt.com">contact@passbolt.com</a>
						</p>
						<h3>Where can I find the Contributor Licence Agreement?</h3>
						<p>
							We use the <a href="http://harmonyagreements.org/faqs.html" target="_blank" rel="noopener nofollow">Harmony CLA</a>
							to protect your rights regarding any contribution you make to our open source projects.
							You can find our version bellow or on
							<a href="https://gist.github.com/stripthis/fd4d894872fc1503fbbe8e30f3492116" target="_blank" rel="noopener nofollow">github</a>.
						</p>
					</div>
				</div>
				<div class="col5 last">
					<div class="tldr">
						<p>Do you have a question about this CLA policy? Get in touch!</p>
						<a href="mailto:contact@passbolt.com" class="button primary">contact us</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col7">
					<div style="background: #F3F3F3;padding:1em;">
						<h1>Passbolt Contributor License Agreement</h1>

						<p>Thank you for your interest in contributing to Passbolt ("We" or "Us").</p>

						<p>This contributor agreement ("Agreement") documents the rights granted by contributors to Us. To make this document effective, please sign it and send it to Us by email or electronic submission, following the instructions at <a href="https://www.passbolt.com/help/legal/cla">https://www.passbolt.com/help/legal/cla</a>. This is a legally binding document, so please read it carefully before agreeing to it. The Agreement may cover more than one software project managed by Us.</p>

						<h2>1. Definitions</h2>

						<p>"You" means the the person or legal entity including its affiliates asked to accept this agreement. An affiliate is any entity that controls or is controlled by the legal entity, or is under common control with it.</p>

						<p>"Contribution" means any work of authorship that is Submitted by You to Us in which You own or assert ownership of the Copyright.</p>

						<p>"Copyright" means all rights protecting works of authorship owned or controlled by You, including copyright, moral and neighboring rights, as appropriate, for the full term of their existence including any extensions by You.</p>

						<p>"Material" means the work of authorship which is made available by Us to third parties. When this Agreement covers more than one software project, the Material means the work of authorship to which the Contribution was Submitted. After You Submit the Contribution, it may be included in the Material.</p>

						<p>"Submit" means any form of electronic, verbal, or written communication sent to Us or our representatives, including but not limited to electronic mailing lists, source code control systems, and issue tracking systems that are managed by, or on behalf of, Us for the purpose of discussing and improving the Material, but excluding communication that is conspicuously marked or otherwise designated in writing by You as "Not a Contribution."</p>

						<p>"Submission Date" means the date on which You Submit a Contribution to Us.</p>

						<p>"Effective Date" means the date You execute this Agreement or the date You first Submit a Contribution to Us, whichever is earlier.</p>

						<h2>2. Grants of Rights</h2>
						<h3>2.1 Copyright Licence</h3>
						<p>(a) You retain ownership of the Copyright in Your Contribution and have the same rights to use or license the Contribution which You would have had without entering into the Agreement.</p>

						<p>(b) To the maximum extent permitted by the relevant law, You grant to Us a perpetual, worldwide, non-exclusive, transferable, royalty-free, irrevocable license under the Copyright covering the Contribution, with the right to sublicense such rights through multiple tiers of sublicensees, to reproduce, modify, display, perform and distribute the Contribution as part of the Material; provided that this license is conditioned upon compliance with Section 2.3.</p>

						<h3>2.2 Patent License</h3>
						<p>For patent claims including, without limitation, method, process, and apparatus claims which You own, control or have the right to grant, now or in the future, You grant to Us a perpetual, worldwide, non-exclusive, transferable, royalty-free, irrevocable patent license, with the right to sublicense these rights to multiple tiers of sublicensees, to make, have made, use, sell, offer for sale, import and otherwise transfer the Contribution and the Contribution in combination with the Material (and portions of such combination). This license is granted only to the extent that the exercise of the licensed rights infringes such patent claims; and provided that this license is conditioned upon compliance with Section 2.3.</p>

						<h3>2.3 Outbound License</h3>
						<p>As a condition on the grant of rights in Sections 2.1 and 2.2, We agree to license the Contribution only under the terms of the license or licenses which We are using on the Submission Date for the Material or any licenses which are approved by the Open Source Initiative on or after the Effective Date, including both permissive and copyleft licenses, whether or not such licenses are subsequently disapproved (including any right to adopt any future version of a license if permitted).</p>

						<h3>2.4 Moral Rights.</h3>
						<p>If moral rights apply to the Contribution, to the maximum extent permitted by law, You waive and agree not to assert such moral rights against Us or our successors in interest, or any of our licensees, either direct or indirect.</p>

						<h3>2.5 Our Rights.</h3>
						<p>You acknowledge that We are not obligated to use Your Contribution as part of the Material and may decide to include any Contribution We consider appropriate.</p>

						<h3>2.6 Reservation of Rights.</h3>
						<p>Any rights not expressly licensed under this section are expressly reserved by You.</p>

						<h2>3. Agreement</h2>
						<p>You confirm that:</p>

						<p>(a) You have the legal authority to enter into this Agreement.</p>

						<p>(b) You own the Copyright and patent claims covering the Contribution which are required to grant the rights under Section 2.</p>

						<p>(c) The grant of rights under Section 2 does not violate any grant of rights which You have made to third parties, including Your employer. If You are an employee, You have had Your employer approve this Agreement or sign the Entity version of this document. If You are less than eighteen years old, please have Your parents or guardian sign the Agreement.</p>

						<p>(d) You have followed the instructions in <a href="https://www.passbolt.com/help/legal/cla">https://www.passbolt.com/help/legal/cla</a>, if You do not own the Copyright in the entire work of authorship Submitted.</p>

						<h2>4. Disclaimer</h2>
						<p>EXCEPT FOR THE EXPRESS WARRANTIES IN SECTION 3, THE CONTRIBUTION IS PROVIDED "AS IS". MORE PARTICULARLY, ALL EXPRESS OR IMPLIED WARRANTIES INCLUDING, WITHOUT LIMITATION, ANY IMPLIED WARRANTY OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT ARE EXPRESSLY DISCLAIMED BY YOU TO US. TO THE EXTENT THAT ANY SUCH WARRANTIES CANNOT BE DISCLAIMED, SUCH WARRANTY IS LIMITED IN DURATION TO THE MINIMUM PERIOD PERMITTED BY LAW.</p>

						<h2>5. Consequential Damage Waiver</h2>
						<p>TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, IN NO EVENT WILL YOU BE LIABLE FOR ANY LOSS OF PROFITS, LOSS OF ANTICIPATED SAVINGS, LOSS OF DATA, INDIRECT, SPECIAL, INCIDENTAL, CONSEQUENTIAL AND EXEMPLARY DAMAGES ARISING OUT OF THIS AGREEMENT REGARDLESS OF THE LEGAL OR EQUITABLE THEORY (CONTRACT, TORT OR OTHERWISE) UPON WHICH THE CLAIM IS BASED.</p>

						<h2>6. Miscellaneous</h2>
						<p>6.1 This Agreement will be governed by and construed in accordance with the laws of luxembourg excluding its conflicts of law provisions. Under certain circumstances, the governing law in this section might be superseded by the United Nations Convention on Contracts for the International Sale of Goods ("UN Convention") and the parties intend to avoid the application of the UN Convention to this Agreement and, thus, exclude the application of the UN Convention in its entirety to this Agreement.</p>

						<p>6.2 This Agreement sets out the entire agreement between You and Us for Your Contributions to Us and overrides all other agreements or understandings.</p>

						<p>6.3 If You or We assign the rights or obligations received through this Agreement to a third party, as a condition of the assignment, that third party must agree in writing to abide by all the rights and obligations in the Agreement.</p>

						<p>6.4 The failure of either party to require performance by the other party of any provision of this Agreement in one situation shall not affect the right of a party to require such performance at any time in the future. A waiver of performance under a provision in one situation shall not be considered a waiver of the performance of the provision in the future or a waiver of the provision in its entirety.</p>

						<p>6.5 If any provision of this Agreement is found void and unenforceable, such provision will be replaced to the extent possible with a provision that comes closest to the meaning of the original provision and which is enforceable. The terms and conditions set forth in this Agreement shall apply notwithstanding any failure of essential purpose of this Agreement or any limited remedy to the maximum extent possible under law.</p>
					</div>
					<div>
						<p style="margin-top:1em;">
							<em>Last updated: Monday the 9th of January 2017</em>
						</p>
					</div>
				</div>
				<div class="col5 last">
					<!-- sidebar placeholder -->
				</div>
			</div>
			</article>
		</div>
	</div>
</div>
