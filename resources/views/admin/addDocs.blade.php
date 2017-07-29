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
					<li class="activeItem"><a href="#">Добавление документов</a></li>
					<li><a href="#">Добавление статей</a></li>
					<li><a href="#">Добавление уникальных страниц</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section>
		<div class="addDocs">
			<h3>Добавление документа</h3>

			<form action="#" class="addDocsForm">
				<div class="addDocsButtonWrapper">
					<label class="CUSTOMBUTT">
						<div class="customFileDocs">
							<div class="customFileDocs__img"></div>
							<div class="customFileDocs__text">Выбрать документы</div>
						</div>
						<div class="inptHideDocs">
							<input name="prewImgNews" size="50" required multiple class="asdasd" type="file" id="customFileDocs1" >

						</div>
					</label>

					<button type="submit">Добавить документы</button>
				</div>

				<div class="addDocsForm__content">

				</div>
				

			</form>
			

		</div>
	</section>


</section>	
<!--  -->
@stop