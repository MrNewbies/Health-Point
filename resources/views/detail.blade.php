@extends('navbar')

<link rel="stylesheet" href="{{ asset('css/detail.css') }}">

@section('title', 'HospitalDetail')

@section('content')

    <body>
        {{-- <header class="header">


            <div class="logo">

                <a href="#"><img src="assets/logo.png" alt=""></a>

            </div>


            <nav>

                <ul class="nav_links">

                    <li><a class="active" href="#">Home</a></li>

                    <li><a href="#">Favorite</a></li>

                    <li><a href="#">About</a></li>
                </ul>

            </nav>


            <div class="login_button">

                <a href="#" class="login">

                    <button>Login</button>

                </a>

                <div class="border"> </div>

                <a href="#" class="sign_up">

                    <button>Sign Up</button>

                </a>

            </div>

        </header> --}}


        <div id="summary-section">

            <div class="back">
                <a href="#" id="back-button">

                    <button>

                        <i class="fas fa-arrow-left"></i>

                        <span>Back</span>

                    </button>

                </a>
            </div>

            <div id="hospital-image">

                <div id="hospital-image-left">

                    <img src="https://source.unsplash.com/1600x1000?hospital">

                </div>

                <div id="hospital-image-right">

                    <div id="right-top">

                        <img src="https://source.unsplash.com/1600x1000?hospital-2">
                        <img src="https://source.unsplash.com/1600x1000?hospital-3">

                    </div>

                    <div id="right-bottom">

                        <img src="https://source.unsplash.com/1600x1000?hospital-4">
                        <img src="https://source.unsplash.com/1600x1000?hospital-5">

                    </div>
                </div>
            </div>


            <div id="hospital-detail">

                <div id="detail-left">

                    <div id="specialist-tag">

                        <i class="fas fa-star"></i>
                        <span>Heart Specialist</span>

                    </div>

                    <div id="hospital-name-header">

                        <h1>Rumah Sakit Sakitan</h1>

                    </div>

                    <div id="alamat-hospital">
                        <span>Alamat Rumah sakit, Kelurahan, Kota, Planet</span>
                    </div>

                </div>

                <div id="detail-right">

                    <div id="availability-box">

                        <h1>Available</h1>

                    </div>

                </div>
            </div>

        </div>


        <div id="detail-section">

            <div class="line">
                <hr>
            </div>

            <div id="about-us">

                <div class="detail-section-header">
                    <h1>About Page</h1>
                </div>

                <p>Lorem ipsum dolor sit amet consectetur. Mattis tortor amet a tincidunt interdum tellus turpis. Urna
                    mattis amet ut convallis nibh sit. Elit vestibulum mus placerat facilisi sed auctor tincidunt
                    ullamcorper id. Ut sit quis volutpat amet libero viverra viverra
                    adipiscing. Consectetur vitae eu donec amet metus pellentesque. Scelerisque massa pellentesque varius
                    morbi ultricies pellentesque quis purus egestas. Neque tincidunt sed ornare eget tellus. Id consequat
                    sit sit facilisis neque feugiat ma
                    lesuada. Lorem augue turpis congue risus. Aliquam in tincidunt mattis velit et in nunc. Vitae purus id
                    ultricies nisl. In eu dui nunc porta maecenas purus aliquam. Imperdiet velit congue neque eros orci quis
                    ornare facilisis habitasse. Turpis amet fe
                    lis vel leo. Curabitur mi nunc sit dolor euismod et magna sagittis egestas. Purus sollicitudin ligula
                    duis euismod lorem nisi diam sem porta. Id sapien id ac felis purus feugiat est. Consectetur quis
                    phasellus quisque sed. Eget dictum egestas turpis
                    tor natoque vestibulum ante.</p>

            </div>

            <div class="line">
                <hr>
            </div>

            <div id="facility">

                <div class="detail-section-header">
                    <h1>Facility</h1>
                </div>

                <div id="image-carousel">
                    <div class="image-card">
                        <img src="assets/hospital1.jpg">
                        <h1>UGD</h1>
                    </div>
                    <div class="image-card">
                        <img src="assets/hospital2.jpg">
                        <h1>AMBULANS</h1>
                    </div>
                    <div class="image-card">
                        <img src="assets/hospital3.jpg">
                        <h1>IGD</h1>
                    </div>
                    <div class="image-card">
                        <img src="assets/hospital4.jpg">
                        <h1>ICU</h1>
                    </div>
                    <div class="image-card">
                        <img src="assets/hospital.jpg">
                        <h1>CT SCAN</h1>
                    </div>
                </div>

            </div>

            <div class="line">
                <hr>
            </div>

            <div id="insurance-company">

                <div class="detail-section-header">
                    <h1>Usable Insurance</h1>
                </div>

                <div id="list-of-companies">
                    <div class="company-image">
                        <img src="assets/asurance 11.png">
                    </div>

                    <div class="company-image">
                        <img src="assets/asurance 12.png">
                    </div>

                    <div class="company-image">
                        <img src="assets/asurance 13.png">
                    </div>

                    <div class="company-image">
                        <img src="assets/asurance 14.png">
                    </div>
                </div>

            </div>

            <div class="line">
                <hr>
            </div>

            <div id="hospital-class">

                <div class="detail-section-header">

                    <h1>Hospital Class</h1>

                </div>

                <div class="class-card">

                    <div class="card-header">

                        <h1>First Class Room</h1>

                    </div>

                    <div class="hospital-class-container">

                        <div class="hospital-class-image">

                            <img src="assets/hospital1.jpg">

                        </div>

                        <div class="class-detail">

                            <div class="detail-left-half">

                                <div class="icon-section">

                                    <i class="fas fa-wifi"></i>

                                    <i class="fas fa-bed"></i>

                                    <i class="fas fa-snowflake"></i>

                                </div>

                                <div class="icon-text-section">

                                    <h1>Free Wi-Fi</h1>

                                    <h1>1 Patient/Room</h1>

                                    <h1>AC</h1>

                                </div>

                                <div class="icon-section">

                                    <i class="fas fa-couch"></i>

                                    <i class="fas fa-tv"></i>

                                    <i class="fas fa-archive"></i>

                                </div>

                                <div class="icon-text-section">

                                    <h1>Sofa</h1>

                                    <h1>TV</h1>

                                    <h1>Drawer</h1>

                                </div>

                                <hr class="vertical-line">
                            </div>

                            <div class="detail-right-half">

                                <div class="price-per-night">

                                    <div class="price-tag">

                                        <h1>Rp1.000.000</h1>

                                    </div>

                                    <div class="per-night-tag">

                                        <h1>/Night</h1>

                                    </div>

                                </div>

                                <div class="room-availability">

                                    <div class="available-tag">

                                        <h2>Available</h2>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="class-card">

                    <div class="card-header">

                        <h1>Second Class Room</h1>

                    </div>

                    <div class="hospital-class-container">

                        <div class="hospital-class-image">

                            <img src="assets/hospital2.jpg">

                        </div>

                        <div class="class-detail">

                            <div class="detail-left-half">

                                <div class="icon-section">

                                    <i class="fas fa-wifi"></i>

                                    <i class="fas fa-bed"></i>

                                    <i class="fas fa-snowflake"></i>

                                </div>

                                <div class="icon-text-section">

                                    <h1>Free Wi-Fi</h1>

                                    <h1>3 Patient/Room</h1>

                                    <h1>AC</h1>

                                </div>

                                <div class="icon-section">

                                    <i class="fas fa-chair"></i>

                                    <i class="fas fa-tv"></i>


                                </div>

                                <div class="icon-text-section">

                                    <h1>Chair</h1>

                                    <h1>TV</h1>


                                </div>

                                <hr class="vertical-line">
                            </div>

                            <div class="detail-right-half">

                                <div class="price-per-night">

                                    <div class="price-tag">

                                        <h1>Rp700.000</h1>

                                    </div>

                                    <div class="per-night-tag">

                                        <h1>/Night</h1>

                                    </div>

                                </div>

                                <div class="room-availability">

                                    <div class="available-tag">

                                        <h2>Available</h2>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="class-card">

                    <div class="card-header">

                        <h1>First Class Room</h1>

                    </div>

                    <div class="hospital-class-container">

                        <div class="hospital-class-image">

                            <img src="assets/hospital3.jpg">

                        </div>

                        <div class="class-detail">

                            <div class="detail-left-half">

                                <div class="icon-section">

                                    <i class="fas fa-wifi"></i>

                                    <i class="fas fa-bed"></i>

                                    <i class="fas fa-snowflake"></i>

                                </div>

                                <div class="icon-text-section">

                                    <h1>Free Wi-Fi</h1>

                                    <h1>6 Patient/Room</h1>

                                    <h1>AC</h1>

                                </div>

                                <div class="icon-section">

                                    <i class="fas fa-chair"></i>


                                </div>

                                <div class="icon-text-section">

                                    <h1>Chair</h1>

                                </div>

                                <hr class="vertical-line">
                            </div>

                            <div class="detail-right-half">

                                <div class="price-per-night">

                                    <div class="price-tag">

                                        <h1>Rp500.000</h1>

                                    </div>

                                    <div class="per-night-tag">

                                        <h1>/Night</h1>

                                    </div>

                                </div>

                                <div class="room-availability">

                                    <div class="available-tag">

                                        <h2>Available</h2>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


        </div>
    </body>

@endsection
