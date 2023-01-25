@extends('layouts.app')

@section('content')
     <div class="container">
          <div class="row justify-content-center">
               <div class="col-md-10">
                    <div class="card">
                         <div class="card-header bg-success text-white font-weight-bold" style="font-size: 24px">
                              Bienvenue! Service de santé CROUSZ</div>

                         <div class="card-body">
                              @if (session('status'))
                                   <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                   </div>
                              @endif

                              <div class="d-flex flex-md-row flex-sm-col justify-content-around px-5">
                                   <div class="card" style="width: 18rem;">
                                        <div class="card-body">
                                             <h5 class="card-title">Renseigner mes informations médicales</h5>
                                             <p class="card-text">
                                                  En tant qu'étudiant, il est important de garder
                                                  vos informations médicales à jour pour assurer
                                                  votre sécurité et votre bien-être sur le campus.
                                             </p>
                                             <a href="{{ Route('etudiant.index') }}" class="btn btn-info text-white"
                                                  style="font-weight: bolder">
                                                  verifier mes informations</a>
                                        </div>
                                   </div>
                                   <div class="card" style="width: 18rem;">
                                        <div class="card-body">
                                             <h5 class="card-title">service médicale</h5>
                                             <p class="card-text">
                                                  Vous pouvez consulter les professionnels de la santé pour des soins
                                                  primaires,
                                                  des consultations médicales,
                                                  des vaccins et des soins dentaires.</p>
                                             <a href="{{Route('service.index')}}" class="btn btn-info text-white" style="font-weight: bolder">
                                                  Voir services</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection
