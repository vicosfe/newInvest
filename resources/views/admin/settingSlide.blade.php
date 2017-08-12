@extends('admin.adminWrap')
@section('content')
<!--  -->
<section style="height: calc(100% - 70px);">
	@include('admin.settingsTopPanel')

	<section>
		<div class="addContent">
			<div class="addContent__header">
				<a href="/admin/home">
					<div class="addContent__header--arrow">
						<div class="imgArrow"></div>
					</div>
				</a>
				
				<ul>
					<li><a href="/admin/settings/opros">Настройка опроса</a></li>
					<li><a href="/admin/settings/usefullink">Настройка полезных ссылок</a></li>
					<li><a href="/admin/settings/menu">Настройка пунктов меню</a></li>
					<li class="activeItem"><a href="/admin/settings/slide">Добавление слайда</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section>
		<div class="settingsUsefulLinks">
			
			<div class="menuFormWrapper">
				<form action="#" class="menuSlideAdd">
					<h3>Добавление слайда</h3>
					<div class="settingsSlideFormAdd__group">      
						<input type="text" name="siteNameLink"  required >
						<span class="highlight"></span>
						<span class="bar"></span>
						<label>Заголовок слайда</label>
					</div>
					<div class="qweqweqwe">
						<label class="CUSTOMBUTT333">
							<div class="customFileDocs333">
								<div class="customFileDocs__img333"></div>
								<div class="customFileDocs__text333">Добавить фото</div>
							</div>
							<div class="inptHideDocs">
								<input name="imgMenu" size="50" required  class="prewImgNews" type="file" >
							</div>
						</label>


						<div class="imagePrev"></div>
					</div>

					<button type="submit">Добавить слайд</button>
					
				</form>
				<form action="#" class="menuSlideDelete">
					<h3>Удаление слайда</h3>

					<select name="menuSelect1" id="">
						<option value="">Выберите пункт</option>
					</select>

					<button type="submit">Удалить слайд</button>
				</form>
				



				<!--  -->
				@stop