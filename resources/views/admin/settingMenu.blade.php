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
					<li><a href="/admin/settings/opros">Добавление опроса</a></li>
					<li><a href="/admin/settings/usefullink">Добавление полезных ссылок</a></li>
					<li class="activeItem"><a href="/admin/settings/menu">Добавление пунктов меню</a></li>
					<li><a href="/admin/settings/slide">Добавление слайда</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section>
		<div class="settingsUsefulLinks">
			
			<div class="menuFormWrapper">
				<form action="#" class="settingsMenuFormAdd">
				<h3>Добавление пунктов меню</h3>
					<select name="menuSelect1" id="">
						<option value="">Выберите пункт</option>
					</select>

					<select name="menuSelect2" id="">
						<option value="">Выберите пункт</option>
					</select>

					<div class="settingsMenuFormAdd__group">      
						<input type="text" name="siteNameLink"  required >
						<span class="highlight"></span>
						<span class="bar"></span>
						<label>Ссылка</label>
					</div>

					<div class="settingsMenuFormAdd__group">      
						<input type="text" name="siteNameLink"  required >
						<span class="highlight"></span>
						<span class="bar"></span>
						<label>Название пункта меню</label>
					</div>

					<label class="CUSTOMBUTT222">
						<div class="customFileDocs222">
							<div class="customFileDocs__img222"></div>
							<div class="customFileDocs__text222">Загрузить иконку</div>
						</div>
						<div class="inptHideDocs222">
							<input name="imgMenu" size="50" required  class="imgMenu" type="file" >
						</div>
					</label>


					<button type="submit">Добавить пункт меню</button>

				</form>


				<form action="#" class="settingsMenuFormDelete">
					<h3>Удаление пунктов меню</h3>

					<select name="menuSelect1" id="">
						<option value="">Выберите пункт</option>
					</select>

					<select name="menuSelect2" id="">
						<option value="">Выберите пункт</option>
					</select>
					<button type="submit">Удалить пункт меню</button>
				</form>
			</div>

			


			<!--  -->
			@stop