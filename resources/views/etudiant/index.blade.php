@extends('layouts.app')

@section('content')
     <div class="container">
          
          <div class="row justify-content-center">
               <div class="col-md-10">
                    <button class="btn btn-secondary text-white mb-5" onclick="location.href='/'">
                         <i class="bi bi-skip-backward-fill"></i>  Retour
                    </button>
                    <div class="card">
                         <div class="card-header bg-success text-white font-weight-bold" style="font-size: 24px">
                              Bienvenue! Service de santé CROUSZ</div>

                         <div class="card-body">
                              @if (session('status'))
                                   <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                   </div>
                              @endif

                              <div class="d-flex flex-md-row flex-sm-col justify-content-around px-5 align-items-center">
                                   @if (session()->has('message'))
                                        <div class="alert alert-success">
                                             {{ session()->get('message') }}
                                        </div>
                                   @endif
                                   @if (empty($info_etudiant))
                                        <p>
                                             Vous n'avez pas encore renseigner vos informations</p>
                                        <button class="btn btn-success"
                                             onclick="location.href='{{ route('etudiant.create') }}'">
                                             Ajouter
                                        </button>
                                   @else
                                        <div class="card" style="width: 30rem;">
                                             <div class="card-body">
                                                  <h5 class="card-title">{{ Auth::user()->name }}</h5>
                                                  <p class="card-text">
                                                       {{ $info_etudiant->antecedant }}</p>
                                             </div>
                                             <ul class="list-group list-group-flush">
                                                  <li class="list-group-item">{{ $info_etudiant->num_etudiant }}</li>
                                                  <li class="list-group-item">{{ $info_etudiant->departement }}</li>
                                                  <li class="list-group-item">{{ $info_etudiant->symptome }}</li>
                                                  <li class="list-group-item">{{ $info_etudiant->traitement }}</li>
                                             </ul>
                                             <div class="card-body d-flex justify-content-between">
                                                  <a href="{{ route('etudiant.edit', $info_etudiant->id) }}"
                                                       class="btn btn-info">Modifier</a>
                                                  <form action="{{ route('etudiant.destroy', $info_etudiant->id) }}"
                                                       method="POST">
                                                       @csrf
                                                       @method('DELETE')
                                                       <button type="submit" class="btn btn-danger">Supprimmer</button>
                                                  </form>
                                             </div>
                                        </div>
                                   @endif
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection
