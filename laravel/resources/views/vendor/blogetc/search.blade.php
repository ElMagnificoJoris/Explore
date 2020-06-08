@extends("layouts.app",['title'=>$title])
@section("content")

    {{--https://webdevetc.com/laravel/packages/blogetc-blog-system-for-your-laravel-app/help-documentation/laravel-blog-package-blogetc#guide_to_views--}}

    <div class='row contain'>
        <div class='col-sm-12'>
            <h2>Résultats de la recherche pour "{{$query}}"</h2>

            @forelse($search_results as $result)

                <?php $post = $result->indexable; ?>
                @if($post && is_a($post,\WebDevEtc\BlogEtc\Models\BlogEtcPost::class))
                    <h2>résultat #{{$loop->count}}</h2>
                    @include("blogetc::partials.index_loop")
                @else

                    <div class='alert alert-danger'>Impossible de montrer ce résultat de recherche - type inconnu</div>
                @endif
            @empty
                <div class='alert alert-danger'>Désolé, nous n'avons rien trouvé!</div>
            @endforelse


            @include("blogetc::sitewide.search_form")

        </div>
    </div>


@endsection
