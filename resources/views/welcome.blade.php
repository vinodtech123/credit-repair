
{{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

           
        </div> --}}

        @extends('layouts.master')
        
        @section('content')
        
        <!------------------------- header ----------------->
        
        <div class="bg_img">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light main_logo">
                    <div class="logo mr-4">
                        <a href="index.html">
                            <h2>CREDIT REPAIR</h2>
                        </a>
                    </div>
                    <div class="ml-auto login_btn">
                        <div class="header-btns">
                            <ul class="d-flex align-items-center">
                                <li><a href="{{route('register')}}" class="btn">Sign up</a></li>
                                <li><a href="{{route('login')}}" class="btn">Sign In</a></li>
                            </ul>
                        </div>
                    </div>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav justify-content-center menu_list" id="menu-center">
                            <li class="nav-item ">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> How It works
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="faq.html"> FAQ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us
                                </a>
                            </li>
                        </ul>
    
    
                    </div>
    
    
    
    
                </nav>
            </header>
    
            <!-- banner  -->
            <div class="banner_sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner_text">
                                <img src="images/play-button.png" alt="" data-toggle="modal" data-target="#exampleModalCenter">
                                <h2>Get Fast and Easy Credit Repair </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- How it works? -->
        <section class="how_it_work">
            <div class="container">
    
                <div class="work_box">
                    <div class="main_head">
                        <p>How it works?</p>
                        <h2>Simple and fast</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="work_1">
                                <img src="images/CHALLENGE.png" alt="">
                                <h3>CHALLENGE</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="work_1">
                                <img src="images/DISPUTE.png" alt="">
                                <h3>DISPUTE</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="work_1">
                                <img src="images/MONITOR.png" alt="">
                                <h3>MONITOR</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- online credit  free --->
        <section class="try_free">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="try_free_img">
                            <img src="images/online-credit.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="try_free_left">
                            <h2>Get your FREE online credit
                                evaluation now</h2>
                            <ul>
                                <li><span class="icon-green-checkmark"></span>FREE credit score</li>
                                <li><span class="icon-green-checkmark"></span>FREE credit score</li>
                                <li><span class="icon-green-checkmark"></span>FREE credit score</li>
                            </ul>
                            <a href="#" class="cus_btn">Get Started</a>
                        </div>
                    </div>
    
                </div>
            </div>
        </section>

        <!-- cost -->
        <section class="cost_section">

            <div class="container">
                <div class="cost_head">
                    <h2>How much does it cost?</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 cost_box">
                        <div class="cost_1">
                            <img src="images/cost.png" alt="">
                            <h3>$999</h3>
                            <h4>AGGRESSIVE</h4>
                            <p>Recommended for those who have a lot of negative items on their credit report</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 cost_box">
                        <div class="cost_1">
                            <img src="images/cost.png" alt="">
                            <h3>$99</h3>
                            <h4>MODERATE</h4>
                            <p>Recommended for those who have a moderate amount of negative items</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 cost_box">
                        <div class="cost_1">
                            <img src="images/cost.png" alt="">
                            <h3>$9</h3>
                            <h4>BASIC</h4>
                            <p>Recommended for those who have a handful of negative items</p>
                        </div>
                    </div>
                </div>
                <div class="get_start_btn text-center">
                    <a href="#" class="cus_btn">Get Started</a>
                </div>
            </div>
    
        </section>

        <!--help -->
        <section class="help_sec">
            <div class="container">
                <div class="main_head">
                    <p>Got questions?</p>
                    <h2>We can help!</h2>
                </div>
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                    <div class="row">
                        <!--Accordion wrapper-->
                        <div class="col-lg-6 col-md-6">
    
                            <!-- Accordion card -->
                            <div class="card">
    
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingOne1">
                                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                        <h5 class="mb-0">
                                            What is Credit Repair for? <span> <img src="images/svg/down-arrow.svg" alt=""></span>
                                        </h5>
                                    </a>
                                </div>
    
                                <!-- Card body -->
                                <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum
                                            has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown
                                            printer took a galley of type and scrambled it to make a type specimen book.
                                        </p>
                                    </div>
                                </div>
    
                            </div>
                            <!-- Accordion card -->
    
                            <!-- Accordion card -->
                            <div class="card">
    
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingTwo2">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                        <h5 class="mb-0">
                                            What is a credit score? <span> <img src="images/svg/down-arrow.svg" alt=""></span>
                                        </h5>
                                    </a>
                                </div>
    
                                <!-- Card body -->
                                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum
                                            has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown
                                            printer took a galley of type and scrambled it to make a type specimen book.
                                        </p>
                                    </div>
                                </div>
    
                            </div>
                            <!-- Accordion card -->
    
    
    
                            <!-- Accordion card -->
                            <div class="card">
    
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingThree3">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                        <h5 class="mb-0">
                                            What is a good credit score? <span> <img src="images/svg/down-arrow.svg" alt=""></span>
                                        </h5>
                                    </a>
                                </div>
    
                                <!-- Card body -->
                                <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum
                                            has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown
                                            printer took a galley of type and scrambled it to make a type specimen book.
                                        </p>
                                    </div>
                                </div>
    
                            </div>
                            <!-- Accordion card -->
                            <!-- Accordion card -->
                            <div class="card">
    
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingFouth4">
                                    <a class="collapsed active" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFouth4" aria-expanded="false" aria-controls="collapseFouth4">
                                        <h5 class="mb-0">
                                            What is a bad credit score? <span> <img src="images/svg/down-arrow.svg" alt=""></span>
                                        </h5>
                                    </a>
                                </div>
    
                                <!-- Card body -->
                                <div id="collapseFouth4" class="collapse show" role="tabpanel" aria-labelledby="headingFouth4" data-parent="#accordionEx">
                                    <div class="card-body">
                                        <p>Innovator angel investor branding rockstar seed round growth hacking channels
                                            business-to-consumer user experience infographic. Business-to-consumer market
                                            gamification stock analytics MVP. Agile development low hanging fruit beta
                                            influencer.</p>
                                    </div>
                                </div>
    
                            </div>
                            <!-- Accordion card -->
                            <!-- Accordion card -->
                            <div class="card">
    
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingFive5">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
                                        <h5 class="mb-0">
                                            What actions hurt my credit? <span> <img src="images/svg/down-arrow.svg" alt=""></span>
                                        </h5>
                                    </a>
                                </div>
    
                                <!-- Card body -->
                                <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5" data-parent="#accordionEx">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum
                                            has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown
                                            printer took a galley of type and scrambled it to make a type specimen book.
                                        </p>
                                    </div>
                                </div>
    
                            </div>
                            <!-- Accordion card -->
                            <!-- Accordion card -->
                            <div class="card">
    
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingsix6">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapsesix6" aria-expanded="false" aria-controls="collapsesix6">
                                        <h5 class="mb-0">
                                            How can I improve my credit? <span> <img src="images/svg/down-arrow.svg" alt=""></span>
                                        </h5>
                                    </a>
                                </div>
    
                                <!-- Card body -->
                                <div id="collapsesix6" class="collapse" role="tabpanel" aria-labelledby="headingsix6" data-parent="#accordionEx">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum
                                            has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown
                                            printer took a galley of type and scrambled it to make a type specimen book.
                                        </p>
                                    </div>
                                </div>
    
                            </div>
                            <!-- Accordion card -->
                        </div>
                        <div class="col-lg-6 col-md-6">
    
                            <!-- Accordion card -->
                            <div class="card">
    
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingSeven7">
                                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseSeven7" aria-expanded="true" aria-controls="collapseSeven7">
                                        <h5 class="mb-0">
                                            Why do I have more than one credit score? <span> <img src="images/svg/down-arrow.svg" alt=""></span>
                                        </h5>
                                    </a>
                                </div>
    
                                <!-- Card body -->
                                <div id="collapseSeven7" class="collapse" role="tabpanel" aria-labelledby="headingSeven7" data-parent="#accordionEx">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum
                                            has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown
                                            printer took a galley of type and scrambled it to make a type specimen book.
                                        </p>
                                    </div>
                                </div>
    
                            </div>
                            <!-- Accordion card -->
    
                            <!-- Accordion card -->
                            <div class="card">
    
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingEight8">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseEight8" aria-expanded="false" aria-controls="collapseEight8">
                                        <h5 class="mb-0">
                                            How high can my score go? How low? <span> <img src="images/svg/down-arrow.svg" alt=""></span>
                                        </h5>
                                    </a>
                                </div>
    
                                <!-- Card body -->
                                <div id="collapseEight8" class="collapse" role="tabpanel" aria-labelledby="headingEight8" data-parent="#accordionEx">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum
                                            has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown
                                            printer took a galley of type and scrambled it to make a type specimen book.
                                        </p>
                                    </div>
                                </div>
    
                            </div>
                            <!-- Accordion card -->
    
    
    
                            <!-- Accordion card -->
                            <div class="card">
    
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingNine9">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseNine9" aria-expanded="false" aria-controls="collapseNine9">
                                        <h5 class="mb-0">
                                            What are the three credit bureaus? <span> <img src="images/svg/down-arrow.svg" alt=""></span>
                                        </h5>
                                    </a>
                                </div>
    
                                <!-- Card body -->
                                <div id="collapseNine9" class="collapse" role="tabpanel" aria-labelledby="headingNine9" data-parent="#accordionEx">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum
                                            has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown
                                            printer took a galley of type and scrambled it to make a type specimen book.
                                        </p>
                                    </div>
                                </div>
    
                            </div>
                            <!-- Accordion card -->
                            <!-- Accordion card -->
                            <div class="card">
    
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingTen10">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTen10" aria-expanded="false" aria-controls="collapseTen10">
                                        <h5 class="mb-0">
                                            What is a credit bureau? <span> <img src="images/svg/down-arrow.svg" alt=""></span>
                                        </h5>
                                    </a>
                                </div>
    
                                <!-- Card body -->
                                <div id="collapseTen10" class="collapse" role="tabpanel" aria-labelledby="headingTen10" data-parent="#accordionEx">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum
                                            has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown
                                            printer took a galley of type and scrambled it to make a type specimen book.
                                        </p>
                                    </div>
                                </div>
    
                            </div>
                            <!-- Accordion card -->
                            <!-- Accordion card -->
                            <div class="card">
    
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingEleven11">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseEleven11" aria-expanded="false" aria-controls="collapseEleven11">
                                        <h5 class="mb-0">
                                            How do I know what my credit score is? <span> <img src="images/svg/down-arrow.svg" alt=""></span>
                                        </h5>
                                    </a>
                                </div>
    
                                <!-- Card body -->
                                <div id="collapseEleven11" class="collapse" role="tabpanel" aria-labelledby="headingEleven11" data-parent="#accordionEx">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum
                                            has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown
                                            printer took a galley of type and scrambled it to make a type specimen book.
                                        </p>
                                    </div>
                                </div>
    
                            </div>
                            <!-- Accordion card -->
                            <!-- Accordion card -->
                            <div class="card">
    
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingTwevle12">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwevle12" aria-expanded="false" aria-controls="collapseTwevle12">
                                        <h5 class="mb-0">
                                            Are credit reports and credit scores the same thing? <span> <img src="images/svg/down-arrow.svg" alt=""></span>
                                        </h5>
                                    </a>
                                </div>
    
                                <!-- Card body -->
                                <div id="collapseTwevle12" class="collapse" role="tabpanel" aria-labelledby="headingTwevle12" data-parent="#accordionEx">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum
                                            has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown
                                            printer took a galley of type and scrambled it to make a type specimen book.
                                        </p>
                                    </div>
                                </div>
    
                            </div>
                            <!-- Accordion card -->
                        </div>
    
    
    
                    </div>
                    <!-- Accordion wrapper -->
    
    
                </div>
            </div>
    
        </section>

@endsection
 
