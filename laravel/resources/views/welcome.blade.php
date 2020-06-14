@extends("layouts.app",['title'=>"laravel"])
@section("content")


<div class=blank>
</div>
<div class="contain">
<div class="slideshow-container">
<div class="slideshow-inner">
<div class="mySlides">
<img id="sld" src="{{ asset('images/greMount.jpg') }}" style='width: 100%;'/>
    <div class="text">Une entreprise au coeur des montagnes</div>
  </div>
<div class="mySlides">
<img id="sld" src="{{ asset('images/part.jpg') }}" style='width: 100%;'/>
    <div class="text">De nombreux partenariats</div>
  </div>
<div class="mySlides">
<img id="sld" src="{{ asset('images/eco.jpg') }}" style='width: 100%;'/>
    <div class="text">Une entreprise dans l'air du temps !</div>
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

<div class="divInf">
  <div class="contentInf">
    <div class="txtInf">
      Explore est une entreprise 100% grenobloise, qui vous accompagne dans la promotion de votre entreprise !
    </div>
    <div class="imgInf">
      <img src="{{ asset('images/gre.jpg') }}"/>
    </div>
  </div>
  <div class="contentInf">
    <div class="imgInf logoInf">
      <img src="{{ asset('images/logo.png') }}"/>
    </div>
    <div class="txtInf">
      Explore possède plusieurs réseaux dans toute la France, et même en Suisse !
    </div>
  </div>
  <div class="contentInf">
    <div class="txtInf">
      Explore c'est une entreprise qui s'adapte à vos besoins !
    </div>
    <div class="imgInf">
      <img src="{{ asset('images/need.jpg') }}"/>
    </div>
  </div>
</div>
</div>
<div class=blank>
</div>
@endsection

@section('scripts')
  <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
@endsection
