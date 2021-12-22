@extends('layouts.temp')
@section('content')

    <!--==========================-->
    <!--=         Banner         =-->
    <!--==========================-->
    <section class="banner banner-one">
        <div class="circle-shape" data-parallax='{"y" : 230}'><img src="{{ asset('temp/media/banner/circle-shape.png') }}" alt="circle"></div>
        <div class="container">
            <div class="banner-content-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h1 class="banner-title wow pixFadeUp" data-wow-delay="0.3s">
                                STS <span>Software <br>
                                    solutions</span> are the<br>
                                    best
                            </h1>

                            <p class="description wow pixFadeUp" data-wow-delay="0.5s">
                                our customers consider us<br>
                                their lifetime parteners.
                            </p>

                            <a href="{{ route('contact') }}" class="pxs-btn banner-btn wow pixFadeUp" data-wow-delay="0.6s">Get your solution</a>
                        </div><!-- /.banner-content -->
                    </div><!-- /.col-lg-6 -->

                    <div class="col-lg-6">
                        <div class="promo-mockup wow pixFadeLeft">
                            <img src="{{ asset('temp/media/banner/intro.jpg') }}" alt="mpckup">
                        </div><!-- /.promo-mockup -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.banner-content-wrap -->
        </div><!-- /.container -->

        <div class="bg-shape">
            <img src="{{ asset('temp/media/banner/shape-bg.png') }}" alt="">
        </div>
    </section><!-- /.banner banner-one -->

    <!--===========================-->
    <!--=         Feature         =-->
    <!--===========================-->
    <section class="featured">
        <div class="container">
            <div class="section-title text-center wow pixFade">
                <h3 class="sub-title">Working Process</h3>
                <h2 class="title">The only partner you will need</h2>
            </div><!-- /.section-title -->

            <div class="row">
                <div class="col-md-4">
                    <div class="saaspik-icon-box-wrapper style-one wow pixFadeLeft" data-wow-delay="0.3s">
                        <div class="saaspik-icon-box-icon">
                            <img src="{{ asset('temp/media/feature/1.png') }}" alt="1st step">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title"><a href="#" onclick="return false;">you send us your<br> request</a></h3>
                        </div>
                    </div><!-- /.pixsass-box style-one -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-4">
                    <div class="saaspik-icon-box-wrapper style-one wow pixFadeLeft" data-wow-delay="0.5s">
                        <div class="saaspik-icon-box-icon">
                            <img src="{{ asset('temp/media/feature/2.png') }}" alt="">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title"><a href="#" onclick="return false;">corresponding team respond <br> to your request</a></h3>
                        </div>
                    </div><!-- /.pixsass-box style-one -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-4">
                    <div class="saaspik-icon-box-wrapper style-one wow pixFadeLeft" data-wow-delay="0.7s">
                        <div class="saaspik-icon-box-icon">
                            <img src="{{ asset('temp/media/feature/3.png') }}" alt="">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title"><a href="#" onclick="return false;">you get your solution <br>delivered.</a></h3>
                        </div>
                    </div><!-- /.pixsass-box style-one -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.featured -->

    <!--=================================-->
    <!--=         Editor Design         =-->
    <!--=================================-->
    <section class="editor-design">
        <div class="container">
            <div class="row">

                <div class="editure-feature-image wow pixFadeRight">
                    <div class="image-one" data-parallax='{"x" : 30}'>
                        <img src="{{ asset('temp/media/feature/4.png') }}" class="wow pixFadeRight" data-wow-delay="0.3s" alt="feature-image">
                    </div>
                    <div class="image-two">
                        <div class="image-two-inner" data-parallax='{"x" : -30}'>
                            <img src="{{ asset('temp/media/feature/41.png') }}" class="wow pixFadeLeft" data-wow-delay="0.5s" alt="feature-image">
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 offset-lg-6">
                    <div class="editor-content">
                        <div class="section-title style-two">
                            <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
                                A partner designed<br>
                                for your needs.
                            </h2>

                            <p class="wow pixFadeUp" data-wow-delay="0.5s">
                                our team has attractive skillset that is up to date<br>
                                at all technology fields
                            </p>
                        </div>

                        <div class="description wow pixFadeUp" data-wow-delay="0.7s">
                            <p>
                                We can build all kinds of applications that are specially crafted for your needs and that can work on various platforms.!
                            </p>

                            <a href="{{ route('about') }}" class="pix-btn wow pixFadeUp" data-wow-delay="0.9s">Discover More</a>
                        </div>
                    </div><!-- /.editor-content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="shape-bg">
            <img src="{{ asset('temp/media/background/shape_bg.png') }}" class="wow fadeInLeft" alt="shape-bg">
        </div>
    </section><!-- /.editor-design -->

    <!--=================================-->
    <!--=         Revolutionize         =-->
    <!--=================================-->
    <section class="revolutionize" id="revolutionize">
        <div class="bg-angle"></div>
        <div class="container">
            <div class="section-title dark-title text-center">
                <h3 class="sub-title wow pixFadeUp">Update your current solutions</h3>
                <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
                    Revolutionize your<br>
                    business today
                </h2>
            </div><!-- /.section-title dark-title -->

            <div id="pix-tabs" class="wow pixFadeUp" data-wow-delay="0.5s">
                <ul id="pix-tabs-nav">
                    <li><a href="#tab1">modern applications </a></li>
                    <li><a href="#tab2">Easily Manage your business</a></li>
                    <li><a href="#tab3">control your Data </a></li>
                    <li><a href="#tab4">7/24h Support</a></li>
                </ul> <!-- tabs-nav -->

                <div id="pix-tabs-content">
                    <div id="tab1" class="content">
                        <img src="{{ asset('temp/media/revolutionize/2.jpg') }}" alt="revolutionize">

                        <div class="shape-shadow"></div>
                    </div>
                    <div id="tab2" class="content">
                        <img src="{{ asset('temp/media/revolutionize/1.jpg') }}" alt="revolutionize">
                        <div class="shape-shadow"></div>
                    </div>
                    <div id="tab3" class="content">
                        <img src="{{ asset('temp/media/revolutionize/3.jpg') }}" alt="revolutionize">
                        <div class="shape-shadow"></div>
                    </div>

                    <div id="tab4" class="content">
                        <img src="{{ asset('temp/media/revolutionize/4.jpg') }}" alt="revolutionize">
                        <div class="shape-shadow"></div>
                    </div>
                </div> <!-- tabs-content -->
            </div> <!-- Tabs -->
        </div><!-- /.container -->
    </section><!-- /.revolutionize -->

    <!--===========================-->
    <!--=         Service         =-->
    <!--===========================-->
    <section class="featured-two">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="sub-title wow pixFadeUp">Our service</h3>
                <h2 class="title wow pixFadeUp" data-wow-delay="0.2s">Why you choose Our company</h2>
            </div><!-- /.section-title -->

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.4s">
                        <div class="saaspik-icon-box-icon">
                            <img src="{{ asset('temp/media/feature/6.png') }}" alt="feature">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title"><a href="#" onclick="return false;">App Development</a></h3>
                            <p>
                                we specialize in developing<br>
                                customer-centric applications <br>
                                that fits your needs.!
                            </p>
                        </div>
                    </div><!-- /.pixsass-box style-two -->
                </div><!-- /.col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.5s">
                        <div class="saaspik-icon-box-icon">
                            <img src="{{ asset('temp/media/feature/7.png') }}" alt="feature">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title"><a href="#" onclick="return false;">Customization</a></h3>

                            <p>
                                Our team can customize<br>
                                public solutions <br>
                                to your business.!
                            </p>
                        </div>
                    </div><!-- /.pixsass-box style-two -->
                </div><!-- /.col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.6s">
                        <div class="saaspik-icon-box-icon">
                            <img src="{{ asset('temp/media/feature/8.png') }}" alt="feature">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title"><a href="#" onclick="return false;">Multiple Managers</a></h3>
                            <p>
                                We have managers that handle<br>
                                all details to make our customers <br>
                                satisfied.!
                            </p>
                        </div>
                    </div><!-- /.pixsass-box style-two -->
                </div><!-- /.col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.7s">
                        <div class="saaspik-icon-box-icon">
                            <img src="{{ asset('temp/media/feature/9.png') }}" alt="feature">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title"><a href="#" onclick="return false;">Cloud technologies</a></h3>
                            <p>
                                We use up to date technology in <br>
                                cloud to make products highly available and <br>
                                scalable.!
                            </p>
                        </div>
                    </div><!-- /.pixsass-box style-two -->
                </div><!-- /.col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.8s">
                        <div class="saaspik-icon-box-icon">
                            <img src="{{ asset('temp/media/feature/10.png') }}" alt="feature">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title"><a href="#" onclick="return false;">UI/UX Branding</a></h3>
                            <p>
                                We can provide complete<br>
                                UI/UX solution for your <br>
                                business and organization.!
                            </p>
                        </div>
                    </div><!-- /.pixsass-box style-two -->
                </div><!-- /.col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.9s">
                        <div class="saaspik-icon-box-icon">
                            <img src="{{ asset('temp/media/feature/11.png') }}" alt="feature">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title"><a href="#" onclick="return false;">Customer Support</a></h3>
                            <p>
                                We are a customer centric company.<br>
                                We consider our customer as <br>
                                our first priority.!
                            </p>
                        </div>
                    </div><!-- /.pixsass-box style-two -->
                </div><!-- /.col-lg-4 col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.featured -->

    <!--===============================-->
    <!--=         Testimonial         =-->
    <!--===============================-->
    <section class="testimonials swiper-init">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="sub-title wow pixFadeUp">Testiimonial</h3>
                <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">What our partners say about us</h2>
            </div><!-- /.section-title -->

            <div class="testimonial-wrapper wow pixFadeUp" data-wow-delay="0.5s">
                <div class="swiper-container" id="testimonial" data-speed="700" data-autoplay="5000">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial">
                                <div class="single-bio-thumb">
                                    <img src="{{ asset('temp/media/testimonial/1.jpg') }}" alt="testimonial">
                                </div>
                                <!-- /.single-bio-thumb -->


                                <div class="testimonial-content">
                                    <p>A partner that is always on the top. We can always rely on them to achieve the best to our both organization in the coming years.!</p>
                                </div>
                                <!-- /.testimonial-content -->

                                <div class="bio-info">
                                    <h3 class="name">abdallah ali</h3>
                                    <span class="job">myah company ceo</span>
                                </div>
                                <!-- /.bio-info -->

                            </div>
                            <!-- /.testimonial -->
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial">
                                <div class="single-bio-thumb">
                                    <img src="{{ asset('temp/media/testimonial/1.jpg') }}" alt="testimonial">
                                </div>
                                <!-- /.single-bio-thumb -->


                                <div class="testimonial-content">
                                    <p>kudos STS, We can always depend on your professinlism and we hope a life long partnership between our organizations.!</p>
                                </div>
                                <!-- /.testimonial-content -->

                                <div class="bio-info">
                                    <h3 class="name">fahd hamad</h3>
                                    <span class="job">ceo waterna</span>
                                </div>
                                <!-- /.bio-info -->
                            </div>
                            <!-- /.testimonial -->
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial">
                                <div class="single-bio-thumb">
                                    <img src="{{ asset('temp/media/testimonial/1.jpg') }}" alt="testimonial">
                                </div>
                                <!-- /.single-bio-thumb -->


                                <div class="testimonial-content">
                                    <p>Great company that can meet our expectations all the time.Good job and see you at our coming project.!</p>
                                </div>
                                <!-- /.testimonial-content -->

                                <div class="bio-info">
                                    <h3 class="name">saad ahmed</h3>
                                    <span class="job">cto samnan construction</span>
                                </div>
                                <!-- /.bio-info -->
                            </div>
                            <!-- /.testimonial -->
                        </div>

                    </div><!-- /.swiper-wrapper -->


                </div><!-- /.swiper-container -->
                <div class="shape-shadow"></div>
                <div class="slider-nav wow pixFadeUp" data-wow-delay="0.3s">
                    <div id="slide-prev" class="swiper-button-prev">
                        <i class="ei ei-arrow_left"></i>
                    </div>
                    <div id="slide-next" class=" swiper-button-next">
                        <i class="ei ei-arrow_right"></i>
                    </div>
                </div>
            </div>
            <!-- /.testimonial-wrapper -->
        </div>
        <!-- /.container -->

        <div class="scroll-circle wow pixFadeDown">
            <img src="{{ asset('temp/media/background/circle9.png') }}" data-parallax='{"y" : 250}' alt="circle">
        </div>
    </section><!-- /.testimonial -->

    <!--===========================-->
    <!--=         Pricing         =-->
    <!--===========================-->
    <section class="pricing" id="pricing">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="sub-title wow pixFadeUp">Pricing Plan</h3>
                <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
                    No Hidden Charges! We can work together <br>
                    to choose your perfect pricing Plan.
                </h2>
            </div>
            <hr>
        </div>
        <!-- /.container -->

        <div class="faq-section">
            <div class="container">
                <div class="section-title text-center">
                    <h3 class="sub-title wow pixFadeUp">Frequently ask Question</h3>
                    <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
                        Want to ask something from us?
                    </h2>
                </div>
                <!-- /.section-title -->
                <div class="tabs-wrapper wow pixFadeUp" data-wow-delay="0.4s">
                    <ul class="nav faq-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="true">UI/UX Design</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="service-tab" data-toggle="tab" href="#service" role="tab" aria-controls="service" aria-selected="false">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="false">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="branding-tab" data-toggle="tab" href="#branding" role="tab" aria-controls="branding" aria-selected="false">SAP</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="design" role="tabpanel" aria-labelledby="design-tab">
                            <div id="accordion" class="faq faq-two pixFade">
                                <div class="card active">
                                    <div class="card-header" id="heading100">
                                        <h5>
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse001" aria-expanded="false" aria-controls="collapse001">
                                                What are your areas of focus as a UI/UX and web design agency?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse001" class="collapse show" aria-labelledby="heading100" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <p>
                                                The UX UI and web design projects we take on range from building a new product to redesigning an existing mobile app, website, or enterprise software. We do everything you might need to bring a successful digital product to life: user research, product strategy, user interface, and user experience design, usability testing, prototyping, web design and development.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading200">
                                        <h5>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse100" aria-expanded="true" aria-controls="collapse100">
                                                What separates STS from other top UX and web design agencies?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse100" class="collapse" aria-labelledby="heading200" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <p>
                                                it’s the quality of our UX UI design work and the craft it takes to make it. The digital products and user interfaces we create are easy to use, look great, and represent your brand in the best way possible. Then, it’s the people who make your project a reality. We always assign a multidisciplinary team of senior UX UI designers, developers, and other specialists led by one of our managers.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading300">
                                        <h5>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse200" aria-expanded="false" aria-controls="collapse200">
                                                Do you do branding or should I hire a separate branding agency?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse200" class="collapse" aria-labelledby="heading300" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <p>
                                                We position ourselves as a new kind of branding agency focused on tech companies, digital products, and direct‑to‑consumer brands. Not so many UX design agencies can create a visual identity for a coffee shop like we did for Joe & The Juice. Our branding capabilities include research, brand and digital strategy, logo design, visual identity, graphic design, motion design, and style guide development, and web design, among other things.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading400">
                                        <h5>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse300" aria-expanded="false" aria-controls="collapse300">
                                                Is there any custome pricing system?Do you work with startups? If so, how can my early‑stage company afford you?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse300" class="collapse" aria-labelledby="heading400" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <p>
                                                We can always work together to find you the most suitable pricing plan that fits your needs.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab">
                            <div id="accordion-2" class="faq faq-two pixFade">
                                <div class="card active">
                                    <div class="card-header" id="heading101">
                                        <h5>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                                                What is Managed Services?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse01" class="collapse show" aria-labelledby="heading101" data-parent="#accordion-2" style="">
                                        <div class="card-body">
                                            <p>
                                                Managed services is the proactive practice of outsourcing IT management responsibilities and functions. By taking a proactive stance with your network security, systems, and application patching, and by employing comprehensive backup and recovery services. Our Managed Services provides businesses with 24-hour monitoring to immediately identify and correct potential issues as well as to provide remote and onsite maintenance and support.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading201">
                                        <h5>
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse101" aria-expanded="true" aria-controls="collapse101">
                                                Why do I need Managed IT Services?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse101" class="collapse" aria-labelledby="heading201" data-parent="#accordion-2" style="">
                                        <div class="card-body">
                                            <p>
                                                Every business of every size in every industry must take a proactive approach to IT management in order toincrease productivity, reduce downtime, improve cybersecurity, and achieve better cost predictability.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading301">
                                        <h5>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse201" aria-expanded="false" aria-controls="collapse201">
                                                What are the benefits of Managed Services?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse201" class="collapse" aria-labelledby="heading301" data-parent="#accordion-2" style="">
                                        <div class="card-body">
                                            <p>
                                                One of the biggest benefits of managed IT services is the cost savings that businesses experience by making business IT support costs more predictable and manageable. A managed service approach will also provide businesses with comprehensive security, customized backup and recovery solutions, and state-of-the-art cloud storage and hosting.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading401">
                                        <h5>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse301" aria-expanded="false" aria-controls="collapse301">
                                                What are the kind of services you can provide?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse301" class="collapse" aria-labelledby="heading401" data-parent="#accordion-2" style="">
                                        <div class="card-body">
                                            <p>
                                                We can provide all kind of services that you need and we can always work together to assign the best technical team to solve your business problems.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">
                            <div id="accordion-3" class="faq faq-two pixFade">
                                <div class="card active">
                                    <div class="card-header" id="heading102">
                                        <h5>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse002" aria-expanded="false" aria-controls="collapse002">
                                                How do you assure confidentiality?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse002" class="collapse show" aria-labelledby="heading102" data-parent="#accordion-3" style="">
                                        <div class="card-body">
                                            <p>
                                                All projects we take up carry the following guarantees: We sign NDA and Confidentiality Agreements as required by you. All our employees are full-time employees, and are bound by the company’s Confidentiality and Non-Disclosure clauses. Additionally, for sensitive projects, we create isolated cells disconnected from any public network. At a practical level, all CD-Writers need authorization for usage. Internet uploads larger than a threshold also need authorization.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading202">
                                        <h5>
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse102" aria-expanded="true" aria-controls="collapse102">
                                                Can you guarantee time-bound results?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse102" class="collapse" aria-labelledby="heading202" data-parent="#accordion-3" style="">
                                        <div class="card-body">
                                            <p>
                                                Yes; in some cases we bear project risks even before the first payment.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading303">
                                        <h5>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse203" aria-expanded="false" aria-controls="collapse203">
                                                We are worried about quality, how do you assure solid projects?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse203" class="collapse" aria-labelledby="heading303" data-parent="#accordion-3" style="">
                                        <div class="card-body">
                                            <p>
                                                Our developers are dedicated to producing quality code. We have formal processes to keep quality under tight control, including periodic code reviews and design walk-through. We concentrate on being first-time right, and believe the creation-step itself should be strong. Every project goes through the hands of suitable QA/Testing professionals, under stringent test-plans including black-box testing, white-box testing, test regression, usage analysis etc.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading403">
                                        <h5>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse303" aria-expanded="false" aria-controls="collapse303">
                                                Do you offer any discount?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse303" class="collapse" aria-labelledby="heading403" data-parent="#accordion-3" style="">
                                        <div class="card-body">
                                            <p>
                                                Our pricing is based on a long term relationship aimed at giving maximum benefits to our customers.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="branding" role="tabpanel" aria-labelledby="branding-tab">
                            <div id="accordion-4" class="faq faq-two pixFade">
                                <div class="card active">
                                    <div class="card-header" id="heading10">
                                        <h5>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse00" aria-expanded="false" aria-controls="collapse00">
                                                What is SAP?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse00" class="collapse show" aria-labelledby="heading10" data-parent="#accordion-4" style="">
                                        <div class="card-body">
                                            <p>
                                                "SAP" stands for Systems, Applications, and Products in Data Processing. SAP is a world-wide market and technology leader in client and server enterprise application software, providing solutions for companies of all sizes and industry sectors.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading20">
                                        <h5>
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                                What Core Functional Areas are Supported by SAP team?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse10" class="collapse" aria-labelledby="heading20" data-parent="#accordion-4" style="">
                                        <div class="card-body">
                                            <p>
                                                Our SAP team can support your organization in all fields and modules of SAP.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading30">
                                        <h5>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                                Where are exactly the services your sap team provides?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse20" class="collapse" aria-labelledby="heading30" data-parent="#accordion-4" style="">
                                        <div class="card-body">
                                            <p>
                                                Our SAP team handles all steps of providing a well designed SAP solution that fits your organizations needs, And with the experience we have in our team we can assure you that you will have the best SAP solution from quality and price prespective.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading40">
                                        <h5>
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
                                                Can you integrate SAP solutions with systems that already exists in our organiztion?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse30" class="collapse" aria-labelledby="heading40" data-parent="#accordion-4" style="">
                                        <div class="card-body">
                                            <p>
                                                Sure, Our technical team can work with you to find the best strategy of integrating your organization systems with the SAP solutions we provide.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tabs-wrapper -->

                <div class="btn-container text-center mt-40 wow pixFadeUp">
                    <a href="{{ route('contact') }}" class="pix-btn btn-outline">Ask US</a>
                </div>
                <!-- /.btn-container text-center -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /.faq-section -->

        <div class="scroll-circle wow pixFadeLeft">
            <img src="{{ asset('temp/media/background/circle8.png') }}" data-parallax='{"y" : 130}' alt="circle">
        </div>
    </section>
    <!-- /.pricing -->

    <!--==================================-->
    <!--=         Call To Action         =-->
    <!--==================================-->
    <section class="call-to-action">
        <div class="overlay-bg"><img src="{{ asset('temp/media/background/ellipse.png') }}" alt="bg"></div>
        <div class="container">
            <div class="action-content text-center wow pixFadeUp">
                <h2 class="title">
                    We are optimists who<br>
                    love to work with you
                </h2>

                <p>
                    It's always our pleasure to have a new partner<br>
                    that we can work together to make business more fruitful.
                </p>

                <a href="{{ route('faq') }}#consultation-form" class="pix-btn btn-light">Free Consultation</a>
            </div>
            <!-- /.action-content -->
        </div>
        <!-- /.container -->

        <div class="scroll-circle">
            <img src="{{ asset('temp/media/background/circle13.png') }}" data-parallax='{"y" : -130}' alt="circle">
        </div>
        <!-- /.scroll-circle -->
    </section>
    <!-- /.call-to-action -->


@endsection
