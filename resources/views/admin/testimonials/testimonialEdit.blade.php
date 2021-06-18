<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('testimonialUpdate', $testimonial) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h1><b>Modifier les informations du témoignage :</b></h1>
            
                        <!-- Name -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Name')" />
            
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$testimonial->name}}" required autofocus />
                        </div>
            
                        <!-- First name -->
                        <div class="mt-4">
                            <x-label for="firstname" :value="__('First name')" />
            
                            <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" value="{{$testimonial->firstname}}"  required autofocus />
                        </div>

                        <!-- Job -->
                        <div class="mt-4">
                            <x-label for="job" :value="__('Job')" />
            
                            <x-input id="job" class="block mt-1 w-full" type="job" name="job" value="{{$testimonial->job}}"  required autofocus />
                        </div>
                        
                        <!-- Image -->
                        <div class="mt-4">
                            <x-label for="image" :value="__('Image')" />

                            <x-input id="image" type='file' class="mt-1 flex flex-col items-center px-2 py-4 bg-white text-purple-900 rounded-lg tracking-wide border border-blue cursor-pointer hover:text-green-500" name="image" value="{{$testimonial->image}}" style="width: 310px" required autofocus />
                        </div>

                        <!-- Text -->
                        <div class="mt-4">
                            <x-label for="text" :value="__('Text')" />

                            <textarea name="text" id="text" class="block mt-1 w-full border-b border-gray-200 overflow-hidden shadow-sm sm:rounded-lg" rows="5" cols="60">{{$testimonial->text}}</textarea>
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