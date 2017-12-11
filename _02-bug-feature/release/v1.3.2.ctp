<?php
$meta = [
    'title' => 'Short Change Hero',
    'slug' => 'ShortChange',
    'number' => 'v1.3.2',
    'created' => 'Mon, 16 Jan 2017 15:30:00 +0100',
    'song' => 'https://youtu.be/l6eSksEp27U',
    'description' => 'Highlights: Passphrase maximum length, Groups feature specifications.'
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
            <figure style="margin-top:-1em;">
                <a href="#">
                    <img src="<?php echo Router::url('/', true); ?>/img/www_only/2017/01/group_teasers/00 article_header.png" style="max-width:640px;"/>
                </a>
                <a href="https://medium.com/@passbolt/how-passbolt-will-implement-groups-ee49108a6ff1" class="button primary big">Participate to the design review!</a>
            </figure>
            <p>
                We are very pleased to share with you wireframes for the groups feature (also called team management functionality).
                We invite you to have a look at the blueprints on
                <a href="https://medium.com/@passbolt/how-passbolt-will-implement-groups-ee49108a6ff1">medium</a>,
                and then complete a short survey. Your feedback is very valuable to us, it will help ensure this new major improvement
                will fit the needs of most of passbolt users.
            </p>
            <p>
                In other news, we also have a very small release for you, with two bug fixes.
                We have removed the limit on the passphrase size.
                You can now create a master password that is longer than 50 characters.
            </p>
            <p>
                A big thank to all of you who tested and reported bugs for this release, especially Paul Sanders & Josh Belden.
            </p>
            <p><em>
                Icon credit: remix from 
                <a href="https://thenounproject.com/term/teamwork/749610/" target="_blank" rel="noopener nofollow">"teamwork"</a> by
                <a href="https://twitter.com/creativestall" target="_blank" rel="noopener nofollow">Creative Stall</a> CC BY-SA
                </em>
            </p>
            <div>
                <h3>Passbolt API & Extension</h3>
                <h4>Fixed bugs</h4>
                <ul>
                    <li>PASSBOLT-1827: As a user I should be able to log in with a passphrase longer than 50 chars in length.</li>
                    <li>PASSBOLT-0811: Error message look and feel is not consistent on register and recover screens.</li>
                    <li>PASSBOLT-1809: As a developer I should be able to generate the chrome zip distribution file.</li>
                </ul>
            </div>
        </div>
        <div class="col5 last" >
            <div class="tldr">
                <p>
                    "This ain't no place for no hero."
                </p>
                <a href="<?php echo $meta['song']; ?>" target="_blank" rel="noopener nofollow" class="button primary">
                    <i class="fa fa-music"></i>
                </a>
            </div>
        </div>
    </div>
<?php $this->end(); ?>