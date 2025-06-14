@extends('layouts.landing.main')
@section('title', 'Home')
@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section" style="background-color: #0d6efd !important;">
    <div class="container">
        <div class="hero-wrapper">

            <div class="hero-main-content text-center">
                <h1 class="hero-title" data-aos="zoom-in" data-aos-delay="200">
                    Empower Your Business with<br>
                    <span class="typed" data-typed-items="Wavesync"></span>
                </h1>

                <p class="hero-description" data-aos="fade-up" data-aos-delay="300">
                    Streamline your operations and elevate customer experiences with our tailored BPO services. We specialize
                    in customer support, technical assistance, data management, and automation, helping businesses operate
                    efficiently and scale seamlessly.
                </p>

                <div class="hero-actions" data-aos="fade-up" data-aos-delay="400">
                    <a href="#services" class="action-btn primary">
                        <span>Our Services</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="#contact" class="action-btn secondary">
                        <i class="bi bi-play-circle"></i>
                        <span>Contact Us</span>
                    </a>
                </div>

                <div class="hero-image-showcase" data-aos="fade-up" data-aos-delay="500">
                    <div class="image-wrapper">
                        <img src="{{ asset('landingPage/assets/img/services/service1.jpg') }}" class="img-fluid" alt="Strategic Overview">
                        <div class="floating-card card-1" data-aos="fade-right" data-aos-delay="600">
                            <div class="card-content">
                                <div class="card-icon">
                                    <i class="bi bi-graph-up-arrow"></i>
                                </div>
                                <div class="card-info">
                                    <h4><span data-purecounter-start="0" data-purecounter-end="100" class="purecounter"></span>%</h4>
                                    <p>Meet Project Deadlines</p>
                                </div>
                            </div>
                        </div>
                        <div class="floating-card card-2" data-aos="fade-left" data-aos-delay="700">
                            <div class="card-content">
                                <div class="card-icon">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="card-info">
                                    <h4><span data-purecounter-start="0" data-purecounter-end="500" class="purecounter"></span>+</h4>
                                    <p>Satisfied Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center justify-content-between g-lg-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                <div class="image-wrapper">
                    <img src="{{ asset('landingPage/assets/img/services/service4.jpg') }}" class="img-fluid rounded img-fluid-our-story"
                        alt="About Us Image">
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                <div class="content">
                    <h2 class="mb-4">Our Story</h2>
                    <h5 class="mb-4">Welcome to The Wavesync</h5>

                    <p>Introducing Wavesync, an innovative leader in the digital landscape focused on revolutionizing your
                        online presence. With a team of dedicated professionals at our core, we specialize in creating advanced
                        solutions tailored precisely to your needs, whether you’re beginning a new venture or managing a
                        well-established enterprise.</p>

                    <div class="features-list mt-5" data-aos="fade-up" data-aos-delay="400">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="bi bi-award"></i>
                                    <h5>Who Are We</h5>
                                    <p>Wavesync is a forward-thinking digital company focused on transforming online presence through
                                        innovative and tailored solutions for businesses of all sizes.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="bi bi-lightbulb"></i>
                                    <h5>Our Mission</h5>
                                    <p>We aim to empower businesses with creative, cutting-edge digital solutions that exceed
                                        expectations and fuel long-term success.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="bi bi-people"></i>
                                    <h5>What We Do</h5>
                                    <p>We deliver top-tier UI/UX design, websites, CRMs, mobile apps, e-commerce platforms, and
                                        reliable tech support to help businesses grow.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    <h5>Why Choose Us</h5>
                                    <p>We value innovation, transparency, and client success—offering high-quality, result-driven
                                        digital services with a collaborative approach.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mt-5" data-aos="fade-up" data-aos-delay="600">
                        <a href="#services" class="btn btn-primary me-3">Our Services</a>
                        <a href="#contact" class="btn btn-outline-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- Services Section -->
<section id="services" class="services section"
    style="background: linear-gradient(135deg, rgba(70, 145, 255, 0.85) 0%, rgba(100, 200, 255, 0.85) 50%, rgba(120, 90, 200, 0.85) 100%); color: #ffffff; padding: 40px 0;">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <!-- <p>We provide a wide range of Services</p> -->
        <p>At Wavesync, we excel in providing specialized BPO services, including customer support, technical
            assistance, data management, and chatbot solutions. Our customized offerings are designed to streamline
            operations, enhance customer engagement, and drive business growth with precision and efficiency.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="intro-content" data-aos="fade-right" data-aos-delay="100">
                    <div class="section-badge mb-3" data-aos="zoom-in" data-aos-delay="50">
                        <i class="bi bi-star-fill"></i>
                        <span>WHAT WE DO</span>
                    </div>
                    <h2 class="section-heading mb-4">Transforming Ideas into Outstanding Results</h2>
                    <p class="section-description mb-4">At Wavesync, we excel in providing specialized BPO services, including
                        customer support, technical assistance, data management, and chatbot solutions. Our customized offerings
                        are designed to streamline operations, enhance customer engagement, and drive business growth with
                        precision and efficiency.</p>
                    <a href="#contact" class="cta-button" data-aos="fade-right" data-aos-delay="200">
                        Contact Us
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-visual" data-aos="fade-left" data-aos-delay="150">
                    <img src="{{ asset('landingPage/assets/img/services/service2.jpg') }}" alt="Services" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="services-grid mt-5">
            <div class="row g-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="card-number">
                            <span>01</span>
                        </div>
                        <div class="card-content">
                            <h5 class="service-title">
                                <a href="#">💻 Web Development</a>
                            </h5>
                            <p class="service-description">We create fast, responsive, and modern websites that reflect your brand
                                and engage your users. Whether it's a business site or a landing page, we ensure it works seamlessly
                                across all devices.</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="card-number">
                            <span>02</span>
                        </div>
                        <div class="card-content">
                            <h5 class="service-title">
                                <a href="#">📱 App Development</a>
                            </h5>
                            <p class="service-description">We build intuitive, feature-rich mobile applications for both Android
                                and iOS. From concept to launch, we deliver apps that offer smooth performance and great user
                                experiences.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="card-number">
                            <span>03</span>
                        </div>
                        <div class="card-content">
                            <h5 class="service-title">
                                <a href="#">🛒 E-Commerce Store</a>
                            </h5>
                            <p class="service-description">Launch a powerful online store with secure payments, inventory
                                management, and a smooth shopping experience. We develop scalable e-commerce platforms tailored to
                                your business goals.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="card-number">
                            <span>04</span>
                        </div>
                        <div class="card-content">
                            <h5 class="service-title">
                                <a href="#">🤖 AI Chatbot</a>
                            </h5>
                            <p class="service-description">Enhance customer engagement with smart AI chatbots that automate
                                support, lead generation, and FAQs. Our bots are trained to deliver fast and helpful interactions
                                24/7.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="card-number">
                            <span>05</span>
                        </div>
                        <div class="card-content">
                            <h5 class="service-title">
                                <a href="#">🌐 Full-Stack Development</a>
                            </h5>
                            <p class="service-description">We handle everything from frontend design to backend logic, delivering
                                fully functional web and app solutions. Our full-stack services ensure your product is scalable,
                                secure, and efficient.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="card-number">
                            <span>06</span>
                        </div>
                        <div class="card-content">
                            <h5 class="service-title">
                                <a href="#">🛠️ Custom Software Development</a>
                            </h5>
                            <p class="service-description">Need something unique? We build tailored software solutions from
                                scratch, based on your specific workflows and needs — helping you automate, streamline, and grow
                                your operations.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="card-number">
                            <span>07</span>
                        </div>
                        <div class="card-content">
                            <h5 class="service-title">
                                <a href="#">🔗 Blockchain Development</a>
                            </h5>
                            <p class="service-description">We develop secure and transparent blockchain solutions including smart
                                contracts,
                                crypto wallets, and decentralized apps (dApps) tailored to your business objectives.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="card-number">
                            <span>08</span>
                        </div>
                        <div class="card-content">
                            <h5 class="service-title">
                                <a href="#">🧠 Machine Learning</a>
                            </h5>
                            <p class="service-description">Leverage predictive analytics, automation, and intelligent algorithms.
                                We build ML models that help your business make smarter decisions and optimize processes.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="card-number">
                            <span>09</span>
                        </div>
                        <div class="card-content">
                            <h5 class="service-title">
                                <a href="#">🤖 Bot Integration</a>
                            </h5>
                            <p class="service-description">We integrate intelligent bots into your workflows to automate tasks,
                                assist with customer service, and boost efficiency across your platforms like Slack, Discord, or
                                WhatsApp.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>

<!-- Stats Section -->
<section id="stats" class="stats section light-background">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">

            <div class="col-lg-12">
                <div class="row counters">
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                        <h2><span data-purecounter-start="0" data-purecounter-end="185" data-purecounter-duration="1"
                                class="purecounter"></span>+</h2>
                        <p>Inprogress Projects</p>
                    </div>

                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                        <h2><span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1"
                                class="purecounter"></span>K</h2>
                        <p>Completed Projects</p>
                    </div>

                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                        <h2><span data-purecounter-start="0" data-purecounter-end="128" data-purecounter-duration="1"
                                class="purecounter"></span>+</h2>
                        <p>Permanent Clients</p>
                    </div>

                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                        <h2><span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                                class="purecounter"></span>k+</h2>
                        <p>Satisfied Clients</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

<!-- Faq Section -->
<section id="faq" class="faq section"
    style="background: linear-gradient(135deg, rgba(70, 145, 255, 0.85) 0%, rgba(100, 200, 255, 0.85) 50%, rgba(120, 90, 200, 0.85) 100%); color: #ffffff; padding: 40px 0;">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-between">
            <div class="col-lg-8">

                <div class="faq-list">
                    <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="100">
                        <h3>❓ 1. What services does Wavesync offer?</h3>
                        <div class="faq-content">
                            <p>
                                We offer web and app development, e-commerce store setup, AI chatbot integration, full-stack
                                development, and custom software solutions tailored to your business needs.
                            </p>
                        </div>
                        <i class="bi bi-plus faq-toggle"></i>
                    </div><!-- End FAQ Item-->

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                        <h3>❓ 2. How long does it take to complete a project?</h3>
                        <div class="faq-content">
                            <p>
                                Project timelines vary based on complexity, but typically range from 2 to 6 weeks. After an initial
                                consultation, we provide a clear timeline and keep you updated at every step.
                            </p>
                        </div>
                        <i class="bi bi-plus faq-toggle"></i>
                    </div><!-- End FAQ Item-->

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                        <h3>❓ 3. Do you offer support after project delivery?</h3>
                        <div class="faq-content">
                            <p>
                                Yes, we provide ongoing technical support and maintenance to ensure your platform runs smoothly,
                                stays secure, and remains up-to-date.
                            </p>
                        </div>
                        <i class="bi bi-plus faq-toggle"></i>
                    </div><!-- End FAQ Item-->

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                        <h3>❓ 4. Can you build both Android and iOS apps?</h3>
                        <div class="faq-content">
                            <p>
                                Absolutely! We specialize in building cross-platform mobile apps that work seamlessly on both
                                Android and iOS devices using modern frameworks.
                            </p>
                        </div>
                        <i class="bi bi-plus faq-toggle"></i>
                    </div><!-- End FAQ Item-->

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                        <h3>❓ 5. Do you work with startups and small businesses?</h3>
                        <div class="faq-content">
                            <p>
                                Yes! Whether you're just starting out or scaling up, we tailor our solutions to match your goals and
                                budget.
                            </p>
                        </div>
                        <i class="bi bi-plus faq-toggle"></i>
                    </div><!-- End FAQ Item-->

                </div>

            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="faq-card">
                    <i class="bi bi-chat-dots-fill"></i>
                    <h3>Can't find answer to your question?</h3>
                    <p>We understand that every project and concern is unique, and sometimes your specific question might not
                        be covered in our FAQs. Don’t worry — our team is here to help you out personally. Whether you have a
                        technical query, need help choosing the right service, or want to discuss a custom solution, just reach
                        out. We’re committed to providing clear and timely support. You can contact us via email, phone, or our
                        contact form — whatever works best for you. Your satisfaction and clarity matter to us, and we’ll make
                        sure you get the answers you need.</p>
                    <a href="#contact" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- Contact Section -->
<section id="contact" class="contact section"
    style="background: linear-gradient(135deg, rgba(70, 145, 255, 0.85) 0%, rgba(100, 200, 255, 0.85) 50%, rgba(120, 90, 200, 0.85) 100%); color: #ffffff; padding: 40px 0;">
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>We’d love to hear from you! Whether you have a question, want to start a project, or just want to learn more
            about our services, our team is ready to assist you. At Wavesync, we believe in building strong relationships
            with our clients through open communication and support.</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-6 mb-5" data-aos="fade-right" data-aos-delay="200">
                <div class="contact-info-section">
                    <div class="info-header">
                        <h3>Connect With Us</h3>
                    </div>

                    <div class="contact-info-grid">
                        <div class="info-item" data-aos="zoom-in" data-aos-delay="250">
                            <div class="info-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="info-content">
                                <h5>United States</h5>
                                <p><b>Address:</b> 811B 5TH AVE # 144 Brooklyn NY 11220 <br> <b>Phone:</b> +1 (806) 692 8155</p>
                            </div>
                        </div>

                        <div class="info-item" data-aos="zoom-in" data-aos-delay="250">
                            <div class="info-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="info-content">
                                <h5>Head Office</h5>
                                <p><b>Address:</b> Building A1 Dubai Digital Park , Dubai Silicon Oasis , Dubai <br> <b>Phone:</b>
                                    +971 055 770 2952</p>
                            </div>
                        </div>

                        <div class="info-item" data-aos="zoom-in" data-aos-delay="250">
                            <div class="info-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="info-content">
                                <h5>Pakistan</h5>
                                <p><b>Address:</b> 306, 3rd floor, Al-Hafeez Executive, Gulberg Lahore Pakistan <br> <b>Phone:</b>
                                    +92 303 0275790</p>
                            </div>
                        </div>

                        <div class="info-item" data-aos="zoom-in" data-aos-delay="300">
                            <div class="info-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="info-content">
                                <h5>Send Email</h5>
                                <p>sales@wavesync.ae</p>
                            </div>
                        </div>
                    </div>

                    <div class="social-contact" data-aos="fade-up" data-aos-delay="450">
                        <h5>Follow Our Journey</h5>
                        <div class="social-icons">
                            <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-twitter-x"></i></a>
                            <a href="https://www.linkedin.com/company/wavesync-ae" class="social-icon"><i
                                    class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                <div class="contact-form-wrapper">
                    <div class="form-header">
                        <h3>Send Us Message</h3>
                        <p>Let’s connect and build something incredible together — we’re just a message away!</p>
                    </div>

                    <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="mb-3">
                            <label for="contactName" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" id="contactName"
                                placeholder="Enter your full name" required="">
                        </div>

                        <div class="mb-3">
                            <label for="contactEmail" class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email" id="contactEmail"
                                placeholder="Enter your email address" required="">
                        </div>

                        <div class="mb-3">
                            <label for="contactPhone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" name="phone" id="contactPhone"
                                placeholder="Enter your phone number">
                        </div>

                        <div class="mb-3">
                            <label for="contactSubject" class="form-label">Subject</label>
                            <input type="text" class="form-control" name="subject" id="contactSubject"
                                placeholder="Enter message subject" required="">
                        </div>

                        <div class="mb-4">
                            <label for="contactMessage" class="form-label">Your Message</label>
                            <textarea class="form-control message-textarea" name="message" id="contactMessage" rows="5"
                                placeholder="Enter your message" required=""></textarea>
                        </div>

                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>

                        <button type="submit" class="submit-btn">
                            <span>Send Message</span>
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection