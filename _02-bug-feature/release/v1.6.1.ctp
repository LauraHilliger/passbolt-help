<?php
$meta = [
    'title' => 'Fresh',
    'slug' => 'Fresh',
    'number' => 'v1.6.1',
    'created' => 'Wed, 26 July 2017 16:00:00 +0100',
    'song' => 'https://youtu.be/sTJ1XwGDcA4',
    'description' => 'Highlights: groups filter on password workspace, group membership notifications.'
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
                Thanks to this new release it is now
                possible to filter passwords by groups. It becomes easier to see which password belong to which groups.
                Of course, to see the groups in the sidebar, one will first need to be part of that group.
            </p>
            <p>
                Similarly, in the user workspace, it is now possible to see which groups a user is member of in the right sidebar,
                when selecting a collaborator. Two new email notifications have been implemented, when your role in a group changes, or
                if you are the group manager, when a user is deleted.
            </p>
            <figure>
                <img src="<?php echo Router::url('/img/www_only/2017/07/passwords_with_group_filters.png', true); ?>" alt="a screenshot of the user workspace"/>
                <p class="legend">fig. group filters on the user workspace</p>
            </figure>
            <p>
                This release also introduces a series of small improvements requested by the community, mostly to relax the validation
                rules for the password username and descriptions fields. And, of course, a small batch of bug fixes.
            </p>
            <p>
                We have also updated the product <a href="<?php echo Router::url('/roadmap', true); ?>">roadmap page</a> to give some more
                details about the projected delivery dates. We are currently working on the firefox addon to implement the new web extension standard,
                as well as upgrading the underlying framework of the API.
            </p>
            <p>Thanks to <a href="https://github.com/ftx">ftx</a> and <a href="https://github.com/rguillome">rguillome</a> for their contributions,
            and to <a href="https://github.com/chenz67r">chenz67r</a>, <a href="https://github.com/lcpdn">lcpdn</a>, <a href="https://github.com/mikemix">mikemix</a>,
             <a href="https://github.com/wishmedia">wishmedia</a> and <a href="https://github.com/glebaccon">glebaccon</a> for their suggestions for improvements.</p>
            <p class="message notice">
                Even though this is a minor version there is a small optional migration script that you can run to fix anonymous statistics.
                Please checkout out the relevant <a href="<?php echo Router::url('/help/tech/update');?>">online help section</a>
                for more information on how to perform this operation.
            </p>
            <div>
                <h3>Passbolt API & Extension</h3>
                <h4>New features</h4>
                <ul>
                    <li> PASSBOLT-2147: As a group member I should receive a notification when my role in the group has changed</li>
                    <li> PASSBOLT-2148: As a group manager I should receive a notification when a user who is part of one (or more) groups I manage is deleted</li>
                    <li> PASSBOLT-2133: As LU I should be able to filter passwords by group on the passwords workspace</li>
                    <li> PASSBOLT-2012: As a user I can see which groups a user is a member of from the sidebar</li>
                </ul>
                <h4>Fixed bugs & cleanups</h4>
                <ul>
                    <li> PASSBOLT-2225: As a demo user it should be explicit that I need to use a throwaway email account</li>
                    <li> PASSBOLT-2171: The group list component should be marked as ready once the API request is completed</li>
                    <li> PASSBOLT-2172: Newly added group manager shouldn't receive the group update summary notification</li>
                    <li> PASSBOLT-2174: Edit group dialog should be marked as ready if an admin edit a group the admin is not group manager</li>
                    <li> PASSBOLT-2155: As AD I shouldn't be able to delete as user if the user is the sole group manager of a group</li>
                    <li> PASSBOLT-2075: Users should be removed from the groups they are member of after a soft delete operation</li>
                    <li> PASSBOLT-1934: GITHUB-40, GITHUB-120: As a user I should be allowed to add the a ldap path as username</li>
                    <li> PASSBOLT-2156: GITHUB-94: As a user I should be allowed to add text in JSON format in the description</li>
                    <li> PASSBOLT-2122: GITHUB-85: Username should be Minimum 1 characters in length (and not 3)</li>
                    <li> PASSBOLT-2180: GITHUB-85: As a user I should be allowed to add a space in a resource username</li>
                    <li> PASSBOLT-2125: GITHUB-86: As a logged in user creating/editing a password I should be able to use new line characters in the description</li>
                    <li> PASSBOLT-2188: As LU when I search for a user it shouldn't make an API request</li>
                    <li> PASSBOLT-2234: As newly added GM I shouldn't receive the group update summary when I'm just added as GM</li>
                    <li> PASSBOLT-2235: As AD editing a group the dialog shouldn't be marked as ready until the members list is loaded</li>
                    <li> PASSBOLT-2105: Anonymous statistics: fix "Warning Error: file_put_contents" issue at installation</li>
                    <li> PASSBOLT-2005: PR#44: Update allowed characters in a uri</li>
				</ul>
            </div>
        </div>
        <div class="col5 last" >
            <div class="tldr">
                <p>
                    "She'll take you by surprise"
                </p>
                <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                    <i class="fa fa-music"></i>
                </a>
            </div>
        </div>
    </div>
<?php $this->end(); ?>
