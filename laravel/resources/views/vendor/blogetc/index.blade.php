@extends("layouts.app",['title'=>$title])
@push('styles')
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
@endpush
@section("content")
    {{--https://webdevetc.com/laravel/packages/blogetc-blog-system-for-your-laravel-app/help-documentation/laravel-blog-package-blogetc#guide_to_views--}}
    <?php $i = 0 ?>
    <div class='row contain'>
        <div class='col-sm-12 blogetc_container'>
            @if(\Auth::check() && \Auth::user()->canManageBlogEtcPosts())
                <div class="text-center">
                        <p class='mb-1'>Vous êtes connecté en tant qu'Admin.
                            <br>

                            <a href='{{route("blogetc.admin.index")}}'
                               class='btn border  btn-outline-primary btn-sm '>

                                <i class="fa fa-cogs" aria-hidden="true"></i>

                                Aller au panel Admin</a>


                        </p>
                </div>
            @endif


            @if(isset($blogetc_category) && $blogetc_category)
                <h2 class='text-center'>Catégorie: {{$blogetc_category->category_name}}</h2>

                @if($blogetc_category->category_description)
                    <p class='text-center'>{{$blogetc_category->category_description}}</p>
                @endif

            @endif


            @forelse($posts as $post)
                @if($i == 0)
                  <div class="postRow">
                @endif
                @include("blogetc::partials.index_loop")
                <?php $i = $i+1 ?>
                @if($i >= 3)
                  <?php $i = 0 ?>
                  </div>
                @endif
            @empty
                <div class='alert alert-danger'>Aucun post</div>
            @endforelse
            @if($i == 2)
                <div>
                </div>
              </div>
            @endif
            @if($i == 1)
                <div>
                </div>
                <div>
                </div>
              </div>
            @endif
            <div class='text-center  col-sm-4 mx-auto'>
                {{$posts->appends( [] )->links()}}
            </div>




                @include("blogetc::sitewide.search_form")

        </div>
    </div>
@endsection
