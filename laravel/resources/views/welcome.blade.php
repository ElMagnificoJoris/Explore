@extends("layouts.app",['title'=>"laravel"])

@section("content")
  <div class="contain">
    <div class="slideshow-container">
      <div class="slideshow-inner">
        <div class="mySlides">
          <img id="sld" src="{{ asset('images/CIMG2371.JPG') }}" style='width: 100%;' alt="sally lightfoot crab"/>
          <div class="text">Une jolie montagne</div>
        </div>
        <div class="mySlides">
          <img id="sld" src="{{ asset('images/DSCN1055.JPG') }}" style='width: 100%;' alt="fighting nazca boobies"/>
          <div class="text">Un beau paysage</div>
        </div>
        <div class="mySlides">
          <img id="sld" src="{{ asset('images/DSCN1619.JPG') }}" style='width: 100%;' alt="otovalo waterfall"/>
          <div class="text">Une magnifique Photo</div>
        </div>
      </div>

      <a class="prev" onclick='plusSlides(-1)'>&#10094;</a>
      <a class="next" onclick='plusSlides(1)'>&#10095;</a>
    </div>
    
<div class=blank>
</div>
<div class="contain">
<div class="slideshow-container">
<div class="slideshow-inner">
<div class="mySlides">
<img id="sld" src="{{ asset('images/CIMG2371.JPG') }}" style='width: 100%;'/>
    <div class="text">Une jolie montagne</div>
  </div>
<div class="mySlides">
<img id="sld" src="{{ asset('images/DSCN1055.JPG') }}" style='width: 100%;'/>
    <div class="text">Un beau paysage</div>
  </div>
<div class="mySlides">
<img id="sld" src="{{ asset('images/DSCN1619.JPG') }}" style='width: 100%;'/>
    <div class="text">Une magnifique Photo</div>
  </div>
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
          Explore est une entreprise 100% grenobloise qui vous accompagnent dans la promotion de votre produit !
        </div>
        <div class="imgInf">
          <img src="{{ asset('images/CIMG2371.JPG') }}"/>
        </div>
      </div>
      <div class="contentInf">
        <div class="imgInf">
          <img src="{{ asset('images/CIMG2371.JPG') }}"/>
        </div>
        <div class="txtInf">
          fsefsefsefef
        </div>
      </div>
      <div class="contentInf">
        <div class="txtInf">
          fesfesfe
        </div>
        <div class="imgInf">
          <img src="{{ asset('images/CIMG2371.JPG') }}"/>
        </div>
      </div>
    </div>
  </div>
  <div class=blank></div>
@endsection

@section('scripts')
  <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
@endsection
