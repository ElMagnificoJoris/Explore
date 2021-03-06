@extends("blogetc_admin::layouts.admin_layout")
@section("content")

    @forelse ($categories as $category)

        <div class="card m-4" style="max-width: 500px;">
            <div class="card-body">
                <h5 class='card-title'><a href='{{$category->url()}}'>{{$category->category_name}}</a></h5>


                <a href="{{$category->url()}}" class="card-link btn btn-outline-secondary">Voir tous les posts de cette catégorie</a>
                <a href="{{$category->edit_url()}}" class="card-link btn btn-primary">Éditer cette catégorie</a>
                <form

                        onsubmit="return confirm('Es-tu sûr de vouloir supprimer cette catégorie?\nTu ne pourras pas revenir en arrière!');"

                        method='post' action='{{route("blogetc.admin.categories.destroy_category", $category->id)}}' class='float-right'>
                    @csrf
                    @method("DELETE")
                    <input type='submit' class='btn btn-danger btn-sm' value='Supprimer'/>
                </form>
            </div>
        </div>


    @empty
    <div class='alert alert-danger'>Aucune catégorie trouvée.</div>
    @endforelse


    <div class='text-center'>
        {{$categories->appends( [] )->links()}}
    </div>

    @endsection