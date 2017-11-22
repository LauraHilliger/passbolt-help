<?php
$this->assign('rootclass', 'background');
$this->assign('section', __('Incident'));
$this->assign('title', __('Incident Report'));
$this->assign('subtitle', __('Status: chrome extension is back!'));
$this->assign('description', __('A debrief about the incidents that took the chrome plugin offline.'));

$crumbs = array('crumbs' => array(
    __('home') => Router::url('/'),
    __('incidents') => Router::url('/incidents'),
    __('09/02/2017') => Router::url('/incidents/20170210_chrome_not_available')
));
?>
<?php echo $this->element('header2'); ?>
<div class="panel main ">
    <?php echo $this->element('menu/incidents'); ?>
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
                            <h2>Summary</h2>
                            <h3>What happened?</h3>
                            <p>
                                On Thursday 9th of February 2016 evening, the extension was taken down by google from
                                the chrome web store without notice. In parallel we started receiving report of
                                the passbolt extension crashing during the setup, on the key generation step.
                                On Friday afternoon the extension had reappeared on the web store, however the 
                                key generation was still unstable.
                            </p>
                            <p>
                                The issue was introduced in chrome release version 56.
                             </p>
                            <h3>What is the current status?</h3>
                            <p>
                                Even though we cannot produce a bug fix for chrome itself we have
                                reported the issue to Google as well as
                                <a href="https://bugs.chromium.org/p/chromium/issues/detail?id=692721">Chrome</a>
                                 and Openpgpjs maintainers and published a new version (
                                 <a href="https://github.com/passbolt/passbolt_browser_extension/releases/tag/v1.4.2">v1.4.2</a>)
                                of passbolt with a workaround to make the plugin stable again.
                            </p>
                            <h3>Why was this happening?</h3>
                            <p>
                                The browser and extension were crashing when calling some functions of cryptographic
                                libraries in two situations.
                            </p>
                            <img src="<?php echo Router::url('/img/www_only/2017/02/09022017_incident/chrome-crash-report.png'); ?>">
                            <p>
                                Firstly Openpgpjs uses native functions implemented by the Web Cryptography API of the browser
                                whenever available. In chrome 56, these native functions seem to be buggy and our 
                                extension crashed whenever it was trying to use them.
                            </p>
                            <p>
                                Also even without using the native chrome Crypto API another issue
                                leading to crashes was identified when parsing the keys.
                            </p>
                            <h3>What does it mean for passbolt security?</h3>
                            <p>
                                Since this is a chrome stability issue there is no change in the risk model.
                            </p>
                            <h3>Status step by step</h3>
                            <ul>
                                <li><strong>Identification of the exact cause:</strong> we know
                                exactly which primitives are causing this crash. We have published a
                                <a href="https://github.com/passbolt/chrome56_openpgp_crashtest">test
                                 extension</a> to help other developers reproduce the issue.
                                </li><li><strong>Make a fix for the extension:</strong>
                                we proposed a temporary fix until the bug in chrome gets fixed by Google.
                                </li><li><strong>Republish it and wait:</strong> we
                                published the extension and waited for Google validation.
                                </li><li><strong>Chrome extension is back in business</strong>
                                </li><li><strong>Wrap up this incident report</strong>. We will work on follow up activities
                                and potential fixes to avoid similar issue in the future.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col5 last">
                        <div class="tldr message success">
                            <h4>Current status:</h4>
                            1. Root cause identification<br>
                            2. Make a fix for the extension<br>
                            3. Publish a new version<br>
                            <strong>4. Chrome extension is back<br></strong>
                            <h5>Last updated: 2017-02-15 21:30:00 CET</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col7">
                        <h3>Event timeline</h3>
                        <ul>
                            <li>2017-02-15 21:30:00 CET: Bug report filled on <a href="https://bugs.chromium.org/p/chromium/issues/detail?id=692721">Chrome tracker</a>.
                            </li><li>2017-02-11 21:30:00 CET: A fix is published on Google chrome webstore. chrome extension download link is restored and don't link to this page anymore.
                            </li><li>2017-02-11 21:00:00 CET: Reported the issue back to openpgpjs and chrome with details on how to reproduce the issue.
                            </li><li>2017-02-11 20:30:00 CET: Update on twitter and this page. Fix in progress.
                            </li><li>2017-02-11 17:00:00 CET: All issues isolated and published on a <a href="https://github.com/passbolt/chrome56_openpgp_crashtest">minimal chrome extension</a>
                            </li><li>2017-02-11 12:40:00 CET: Investigation on-going to try reproduce the issue. Switching openpgp.config.use_native = false solve the key generation issue but another issue is still present.
                            </li><li>2017-02-10 15:40:00 CET: The passbolt plugin page is back on google chrome web store but the plugin key generation step is still unstable. Thomas from Mailvelope joined us to investigate the issue.
                            </li><li>2017-02-10 13:30:00 CET: Investigation on-going. We publish this page. Still no response from Google.
                            </li><li>2017-02-10 07:30:00 CET: Technical investigation continues. We’ll come up with a fix asap. Still waiting to hear from chrome team.
                            </li><li>2017-02-10 03:03:00 CET: Contact the maintainers of openpgpjs and mailvelope by email to explain the issue and know if they received similar reports.
                            </li><li>2017-02-10 02:30:00 CET: Communication on facebook / twitter about the chrome extension taken down. Firefox can still be used.
                            </li><li>2017-02-10 00:50:00 CET: Chrome team confirms that they received our email, and that it has been forwarded to the pertinent team.
                            </li><li>2017-02-10 00:30:00 CET: Realize that mailvelope another chrome extension, who is using openpgpjs1.x is not affected by the issue. The issue seems to be only between chrome56 and openpgpjs 2.x.
                            </li><li>2017-02-09 23:30:00 CET: Write the the chrome team to have more details regarding the take down of our extension, through different channels.
                            </li><li>2017-02-09 23:00:00 CET: After playing with openpgpjs configuration options, we realize that setting use_native=false (which disable the use of browser’s native crypto functions) fixes the crash issue during the setup when the key is generating. But introduces a new crash at password encryption. Setting use_native on and off could be a possible workaround.
                            </li><li>2017-02-09 22:35:00 CET: Confirm the extension crashes only when generating a key. Importing a key works fine.
                            </li><li>2017-02-09 22:25:00 CET: Confirm that the extension crashes during the setup on chrome 56 only. It’s working fine on chrome 55. We start investigating in that direction.
                            </li><li>2017-02-09 22:00:00 CET: Receive our first report saying that the plugin crashes during passbolt setup.
                            </li><li>2017-02-09 20:50:00 CET: Start investigating and try to understand what changes we’ve made in our extension that could break the compliancy with the chrome rules.
                            </li><li>2017-02-09 20:45:00 CET: Confirm that chrome extension has been taken down. We haven’t received any communication from google regarding the removal, nor any explanation.
                            </li><li>2017-02-09 20:30:00 CET: Receive our user first feedback informing us that the chrome extension is not available anymore on the webstore.
                            </li>
                        </ul>
                    </div>
                    <div class="col5 last">
                        <!-- placeholder -->
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
