@extends('admin.base.app')

@section('content')
     <!-- component -->
     <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>

     <section class="antialiased  h-screen " x-data="app">
          <div class="flex flex-col justify-center h-full -mt-32">
               <!-- Table -->
               <div class="w-full mt-52 max-w-4xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                    <header class="px-5 py-4 border-b border-gray-100">
                         <div class="font-semibold text-gray-800">liste des utilisateurs</div>
                    </header>

                    <div class="overflow-x-auto p-3">
                         <table class="table-auto w-full ">
                              <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                   <tr>
                                        <th class="p-2">
                                             <div class="font-semibold text-left">N°</div>
                                        </th>
                                        <th class="p-2">
                                             <div class="font-semibold text-left">Prenom</div>
                                        </th>
                                        <th class="p-2">
                                             <div class="font-semibold text-left">Nom</div>
                                        </th>
                                        <th class="p-2">
                                             <div class="font-semibold text-center">username</div>
                                        </th>
                                        <th class="p-2">
                                             <div class="font-semibold text-center">Email</div>
                                        </th>
                                        <th class="p-2">
                                             <div class="font-semibold text-center">Rôle</div>
                                        </th>

                                   </tr>
                              </thead>

                              <tbody class="text-sm divide-y divide-gray-100">
                                   @foreach ($users as $user)
                                        <tr class="text-center">
                                             <td class="p-2">
                                                  {{ $user->id }}</td>
                                             <td class="p-2">
                                                  {{ $user->first_name }}</td>
                                             <td class="p-2">
                                                  {{ $user->last_name }}</td>
                                             <td class="p-2">
                                                  {{ $user->username }}</td>
                                             <td class="p-2">
                                                  {{ $user->email }}</td>

                                             <td class="p-2">
                                                  {{ implode(',',$user->roles()->get()->pluck('name')->toArray()) }}</td>


                                             <td class="p-2">
                                                  <form class="flex justify-center" action="{{route('admin.user.destroy', $user->id)}}" method="POST">

                                                       @csrf
                                                       @method('DELETE')
                                                       <button type="submit">
                                                            <svg class="w-8 h-8 hover:text-[#FA8316] rounded-full hover:bg-gray-100 p-1"
                                                                 fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                                 </path>
                                                            </svg>
                                                       </button>
                                                  </form>
                                             </td>
                                             <td>
                                                  <a x-data="{ tooltip: 'Edite' }"
                                                       href="{{ Route('admin.user.edit', $user->id) }}">
                                                       <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-8 h-8 hover:text-[#E5EA00] rounded-full hover:bg-gray-100 p-2"
                                                            x-tooltip="tooltip">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                 d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                                       </svg>
                                                  </a>
                                             </td>
                                        </tr>
                                   @endforeach

                              </tbody>
                         </table>
                    </div>

                    <div class="w-80 mt-14 mb-5 mx-auto">
                         {{ $users->links() }}
                    </div>
               </div>
          </div>
     </section>
@endsection
