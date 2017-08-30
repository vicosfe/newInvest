@extends('admin.adminWrap')
@section('content')
<!--  -->
<section style="height: calc(100% - 70px);margin-left: 105px;margin-top: 70px;">

	@include('admin.addTopPanel')

	<section>
		<div class="addContent">
			<div class="addContent__header">
				<a href="/admin/home">
					<div class="addContent__header--arrow">
						<div class="imgArrow"></div>
					</div>
				</a>
				
				<ul>
					<li class="activeItem"><a href="/admin/edit/news">Добавление новостей</a></li>
					<li><a href="/admin/edit/projects">Добавление проекта</a></li>
					<li><a href="/admin/edit/articles">Добавление статей</a></li>
					<li><a href="/admin/edit/pages">Добавление уникальных страниц</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section>
		<div class="addNews">
			<h3>Добавление новости</h3>
			<form action="/admin/add/news/{{$item->id}}" class="addNewsForm" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}

				<div class="addNewsForm__left">					
					<div class="addNewsForm__group">      
						<input type="text" name="addNewsCaption"  required value="{{$item->title}}">
						<span class="highlight"></span>
						<span class="bar"></span>
						<label>Заголовок новости</label>
					</div>
					
					<div class="newsEditor">
						<div id="sample">
							<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 
							<script type="text/javascript">
					//<![CDATA[
					bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
					  //]]>
					</script>

					<textarea name="area2" style="width: 100%;height: 180px;">{!!$item->content  !!}</textarea><br>

					</div>


				</div>

				<button class="goNews">Добавить новость</button>

			</div>


			<div class="addNewsForm__right">
				<!-- Превью загружаемой картинки -->
				<div class="wrapperPrevImg">
					<label>
						<div class="customFile">
							<div class="customFile__img"></div>
							<div class="customFile__text">Добавить фото</div>
						</div>
						<div class="inptHide">
							<input name="prewImgNews[]" class="prewImgNews" type="file" multiple>
						</div>

					</label>
					<div class="imagePrevWrapper">
						<div class="imagePrev">
							@if(count($media))
								@foreach($media as $m)
									@if(isset($m->img))<img src="{{$m->img}}" alt="">@endif
								@endforeach
							@endif
						</div>
					</div>

				</div>

			</div>

</form>
</div>	
</section>


</section>	




<!--  -->
@stop