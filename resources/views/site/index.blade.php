@extends('site.layouts.app')
@section('main')
<!-- Slider Section Start Here -->
<div class="rs-main-slider">
    <div id="main-slider" class="owl-carousel">
        <div class="item active gap-pt">
            <div class="dsc">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-8 col-sm-12 padding-0 col-padding-md">
                            <div class="slider-text">
                                <h1 class="white-color mb-0 semi-bold" data-animation-in="slideInDown"
                                    data-animation-out="animate-out slideOutUp">AI & Machine Learning Products Creators
                                </h1>
                                <div data-animation-in="slideInRight" data-animation-out="animate-out fadeOut"
                                    class="btm-date">
                                    Innovative machine learning products and services<br> on a trusted platform.
                                </div>
                                <div class="btn-slider">
                                    <a href="about.html" class="btn1" data-animation-in="slideInUp"
                                        data-animation-out="animate-out slideOutDown">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 hidden-sm">
                            <div class="slider-image ">
                                <div class="row rs-vertical-bottom">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0 pr-10">
                                        <div class="animate1">
                                            <img data-animation-in="bounceInRight"
                                                data-animation-out="animate-out fadeOut"
                                                src="{{ asset('/site/images/slider/sl1-ly1.png') }}" alt="layer image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0 pr-0">
                                        <img data-animation-in="bounceInRight" data-animation-out="animate-out fadeOut"
                                            src="{{ asset('/site/images/slider/sl1-ly2.png') }}" alt="layer image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item gap-pt">
            <div class="dsc">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-8 col-sm-12 padding-0 col-padding-md">
                            <div class="slider-text">
                                <h1 class="white-color mb-0 semi-bold" data-animation-in="slideInDown"
                                    data-animation-out="animate-out slideOutUp">AI & Machine Learning Products Creators
                                </h1>
                                <div data-animation-in="slideInRight" data-animation-out="animate-out fadeOut"
                                    class="btm-date">
                                    Innovative machine learning products and services<br> on a trusted platform.
                                </div>
                                <div class="btn-slider">
                                    <a href="#" class="btn1" data-animation-in="slideInUp"
                                        data-animation-out="animate-out slideOutDown">Learn More</a>
                                    <a href="#" class="btn2" data-animation-in="slideInDown"
                                        data-animation-out="animate-out slideOutUp">Join Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 hidden-sm">
                            <div class="slider-image ">
                                <div class="row rs-vertical-bottom">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0 pr-10">
                                        <div class="animate1">
                                            <img data-animation-in="bounceInRight"
                                                data-animation-out="animate-out fadeOut"
                                                src="{{ asset('/site/images/slider/sl1-ly1.png') }}" alt="layer image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0 pr-0">
                                        <img data-animation-in="bounceInRight" data-animation-out="animate-out fadeOut"
                                            src="{{ asset('/site/images/slider/sl1-ly2.png') }}" alt="layer image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Section end Here -->

<!-- About Section Start-->
<div class="about pt-100 pb-100 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 pr-60 md-pr-15 md-mb-35">
                <div class="about-inner">
                    <div class="row col-20">
                        <div class="col-md-6">
                            <div class="single-about text-center box-shadow mb-40">
                                <div class="about-icon">
                                    <i class="flaticon-artificial-intelligence"></i>
                                </div>
                                <div class="about-title">
                                    <h3 class="title mb-15">Advanced Programing</h3>
                                </div>
                                <div class="about-desc">
                                    <p class="desc-txt">Find out what's working and what's not Dig your data to find</p>
                                </div>
                            </div>
                            <div class="single-about text-center box-shadow sm-mb-30">
                                <div class="about-icon">
                                    <i class="flaticon-ai"></i>
                                </div>
                                <div class="about-title">
                                    <h3 class="title mb-15">AI Chippest</h3>
                                </div>
                                <div class="about-desc">
                                    <p class="desc-txt">Find out what's working and what's not Dig your data to find</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-100 md-mt-0">
                            <div class="single-about text-center box-shadow mb-40">
                                <div class="about-icon">
                                    <i class="flaticon-artificial-intelligence-1"></i>
                                </div>
                                <div class="about-title">
                                    <h3 class="title mb-15">Cloud AI intergration</h3>
                                </div>
                                <div class="about-desc">
                                    <p class="desc-txt">Find out what's working and what's not Dig your data to find</p>
                                </div>
                            </div>
                            <div class="single-about text-center box-shadow">
                                <div class="about-icon">
                                    <i class="flaticon-robotic-arm"></i>
                                </div>
                                <div class="about-title">
                                    <h3 class="title mb-15">Robotic Arm</h3>
                                </div>
                                <div class="about-desc">
                                    <p class="desc-txt">Find out what's working and what's not Dig your data to find</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 pl-0 md-pl-15">
                <div class="sec-title mb-42">
                    <h2 class="title bg-left">Power Your Creativity With Artificial Intelligence</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu.
                        Quisque aliquam posuere tortor, sit amet convallis nunc scelerisque in.</p>

                    <p class="margin-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore eius molesti ae
                        facere, natus reprehenderit eaque eum, autem ipsam. Magni, error. Tem pora odit laborum iure
                        inventore possimus laboriosam qui nam. Fugit!</p>
                </div>

                <div class="about-btn">
                    <a class="readon radius" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- .container end -->
</div>
<!-- About Section End-->

<!-- About Video Section Start-->
<div class="about-video pb-100 md-pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-last md-mb-40">
                <div class="about-video-img">
                    <img src="{{ asset('/site/images/about/about-video-part.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sec-title mb-36">
                    <h2 class="title bg-left">We Create The Most Realistic Artificial Intelligence</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu.
                        Quisque aliquam posuere tortor, sit amet convallis nunc scelerisque in.</p>

                    <p class="margin-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore eius molesti ae
                        facere, natus reprehenderit eaque eum, autem ipsam. Magni, error. Tem pora odit laborum iure
                        inventore possimus laboriosam qui nam. Fugit!</p>
                </div>

                <div class="about-btn">
                    <a class="readon radius" href="features.html">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- .container end -->
</div>
<!-- About Video Section End-->

<!-- Counter Section Start Here-->
<div id="counter-area" class="counter-area gradient-bg-section pt-70 pb-70">
    <div class="container">
        <div class="row count">
            <!-- COUNTER-LIST START -->
            <div class="col-lg-3 col-md-6 md-mb-30">
                <div class="counter-part text-center">
                    <div class="shape-img">
                        <img src="{{ asset('/site/images/counter/count-shape.png') }}" alt="">
                    </div>
                    <div class="counter-text text-center">
                        <div class="counter white-color">6000</div>
                        <h5 class="counter-txt white-color">Complete Project</h5>
                    </div>
                </div>
            </div>
            <!-- COUNTER-LIST END -->

            <!-- COUNTER-LIST START -->
            <div class="col-lg-3 col-md-6 md-mb-30">
                <div class="counter-part text-center">
                    <div class="shape-img">
                        <img src="{{ asset('/site/images/counter/count-shape.png') }}" alt="">
                    </div>
                    <div class="counter-text text-center">
                        <div class="counter white-color">400</div>
                        <h4 class="counter-txt white-color">NLP Experts</h4>
                    </div>
                </div>
            </div>
            <!-- COUNTER-LIST END -->

            <!-- COUNTER-LIST START -->
            <div class="col-lg-3 col-md-6 sm-mb-30">
                <div class="counter-part text-center">
                    <div class="shape-img">
                        <img src="{{ asset('/site/images/counter/count-shape.png') }}" alt="">
                    </div>
                    <div class="counter-text text-center">
                        <div class="counter white-color">3500</div>
                        <h4 class="counter-txt white-color">Satisfied Clients</h4>
                    </div>
                </div>
            </div>
            <!-- COUNTER-LIST END -->

            <!-- COUNTER-LIST START -->
            <div class="col-lg-3 col-md-6">
                <div class="counter-part text-center">
                    <div class="shape-img">
                        <img src="{{ asset('/site/images/counter/count-shape.png') }}" alt="">
                    </div>
                    <div class="counter-text text-center">
                        <div class="counter white-color">8000</div>
                        <h4 class="counter-txt white-color">Industries Served</h4>
                    </div>
                </div>
            </div>
            <!-- COUNTER-LIST END -->
        </div>
    </div>
</div>
<!-- Counter Section End Here-->

<!-- Services Section Start-->
<div class="about gray-bg pt-92 pb-100 md-pt-71 md-pb-80">
    <div class="container">
        <div class="sec-title text-center mb-50">
            <h2 class="title bg-center margin-0">Our Core Services</h2>
        </div>
        <div class="row col-20">
            <div class="col-lg-4 col-md-6 mb-40">
                <div class="single-about style2 text-center box-shadow">
                    <div class="about-icon">
                        <i class="flaticon-brain"></i>
                    </div>
                    <div class="about-title">
                        <h3 class="title mb-15">Virtual Personal Assistants</h3>
                    </div>
                    <div class="about-desc">
                        <p class="desc-txt">Capitalize on low hanging fruit to identify a ball park value added activity
                            to beta test. Override the digital divide with additional</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-40">
                <div class="single-about style2 text-center box-shadow">
                    <div class="about-icon">
                        <i class="flaticon-automaton"></i>
                    </div>
                    <div class="about-title">
                        <h3 class="title mb-15">Videos Surveillance</h3>
                    </div>
                    <div class="about-desc">
                        <p class="desc-txt">Capitalize on low hanging fruit to identify a ball park value added activity
                            to beta test. Override the digital divide with additional</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-40">
                <div class="single-about style2 text-center box-shadow">
                    <div class="about-icon">
                        <i class="flaticon-artificial-intelligence-2"></i>
                    </div>
                    <div class="about-title">
                        <h3 class="title mb-15">Social Media Services</h3>
                    </div>
                    <div class="about-desc">
                        <p class="desc-txt">Capitalize on low hanging fruit to identify a ball park value added activity
                            to beta test. Override the digital divide with additional</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 md-mb-40">
                <div class="single-about style2 text-center box-shadow">
                    <div class="about-icon">
                        <i class="flaticon-artificial-intelligence-3"></i>
                    </div>
                    <div class="about-title">
                        <h3 class="title mb-15">Online Customer Support</h3>
                    </div>
                    <div class="about-desc">
                        <p class="desc-txt">Capitalize on low hanging fruit to identify a ball park value added activity
                            to beta test. Override the digital divide with additional</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 sm-mb-40">
                <div class="single-about style2 text-center box-shadow">
                    <div class="about-icon">
                        <i class="flaticon-artificial-intelligence-4"></i>
                    </div>
                    <div class="about-title">
                        <h3 class="title mb-15">Search Engine Result Refining</h3>
                    </div>
                    <div class="about-desc">
                        <p class="desc-txt">Capitalize on low hanging fruit to identify a ball park value added activity
                            to beta test. Override the digital divide with additional</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-about style2 text-center box-shadow">
                    <div class="about-icon">
                        <i class="flaticon-ai-1"></i>
                    </div>
                    <div class="about-title">
                        <h3 class="title mb-15">Online Fraud Detection</h3>
                    </div>
                    <div class="about-desc">
                        <p class="desc-txt">Capitalize on low hanging fruit to identify a ball park value added activity
                            to beta test. Override the digital divide with additional</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .container end -->
</div>
<!-- Services Section End-->

<!-- How We Work Section Start-->
<div class="work pt-90 pb-100 md-pt-71 md-pb-78">
    <div class="container">
        <div class="sec-title text-center mb-45">
            <h2 class="title bg-center">How We Works</h2>
        </div>
        <div class="row col-20">
            <div class="col-lg-3 col-md-6 md-mb-30">
                <div class="single-work text-center">
                    <div class="work-icon hover-pulse">
                        <i class="flaticon-code"></i>
                    </div>
                    <div class="work-title">
                        <h3 class="title">Data Generated</h3>
                    </div>
                    <div class="round-shape"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 md-mb-30">
                <div class="single-work text-center">
                    <div class="work-icon hover-pulse">
                        <i class="flaticon-machine-learning-1"></i>
                    </div>
                    <div class="work-title">
                        <h3 class="title">Data Stored</h3>
                    </div>
                    <div class="round-shape"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 sm-mb-30">
                <div class="single-work style2 text-center">
                    <div class="work-icon hover-pulse">
                        <i class="flaticon-machine-learning"></i>
                    </div>
                    <div class="work-title">
                        <h3 class="title">Data Processing</h3>
                    </div>
                    <div class="round-shape"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-work text-center extra-none">
                    <div class="work-icon hover-pulse">
                        <i class="flaticon-automaton"></i>
                    </div>
                    <div class="work-title">
                        <h3 class="title">Actionable Insights</h3>
                    </div>
                    <div class="round-shape"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- .container end -->
</div>
<!-- How We Work Section End-->

<!-- Contact Section Start -->
<div class="contact contact-bg pb-100 md-pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 pr-30 md-pr-15">
                <div class="contact-info box-shadow">
                    <div class="contact-info-icon">
                        <i class="flaticon-gps"></i>
                    </div>
                    <div class="sec-title mb-35">
                        <h2 class="title bg-left">Contact With Us</h2>
                    </div>
                    <div class="contact-icon">
                        <div class="icon-part">
                            <i class="flaticon-place"></i>
                        </div>
                        <div class="icon-text">
                            <h4 class="icon-title">Visit Us</h4>
                            <p>mansoura knah el swees</p>
                        </div>
                    </div>
                    <div class="contact-icon">
                        <div class="icon-part">
                            <i class="flaticon-phone"></i>
                        </div>
                        <div class="icon-text">
                            <h4 class="icon-title">Call Us</h4>
                            <a href="#">178948748</a>
                        </div>
                    </div>
                    <div class="contact-icon">
                        <div class="icon-part">
                            <i class="flaticon-mail-1"></i>
                        </div>
                        <div class="icon-text">
                            <h4 class="icon-title">Email Us</h4>
                            <a href="#">mail@mail.com</a>
                            <a href="#">www.project.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 pl-30 md-pl-15">
                <div class="contact-form pt-100 md-pt-50">
                    <div id="form-messages"></div>
                    <form id="contact-form" method="post" action="{{ route('contact.send') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field @error(" name") invalid-feedback @enderror">
                                    <input type="text" placeholder="Name" id="name" name="name" required=""
                                        value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field @error(" email") invalid-feedback @enderror">
                                    <input type="email" placeholder="E-Mail" id="email" name="email" required=""
                                        value="{{ old('email') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field @error(" phone") invalid-feedback @enderror">
                                    <input type="text" placeholder="Phone Number" id="phone_number" name="phone"
                                        value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field @error(" subject") invalid-feedback @enderror">
                                    <input type="text" placeholder="Subject" id="subject" name="subject" required=""
                                        value="{{ old('subject') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-field @error(" message") invalid-feedback @enderror">
                            <textarea placeholder="Your Message Here" rows="5" id="message" name="message"
                                required="">{{ old('message') }}</textarea>
                        </div>
                        <div class="form-button">
                            <button type="submit">Submit Now !</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Section End -->
@endsection
