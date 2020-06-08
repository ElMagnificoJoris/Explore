@extends("blogetc_admin::layouts.admin_layout")
@section("content")


    <h5>Admin - Gérer les blogs</h5>

    @forelse($posts as $post)
        <div class="card m-4" style="">
            <div class="card-body">
                <h5 class='card-title'><a href='{{$post->url()}}'>{{$post->title}}</a></h5>
                <h5 class='card-subtitle mb-2 text-muted'>{{$post->subtitle}}</h5>
                <p class="card-text">{{$post->html}}</p>

                <?=$post->image_tag('thumbnail', false, 'float-right'); ?>

                <dl class="">
                    <dt class="">Auteur</dt>
                    <dd class="">{{$post->author_string()}}</dd>
                    <dt class="">Posté le</dt>
                    <dd class="">{{$post->posted_at}}</dd>


                    <dt class="">Publié?</dt>
                    <dd class="">

                        {!!($post->is_published ? "Oui" : '<span class="border border-danger rounded p-1">Non</span>')!!}

                    </dd>

                    <dt class="">Catégories</dt>
                    <dd class="">
                        @if(count($post->categories))
                            @foreach($post->categories as $category)
                                <a class='btn btn-outline-secondary btn-sm m-1' href='{{$category->edit_url()}}'>
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                                    {{$category->category_name}}
                                </a>
                            @endforeach
                        @else Aucune
                        @endif

                    </dd>
                </dl>


                @if($post->use_view_file)
                    <h5>Utilisation d'un fichier visuel custom:</h5>
                    <div class="m-2 p-1">
                        <strong>Voir le fichier:</strong><br>
                        <code>{{$post->use_view_file}}</code>

                        <?php

                        $viewfile = resource_path('views/custom_blog_posts/'.$post->use_view_file.'.blade.php');

                        ?>
                        <br>
                        <strong>Nom complet:</strong>
                        <br>
                        <small>
                            <code>{{$viewfile}}</code>
                        </small>

                        @if(!file_exists($viewfile))
                            <div class='alert alert-danger'>Attention! le fichier est manquant. Créez le pour que le post s'affiche correctement.
                            </div>
                        @endif

                    </div>
                @endif


                <a href="{{$post->url()}}" class="card-link btn btn-outline-secondary"><i class="fa fa-file-text-o"
                                                                                          aria-hidden="true"></i>
                    Voir le post</a>
                <a href="{{$post->edit_url()}}" class="card-link btn btn-primary">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    Éditer le post</a>
                <form onsubmit="return confirm('Es-tu certain de vouloir supprimer ce post?\nTu ne pourras pas revenir en arrière!');"
                      method='post' action='{{route("blogetc.admin.destroy_post", $post->id)}}' class='float-right'>
                    @csrf
                    <input name="_method" type="hidden" value="DELETE"/>
                    <button type='submit' class='btn btn-danger btn-sm'>
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                        Supprimer
                    </button>
                </form>
            </div>
        </div>
    @empty
        <div class='alert alert-warning'>Aucun post à afficher.</div>
    @endforelse



    <div class='text-center'>
        {{$posts->appends( [] )->links()}}
    </div>


@endsection
