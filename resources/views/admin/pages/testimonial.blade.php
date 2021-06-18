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

                    <!-- Title 2 -->
                    <form method="POST" action="{{ route('titleUpdate', $title[1]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h1><b>Changer le titre :</b></h1>
                        
            
                        <!-- Name -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Title')" />
            
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$title[1]->name}}"  required autofocus />
                        </div>

                        <div class="flex items-center my-4">
            
                            <x-button type="submit">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                        <hr>
                    </form>

                    <!-- Testimonials -->
                    <div class="mt-4">
                        <h1><b>Testimonials</b></h1>
                        <a href="{{route('testimonialCreate')}}">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Ajouter un témoignage</button>
                        </a>
                        <div class="flex flex-wrap">
                            @foreach ($testimonials as $testimonial)
                                <div class="py-4 px-8 bg-white shadow-lg rounded-lg my-20 mr-6" style="width: 450px">
                                    <div class="flex justify-center md:justify-end -mt-16">
                                      <img class="w-20 h-20 object-cover rounded-full border-4 border-green-400" src="../img/{{$testimonial->image}}">
                                    </div>
                                    <div>
                                      <h2 class="text-gray-800 text-3xl font-semibold">{{$testimonial->firstname}} {{$testimonial->name}}</h2>
                                      <h4 class="text-gray-800 text-xl font-semibold">{{$testimonial->job}}</h4>
                                      <p class="mt-2 text-gray-600">{{$testimonial->text}}</p>
                                      <div class="flex">
                                            <a href="{{route('testimonialEdit', $testimonial)}}">
                                                <button class="bg-green-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded mt-4">Edit</button>
                                            </a>
                                            <form method="post" action="{{route('testimonialDestroy', $testimonial)}}">
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