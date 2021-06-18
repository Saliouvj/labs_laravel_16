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

                    <!-- LOGO -->
                    <form method="POST" action="{{ route('logoUpdate', $logo) }}" enctype="multipart/form-data" class="mb-6">
                        @csrf
                        @method('PUT')

                        <h1><b>Changer le logo Labs :</b></h1>
            
                        <!-- Logo -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Logo')" />

                            <x-input id="name" type='file' class="mt-1 flex flex-col items-center px-2 py-4 bg-white text-purple-900 rounded-lg tracking-wide border border-blue cursor-pointer hover:text-green-500" name="name" value="{{$logo->name}}" style="width: 310px" required autofocus />
                        </div>

                        <div class="flex items-center my-4">
            
                            <x-button type="submit">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                        <hr>
                    </form>

                    <!-- SLOGAN -->
                    <form method="POST" action="{{ route('bigtitleUpdate', $footer) }}" enctype="multipart/form-data" class="mb-6">
                        @csrf
                        @method('PUT')

                        <h1><b>Modifier le slogan :</b></h1>

                        <!-- Title -->
                        <div class="mt-4">
                            <x-label for="title" :value="__('Titre')" />
            
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{$bigtitle->title}}"  required autofocus />
                        </div>

                        <!-- Phrase -->
                        <div class="mt-4">
                            <x-label for="phrase" :value="__('Design by')" />
            
                            <x-input id="phrase" class="block mt-1 w-full" type="text" name="phrase" value="{{$bigtitle->phrase}}"  required autofocus />
                        </div>

                        

                        <div class="flex items-center my-4">
            
                            <x-button type="submit">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                        <hr>
                    </form>

                    <!-- FOOTER -->
                    <form method="POST" action="{{ route('footerUpdate', $footer) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h1><b>Modifier le footer :</b></h1>
            
                        <!-- Year -->
                        <div class="mt-4">
                            <x-label for="year" :value="__('Year')" />
            
                            <x-input id="year" class="block mt-1 w-full" type="number" name="year" value="{{$footer->year}}"  required autofocus />
                        </div>

                        <!-- Copyright -->
                        <div class="mt-4">
                            <x-label for="copyright" :value="__('Copyright')" />
            
                            <x-input id="copyright" class="block mt-1 w-full" type="text" name="copyright" value="{{$footer->copyright}}"  required autofocus />
                        </div>

                        <!-- Design by -->
                        <div class="mt-4">
                            <x-label for="designby" :value="__('Design by')" />
            
                            <x-input id="designby" class="block mt-1 w-full" type="text" name="designby" value="{{$footer->designby}}"  required autofocus />
                        </div>

                        <!-- Person -->
                        <div class="mt-4">
                            <x-label for="person" :value="__('Person')" />
            
                            <x-input id="person" class="block mt-1 w-full" type="text" name="person" value="{{$footer->person}}"  required autofocus />
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