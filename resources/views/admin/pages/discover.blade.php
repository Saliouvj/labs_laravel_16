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

                    <!-- Video -->
                    <form method="POST" action="{{ route('videoUpdate', $video) }}" enctype="multipart/form-data" class="mb-6">
                        @csrf
                        @method('PUT')

                        <h1><b>Lien de la vidéo :</b></h1>
            
                        <!-- Link -->
                        <div class="mt-4">
                            <x-label for="link" :value="__('Lien')" />
            
                            <x-input id="link" class="block mt-1 w-full" type="text" name="link" value="{{$video->link}}"  required autofocus />
                        </div>

                        <div class="flex items-center my-4">
            
                            <x-button type="submit">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                        <hr>
                    </form>

                    <!-- Titre 1 -->
                    <form method="POST" action="{{ route('titleUpdate', $title[0]) }}" enctype="multipart/form-data" class="mb-6">
                        @csrf
                        @method('PUT')

                        <h1><b>Changer le titre :</b></h1>
                        
            
                        <!-- Name -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Title')" />
            
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$title[0]->name}}"  required autofocus />
                        </div>

                        <div class="flex items-center my-4">
            
                            <x-button type="submit">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                        <hr>
                    </form>

                    <!-- Discover -->
                    <form method="POST" action="{{ route('discoverUpdate', $discover) }}" enctype="multipart/form-data" class="mb-6">
                        @csrf
                        @method('PUT')

                        <h1><b>Modifier les 2 textes  :</b></h1>
                        
                        <div class="flex justify-between">
                            <!-- LEFT -->
                            <div class="mt-4">
                                <x-label for="textLeft" :value="__('Text à gauche')" />
                
                                <textarea name="textLeft" id="textLeft" class="block mt-1 w-full border-b border-gray-200 overflow-hidden shadow-sm sm:rounded-lg" rows="10" cols="60">{{$discover->textLeft}}</textarea>
                            </div>
    
                            <!-- RIGHT -->
                            <div class="mt-4">
                                <x-label for="textRight" :value="__('Text à droite')" />
                
                                <textarea name="textRight" id="textRight" class="block mt-1 w-full border-b border-gray-200 overflow-hidden shadow-sm sm:rounded-lg" rows="10" cols="60">{{$discover->textRight}}</textarea>
                            </div>
                        </div>

                        <div class="flex items-center mt-4">
            
                            <x-button type="submit">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>