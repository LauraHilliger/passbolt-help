<?php
$meta = [
    'title' => 'September',
    'slug' => 'September',
    'number' => 'v1.6.5',
    'created' => 'Thu, 14 September 2017 14:30:00 +0100',
    'song' => 'https://www.youtube.com/watch?v=Gs069dndIYk',
    'description' => 'Highlights: XSS vulnerability fix, healthcheck improvements, firefox webextension.'
];
$this->set('releases', array_merge($this->get('releases'), array($meta)));
?>
<?php $this->start('article'); ?>
    <div class="row">
        <span id="<?php echo $meta['slug']; ?>" ></span>
        <span id="<?php echo $meta['number']; ?>" ></span>
        <div class="col7">
            <h2><a href="<?php echo $meta['song']; ?>" target="_blank"><?php echo $meta['number']; ?> ~ <?php echo $meta['title']; ?></a></h2>
            <p>Release date: <?php echo $this->Time->format($meta['created'], '%B %e, %Y'); ?>.</p>
            <p class="message error">
                This release ships with important bug fix for a severe vulnerability issue found by security
                researcher Sumit Sahoo. Please update your passbolt production instance(s) if any.
            </p>
            <p>
                Because of this vulnerability, a malicious member of your organization could craft a
                resource url and share it with one or more victims on the same passbolt instance.
                By clicking on the malicious url, the victim will run an arbitrary javascript defined
                by the attacker. This can lead to data integrity or availability issues.
                The confidentiality of passwords and private key is not affected since they live in
                a separate javascript sandbox (e.g. the browser web extension). You can learn more
                about it in the
                <a href="<?php echo Router::url('/incidents/20170914_xss_on_resource_urls'); ?>">CVE report</a>.
            </p>
            <p>
                This release also improves the health check by adding detection of
                installation errors such as permission issues in the cache folders or testing the
                GPG setup with encryption and decryption operations. This release also includes some
                more improvements on the validation rules.
            </p>
            <p>
                We are also glad to announce that the Firefox plugin 1.6.5 will be the last legacy
                version (with embed webextension to enable data migration). It is available on the
                stable channel for install.
            </p>
            <div class="message notice">
                <p><strong>If you were using the Firefox plugin</strong> that was distributed on
                the dev channel, you can shift back to the stable channel by deactivating your current
                    plugin, and enabling the stable version</p>
                <a href="https://addons.mozilla.org/firefox/downloads/latest/passbolt/addon-687753-latest.xpi" class="button">
                    switch to stable version
                </a>
            </div>
            <p style="margin-top:1em;">
                A special thanks to Phillip and
                <a href="https://addons.mozilla.org/en-US/firefox/user/azbb/" target="_blank" rel="noopener">Erosman</a>
                from Mozilla addon review team for their help
                in reviewing this plugin, and to
                <a href="http://sumitsahoo.com/" target="_blank" rel="noopener">Sumit Sahoo</a> for the vulnerability report.
            </p>
            <div>
                <h3>Passbolt API</h3>
                <ul>
                    <li>PASSBOLT-2383: Add + and \ to the list of allowed characters for the Resource fields: name, username and description
                    </li><li>PASSBOLT-2371: Force the charset of the cake_sessions table in utf8
                    </li><li>PASSBOLT-2325: As system administrator I shouldn't be able to execute passbolt CLI commands as root
                    </li><li>PASSBOLT-2397: As system administrator I should see in the healthcheck if app/tmp content and app/webroot/img/public content are writable
                    </li><li>PASSBOLT-1991: As system administrator I should see in the healthcheck if the server key can be used for encrypting/decrypting
                    </li><li>PASSBOLT-2409: Noopener on resource url in password workspace
                    </li><li>PASSBOLT-2402: XSS on resource url in password workspace
                    </li>
                </ul>
                <h3>Browser extension</h3>
                <ul>
                    <li>PASSBOLT-2386: Fix login message</li>
                    <li>PASSBOLT-2386: Fix group edit / resource share as per amo reviewers</li>
                    <li>PASSBOLT-2386: Mark legacy addon as compatible with multiprocess</li>
                    <li>PASSBOLT-2386: Implement amo reviewers recommendations</li>
                    <li>PASSBOLT-2386: Remove data/js/debug from non debug builds version</li>
                </ul>
            </div>
        </div>
        <div class="col5 last" >
            <div class="tldr">
                <p>
                    "While chasing the clouds away"
                </p>
                <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                    <i class="fa fa-music"></i>
                </a>
            </div>
        </div>
    </div>
<?php $this->end(); ?>
