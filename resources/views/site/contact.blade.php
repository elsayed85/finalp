@extends('site.layouts.app')
@section('title' , 'Contact')
@section('main')
@include('site.includes.breadcrumbs' , ['title' => 'Contact'])
<!-- Contact Section Start -->
<div class="contact-page contact pt-92 pb-95 md-pt-71">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title text-center mb-50">
                            <h2 class="title bg-center">Get in Touch</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem nobis, nostrum placeat
                                quis veniam aliquid modi, fugiat quisquam, rem in provident nisi obcaecati quod vel.</p>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <div class="icon-part">
                                    <i class="flaticon-place"></i>
                                </div>
                                <div class="icon-text">
                                    <h5 class="icon-title">Address</h5>
                                    <p>mansourat</p>
                                </div>
                            </div>
                            <div class="contact-icon">
                                <div class="icon-part">
                                    <i class="flaticon-phone"></i>
                                </div>
                                <div class="icon-text">
                                    <h5 class="icon-title">Emergency Call</h5>
                                    <a href="#">41781874187</a>
                                </div>
                            </div>
                            <div class="contact-icon">
                                <div class="icon-part">
                                    <i class="flaticon-mail-1"></i>
                                </div>
                                <div class="icon-text">
                                    <h5 class="icon-title">Email Us</h5>
                                    <a href="#">mail@mail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="contact-form pt-100">
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
    </div>
</div>
<!-- Contact Section End -->
@endsection
