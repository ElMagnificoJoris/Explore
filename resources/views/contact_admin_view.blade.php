@extends("layouts.app",['title'=>"laravel"])

@section('content')
    <div class="contain">
        <div class="col-sm-offset-4 col-sm-4">
            <div class="panel panel-primary">	
                <div class="panel-heading">Fiche de contact</div> <br>
                <div class="panel-body"> 
                    <p>Nom : {{ $contact->nom }}</p>
                    <p>Prénom : {{ $contact->prenom }}</p>
                    <p>Email : {{ $contact->email }}</p>
                    <p>N° téléphone: {{ $contact->tel }}</p>
                    @if($contact->comp != null)
                        <p>Nom de l'entreprise: {{ $contact->comp }}</p>
                    @endif
                </div>
            </div>				
            <a href="javascript:history.back()" class="btn btn-primary">
                <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
            </a>
        </div>
    </div>
@endsection