<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Third Party Transportation Logistics Solutions | Fortex Brokerage Inc. </title>
    <meta name="description" content="Third party logistics solutions for TL and LTL freight shipping throughout the United States.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#fafafa">

	<!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.fortexbrokerage.com" />
    <meta property="og:title" content="Fortex Brokerage - 3PL Logistics Solutions" />
    <meta property="og:description" content="Third party logistics solutions for TL and LTL freight shipping throughout the United States">
    <meta property="og:image" content="https://fortexbrokerage.com/img/intro.jpg" />
    <meta name="og:site_name" content="Fortex Brokerage Inc">


    <!-- Normalize -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Local CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- G Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,700|Saira:600" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- G Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>"></script>
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <!-- Navbar -->
    <div class="preloader">
      <img src="img/loader.svg" alt="spinner">
    </div>

    <nav class="navbar fixed-top navbar-light navbar-custom navbar-expand-sm navbar-toggleable-md navbar-expand-md navbar-custom-bg">
        <div class="container" id="nav-inner">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="100" height="20" alt="">
            </a>
            <div class="collapse navbar-collapse  justify-content-end d-none d-md-block">
                <div class="navbar-nav navbarHandler">
                    <a class="nav-item nav-link" data-section="home">Home</a>
                    <a class="nav-item nav-link" data-section="about">About</a>
                    <a class="nav-item nav-link" data-section="industries">Industries</a>
                    <a class="nav-item nav-link" data-section="shippers">Shippers</a>
                    <a class="nav-item nav-link" data-section="carriers">Carriers</a>
                    <a class="nav-item nav-link" data-section="career">Career</a>
                    <a class="nav-item nav-link" data-section="contacts">Contacts</a>
                </div>
            </div>
            <button class="navbar-toggler nav-toggler-button ml-auto mt-1" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation" style="margin-top: -10px;" id="toggler-custom">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- Navbar Mobile -->
    <div class="collapse col-12 fixed-top collapse-custom bg-white hidden-md-up" id="navbarMobile">
        <ul class="nav navbar-nav text-center navbarHandler list-unstyled">
            <li class="nav-item">
                <a class="nav-item nav-link" data-section="home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" data-section="about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" data-section="industries">Industries</a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" data-section="shippers">Shippers</a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" data-section="carriers">Carriers</a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" data-section="career">Career</a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" data-section="contacts">Contacts</a>
            </li>
        </ul>
    </div>
    <!-- Jumbotron -->
    <section>
        <div class="jumbotron jumbotron-fluid " style="margin-top: 55px;" id="home">
            <div class="jumbo-bar text-light text-center d-none d-lg-block">
                <div class="container">
                    <div class="row top-bar" style="height:50px">
                        <div class="col-4 jumbo-bar-border flex-center">
                            <a>+1 (916) 385-4332</a>
                        </div>
                        <div class="col-4 jumbo-bar-border flex-center">
                            <a>3250 Laurelhurst, Rancho Cordova, CA</a>
                        </div>
                        <div class="col-4 flex-center">
                            <a>Monday - Saturday: 9am - 6pm</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center text-light header-text">
                <h1>Nationwide Third Party Logistics Solutions</h1>
                <span><b>We are dedicated to provide reliable logistics solutions to shippers across the nation</b></span>
                <br />
                <br />
                <button class="btn btn-outline-light btn-custom font-weight-700" onclick="getQuote()">GET A QUOTE</button>
            </div>
        </div>
        <!-- Trailers Cards -->
        <div class="container d-none d-md-block" style="margin-top: -120px; margin-bottom: 80px;">
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="service-card">
                        <img src="img/dry-van.jpg" class="service-card-img" alt="Dry van logistics services"/>
                        <h5>DRY VAN</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-card">
                        <img src="img/reefer.jpg" class="service-card-img" alt="Refrugerated logistics services"/>
                        <h5>REFRIGERATED</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-card">
                        <img src="img/flatbed.jpg" class="service-card-img" alt="Flatbed logistics services"/>
                        <h5>FLATBED</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-card">
                        <img src="img/step-deck.jpg" class="service-card-img" alt="Step deck logistics services"/>
                        <h5>STEP DECK</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About -->
    <section id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-6 p-0 ">
                    <div class="block-height block-padding bg-white text-justify flex-custom" id="about-desc">
                        <h3 class="mb-4 text-center text-md-left ">ABOUT</h3>
                        <p>Fortex Brokerage is a third-party logistics ground freight transportation
                            company.
                            High standards of service, good organization and planning allow us to achieve the fundamental goal at every
                            stage of our activity - to save time and effort of the client. Today, our company looks into the future with
                            confidence, relying on further cooperation with its customers, firmly guarantees the high quality of its
                            services. We are constantly working to improve the quality of service and expertise of our employees. Our
                            work is based on the use of creativity, innovation and the latest achievements in the field of
                            transportation of goods and customs.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 p-0">
                    <div class="d-none d-md-block block-height about-right" id="about-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Industries -->
    <section id="industries" class="section-flex">
        <div class="container tab-content">
            <h3 class="text-center mb-4 ml-5 ml-md-0">INDUSTRIES</h3>
            <div class="row">
                <div class="col-3 markets-list text-center pt-5 pt-md-0 ">
                    <ul class="nav flex-column nav-tabs custom-tabs mt-2">
                        <li class="nav-item tools-link active">
                            <a class="nav-link" href="#tab-1">Food & Beverage</a>
                        </li>
                        <li class="nav-item tools-link">
                            <a class="nav-link" href="#tab-2">Manufacturing</a>
                        </li>
                        <li class="nav-item tools-link">
                            <a class="nav-link" href="#tab-4">Technology</a>
                        </li>
                        <li class="nav-item tools-link">
                            <a class="nav-link" href="#tab-3">Medical</a>
                        </li>
                        <li class="nav-item tools-link">
                            <a class="nav-link" href="#tab-5">Retail</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content col-8 col-md-9 text-justify">
                    <div id="tab-1" class="tab-pane active">
                        <p>Food delivery is a rather specific transport service. It requires strict adherence to sanitary standards.
                            In addition, transportation of food must be carried out in a certain temperature regime. We will carry out
                            transportation of food in the temperature mode necessary for such a cargo in accordance with all the
                            regulations. Flexibly adapt the proposed solution so that it most suits your needs, responds to the
                            specifics of the
                            seasons or changes in volumes, as well as unpredictable circumstances during transportation. Our priority is
                            to deliver the required quantity of goods of the expected quality to a certain place properly and on time.</p>
                    </div>
                    <div id="tab-2" class="tab-pane">
                        <p>The purpose of manufacturing logistics: reducing costs while improving the quality of the product in the
                            process of transformation of the material flow in the production processes within the enterprise.
                            Also, the use of manufacturing logistics is important during the organization of the production of complex
                            goods, when cooperation is a necessary condition. For example, in case of need to transport a product of
                            production, operations on its transportation can be an object of manufacturing logistics, subject to the use
                            of
                            its own transport. In the case of attracting transport of other organizations, these operations become the
                            object of transport logistics, and not production.</p>
                    </div>
                    <div id="tab-3" class="tab-pane">
                        <p>Pharmaceutical logistics is a special segment in the service sector, as companies delivering medical goods,
                            biological materials and life-supporting substances have special requirements. Reliable and timely delivery
                            of pharmaceutical and biological products directly affects the profits of the medical industry. To provide
                            quality care to patients and minimize financial risks, it is necessary to comply with logistic accuracy and
                            all difficult storage conditions at each stage of transportation. This is critical primarily because of the
                            specific items - expensive, temperature-sensitive and urgent drugs.</p>
                    </div>
                    <div id="tab-4" class="tab-pane">
                        <p>The field of technology and electronics is a market segment characterized by rapid development and short
                            product life cycles. A private customer or company seeks to obtain high-tech or electronics products before
                            it
                            becomes obsolete. Therefore, special criteria are applied to logistics in the field of electronics and
                            technologies, which allow to put all these features into practice. With whatever your business, electronic,
                            computer industry, telecommunications or semiconductors, we understand it and are ready to
                            offer a solution to your problems that meets the requirements of modern logistics.</p>
                    </div>
                    <div id="tab-5" class="tab-pane">
                        <p>Retail business faces diverse and numerous challenges, including entering new markets and providing high
                            quality services in a rapidly growing commercial environment in an industry with high demands. To solve
                            these problems, logistics chains must provide uninterrupted service, taking into account all of the
                            above factors. DHL specialists are not afraid of difficulties: together with customers we develop solutions
                            and improve them.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Quote -->
    <section id="quote" class="section-flex">
        <div class="container text-light">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="mb-3" id="quote-header">
                        <h3>GET A QUOTE</h3>
                        <p>Please fill out the form below to request a quote. We will get back to you within 24 hours.</p>
                    </div>
                    <form action="rate-form.php" method="post">
                        <div class="form-row custom-input-quote">
                            <div class="form-group col-12 col-md-6 col-lg-4 offset-lg-1">
                                <label for="fullname">Full Name</label>
                                <div class="w-auto">
                                    <input type="text" id="fullname" class="mb-lg-0 form-control" name="fullname" placeholder="Full Name" minlength="4" maxlength="150" required>
                                </div>
                            </div>
                            <div class="form-group col-12 col-md-6 col-lg-4 offset-lg-2">
                                <label for="email">E-mail</label>
                                <div>
                                    <input type="email" id="email" class="form-control" name="email" placeholder="E-mail" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row custom-input-quote">
                            <div class="form-group col-12 col-md-6 col-lg-4 offset-lg-1">
                                <label for="phone">Phone Number</label>
                                <div>
                                    <input type="text" id="phone" class="mb-lg-0 form-control" name="phone" placeholder="Phone Number" minlength="6" maxlength="15" required>
                                </div>
                            </div>
                            <div class="form-group col-12 col-md-6 col-lg-4 offset-lg-2">
                                <label for="equipment">Equipment</label>
                                <div>
                                    <input type="text" id="equipment" class="form-control" name="equipment" placeholder="Equipment">
                                </div>
                            </div>
                        </div>
                        <div class="form-row custom-input-quote mb-4">
                            <div class="form-group col-12 col-md-6 col-lg-4 offset-lg-1">
                                <label for="departure">Departure</label>
                                <div>
                                    <input type="text" id="departure" class="mb-lg-0 form-control" name="departure" placeholder="Departure">
                                </div>
                            </div>
                            <div class="form-group col-12 col-md-6 col-lg-4 offset-lg-2">
                                <label for="arrival">Arrival</label>
                                <div>
                                    <input type="text" id="arrival" class="form-control" name="arrival" placeholder="Arrival">
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="quote-btn" class="btn btn-outline-light btn-custom font-weight-700">GET A QUOTE</button>
                        <div class="col-3">
                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                        </div>
                        <script>
                        grecaptcha.ready(function() {
                            grecaptcha.execute('<?php echo SITE_KEY; ?>', { action: 'homepage' }).then(function(token) {
                                document.getElementById('g-recaptcha-response').value = token;
                            });
                        });
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Shippers -->
    <section id="shippers">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-6 p-0" id="shippers-desc">
                    <div class="block-height block-padding bg-white text-center text-md-left flex-custom">
                        <h3 class="mb-4 ">SHIPPERS</h3>
                        <p class="mb-3">We work with shippers across the nation. If you are interested in working with us please download our setup packet below.</p>
                        <div>
                            <a class="btn btn-outline-dark btn-custom-dark mb-3" href="resources/shipper-packet.pdf">DOWNLOAD PACKET</a>
                        </div>
                        <p>Follow the instructions on the last page of the packet upon the completion of application.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 p-0">
                    <div class="block-height shippers-right d-none d-md-block" id="shippers-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Carriers -->
    <section id="carriers">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-6 p-0">
                    <div class="block-height carriers-left d-none d-md-block" id="carriers-img">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 p-0">
                    <div class="block-height block-padding bg-white text-center text-md-left flex-custom" id="carriers-desc">
                        <h3 class="mb-4">CARRIERS</h3>
                        <p class="mb-3">Every year we partner with dozen of carriers across the states. If you would
                            like to become one of our trusted carrier partners please download the setup packet below.</p>
                        <div class="d-flex justify-content-center justify-content-md-start">
                            <a class="btn btn-outline-dark btn-custom-dark mb-3" href="resources/carrier-packet.pdf">DOWNLOAD
                                PACKET</a>
                        </div>
                        <p>Follow the instructions on the last page of the packet upon the completion of application.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Career -->
    <section id="career" class="section-flex">
        <div class="container">
            <div>
                <h3 class="text-center mb-4">CAREER</h3>
                <div class="row">
                    <div class="col-12  text-center ">
                        <p>The basis of any business are employees of the company. They lead the organization to success. In order for the company to grow and develop, to be successful in all directions, we need talented, active and professional people. We provide our employees opportunities to grow and expand their area of expertise.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contacts -->
    <section id="contacts">
        <div class="container-fluid">
            <div class="row">
                <!-- Contacts Map -->
                <div class="col-xs-12 col-md-6 p-0" id="contact-map">
                    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCI9avdeNK_BKpzD5rbSva7T_3b0oy_MPU"></script>
                    <div class="contmap d-none d-md-block" style='overflow:hidden;height:650px;width:100%;'>
                        <div id='gmap_canvas' style='height:650px;width:100%;'>
                        </div>
                    </div>
                </div>
                <!-- Contacts Form -->
                <div class="col-12 col-md-6 pt-5 pb-5 pt-md-0 pb-md-0 bg-white flex-center" id="contact-form">
                    
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-center text-md-left mb-4" >CONTACTS</h3>
                            </div>
                            <div class="col-12 contact-info">
                                <ul class="text-center text-md-left list-unstyled">
                                    <li><i class="fas fa-phone"></i> +1 (916) 835-4332</li>
                                    <li><i class="fas fa-fax"></i> +1 (916) 835-4332</li>
                                    <li><i class="fas fa-envelope"></i> contact@fortexbrokerage.com</li>
                                </ul>
                            </div>
                            <div class="col-12">
                                <form action="contact-form.php" method="post">
                                    <div class="col p-0 mt-3 form-group">
                                        <label id="name">Full Name</label>
                                        <input class="input-dark form-control" type="text" id="name" name="name" required minlength="4" maxlength="150" placeholder="Full Name">
                                    </div>
                                    <div class="col p-0 mt-3 form-group">
                                        <label id="email">E-mail</label>
                                        <input class="input-dark form-control" type="email" id="email" name="email" required placeholder="Email">
                                    </div>
                                    <div class="col p-0 mt-3 form-group">
                                        <label id="phone">Phone Number</label>
                                        <input class="input-dark form-control" type="text" id="phone" name="phone" required minlength="6" maxlength="15" placeholder="Phone Number">
                                    </div>
                                    <div class="col p-0 mt-3 form-group mb-5">
                                        <label id="textmessage">Message</label>
                                        <input class="input-textarea-dark form-control" type="textarea" id="textmessage" name="textmessage" required minlength="5" rows="4" placeholder="Message">
                                    </div>
                                    <button type="submit" class="btn btn-outline-dark btn-custom-dark">SEND</button>
                                    <div class="col-3">
                                        <input type="hidden" id="g-recaptcha-response-2" name="g-recaptcha-response-2">
                                    </div>
                                    <script>
                                    grecaptcha.ready(function() {
                                        grecaptcha.execute('<?php echo SITE_KEY; ?>', { action: 'homepage' }).then(function(token) {
                                            document.getElementById('g-recaptcha-response-2').value = token;
                                        });
                                    });
                                    </script>
                                </form>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <script>
                    document.write(new Date().getFullYear())
                    </script> © Fortex Brokerage Inc.
                </div>
                <div class="col-6 text-right">Developed by <a href="http://www.nucleus.media">Nucleus</a></div>
            </div>
        </div>
    </footer>
    <!-- Modernizr -->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')
    </script>
    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- Scroll Magic -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.1/ScrollToPlugin.min.js"></script>
    <!-- Local Scripts -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/scenes.js"></script>
    <script src="js/map-style.js"></script>
    <script src="js/tabs.js"></script>
    <!-- Google Analytics -->
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
	<!-- Schema.org -->
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Fortex Brokerage",
        "url": "https://www.fortexbrokerage.com",
        "address": ""
    }
    </script>
</body>

</html>