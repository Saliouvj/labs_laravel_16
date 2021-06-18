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

                    <!-- CONTACT -->
                    <form method="POST" action="{{ route('contactUpdate', $contact) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h1><b>Modifier la localisation :</b></h1>
            
                        <!-- Description -->
                        <div class="mt-4">
                            <x-label for="description" :value="__('Description')" />
            
                            <x-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{$contact->description}}"  required autofocus />
                        </div>
            
                        <!-- rue -->
                        <div class="mt-4">
                            <x-label for="street" :value="__('rue')" />
            
                            <x-input id="street" class="block mt-1 w-full" type="text" name="street" value="{{$contact->street}}"  required autofocus />
                        </div>

                        <!-- code postal -->
                        <div class="mt-4">
                            <x-label for="postcode" :value="__('adresse postale')" />
            
                            <x-input id="postcode" class="block mt-1 w-full" type="number" name="postcode" value="{{$contact->postcode}}"  required autofocus />
                        </div>

                        <!-- City -->
                        <div class="mt-4">
                            <x-label for="city" :value="__('ville')" />
            
                            <x-input id="city" class="block mt-1 w-full" type="text" name="city" value="{{$contact->city}}"  required autofocus />
                        </div>

                        <!-- Phone -->
                        <div class="mt-4">
                            <x-label for="phone" :value="__('telephone')" />
            
                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{$contact->phone}}"  required autofocus />
                        </div>

                        <!-- E-mail -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('E-mail')" />
            
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$contact->email}}"  required autofocus />
                        </div>

                        <div class="flex items-center my-4">
            
                            <x-button type="submit">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                        <hr>
                    </form>

                    <!-- GOOGLE MAPS -->
                    <form method="POST" action="{{ route('mapUpdate', $map) }}" enctype="multipart/form-data" class="mt-4">
                        @csrf
                        @method('PUT')

                        <h1><b>Adress:</b></h1>
                        <h1>Clic droit sur le point Google Maps, et coller les coordonnées dans le champs</h1>
                        <br>
                        <h1><i>exemple: 50.85550521015151, 4.341224998017869</i></h1>
            
                        <!-- Link -->
                        <div class="mt-4">
                            <x-label for="location" :value="__('Lieu')" />
            
                            <x-input id="location" class="block mt-1 w-full" type="text" name="location" value="{{$map->location}}"  required autofocus />
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