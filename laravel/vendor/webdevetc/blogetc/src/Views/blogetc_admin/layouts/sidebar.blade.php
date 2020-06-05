<p>Bienvenue dans le panel Admin! Ici vous pouvez éditer et créer vos blogs.</p>


<ul class="list-group mb-3">
    <li class="list-group-item justify-content-between lh-condensed">
        <div>
            <h6 class="my-0"><a href="{{ route('blogetc.admin.index') }}">Panel Admin - Page principale</a>
             <span class="text-muted">(<?php
                 $categoryCount = \WebDevEtc\BlogEtc\Models\BlogEtcPost::count();

                 echo $categoryCount.' '.str_plural('Post', $categoryCount);

                 ?>)</span>
            </h6>
            <small class="text-muted">Vue d'ensemble des posts</small>

            <div class="list-group ">

                <a href='{{ route('blogetc.admin.index') }}'
                   class='list-group-item list-group-item-action @if(\Request::route()->getName() === 'blogetc.admin.index') active @endif  '><i
                            class="fa fa-th fa-fw"
                            aria-hidden="true"></i>
                    Tous les posts</a>
                <a href='{{ route('blogetc.admin.create_post') }}'
                   class='list-group-item list-group-item-action  @if(\Request::route()->getName() === 'blogetc.admin.create_post') active @endif  '><i
                            class="fa fa-plus fa-fw" aria-hidden="true"></i>
                    Ajouter un post</a>
            </div>
        </div>

    </li>


    <li class="list-group-item justify-content-between lh-condensed">
        <div>
            <h6 class="my-0"><a href="{{ route('blogetc.admin.comments.index') }}">Commentaires</a>

                            <span class="text-muted">(<?php
                                $commentCount = \WebDevEtc\BlogEtc\Models\BlogEtcComment::withoutGlobalScopes()->count();

                                echo $commentCount.' '.str_plural('Commentaire', $commentCount);

                                ?>)</span>
            </h6>
            <small class="text-muted">Gérer les commentaires</small>

            <div class="list-group ">
                <a href='{{ route('blogetc.admin.comments.index') }}'
                   class='list-group-item list-group-item-action  @if(\Request::route()->getName() === 'blogetc.admin.comments.index' && !\Request::get("waiting_for_approval")) active @endif   '><i
                            class="fa  fa-fw fa-comments" aria-hidden="true"></i>
                    Tous les commentaires</a>


                <?php $comment_approval_count = \WebDevEtc\BlogEtc\Models\BlogEtcComment::withoutGlobalScopes()->where('approved', false)->count(); ?>

                <a href='{{ route('blogetc.admin.comments.index') }}?waiting_for_approval=true'
                   class='list-group-item list-group-item-action  @if(\Request::route()->getName() === 'blogetc.admin.comments.index' && \Request::get("waiting_for_approval")) active @elseif($comment_approval_count>0) list-group-item-warning @endif  '><i
                            class="fa  fa-fw fa-comments" aria-hidden="true"></i>
                    {{ $comment_approval_count }}
                    En attente d'approbation </a>

            </div>
        </div>
    </li>


    <li class="list-group-item  justify-content-between lh-condensed">
        <div>
            <h6 class="my-0"><a href="{{ route('blogetc.admin.categories.index') }}">Catégories</a>
                    <span class="text-muted">(<?php
                        $postCount = \WebDevEtc\BlogEtc\Models\BlogEtcCategory::count();
                        echo $postCount.' '.str_plural('Catégorie', $postCount);
                        ?>)</span>
            </h6>


            <small class="text-muted">Gérer les catégories</small>

            <div class="list-group ">
                <a href='{{ route('blogetc.admin.categories.index') }}'
                   class='list-group-item list-group-item-action  @if(\Request::route()->getName() === 'blogetc.admin.categories.index') active @endif  '><i
                            class="fa fa-object-group fa-fw" aria-hidden="true"></i>
                    Toutes les catégories</a>
                <a href='{{ route('blogetc.admin.categories.create_category') }}'
                   class='list-group-item list-group-item-action  @if(\Request::route()->getName() === 'blogetc.admin.categories.create_category') active @endif  '><i
                            class="fa fa-plus fa-fw" aria-hidden="true"></i>
                    Ajouter une catégorie</a>
            </div>
        </div>

    </li>

    @if(config("blogetc.image_upload_enabled"))
    <li class="list-group-item  justify-content-between lh-condensed">
        <div>
            <h6 class="my-0"><a href="{{ route('blogetc.admin.images.upload') }}">Images</a></h6>


            <div class="list-group ">

                <a href='{{ route('blogetc.admin.images.all') }}'
                   class='list-group-item list-group-item-action  @if(\Request::route()->getName() === 'blogetc.admin.images.all') active @endif  '><i
                            class="fa fa-picture-o fa-fw" aria-hidden="true"></i>
                    Voir toutes les images</a>



                <a href='{{ route('blogetc.admin.images.upload') }}'
                   class='list-group-item list-group-item-action  @if(\Request::route()->getName() === 'blogetc.admin.images.upload') active @endif  '><i
                            class="fa fa-upload fa-fw" aria-hidden="true"></i>
                    Poster une image</a>


            </div>


        </div>

    </li>
        @endif


</ul>