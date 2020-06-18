@extends("layouts.app",['title'=>"Saved comment"])
@section("content")

    <div class='text-center contain'>
        <h3>Merci! Votre commentaire a été sauvegardé!</h3>

        @if(!config("blogetc.comments.auto_approve_comments",false) )
            <p>Une fois qu'un Administrateur aura validé votre commentaire, il apparaîtra sur le site!</p>
        @endif

        <a href='{{$blog_post->url()}}' class='btn btn-primary'>Retour aux posts</a>
    </div>

@endsection
