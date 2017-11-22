<?php
$this->assign('rootclass', 'background');
$this->assign('section', __('Incident'));
$this->assign('title', __('Vulnerability Report'));
$this->assign('subtitle', __('Status: fixed with v1.6.5'));
$this->assign('description', __('A debrief about the XSS on resource urls.'));

$crumbs = array('crumbs' => array(
    __('home') => Router::url('/'),
    __('incidents') => Router::url('/incidents'),
    __('14/09/2017') => Router::url('/incidents/20170914_xss_on_resource_urls')
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
                                Passbolt API version 1.6.4 is vulnerable to a XSS in the url field on the password workspace grid and sidebar.
                            </p>
                            <li><strong>CVE:</strong> TBD.</li>
                            <li><strong>Product affected:</strong> Passbolt API, Passbolt Docker.</li>
                            <li><strong>Version affected:</strong> v1.6.4 and below.</li>
                            <li><strong>Version fixed:</strong> v1.6.5</li>
                            <li><strong>Affected component:</strong> Resource url</li>
                            <li><strong>Vulnerability Type:</strong> Cross Site Scripting (XSS)</li>

                            <h3>Impact of issue</h3>
                                <p>Code execution in the passbolt javascript application context.
                                The confidentiality of passwords, passphrase and private key is not affected.</p>

                            <h3>Attack vector / exploitation</h3>
                                <p>A registered passbolt user can create a malicious resource url and share it
                                with one or more victims on the same passbolt instance. By clicking on the url
                                of that resource the victim will run the javascript defined by the attacker.
                                This can be used by the attacker to modify or delete resources that the victim
                                has access to, therefore creating data integrity or availability issues.</p>

                            <h3>Credits</h3>
                                <p>This issue was found and reported by Sumit Sahoo.</p>

                            <h2>Other information</h2>
                            <h3>How did this happen?</h3>
                                <p>Initially, the passbolt resource url field implemented pretty strong validation rules
                                allowing only certain url schemes such as http or https only. Naturally, with time, our
                                early private alpha testers requested to allow other url schemes such as ftp or ssh, so
                                more relaxed rules were introduced prior to the public launch.
                                When the URL was later on made clickable the team missed the security implications of that decision.

                            <h3>Are there other XSS vulnerability present?</h3>
                                <p>Passbolt is supposed to be fairly well protected from XSS triggered by users because
                                we forbid the use of characters such as ‘<’ and ‘>’ in the form data input / api.
                                However in this particular case this protection was not enough.</p>

                            <h3>What are you doing about it?</h3>
                                <p>With the upcoming version 2 we are in the process of relaxing user input even further,
                                so to compensate for that extra risk we will review all our use of innerHTML function or
                                similar (such as jQuery.html). We have already completed this review in the plugin with
                                version 1.6.5. We are also looking into adding additional automated XSS tests as part
                                of our continuous integration processes.

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
                            <h5>Last updated: 2017-09-14 16:40:00 CET</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col7">
                        <h3>Event timeline</h3>
                        <ul>
                            <li>2017-09-13 22:30:00 CET: Passbolt team received a security vulnerability report from Sumit Sahoo.
                            </li><li>2017-09-14 07:00:00 CET: early morning we acknowledge the issue, start working on a fix and start looking for similar issues in other part of the code.
                            </li><li>2017-09-14 14:00:00 CET: We deploy a fix on the demo server
                            </li><li>2017-09-14 14:00:00 CET: We notify the reporter that a fix has been deployed.
                            </li><li>2017-09-14 14:30:00 CET: We publish the fix on github, the release notes and this report.
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
