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
					<li class="activeItem"><a href="#">Добавление новостей</a></li>
					<li><a href="#">Добавление статей</a></li>
					<li><a href="#">Добавление уникальных страниц</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section>
		<div class="addNews">
			<h3>Добавление новости</h3>
			<form action="#" class="addNewsForm">


				<div class="addNewsForm__left">					
					<div class="addNewsForm__group">      
						<input type="text" name="addNewsCaption"  required>
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

<textarea name="area2" style="width: 100%;height: 180px;">
</textarea><br>
<h4>
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
				<input name="prewImgNews" class="prewImgNews" type="file" >
				
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