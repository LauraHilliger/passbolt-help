<?php
$meta = [
    'title' => 'Passbolt open source password manager selected by Luxembourg public agency for innovation',
    'slug' => '03102016_Fit4Start_selection',
    'created' => '03 October 2016',
    'teaser' => 'Passbolt has been selected by Luxinnovation, the public agency for innovation in Luxembourg, to be part of the Fit for Start acceleration program.'
];
$this->set('releases', array_merge($this->get('releases'), array($meta)));
?>
<?php $this->start('article'); ?>
    <div class="row">
        <span id="<?php echo $meta['slug']; ?>" ></span>
        <div class="col7">
            <h2><?php echo $meta['title']; ?></h2>
            <p><em>Esch, Luxembourg, <?php echo $this->Time->format($meta['created'], '%B %e, %Y'); ?>.</em></p>
            <p>
                Passbolt has been selected by Luxinnovation, the public agency for innovation in Luxembourg, to be
                part of the Fit for Start acceleration program.
            </p>
            <p>
                Passbolt is an open source password manager that aims to improve the information security of small
                and medium organisations. Passbolt promotes the use of strong and unique passwords. It also
                facilitates collaboration by allowing sharing credentials amongst team members.
            </p>
            <p>
                Passbolt is extensible, it is composed of a JSON API, a web client and a command line application.
                Because the encryption is based on the OpenPGP standard, the solution also integrates well with
                existing email clients (such as Thunderbird Enigmail or Apple Mail) or native GPG command line tools.
            </p>
            <p>
                Passbolt is also one of the rare web-based solutions that can be self hosted behind a firewall. In
                the post-Safe Harbor era, data sovereignty is a major preoccupation in Europe and passbolt offers a
                unique proposition to organizations cautious of the shifting legal context.
            </p>
            <p>
                Passbolt was originally founded and developed in Goa, India. The core team is now shifting its activities to
                Luxembourg to focus on the European market. Passbolt is mainly self funded and raised €20,000 from
                early investors. On top of the €50,000 grant associated with the Fit for Start program, an additional
                €100,000 is offered by the Ministry of the Economy to start-ups that have both successfully graduated
                from Fit for Start and managed to raise at least €50,000 of private equity.
            </p>
            <p>
                Short term plans includes the release of a Chrome Plugin and the development of a Saas offer. Medium
                to long term plans include an independent 3rd party security audit, the development of mobile
                applications, as well as new features selected by the early adopters.
            </p>
            <ul>
                <li>Fit4Start: <a href="http://en.luxinnovation.lu/Services/Support-for-innovative-start-ups/Fit-for-Start">http://en.luxinnovation.lu/Services/Support-for-innovative-start-ups/Fit-for-Start</a></li>
                <li>Website: <a href="https://www.passbolt.com/">https://www.passbolt.com/</a></li>
                <li>Demo: <a href="https://demo.passbolt.com">https://demo.passbolt.com</a></li>
            </ul>
        </div>
        <div class="col5 last">
            <div class="tldr alt">
                <a href="http://paperjam.lu/news/clap-de-fin-pour-la-premiere-promo-de-fit4start" target="_blank" rel="noopener nofollow">
                    <img src="<?php echo Router::url('/img/www_only/2016/11/fit4start_200.jpg');?>" alt="fit4start" style="max-width: 200px;" class="illustration"/>
                </a>
                <a href="http://paperjam.lu/news/clap-de-fin-pour-la-premiere-promo-de-fit4start" target="_blank" class="button primary">
                    in the press
                </a>
            </div>
        </div>
    </div>
<?php $this->end(); ?>