@extends('wrap')
@section('content')
<!-- ************************************************************************************** -->
<div class="CAPTION">
	<div class="centerBlock">
		<div class="CAPTION__wrapper">
			<p>
				Уникальная страница
			</p>
		</div>
	</div>
</div>

<div class="centerBlock">
	<div class="investOfferContainer">
		<div class="offer_left">
			@include('rightMenu')
		</div>
		<div class="offer_right">
		<div class="uniqueDescription">
			<p>Создание и обеспечение функционирования специализированного раздела об инвестиционной деятельности города Махачкалы на официальном сайте Администрации города. Создание и обеспечение функционирования специализированного раздела об инвестиционной деятельности города Махачкалы на официальном сайте Администрации города.</p>
		</div>
		<!-- Подключение вьюх -->
			@include('articlePage')
		</div>

	</div>
	

</div>





<!-- ************************************************************************************** -->
@include('usefulLinks')


@stop