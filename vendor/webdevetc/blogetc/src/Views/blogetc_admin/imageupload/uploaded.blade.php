@extends("blogetc_admin::layouts.admin_layout")
@section("content")


    <h5>Admin - Poster une image</h5>

    <p>L'image a été validée!</p>

    @forelse($images as $image)

        <div>

            <h4>{{$image['filename']}}</h4>
            <h6>
                <small>{{$image['w'] . "x" . $image['h']}}</small>
            </h6>

            <a href='{{asset(     config("blogetc.blog_upload_dir") . "/". $image['filename'])}}' target='_blank'>
                <img src='{{asset(     config("blogetc.blog_upload_dir") . "/". $image['filename'])}}'
                     style='max-width:400px; height: auto;'>
            </a>
            <input type='text' readonly='readonly' class='form-control' value='{{asset(     config("blogetc.blog_upload_dir") . "/". $image['filename'])}}'>
            <input type='text' readonly='readonly' class='form-control' value='{{"<img src='".asset(     config("blogetc.blog_upload_dir") . "/". $image['filename'])."' alt='' >"}}'>


        </div>

    @empty
        <div class='alert alert-danger'>Aucune image n'a été traitée.</div>
    @endforelse



@endsection