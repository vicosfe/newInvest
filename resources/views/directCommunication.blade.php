@extends('wrap')
@section('content')
<!-- ************************************************************************************** -->
<div class="CAPTION">
	<div class="centerBlock">
		<div class="CAPTION__wrapper">
			<p>
				ПРЯМАЯ СВЯЗЬ
			</p>
		</div>
	</div>
</div>

<div class="centerBlock">
	<div class="directCommunicationWrapper">
		<div class="directCommunicationContent">
			<div class="directCommunicationLeft">
				<h3 class="directCommunicationLeft__caption">
					Канал прямой связи с руководством города Махачкалы и структурными подразделениями по вопросам нвестиционного развития.
				</h3>
				<form action="#" class="directCommunicationForm">


					<div class="directCommunicationForm__group">      
						<input type="text" name="directCommunicationfio"  required>
						<span class="highlight"></span>
						<span class="bar"></span>
						<label>ФИО (Обязательно)</label>
					</div>

					<div class="directCommunicationForm__group">      
						<input type="text" name="directCommunicationCompany" required>
						<span class="highlight"></span>
						<span class="bar"></span>
						<label class="directCommunicationLabel">Компания</label>
					</div>

					<div class="directCommunicationForm__group">      
						<input type="email" name="directCommunicationEmail" class="directCommunicationEmail" " required>
						<span class="highlight"></span>
						<span class="bar"></span>
						<label class="directCommunicationLabel">Email</label>
					</div>

					<div class="directCommunicationForm__group">      
						<input type="text" name="directCommunicationMessage" required>
						<span class="highlight"></span>
						<span class="bar"></span>
						<label>Сообщение</label>
					</div>

					<button type="submit" class="directCommunication__button">Отправить</button>

				</form>
			</div>
			<div class="directCommunicationRight">
				<div class="directCommunicationRight__item">
					<div class="directComLeftSect">
						<h3>Мусаев Муса Асхабалиевич</h3>
						<span>Глава города Махачкалы</span>
						<div class="hr"></div>
						<p>Адрес: 367012, г.Махачкала, пл.Ленина, 2 Телефон (рабочий): 67-21-34 <br>E-mail: info@mkala.ru</p>
					</div>
					<div class="directComRightSect" style="background-image: url(/public/images/asdasdasd.png);"></div>
				</div>


				<div class="directCommunicationRight__item">
					<div class="directComLeftSect">
						<h3>Мусаев Муса Асхабалиевич</h3>
						<span>Глава города Махачкалы</span>
						<div class="hr"></div>
						<p>Адрес: 367012, г.Махачкала, пл.Ленина, 2 Телефон (рабочий): 67-21-34 <br>E-mail: info@mkala.ru</p>
					</div>
					<div class="directComRightSect" style="background-image: url(/public/images/asdasdasd.png);"></div>
				</div>


				<div class="directCommunicationRight__item">
					<div class="directComLeftSect">
						<h3>Мусаев Муса Асхабалиевич</h3>
						<span>Глава города Махачкалы</span>
						<div class="hr"></div>
						<p>Адрес: 367012, г.Махачкала, пл.Ленина, 2 Телефон (рабочий): 67-21-34 <br>E-mail: info@mkala.ru</p>
					</div>
					<div class="directComRightSect" style="background-image: url(/public/images/asdasdasd.png);"></div>
				</div>


			</div>
		</div>
	</div>
</div>





<!-- ************************************************************************************** -->
@include('usefulLinks')


@stop