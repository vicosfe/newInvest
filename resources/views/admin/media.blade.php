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
			<form action="/admin/settings/slide" class="menuSlideAdd" method="POST" enctype="multipart/form-data">
					<h3>Добавление слайда</h3>
					{{csrf_field()}}
					<div class="settingsSlideFormAdd__group">      
						<input type="text" name="title"  value="{{$slide->title}}" >
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
								<input name="file" size="50"   class="prewImgNews" type="file" >
							</div>
						</label>



						<div class="imagePrev">


									@if(isset($slide->img))<img src="{{$slide->img}}" alt="">@endif

						</div>
					</div>
					<hr>
					<p>Или</p>
					<hr>
					<div class="settingsSlideFormAdd__group">
						<textarea name="area" style="width: 100%;height: 180px; max-width: 420px">{{$slide->content}}</textarea>
						<span class="highlight"></span>
						<span class="bar"></span>
						<label>HTML/CSS/JS контент</label>
					</div>
					<button type="submit">Добавить слайд</button>
					
				</form>
				<form action="/admin/settings/slide/remove" class="menuSlideDelete">
					<h3>Удаление слайда</h3>

					<select name="slides" id="">
						<option value="0">Выберите пункт</option>
						@foreach($items as $item)
							<option value="{{$item->id}}">{{$item->title}}</option>
						@endforeach
					</select>

					<button type="submit">Удалить слайд</button>
				</form>


		</section>


		<!--  -->
		@stop