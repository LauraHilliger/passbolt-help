<?php
$meta = [
    'title' => 'California Soul',
    'slug' => 'CaliforniaSoul',
    'number' => 'v1.3.0',
    'created' => 'Thu, 24 Nov 2016 21:00:00 +0100',
    'song' => 'https://www.youtube.com/watch?v=kC2QK6KHnEA',
    'description' => 'Highlights: Passbolt is now available on Chrome!'
];
$this->set('releases', array_merge($this->get('releases'), array($meta)));
?>
<?php $this->start('article'); ?>
    <div class="row">
        <span id="<?php echo $meta['slug']; ?>" ></span>
        <span id="<?php echo $meta['number']; ?>" ></span>
        <div class="col7">
            <h2><a href="<?php echo $meta['song']; ?>" target="_blank" rel="noopener nofollow"><?php echo $meta['number']; ?> ~ <?php echo $meta['title']; ?></a></h2>
            <p>Release date: <?php echo $this->Time->format($meta['created'], '%B %e, %Y'); ?>.</p>
            <p>
                <a href="<?php echo Router::url('/download/chrome'); ?>" target="_blank" rel="noopener nofollow">
                    <img src="<?php echo Router::url('/img/third_party/ChromeWebStore.png'); ?>" alt="Chrome Web Store" style="max-width:180px;"/>
                    <span class="visuallyhidden">Let's get started!</span>
                </a>
            </p>
            <p>
                This release marks the beginning of passbolt support on the chrome browser.
                You can now download the passbolt extension on the google store.
                Special thanks to Diego, Lilian and Shruti who helped us test the prototypes!
            </p>
            <p>
                While we have tried our best to vet the chrome extension thoroughly, some bugs might still be present.
                Feel free to report them on
                <a href="https://github.com/passbolt/passbolt_browser_extension/issues/new">github</a>
                or by sending us an <a href="mailto:contact@passbolt.com">email</a>.
            </p>
            <figure>
                <img src="<?php echo Router::url('/img/www_only/2016/11/AN_recover_chrome_640.jpg', true); ?>" alt="Recover an account" style="max-width:640px;"/>
            </figure>
            <p class="message notice">
                <strong>Did you know?</strong>
                You can switch from Firefox to Chrome and vice versa using the recover account functionality.
                Fill up the form with your email address, follow the link, import your private
                key and you are good to go!
            </p>
            <p>
                Another change introduced in this release is the anonymous usage statistics.
                This feature, turned off by default to respect your
                <a href="<?php echo Router::url('/privacy'); ?>">privacy</a>, will send anonymous usage reports to
                passbolt.com every time you install or update the API application.
                These reports are needed to help us get a better sense of the usage of passbolt in the wild.
            </p>
            <p>
                Our next big step includes locking down the specifications for the group feature.
                We are also working on organizing an independent code review.
                If you would like to help us with this, please take a few minutes to nominate passbolt for
                <a href="https://www.mozilla.org/en-US/moss/secure-open-source/" target="_blank" rel="noopener nofollow">The Secure Open Source Mozilla program</a>!
            </p>
            <figure>

                <a href="https://www.mozilla.org/en-US/moss/secure-open-source/" target="_blank" >
                <img src="<?php echo Router::url('/img/www_only/2016/11/moz_icon_MOSS-open-source-security.svg'); ?>" alt="MOSS Open Source Security"
                    style="max-width:220px; margin-top:-1em;"/></a>
                <a href="https://www.mozilla.org/en-US/moss/secure-open-source/" target="_blank" class="button primary big">
                    Nominate passbolt now!</a>
            </figure>
            <div>
                <h3>Passbolt API</h3>
                <h4>Fixed bugs & new features</h4>
                <ul>
                    <li>PASSBOLT-1726 Implement anonymous usage data</li>
                    <li>PASSBOLT-1725 Misc changes for Chrome support</li>
                    <li>PASSBOLT-1721 SSL detection not working in healthcheck (<a href="https://twitter.com/p4tpr0" target="_blank" rel="noopener nofollow">thanks @patpro!</a>)</li>
                    <li>PASSBOLT-1708 Accept JSON data content type for HTTP PUT during setup</li>
                </ul>
                <h3>Passbolt Browser Extension</h3>
                <h4>Fixed bugs & new features</h4>
                <ul>
                    <li>PASSBOLT-1725 Chrome support</li>
                    <li>PASSBOLT-1708 Refactor Request get and post to use fetch</li>
                </ul>
            </div>
        </div>
        <div class="col5 last" >
            <div class="tldr">
                <p>
                    "They had the melody and the beat, but it still didn't seem complete"
                </p>
                <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                    <i class="fa fa-music"></i>
                </a>
            </div>
        </div>
    </div>
<?php $this->end(); ?>