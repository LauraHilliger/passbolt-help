<?php
$meta = [
    'title' => 'Grapevine',
    'slug' => 'Grapevine',
    'number' => 'v1.5.1',
    'created' => 'Tue, 23 May 2017 17:30:00 +0400',
    'song' => 'https://youtu.be/93S_l0qZrXA',
    'description' => 'Highlights: Groups support part I, health check is available in command line.'
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
                    With this <a href="https://github.com/passbolt/passbolt_api/releases">release</a>
                    we are very pleased to announce the beginning of the groups feature support in passbolt.
                    You can learn more about it in the <a href="https://medium.com/passbolt/meet-passbolt-new-group-feature-f20261f2ff51">dedicated blog post</a> or
                    the summary below.
                </p>
                <figure>
                    <img src="<?php echo Router::url('/img/www_only/2017/05/groups_teaser.png', true); ?>" style="max-width: 650px;" alt="Birds taking off."/>
                </figure>
                <p class="message notice">
                    <strong>How to upgrade:</strong> this version requires your passbolt instance administrator
                    to run a migration script. Please checkout out the
                    <a href="<?php echo Router::url('/help/tech/update', true); ?>">relevant online help section</a> for more information
                     on how to perform this operation.
                </p>
                <p>Prior to this version, users needed to be added one by one when sharing a password. 
                    Because there was no group support functionality, if you were working with a lot of collaborators,
                    the exercise was quite time consuming. This new release finally solves this pressing issue.
                </p>
                <figure>
                    <img src="<?php echo Router::url('/img/www_only/2017/05/groups_screenshot.png', true); ?>" style="max-width: 450px;" alt="Groups screenshot."/>
                    <span class="legend">fig. sharing a password with a group</span>
                </figure>
                <p>
                    We also used this opportunity to do some very much needed cleanup on our API and refactor some parts
                    of the code. We also fixed a few bugs and improved the health check which is now accessible in command line.
                </p>
                <pre><code class="language-bash">$ ./app/Console/cake passbolt healthcheck</code></pre>
                <p>
                    A big thanks to <a href="https://virtua.ch" target="_blank" rel="noopener nofollow">Virtua</a>,
                    for their generous sponsor of this release.
                    We’d also like to thank the other community members who dedicated some of their time to help:
                    Didier Raboud, Zákaznícka Podpora, Peter Brilla, David Ducatel, Julien Guerder and Laura Hilliger.
                </p>
            <div>
                <h3>Passbolt Extension & API (v1.5.0 / v1.5.1)</h3>
                <h4>New features</h4>
                <ul>
                    <li> PASSBOLT-1950: As a user I can see which groups a password is shared with from the sidebar
                    </li><li> PASSBOLT-1953: As a user I can share a password with a group
                    </li><li> PASSBOLT-1940: As a user when editing a password for a group, the secret should be encrypted for all the members
                    </li><li> PASSBOLT-1639: As a user editing a password description in the right sidebar should not get duplicated items in shared with section
                    </li><li> PASSBOLT-1938: As a user I can browse the list of groups in the groups section of the user workspace
                    </li><li> PASSBOLT-2000: As a user I can see which users are part of a given group from the sidebar and the users section
                    </li><li> PASSBOLT-1960: As a user I can see the list of users that are part of the group in the users grid by using the group filter
                    </li><li> PASSBOLT-1838: As a group manager I can edit the membership roles
                    </li><li> PASSBOLT-1838: As a group manager I can add a user to a group
                    </li><li> PASSBOLT-1838: As a group manager I can remove a user from a group using the edit group dialog
                    </li><li> PASSBOLT-1969: As a group manager I can edit a group from the contextual menu and from the groups sidebar
                    </li><li> PASSBOLT-1969: As a group manager I can see which users are part of a given group from the group edit dialog
                    </li><li> PASSBOLT-2000: As a group manager I can see which users are part of a given group from the sidebar and the users section
                    </li><li> PASSBOLT-2006: As an administrator I can delete a group from the group contextual menu
                    </li><li> PASSBOLT-1969: As an administrator I can edit a group
                    </li><li> PASSBOLT-2006: As an administrator I can delete a group
                    </li><li> PASSBOLT-1955: As an administrator I can create a group using the new button in the users workspace
                    </li><li> PASSBOLT-1939: As an administrator the healthcheck should be accessible in command line
                    </li><li> PASSBOLT-1943: As an administrator the healthcheck should tell if not using a proper domain name as base url
                    </li><li> PASSBOLT-1943: As an administrator the healthcheck should tell if SSL certificate is invalid
                    </li><li> PASSBOLT-1885: As an administrator the healthcheck should tell if the full base url is not reachable
                    </li><li> PASSBOLT-1838: Add v1.5.0 migration script
                    </li><li> PASSBOLT-1881: Add support for groups in the permission system
                    </li><li> PASSBOLT-1952: Add support for groups in the fixtures
                    </li><li> PASSBOLT-1928: Deploy styleguide with groups support
                    </li>
                </ul>
                <h4>Fixed bugs & cleanups</h4>
                <ul>
                    <li> PASSBOLT-1908: Fix memory leak with openpgp webworker initialization
                    </li><li> PASSBOLT-2070: Delete unused code / exclude external libs from coverage
                    </li><li> PASSBOLT-2071: Drop exec bits from files which don’t need them (@OdyX GITHUB-67)
                    </li><li> PASSBOLT-2073: As AP I should see a warning on the login page if the plugin and the api are not compatible
                    </li><li> PASSBOLT-2029: PHP7 compatibility, fix deprecated cakePHP String class calls (@leomazzo GITHUB-64)
                    </li><li> PASSBOLT-2074: Delete confirmation dialogs should fit the latest styleguide
                    </li><li> PASSBOLT-1614: Abstract user/password grid functions into the mad framework grid library
                    </li><li> PASSBOLT-1571: API query string filters: better naming conventions and implementation
                    </li><li> PASSBOLT-1915: Remove legacy references related to old user passwords
                    </li><li> PASSBOLT-1761: Remove legacy references to throttle login
                    </li><li> PASSBOLT-1268: Remove legacy dictionary controller
                    </li><li> PASSBOLT-1268: Use exceptions instead of message component errors and misc refactoring
                    </li><li> PASSBOLT-2036: Fix travis database configuration issue
                    </li><li> PASSBOLT-2037: Schema should allow resources fields username and uri to be null
                    </li><li> PASSBOLT-2038: Travis support for PHP 5.4.
                    </li>
                </ul>
            </div>
        </div>
        <div class="col5 last" >
            <div class="tldr">
                <p>"I heard it through the grapevine..."</p>
                <a href="<?php echo $meta['song']; ?>" target="_blank" class="button primary">
                    <i class="fa fa-music"></i>
                </a>
            </div>
        </div>
    </div>
<?php $this->end(); ?>