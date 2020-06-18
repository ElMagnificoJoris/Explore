@extends("blogetc_admin::layouts.admin_layout")
@section("content")


    <h5>Admin - Ajouter une catégorie</h5>

    <form method='post' action='{{route("blogetc.admin.categories.create_category")}}'  enctype="multipart/form-data" >

        @csrf
        @include("blogetc_admin::categories.form", ['category' => new \WebDevEtc\BlogEtc\Models\BlogEtcCategory()])

        <input type='submit' class='btn btn-primary' value='Valider' >

    </form>

@endsection