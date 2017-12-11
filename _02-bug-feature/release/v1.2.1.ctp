<?php
$meta = [
    'title' => 'Papa Was A Rolling Stone',
    'slug' => 'PapaWasARollingStone',
    'number' => 'v1.2.1',
    'created' => 'Wed, 19 Oct 2016 20:00:00 +0100',
    'song' => 'https://www.youtube.com/watch?v=0g7KawdsVSQ',
    'description' => 'Highlights: Hotfix for email regression'
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
                A quick hotfix for a small regression introduced on email validation on the add user screen with v1.2.0.
                The validation rule was not accepting emails such as a.d@a.org.
            </p>
            <p>
                This regression was due to compatibility issues between PHP and Javascript regular expression format.
                We have updated our javascript test suite to make sure it won't happen again.
            </p>
            <p>
                Our thanks to <a href="https://github.com/silvaireboivert" target="_blank" rel="noopener nofollow">@silvaireboivert</a> for testing
                and reporting the issue!
            </p>
            <div>
                <h3>Passbolt API</h3>
                <h4>Fixed bugs</h4>
                <ul>
                    <li>PASSBOLT-1719 GITHUB-14 The "." is not allowed in email address field</li>
                    <li>PASSBOLT-1525 Remove unused controllers and components</li>
                    <li>PASSBOLT-1718 Tidy up readme and contribution guidelines</li>
                </ul>
            </div>
        </div>
        <div class="col5 last" >
            <div class="tldr">
                <p>
                    "I never got a chance to see him, never heard nothin' but bad things about him"
                </p>
                <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                    <i class="fa fa-music"></i>
                </a>
            </div>
        </div>
    </div>
<?php $this->end(); ?>