@extends('layouts.main')

@section('content')

	<!-- home -->
	<section class="home">
		<div class="container">
			<div class="row">
				<div class="col-12 mb-4">
					<h2 class="content__title">Popular Actors</h2>
				</div>
				
				<div class="row">
                    <!-- card -->
                    @foreach ($popularActors as $actor)
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<div class="card">
							<div class="card__cover">
                                <a href="{{ route('actors.show', $actor['id']) }}">
                                    <img src="{{ $actor['profile_path'] }}" alt="profile image">
                                </a>
							</div>
							<div class="card__content">
                                <h3 class="card__title"><a href="{{ route('actors.show', $actor['id']) }}">{{ $actor['name'] }}</a></h3>
								<span class="card__category" style="color: #ffd80e">
                                    {{ $actor['known_for'] }}
								</span>
							</div>
						</div>
                    </div>
                    @endforeach
					<!-- end card -->
                </div>
                  <div style=" justify-content: space-between;">
            @if ($previous)
                <a href="/actors/page/{{ $previous }}" style="color: white">Previous</a>
            @else
                <div></div>
            @endif

            @if ($next)
                <a href="/actors/page/{{ $next }}" style="color: white">Next</a>
            @else
                <div></div>
            @endif

        </div>
            </div>
		</div>
	</section>
	<!-- end home -->

@endsection

@section('scripts')
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
<script>
    var elem = document.querySelector('.row');
    var infScroll = new InfiniteScroll( elem, {
      path: '/actors/page/@{{#}}',
      append: '.actor',
      status: '.page-load-status',
    //   history: false,
    });

</script>
@endsection
