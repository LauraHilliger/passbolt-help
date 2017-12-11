<?php
$meta = [
    'title' => 'Won\'t be long',
    'slug' => 'WontBeLong',
    'number' => 'v1.2.0',
    'created' => 'Sun, 16 Oct 2016 20:00:00 +0100',
    'song' => 'https://youtu.be/RQ99ZV2G-40',
    'description' => 'Highlights: Fixing issues reported on github, prep for chrome plugin'
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
                This release took a little bit more time than expected, because a lot of good things have happened since
                August. As you may have noticed, passbolt has been selected by
                <a href="http://en.luxinnovation.lu/Services/Support-for-innovative-start-ups/Fit-for-Start" target="_blank" rel="noopener nofollow">Luxinnovation</a>
                the Luxembourg public agency for innovation to take part of their acceleration program.
                The good news, apart from the project financial viability on the short term, is that some of us should be
                moving full time on the project in the next few months.
            </p>
            <p>
                Regarding improvements on the product side, we focused on the issues you reported on Github
                such as allowing the '+' char in the email address field, increasing the size of the URL
                and description fields. We also fixed a critical bug that occured during the setup, where the downloaded
                private key were actually empty (see side note).
            </p>
            <p>
                Because of these changes <strong>you will need to run a small migration script</strong> if you
                already have v1.1.0 installed and running. Make sure you make a backup before running it! You can find
                more information below these release notes.
            </p>
            <p>
                Last but not the least, we spent some time on the Chrome plugin project and doing structural changes
                on the Firefox plugin that will allow us to reuse more or less the same code base for both browser.
                We also worked on improving the way we run our automated tests, enabling them to run on saucelabs, but also
                going from an execution time of 1h 30m down to 15min using some parallelization magic!
            </p>
            <p>
                A big thank you for everyone who spent some much valuable time to test and report bugs:
                <a href="https://github.com/veisis" target="_blank" rel="noopener nofollow">veisis</a>,
                <a href="https://github.com/LegendPJ" target="_blank" rel="noopener nofollow">LegendPG</a>,
                <a href="https://github.com/infectormp" target="_blank" rel="noopener nofollow">infectormp</a> and
                <a href="https://github.com/Imami" target="_blank" rel="noopener nofollow">Imami</a>.
            </p>
            <div>
                <h3>Passbolt API</h3>
                <h4>Added improvements</h4>
                <ul>
                    <li>PASSBOLT-1706 <a href="https://github.com/passbolt/passbolt/issues/18" target="_blank" rel="noopener nofollow">GITHUB-18</a>
                        Resource Description length is too short, should be 10K characters</li>
                    <li>PASSBOLT-1658 <a href="https://github.com/passbolt/passbolt/issues/18" target="_blank" rel="noopener nofollow">GITHUB-18</a> Resource URI length is too short, should be 1024 characters</li>
                    <li>PASSBOLT-1637 <a href="https://github.com/passbolt/passbolt/issues/14" target="_blank" rel="noopener nofollow">GITHUB-14</a> The "+" is not allowed in the email address field while adding a new user</li>
                    <li>PASSBOLT-1525 Test coverage for SetupControllerTest & CakeErrorController</li>
                    <li>PASSBOLT-1694 Default config change: debug should be set to 0</li>
                    <li>PASSBOLT-1660 Refactoring to simplify Chrome plugin development</li>
                    <li>PASSBOLT-1649 Adjusted coveralls markup</li>
                    <li>PASSBOLT-1648 Upgrade to Cakephp 2.9.1</li>
                    <li>PASSBOLT-1250 Contribution guidelines</li>
	                <li>PASSBOLT-1670 Run selenium tests on saucelabs</li>
                </ul>
                <h4>Fixed bugs</h4>
                <ul>
                    <li>PASSBOLT-1700 Event names should stay backward compatible</li>
                    <li>PASSBOLT-1668 Remove GPGAuth debug count</li>
                    <li>PASSBOLT-1673 Restore avatars during quick install</li>
                </ul>
                <h3>Passbolt Firefox Plugin</h3>
                <h4>Added improvements</h4>
                <ul>
                    <li>PASSBOLT-1508 Upgrade firefox plugin OpenPGP.js to v2.2.0</li>
                    <li>PASSBOLT-1660 Refactoring to simplifying Chrome plugin development</li>
                </ul>
                <h4>Fixed Bugs</h4>
                <ul>
                    <li>PASSBOLT-1698 <a href="https://github.com/passbolt/passbolt_firefox/issues/2" target="_blank" rel="noopener nofollow">GITHUB-2</a>
                         A user should be able to download the generated key during setup</li>
                    <li>PASSBOLT-1668 <a href="https://github.com/passbolt/passbolt/issues/16" target="_blank" rel="noopener nofollow">GITHUB-16</a>
                        /<a href="https://github.com/passbolt/passbolt/issues/24" target="_blank" rel="noopener nofollow">24</a>
                        Refactor GPGAuth to ignore header capitalization issues</li>
                    <li>PASSBOLT-1700 Removing bower legacy and fixing licence in package.json </li>
                    <li>PASSBOLT-1700 Event names should stay backward compatible </li>
                </ul>
            </div>
            <h3>
                How to upgrade to v1.2?
            </h3>
            <p>
                <strong>1. Take your site down</strong>:
                create a temporary webserver configuration to redirect all
                the requests to a maintenance page. You can find resources how to do this online:
                <a href="http://stackoverflow.com/questions/21709026/apache-enable-maintenance-mode-across-all-virtual-hosts" target="_blank" rel="noopener nofollow">
                    here is an example for apache
                </a>.
            </p>
            <p>
                <strong>2. Make a backup of your database</strong>:
                This is very important in case something goes wrong. You can do this using mysqldump, with for example:
						</p>
            <pre><code class="language-bash">$ mysqldump -u[user] -p[pass] db > /path/backup.sql</code></pre>
            <p>
                <strong>3. Get the latest release</strong>:
						</p>
            <pre><code class="language-bash">$ git fetch
$ git checkout v1.2.0</code></pre>
            <p>
                <strong>4. Run the migration script as follow:</strong></p>
            <pre><code class="language-shell" style="font-size:.8em;">~/passbolt$ ./app/Console/cake Migrations.migration run all
Cake Migration Shell
---------------------------------------------------------------
Running migrations:
[1474629203] 1474629203_Migration_1.2.0
[...]
---------------------------------------------------------------
All migrations have completed.</code></pre>
            <p>
                <strong>5. Put your site back online!</strong> Verify everything is ok using healthcheck:
                As an administrator (or as any user in debug mode) you can go and check on the /healthcheck page to see
                if your instance configuration is looking good.
            </p>

        </div>
        <div class="col5 last" >
            <div class="tldr">
                <p>
                    Mr. Engineer, Don't you keep me waiting!
                    You hear me? Telling you: Hurry, hurry, hurry, hurry!
                </p>
                <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                    <i class="fa fa-music"></i>
                    No, it won't be long
                </a>
            </div>
            <div class="tldr message warning">
                <h2>Important bugfix note!</h2>
                <p><strong>Please double check your file backup of your private key.</strong>
                There was an issue reported with keys created with version 1.1.0 and downloaded during setup.
                Private keys downloaded from the profile page were not affected.</p>
                <p>Ref. PASSBOLT-1698 <a href="https://github.com/passbolt/passbolt_firefox/issues/2" target="_blank" rel="noopener nofollow">GITHUB-2</a></p>
            </div>
        </div>
    </div>
<?php $this->end(); ?>