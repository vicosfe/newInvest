@extends('admin.adminWrap')
@section('content')
<!--  -->
<section style="height: calc(100% - 70px);margin-left: 105px;margin-top: 70px;">
	@include('admin.mediaTopPanel')

	<section>
		<div class="addContent">
			<div class="addContent__header">
				<a href="/admin/home">
					<div class="addContent__header--arrow">
						<div class="imgArrow"></div>
					</div>
				</a>
				
				<ul>
					<li class="activeItem"><a href="/admin/change/media">Добавление слайдов</a></li>
					<li><a href="/admin/change/settingSlider">Настройка слайдов</a></li>
					<li><a href="/admin/change/settingMediaSlider">Слайдер медиа</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section>
		<div class="settingsUsefulLinks">
			<h3>Добавление слайдов </h3>
			


		</section>


		<!--  -->
		@stop