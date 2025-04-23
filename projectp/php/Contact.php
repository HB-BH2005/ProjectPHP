<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/skins/color-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <!--===Main container start===-->
    <div class="main-container">
        <?php include 'navbar.php'; ?>

        <!--===Main content start===-->
        <div class="main-content">
            <!-- Include Topbar -->
            <?php include 'header.php'; ?>

            <!--=====Contact Section Start=====-->
            <section class="contact section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                    <h3 class="contact-title padd-15">Have You Any Questions?</h3>
                    <h4 class="contact-sub-title padd-15">WE ARE AT YOUR SERVICES</h4>
            
                    <div class="row">
                        <!--====== Contact item start ======-->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Call Us On</h4>
                            <p>+212 628167624</p>
                            <p>+212 641441834</p>
                        </div>
                        <!--====== Contact item END ======-->
                        <!--====== Contact item start ======-->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fab fa-whatsapp"></i></div>
                            <h4>Call Us On</h4>
                            <p>+212 767960379</p>
                            <p>+212 655803005</p>
                        </div>
                        <!--====== Contact item END ======-->
                        <!--====== Contact item Start ======-->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
                            <h4>Location</h4>
                            <p>ESI, Rabat, Morocco</p>
                        </div>
                        <!--====== Contact item END ======-->
                        <!--====== Contact item Start ======-->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h4>Email</h4>
                            <p>Learning2025@gmail.com</p>
                        </div>
                        <!--====== Contact item END ======-->
                    </div>
                    <h3 class="contact-title padd-15">SEND US AN EMAIL</h3>
                    <h4 class="contact-sub-title padd-15">WE ARE VERY RESPONSIVE TO MESSAGES</h4>
                    <!--===== Contact Form -->
                    <form action="https://formspree.io/f/mwplgdka" method="POST" onsubmit="return handleFormSubmit(event)">
                        <!--===== Contact Form-->
                        <div class="row">
                            <div class="contact-form padd-15">
                                <div class="row">
                                    <div class="form-item col-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="form-item col-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-item col-12 padd-15">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-item col-12 padd-15">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" placeholder="Message" required ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-item col-12 padd-15">
                                        <button type="submit" class="btn">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                    </div>
                </section>            
                <!--=====Contact Section END=====-->

            <?php include 'footer.php'; ?>
        </div>
        <!--===Main content END===-->
    </div>
    <!--===Main container END===-->
    <!--===Js Files===-->
    <script src="../js/scripts.js></script>
</body>
</html>