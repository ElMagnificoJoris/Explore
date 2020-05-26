@extends("layouts.app",['title'=>"laravel"])
@section("content")




<div class="slideshow-container">
<div class="slideshow-inner">
<div class="mySlides fade">
<img src="{{ asset('images/CIMG2371.JPG') }}" style='width: 100%;' alt="sally lightfoot crab"/>
    <div class="text">Sally Lightfoot Crab</div>
  </div>
<div class="mySlides fade">
<img  src="{{ asset('images/DSCN1055.JPG') }}" style='width: 100%;' alt="fighting nazca boobies"/>
    <div class="text">A scuffle between two Nazca Boobies</div>
  </div>
<div class="mySlides fade">
<img  src="{{ asset('images/DSCN1619.JPG') }}" style='width: 100%;' alt="otovalo waterfall"/>
    <div class="text">A waterfall discovered on a hike in Otovalo</div>
  </div>
</div>

<a class="prev" onclick='plusSlides(-1)'>&#10094;</a>
  <a class="next" onclick='plusSlides(1)'>&#10095;</a>
</div>
<br/>
<div style='text-align: center;'>
  <span class="dot" onclick='currentSlide(1)'></span>
  <span class="dot" onclick='currentSlide(2)'></span>
  <span class="dot" onclick='currentSlide(3)'></span>
</div>

<img  src="{{ asset('images/DSCN1619.JPG') }}"/>
@endsection
