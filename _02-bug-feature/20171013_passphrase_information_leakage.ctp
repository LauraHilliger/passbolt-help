<?php
$this->assign('rootclass', 'background');
$this->assign('section', __('Incident'));
$this->assign('title', __('Vulnerability Report'));
$this->assign('subtitle', __('Status: fixed with v1.6.7'));
$this->assign('description', __('A debrief about the passphrase information leakage during the setup.'));

$crumbs = array('crumbs' => array(
    __('home') => Router::url('/'),
    __('incidents') => Router::url('/incidents'),
    __('13/10/2017') => Router::url('/incidents/20171013_passphrase_information_leakage')
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
                            <p>
                                Passbolt Extension version 1.6.6 is vulnerable to an information leakage during the setup.
                            </p>
                            <li><strong>CVE:</strong> TBD.</li>
                            <li><strong>Product affected:</strong> Passbolt Extension.</li>
                            <li><strong>Version affected:</strong> v1.6.6 and below.</li>
                            <li><strong>Version fixed:</strong> v1.6.7</li>
                            <li><strong>Affected component:</strong> Web extension private key passphrase entered before key generation.</li>
                            <li><strong>Vulnerability Type:</strong> Information leakage.</li>

                            <h3>Impact of issue</h3>
                                <p>Passphrase disclosure in the browser’s local storage between the key generation phase until the end of the setup.</p>

                            <h3>Attack vector / exploitation</h3>
                                <p>An attacker having an access to the user file system during the extension setup, in the scenario where the key is generated
                                    by the extension (as opposed to being imported), at the time between the key generation step and the completion, could read
                                    the passphrase directly from the local storage. This information could be used to log in into passbolt on behalf of the user
                                    and access / decrypt the secrets, therefore creating data confidentiality, integrity and availability issues.</p>

                            <h3>Credits</h3>
                                <p>This issue was found and reported by Juan Wajnerman.</p>

                            <h2>Other information</h2>
                            <h3>How did this happen?</h3>
                                <p>Passbolt web extension use the local storage to store information
                                    about the setup so that a user  that close the browser window can
                                    come back at a later stage to complete the setup instead of starting from scratch.</p>


                            <h3>How bad is this?</h3>
                                <p>From our perspective since the attacker requires an already high privilege in order
                                    to access to the local storage of the browser via the file system, and that this
                                    information is available only temporarily (e.g. it is removed when the setup is completed),
                                    we consider that the exploitability of this vulnerability is low. However considering the high
                                    impact and since this vulnerability can be mitigated we decided to act on it.</p>

                            <h3>What are you doing about it?</h3>
                                <p>From version 1.6.7 onward a user will not be able to continue the setup after closing the
                                    browser window and will have to start the process from scratch starting by clicking on
                                    the setup link in their mailbox.</p>

                        </div>
                    </div>
                    <div class="col5 last">
                        <div class="tldr message success">
                            <h4>Current status:</h4>
                            1. Try first to reproduce the issue<br>
                            2. Acknowledge to the reporter<br>
                            3. Get a fix/patch prepared<br>
                            4. Release new version.<br>
                            5. Prepare a report about the issue.<br>
                            <strong>6. Feature the problem in the release.</strong>
                            <h5>Last updated: 2017-10-13 12:00:00 CET</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col7">
                        <h3>Event timeline</h3>
                        <ul>
                            <li>2017-10-13 04:40:00 CET: Juan Wajnerman notify passbolt team about the issue.
                            </li><li>2017-10-13 08:00:00 CET: Passbolt team starts working on an impact assessment.
                            </li><li>2017-10-13 08:50:00 CET: Passbolt team notify Juan and starts working on afix.
                            </li><li>2017-10-13 10:40:00 CET: v.1.6.7 is being tested on continuous integration servers.
                            </li><li>2017-10-13 12:00:00 CET: v.1.6.7 submitted on chrome webstore and firefox add-ons.
                            </li><li>2017-10-13 12:00:00 CET: This incident report is published.
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
