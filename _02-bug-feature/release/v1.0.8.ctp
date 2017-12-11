<?php
    $meta = [
        'title' => 'Lovely Day',
        'slug' => 'LovelyDay',
        'number' => 'v1.0.8',
        'created' => 'Fri, 15 April 2016 12:00:00 +0500',
        'song' => 'https://youtu.be/sYi7uEvEEmk',
        'description' => 'Highlights: comment bugs, better usability for share autocomplete.'
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
            This is a small release, as we are busy collecting feedbacks from all of our early users.
            Thanks for all the positive vibes!
        </p>
        <div>
            <h3>Passbolt API</h3>
            <h4>Fixed bugs</h4>
            <ul>
                <li>PASSBOLT-1445: As a LU viewing someone else comment I should not see the delete comment button.</li>
                <li>PASSBOLT-1402: As LU, In the comment thread I should not see a hyperlink on people's name that leads to nowhere.</li>
            </ul>
            <h3>Passbolt Firefox Add-on</h3>
            <h4>Fixed bugs</h4>
            <ul>
                <li>PASSBOLT-1408: As a LU I should see the email addresses of the people I'm sharing a password with.</li>
            </ul>
        </div>
    </div>
    <div class="col5  last" >
        <div class="tldr">
            <p>"When I wake up in the morning
                and the sunlight hurts my eyes
                and something without warning
                bears heavy on my mind"</p>
            <a href="https://youtu.be/sYi7uEvEEmk" target="_blank" class="button primary">
                <i class="fa fa-music"></i>
                Then I look at you
            </a>
        </div>
    </div>
</div>
<?php $this->end(); ?>