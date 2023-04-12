@extends('master')
{{-- @extends('header') --}}
@section('service')
    <div class="service">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Coffee Services</h2>
                        <p>sing 'Content here, content here', making it look like readable English. Many desktop publishing
                            packages and web page editors
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!--  Demos -->
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="service_box text_align_center">
                                <div class="ser_img">
                                    <figure><img src="assets/images/ser_img1.png" alt="#" /></figure>
                                </div>
                                <h3>Red Coffee</h3>
                                <p>Many desktop publishing packages and
                                    web page editors
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service_box text_align_center">
                                <div class="ser_img">
                                    <figure><img src="assets/images/ser_img3.png" alt="#" /></figure>
                                </div>
                                <h3>Black Coffee</h3>
                                <p>Many desktop publishing packages and
                                    web page editors
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service_box text_align_center">
                                <div class="ser_img">
                                    <figure><img src="assets/images/ser_img2.png" alt="#" /></figure>
                                </div>
                                <h3>Choclate Coffee</h3>
                                <p>Many desktop publishing packages and
                                    web page editors
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <a class="read_more" href="service">Book Now Table</a>
                </div>
            </div>
        </div>
    </div>
@endsection
