@extends("blogetc_admin::layouts.admin_layout")
@section("content")


    <div class='alert alert-success'><b>Post supprimé</b>
        <br/><a href='{{ route('blogetc.admin.index') }}' class='btn btn-primary '>Revenir au panel Admin</a></div>

    <?php
    $images_to_delete = [];
    foreach ((array) config('blogetc.image_sizes') as $image_size => $image_size_info) {
        if (! $deletedPost->$image_size) {
            continue;
        }
        $images_to_delete[] = $image_size;
    }?>

    @if(count($images_to_delete))
        <p>En revanche, ces images n'ont <strong>pas</strong> été supprimées:</p>

        <table class='table'>
            <thead>
            <tr>
                <th>Image/lien</th>
                <th>Nom / taille</th>
                <th>location complète</th>
            </tr>
            </thead>
            <tbody>
            @foreach($images_to_delete as $image_size)

                <tr>


                    <td class='text-center'><a
                                href='{{asset(config("blogetc.blog_upload_dir","blog_images")."/".$deletedPost->$image_size) }}'
                                target='_blank' class='btn btn-primary m-1'>voir</a>

                        <img src='{{asset(config("blogetc.blog_upload_dir","blog_images")."/".$deletedPost->$image_size) }}'
                             width=100>

                    </td>
                    <td><code>{{$deletedPost->$image_size}}</code>

            {{--check filesize returns something, so we don't divide by 0--}}
                        @if(filesize(public_path(config("blogetc.blog_upload_dir","blog_images")."/".$deletedPost->$image_size)))

                        ({{ (round(filesize(public_path(config("blogetc.blog_upload_dir","blog_images")."/".$deletedPost->$image_size)) / 1000 ,1)). " kb"}})

                        @endif

                    </td>
                    <td><code>
                            <small>{{ public_path(config("blogetc.blog_upload_dir","blog_images")."/".$deletedPost->$image_size) }}</small>
                        </code></td>
                </tr>



            @endforeach
            </tbody>
        </table>

        <p>Si vous voulez supprimer ces images, sélectionnez les et faites le manuellement.</p>
    @endif


    <hr class='my-5 py-5'>

    <p>Oups, c'était une erreur? Ci-dessous se trouve les données du post sous format JSON, vous pouvez utiliser
         un logiciel d'analyse de JSON pour récupérer les informations.</p>

    <textarea readonly class='form-control'>{{ $deletedPost->toJson() }}</textarea>
@endsection