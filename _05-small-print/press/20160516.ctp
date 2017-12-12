<?php
$meta = [
    'title' => 'Passbolt, a password manager for teams, released under open source licence',
    'slug' => '160516_Passbolt_launch',
    'created' => '16 May 2016',
    'teaser' => 'Passbolt is an open source password manager that aims to improve the information security of small and medium organisations. This new software helps enforce the use of strong and unique passwords. Passbolt was designed to be easy to use and facilitate collaboration, such as sharing credentials amongst team members.'
];
$this->set('releases', array_merge($this->get('releases'), array($meta)));
?>
<?php $this->start('article'); ?>
    <div class="row">
        <span id="<?php echo $meta['slug']; ?>" ></span>
        <div class="col7">
            <h2><?php echo $meta['title']; ?></h2>
            <p><em>Goa, India, <?php echo $this->Time->format($meta['created'], '%B %e, %Y'); ?>.</em></p>
            <p>
                Passbolt is an open source password manager that aims to improve the information security of small and medium organisations. This new software helps enforce the use of strong and unique passwords. Passbolt was designed to be easy to use and facilitate collaboration, such as sharing credentials amongst team members.
            </p>
            <p>
                Sharing passwords is not desirable but is often unavoidable. For example, when a system does not allow for the creation of unique user accounts (e.g. a social media account, a router admin password or shared wifi password). Other times such collaboration is only temporary. For example, the administrator will create the credentials and send them along to the end user, with a note prompting to reset the password.
            </p>
            <p>
                Passbolt is composed of a JSON API, a web client and a command line application. Passwords are never seen in clear by the server, they are encrypted in the client and sent to the server over HTTPS. Because the encryption is based on the OpenPGP standard, the solution also integrates well with existing email clients, such as Enigmail or GPG tools. The Restful API will allow building an ecosystem of desktop and mobile clients, as well as integration with other authentication and user management systems.
            </p>
            <p>
                Unlike some other web-based password managers, passbolt requires a browser add-on to work, in order to guarantee the integrity of the cryptographic libraries. Passbolt is also one of the rare solutions that can be self hosted behind a firewall. Since passbolt is free and open source it is also a more affordable option for the large majority of organisations that still do not use a password manager.
            </p>
            <p>
                Long term plans include the development of mobile applications and the features selected by the end users.
            </p>
            <ul>
                <li>Website: <a href="https://www.passbolt.com/">https://www.passbolt.com/</a></li>
                <li>Demo: <a href="https://demo.passbolt.com">https://demo.passbolt.com</a></li>
                <li>Roadmap: <a href="https://www.passbolt.com/roadmap">https://www.passbolt.com/roadmap</a></li>
                <li>FAQ: <a href="https://www.passbolt.com/faq">https://www.passbolt.com/faq</a></li>
            </ul>
        </div>
        <div class="col5 last">
            <div class="tldr">
                <h4>In the press</h4>
                <p>
                    <a href="https://linuxfr.org/news/passbolt-un-nouveau-gestionnaire-de-mots-de-passe-pour-les-equipes" target="_blank" rel="noopener nofollow">
                        <i class="fa fa-external-link"></i>
                        Linuxfr
                    </a>
                </p>
                <p>
                    <a href="https://news.ycombinator.com/item?id=11580323" target="_blank" class=" primary">
                        <i class="fa fa-external-link"></i>
                        Hacker News
                    </a>
                </p>
            </div>
        </div>
    </div>
<?php $this->end(); ?>