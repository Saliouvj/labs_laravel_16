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

                    <h1><b>Modifier la catégorie :</b></h1>

                    <form method="POST" action="{{ route('categoryUpdate', $category) }}" enctype="multipart/form-data" class="w-1/3">
                        @csrf
                        @method('PUT')
                        <div>
                            <div class="flex justify-between">
                                <!-- Tags -->
                                <div class="mt-4">
                                    <x-label for="name" value="{{$category->id}}" />
                    
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$category->name}}"  required autofocus />
                                </div>
                            </div>
                            <div class="flex mt-4">
                    
                                <x-button type="submit">
                                    {{ __('Update') }}
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>