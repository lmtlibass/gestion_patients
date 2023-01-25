@extends('layouts.app')

@section('content')
     <div class="container">

          <div class="row justify-content-center">
               <div class="col-md-10">
                    <div class="d-flex justify-content-between">
                         <button class="btn btn-secondary text-white mb-5" onclick="location.href='{{ route('service.index') }}'">
                              <i class="bi bi-skip-backward-fill"></i> Retour
                         </button>
                    </div>
                    <div class="card table-responsive">
                         
                              <div class="row g-0">
                                   <div class="col-md-4 object-fit-cover" >
                                        <img src="{{asset('img/uasz.jpg')}}" class="img-fluid rounded-start" alt=".." style="height: 100%!important">
                                   </div>
                                   <div class="col-md-8">
                                        <div class="card-body">
                                             <h5 class="card-title">{{$service->nom_service}}</h5>
                                             <p class="card-text">
                                                  {{$service->description}}</p>
                                             <p class="card-text h6">
                                                  <span class="badge bg-success">Nom medecin</span>
                                                   {{$service->medecin}}</p>
                                             <p class="card-text h6">
                                                  <span class="badge bg-info text-dark">Emplacement</span>
                                                   {{$service->emplacement}}</p>
                                             <p class="card-text"><small class="text-muted">{{$service->horraires}}</small>
                                             </p>
                                             <div class="mt-3 d-flex flex-row justify-content-between">
                                                  {{-- update btn --}}
                                                  <a class="col-2   text-warning" href="{{route('service.edit', $service->id)}}">
                                                       <i class="bi bi-pencil-square"></i></a>

                                                  {{-- delete btn --}}     
                                                  <form action="{{route('service.destroy', $service->id)}}" method="POST">
                                                       @csrf
                                                       @method('DELETE')

                                                       <button type="submit" class="col-2 bg-transparent  text-danger" style="border: none">
                                                            <i class="bi bi-trash3"></i></button>
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
