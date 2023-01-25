@extends('layouts.app')

@section('content')
     <div class="container">

          <div class="row justify-content-center">
               <div class="col-md-10">
                    <button class="btn btn-secondary text-white mb-5" onclick="location.href='/'">
                         <i class="bi bi-skip-backward-fill"></i> Retour
                    </button>
                    <div class="card table-responsive">
                         <table class="table table-striped table-hover">
                              <thead>
                                   <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Service</th>
                                        <th scope="col">description</th>
                                        <th scope="col">medecin</th>
                                        <th scope="col">emplacement</th>
                                        <th scope="col">horraires</th>
                                        <th scope="col">Action</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @foreach ($services as $service)
                                        <tr>
                                             <th scope="row">{{$service->id}}</th>
                                             <td>{{$service->nom_service}}</td>
                                             <td>{{$service->description}}</td>
                                             <td>{{$service->medecin}}</td>
                                             <td>{{$service->emplacement}}</td>
                                             <td>{{$service->horraires}}</td>
                                             <td>
                                                  <a href="" class="text-success">
                                                       <i class="bi bi-eye"></i></a>
                                             </td>
                                        </tr>
                                   @endforeach
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
@endsection
