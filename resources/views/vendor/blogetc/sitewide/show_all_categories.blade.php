<h5>Catégories</h5>
<ul class="nav">
  <li class="nav-item">
  <a class='nav-link btn btn-primary btn-sm m-1' href='{{ route('blogetc.index') }}'>Aucune catégorie</a>
  </li>
    @foreach(\WebDevEtc\BlogEtc\Models\BlogEtcCategory::orderBy("category_name")->limit(200)->get() as $category)
        <li class="nav-item">
            <a class='nav-link btn btn-primary btn-sm m-1' href='{{$category->url()}}'>{{$category->category_name}}</a>
        </li>
    @endforeach
</ul>
<br>
