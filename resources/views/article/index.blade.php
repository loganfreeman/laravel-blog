@extends('layouts.app')
{{-- Web site Title --}}
@section('title')
	@parent
@endsection

@section('content')

	@for ( $i = 0; $i < count($articles); $i = $i + 2)
		<div class="row">
			<div class="col-md-6">
				<h3>{{ $articles[$i]->title }}</h3>
				<p>{!! $articles[$i]->introduction !!}</p>
				<div>
					<a class="btn btn-success" href="{{ url('article/'.$articles[$i]->slug) }}">Read more</a>
				</div>
			</div>

			@if ($i + 1 < count($articles))
				<div class="col-md-6">
					<h3>{{ $articles[$i+1]->title }}</h3>
					<p>{!! $articles[$i+1]->introduction !!}</p>
					<div>
						<a class="btn btn-success" href="{{ url('article/'.$articles[$i+1]->slug) }}">Read more</a>
					</div>
				</div>
			@endif
		</div>

	@endfor
	{!! $articles->render() !!}
@endsection
