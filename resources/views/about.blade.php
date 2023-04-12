@extends('master')
{{-- @extends('header') --}}
@section('about')
    <div class="about">
        <div class="container">
            <div class="row d_flex grid">
                <div class="col-md-6">
                    <div class="about_img text_align_center">
                        <figure><img src="assets/images/about.png" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-6 order1">
                    <div class="titlepage text_align_left">
                        <h2>About Zon Coffee</h2>
                        <p>sing 'Content here, content here', making it look like readable English. Many desktop
                            publishing packages and web page editors
                        </p>
                        <a class="read_more" href="about.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
