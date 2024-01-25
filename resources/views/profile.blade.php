@extends('navbar')

<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

@section('title', 'Profile')

@section('content')

    <body>
        <div class="wrapperprofile">
            <div class="userimage">
                {{-- <img src="{{ asset('assets/card1.png') }}" alt=""> --}}
                <img src="{{ auth()->user()->userimage }}" alt="">
            </div>
            <div class="username">
                <h1>{{ auth()->user()->username }}</h1>
            </div>
        </div>

        <section class="info">

            <div class="infopage">
                <div class="text">
                    <h2>Profile</h2>
                </div>
                <div class="line">
                    <div class="verticle-line" style="width: 8%; border: 3.5px #6499E9 solid"></div>
                </div>
            </div>

            <div class="container-info">
                <div class="left">
                    <div class="container-left">
                        <div class="sub-information">
                            <h3>Full Name</h3>
                            <h2>{{ auth()->user()->username }}</h2>
                        </div>

                        <div class="sub-information">
                            <h3>Email Address</h3>
                            <h2>{{ auth()->user()->email }}</h2>
                        </div>

                        <div class="sub-information">
                            <h3>Mobile Number</h3>
                            <h2>{{ auth()->user()->usermobile }}</h2>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="container-right">
                        <div class="sub-information">
                            <h3>Date of birth</h3>
                            <h2>{{ \Carbon\Carbon::parse(auth()->user()->userDOB)->format('j F Y') }}</h2>
                        </div>

                        <div class="sub-information">
                            <h3>Address</h3>
                            <h2>{{ auth()->user()->useraddress }}</h2>
                        </div>

                        <div class="sub-information">
                            <h3>Gender</h3>
                            <h2>
                                @if (auth()->user()->genderid == 'GN001')
                                    Male
                                @elseif(auth()->user()->genderid == 'GN002')
                                    Female
                                @endif
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="buttonplacement">

                <form action="/upload" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Picture</label>
                        <input class="form-control" type="file" id="formFile" name="formFile">
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary w-100 p-2">Upload</button>
                </form>
                <div class="logout">
                    <button type="sign-up" class="btn btn-primary w-100 p-2" id="button-signup"><a href="/logout" class="text-decoration-none">Logout</a></button>
                </div>

            </div>

        </section>

    </body>
@endsection
