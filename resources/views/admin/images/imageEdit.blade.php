<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('imageUpdate', $image) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h1><b>Modifier l'image :</b></h1>

                        <!-- Image -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Image')" />

                            <x-input id="name" type='file' class="mt-1 flex flex-col items-center px-2 py-4 bg-white text-purple-900 rounded-lg tracking-wide border border-blue cursor-pointer hover:text-green-500" name="name" value="{{$image->name}}" style="width: 310px" required autofocus />
                        </div>

                        <div class="flex items-center justify-end mt-4">
            
                            <x-button class="ml-4" type="submit">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>