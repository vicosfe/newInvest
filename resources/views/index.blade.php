@extends('wrap')
@section('content')
@include('bigSlider')
@include('feedBackForm')
<section>
  <div class="downNavigation centerBlock">
    <nav>
      <ul>
        <li class="downNavigation__item">
          <a href="#">
            <div class="downNavWrapper">
             <div class="downNavigation__item-img1 downNavIcon"></div>
             <div class="downNavigation__item-text">Путеводитель инвестора</div>
           </div>
         </a>
       </li>
       <li class="downNavigation__item">
        <a href="aboutMakhach">
          <div class="downNavWrapper">
            <div class="downNavigation__item-img2 downNavIcon"></div>
            <div class="downNavigation__item-text">О Махачкале</div>
          </div>
        </a>
      </li>
      <li class="downNavigation__item">
        <a href="#">
          <div class="downNavWrapper">
            <div class="downNavigation__item-img3 downNavIcon"></div>
            <div class="downNavigation__item-text">Бизнес-навигатор</div>
          </div>
        </a>
      </li>
      <li class="downNavigation__item singleWindJS">
        <a href="#">
          <div class="downNavWrapper">
           <div class="downNavigation__item-img4 downNavIcon"></div>
           <div class="downNavigation__item-text">Единое окно</div>
         </div>
       </a>
     </li>
   </ul>
 </nav>
</div>

</section>

<section class="mainPageCenterContent">
  <div class="centerContent centerBlock">
   <div class="centerContent__wrapper">
    <div class="AttentionOfCitizens">
      <div class="AttentionOfCitizens__wrapper">
        <div class="AttentionOfCitizens__wrapper--left">
          <p>!</p>
        </div>
        <div class="AttentionOfCitizens__wrapper--right">
          <h3>Вниманию горожан!</h3>
          <p>Махачкалинские электросети обращают внимание жителей города, а также руководителей различных форм собственности на то, что за период с января по апрель 2017 г. нами было зафиксировано 10 технологических нарушений (аварий) в электрических сетях города, произошедших вследствие различного рода воздействий на них посторонними лицами и организациями. </p>
        </div>
      </div>
    </div>
    <div class="centerContent__wrapper--leftContent">

     <!--**********************БЛОК сайдбара (левый)******************-->



     <!--**********************БЛОК НОВОСТЕЙ ******************-->

     <div class="centerContent__news ">
      <div class="top__itemSmall" style="background-image: url(/public/images/news1.png);">
        <div class="top__itemSmall--text">
          <div>В КАЛУЖСКОЙ ОБЛАСТИ ОТКРЫТО <br> РОССИЙСКО-ЧЕШСКОЕ ПРЕДПРИЯТИЕ ПО ВЫПУСКУ САНИТАРНОЙ КЕРАМИКИ</div>
        </div>
        <div class="top__itemSmall--blockFilter"></div>
        <a href="#"></a>
      </div>


      <div class="top__itemSmall" style="background-image: url(/public/images/news2.png);">
        <div class="top__itemSmall--text">
          <div>ДЕНЬ ОТКРЫТЫХ ДВЕРЕЙ В КАЛУЖСКОМ КОЛЛЕДЖЕ СЕРВИСА И ДИЗАЙНА С КОМПАНИЕЙ БОСКО</div>
        </div>
        <div class="top__itemSmall--blockFilter"></div>
        <a href="#"></a>
      </div>


      <div class="top__itemSmall" style="background-image: url(/public/images/news1.png);">
        <div class="top__itemSmall--text">
          <div>В КАЛУЖСКОЙ ОБЛАСТИ ОТКРЫТО <br> РОССИЙСКО-ЧЕШСКОЕ ПРЕДПРИЯТИЕ ПО ВЫПУСКУ САНИТАРНОЙ КЕРАМИКИ</div>
        </div>
        <div class="top__itemSmall--blockFilter"></div>
        <a href="#"></a>
      </div>



      <div class="top__itemLarge" style="background-image: url(/public/images/news3.png);">
        <div class="top__itemLarge--text">
          <div>АНАТОЛИЙ АРТАМОНОВ: «В КАЖДОМ УГОЛКЕ НАШЕЙ ОБЛАСТИ ТРУДЯТСЯ ТАЛАНТЛИВЫЕ ЛЮДИ»</div>
        </div>
        <div class="top__itemLarge--blockFilter"></div>
        <a href="#"></a>
      </div>

      <div class="top__itemSmall" style="background-image: url(/public/images/news4.png);">
        <div class="top__itemSmall--text">
          <div>ДЕНЬ ОТКРЫТЫХ ДВЕРЕЙ В КАЛУЖСКОМ КОЛЛЕДЖЕ СЕРВИСА И ДИЗАЙНА С КОМПАНИЕЙ БОСКО</div>
        </div>
        <div class="top__itemSmall--blockFilter"></div>
        <a href="#"></a>
      </div>

      <div class="top__itemSmall" style="background-image: url(/public/images/news4.png);">
        <div class="top__itemSmall--text">
          <div>ДЕНЬ ОТКРЫТЫХ ДВЕРЕЙ В КАЛУЖСКОМ КОЛЛЕДЖЕ СЕРВИСА И ДИЗАЙНА С КОМПАНИЕЙ БОСКО</div>
        </div>
        <div class="top__itemSmall--blockFilter"></div>
        <a href="#"></a>
      </div>

      <div class="top__itemLarge" style="background-image: url(/public/images/news3.png);">
        <div class="top__itemLarge--text">
          <div>АНАТОЛИЙ АРТАМОНОВ: «В КАЖДОМ УГОЛКЕ НАШЕЙ ОБЛАСТИ ТРУДЯТСЯ ТАЛАНТЛИВЫЕ ЛЮДИ»</div>
        </div>
        <div class="top__itemLarge--blockFilter"></div>
        <a href="#"></a>
      </div>




    </div>

  </div>



</div> 




<!--**********************БЛОК сайдбара(правый)******************-->

<div class="sideBarMainRight">
  <div class="question">
    <div class="question__caption">
      <h2>Опрос</h2>
    </div>
    <form action="" class="questionForm">
      <p>Кто и как быстро привлек деньги и не пожалел?</p>
      <div class="inpWrapper">
        <input  name="question[]" type="radio" value="kredit" id="kredit"> <label for="kredit">Кредит</label>
      </div>
      <div class="inpWrapper">
        <input  name="question[]" type="radio" value="investor" id="investor"> <label for="investor">Инвестор</label>
      </div>
      <div class="inpWrapper">
        <input  name="question[]" type="radio" value="microzaym" id="microzaym"> <label for="microzaym">Микрозайм</label>
      </div>
      <div class="inpWrapper">
        <input  name="question[]" type="radio" value="friends" id="friends"> <label for="friends">Друзья</label>
      </div>
      <div class="inpWrapper">
        <input  name="question[]" type="radio" value="family" id="family"> <label for="family">Семья</label>
      </div>
      <div class="inpWrapper">
        <input  name="question[]" type="radio" value="subsidiya" id="subsidiya"> <label for="subsidiya">Субсидия</label>
      </div>
      <button class="replyButton">Ответить</button>
    </form>
  </div>
  <!-- НОВОСТИ С МКАЛА -->
  <div class="newsMKALA">
    <div class="newsMKALA__caption">
      <h2>Новости с mkala</h2>
    </div>
    <div class="newsMKALA__newsBlock load ">
      <div class="newsMKALA__newsBlock--content load"></div>
      <div class="linkInMkalaNews"><a target="_blank" href="http://www.mkala.ru/info/news/">Посмотреть еще</a></div>    
    </div>

  </div>
  <div class="dispatch">
    <div class="dispatch__wrapper">
      <div class="dispatch__wrapper--caption">
        <h3>Рассылка</h3>
      </div>
      <div class="dispatch__wrapper--description">
        <p>
          Подпишитесь на рассылку и получайте последние новости первыми.
        </p>
      </div>
      <div class="dispatch__form">
        <form action="#">
          <div class="dispatch__inputWrapper">
            <input id="dispatch__form--text" type="email" required="" placeholder=" ">
            <label class="dispatch__form--label" for="dispatch__form--text">Email</label> 
            
          </div>
          <button type="submit">Отправить</button>
        </form>
      </div>
    </div>
  </div>

</div>
</div>
</section>

<script>

</script>
<div class="wrapper__media centerBlock">
    <h2>МЕДИА</h2>
@include('mediaSlide')
</div>
@include('usefulLinks')


@stop