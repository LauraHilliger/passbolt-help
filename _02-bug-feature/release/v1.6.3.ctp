<?php
$meta = [
    'title' => 'Feeling Good',
    'slug' => 'FeelingGood',
    'number' => 'v1.6.3',
    'created' => 'Mon, 21 August 2017 18:00:00 +0100',
    'song' => 'https://youtu.be/KXqKswtX_KU',
    'description' => 'Highlights: display inactive users, webextension performance optimization and content security policy update'
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
            <p>
                This maintenance release fixes the github issue #124 that affected organizations with large user base.
                With this fix it is now possible to share a password with more than 200 users.
            </p>
            <figure>
                <img src="<?php echo Router::url('/img/www_only/2017/08/LU_encrypt_300users.png', true); ?>"
                style="max-width: 450px;" alt="Screenshot of the encrypt progress dialog"/>
                <span class="legend">fig. sharing password with 300 users</span>
            </figure>
            <p>
                This version also contains a small but valuable user experience improvement for administrators:
                users that have not completed the
                setup will be shown in the workspace as 'Activation pending'. It becomes easier for administrators to organize
                a follow up when on-boarding new collaborators.
            </p>
            <figure>
                <img src="<?php echo Router::url('/img/www_only/2017/08/AD_browse_inactive_users.png', true); ?>"
                     style="max-width: 960px;" alt="Screenshot of the user workspace with inactive users"/>
                <span class="legend">fig. users pending activation</span>
            </figure>
            <p>
               As suggested by the Mozilla addon reviewers we also removed the need for 'unsafe-eval' content security policy,
               in order to tighten security even further in the web extension.
               This does not mean that the previous versions had known security issues,
               since we used eval to render the EJS templates in a safe fashion already (e.g. EJS escape the
               variables by default to prevent XSS attack). Still, we are committed towards taking every possible step
                to improve passbolt security.
            </p>
            <p>
                Thank you to <a href="https://github.com/erosman" target="_blank" rel="noopener nofollow">@erosman</a>
                 from Mozilla addon review team,
                <a href="https://github.com/tomofumi0003" target="_blank" rel="noopener nofollow">@tomofumi0003</a>,
                and Helder Martin for their suggestions and contributions to this release.
            </p>
            <div>
                <h3>Passbolt API & Extension</h3>
                <ul>
                    <li>PASSBOLT-2282: As admin on the user workspace I can see which users have not completed the setup</li>
                    <li>PASSBOLT-2316: Merge the selenium & phpunit dummy data sets</li>
                    <li>PASSBOLT-2317: Speed up dummy secret creation task</li>
                    <li>PASSBOLT-2327: Add a large set of dummy data for performance testing</li>
                </ul>
                <h3>Browser extension</h3>
                <ul>
                    <li>PASSBOLT-2269: As LU I can encrypt a secret for more than 200 people #GITHUB-124</li>
                    <li>PASSBOLT-2318: Remove unsafe-eval from CSP</li>
                    <li>PASSBOLT-2318: Precompile EJS templates using grunt-passbolt-ejs-compile task</li>
					<li>PASSBOLT-2346: Plugin upgrade openpgpjs to 2.5.9</li>
                </ul>
            </div>
        </div>
        <div class="col5 last" >
            <div class="tldr">
                <p>
                    "Sleep in peace when day is done: that's what I mean..."
                </p>
                <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                    <i class="fa fa-music"></i>
                </a>
            </div>
        </div>
    </div>
<?php $this->end(); ?>
