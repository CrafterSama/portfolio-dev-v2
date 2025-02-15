@extends('layouts.portfolio')

@section('content')
    <!--
            ===================
                NAVIGATION
            ===================
            -->
    <header class="black-bg mh-header mh-fixed-nav nav-scroll mh-xs-mobile-nav" id="mh-header">
        <div class="overlay"></div>
        <x-navigation />
    </header>

    <!--
            ===================
                Home
            ===================
            -->
    <section class="mh-home image-bg home-2-img" id="mh-home">
        <livewire:home-section>
    </section>

    <!--
            ===================
                ABOUT
            ===================
            -->
    <section class="mh-about" id="mh-about">
        <livewire:about-me-section>
    </section>

    <!--
            ===================
                SERVICE
            ===================
            -->
    <section class="mh-service">
        <livewire:service-section>
    </section>

    <!--
            ===================
                FEATURE PROJECTS
            ===================
        -->
    <section class="mh-featured-project image-bg featured-img-one">
        <livewire:featured-projects-section>
    </section>

    <!--
            ===================
                SKILLS
            ===================
            -->
    <section class="mh-skills" id="mh-skills">
        <livewire:skills>
    </section>

    <!--
            ===================
                EXPERIENCES
            ===================
            -->
    <section class="mh-experince image-bg featured-img-one" id="mh-experience">
        <div class="img-color-overlay">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-education">
                            <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Education</h3>
                            <livewire:education-experience>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-work">
                            <h3>Work Experience</h3>
                            <livewire:work-experience>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
            ===================
                PORTFOLIO
            ===================
            -->
    <section class="mh-portfolio" id="mh-portfolio">
        <livewire:portfolio-section>
    </section>

    <!--
            ===================
                BLOG
            ===================
            -->
    <section class="mh-blog image-bg featured-img-two" id="mh-blog">
        <div class="img-color-overlay">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h3>Featured Posts</h3>
                    </div>
                    <livewire:featured-post>
                </div>
            </div>
        </div>
    </section>

    <!--
            ===================
                Testimonial
            ===================
            -->
    <section class="mh-testimonial" id="mh-testimonial">
        <div class="home-v-img">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h3>Client Reviews</h3>
                    </div>
                    <livewire:clients-reviews>
                </div>
            </div>
        </div>
    </section>

    <!--
            ===================
                FOOTER 3
            ===================
            -->
    <footer class="mh-footer mh-footer-3" id="mh-contact">
        <div class="container-fluid">
            <div class="row section-separator">
                <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <h3>Contact Me</h3>
                </div>
                <div class="map-image image-bg col-sm-12">
                    <div class="container mt-30">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 mh-footer-address">
                                <div class="col-sm-12 xs-no-padding">
                                    <div class="mh-address-footer-item dark-bg shadow-1 media wow fadeInUp"
                                        data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        <div class="each-icon">
                                            <i class="fa fa-location-arrow"></i>
                                        </div>
                                        <div class="each-info media-body">
                                            <h4>Address</h4>
                                            <address>
                                                5th Avenue, 34th floor, <br>
                                                New york
                                            </address>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 xs-no-padding">
                                    <div class="mh-address-footer-item media dark-bg shadow-1 wow fadeInUp"
                                        data-wow-duration="0.8s" data-wow-delay="0.4s">
                                        <div class="each-icon">
                                            <i class="fa fa-envelope-o"></i>
                                        </div>
                                        <div class="each-info media-body">
                                            <h4>Email</h4>
                                            <a href="mailto:yourmail@email.com">yourmail@email.com</a><br>
                                            <a href="mailto:yourmail@email.com">yourmail@email.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 xs-no-padding">
                                    <div class="mh-address-footer-item media dark-bg shadow-1 wow fadeInUp"
                                        data-wow-duration="0.8s" data-wow-delay="0.6s">
                                        <div class="each-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="each-info media-body">
                                            <h4>Phone</h4>
                                            <a href="callto:(880)-8976-987">(880)-8976-987</a><br>
                                            <a href="callto:(880)-8976-987">(880)-8976-987</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                <form id="contactForm" class="single-form quate-form wow fadeInUp" data-toggle="validator">
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input name="name" class="contact-name form-control" id="name"
                                                type="text" placeholder="First Name" required>
                                        </div>

                                        <div class="col-sm-12">
                                            <input name="name" class="contact-email form-control" id="L_name"
                                                type="text" placeholder="Last Name" required>
                                        </div>

                                        <div class="col-sm-12">
                                            <input name="name" class="contact-subject form-control" id="email"
                                                type="email" placeholder="Your Email" required>
                                        </div>

                                        <div class="col-sm-12">
                                            <textarea class="contact-message" id="message" rows="6" placeholder="Your Message" required></textarea>
                                        </div>

                                        <!-- Subject Button -->
                                        <div class="btn-form col-sm-12">
                                            <button type="submit" class="btn btn-fill btn-block" id="form-submit">Send
                                                Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-12 mh-copyright wow fadeInUp" data-wow-duration="0.8s"
                                data-wow-delay="0.2s">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="text-left text-xs-center">
                                            <p><a href="templateshub.net">Templates Hub</a></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="social-icon">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-github"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
