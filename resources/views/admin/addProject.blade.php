@extends('admin.adminWrap')
@section('content')
<!--  -->
<section style="height: calc(100% - 70px);">

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
					<li><a href="/admin/edit/news">Добавление новостей</a></li>
					<li><a href="/admin/edit/docs">Добавление документов</a></li>
					<li class="activeItem"><a href="/admin/edit/projects">Добавление проекта</a></li>
					<li><a href="/admin/edit/articles">Добавление статей</a></li>
					<li><a href="/admin/edit/pages">Добавление уникальных страниц</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section>
		<div class="addProjects">
			<h3>Добавление проекта</h3>
			<form action="#" class="addProjectsForm" method="POST" enctype="#">

				<div class="addProjectsForm__left">					
					<div class="addProjectsForm__group">      
						<input type="text" name="addProjectsCaption"  required >
						<span class="highlight"></span>
						<span class="bar"></span>
						<label>Название проекта</label>
					</div>

					<div class="addProjectsForm__group">      
						<input type="text" name="addProjectsCaption"  required >
						<span class="highlight"></span>
						<span class="bar"></span>
						<label>Заголовок пункта</label>
					</div>
					
					<div class="projectsEditor">
						<div id="sample">
							<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 
							<script type="text/javascript">
					//<![CDATA[
					bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
					  //]]>
					</script>

					<textarea name="addProjArea" style="width: 100%;height: 180px;"></textarea><br>

				</div>


			</div>

			<div class="addProjectsForm__group">      
				<input type="text" name="addProjectsCaption"  required >
				<span class="highlight"></span>
				<span class="bar"></span>
				<label>Ориентировачная стоимость проекта</label>
			</div>

			<button class="goProjects">Добавить новость</button>

		</div>


		<div class="addProjectsForm__right">
			<!-- Превью загружаемой картинки -->
			<div class="wrapperPrevImg">
				<label>
					<div class="customFile">
						<div class="customFile__img"></div>
						<div class="customFile__text">Добавить фото</div>
					</div>
					<div class="inptHide">
						<input name="prewImgProjects[]" class="prewImgNews" type="file" multiple>
					</div>

				</label>
				<div class="imagePrevWrapper">
					<div class="imagePrev"></div>
				</div>

			</div>

		</div>

	</form>
</div>	
</section>	


</section>	
<!--  -->
@stop