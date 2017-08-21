@extends('uniquePage')
@section('main')

<section class="projIvs">
	@if(count($items))
		@foreach($items as $item)
			<a href="/article/{{$item->id}}">
				<div class="tab-item-investmentPro__item">
					<div class="tab-item-investmentPro__item--img" style="background-image: url({{$item->img}});"></div>
					<div class="tab-item-investmentPro__item--text">
						{{$item->title}}
					</div>
				</div>
			</a>
		@endforeach
			<div class="loadMoreNews">
				<a class="loadMoreNews-js" href="#">загрузить еще</a>
			</div>
	@else

		<p class="empty">Пока нет записей</p>

	@endif





</section>


@stop



