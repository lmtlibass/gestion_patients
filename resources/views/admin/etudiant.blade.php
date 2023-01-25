@extends('./layouts.app')

@section('content')
     <div class="container">

          <div class="row justify-content-center">
               <div class="col-md-10">
                    <div class="d-flex justify-content-between">
                         <button class="btn btn-secondary text-white mb-5" onclick="location.href='/'">
                              <i class="bi bi-skip-backward-fill"></i> Retour
                         </button>
                         <button class="btn btn-success text-white mb-5" onclick="location.href='{{ route('service.create') }}'">
                              <i class="bi bi-folder-plus"></i> Ajouter
                         </button>
                    </div>
                    <div class="card table-responsive">
                         <table class="table table-striped table-hover">
                              <thead>
                                   <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Prenom</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Numero étudiant</th>
                                        <th scope="col">Departement</th>
                                        <th scope="col">Symptome</th>
                                        <th scope="col">Traitement</th>
                                        <th scope="col">Antecendant</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @foreach ($info_etudiants as $info_etudiant)
                                        <tr>
                                             <th scope="row">{{$info_etudiant->id}}</th>
                                             <td>{{$info_etudiant->prenom}}</td>
                                             <td>{{$info_etudiant->nom}}</td>
                                             <td>{{$info_etudiant->num_etudiant}}</td>
                                             <td>{{$info_etudiant->departement}}</td>
                                             <td>{{$info_etudiant->symptome}}</td>
                                             <td>{{$info_etudiant->traitement}}</td>
                                             <td>{{$info_etudiant->antecedant}}</td>
                                             <td>
                                                  <a href="{{route('etudiant.show', $info_etudiant->id)}}" class="text-info">
                                                       <i class="bi bi-eye"></i></a>
                                             </td>
                                        </tr>
                                   @endforeach
                              </tbody>
                         </table>
                         <div class="d-flex mx-auto">
                              {!! $info_etudiants->links() !!}
                          </div>
                    </div>
                    
               </div>
          </div>
     </div>
@endsection
