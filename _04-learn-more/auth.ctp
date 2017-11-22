<?php
// Template variables
$this->assign('rootclass', 'background');
$this->assign('section', __('Tech'));
$this->assign('title', __('Authentication'));
$this->assign('subtitle', __('How does authentication works in passbolt?'));

$crumbs = array('crumbs' => array(
    __('home') => Router::url('/'),
    __('help') => Router::url('/help'),
    __('tech') => Router::url('/help/tech'),
    __('authentication') => Router::url('/help/tech/auth'),
));

?>
<?php echo $this->element('header2'); ?>
<div class="panel main ">
    <?php echo $this->element('navigation');?>

    <!-- main -->
    <div class="panel middle" data-spy="scroll" data-target=".scrollspy">
        <div class="grid grid-responsive-12">
            <article>
            <div class="row" id="introduction">
                <div class="col12">
                    <?php echo $this->element('breadcrumbs', $crumbs);?>
                </div>
            </div>
            <div class="row">
                <div class="col7">
                    <div>
                        <h2>Introduction</h2>
                        <p>
                            Passbolt instead of a classic form based authentication perform a challenge based
                            authentication based on OpenPGP keys set during the setup.
                        </p><p>
                            The aim of this document is to help explain how this authentication process works
                            to facilitate review and discussions as well as future integration with other products.
                        </p><p>
                            Our goals were both to improve the security and usability of the overall solution,
                            e.g. reuse the existing OpenPGP facilities of passbolt to avoid having the user remember
                            another password than their passphrase.
                        </p>
                    </div>
                </div>
                <div class="col5 last">
                    <div class="tldr">
                        <h4>See also:</h4>
                        <p>
                            <i class="fa fa-birthday-cake fa-fw"></i>
                            <a href="http://book.cakephp.org/2.0/en/core-libraries/components/authentication.html" target="_blank" rel="noopener nofollow">
                            Cakephp authentication</a>
                        </p>
                        <p>
                            <i class="fa fa-external-link fa-fw"></i>
                            <a href="https://gpgauth.org/" target="_blank" rel="noopener nofollow">GPGAuth protocol</a>
                        </p>
                        <p>
                            <i class="fa fa-lock fa-fw"></i>
                            <a href="https://www.gnupg.org/" target="_blank" rel="noopener nofollow">GNU Privacy Guard</a>
                        </p>
                        <p>
                            <i class="fa fa-code fa-fw"></i>
                            <a href="https://github.com/passbolt/passbolt/blob/master/app/Controller/Component/Auth/GpgAuthenticate.php"
                            target="_blank" rel="noopener nofollow">API GpgAuth source</a>
                        </p>
                        <p>
                            <i class="fa fa-code fa-fw"></i>
                            <a href="https://github.com/passbolt/passbolt/blob/master/app/Test/Case/Controller/AuthControllerTest.php"
                            target="_blank" rel="noopener nofollow">
                            API GpgAuth unit tests</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col7">
                    <div>
                        <h2>Form based authentication</h2>
                        <p>
                            While some web application today defer to another service such as Google or Facebook to
                            handle the authentication, most still support a form based authentication by default.
                        </p>
                        <p>
                            The process goes as follow:
                        </p>
                        <figure>
                            <img src="<?php echo Router::url('/img/diagrams/sequence_diagram_form_authenticate.png');?>"
                                alt="Sequence diagram of a form based authentication" style="max-width:650px;">
                            <span class="legend">fig. Sequence diagram of a form based authentication</span>
                        </figure>
                        <p>
                            During the registration, the password is sent (ideally over HTTPS) to the server.
                            This password is then salted and hashed using bcrypt (or equivalent) and stored for
                            further use by the server.
                            A salt known only by this application instance is used to prevent brute
                            force in case the password’s hashes get leaked (via a sql injection for example).
                        </p>
                        <p>
                            During login is sent in a similar fashion than the setup, the server hash it and compare
                            it with the stored version. If they match the server store a session token that is send
                            back as a cookie (or url parameter) and set on the client side. This cookie is produced
                            by the client for each requests for the duration of the session (until the cookie expires,
                            the user logout or the server terminate the session).
                        </p>
                    </div>
                    <div>
                        <h3>The problem with the form based approach</h3>
                        <p>
                            The main issue is one of usability. Using this approach for passbolt would mean that a
                            user would need to remember another password on top of their private key password. This
                            negates the benefits of having a password manager.
                        </p>
                        <p>
                            We would also store the password in the authentication plugin. But this would complicate
                            our requirements as it would introduce the need for passbolt user account password
                            creation, update and recovery.
                        </p>
                        <p>
                            Another big issue is the inability for the user to reset their password using an email
                            verification, in case the password to the email client is stored in passbolt.
                        </p>
                        <p>
                            Other issues are not specific to passbolt but still worth trying to fix with with another
                            approach:
                        </p>
                        <p>
                        <ul>
                            <li>
                                <strong>Phishing</strong>: it is possible for an attacker to mimic the passbolt login
                                page and trick a user into entering their credentials. Traditional form based
                                authentication do not perform server identity verification: it is the responsibility
                                of the user to verify if the URL is correct and SSL certificates are valid.
                            </li>
                            <li>
                                <strong>Password quality</strong>: password fatigue generally leads to password reuse,
                                poor rotation and weak strength. Validation can be implemented server side to improve
                                password quality but only by placing an additional burden on the user.
                            </li>
                        </ul>
                        <p>

                        </p>
                    </div>
                </div>
                <div class="col5 last">
                </div>
            </div>
            <div class="row">
                <div class="col7">
                    <h2>GPGAuth based authentication</h2>
                    <p>
                        This process will follow the gpgAuth protocol. This authentication mechanism uses
                        Public/Private keys to authenticate users to a web application. The process works by the
                        two-way exchange of encrypted and signed tokens between the user and the service.
                    </p><p>
                        The authentication process is as follow:
                    </p>
                    <figure>
                        <img src="<?php echo Router::url('/img/diagrams/sequence_diagram_gpg_authenticate.png');?>"
                             alt="Sequence diagram of a GPGAuth based authentication" style="max-width:650px;">
                        <span class="legend">fig. Sequence diagram of a GPGAuth based authentication</span>
                    </figure>
                    <h3>Verify steps</h3>
                    <ol>
                        <li>
                            The client generates an encrypted token of random data (encrypted with the server public
                            key), and stores the unencrypted version locally.
                        </li>
                        <li>
                            That encrypted token is sent to the server along with the user key fingerprint.
                        </li>
                        <li>
                            Based on the user key fingerprint the server check if the user exist and is active.
                            If it is the case the server decrypts the nonce and check if it is in the valid format.
                        </li>
                        <li>
                            The server sends back the decrypted nonce.
                        </li>
                        <li>
                            The client check if the nonce match the previously recorded one. If it does not match
                            the client warns the user that the server identity cannot be verified.
                        </li>
                    </ol>
                    <h3>
                        Login steps
                    </h3>
                    <ol type="1">
                        <li>
                           The user sends their key fingerprint.
                        </li>
                        <li>
                            The server checks to see if the fingerprint and user associated with are valid.
                            It then generates an encrypted token of random data, and stores the unencrypted version
                            locally.
                        </li>
                        <li>
                            The server sends the unencrypted signed user token, and the encrypted server token to the
                            user.
                        </li>
                        <li>
                            The user enter their private key passphrase, the client decrypt the nonce and check the token
                            format.
                        </li>
                        <li>
                            The client send back the decrypted nonce along with the user key fingerprint.
                        </li>
                        <li>
                            The server compares the un-encrypted signed token sent from the client to make sure it
                            matches. If the server is satisfied, the authentication is completed as with a normal
                            form based login: session is started.
                        </li>
                    </ol>
                    <h3>Notes and remarks</h3>
                    <li>
                        As per protocol definition the server identity verification steps are optional but recommended
                        All our client enforce it by default.
                    </li>
                    <li>
                        We decided to stick to the historical version of the protocol for now, but in the future we
                        may try to reduce the number of HTTP request: e.g. currently one can not request nonce1 in
                        the verify step. So with the verify step a total of 3 POST are needed. The whole protocol
                        could probably be simplified to single GET/POST roundtrip, like for form based auth.
                    </li>
                    <li>
                        There is also an optional "step 0" where the user perform a GET /auth/verify request. This can
                        be used to get the URLs of the server public key and server verification, or to view the
                        public key advertised by the server.
                    </li>
                    <h3>Benefits</h3>
                    <p>
                        On top of the usability benefit of not having to remember an additional password we note the
                        following additional benefits are made available:
                    </p>
                    <ul>
                        <li>
                            <strong>Phishing:</strong> this risk is mitigated because the client does not enter a
                            password, e.g. getting the secret key passphrase alone would not allow an attacker
                            to login. Since the client can verify the server identity based on server key (manually
                            added to the keyring), it is not enough for an attacker to fake a form and domain.
                        </li>
                        <li>
                            <strong>Password quality</strong>: the strength of the authentication token is stronger
                            than a classic password, since a different “password” is also used every time and is not
                            linked the private key master password complexity.
                        </li>
                    </ul>
                    <h3>Residual risks and drawbacks</h3>
                    <p>
                        There are still risks with the chosen solution:
                    </p>
                    <ul>
                        <li>
                            <strong>Server: integrity and verification of client public key validity.</strong>
                            A server could be tricked into storing the wrong client public key. To prevent this the
                            server must check the validity automatically via OpenPGP web of trust and/or by checking
                            against public key servers and/or there must be a manual check by an administrator.
                            This check is not in place at the moment.
                        </li>
                        <li>
                            <strong>Server: DDOS</strong>. Since encrypt / sign operations are more costly than
                            the password hashing operations in a “normal” form based login, these endpoints could
                            potentially be used to create a denial of service. To mitigate that risks we throttle
                            attempts, e.g. limit the number of attempt over time. This check is not in place at
                            the moment.
                        </li>
                        <li>
                            <strong>Server: information leak about user base</strong>.
                            An attacker can find out if a user have an account on the server by requesting an
                            encrypted nonce and receiving an error. We also leak information in the header to improve
                            usability and provide better error messages: for example to tell a user that their account
                            was delete for example.
                        </li>
                        <li>
                            <strong>Client: integrity and verification of server public key.</strong>
                            The client could be tricked into storing invalid server key. To prevent this the client
                            must check the validity (as in previous case) during the setup. Similarly during the setup
                            the client must also check domain / key mapping in case someone is creating a real key
                            with a fake but very similar domain url. This is implemented at the moment, but could
                            certainly be improved as the end user can still make a mistake and not check properly.
                        </li>
                        <li>
                            <strong>Client/Server: the client/server can be tricked into decrypting</strong> and
                            returning/signing wrong data, for example an email previously captured by an attacker.
                            To mitigate this the encrypted format message is fixed (e.g. a UUID) and signed by the
                            server.
                        </li>
                        <li>
                            <strong>Client: the authentication cookie can be stolen if SSL can be broken.</strong>
                            This is not specific to this authentication method, as form authentication is also
                            vulnerable to this class of attack.
                        </li>
                        <li>
                            <strong>Both: Key revocation and expiracy.</strong> There is no facility at the moment to
                            replace and revoke keys.
                        </li>
                    </ul>
                </div>
                <div class="col5 last">
                </div>
            </div>
            <div class="row">
                <div class="col7">
                    <h3>Last updated</h3>
                    <p>
                        This article was last updated on March 29th, 2016.
                    </p>
                </div>
            </div>
            </article>
        </div>
    </div>
</div>
