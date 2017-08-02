@extends('admin.adminWrap')
@section('content')
<!--  -->
<section style="height: calc(100% - 70px);">
	<div class="admMainPage">

		<a href="/admin/edit/news">
			<div class="admMainItemWrapper">
				<div class="wrapperaue">
					<div class="admMainPage__item mItem1"></div>	
					<p>Добавить</p>
				</div>
				
			</div>
		</a>

		<a href="/admin/edit/news">
			<div class="admMainItemWrapper">
				<div class="wrapperaue">
					<div class="admMainPage__item mItem2"></div>	
					<p>Редактирование</p>
				</div>
				
			</div>
		</a>

		<a href="/admin/settings">
			<div class="admMainItemWrapper">
				<div class="wrapperaue">
					<div class="admMainPage__item mItem3"></div>	
					<p>Настройки</p>
				</div>
				
			</div>
		</a>
		
	</div>
</section>

<!--  -->
@stop