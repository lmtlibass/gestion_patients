@extends('layouts.app')

@section('content')
     <div class="container">
          <div class="row justify-content-center">
               <div class="col-md-10">
                    <div class="card">
                         <div class="card-header bg-success text-white font-weight-bold" style="font-size: 24px">
                              Bienvenue! Service de santé CROUSZ</div>
                         <div class="card-body">
                              <form action="{{route('etudiant.store')}}" method="POST">

                                   @csrf
                                   <!-- 2 column grid layout with text inputs for the first and last names -->
                                   <div class="row mb-4">
                                        <div class="col">
                                             <div class="form-outline">
                                                  <input type="text" id="prenom" name="prenom" class="form-control" />
                                                  <label class="form-label" for="prenom">Prenom</label>
                                             </div>
                                        </div>
                                        <div class="col">
                                             <div class="form-outline">
                                                  <input type="text" id="nom" name="nom" class="form-control" />
                                                  <label class="form-label" for="nom">Nom</label>
                                             </div>
                                        </div>
                                   </div>

                                   <!--  -->
                                   <div class="form-outline mb-4">
                                        <input type="text" id="numero_etudint" name="num_etudiant" class="form-control" />
                                        <label class="form-label" for="numero_etudint">Numero Etudiant</label>
                                   </div>

                                   <!--  -->
                                   <div class="form-outline mb-4">
                                        <input type="text" id="departement" name="departement" class="form-control" />
                                        <label class="form-label" for="departement">Departement</label>
                                   </div>
                                   <!--  -->
                                   <div class="form-outline mb-4">
                                        <input type="text" id="symptome" name="symptome" class="form-control" />
                                        <label class="form-label" for="symptome">Symptome</label>
                                   </div>
                                   <!--  -->
                                   <div class="form-outline mb-4">
                                        <input type="text" id="traitement" name="traitement" class="form-control" />
                                        <label class="form-label" for="symptome">Traitement</label>
                                   </div>
                                   <!--  -->
                                   @can('administration')
                                        <div class="form-outline">
                                             <textarea class="form-control" id="antecedant" name="antecedant" rows="4"></textarea>
                                             <label class="form-label" for="antecedant">antecedant</label>
                                        </div>
                                   @endcan
                                  

                                   <!-- Submit button -->
                                   <button type="submit" class="btn btn-success btn-block mb-4">
                                        Enregistrer
                                   </button>

                                   <!-- Register buttons -->
                                   <div class="text-center">
                                        <p>Merci:</p>
                                        <button type="button" class="btn btn-secondary btn-floating mx-1">
                                             <i class="fab fa-facebook-f"></i>
                                        </button>

                                        <button type="button" class="btn btn-secondary btn-floating mx-1">
                                             <i class="fab fa-google"></i>
                                        </button>

                                        <button type="button" class="btn btn-secondary btn-floating mx-1">
                                             <i class="fab fa-twitter"></i>
                                        </button>

                                        <button type="button" class="btn btn-secondary btn-floating mx-1">
                                             <i class="fab fa-github"></i>
                                        </button>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection
