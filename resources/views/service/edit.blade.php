@extends('layouts.app')
@section('content')
<div class="container">

     <div class="row justify-content-center">
          <div class="col-md-10">
               <div class="d-flex justify-content-between">
                    <button class="btn btn-secondary text-white mb-5" onclick="location.href='{{route('service.index')}}'">
                         <i class="bi bi-skip-backward-fill"></i> Retour
                    </button>
               </div>
               <div class="card p-3">
                    <form action="{{route('service.update', $service->id)}}" method="POST">

                         @csrf
                         @method('PATCH')
                         <!-- 2 column grid layout with text inputs for the first and last names -->
                         <div class="row mb-4">
                              <div class="col">
                                   <div class="form-outline">
                                        <label class="form-label" for="nom_service">Nom service</label>
                                        <input type="text" id="nom_service" name="nom_service" class="form-control" value="{{$service->nom_service}}"/>
                                   </div>
                              </div>
                         </div>
                         <div class="col">
                              <div class="form-outline">
                                   <label class="form-label" for="description">Informations services</label>
                                   <textarea name="description" id="description" cols="30" rows="5" class="form-control" value="{{$service->description}}"></textarea>
                                   {{-- <textarea type="text" id="description" name="description" class="form-control" /> --}}
                              </div>
                         </div>

                         <!--  -->
                         <div class="form-outline mb-4">
                              <label class="form-label" for="medecin">Medecint</label>
                              <input type="text" id="medecin" name="medecin" class="form-control" value="{{$service->medecin}}"/>
                         </div>

                         <!--  -->
                         <div class="form-outline mb-4">
                              <label class="form-label" for="emplacement">Localisation</label>
                              <input type="text" id="emplacement" name="emplacement" class="form-control" value="{{$service->emplacement}}"/>
                         </div>
                         <!--  -->
                         <div class="form-outline mb-4">
                              <label class="form-label" for="horraires">Horraires</label>
                              <input type="text" id="horraires" name="horraires" class="form-control" value="{{$service->horraires}}"/>
                         </div>
                        
                         
                        

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
@endsection
