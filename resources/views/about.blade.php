@extends('welcome')
@section('content')
   @include('header')

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>About Us</h2>
                    <div class="page_link">
                        <a href="/">Home</a>
                        <a href="/about">About</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

    <!--================ Start About Us Area =================-->
    <section class="about_area section_gap">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-5">
                    <div class="about_img">
                        <img class="" src="{{asset('assets/images/img/about-us.png')}}" alt="">
                    </div>
                </div>

                <div class="offset-lg-1 col-lg-5">
                    <div class="main_title text-left">
                        <h2>let’s <br>
                            Introduce about <br>
                            myself</h2>
                        <p>
                            Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven
                            midst their. Beast creepeth. Fish days.
                        </p>
                        <p>
                            Is give may shall likeness made yielding spirit a itself together created after sea
                            is in beast beginning signs open god you're gathering whose gathered cattle let.
                            Creature whales fruit unto meat the life beginning all in under give two.
                        </p>
                        <a class="primary_btn" href="#"><span>Download CV</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Us Area =================-->

    <!--================ Srart Brand Area =================-->
    <section class="brand_area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{asset('assets/images/img/brands/logo1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{asset('assets/images/img/brands/logo2.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{asset('assets/images/img/brands/logo3.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{asset('assets/images/img/brands/logo4.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{asset('assets/images/img/brands/logo5.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{asset('assets/images/img/brands/logo6.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{asset('assets/images/img/brands/logo7.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{asset('assets/images/img/brands/logo8.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{asset('assets/images/img/brands/logo9.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-2 col-lg-4 col-md-6">
                    <div class="client-info">
                        <div class="d-flex mb-50">
                            <span class="lage">10</span>
                            <span class="smll">Years Experience Working</span>
                        </div>
                        <div class="call-now d-flex">
                            <div>
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="ml-15">
                                <p>call us now</p>
                                <h3>(+1)-800-555-6789</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Brand Area =================-->

    <!--================ Start Testimonial Area =================-->
    <div class="testimonial_area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <h2>client say about me</h2>
                        <p>Is give may shall likeness made yielding spirit a itself togeth created after sea is in beast <br>
                            beginning signs open god you're gathering ithe</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testi_slider owl-carousel">
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{asset('assets/images/img/testimonials/t1.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Elite Martin</h4>
                                    <p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{asset('assets/images/img/testimonials/t2.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Davil Saden</h4>
                                    <p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{asset('assets/images/img/testimonials/t1.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Elite Martin</h4>
                                    <p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{asset('assets/images/img/testimonials/t2.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Davil Saden</h4>
                                    <p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{asset('assets/images/img/testimonials/t1.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Elite Martin</h4>
                                    <p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{asset('assets/images/img/testimonials/t2.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Davil Saden</h4>
                                    <p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Testimonial Area =================-->

    <!--================ Start Newsletter Area =================-->
    <section class="newsletter_area">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="subscription_box text-center">
                        <h2 class="text-uppercase text-white">get update from anywhere</h2>
                        <p class="text-white">
                            Bearing Void gathering light light his eavening unto dont afraid.
                        </p>
                        <div class="subcribe-form" id="mc_embed_signup">
                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
                                <input name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                </div>
                                <button class="primary-btn hover d-inline">Get Started</button>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Newsletter Area =================-->

    @include('footer')
@endsection
