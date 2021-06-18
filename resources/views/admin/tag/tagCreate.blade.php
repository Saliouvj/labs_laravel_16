<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <h1><b>Nouveau tag :</b></h1>

                    <form method="POST" action="{{ route('tagStore') }}" enctype="multipart/form-data" class="w-1/3">
                        @csrf

                        <!-- Name -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Nom')" />
            
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
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