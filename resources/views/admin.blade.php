@extends('layout/admin')

@section('title')
    Administrateur
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <span style="padding: 6px 0;display: inline-block">AD Jeu</span>
            <div style="display: inline-block" class="pull-right">
                <a href="{{ route('exportParticipants') }}" class="btn btn-primary">Exporter</a>
                <form style="display: inline-block;margin-left: 10px" method="post" action="{{ url('logout') }}">
                    @csrf
                    <button style="margin: 0;" class="btn btn-danger">Se déconnecter</button>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <div>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom complet</th>
                        <th>Téléphone</th>
                        <th>ville</th>
                        <th>Reparateur AD</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($participants as $participant)
                        <tr class="odd gradeX">
                            <td>{{ $participant->id }}</td>
                            <td>{{ $participant->civilite ? "M. ":"Mme. " }} {{ $participant->nom }} {{ $participant->prenom }}</td>
                            <td>{{ $participant->tele }}</td>
                            <td>{{ $participant->ville }}</td>
                            <td>{{ $participant->reparateur_ad }}</td>
                            <td><a href="{{ url('participant/'.$participant->id) }}" class="actionBtn"><i class="fas fa-eye"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <script src="js/admin/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/admin/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="js/admin/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="js/admin/dataTables/jquery.dataTables.js"></script>
    <script src="js/admin/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
    </script>
    <!-- Custom Js -->
    <script src="js/admin/custom-scripts.js"></script>

    <script>
        $('#dataTables-example').DataTable({
            "language": {
                "sProcessing":     "Traitement en cours...",
                "sSearch":         "Rechercher&nbsp;:",
                "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
                "sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
                "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                "sInfoPostFix":    "",
                "sLoadingRecords": "Chargement en cours...",
                "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
                "oPaginate": {
                    "sFirst":      "Premier",
                    "sPrevious":   "Pr&eacute;c&eacute;dent",
                    "sNext":       "Suivant",
                    "sLast":       "Dernier"
                },
                "oAria": {
                    "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                    "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                },
                "select": {
                    "rows": {
                        _: "%d lignes séléctionnées",
                        0: "Aucune ligne séléctionnée",
                        1: "1 ligne séléctionnée"
                    }
                }
            }
        });
    </script>
@endsection