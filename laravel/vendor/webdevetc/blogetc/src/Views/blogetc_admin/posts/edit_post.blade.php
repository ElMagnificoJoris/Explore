@extends("blogetc_admin::layouts.admin_layout")
@section("content")


    <h5>Admin - Éditer le post
    <a target='_blank' href='{{$post->url()}}' class='float-right btn btn-primary'>Voir le post</a>
    </h5>

    <form method='post' action='{{route("blogetc.admin.update_post",$post->id)}}'  enctype="multipart/form-data" >

        @csrf
        @method("patch")
        @include("blogetc_admin::posts.form", ['post' => $post])

        <input type='submit' class='btn btn-primary' value='Sauvegarder Les Changements' >

    </form>

@endsection
