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
        <a href="/article/1">
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
     @if(count($ad))<div class="AttentionOfCitizens">
     <div class="AttentionOfCitizens__wrapper">
      <div class="AttentionOfCitizens__wrapper--left">
        <p>!</p>
      </div>
      <div class="AttentionOfCitizens__wrapper--right">
        <h3>{{$ad->title}}</h3>
        <p>{!! $ad->text !!} </p>
      </div>
    </div>
  </div>
  @endif
  <div class="centerContent__wrapper--leftContent">

   <!--**********************БЛОК сайдбара (левый)******************-->



   <!--**********************БЛОК НОВОСТЕЙ ******************-->

   <div class="centerContent__news ">
    <div class="top__itemSmall" style="background-image: url({{ $news[0]->img }});">
      <div class="top__itemSmall--text">
        <div>{!! $news[0]->title !!}</div>
      </div>
      <div class="top__itemSmall--blockFilter"></div>
      <a href="/news/{{ $news[0]->id}}"></a>
    </div>


    <div class="top__itemSmall" style="background-image: url({{ $news[1]->img }});">
      <div class="top__itemSmall--text">
        <div>{!! $news[1]->title !!}</div>
      </div>
      <div class="top__itemSmall--blockFilter"></div>
      <a href="/news/{{ $news[1]->id}}"></a>
    </div>


    <div class="top__itemSmall" style="background-image: url({{ $news[2]->img }});">
      <div class="top__itemSmall--text">
        <div>{!! $news[2]->title !!}</div>
      </div>
      <div class="top__itemSmall--blockFilter"></div>
      <a href="/news/{{ $news[2]->id}}"></a>
    </div>



    <div class="top__itemLarge" style="background-image: url({{ $news[3]->img }});">
      <div class="top__itemLarge--text">
        <div>{!! $news[3]->title !!}</div>
      </div>
      <div class="top__itemLarge--blockFilter"></div>
      <a href="/news/{{ $news[3]->id}}"></a>
    </div>

    <div class="top__itemSmall" style="background-image: url({{ $news[4]->img }});">
      <div class="top__itemSmall--text">
        <div>{!! $news[4]->title !!}</div>
      </div>
      <div class="top__itemSmall--blockFilter"></div>
      <a href="/news/{{ $news[4]->id}}"></a>
    </div>
    <div class="top__itemSmall" style="background-image: url({{ $news[5]->img }});">
      <div class="top__itemSmall--text">
        <div>{!! $news[5]->title !!}</div>
      </div>
      <div class="top__itemSmall--blockFilter"></div>
      <a href="/news/{{ $news[5]->id}}"></a>
    </div>

    <div class="top__itemLarge" style="background-image: url({{ $news[6]->img }});">
      <div class="top__itemLarge--text">
        <div>{!! $news[6]->title !!}</div>
      </div>
      <div class="top__itemLarge--blockFilter"></div>
      <a href="/news/{{ $news[6]->id}}"></a>
    </div>

    <div class="top__itemSmall" style="background-image: url({{ $news[7]->img }});">
      <div class="top__itemSmall--text">
        <div>{!! $news[7]->title !!}</div>
      </div>
      <div class="top__itemSmall--blockFilter"></div>
      <a href="/news/{{ $news[7]->id}}"></a>
    </div>


    <div class="top__itemSmall" style="background-image: url({{ $news[8]->img }});">
      <div class="top__itemSmall--text">
        <div>{!! $news[8]->title !!}</div>
      </div>
      <div class="top__itemSmall--blockFilter"></div>
      <a href="/news/{{ $news[8]->id}}"></a>
    </div>


    <div class="top__itemSmall" style="background-image: url({{ $news[9]->img }});">
      <div class="top__itemSmall--text">
        <div>{!! $news[9]->title !!}</div>
      </div>
      <div class="top__itemSmall--blockFilter"></div>
      <a href="/news/{{ $news[9]->id}}"></a>
    </div>


  </div>

</div>



</div> 




<!--**********************БЛОК сайдбара(правый)******************-->

<div class="sideBarMainRight">
  @if(count($poll))
  <div class="question">
    <div class="question__caption">
      <h2>Опрос</h2>
    </div>
    <form action="/" class="questionForm" method="POST">
      {{csrf_field()}}
      <p>{{$poll->title}}</p>
      <?$data = json_decode($poll->data);?>
      @foreach($data as $d)
      <div class="inpWrapper">
        <input  name="question" type="radio" value="{{$d}}" id="kredit{{$d}}"> <label for="kredit{{$d}}">{{$d}}</label>
      </div>
      @endforeach
      <input type="hidden" name="poll_id" value="{{$poll->id}}">
      <button class="replyButton">Ответить</button>
    </form>

    @elseif(count($result))
    <div class="question">
      <div class="question__caption">
        <h2>Опрос</h2>
      </div>
      <div class="question__after">
        <p>  <span>Результаты опроса </span>"{{$result["title"]}}"</p>
        @foreach($result["items"] as $r)

        <div class="inpWrapper">
        <p @if($answ->value == $r["title"]) class="inpWrapperSelected" @endif>{{$r["title"]}} - {{$r["res"]}}%</p>
       </div>

       @endforeach
       <div class="inpWrapper">as
        <div class="wrapperProgressBar__item">
          <div class="wrapperProgressBar__item--currentAmount">
            <span style="color: #f51d45" id="currentAmount4" data-max="150">0</span>
          </div>
          <div class="wrapperProgressBar__item--progressBar ">
            <div class="brr"></div>
            <div class="progressBarCurrentAmount">
              <span>209</span>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
  @endif
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

  @if(count($media))<div class="media" >@include('mediaSlide')</div>@endif
</div>
@include('usefulLinks')


@stop