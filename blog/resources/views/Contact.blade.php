@extends('Layouts.app')

@section('title', 'Contact')

@section('content')

<div class="container-fluid jumbotron mt-5 ">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6  text-center">
            <img class=" page-top-img fadeIn" src="images/code.svg">
            <h1 class="page-top-title mt-3">- যোগাযোগ -</h1>
        </div>
    </div>
</div>

<div id="contact" class="container-fluid section-marginTop parallax text-center">
    <div class="row ">
        <div class="col-md-6 contact-form ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.8643262535766!2d89.2472823143392!3d25.741999915699772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e32d3a5a192c5d%3A0xf177df48a6c90a26!2sHouse%20No%3A18%2C%20Road%20No%3A01%2C%20New%20Shenpara%2C%20(Nearby%20New%20Shenpara%20Zami%20Moshjid)%2C%20Arshad%20More%20Road%2C%20Rangpur%20Sadar%205400%2C%20Rangpur%20District%2C%20Bangladesh!5e0!3m2!1sen!2sbd!4v1623085245049!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-md-4 contact-form">
                <h5 class="service-card-title">যোগাযোগ করুন </h5>
                <div class="form-group ">
                    <input id="contactNameId" type="text" class="form-control w-100" placeholder="আপনার নাম">
                </div>
                <div class="form-group">
                    <input id="contactMobileId" type="text" class="form-control  w-100" placeholder="মোবাইল নং ">
                </div>
                <div class="form-group">
                    <input id="contactEmailId" type="text" class="form-control  w-100" placeholder="ইমেইল ">
                </div>
                <div class="form-group">
                    <input id="contactMsgId" type="text" class="form-control  w-100" placeholder="মেসেজ ">
                </div>
                <button id="contactSendBtn" type="submit" class="btn btn-block normal-btn w-100">পাঠিয়ে দিন </button>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</div>


@endsection