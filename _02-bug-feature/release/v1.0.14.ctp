<?php
$meta = [
    'title' => 'More Bounce To The Ounce',
    'slug' => 'MoreBounceToTheOunce',
    'number' => 'v1.0.14',
    'created' => 'Mon, 06 Jul 2016 12:00:00 +0500',
    'song' => 'https://www.youtube.com/watch?v=BonCLU297hM',
    'description' => 'Highlights: Bug fixes.'
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
                A mini-release to fix a regression introduced by v1.0.13.
            </p>
            <div>
                <h3>Passbolt API</h3>
                <h4>Fixed bugs</h4>
                <ul>
                    <li>PASSBOLT-1616: Fixed bad merge during the previous release.</li>
                    <li>PASSBOLT-1599: GITHUB-10 passbolt.js requesting wrong path for config.json.</li>
                </ul>
            </div>
        </div>
        <div class="col5 last" >
            <!-- Bounce! -->
        </div>
    </div>
<?php $this->end(); ?>