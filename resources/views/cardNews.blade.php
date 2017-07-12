@extends('wrap')
@section('content')

<section>
	<div class="cardNewsWrapper">
		<div class="wrapperCaptionNews">
			<div class="cardNewsWrapper__cardNews--description centerBlock">
				<h3>
					{!! $item->title!!}
				</h3>
			</div>
		</div>

		<div class="cardNewsWrapper__cardNews centerBlock">

			<div class="cardNewsWrapper__cardNews--text">
				{!! $item->content !!}
			</div>
		</div>

	</div>
</section>


@include('mediaSlide')
@include('usefulLinks')


@stop