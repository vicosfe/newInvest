		<h3>Редактирование проекта</h3>
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

					<textarea name="addProjArea" style="width: 383px;height: 180px;"></textarea><br>

				</div>


			</div>

			<div class="contentForAdd">

			</div>

			<div class="addProjectsForm__group">      
				<input type="text" name="addProjectsCaption"  required >
				<span class="highlight"></span>
				<span class="bar"></span>
				<label>Ориентировачная стоимость проекта</label>
			</div>


			<div class="wrapperEditProjBut">
				<button type="submit" class="goProjects">Сохранить изменения</button>
				<div class="circlePlus"><span>+</span></div>

			</div>



		</div>


		<div class="addProjectsForm__right">

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


<!-- 

	<div class="addProjectsForm__group"><input type="text" name="addProjectsCaption"  required ><span class="highlight"></span><span class="bar"></span><label>Заголовок пункта</label></div><div class="projectsEditor"><div id="sample"><script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script><script type="text/javascript">bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });</script><textarea name="addProjArea" style="width: 391px;height: 180px;"></textarea><br></div></div>

	<script>
	$(document).ready(function () {
		var script = document.createElement("script");
		script.type = "text/javascript";
		script.src = "http://js.nicedit.com/nicEdit-latest.js"; // use this for linked script
		var circlePlus = $(".circlePlus");
		var contentForAdd = $(".contentForAdd");
		$(circlePlus).on("click", function () {
			$(contentForAdd).append('div class="addProjectsForm__group"><input type="text" name="addProjectsCaption"  required ><span class="highlight"></span><span class="bar"></span><label>Заголовок пункта</label></div><div class="projectsEditor"><div id="sample"><script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js">' + '</' + 'script><script type="text/javascript">bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });' + '</' + 'script><textarea name="addProjArea" style="width: 391px;height: 180px;"></textarea><br></div></div>'
				);
		});
	});
		

	</script> -->







