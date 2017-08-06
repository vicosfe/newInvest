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
					<li><a href="/admin/edit/projects">Добавление проекта</a></li>
					<li class="activeItem"><a href="/admin/edit/articles">Добавление статей</a></li>
					<li><a href="/admin/edit/pages">Добавление уникальных страниц</a></li>
				</ul>
			</div>
		</div>
	</section>
	<section>
		<div class="addArticles">
			<h3>Добавление статьи</h3>
			<?php $id = (!empty($item->id))? "/".$item->id :""; ?>
			<form class="addArticlesForm" action="/admin/add/articles{{$id}}" method="POST" enctype="multipart/form-data">
				<div class="addArticlesForm__left">
					<select  required name="addArticlesSelect1" id="addArticlesSelect1">
						<option value="0">Нет</option>
						@foreach($menu  as $m)
							<option value="{{$m->id}}" @if($parrent_cat == $m->id or $cat == $m->id) selected @endif>{{$m->title}}</option>
						@endforeach
					</select>
					@foreach($menu  as $m)
						<select name="addArticlesSelect2" id="child{{$m->id}}" class="childs" @if($parrent_cat != $m->id)  style="display:none;"  @endif>
							<option value="0">Нет</option>
							@foreach($m["items"]  as $mm)
								<option value="{{$mm->id}}" @if($cat == $mm->id or $parrent_cat == $mm->id) selected @endif>{{$mm->title}}</option>
							@endforeach
						</select>
					@endforeach


					<div class="addArticlesForm__group">      
						<input type="text" name="addArticleCaption"  required value="{{$item->title}}">
						<span class="highlight"></span>
						<span class="bar"></span>
						<label>Заголовок статьи</label>
					</div>

					<div class="articlesEditor">
						<div id="sample">
							<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 
							<script type="text/javascript">bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });</script>

							<textarea name="area2" style="width: 100%;height: 180px;">{!! $item->description !!}
							</textarea><br>
							<h4>
							</h4>
						</div>
					</div>
					<button class="goNews">Добавить статью</button>
				</div>
				<div class="addArticlesForm__right">
					<div class="addArticlesForm__right--buttons">

						<label class="CUSTOMBUTT1">
							<div class="customFileImg">
								<div class="customFileImg__img"></div>
								<div class="customFileImg__text">Выбрать медиа</div>
							</div>
							<div class="inptHideImg">
								<input name="prewImgNews[]"  multiple  class="addArticlesMedia" type="file" >
							</div>
						</label>

						<label class="CUSTOMBUTT1">
							<div class="customFileDocs">
								<div class="customFileDocs__img"></div>
								<div class="customFileDocs__text">Выбрать документы</div>
							</div>
							<div class="inptHideDocs">
								<input name="prewDocsNews[]" size="50"  multiple class="asdasd" type="file" id="customFileDocs1" >
							</div>
						</label>

						{{csrf_field()}}

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

<script>
	$(document).ready(function(){
       
	    $("#addArticlesSelect1").on("change",function () {
            $(".childs").not("#child"+$(this).val()).hide();
            $(".childs").not("#child"+$(this).val()).attr("disabled","disabled");
			$("#child"+$(this).val()).show();
            $("#child"+$(this).val()).removeAttr("disabled");
        })
	})
</script>

<!--  -->
@stop