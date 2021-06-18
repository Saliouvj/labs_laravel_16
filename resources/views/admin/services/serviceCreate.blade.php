<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('serviceStore') }}" enctype="multipart/form-data">
                        @csrf

                        <h1><b>Nouveau service :</b></h1>
                        
                        <!-- Icon -->
                        <div class="mt-4">
                            <x-label for="icon" :value="__('Icon')" />

                            <select id="icon" class="block mt-1 w-full border-b border-gray-200 overflow-hidden shadow-sm sm:rounded-lg" name="icon" :value="old('icon')">
                                @foreach ($icons as $icon)
                                    <option value="{{$icon->id}}">{{$icon->name}}</option>
                                @endforeach
                            </select>
                        </div>
            
            
                        <!-- Title -->
                        <div class="mt-4">
                            <x-label for="title" :value="__('Title')" />
            
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" required autofocus />
                        </div>

                        <!-- Text -->
                        <div class="mt-4">
                            <x-label for="text" :value="__('Text')" />

                            <textarea name="text" id="text" class="block mt-1 w-full border-b border-gray-200 overflow-hidden shadow-sm sm:rounded-lg" rows="5" cols="60"></textarea>
                        </div>
            
                        <div class="flex items-center mt-4">
            
                            <x-button type="submit">
                                {{ __('Create') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>