@extends('layout.details')
@section('title')
    Details participante
@endsection

@section('content')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Fiche participant</div>
            <div class="panel-body">
                <p><span class="bold">ID</span> : {{ $participant->id }}</p>
                <p><span class="bold">Civilité</span> : {{ $participant->civilite ? "M.":"Mme." }}</p>
                <p><span class="bold">Nom</span> : {{ $participant->nom }}</p>
                <p><span class="bold">Prenom</span> : {{ $participant->prenom }}</p>
                <p><span class="bold">Date naissance</span> : {{ $participant->date_naissance }} {{-- \Carbon\Carbon::parse($participant->date_naissance)->format("d-m-Y") --}}</p>
                <p><span class="bold">Email</span> : {{ $participant->email }}</p>
                <p><span class="bold">Téléphone</span> : {{ $participant->tele }}</p>
                <p><span class="bold">Adresse</span> : {{ $participant->adresse }}</p>
                <p><span class="bold">Code postal</span> : {{ $participant->cp }}</p>
                <p><span class="bold">Ville</span> : {{ $participant->ville }}</p>
                <p><span class="bold">Reparateur AD</span> : {{ $participant->reparateur_ad }}</p>
                <p><span class="bold">No facture ou code jeu</span> : {{ $participant->no_facture_code_jeu }}</p>
                <p><span class="bold">Date facture</span> : {{ \Carbon\Carbon::parse($participant->date_facture)->format("d-m-Y") }}</p>
                <p><span class="bold">Date participation</span> : {{ \Carbon\Carbon::parse($participant->created_at)->format("d-m-Y") }}</p>
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
@endsection