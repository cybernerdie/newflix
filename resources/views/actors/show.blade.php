@extends('layouts.main')
@section('content')
<section class="section section--details section--bg" data-bg="">
    <!-- details content -->
    <div class="container">
        <div class="row">
        
<!-- player -->
<div class="col-12 col-lg-3">
<div class="card__cover">
    <img src="{{ $actor['profile_path'] }}" alt="">
</div>
<div class="row mt-4">
    @if ($social['facebook'])
    <p class=" ml-3 mr-4">
        <a href="{{ $social['facebook'] }}" title="Facebook">
        <i class="fa fa-facebook" style="color: #ffd80e"></i>   
        </a>
    </p>
@endif

@if ($social['instagram'])
<p class="ml-3 mr-4">
        <a href="{{ $social['instagram'] }}" title="Instagram">
          <i class="fa fa-instagram" style="color: #ffd80e"></i>
        </a>
    </p>
@endif

@if ($social['twitter'])
<p class="ml-3 mr-4">
        <a href="{{ $social['twitter'] }}" title="Twitter">
        <i class="fa fa-twitter" style="color: #ffd80e"></i>   
        </a>
    </p>
@endif
@if ($actor['homepage'])

<p class="ml-3 mr-4">
        <a href="{{ $actor['homepage'] }}" title="Website">
        <i class="fa fa-globe" style="color: #ffd80e"></i>
        </a>
    </p>
@endif
</div>
</div>

<div class="col-12 col-lg-1">
</div>
<!-- end player -->
            <!-- content -->
            
            <div class="col-12 col-lg-8">
                <div class="card card--details">
                        <!-- title -->
            <h1 class="section__title">{{ $actor['name'] }}</h1>
            <!-- end title -->
                    <div class="row">
                    <!-- card content -->
                        <div class="col-12 col-sm-7 col-lg-6 col-xl-12">
                            <div class="card__content">
                                <ul class="card__meta">
                                    <li>Country: <span class="ml-3" style="color: #ffd80e">{{ $actor['place_of_birth'] }}</span></li>
                                    <li>Date of Birth: <span class="ml-3" style="color: #ffd80e">{{ $actor['birthday'] }}</span></li>
                                    <li>Age: <span class="ml-3" style="color: #ffd80e">{{ $actor['age'] }} years old</span></li>                           
                                </ul>
                                <div class="card__description">
                                    {{ $actor['biography'] }}
                                </div>
                            </div>
                        </div>
                        <!-- end card content -->
                    </div>
<br>
                    <div class="row">
                        <!-- card content -->
                            <div class="col-12 col-sm-7 col-lg-6 col-xl-12">
                                <div class="card__content">
                                    <ul class="card__meta">
                                        <li>Known For</li>
                                
                                    </ul>
                                    <br>
                                    <div class="row">
                                        @foreach ($knownForMovies as $movie)
                                     <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                            <div class="card">
                                                <div class="card__cover">
                                                    <a href="{{ $movie['linkToPage'] }}"><img src="{{ $movie['poster_path'] }}" alt="" style="width: 100%"></a>
                                                </div>
                                                <div class="card__content">
                                                    <span class="card__category" >
                                                        <a href="{{ $movie['linkToPage'] }}" style="color: #ffd80e">{{ $movie['title'] }}</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                          @endforeach
                                     
                                    </div>
                                </div>
                            </div>
                            <!-- end card content -->
                        </div>
                </div>
            </div>
            <!-- end content -->
        </div>
    </div>
</section>
<div class="container">
        <div class="col-12 mb-4">
            <h2 class="content__title">Credits</h2>
        </div>
            @foreach ($credits as $credit)
            <div class="col-12 col-sm-6 col-md-6 col-xl-6">
                <h3 class="card__title"><li> {{ $credit['release_year'] }} -  <strong><a href="{{ $credit['linkToPage'] }}" class="hover:underline">{{ $credit['title'] }}</a></strong> as {{ $credit['character'] }}</li></h3>
            </div>
            @endforeach
</div>
<!-- end details -->

@endsection
