@extends('layouts.app')

@section('content')
     <div class="container">
          
          <div class="row justify-content-center">
               <div class="col-md-10">
                    <button class="btn btn-secondary text-white mb-5" onclick="location.href='{{route('admin.')}}'">
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
                              
                                        <div class="card" style="width: 30rem;">
                                             <div class="card-body">
                                                  <h5 class="card-title">{{ Auth::user()->name }}</h5>
                                                  <p class="card-text">
                                                       {{$etudiant->antecedant }}</p>
                                             </div>
                                             <ul class="list-group list-group-flush">
                                                  <li class="list-group-item">{{$etudiant->num_etudiant }}</li>
                                                  <li class="list-group-item">{{$etudiant->departement }}</li>
                                                  <li class="list-group-item">{{$etudiant->symptome }}</li>
                                                  <li class="list-group-item">{{$etudiant->traitement }}</li>
                                             </ul>
                                             <div class="card-body d-flex justify-content-between">
                                                  <a href="{{ route('etudiant.edit',$etudiant->id) }}"
                                                       class="btn btn-info">Modifier</a>
                                                  <form action="{{ route('etudiant.destroy',$etudiant->id) }}"
                                                       method="POST">
                                                       @csrf
                                                       @method('DELETE')
                                                       <button type="submit" class="btn btn-danger">Supprimmer</button>
                                                  </form>
                                             </div>
                                        </div>
                                   
                              </div>
                              
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection
