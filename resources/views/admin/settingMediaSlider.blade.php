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
					<li><a href="/admin/change/media">Добавление слайдов</a></li>
					<li><a href="/admin/change/settingSlider">Настройка слайдов</a></li>
					<li class="activeItem"><a href="/admin/change/settingMediaSlider">Слайдер медиа</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section>
		<div class="settingSlider">
			<h3>Настройка слайдов медиа</h3>

			<form action="#" class="settingMediaSliderForm">
				<div class="MEDIAWRAPPER">
					<label class="MEDIAWRAPPER__item"><div class=""><input type="checkbox" name="1ch"></div></label>
					<label class="MEDIAWRAPPER__item"><div class=""><input type="checkbox" name="2ch"></div></label>
					<label class="MEDIAWRAPPER__item"><div class=""><input type="checkbox" name="3ch"></div></label>
					<label class="MEDIAWRAPPER__item"><div class=""><input type="checkbox" name="4ch"></div></label>
					<label class="MEDIAWRAPPER__item"><div class=""><input type="checkbox" name="5ch"></div></label>
					<label class="MEDIAWRAPPER__item"><div class=""><input type="checkbox" name="6ch"></div></label>
					<label class="MEDIAWRAPPER__item"><div class=""><input type="checkbox" name="7ch"></div></label>
					<label class="MEDIAWRAPPER__item"><div class=""><input type="checkbox" name="8ch"></div></label>
					<label class="MEDIAWRAPPER__item"><div class=""><input type="checkbox" name="9ch"></div></label>
				</div>

				<button type="submit">Сохранить</button>
			</form>


			</section>


			<!--  -->
			@stop