@extends('layouts.main')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                   Form Pendaftaran Online			
                </h1>	
                <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html"> About Us</a></p>
            </div>	
        </div>
    </div>
</section>

<section class="popular-courses-area section-gap courses-page" style="background-color: #e9ecef;">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <!-- <h1 class="mb-10">Form Pendaftaran Online</h1> -->
                    <p>There is a moment in the life of any aspiring.</p>
                </div>

                <form class="form-wrap" action="#">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'">
                    </div>
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="phone" class="form-control" name="phone" placeholder="Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'">
                    </div>
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'">
                    </div>
                    
                    <div class="form-select form-group" id="service-select">
                        <label for="">Choose...</label>
                        <select>
                            <option datd-display="">Choose Course</option>
                            <option value="1">Course One</option>
                            <option value="2">Course Two</option>
                            <option value="3">Course Three</option>
                            <option value="4">Course Four</option>
                        </select>
                        <div class="nice-select" tabindex="0">
                            <span class="current">Choose Course</span>
                            <ul class="list">
                                <li data-value="Choose Course" class="option selected focus">Choose Course</li>
                                <li data-value="1" class="option">Course One</li>
                                <li data-value="2" class="option">Course Two</li>
                                <li data-value="3" class="option">Course Three</li>
                                <li data-value="4" class="option">Course Four</li>
                            </ul>
                        </div>
                    </div>
                    <br><br>									
                    <div class="form-group">
                        <button class="primary-btn text-uppercase">Submit</button>
                    </div>
                </form>
            </div>
        </div>						
    </div>	
</section>

@endsection