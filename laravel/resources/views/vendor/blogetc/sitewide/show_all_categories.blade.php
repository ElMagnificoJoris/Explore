<h5>Post Categories</h5>
<ul class="nav">
  <li class="nav-item">
  <a class='nav-link' href='{{ route('blogetc.index') }}'>Aucune catégorie</a>
  </li>
    @foreach(\WebDevEtc\BlogEtc\Models\BlogEtcCategory::orderBy("category_name")->limit(200)->get() as $category)
        <li class="nav-item">
            <a class='nav-link' href='{{$category->url()}}'>{{$category->category_name}}</a>
        </li>
    @endforeach
</ul>
