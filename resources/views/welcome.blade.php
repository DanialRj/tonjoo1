@extends('layouts.app')

@section('title') {{ $title }} @endsection

@section('content')
    <div class="container my-4">
        
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{ asset('images/profile.jpg') }}" alt="profile">
                  <div class="card-body">
                    <h5 class="card-title">Hello! My name Danial.</h5>
                    <p class="card-text">Here some my info like CV, Linkedin and social media link</p>
                    <div class="row mx-1">
                        <a target="_blank" href="https://drive.google.com/file/d/10Vu1NN7NgRayEa82dWekXAKq71BZDCZJ/view?usp=sharing" class="btn btn-primary mr-1">CV</a>
                        <a target="_blank" href="https://www.linkedin.com/in/danial-raza-jefri-s-kom-3750a811a" class="btn btn-primary mr-1">LinkedIn</a>
                        <a target="_blank" href="https://www.instagram.com/danialfc" class="btn btn-primary mr-1">Instagram</a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row justify-content-center">
                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <div class="card-header">Made me easy & Read Me First!</div>

                            <div class="card-body">
                                <p>
                                    This site already using hosting. If you using in localhost you must run it separetely for more
                                    detail you can download it from link bellow. And this
                                    page runnging in test number 1 so in others link using another subdomain. You need to Login Also for login detail in readme.
                                    <br><br>
                                    For complate README you can download it from this link :<br>
                                    <a href="{{ url('/readme') }}">Click Here</a>

                                    <br><br>
                                    For complate sourcode you can download it from this link :<br>
                                    <a href="{{ url('/drive') }}">Click Here</a>

                                    <br><br>
                                    Enjoy :D
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <div class="card-header">Test 1. Simple Slicing</div>

                            <div class="card-body">
                                <span>PartnerIklan.com</span><br>
                                <a target="_blank" href="{{ url('test-one') }}">Click Here Test 1. Simple Slicing</a><br><br>

                                <span>Simple CRUD</span><br>
                                <a target="_blank" href="{{ url('test-two') }}">Click Here Test 2. Simple CRUD</a><br><br>

                                <span>JQuery Add Box</span><br>
                                <a target="_blank" href="{{ url('test-tree') }}">Click Here Test 3. JQuery</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <div class="card-header">Test 2. Master Data CRUD dan Transaksi dengan repeatable field</div>

                            <div class="card-body">
                                <span>Master Data CRUD dan Transaksi dengan repeatable field Link</span><br>
                                <a target="_blank" href="{{ url('tonjoo-two') }}">Click Here Master Data CRUD dan Transaksi dengan repeatable field</a><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <div class="card-header">Test 3. Soal Logika</div>

                            <div class="card-body">
                                <p>
                                    You can add the url like :<br><br>
                                    https://domainexample/api/numbers/fibo/{integer1} 
                                    <br>
                                    Or <br>
                                    https://domainexample/api/numbers/fibo/{integer1}/{integer2}
                                </p>
                                <span>Logic Test Link</span><br>
                                <a target="_blank" href="{{ url('/tonjoo-tree') }}">Click Here Logic Test</a><br><br>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
@endsection



