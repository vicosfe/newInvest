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
					<li class="activeItem"><a href="/admin/settings/opros">Добавление опроса</a></li>
					<li><a href="/admin/settings/usefullink">Добавление полезных ссылок</a></li>
					<li><a href="/admin/settings/menu">Добавление пунктов меню</a></li>
					<li><a href="/admin/settings/slide">Добавление слайда</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section>
		<div class="settingsOpros">
			<h3>Добавление отпроса</h3>
			<div class="settingsOprosTop">
				<form action="#" class="addOpros">



					<div class="settingsOprosTop__left">
						<div class="addOprosForm__group">      
							<input type="text" name="addOprosCaption"  required >
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>Заголовок опроса</label>
						</div>
						<label class="labelKolichestvo" >Колличество вариантов ответа
							<select name="kolichestvo" id="kolichestvo">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
						</label>
						<button type="submit" class="goProjects">Добавить опрос</button>
					</div>
				

					<div class="settingsOprosTop__right">
						
						<div class="addOprosForm__group addOprosForm__group1">      
							<input type="text" name="addOprosCaption"  required >
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>1 пункт</label>
						</div>

						<div class="addOprosForm__group addOprosForm__group2">      
							<input type="text" name="addOprosCaption"  required >
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>2 пункт</label>
						</div>

						<div class="addOprosForm__group addOprosForm__group3">      
							<input type="text" name="addOprosCaption"  required >
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>3 пункт</label>
						</div>

						<div class="addOprosForm__group addOprosForm__group4">      
							<input type="text" name="addOprosCaption"  required >
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>4 пункт</label>
						</div>

						<div class="addOprosForm__group addOprosForm__group5">      
							<input type="text" name="addOprosCaption"  required >
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>5 пункт</label>
						</div>

						<div class="addOprosForm__group addOprosForm__group6">      
							<input type="text" name="addOprosCaption"  required >
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>6 пункт</label>
						</div>

					</div>



				</form>
				
			</div>



			<div class="settingsOprosBottom">
				<div class="settingsOprosBottomWrapp">

					<div class="settingsOprosBottomWrapp__item">
						<p>Здесь будет название опроса </p>
						<a href="#">
							<div class="settingsOprosBottomWrapp__delete"><span>x</span></div>
						</a>
					</div>

					<div class="settingsOprosBottomWrapp__item">
						<p>Здесь будет название опроса </p>
						<a href="#">
							<div class="settingsOprosBottomWrapp__delete"><span>x</span></div>
						</a>
					</div>	

					<div class="settingsOprosBottomWrapp__item">
						<p>Здесь будет название опроса </p>
						<a href="#">
							<div class="settingsOprosBottomWrapp__delete"><span>x</span></div>
						</a>
					</div>	

					<div class="settingsOprosBottomWrapp__item">
						<p>Здесь будет название опроса </p>
						<a href="#">
							<div class="settingsOprosBottomWrapp__delete"><span>x</span></div>
						</a>
					</div>		

				</div>
			</div>




		</div>


	</section>






	<!--  -->
	@stop