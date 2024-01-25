@extends('navbar')

<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@section('title', 'Dashboard')

@section('content')
    <body>
        {{-- <header class="header">
            <div class="logo">
                <a href="#" ><img src="assets/logo.png" alt=""></a>
            </div>

            <nav>
                <ul class="nav_links">
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="#">Favorite</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>

            <div class="login_button">
                <a href="#" class="login"><button>Login</button></a>
                <div class="border"></div>
                <a href="#" class="sign_up"><button>Sign Up</button></a>
            </div>
        </header> --}}

        <section class="content">
            <div class="title">
                <div class="row">
                    <h2>Discover Quality Care <br>
                        With Ease
                    </h2>
                    <p>
                        Easily search for hospital availibility
                    </p>
                </div>
                <img src="assets/HeaderPeople.png" alt="">
            </div>


            <div class="search">
                <div class="container">
                    <div class="card-title">
                        <h3>Where To Find a Hospital?</h3>
                    </div>

                    <div class="card-content">
                        <form action="">
                            <div class="input-field">
                                <label for="kecamatan">Kecamatan</label><br>
                                <input type="text" id="kecamatan">
                            </div>
                            <div class="input-field">
                                <label for="kabupaten">Kabupaten/Kota</label><br>
                                <input type="text" id="kecamatan">
                            </div>
                            <div class="input-field">
                                <label for="provinsi">Provinsi</label><br>
                                <input type="text" id="provinsi">
                            </div>
                        </form>
                        <div class="search-button">
                            <a href="#" class="find_btn"><button>Find Hospital</button></a>
                        </div>
                    </div>
                    <div class="verticle-line" style="width: 100%; border: 2px #6499E9 solid"></div>

                </div>
            </div>

            <div class="recommend">
                <div class="title-recommend">
                    <h2>Recommendation By Us</h2>
                    <p>We have some hospital recommendations</p>
                </div>

                <div class="filter">
                    <a href="#"><button class="active">Jakarta</button></a>
                    <a href="#"><button>Bandung</button></a>
                    <a href="#"><button>Semarang</button></a>
                    <a href="#"><button>Yogya</button></a>
                    <a href="#"><button>Solo</button></a>
                    <a href="#"><button>Surabaya</button></a>
                    <a href="#"><button>Malang</button></a>
                </div>

                <div class="card-container">
                    <a href="/hospital-detail">
                        <div class="card">
                            <div class="card-img"><img src="assets/card1.png" alt=""></div>
                            <div class="save-icon"><img class="save-icon"src="assets/save.png" alt=""></div>
                            <div class="details">
                                <div class="price">
                                    <p>Start From</p>
                                    <h3>Rp.1.000.000</h3>
                                </div>
                                <div class="status">
                                    <h3>Available</h3>
                                </div>
                            </div>
                            <div class="paragraph">
                                <h2>RS Ibu Bapak</h2>
                                <p>Alamat, Kabupaten</p>
                            </div>
                        </div>
                    </a>
                    <a href="/hospital-detail">
                        <div class="card">
                            <div class="card-img"><img src="assets/card2.png" alt=""></div>
                            <div class="save-icon"><img class="save-icon"src="assets/save.svg" alt=""></div>

                            <div class="details">
                                <div class="price">
                                    <p>Start From</p>
                                    <h3>Rp.1.000.000</h3>
                                </div>
                                <div class="status">
                                    <h3>Available</h3>
                                </div>
                            </div>
                            <div class="paragraph">
                                <h2>RS Ibu Bapak</h2>
                                <p>Alamat, Kabupaten</p>
                            </div>

                        </div>
                    </a>
                    <a href="/hospital-detail">
                        <div class="card">
                            <div class="card-img"><img src="assets/card3.png" alt=""></div>
                            <div class="save-icon"><img class="save-icon"src="assets/save.svg" alt=""></div>

                            <div class="details">
                                <div class="price">
                                    <p>Start From</p>
                                    <h3>Rp.1.000.000</h3>
                                </div>
                                <div class="status">
                                    <h3>Available</h3>
                                </div>
                            </div>
                            <div class="paragraph">
                                <h2>RS Ibu Bapak</h2>
                                <p>Alamat, Kabupaten</p>
                            </div>
                        </div>
                    </a>

                    <a href="/hospital-detail">
                        <div class="card">
                            <div class="card-img"><img src="assets/card4.png" alt=""></div>
                            <div class="save-icon"><img class="save-icon"src="assets/save.svg" alt=""></div>

                            <div class="details">
                                <div class="price">
                                    <p>Start From</p>
                                    <h3>Rp.1.000.000</h3>
                                </div>
                                <div class="status">
                                    <h3>Available</h3>
                                </div>
                            </div>
                            <div class="paragraph">
                                <h2>RS Ibu Bapak</h2>
                                <p>Alamat, Kabupaten</p>
                            </div>
                        </div>
                    </a>
                    <a href="/hospital-detail">
                        <div class="card">
                            <div class="card-img"><img src="assets/card5.png" alt=""></div>
                            <div class="save-icon"><img class="save-icon"src="assets/save.svg" alt=""></div>

                            <div class="details">
                                <div class="price">
                                    <p>Start From</p>
                                    <h3>Rp.1.000.000</h3>
                                </div>
                                <div class="status">
                                    <h3>Available</h3>
                                </div>
                            </div>
                            <div class="paragraph">
                                <h2>RS Ibu Bapak</h2>
                                <p>Alamat, Kabupaten</p>
                            </div>
                        </div>
                    </a>
                    <a href="/hospital-detail">
                        <div class="card">
                            <div class="card-img"><img src="assets/card6.png" alt=""></div>
                            <div class="save-icon"><img class="save-icon"src="assets/save.svg" alt=""></div>

                            <div class="details">
                                <div class="price">
                                    <p>Start From</p>
                                    <h3>Rp.1.000.000</h3>
                                </div>
                                <div class="status">
                                    <h3>Available</h3>
                                </div>
                            </div>
                            <div class="paragraph">
                                <h2>RS Ibu Bapak</h2>
                                <p>Alamat, Kabupaten</p>
                            </div>
                        </div>
                    </a>
                    <a href="/hospital-detail">
                        <div class="card">
                            <div class="card-img"><img src="assets/card7.png" alt=""></div>
                            <div class="save-icon"><img class="save-icon"src="assets/save.svg" alt=""></div>

                            <div class="details">
                                <div class="price">
                                    <p>Start From</p>
                                    <h3>Rp.1.000.000</h3>
                                </div>
                                <div class="status">
                                    <h3>Available</h3>
                                </div>
                            </div>
                            <div class="paragraph">
                                <h2>RS Ibu Bapak</h2>
                                <p>Alamat, Kabupaten</p>
                            </div>
                        </div>
                    </a>
                    <a href="/hospital-detail">
                        <div class="card">
                            <div class="card-img"><img src="assets/card8.png" alt=""></div>
                            <div class="save-icon"><img class="save-icon"src="assets/save.svg" alt=""></div>

                            <div class="details">
                                <div class="price">
                                    <p>Start From</p>
                                    <h3>Rp.1.000.000</h3>
                                </div>
                                <div class="status">
                                    <h3>Available</h3>
                                </div>
                            </div>
                            <div class="paragraph">
                                <h2>RS Ibu Bapak</h2>
                                <p>Alamat, Kabupaten</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="footer-container">
                <div class="row">
                    <div class="footer-logo">
                        <img src="assets/logo.png" alt="">
                    </div>
                    <div class="text-col">
                        <p>Jl. Raya Kb. Jeruk No.27, RT.1/RW.9, Kb. Jeruk, Kec. Kb. Jeruk, <br>
                            Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530</p><br>
                        <h3>@2023 PT. Health Point Sumber Jaya</h3>
                    </div>
                </div>
            </div>
        </footer>

    </body>
@endsection


