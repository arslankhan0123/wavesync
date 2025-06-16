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

                <p class="hero-description" data-aos="fade-up" data-aos-delay="300">At Wavesync, we excel in providing specialized BPO services, including customer support, technical
                    assistance, data management, and chatbot solutions. Our customized offerings are designed to streamline
                    operations, enhance customer engagement, and drive business growth with precision and efficiency.</p>

                <div class="hero-actions" data-aos="fade-up" data-aos-delay="400">
                    <a href="{{ route('welcome') }}#services" class="action-btn primary">
                        <span>Our Services</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="{{ route('welcome') }}#contact" class="action-btn secondary">
                        <i class="bi bi-play-circle"></i>
                        <span>Contact Us</span>
                    </a>
                </div>

                <!-- <div class="hero-image-showcase" data-aos="fade-up" data-aos-delay="500">
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
                </div> -->

            </div>

        </div>
    </div>
</section>

<!-- Service details Section -->
<section id="service-details" class="service-details section mt-5">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center justify-content-between g-lg-5">
            <div class="col-lg-12" data-aos="fade-left" data-aos-delay="300">
                <div class="content">
                    <h2 class="mb-4">{{ $service->title }}</h2>
                    <h5 class="mb-4" style="color: white;">{!! $service->short_description !!}</h5>

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