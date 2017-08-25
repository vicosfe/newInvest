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
					<li><a href="/admin/edit/news">Добавление новостей</a></li>

					<li><a href="/admin/edit/projects">Добавление проекта</a></li>
					<li><a href="/admin/edit/articles">Добавление статей</a></li>
					<li class="activeItem1"><a href="/admin/edit/pages">Добавление уникальных страниц</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section>
		<div class="addUniquePage">

			<!-- ************************************************** -->

			<div class="addPagesLeft">
				<h3>Добавление уникальной страницы</h3>

				<form action="/admin/add/pages" class="addPagesForm" enctype="multipart/form-data" method="POST">
					{{csrf_field()}}
					<select name="addPages1" id="addPages1">
						<option value="0">Нет</option>
						@foreach($menu  as $m)
							<option value="{{$m->id}}" @if($parrent_cat == $m->id or $cat == $m->id) selected @endif>{{$m->title}}</option>
						@endforeach
					</select>
					@foreach($menu  as $m)
						<select name="addPages2" id="child{{$m->id}}" class="childs" @if($parrent_cat != $m->id)  style="display:none;"  @endif>
							<option value="0">Нет</option>
							@foreach($m["items"]  as $mm)
								<option value="{{$mm->id}}" @if($cat == $mm->id or $parrent_cat == $mm->id) selected @endif>{{$mm->title}}</option>
							@endforeach
						</select>
					@endforeach

					<div class="pagesEditor">
						<div id="sample">
							<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 
							<script type="text/javascript">bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });</script>

							<textarea name="area0" style="width: 100%;height: 180px;; max-width: 80%">{{$item->title}}
							</textarea><br>
							<h4>
							</h4>
						</div>
					</div>
					<div class="asdf">
					@if(count($paths[0]))
						@foreach($paths as $p)

						<hr style='opacity: 0.4;margin: 0px 20px 20px 0px;'>

					<div class="addPagesForm__group">      
						<input type="text" name="addArticleCaption1"  required value="{{$p->title}}">
						<span class="highlight"></span>
						<span class="bar"></span>
						<label>Заголовок документа</label>
					</div>
					<label class="CUSTOMBUTT">
						<div class="customFileDocs">
							<div class="customFileDocs__img"></div>
							<div class="customFileDocs__text">Добавить документы</div>
						</div>
						<div class="inptHideDocs">
							<input name="prewDocsPages1[]" size="50"  multiple class="asdasd" data-id='1' type="file" id="customFileDocs1" >

						</div>
					</label>

					<div class="addDocsForm__content1">
						@if(count($p->docs))
							@foreach($p->docs as $m)
								@if(isset($m->title))
									<div class="addDocsFormItem">
										<div class="addDocsFormItemDelete">
											<a href="/admin/docs/remove/p/{{$m->id}}">x</a>
										</div>
										<div class="addDocsFormItem__img"></div>
										<div class="addDocsFormItem__text">{{$m->title}}</div>
									</div>
								@endif
							@endforeach
						@endif
					</div>

					<div class="pagesEditor2">
						<div id="sample">
							<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 
							<script type="text/javascript">bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });</script>

							<textarea name="area1" style="width: 100%;height: 180px; max-width: 80%">
								{{$p->description}}
							</textarea><br>
							<h4>
							</h4>
						</div>
					</div>

					@endforeach
						@else

							<div class="addPagesForm__group">
								<input type="text" name="addArticleCaption1"  required value="">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Заголовок документа 1</label>
							</div>
							<label class="CUSTOMBUTT">
								<div class="customFileDocs">
									<div class="customFileDocs__img"></div>
									<div class="customFileDocs__text">Добавить документы</div>
								</div>
								<div class="inptHideDocs">
									<input name="prewDocsPages1[]" size="50"  multiple class="asdasd" data-id='1' type="file" id="customFileDocs1" >

								</div>
							</label>

					@endif
					</div>
					<hr style='opacity: 0.4;margin: 0px 20px 20px 0px;'>
					<div class="wrapperEditProjBut">

						<div class="circlePlus" id="govno" data-count = 1><span>+</span></div>


						<div class="circlePlus" id="govno2" data-count = 1><span>-</span></div>
					</div>
					<input type="hidden" value="1" name="count" id="hidCount">
					<button type="submit">Добавить Статью</button>
				</form>
				<div class="razdelitel"></div>
			</div>





			<div class="addPagesRight">
				<h3>Пример добавление уникальной страницы</h3>
				<div class="addPagesRight__content">
					<div class="addPagesRightItem">
						<div class="addPagesRightItem__circle">
							<p>1</p>
						</div>	
						<div class="addPagesRightItem__text">Текст статьи</div>
					</div>

					<div class="addPagesRightItem">
						<div class="addPagesRightItem__circle">
							<p>2</p>
						</div>	
						<div class="addPagesRightItem__text">Заголовок документа</div>
					</div>

					<div class="addPagesRightItem">
						<div class="addPagesRightItem__circle">
							<p>3</p>
						</div>	
						<div class="addPagesRightItem__text">Прикреплённый документ</div>
					</div>

					<div class="addPagesRightItem">
						<div class="addPagesRightItem__circle">
							<p>4</p>
						</div>	
						<div class="addPagesRightItem__text">Текст принадлежащий документу</div>
					</div>
					
					<div class="addPagesRight__content--wrapper">
						<div class="textArticlePrimer">
							Создание и обеспечение функционирования специализированного раздела об инвестиционной деятельности города Махачкалы на официальном сайте Администрации города.Создание и обеспечение функционирования специализированного раздела об инвестиционной деятельности города Махачкалы на официальном сайте Администрации города.
							<div class="addPagesRightItem__circle1">
								<p>1</p>
							</div>	

						</div>
						<div class="captionDocPrimer"><p>Дорожная карта</p>
							<div class="addPagesRightItem__circle2">
								<p>2</p>
							</div>	
						</div>
						<div class="fileDocPrimer"><p>Постановление</p> <img src="../../public/images/linkFile.png" alt="">
							<div class="addPagesRightItem__circle3">
								<p>3</p>
							</div>	
						</div>
						<div class="textFileDocPrimer">
							<p>
								Создание и обеспечение функционирования специализированного раздела об инвестиционной деятельности города Махачкалы на официальном сайте Администрации города.
							</p>
							<div class="addPagesRightItem__circle4">
								<p>4</p>
							</div>	
						</div>

					</div>

				</div>
			</div>

			<!-- ************************************************** -->


		</div>
	</section>

	<script>
        $("#govno2").on("click",function () {
            var count = $(this).data("count");
            if(count>1){

                $("#c"+count).remove();
                count--;
                $(this).data("count",count);
                $("#govno").data("count",count);
            }
        })

		$(document).ready(function () {
            $("#govno").on("click",function () {
                var count = $(this).data("count");
                count++;
                var html = "<div id='c"+count+"'> <hr style='opacity: 0.4;margin: 0px 20px 20px 0px;'><div class='addPagesForm__group'> ";
                html += "<input type='text' name='addArticleCaption"+count+"'  required >";
                html += "<span class='highlight'></span>";
                html += "<span class='bar'></span>";
                html += "<label>Заголовок документа "+count+"</label>";
                html += "</div>";
                html += "<label class='CUSTOMBUTT'>";
                html += "<div class='customFileDocs'>";
                html += "<div class='customFileDocs__img'></div>";
                html += "<div class='customFileDocs__text'>Добавить документы</div>";
                html += "</div>";
                html += "<div class='inptHideDocs'>";
                html += "<input name='prewDocsPages"+count+"[]' size='50'  multiple class='asdasd' data-id='"+count+"' type='file' id='customFileDocs"+count+"' >";
                html += "</div>";
                html += "</label>";
                html += "<div class='addDocsForm__content"+count+"'>";
                html += "</div>";
                html += "<div class='pagesEditor2'>";
                html += "<div id='sample'>";
                html += "<textarea name='area"+count+"' id='area"+count+"' style='width: 100%;height: 180px; max-width: 420px'>";
                html += "</textarea><br>";
                html += "<h4>";
                html += "</h4>";
                html += "</div>";
                html += "</div></div>";
                $(this).data("count",count);
                $("#govno2").data("count",count);
                $("#hidCount").val(count);
                $(".asdf").append(html);

				var id =  "area"+count;
				var area2 = new nicEditor({fullPanel : true}).panelInstance(id);

                $(".asdasd").on("change",function () {
                    var id = ".addDocsForm__content"+$(this).data("id");
                    var id2 = "customFileDocs"+$(this).data("id");
                    var customFileDocs1 =  document.getElementById(id2);
                    if (customFileDocs1.files.length == 0) {
                        return  0;
                    }else{

                        files = this.files;
                        $(id).html("");
                        for(var a=0;a<files.length;a++)

                            $(id).append('<div class="addDocsFormItem"><div class="addDocsFormItem__img"></div><div class="addDocsFormItem__text">' + files[a].name + '</div></div>');
                    }
                });


            })
            $("#addPages1").on("change",function () {
                $(".childs").not("#child"+$(this).val()).hide();
                $(".childs").not("#child"+$(this).val()).attr("disabled","disabled");
                $("#child"+$(this).val()).show();
                $("#child"+$(this).val()).removeAttr("disabled");
            })



            $(".asdasd").on("change",function () {
                var id = ".addDocsForm__content"+$(this).data("id");
                var id2 = "customFileDocs"+$(this).data("id");
                var customFileDocs1 =  document.getElementById(id2);
                if (customFileDocs1.files.length == 0) {
                    return  0;
                }else{

                    files = this.files;
                    $(id).html("");
                    for(var a=0;a<files.length;a++)

                        $(id).append('<div class="addDocsFormItem"><div class="addDocsFormItem__img"></div><div class="addDocsFormItem__text">' + files[a].name + '</div></div>');
                }
            });
        })

	</script>
</section>	
<!--  -->
@stop