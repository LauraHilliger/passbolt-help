<?php
    $meta = [
        'title' => 'Celebration',
        'slug' => 'Celebration',
        'number' => 'v1.1.0',
        'created' => 'Mon, 08 Aug 2016 17:20:00 +0100',
        'song' => 'https://www.youtube.com/watch?v=3GwjfUFyY6M',
        'description' => 'Highlights: Tableview collumn sort, Mysql57 compatibility, config clean up.'
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
            This release is mostly aiming at improving the stability and overall maintainability of the server side
            application. In terms of new features this release brings the ability to see the last login date of a
            given user and the ability to sort by the table columns for both password and user overviews.
        </p>
        <p>
            We notably improved Mysql 5.7 compatibility. As reported on Github many of you had issues with Mysql5.7
            running in strict mode by default. In order to provide a fix, we had to perform corrections on the data
            model, as some “not optional” rules were not followed. So if you are running 1.0 for your team already,
            you will need to follow the upgrade procedure outlined below.
        </p>
	    <p class="message warning">
            In order to run passbolt on mysql5.7 you will still need to disable the sql_mode
            <a href="http://dev.mysql.com/doc/refman/5.7/en/sql-mode.html#sqlmode_only_full_group_by" target="_blank" rel="noopener nofollow">
                only_full_group_by
            </a>
            as some of the queries used for handling permissions are not SQL99 compliant. We’ll try to address
            this in a future release. Let us know if you find more compatibility issues.
        </p>
        <p>
            A big thank you for everyone who spent some much valuable time to test and report bugs: Nicolas,
            <a href="https://github.com/BastienLQ" target="_blank" rel="noopener nofollow">BastienLQ</a>,
            Viktoria,
            <a href="https://github.com/anogues" target="_blank" rel="noopener nofollow">Anogues</a> and
            <a href="https://github.com/imami" target="_blank" rel="noopener nofollow">Imami</a>.
        </p>
        <h3>
            How to upgrade from v1.0?
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
$ git checkout v1.1.0</code></pre>
        <p>
            <strong>4. Review your configuration file</strong>:
            we’ve simplified the app.php configuration file and deprecated
            some of the items. It is best you have a look again at app.php.default and your app.php.
            Now you only need to put the differences between the default configuration (see. default.php)
            and your instance specifics (such as the server GPG key). For example something as short as would do:
				</p>
            <pre><code class="language-php" style="font-size:.8em;">&lt;?php
$config = [
    'App' => [
        'registration' => [
            'public' => true,
        ],
    ],
    'GPG' => [
        'env' => [
            'setenv' => true,
            'home' => '/usr/share/httpd/.gnupg'
        ],
        'serverKey' => [
            'fingerprint' => '2FC8945833C51946E937F9FED47B0811573EE67D',
            'public' => APP . 'Config' . DS . 'gpg' . DS . 'public.key',
            'private' => APP . 'Config' . DS . 'gpg' . DS . 'private.key',

        ]
    ]
];</code></pre>
        <p>
            <strong>4. Run the migration script as follow:</strong></p>
            <pre><code class="language-shell" style="font-size:.8em;">~/passbolt$ ./app/Console/cake Migrations.migration run all
Cake Migration Shell
---------------------------------------------------------------
Running migrations:
[1465367816] 1465367816_Migration_1.1.0
> Dropping index "username" from table "users".
[...]
---------------------------------------------------------------
All migrations have completed.</code></pre>
        <p>
           <strong>6. Put your site back online!</strong> Verify everything is ok using healthcheck:
           As an administrator (or as any user in debug mode) you can go and check on the /healthcheck page to see
           if your instance configuration is looking good.
        </p>
        <div class="message notice">
        <p>
            <strong>(Optional) If you run into some issues:</strong>
        </p>
        <ul>
            <li>Make a copy of the errors messages</li>
            <li>Checkout the v1.0.14 version using git</li>
            <li>Drop the database and load your backup data to restore to a previously working version.</li>
            <li>Send us an <a href="mailto:contact@passbolt.com">email</a> with the details of the error or fill
            in a bug report using github, using as much details as possible such as your OS, php, mysql
            environment versions.</li>
        </ul>
        </div>
        <div>
            <h3>Passbolt API</h3>
            <h4>Added improvements</h4>
            <ul>
                <li>PASSBOLT-1124: As LU on user workspace I should be able to see the last logged in date of a user.</li>
                <li>PASSBOLT-1216: As LU I should be able to sort the table view in passwords workspace</li>
                <li>PASSBOLT-1217: As LU I should be able to sort the table view in users workspace</li>
                <li>PASSBOLT-1633: Travis and Coveralls integration.</li>
                <li>PASSBOLT-1597: Implemented schema versioning and migration tool.</li>
            </ul>
            <h4>Fixed bugs</h4>
            <ul>
                <li>PASSBOLT-1620: Duplicate records shown when selecting records and using filters</li>
                <li>PASSBOLT-1652: As LU I cannot use passbolt with public key bigger than 4096 bits</li>
                <li>PASSBOLT-1604: As a AD I should be able to see the healthcheck page when debug is set to 0</li>
                <li>PASSBOLT-1525: Misc unit test code coverage & phpcs cleanup</li>
                <li>PASSBOLT-1653: After migration, Gpgkey.uid should be sanitized in DB.</li>
                <li>PASSBOLT-1634: Authentication logs are moved in each authentication stage.</li>
                <li>PASSBOLT-1383: Cleanup cakephp config & prevent future regressions like PASSBOLT-1621 with a default.</li>
                <li>PASSBOLT-1535: Fix mysql 5.7 schema issues and improve compatibility.</li>
                <li>PASSBOLT-1621: Missing config item 'tokenExpiracy' breaks forward compatibility</li>
                <li>PASSBOLT-1486: After deleting a user, I should be able to recreate a user with the same username.</li>
                <li>PASSBOLT-1643: Selenium tests coverage when passbolt tab is closed and restored</li>
                <li>PASSBOLT-1642: Selenium tests coverage when browser is restarted</li>
            </ul>
            <h3>Passbolt Firefox Plugin</h3>
            <h4>Fixed</h4>
            <ul>
                <li>PASSBOLT-1432: Passbolt.app pagemod shouldn't start if user is not logged in</li>
            </ul>
        </div>
    </div>
    <div class="col5 last" >
        <div class="tldr">
            <p>
            “My mother told me when she heard it, You're gonna play this song for the rest of your life - so get ready!”.
            </p>
            <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                <i class="fa fa-music"></i>
            </a>
        </div>
    </div>
</div>
<?php $this->end(); ?>