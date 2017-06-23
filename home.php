<?php //require_once 'ReCaptcha/CaptchaAutoloader.php'; ?>

<body>

<nav class="navbar navbar-toggleable-md navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php?page=home">
            <img class="navbar-logo" src="assets/images/logo.png" width="100">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?page=home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=terms">Terms and Conditions</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3>Center For Certification</h3>
                <p><strong>Certify Yourself!</strong></p>
            </div>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>For years we have heard people say, "That guy is certifiable". Well we decided those people deserve to be truly and officially accredited!</p>
                <p align="center">Are you certifiable?</p>
                <p>If so, Just fill out the form below, pick your certification topic, and print out your certificate. Accreditation is awarded on a lifetime basis. There are no pesky renewal fees, continuing education or other associations required. All we ask is that you notify us upon your death so that we may keep our records accurate.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <p class="text-center">
            Certify Yourself below:
        </p>
        <form id="c4cForm" action="certificate.php" method="POST">
            <div class="form-group row">
                <label class="col-5 col-form-label" for="fullName">Full Name</label>
                <div class="col-4">
                    <input class="form-control" type="text" id="fullName" name="fullName" placeholder="Type your full name here" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-5 col-form-label" for="email">Email</label>
                <div class="col-4">
                    <input class="form-control" type="email" id="email" name="email" placeholder="Type your email here" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-5 col-form-label" for="certTitle">Certification Desired</label>
                <div class="col-4">
                    <select required class="form-control" id="certTitle" name="certTitle">
                        <option value="" selected>Select Your Certification</option>
                        <option value="Certifiable Apologist">Certifiable Apologist</option>
                        <option value="Certified Ass">Certified Ass</option>
                        <option value="Certified Bitch">Certified Bitch</option>
                        <option value="Certified Bad Influence">Certified Bad Influence</option>
                        <option value="Certified Brainiac">Certified Brainiac</option>
                        <option value="Certifiably Clueless">Certifiably Clueless</option>
                        <option value="Certified Dick">Certified Dick</option>
                        <option value="Certified Do Gooder">Certified Do Gooder</option>
                        <option value="Certified Douche">Certified Douche</option>
                        <option value="Certifiable Egghead">Certifiable Egghead</option>
                        <option value="Certified Egotist">Certified Egotist</option>
                        <option value="Certified Freakazoid">Certified Freakazoid</option>
                        <option value="Certified Idiot">Certified Idiot</option>
                        <option value="Certifiably Insane">Certifiably Insane</option>
                        <option value="Certified Joker">Certified Joker</option>
                        <option value="Certifiable Lunatic">Certifiable Lunatic</option>
                        <option value="Certified Misanthrope">Certified Misanthrope</option>
                        <option value="Certified Miscreant">Certified Miscreant</option>
                        <option value="Certified Nutcase">Certified Nutcase</option>
                        <option value="Certifiable Pig">Certifiable Pig</option>
                        <option value="Certified Player">Certified Player</option>
                        <option value="Certified Procrastinator">Certified Procrastinator</option>
                        <option value="Certified Punster">Certified Punster</option>
                        <option value="Certified Reprobate">Certified Reprobate</option>
                        <option value="Certified Rock God">Certified Rock God</option>
                        <option value="Certified Sex God<">Certified Sex God</option>
                        <option value="Certifiable Sports Fanatic">Certifiable Sports Fanatic</option>
                        <option value="Certifiable Superhero">Certified Superhero</option>
                        <option value="Certifiably Terminal">Certifiably Terminal</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-5 col-form-label" for="certTypeConfirm">You Selected:</label>
                <div class="col-4">
                    <input class="form-control" type="text" id="certTypeConfirm" name="certTypeConfirm" placeholder="Or did you want to type your own?">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-5 col-form-label" for="email">Select a style:</label>
                <div class="col-4">
                    <label>
                        <input type="radio" name="certColor" value="curly" required/>
                        <img src="assets/images/C4C-curly-thmb.png" />
                    </label>
                    <label>
                        <input type="radio" name="certColor" value="gold"/>
                        <img src="assets/images/C4C-gold-thmb.png" />
                    </label>
                    <label>
                        <input type="radio" name="certColor" value="emerald"/>
                        <img src="assets/images/C4C-emerald-thmb.png" />
                    </label>
                    <label>
                        <input type="radio" name="certColor" value="black"/>
                        <img src="assets/images/C4C-black-thmb.png" />
                    </label>
                    <label>
                        <input type="radio" name="certColor" value="green"/>
                        <img src="assets/images/C4C-green-thmb.png" />
                    </label>
                    <label>
                        <input type="radio" name="certColor" value="red"/>
                        <img src="assets/images/C4C-red-thmb.png" />
                    </label>
                    <label>
                        <input type="radio" name="certColor" value="blue"/>
                        <img src="assets/images/C4C-blue-thmb.png" />
                    </label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-5 col-form-label" for="certTypeConfirm">Are you human?</label>
                <div class="custom-controls-stacked col-4">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" value="human" name="humanCheck" required>
                            Yes, I am human
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" value="bot" name="humanCheck" data-toggle="tooltip" title="Wrong answer, R2-D2...">
                            No, I am a robot
                        </label>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button id="submitBtn" type="submit" class="btn btn-primary">I want my certificate!</button><br>
                <small>(Any issues? <a href="mailto:Dr-Cert@center4certs.org">Email us!</a>)</small>
            </div>
        </form>
    </div>
</section>

<section class="testimony">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container">
                    <h3>What Our Fantastic Certify-ees Say:</h3>
                    <div class="card">
                        <p>"People have been telling me for years that I'm a 'Certifiable Nutcase'. Since my doctors would not issue a certificate, I came to the Center For Certification. I now have the proof of my nutcase-iness framed and hanging on my wall!"</p>
                    </div>
                    <div class="testimony-profile">
                        <img class="img-circle" src="assets/images/mbr-160x106.jpg">
                        <div class="mbr-author-name">Anonymous User</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
