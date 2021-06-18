<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <!-- Title 3 -->
                    <form method="POST" action="{{ route('titleUpdate', $title[2]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h1><b>Changer le titre :</b></h1>
                        
            
                        <!-- Name -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Titre')" />
            
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$title[2]->name}}"  required autofocus />
                        </div>

                        <div class="flex items-center my-4">
            
                            <x-button type="submit">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                        <hr>
                    </form>

                    <div class="my-4">
                        @include('layouts.flash')
                    </div>

                    <!-- Services -->
                    <div>
                        <h1><b>Services</b></h1>
                        <a href="{{route('serviceCreate')}}">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Ajouter un service</button>
                        </a>
                        <div class="flex flex-wrap">
                            @foreach ($services as $service)
                                <div class="w-2/5 py-4 px-8 bg-white shadow-lg rounded-lg my-10 mr-6">
                                    <div>
                                        <h2 class="text-gray-800 text-3xl font-semibold">{{$service->title}}</h2>
                                        <p class="mb-2">Icône : {{$service->icon->name}}</p>
                                        <div class="icon mb-2">
                                            <i class="{{$service->icon->name}} text-4xl"></i>
                                        </div>
                                        <p class="mt-2 text-gray-600">{{$service->text}}</p>
                                        <div class="flex">
                                            <a href="{{route('serviceEdit', $service)}}">
                                                <button class="bg-green-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded mt-4">Edit</button>
                                            </a>
                                            <form method="post" action="{{route('serviceDestroy', $service)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4 ml-4" type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>