<?php
require "header.php";
?>
    
    
    <!-- Breadcromb Area Start -->
    <section class="fina-breadcromb-area section_50">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="breadcromb-left">
                        <h3>Get In Touch</h3>
                        <h2>contact us</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcromb-right">
                        <ul>
                            <li><a href="home">home</a></li>
                            <li>/</li>
                            <li>contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->
    
    
    <!-- Contact Page Area Start -->
    <section class="fina-contact-page-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="fina-contact-desc">
                        <h3>You can Contact with us Always</h3>
                        <P>Choose the method that's most convenient for you, and we'll do our best to respond to your inquiry as soon as possible.</P>
                    </div>
                </div>
            </div>
            <div class="fina-contact-form-bottom">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="contact-form-left">
                            <div class="single-contact-left">
                                <div class="contact-icon">
                                    <i class="fa fa-phone text-center"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>phone</h4>
                                    <p><?php echo $company_phone ?></p>
                                    <!-- <p>(+88) 123 750 317 0</p> -->
                                </div>
                            </div>
                            <div class="single-contact-left">
                                <div class="contact-icon">
                                    <i class="fa fa-envelope text-center"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Email</h4>
                                    <p><?php echo $company_email ?></p>
                                    <!-- <p>info@example.net</p> -->
                                </div>
                            </div>
                            <div class="single-contact-left">
                                <div class="contact-icon">
                                    <i class="fa fa-home text-center"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Address</h4>
                                    <span>abc. College Road - 4400<br>Bagerhat, BD</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="fina-contact-form-right">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            <input type="text" name="name" placeholder="Enter Your Name" >
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <input type="email" name="Email" placeholder="Enter Your Email" >
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            <input type="text" name="subject" placeholder="Your Subject"  >
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <input type="tel" name="phone" placeholder="Your Phone" >
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <textarea placeholder="Message..." name="Message" ></textarea>
                                        </p>
                                        <p>
                                            <button type="submit" >send message</button>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Page Area End -->
    
    
    <?php
require "footer.php";
?>
    