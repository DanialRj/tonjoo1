@extends('layouts.app')

@section('title') {{ $title }} @endsection

@section('navbar')
<li class="nav-item">
    <a href="#" class="nav-link" >Homepage</a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link" >News</a>
</li>

<li class="nav-item dropdown">
    <a href="#" id="navbarDropdown" role="button" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Product</a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item">
            Google
        </a>
        <a class="dropdown-item">
            Facebook Ads
        </a>
        <a class="dropdown-item">
            SEO
        </a>
        <a class="dropdown-item">
            Training
        </a>
    </div>
</li>

<li class="nav-item">
    <a href="#" class="nav-link" >Pemesanan</a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link" >Kontak</a>
</li>
@endsection

@section('content')
<!-- Jumbotron -->
<section>
    <div class="jumbotron jumbotron-fluid jumbotron-custom"></div>

</section>
<!--  endJumbotron -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card card--no-border shadow-sm bg-white rounded">
                    <div class="card-body">
                        <div class="card-body__text">Google AdWords</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card--no-border shadow-sm bg-white rounded">
                    <div class="card-body">
                        <div class="card-body__text">Facebook Ads</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card--no-border shadow-sm bg-white rounded">
                    <div class="card-body">
                        <div class="card-body__text">SEO</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card--no-border shadow-sm bg-white rounded">
                    <div class="card-body">
                        <div class="card-body__text">Training</div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="my-4">
    <div class="container">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-4">
                    <div class="card content-wrapper__card card--no-border shadow-sm bg-white rounded">
                        <div class="card-body content-wrapper__card-body">
                            <div class="card-body__text">Gambar</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <h2>Google AdWords</h2>
                    <p>
                        lorem ipsum dolor sit amet, concenture adipisicing elit, set do eiusmod tempar
                        incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nastrud
                        exercitation ullamco nisi ut aliquip ex ae commodo consequat. Duis aute irune
                        dolor in reprehenderit in valuptate velit esse cillum dolore au fugiat nulia pariature
                    </p>
                    <a href="#" class="content-wrapper__text-right">Read More</a>
                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="row">

                <div class="col-md-8">
                    <h2>Facebook Ads</h2>
                    <p>
                        lorem ipsum dolor sit amet, concenture adipisicing elit, set do eiusmod tempar
                        incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nastrud
                        exercitation ullamco nisi ut aliquip ex ae commodo consequat. Duis aute irune
                        dolor in reprehenderit in valuptate velit esse cillum dolore au fugiat nulia pariature
                    </p>
                    <a href="#" class="content-wrapper__text-right">Read More</a>
                </div>

                <div class="col-md-4">
                    <div class="card content-wrapper__card card--no-border shadow-sm bg-white rounded">
                        <div class="card-body content-wrapper__card-body">
                            <div class="card-body__text">Gambar</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-4">
                    <div class="card content-wrapper__card card--no-border shadow-sm bg-white rounded">
                        <div class="card-body content-wrapper__card-body">
                            <div class="card-body__text">Gambar</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <h2>SEO</h2>
                    <p>
                        lorem ipsum dolor sit amet, concenture adipisicing elit, set do eiusmod tempar
                        incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nastrud
                        exercitation ullamco nisi ut aliquip ex ae commodo consequat. Duis aute irune
                        dolor in reprehenderit in valuptate velit esse cillum dolore au fugiat nulia pariature
                    </p>
                    <a href="#" class="content-wrapper__text-right">Read More</a>
                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="row">

                <div class="col-md-8">
                    <h2>Training</h2>
                    <p>
                        lorem ipsum dolor sit amet, concenture adipisicing elit, set do eiusmod tempar
                        incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nastrud
                        exercitation ullamco nisi ut aliquip ex ae commodo consequat. Duis aute irune
                        dolor in reprehenderit in valuptate velit esse cillum dolore au fugiat nulia pariature
                    </p>
                    <a href="#" class="content-wrapper__text-right">Read More</a>
                </div>

                <div class="col-md-4">
                    <div class="card content-wrapper__card card--no-border shadow-sm bg-white rounded">
                        <div class="card-body content-wrapper__card-body">
                            <div class="card-body__text">Gambar</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
