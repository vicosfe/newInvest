@extends('admin.adminWrap')
@section('content')
<!--  -->
<section style="height: calc(100% - 70px);">
	@include('admin.popUpDeleteNews')
	@include('admin.editTopPanel')

	<section>
		<div class="addContent">
			<div class="addContent__header">
				<a href="/admin/home">
					<div class="addContent__header--arrow">
						<div class="imgArrow"></div>
					</div>
				</a>
				
				<ul>
					<li class="activeItem"><a href="/admin/change/news">Редактирование новостей</a></li>
					<li><a href="/admin/change/docs">Редактирование документов</a></li>
					<li><a href="/admin/change/articles">Редактирование статей</a></li>
					<li><a href="/admin/change/pages">Редактирование уникальных страниц</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section>
		<div class="changeNews">
			
			<!-- @include('admin.editContentNews') -->
			@include('admin.blabla')

	</div>


</section>






<!--  -->
@stop