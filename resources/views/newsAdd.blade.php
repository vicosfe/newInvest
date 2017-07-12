@foreach($news as $post)
	<div class="wrapperNews__content--item slideUp">
		<a href="/ru/news/{{$post->id}}">
			<div class="newsItem__img" style="background-image: url({{$post->img}});"></div>
			<div class="newsItem__info">
			<div class="newsItem__info--date"><p>{{ Carbon\Carbon::parse($post->created_at)->format('d-M-Y') }}</p></div>
			<div class="newsItem__info--text"> <p>{!!$post->title!!}</p></div>
			</div>
		</a>
	</div>
@endforeach
