@extends('admin.base.app')

@section('content')


     <!-- component -->
     <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>

     <section class="antialiased h-screen mt-7" x-data="app">
          <div class="flex h-full justify-between">
               <!-- Table -->
               <div class="w-full h-80 mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                    <header class="px-5 py-4 border-b border-gray-100">
                         <div class="font-semibold text-gray-800">{{ $user->username }}</div>
                    </header>

                    <div class="overflow-x-auto p-3">
                         <div class="flex ">
                              <form action="{{Route('admin.user.update', $user)}}" method="POST">
                                   @csrf
                                   @method('PATCH')
                                   <div>
                                        @foreach ($roles as $role)
                                             <div class="form-check">
                                                  <input
                                                       class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                       type="checkbox" 
                                                       value="{{$role->id}}" id="{{$role->id}}"
                                                       name="roles[]"
                                                       @foreach ($user->roles as $userRole)
                                                           @if ($userRole->id === $role->id)
                                                            @checked(true)
                                                           @endif
                                                       @endforeach
                                                       >
                                                       
                                                  <label class="form-check-label inline-block text-gray-800" for="{{$role->id}}">
                                                       {{$role->name}}
                                                  </label>
                                             </div>
                                        @endforeach
                                   </div>
                                   <div class="flex space-x-2 justify-center mt-11">
                                        <button
                                          type="submit"
                                          data-mdb-ripple="true"
                                          data-mdb-ripple-color="light"
                                          class="inline-block px-6 py-2.5 bg-[#0091B1] text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-[#E5EA00] hover:shadow-lg focus:bg-[#E5EA00] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#E5EA00] active:shadow-lg transition duration-150 ease-in-out"
                                        >Modifier rôle</button>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
               <div class="w-full ml-4 h-80 mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                    <header class="px-5 py-4 border-b border-gray-100">
                         <div class="font-semibold text-gray-800">{{ $user->username }}</div>
                    </header>

                    <div class="overflow-x-auto p-3 ">
                         <p>
                              {{$user->first_name}}</p>
                         <p>
                              {{$user->last_name}}</p>
                         <p>
                              {{$user->email}}</p>
                              @foreach ($user->roles as $role) 
                                   {{$role->pivot->created_at}}
                              @endforeach
                    </div>

               </div>
          </div>
     </section>

@endsection
