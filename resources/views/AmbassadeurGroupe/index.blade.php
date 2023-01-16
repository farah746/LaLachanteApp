@extends('layouts.navadmin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

 @foreach ($ambassadeurs as $ambassadeurs)
                <h2>Liste des ambassadeurs groupe {{ $ambassadeurs->nom }} {{ $ambassadeurs->prenom }}</h2>

                <br>
                {{--  <p> Il y'a : {{ $ambassadeurGroupes->count($id_utilisateur) }} Groupes</p>  --}}
@endforeach
{{--  <p> Il y'a : {{$ambassadeurGroupes->total()}} Groupes</p>  --}}
            </div>


            {{--  <div class="pull-right">
                <a class="btn btn-success" href="{{ route('AmbassadeurGroupe.create') }}">Ajouter</a>
            </div>
            <div class="col" style="margin : 25px">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Rechercher un ambassadeur" aria-label="Search" aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary" style="background: #17a2b8 ; border : #FFF"><i style="color : #fff " class="fas fa-search"></i></button>
                </div>
            </div>  --}}
        </div>
    </div>
   <br><br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

      <div class="table">
        <table class="table">
            <thead class="thead" style="background:#bfbfbf">
            <?php
 // $ambassadeurGroupes = DB::connection('mysql')->table('groupes')
    //         ->leftjoin('ambassadeur_groupe', 'ambassadeur_groupe.id_groupe', '=', 'groupes.id_groupe')
    //         ->leftjoin('ambassadeurs','ambassadeur_groupe.id_ambassadeur', '=', 'ambassadeurs.id_ambassadeur')
    //         ->leftjoin('utilisateur','utilisateur.id_utilisateur','=','ambassadeurs.id_ambassadeur')
    //         ->whereIn('ambassadeurs.id_ambassadeur',   $id_ambassadeur)
    //        //->whereColumn('ambassadeurs.id_ambassadeur','id_ambassadeur')
    //       // ->selectRaw('id_groupe * ? as groupes ')
    //     //   ->lazyById()->each(function ($ambassadeurs) {
    //     //     DB::connection('mysql')->table('groupes')
    //     //     ->leftjoin('ambassadeur_groupe', 'ambassadeur_groupe.id_groupe', '=', 'groupes.id_groupe')
    //     //     ->leftjoin('ambassadeurs','ambassadeur_groupe.id_ambassadeur', '=', 'ambassadeurs.id_ambassadeur')
    //     //     ->leftjoin('utilisateur','utilisateur.id_utilisateur','=','ambassadeurs.id_ambassadeur')
    //     //         ->where('id', $ambassadeurs->id)
    //     //        ;
    //     // })
    //         ->paginate(20);
// $ambassadeurGroupes=DB::connection('mysql')->select('SELECT distinct groupes.id_groupe FROM groupes
  //  left join ambassadeur_groupe on ambassadeur_groupe.id_groupe = groupes.id_groupe
    //left join ambassadeurs on ambassadeur_groupe.id_ambassadeur=ambassadeurs.id_ambassadeur
    //left join utilisateur on utilisateur.id_utilisateur=ambassadeurs.id_ambassadeur
   // WHERE ambassadeurs.id_ambassadeur= ?') ;



    // On attache les valeurs




            ?>
            <tr>
             {{--  <th>N°</th>  --}}
                <th>@sortablelink('id ambassadeur')</th>
                <th>@sortablelink('id groupe') </th>
                <th>@sortablelink('statut adhesion')</th>
                <th>@sortablelink('date adhesion')</th>
                <th>@sortablelink('notifications')</th>
                <th>@sortablelink('traitement')</th>
                <th>@sortablelink('statut releve')</th>
                <th width="150px"></th>
            </tr>
            </thead>
  @if($ambassadeurGroupes->count())

            @foreach ($ambassadeurGroupes as $key => $value)
            <tr>
            {{--  <td>{{ $loop->index+1}}</td>  --}}
                <th  scope="row">{{ $value->id_ambassadeur }}</th>
                <td>{{ \Str::limit($value->id_groupe,40) }}</td>
                <td>{{ $value->statut_adhesion }}</td>
                <td>{{ $value->date_adhesion }}</td>
                <td>{{ $value->notifications }}</td>
                <td>{{ $value->traitement }}</td>
                <td>{{ $value->statut_releve }}</td>
   <td>
                    {{--  <form action="{{ route('AmbassadeurGroupe.destroy',$value->id_ambassadeur) }}" method="POST">
                    <a style="background-color : #fafafa ; border : #fafafa" class="btn btn-info" href="{{ route('AmbassadeurGroupe.show',$value->id_ambassadeur) }}"><i style="color : black" class="fas fa-info"></i></a>
                        <a style="background-color : #fafafa ; border : #fafafa" class="btn btn-primary" href="{{ route('AmbassadeurGroupe.edit',$value->id_ambassadeur) }}"><i style="color : black"  class="fas fa-edit"></i></a>
                        @csrf
                        @method('DELETE')

                        <button  style="background-color : #fafafa ; border : #fafafa"  type="submit" class="btn btn-danger"><i style="color : black"   class="fas fa-trash"></i></button>
                      --}}
                     {{--  <a style="background-color : #fff ; border : #fff" class="btn btn-info" href="{{ route('groupecampagnes.index',$value->id_campagne) }}"><i style="color : #4d94ff" class="fas fa-info"></i></a>  --}}
                    {{--  </form>
                </td>
                {{--  <td>
                    <form action="{{ route('deleteAmbassadeur',$ambassadeurGroupe->id_utilisateur) }}" method="POST">
                    <a style="background-color : #fafafa ; border : #fafafa" class="btn btn-info" href="{{ route('AmbassadeurGroupe.show',$ambassadeurGroupe->id_utilisateur) }}"><i style="color : black" class="fas fa-info"></i></a>
                        <a style="background-color : #fafafa ; border : #fafafa" class="btn btn-primary" href="{{ route('AmbassadeurGroupe.edit',$ambassadeurGroupe->id_utilisateur) }}"><i style="color : black"  class="fas fa-edit"></i></a>
                        @csrf
                        @method('DELETE')
                        <button  style="background-color : #fafafa ; border : #fafafa"  type="submit" class="btn btn-danger"><i style="color : black"   class="fas fa-trash"></i></button>
                    </form>
                </td> --}}
            </tr>
            @endforeach
@endif
        </table>
    </div>
      {{--  {!! $ambassadeurGroupes->links() !!}  --}}
    @endsection
