@extends('admin.adminWrap')
@section('content')
<!--  -->
<section style="height: calc(100% - 70px);margin-left: 105px;margin-top: 70px;">
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
					<li><a href="/admin/settings/ad">Настройка объявлений</a></li>
					<li class="activeItem"><a href="/admin/settings/slide">Настройка контактов</a></li>
					<li><a href="/admin/settings/mail">Рассылка</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section>
		<div class="settingsUsefulLinks">
			
			<div class="menuFormWrapper">
				<form action="#" class="settingsContacts" method="POST" enctype="#">
					<h3>Настройка контактов</h3>
					<div class="blockWrapper">
						<div class="blockWrapper__item">
							<!-- <h4>Блок 1</h4> -->
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
								<label>Введите текст (описание)</label>
							</div>

							<div class="settingSliderForm2__group">      
								<input type="email" name="addOpros"  required >
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Введите Email</label>
							</div>

							<div class="usefulLinksButtonWrapper">
								<label class="CUSTOMBUTT">

									<div class="customFileDocs">
										<div class="customFileDocs__img"></div>
										<div class="customFileDocs__text">Добавить фото</div>
									</div>
									<div class="inptHideDocs">
										<input name="photoContacts" size="50" required  class="prewImgNews" type="file"  id="customFileLink1">
									</div>
								</label>
							</div>

						</div>
					</div>
					<div class="wrapperEditProjBut">
						<div class="circlePlus" id="addContacts">
							<span>+</span>
						</div>

						<div class="circlePlus" id="deleteContacts">
							<span>-</span>
						</div>
					</div>
					<button type="submit">Сохранить</button>


				</form>



			</div>

		</div>



	</section>
	<!--  -->
	@stop