<?php
$meta = [
    'title' => 'Superstition',
    'slug' => 'Superstition',
    'number' => 'v1.6.7',
    'created' => 'Fri, 13 October 2017 15:30:00 +0100',
    'song' => 'https://youtu.be/0CFuCYNx-1g',
    'description' => 'Fixed medium level vulnerability regarding passphrase information disclosure during setup.'
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
                This release ships with a vulnerability fix for a medium level vulnerability issue found by Juan Wajnerman.
                Your web extension will be updated automatically unless you have disabled updates (you shouldn’t).
            </p>
            <p>
                This vulnerability was introduced in order to allow users to continue the setup even if they close the browser window.
                While improving the user experience, the tradeoff of this feature is that all information collected during setup (including the passphrase if the user generated a key)
                is leaked in the browser local storage, until the setup is completed and the data flushed. An attacker with privilege on the file system could capture the passphrase
                during the setup using this method. In all fairness, if an attacker has access to the file system, the user has probably more problems at hands.
            </p>
            <p>
                Security and usability is always a fine balance to reach. In this case we decided that the usability benefits do not outweigh the security considerations and decided to remove the feature in order to reduce information leakage.
            </p>
            <p>
                You can learn more about the issue <a href="/incidents/20171013_passphrase_information_leakage">here</a>.
                A big thanks to Juan Wajnerman for his report!
            </p>
            <div>
                <h3>Browser extension</h3>
                <ul>
                    <li>PASSBOLT-2455: Fix setup should not use browser storage to temporarily store private key.
                    </li><li>PASSBOLT-2452: Fix broken template on stage0 missing server key.
                    </li>
                </ul>
            </div>
        </div>
        <div class="col5 last" >
            <div class="tldr">
                <p>
                    "Superstition ain't the way"
                </p>
                <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                    <i class="fa fa-music"></i>
                </a>
            </div>
        </div>
    </div>
<?php $this->end(); ?>
