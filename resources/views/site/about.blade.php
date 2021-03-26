@extends('site.layouts.app')
@section('title' , 'About')
@section('main')
@include('site.includes.breadcrumbs' , ['title' => 'About'])

<!-- About Section Start -->
<div id="about-inner" class="about-inner pt-100 pb-100 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row rs-vertical-middle">
            <div class="col-lg-6 padding-0 md-mb-30">
                <div class="image-wrap animate2">
                    <img class="wow slideInLeft" src="{{ asset('/site/images/about/about-inner.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-wrap">
                    <div class="sec-title mb-30">
                        <h2 class="title bg-left">Lorem ipsum dolor, sit amet consectetur adipisicing.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit
                            arcu. Quisque aliquam posuere tortor, sit amet convallis nunc scelerisque in.</p>

                        <p class="margin-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore eius
                            molesti ae facere, natus reprehenderit eaque eum, autem ipsam. Magni, error. Tem pora odit
                            laborum iure inventore possimus laboriosam qui nam. Fugit!</p>
                    </div>
                    <div class="author-info">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 sm-mb-30">
                                <ul class="listying">
                                    <li class="wow fadeInUp">Machine Learning</li>
                                    <li class="wow fadeInUp" data-wow-delay="0.2s">Deep Learning</li>
                                    <li class="wow fadeInUp" data-wow-delay="0.4s">Artificial Intelligence</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- What we do Start -->
<div id="what-we-do" class="what-we-do gray-bg pt-90 pb-100 md-pt-70 md-pb-80">
    <div class="container">
        <div class="sec-title text-center mb-45">
            <h2 class="title bg-center">What We Do</h2>
        </div>
        <div class="tab-style">
            <ul class="nav nav-pills mb-50 sm-mb-30">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#machine-learning">Machine Learning</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#deep-learning">Deep Learning</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#artificial-intelligence">Artificial Intelligence</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="machine-learning">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 md-mb-30">
                            <div class="project-item text-center">
                                <div class="icon-part mb-15">
                                    <i class="flaticon-brain"></i>
                                </div>
                                <div class="project-content">
                                    <h4 class="title mb-15">
                                        <a href="#">Virtual Personal Assistants</a>
                                    </h4>
                                    <p class="desc margin-0">Capitalize on low hanging fruit to identify a ball park
                                        value added activity to beta test. Override the digital divide with additional
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 md-mb-30">
                            <div class="project-item text-center">
                                <div class="icon-part mb-15">
                                    <i class="flaticon-automaton"></i>
                                </div>
                                <div class="project-content">
                                    <h4 class="title mb-15">
                                        <a href="#">Videos Surveillance</a>
                                    </h4>
                                    <p class="desc margin-0">Capitalize on low hanging fruit to identify a ball park
                                        value added activity to beta test. Override the digital divide with additional
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="project-item text-center">
                                <div class="icon-part mb-15">
                                    <i class="flaticon-artificial-intelligence-2"></i>
                                </div>
                                <div class="project-content">
                                    <h4 class="title mb-15">
                                        <a href="#">Social Media Services</a>
                                    </h4>
                                    <p class="desc margin-0">Capitalize on low hanging fruit to identify a ball park
                                        value added activity to beta test. Override the digital divide with additional
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade clearfix" id="deep-learning">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 md-mb-30">
                            <div class="project-item text-center">
                                <div class="icon-part mb-15">
                                    <i class="flaticon-artificial-intelligence-3"></i>
                                </div>
                                <div class="project-content">
                                    <h4 class="title mb-15">
                                        <a href="#">Online Customer Support</a>
                                    </h4>
                                    <p class="desc margin-0">Capitalize on low hanging fruit to identify a ball park
                                        value added activity to beta test. Override the digital divide with additional
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 md-mb-30">
                            <div class="project-item text-center">
                                <div class="icon-part mb-15">
                                    <i class="flaticon-artificial-intelligence-4"></i>
                                </div>
                                <div class="project-content">
                                    <h4 class="title mb-15">
                                        <a href="#">Search Engine Result Refining</a>
                                    </h4>
                                    <p class="desc margin-0">Capitalize on low hanging fruit to identify a ball park
                                        value added activity to beta test. Override the digital divide with additional
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="project-item text-center">
                                <div class="icon-part mb-15">
                                    <i class="flaticon-ai-1"></i>
                                </div>
                                <div class="project-content">
                                    <h4 class="title mb-15">
                                        <a href="#">Online Fraud Detection</a>
                                    </h4>
                                    <p class="desc margin-0">Capitalize on low hanging fruit to identify a ball park
                                        value added activity to beta test. Override the digital divide with additional
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade clearfix" id="artificial-intelligence">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 md-mb-30">
                            <div class="project-item text-center">
                                <div class="icon-part mb-15">
                                    <i class="flaticon-automaton"></i>
                                </div>
                                <div class="project-content">
                                    <h4 class="title mb-15">
                                        <a href="#">Videos Surveillance</a>
                                    </h4>
                                    <p class="desc margin-0">Capitalize on low hanging fruit to identify a ball park
                                        value added activity to beta test. Override the digital divide with additional
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 md-mb-30">
                            <div class="project-item text-center">
                                <div class="icon-part mb-15">
                                    <i class="flaticon-artificial-intelligence-3"></i>
                                </div>
                                <div class="project-content">
                                    <h4 class="title mb-15">
                                        <a href="#">Online Customer Support</a>
                                    </h4>
                                    <p class="desc margin-0">Capitalize on low hanging fruit to identify a ball park
                                        value added activity to beta test. Override the digital divide with additional
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="project-item text-center">
                                <div class="icon-part mb-15">
                                    <i class="flaticon-artificial-intelligence-2"></i>
                                </div>
                                <div class="project-content">
                                    <h4 class="title mb-15">
                                        <a href="#">Social Media Services</a>
                                    </h4>
                                    <p class="desc margin-0">Capitalize on low hanging fruit to identify a ball park
                                        value added activity to beta test. Override the digital divide with additional
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- What we do End -->

<div class="team pt-90 md-pt-70 md-pb-80">
    <div class="container">
        <div class="sec-title text-center mb-45">
            <h2 class="title bg-center">Team members</h2>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="15" data-autoplay="true"
            data-autoplay-timeout="8000" data-smart-speed="2000" data-dots="false" data-nav="false"
            data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
            data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
            data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false"
            data-md-device-dots="false">
            <div class="team-item">
                <div class="team-img text-center">
                    <img src="{{ asset('/site/images/team/1.png') }}" alt="">
                </div>
                <div class="detail-part">
                    <div class="author fly">
                        <h4 class="name mb-7"><a href="#">member name</a></h4>
                        <span class="designation">member role</span>
                    </div>
                    <div class="social-links fly">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-img text-center">
                    <img src="{{ asset('/site/images/team/1.png') }}" alt="">
                </div>
                <div class="detail-part">
                    <div class="author fly">
                        <h4 class="name mb-7"><a href="#">member name</a></h4>
                        <span class="designation">member role</span>
                    </div>
                    <div class="social-links fly">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-img text-center">
                    <img src="{{ asset('/site/images/team/1.png') }}" alt="">
                </div>
                <div class="detail-part">
                    <div class="author fly">
                        <h4 class="name mb-7"><a href="#">member name</a></h4>
                        <span class="designation">member role</span>
                    </div>
                    <div class="social-links fly">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-img text-center">
                    <img src="{{ asset('/site/images/team/1.png') }}" alt="">
                </div>
                <div class="detail-part">
                    <div class="author fly">
                        <h4 class="name mb-7"><a href="#">member name</a></h4>
                        <span class="designation">member role</span>
                    </div>
                    <div class="social-links fly">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter Section Start -->
    <div class="newsletter mt-100 md-mt-80">
        <div class="container">
            <div class="newsletter-part white-bg box-shadow top-margin pt-60 pb-60 md-pt-50 md-pb-50">
                <form>
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="newsletter-icon">
                                <i class="flaticon-mail"></i>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="newsletter-text">
                                <div class="sec-title mb-55">
                                    <h2 class="title bg-left">Don’t Miss Our News <br>And Updates!</h2>
                                </div>
                                <div class="newsletter-box">
                                    <input type="email" name="email" placeholder="Enter Your Email" required="">
                                    <button type="submit" class="form-button"><i
                                            class="flaticon-right-arrow"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter Section End -->
</div>
<!-- Team Section End -->

<!-- Partner Section Start -->
<div class="partner partner-bg pt-300 pb-95 md-pt-70 md-pb-45">
    <div class="container">
        <ul class="partner-image-part">
            <li class="partner-item mb-60">
                <a href="#"><img src="{{ asset('/site/images/partner/1 (1).png') }}" alt="Partner Image"></a>
            </li>
            <li class="partner-item mb-60">
                <a href="#"><img src="{{ asset('/site/images/partner/1 (2).png') }}" alt="Partner Image"></a>
            </li>
            <li class="partner-item mb-60">
                <a href="#"><img src="{{ asset('/site/images/partner/1 (3).png') }}" alt="Partner Image"></a>
            </li>
            <li class="partner-item mb-60">
                <a href="#"><img src="{{ asset('/site/images/partner/1 (4).png') }}" alt="Partner Image"></a>
            </li>
            <li class="partner-item mb-60">
                <a href="#"><img src="{{ asset('/site/images/partner/1 (5).png') }}" alt="Partner Image"></a>
            </li>
            <li class="partner-item">
                <a href="#"><img src="{{ asset('/site/images/partner/1 (6).png') }}" alt="Partner Image"></a>
            </li>
            <li class="partner-item">
                <a href="#"><img src="{{ asset('/site/images/partner/1 (7).png') }}" alt="Partner Image"></a>
            </li>
            <li class="partner-item">
                <a href="#"><img src="{{ asset('/site/images/partner/1 (8).png') }}" alt="Partner Image"></a>
            </li>
            <li class="partner-item">
                <a href="#"><img src="{{ asset('/site/images/partner/1 (9).png') }}" alt="Partner Image"></a>
            </li>
        </ul>
    </div>
</div>
<!-- Partner Section End -->
@endsection
