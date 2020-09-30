@extends('layouts.main')

@section('content')
<!-- home -->
<section class="home">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <h2 class="content__title" style="color: #ffd80e">Popular Movies</h2>
            </div>
            
        <div class="container">
            <div class="row">
                <!-- card -->
                @foreach ($popularMovies as $movie)
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <div class="card">
                        <div class="card__cover">
                                <img src="{{ $movie['poster_path'] }}" alt="poster">
                                <a href="{{ route('movies.show', $movie['id']) }}" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
                            <span class="card__rate card__rate--green">{{ $movie['vote_average'] }}</span>
                        </div>
                        <div class="card__content">
                            <h3 class="card__title"><a href="{{ route('movies.show', $movie['id']) }}">{{ $movie['title'] }}</a></h3>
                            
                            <span class="card__category"  style="color: #ffd80e">
                                {{ $movie['genres'] }}
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- end card -->
            </div>
           </div>
        </div>
    </div>
</section>
<!-- end home -->

	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title" style="color: #ffd80e">Now Playing</h2>
						<!-- end content title -->
						
					</div>
				</div>
			</div>
		</div>

		<div class="container">
					<div class="row">
                        <!-- card -->
                        @foreach ($nowPlayingMovies as $movie)
                        <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                            <div class="card">
                                <div class="card__cover">
                                    <img src="{{ $movie['poster_path'] }}" alt="poster">
                                    <a href="{{ route('movies.show', $movie['id']) }}" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
                                    <span class="card__rate card__rate--green">{{ $movie['vote_average'] }}</span>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><a href="{{ route('movies.show', $movie['id']) }}">{{ $movie['title'] }}</a></h3>
                                    
                                    <span class="card__category"  style="color: #ffd80e">
                                        {{ $movie['genres'] }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
						<!-- end card -->
		
					</div>
				</div>
		</div>
	</section>  
@endsection
