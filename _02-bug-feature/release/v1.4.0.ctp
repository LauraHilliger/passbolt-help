<?php
$meta = [
    'title' => 'Cry to Me',
    'slug' => 'CryToMe',
    'number' => 'v1.4.0',
    'created' => 'Thu, 16 Feb 2017 15:30:00 +0100',
    'song' => 'https://youtu.be/mEu8DrO9PbY',
    'description' => 'Highlights: Legacy tables cleanup, chrome v56 crash, mysql5.7 native support, multiple key ids fix.'
];
$this->set('releases', array_merge($this->get('releases'), array($meta)));
?>
<?php $this->start('article'); ?>
    <div class="row">
        <span id="<?php echo $meta['slug']; ?>" ></span>
        <span id="<?php echo $meta['number']; ?>" ></span>
        <div class="col7">
            <h2><a href="<?php echo $meta['song']; ?>" target="_blank" rel="noopener nofollow"><?php echo $meta['number']; ?>  / v.1.4.3 ~ <?php echo $meta['title']; ?></a></h2>
            <p>Release date: <?php echo $this->Time->format($meta['created'], '%B %e, %Y'); ?>.</p>
            <p>
                As you may have noticed this release was interrupted by the incident related to the
                release of chrome v56 that made passbolt extension unstable.
                You can read more about it in the
                <a href="https://www.passbolt.com/incidents/20170210_chrome_not_available">
                    incident report
                </a>. The situation is under control thanks to a series of fixes,
                even though we are still looking forward a long term fix from the Chromium team.
            </p>
            <figure>
                <img src="<?php echo Router::url('/img/illustrations/birds3_850.png', true); ?>" style="max-width: 450px; margin-top:-2em;"/>
                <span class="legend">oops, something went wrong (with Chrome 56)</span>
            </figure>
            <p>
                Apart from this, this release is mostly here to ease the groups feature rollout
                and fix the bugs reported by the community.
                Some notable changes: mysql v5.7 is now supported natively without any configuration tweaks.
                You can also now create an account with the same username as
                an account that was previously deleted, you can also use GPG keys that
                contain multiple identities. This release requires your database schema
                to be updated (see.
                <a href="https://www.passbolt.com/help/tech/update">update process</a>
                in the documentation).
            </p>
            <p>
                A big thank you to all of you who helped us test for this release
                especially Thomas Oberndörfer from Mailvelop, and Bart Butler from Proton Mail for
                helping us out with Chrome v56 crash issue.
            </p>
            <div>
                <h3>Passbolt Extension (v1.4.3)</h3>
                <h4>Fixed bugs</h4>
                <ul>
                    <li>PASSBOLT-1909: updated openpgpjs to latest version: 1.3.7. (@pomarec GITHUB-11)
                    </li><li>PASSBOLT-1905 / PASSBOLT-1907: Temporary fixes for chrome 56 crash bug.
                    </li><li>PASSBOLT-1850: Minor spelling and grammar fixes (@colin-campbell GITHUB-5)
                    </li><li>PASSBOLT-1807: Fix parsing issues with keys that have multiple identities
										</li>
                </ul>
                <h3>Passbolt API (v1.4.0)</h3>
                <h4>Fixed bugs & cleanups</h4>
                <ul>
                    <li>PASSBOLT-1511: removed tracking of config file Config/email.php (@BaumannMisys GITHUB-34)
                    </li><li>PASSBOLT-1835: As a user I should be able to create an account with the same username as an account that was previously deleted (@bestlibre GITHUB-33)
                    </li><li>PASSBOLT-1646: Permissions views and queries do not work with Mysql57 / only_full_group_by enabled (GITHUB-20)
                    </li><li>PASSBOLT-1863: Remove references to legacy features Category and Tags
                    </li><li>PASSBOLT-1883: Fix wrong usage of the permission entry point viewByAco
                    </li><li>PASSBOLT-1887: Remove the entry point PermissionController::simulateAcoPermissionsAfterChange
                    </li><li>PASSBOLT-1886: Remove the controller component PermissionHelperComponent
                    </li><li>PASSBOLT-1888: Remove the model behavior function PermissionableBehavior::getUsersWithAPermissionSet
                    </li><li>PASSBOLT-1889: Remove references to legacy models and tables (AuthenticationLogs, AuthenticationBlackList, Email, Address, PhoneNumber)
                    </li><li>PASSBOLT-1890: Clean the Permission model validation functions & augment coverage
                    </li><li>PASSBOLT-1894: Reorganize ACL models tests
                    </li><li>PASSBOLT-1896: Remove references to legacy permission types CREATE and DENY
                    </li>
                </ul>
            </div>
        </div>
        <div class="col5 last" >
            <div class="tldr">
                <p>
                    "You don't ever have to walk alone."
                </p>
                <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                    <i class="fa fa-music"></i>
                </a>
            </div>
        </div>
    </div>
<?php $this->end(); ?>