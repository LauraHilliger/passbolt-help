<?php
$meta = [
    'title' => 'Passbolt open source password manager now available on chrome web store',
    'slug' => '25112016_Chrome_release',
    'created' => '25 November 2016',
    'teaser' => 'Passbolt version 1.3.0 marks the beginning of the solution on the Google Chrome browser. Passbolt is
                a free and open source password manager designed for collaboration and based on OpenPGP, that was previously
                only available on Firefox.'
];
$this->set('releases', array_merge($this->get('releases'), array($meta)));
?>
<?php $this->start('article'); ?>
    <div class="row">
        <span id="<?php echo $meta['slug']; ?>" ></span>
        <div class="col7">
            <h2><?php echo $meta['title']; ?></h2>
            <p><em>Esch, Luxembourg, <?php echo $this->Time->format($meta['created'], '%B %e, %Y'); ?>.</em></p>
            <p>
                Passbolt version 1.3.0 marks the beginning of the solution on the Google Chrome browser. Passbolt is
                a free and open source password manager designed for collaboration and based on OpenPGP, that was previously
                only available on Firefox.
            </p>
            <p>
                The adoption of Chrome as a platform was only natural considering the clear user plebiscite. According to a
                survey dating from September 2016, 86% of the respondents expressed the wish to see a prompt support from Google
                browser. These users can now download the passbolt extension on the chrome web store. Users previously using
                Firefox who would like to switch to Chrome can do so via the already available account recovery functionality.
            </p>
            <p>
                A browser plugin is necessary for security reasons, mostly in order to guarantee the integrity of the javascript
                cryptographic library. Indeed, much like Firefox, Chrome extensions are cryptographically signed and subject to
                a review to check against malicious code. A major benefit of such plugin architecture reside in the separation of
                the execution environment: the webpage cannot interact with the data stored in the plugin. Such isolation can
                therefore act as an additional safety mechanism in the case of a compromised passbolt server serving malicious
                javascript, or an opponent performing a man in the middle attack to modify the javascript on the wire.
            </p>
            <p>
                The next steps for the solution are the finalisation of the group feature specifications in collaboration with the
                community and organisation of an independent security audit. In order to support this initiative, the passbolt team
                has applied to the Secure Open Source Mozilla program. The passbolt team will also be present at the Fosdem in
                february 2017 in Brussels to gather additional feedback from the users and discuss the future of the solution.
            </p>
            <ul>
                <li><a href="https://www.passbolt.com/release/notes">Release notes</a></li>
                <li><a href="https://chrome.google.com/webstore/detail/passbolt-extension/didegimhafipceonhjepacocaffmoppf">Passbolt on chrome webstore</a></li>
                <li><a href="https://www.mozilla.org/en-US/moss/secure-open-source/">Mozilla Secure Open Source Program</a></li>
            </ul>
        </div>
        <div class="col5 last">
            <div class="tldr">
                <a href="<?php echo Router::url('/download/chrome'); ?>" target="_blank" rel="noopener nofollow">
                    <img src="<?php echo Router::url('/img/third_party/ChromeWebStore.png'); ?>" alt="Chrome Web Store" style="max-width:180px;"/>
                </a>
                <a href="<?php echo Router::url('/download/chrome'); ?>" class="button primary" style="margin-top:1em;">
                   Chrome web store
                </a>
            </div>
        </div>
    </div>
<?php $this->end(); ?>