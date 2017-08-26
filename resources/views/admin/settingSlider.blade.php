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
					<li class="activeItem"><a href="/admin/change/settingSlider">Настройка слайдов</a></li>
					<li><a href="/admin/change/settingMediaSlider">Слайдер медиа</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section>
		<div class="settingSlider">
			<h3>Настройка слайдов </h3>

			<h4>Слайд 1 (статистика)</h4>

			<form action="#" class="settingSliderForm">
				<div class="blockWrapper">
					<div class="blockWrapper__item">
						<h4>Блок 1</h4>
						<div class="settingSliderForm__group">      
							<input type="text" name="addOpros"  required >
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>Введите заголовок</label>
							<h5>Не более 40 символов</h5>
						</div>

						<div class="settingSliderForm__group">      
							<input type="text" name="addOpros"  required >
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>Введите значение</label>
						</div>
					</div>

					<div class="blockWrapper__item">
						<h4>Блок 2</h4>
						<div class="settingSliderForm__group">      
							<input type="text" name="addOpros"  required >
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>Введите заголовок</label>
							<h5>Не более 40 символов</h5>
						</div>

						<div class="settingSliderForm__group">      
							<input type="text" name="addOpros"  required >
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>Введите значение</label>
						</div>
					</div>

					<div class="blockWrapper__item">
						<h4>Блок 3</h4>
						<div class="settingSliderForm__group">      
							<input type="text" name="addOpros"  required >
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>Введите заголовок</label>
							<h5>Не более 40 символов</h5>
						</div>

						<div class="settingSliderForm__group">      
							<input type="text" name="addOpros"  required >
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>Введите значение</label>
						</div>
					</div>
				</div>
				<button type="submit">Сохранить</button>
			</form>


			<h4>Слайд 2 (мер)</h4>
			<form action="#" class="settingSliderForm2">
				<div class="blockWrapper">
					<div class="blockWrapper__item">
						<h4>Блок 1</h4>
						<div class="settingSliderForm2__group">      
							<input type="text" name="addOpros"  required >
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>Введите имя</label>
						</div>

						<div class="settingSliderForm2__group">      
							<input type="text" name="addOpros"  required >
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>Введите текст</label>
						</div>
						
						<div class="usefulLinksButtonWrapper">
							<label class="CUSTOMBUTT">

								<div class="customFileDocs">
									<div class="customFileDocs__img"></div>
									<div class="customFileDocs__text">Добавить фото</div>
								</div>
								<div class="inptHideDocs">
									<input name="prewLink" size="50" required  class="prewImgNews" type="file"  id="customFileLink1">
								</div>
							</label>
						</div>

					</div>
					<button type="submit">Сохранить</button>
				</form>


			</section>


			<!--  -->
			@stop