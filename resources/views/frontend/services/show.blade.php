@extends('layouts.landing.main')
@section('title', 'Home - Wavesync')
@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section" style="background-color: #0d6efd !important;">
    <div class="container">
        <div class="hero-wrapper">

            <div class="hero-main-content text-center">
                <h1 class="hero-title" data-aos="zoom-in" data-aos-delay="200">
                    Empower Your Business with<br>
                    <span class="typed" data-typed-items="{{ $service->title }}"></span>
                </h1>

                <p class="hero-description" data-aos="fade-up" data-aos-delay="300">At Wavesync, we excel in providing specialized BPO services, including customer support, technical assistance, data management, and chatbot solutions. Our customized offerings are designed to streamline operations, enhance customer engagement, and drive business growth with precision and efficiency.</p>

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
            </div>
        </div>
    </div>
</section>

<!-- Service Details Section -->
<section id="service-details" class="service-details section mt-5">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center justify-content-between g-lg-5">
            <div class="col-lg-12" data-aos="fade-left" data-aos-delay="300">
                <div class="content">
                    <h2 class="mb-4">{{ $service->title }}</h2>
                    <h5 class="mb-4">{!! $service->short_description !!}</h5>

                    {{-- Render long description with formatting --}}
                    <p>{!! $service->long_description !!}</p>

                    {{-- Show price --}}
                    <p><strong>Price:</strong> ${{ number_format($service->price, 2) }}</p>

                    {{-- Optionally add features or extras --}}
                    <div class="features-list mt-5" data-aos="fade-up" data-aos-delay="400">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    {{-- You can display service features here if needed --}}
                                </div>
                            </div>
                        </div>
                    </div>
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

                    <form action="#" method="POST" class="php-email-form">
                        @csrf
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
                            <div class="loading" style="display:none;">Loading</div>
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
<!-- jQuery (required for AJAX) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('.php-email-form').on('submit', function(e) {
            e.preventDefault(); // prevent default submit

            let form = $(this);
            let formData = new FormData(this);
            let submitBtn = form.find('.submit-btn');

            // Disable button to prevent double click
            submitBtn.prop('disabled', true);

            $.ajax({
                url: "{{route('contact.store')}}",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('.loading').show();
                },
                success: function(response) {
                    $('.loading').hide();
                    Swal.fire({
                        icon: 'success',
                        title: 'Message Sent',
                        text: 'Your message has been sent successfully!',
                    });

                    form[0].reset();
                },
                error: function(xhr) {
                    $('.loading').hide();
                    let errors = xhr.responseJSON?.errors;
                    let errorMsg = "Something went wrong. Please try again.";

                    if (errors) {
                        errorMsg = Object.values(errors).join('\n');
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: errorMsg
                    });
                },
                complete: function() {
                    // Always re-enable the button after request
                    submitBtn.prop('disabled', false);
                }
            });
        });
    });
</script>



@endsection