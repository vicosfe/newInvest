@extends('uniquepage')
@section('main')
	@if(count($page))
	<div class="uniqueDescription">
		<p>{!! $page->title !!}</p>
	</div>
	<div class="supportMain">
		@if(count($paths))
			@foreach($paths as $path)
				@if(strlen($path->title)>3)

			<div class="supportMain__item">
				<a href="#">
					<div class="wrapSup supMsub supMclose">
						<div class="supportMain__item--text">
							{{$path->title}}
						</div>
					</div>
				</a>
				<div class="supportMain__item--sub">
					@if(count($path->docs))
						@foreach($path->docs as $doc)
							<a href="{{$doc->link}}" target="_blank">
								<p>{{$doc->title}}</p>
								<div class="itemSubRight">
									<img src="/public/images/linkFile.png" alt="">
									<p>Скачать</p>
								</div>
							</a>
						@endforeach
					@endif
					@if(strlen($path->description)>4)
						<div class="subDescription">
							<p>{!! $path->description  !!}</p>
						</div>
					@endif
				</div>
			</div>
				@endif
			@endforeach
		@endif
	</div>
	@else

		<p class="empty">Пока нет записей</p>
	@endif
	@stop