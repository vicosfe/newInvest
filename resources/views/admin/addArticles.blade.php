@extends('admin.adminWrap')
@section('content')
<!--  -->
<section style="height: calc(100% - 70px);">
	@include('admin.addTopPanel')

	<section>
		<div class="addContent">
			<div class="addContent__header">
				<a href="#">
					<div class="addContent__header--arrow">
						<div class="imgArrow"></div>
					</div>
				</a>
				
				<ul>
					<li><a href="#">Добавление новостей</a></li>
					<li class="activeItem"><a href="#">Добавление статей</a></li>
					<li><a href="#">Добавление уникальных страниц</a></li>
				</ul>
			</div>
		</div>
	</section>
	<section>
		<div class="addArticles">
			<h3>Добавление статьи</h3>

			<form action="#" class="addArticlesForm">
				<div class="addArticlesForm__left">
					<select  required name="addArticlesSelect1" id="addArticlesSelect1">
						<option value="">Выберите пункт</option>
						<option value="investmentActivities">Инвестиционная деятельность</option>
						<option value="investoru">Инвестору</option>
						<option value="smallEntrepreneurship">Малое и среднее предпринимательство</option>
						<option value="media">Медиа</option>
					</select>
					<select name="addArticlesSelect2" id="">
						<option value="">Выберите пункт</option>
						<option value="">1</option>
						<option value="">2</option>
						<option value="">3</option>
						<option value="">4</option>
						<option value="">5</option>
						<option value="">6</option>
						<option value="">7</option>
					</select>

					<div class="addArticlesForm__group">      
						<input type="text" name="addArticleCaption"  required>
						<span class="highlight"></span>
						<span class="bar"></span>
						<label>Заголовок статьи</label>
					</div>

					<div class="articlesEditor">
						<div id="sample">
							<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 
							<script type="text/javascript">bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });</script>

							<textarea name="area2" style="width: 100%;height: 180px;">
							</textarea><br>
							<h4>
							</h4>
						</div>
					</div>
				</div>
				<div class="addArticlesForm__right">
					<div class="addArticlesForm__right--buttons">

						<label class="CUSTOMBUTT1">
							<div class="customFileImg">
								<div class="customFileImg__img"></div>
								<div class="customFileImg__text">Выбрать медиа</div>
							</div>
							<div class="inptHideImg">
								<input name="prewImgNews"  multiple required  class="addArticlesMedia" type="file" >
							</div>
						</label>

						<label class="CUSTOMBUTT1">
							<div class="customFileDocs">
								<div class="customFileDocs__img"></div>
								<div class="customFileDocs__text">Выбрать документы</div>
							</div>
							<div class="inptHideDocs">
								<input name="prewDocsNews" size="50" required multiple class="asdasd" type="file" id="customFileDocs1" >
							</div>
						</label>

						

					</div>	
					
					<!-- ************ -->
					<div class="addImgForm__content">
						<div class="articlesImagePrev"></div>
					</div>
					<div class="addDocsForm__content">

					</div>

					
					
					<!-- ********** -->

				</div>





			</form>
		</div>
	</section>




</section>



<!--  -->
@stop