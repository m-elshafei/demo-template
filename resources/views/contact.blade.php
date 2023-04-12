@extends('master')
@section('contact')
    <div class="section blue_bg">
        <div class="container-fluid">
            <div class="row">
                <!-- contact -->
                <div class="col-md-6 offset-md-3">
                    <div class="contact">
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="titlepage text_align_center">
                                    <h2>contact Us</h2>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <form id="request" class="main_form">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <input class="contactus" placeholder="Your name" type="type" name=" Name">
                                        </div>
                                        <div class="col-md-12">
                                            <input class="contactus" placeholder="Phone Number" type="type"
                                                name="Phone Number">
                                        </div>
                                        <div class="col-md-12">
                                            <input class="contactus" placeholder="Email" type="type" name="Email">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="textarea" placeholder="Message" type="type" Message="Name"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="send_btn">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact -->
            </div>
        </div>
    </div>
@endsection
