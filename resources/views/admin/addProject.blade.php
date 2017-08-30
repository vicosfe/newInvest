@extends('admin.adminWrap')
@section('content')
<!--  -->
<section style="height: calc(100% - 70px); margin-left: 105px;margin-top: 70px;">

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
			<form action="/admin/add/projects" class="addProjectsForm addPagesForm" method="POST" enctype="multipart/form-data">




				<div class="addProjectsForm__left">
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
					<div class="addProjectsForm__group">      
						<input type="text" name="addProjectsCaption"  required value="{{$item->title}}">
						<span class="highlight"></span>
						<span class="bar"></span>
						<label>Название проекта</label>
					</div>
					{{csrf_field()}}

                  @if(isset($item->description))  <?$data = json_decode($item->description);?>
					@foreach($data as $d)
						<div class="asdf">
							<hr style='opacity: 0.4;margin: 0px 0px 20px 0px;'>
							<div class="addProjectsForm__group">
								<input type="text" name="addProjectsC1"  required  value="{{$d->title}}">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Заголовок пункта 1</label>
							</div>

							<div class="projectsEditor">
								<div id="sample">
									<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
									<script type="text/javascript">
                                        //<![CDATA[
                                        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
                                        //]]>
									</script>

									<textarea name="addProjArea1" style="width: 100%;height: 180px;">{!!$d->d!!}</textarea><br>

								</div>


							</div>
						</div>
					@endforeach
					@endif
					<hr style='opacity: 0.4;margin: 0px 20px 20px 0px;'>
					<div class="wrapperEditProjBut">

						<div class="circlePlus" id="govno" data-count = 1><span>+</span></div>


						<div class="circlePlus" id="govno2" data-count = 1><span>-</span></div>
					</div>
					<input type="hidden" value="1" name="count" id="hidCount">


			<div class="addProjectsForm__group">      
				<input type="text" name="addProjectsPrice"  required >
				<span class="highlight"></span>
				<span class="bar"></span>
				<label>Ориентировачная стоимость проекта</label>
			</div>

			<button class="goProjects" type="submit">Добавить проект</button>

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
                var html = "<div id='c"+count+"'><hr style='opacity: 0.4;margin: 0px 0px 20px 0px;'>";
                html +="<div class='addProjectsForm__group'>";
                html +="<input type='text' name='addProjectsC"+count+"'  required >";
                html +="<span class='highlight'></span>";
                html +="<span class='bar'></span>";
                html +="<label>Заголовок пункта "+count+"</label>";
                html +="</div><div class='projectsEditor'><div id='sample'>";
                html +="<textarea name='addProjArea"+count+"' id='area"+count+"' style='width: 100%;height: 180px;'></textarea><br>";
                html +="</div></div></div>";
                $(this).data("count",count);
                $("#govno2").data("count",count);
                $("#hidCount").val(count);
                $(".asdf").append(html);

                var id =  "area"+count;
                var area2 = new nicEditor({fullPanel : true}).panelInstance(id);

            })


            $("#addPages1").on("change",function () {
                $(".childs").not("#child"+$(this).val()).hide();
                $(".childs").not("#child"+$(this).val()).attr("disabled","disabled");
                $("#child"+$(this).val()).show();
                $("#child"+$(this).val()).removeAttr("disabled");
            })




        })







	</script>
</section>	
<!--  -->
@stop