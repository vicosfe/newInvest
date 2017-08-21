<div class="bigSlider">
  <div class="bigSlider__carousel">
    <div class="owl-carousel-header owl-theme">
@foreach($slides as $slide)
    @if(strlen($slide->content))
        {!! $slide->content !!}
        @else
      <div class="itemCarousel">
        <div class="itemCarousel__wrapper" style="background-image: url({{$slide->img}});">
          <div class="itemCarousel__wrapper--text centerBlock">
            <h3>
             {{$slide->title}}
            </h3>
          </div>
        </div>
      </div>
        @endif
 @endforeach

  </div>
</div>
</div>

