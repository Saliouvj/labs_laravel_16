<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    
                    <!-- Carousel -->
                    <div>
                        <h1><b>Images du carousel</b></h1>
                        <a href="{{route('imageCreate')}}">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Ajouter une image</button>
                        </a>
                        <div class="my-4">
                            @include('layouts.flash')
                        </div>
                        <div class="flex flex-wrap">
                            @foreach ($images as $image)
                                <div class="w-2/5 py-4 px-8 bg-white shadow-lg rounded-lg my-10 mr-6">
                                    <div>
                                      <img src="../img/{{$image->name}}" alt="" style="height: 180px">
                                      <div>
                                        @if ($image->active == 1)
                                            <h1 class="text-md mt-4 py-2 px-4 border border-black rounded w-3/5"><b>image principale</b></h1>
                                            
                                        @else
                                            
                                        <form method="POST" action="{{ route('firstImage', $image) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                                <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mt-4">Définir en tant que première image</button>
                                        </form>
                                        @endif
                                        </div>
                                        <div class="flex">
                                            <a href="{{route('imageEdit', $image)}}">
                                                <button class="bg-green-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded mt-4">Edit</button>
                                            </a>
                                            <form method="post" action="{{route('imageDestroy', $image)}}">
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

