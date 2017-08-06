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
					<li class="activeItem"><a href="/admin/settings/usefullink">Добавление полезных ссылок</a></li>
					<li><a href="/admin/settings/menu">Добавление пунктов меню</a></li>
					<li><a href="/admin/settings/slide">Добавление слайда</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section>
		<div class="settingsUsefulLinks">
			<h3>Добавление полезных ссылок</h3>

			<form action="#" class="settingsUsefulLinksForm">
				<div class="usefulLinksButtonWrapper">
					<label class="CUSTOMBUTT">
						<div class="customFileDocs">
							<div class="customFileDocs__img"></div>
							<div class="customFileDocs__text">Загрузить иконку</div>
						</div>
						<div class="inptHideDocs">
							<input name="prewLink" size="50" required  class="prewImgNews" type="file"  id="customFileLink1">
						</div>
					</label>

					<button type="submit">Добавить ссылку</button>
				</div>
				<div class="linkFormInputwrapper">
					<div class="linkFormInputwrapper__left">
						<div class="settingsUsefulLinksForm__group">      
							<input type="text" name="siteNameLink"  required >
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>Название сайта</label>
						</div>

						<div class="settingsUsefulLinksForm__group">      
							<input type="text" name="siteAdressLink"  required >
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>Адрес сайта</label>
						</div>
					</div>

					<div class="linkFormInputwrapper__right">
						<div class="usefulLinks__wrapper--item">
							<a href="#"></a>
							<a href="#" class="deleteLinks"><span>x</span></a>
							<div class="usefulLinks__item--logo imagePrev">
								
							</div>
							<div class="usefulLinks__item--text">
								Правительство РД <br>
								e-dag.ru
							</div>
						</div>


					</div>
					

				</div>
				
			</form>



			<div class="usefulLinksContainer">
				

				<div class="usefulLinks__wrapper--item">
					<a href="#"></a>
					<a href="#" class="deleteLinks"><span>x</span></a>
					<div class="usefulLinks__item--logo">
						<img src="/public/images/pravRd.png" alt="">
					</div>
					<div class="usefulLinks__item--text">
						Правительство РД <br>
						e-dag.ru
					</div>
				</div>

				<div class="usefulLinks__wrapper--item">
					<a href="#"></a>
					<a href="#" class="deleteLinks"><span>x</span></a>
					<div class="usefulLinks__item--logo">
						<img src="/public/images/pravRd.png" alt="">
					</div>
					<div class="usefulLinks__item--text">
						Правительство РД <br>
						e-dag.ru
					</div>
				</div>

				<div class="usefulLinks__wrapper--item">
					<a href="#"></a>
					<a href="#" class="deleteLinks"><span>x</span></a>
					<div class="usefulLinks__item--logo">
						<img src="/public/images/pravRd.png" alt="">
					</div>
					<div class="usefulLinks__item--text">
						Правительство РД <br>
						e-dag.ru
					</div>
				</div>

				<div class="usefulLinks__wrapper--item">
					<a href="#"></a>
					<a href="#" class="deleteLinks"><span>x</span></a>
					<div class="usefulLinks__item--logo">
						<img src="/public/images/pravRd.png" alt="">
					</div>
					<div class="usefulLinks__item--text">
						Правительство РД <br>
						e-dag.ru
					</div>
				</div>

				<div class="usefulLinks__wrapper--item">
					<a href="#"></a>
					<a href="#" class="deleteLinks"><span>x</span></a>
					<div class="usefulLinks__item--logo">
						<img src="/public/images/pravRd.png" alt="">
					</div>
					<div class="usefulLinks__item--text">
						Правительство РД <br>
						e-dag.ru
					</div>
				</div>

				<div class="usefulLinks__wrapper--item">
					<a href="#"></a>
					<a href="#" class="deleteLinks"><span>x</span></a>
					<div class="usefulLinks__item--logo">
						<img src="/public/images/pravRd.png" alt="">
					</div>
					<div class="usefulLinks__item--text">
						Правительство РД <br>
						e-dag.ru
					</div>
				</div>

				<div class="usefulLinks__wrapper--item">
					<a href="#"></a>
					<a href="#" class="deleteLinks"><span>x</span></a>
					<div class="usefulLinks__item--logo">
						<img src="/public/images/pravRd.png" alt="">
					</div>
					<div class="usefulLinks__item--text">
						Правительство РД <br>
						e-dag.ru
					</div>
				</div>

				<div class="usefulLinks__wrapper--item">
					<a href="#"></a>
					<a href="#" class="deleteLinks"><span>x</span></a>
					<div class="usefulLinks__item--logo">
						<img src="/public/images/pravRd.png" alt="">
					</div>
					<div class="usefulLinks__item--text">
						Правительство РД <br>
						e-dag.ru
					</div>
				</div>

				<div class="usefulLinks__wrapper--item">
					<a href="#"></a>
					<a href="#" class="deleteLinks"><span>x</span></a>
					<div class="usefulLinks__item--logo">
						<img src="/public/images/pravRd.png" alt="">
					</div>
					<div class="usefulLinks__item--text">
						Правительство РД <br>
						e-dag.ru
					</div>
				</div>

				<div class="usefulLinks__wrapper--item">
					<a href="#"></a>
					<a href="#" class="deleteLinks"><span>x</span></a>
					<div class="usefulLinks__item--logo">
						<img src="/public/images/pravRd.png" alt="">
					</div>
					<div class="usefulLinks__item--text">
						Правительство РД <br>
						e-dag.ru
					</div>
				</div>

				<div class="usefulLinks__wrapper--item">
					<a href="#"></a>
					<a href="#" class="deleteLinks"><span>x</span></a>
					<div class="usefulLinks__item--logo">
						<img src="/public/images/pravRd.png" alt="">
					</div>
					<div class="usefulLinks__item--text">
						Правительство РД <br>
						e-dag.ru
					</div>
				</div>

				<div class="usefulLinks__wrapper--item">
					<a href="#"></a>
					<a href="#" class="deleteLinks"><span>x</span></a>
					<div class="usefulLinks__item--logo">
						<img src="/public/images/pravRd.png" alt="">
					</div>
					<div class="usefulLinks__item--text">
						Правительство РД <br>
						e-dag.ru
					</div>
				</div>
			</div>
			

		</section>






		<!--  -->
		@stop