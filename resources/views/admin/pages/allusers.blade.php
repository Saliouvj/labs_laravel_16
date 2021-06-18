<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <div class="my-4">
                        @include('layouts.flash')
                    </div>

                    <!-- Membres à valider -->
                    <div class="mb-4">
                        <h1><b>Utilisateurs :</b></h1>

                        <div class="flex flex-wrap">
                            @foreach ($users as $user)
                            <div class="mt-4 mx-2 border border-green-700 rounded py-4 px-4" style="width: 300px">
                                <td class="px-8 py-4 whitespace-nowrap text-left text-sm font-medium">
                                    <p class="text-gray-900 "><b>Nom :</b> {{$user->name}}</p>
                                    <p class="text-gray-900 "><b>Prénom :</b> {{$user->firstname}}</p>
                                    <p class="text-gray-700 "><b>E-mail :</b> {{$user->email}}</p>
                                </td>
                                <div class="flex mt-4">
                                    <form method="post" action="{{route('validateDeleteUser', $user)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                            
                            @endforeach 
                        </div>
                    </div>

                    <hr>
                    <br>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>