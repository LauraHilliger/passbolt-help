<?php
    $meta = [
        'title' => 'Ring My Bell',
        'slug' => 'RingMyBell',
        'number' => 'v1.0.7',
        'created' => 'Tue, 5 April 2016 12:00:00 +0500',
        'song' => 'https://youtu.be/URAqnM1PP5E',
        'description' => 'Highlights: first login experience, icons and spelling mistakes.'
    ];
    $this->set('releases', array_merge($this->get('releases'), array($meta)));
?>
<?php $this->start('article'); ?>
<div class="row">
    <span id="<?php echo $meta['slug']; ?>" ></span>
    <div class="col7">
        <h2><a href="<?php echo $meta['song']; ?>" target="_blank" rel="noopener nofollow"><?php echo $meta['number']; ?> ~ <?php echo $meta['title']; ?></a></h2>
        <p>Release date: <?php echo $this->Time->format($meta['created'], '%B %e, %Y'); ?>.</p>
        <p>
            This week we rolled out a new homepage as you may have noticed. We also revamped the
            password workspace when no password are present. The nest illustration you can now see
            in place of the original void is a courtesy of our beloved Arthur Duarte.
            <a href="https://www.behance.net/arthurcduarte" target="_blank" rel="noopener nofollow">
                Check out his work on behance.
            </a>
        </p>
        <p>
            A big thank you to last week testers: Wout, Gerald, Yann and Diego! We are getting a lot
            of valuable feedback each week, please
            <a href="mailto:contact@passbolt.com">keep it coming</a>!
        </p>
        <div>
            <h3>Passbolt API</h3>
            <h4>Added improvements</h4>
            <ul>
                <li>PASSBOLT-1223 Implemented state for empty password workspace</li>
                <li>PASSBOLT-1450 Change information button icon. Eye becomes information.</li>
            </ul>
            <h3>Passbolt Firefox Add-on</h3>
            <h4>Fixed bugs</h4>
            <ul>
                <li>PASSBOLT-1158: Cleanup: remove useless console.log() from the code.</li>
                <li>PASSBOLT-1462: Remove spelling mistake on encrypting dialog title.</li>
            </ul>
        </div>
    </div>
    <div class="col5  last" >
        <div class="tldr">
            <p>"The night is young
                and full of possibilities"</p>
            <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                <i class="fa fa-music"></i>
            </a>
        </div>
    </div>
</div>
<?php $this->end(); ?>