<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <!-- Title 4 -->
                    <form method="POST" action="{{ route('titleUpdate', $title[3]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h1><b>Changer le titre :</b></h1>
                        
            
                        <!-- Name -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Titre')" />
            
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$title[3]->name}}"  required autofocus />
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

                    <!-- Features -->
                    <div>
                        <h1><b>Services</b></h1>
                        <div class="flex flex-wrap">
                            @foreach ($features as $feature)
                                <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-10 mr-6">
                                    <div>
                                        <h2 class="text-gray-800 text-3xl font-semibold">{{$feature->title}}</h2>
                                        <p class="mb-2">Icône : {{$feature->icon->name}}</p>
                                        <div class="icon mb-2">
                                            <i class="{{$feature->icon->name}} text-4xl"></i>
                                        </div>

                                      <p class="mt-2 text-gray-600">{{$feature->text}}</p>
                                      <div class="flex">
                                            <a href="{{route('featureEdit', $feature)}}">
                                                <button class="bg-green-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded mt-4">Edit</button>
                                            </a>
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