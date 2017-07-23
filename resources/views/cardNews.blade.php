@extends('wrap')
@section('content')

<section>
	<div class="cardNewsWrapper">
		<div class="CAPTION">
			<div class="centerBlock">
				<div class="CAPTION__wrapper">
					<p>
						{!! $item->title!!}
					</p>
				</div>
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