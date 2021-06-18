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

                    <!-- Articles -->
                    <div>
                        <h1><b>Article</b></h1>
                        <a href="{{route('postCreate')}}">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Ajouter un article</button>
                        </a>
                        <!-- Carte article -->
                        @foreach ($posts as $post)
                            
                        <div class="mt-6 mb-8">
                            <div class="flex flex-col w-full bg-white shadow-lg sm:w-3/4 md:w-1/2 lg:w-3/5">
                                <div class="w-full">
                                    <img src="../img/{{$post->image}}" alt="" style="height: 250px">
                                </div>
                                <div class="flex flex-col w-full md:flex-row">
                                    <div class="p-4 font-normal text-gray-800">
                                      <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800">{{$post->title}}</h1>
                                      <p class="leading-normal">{{Str::limit($post->text, 200, '...')}}</p>
                                        <div class="items-center mt-4 text-gray-700">
                                            <div class="w-1/2 mb-2">
                                                <p><b>Auteur :</b> {{$post->user->name}}</p>
                                            </div>
                                            <div style="width: 100px">
                                                <p class="mb-2"><b>Date :</b> </p>
                                                <div class="px-3 py-3 font-bold bg-purple-600 text-center mb-1">
                                                    <div class="md:text-4xl text-white">{{$post->dateDay}}</div>
                                                    <div class="md:text-xl text-green-400">{{$post->dateMonth}}</div>
                                                    <div class="md:text-xl text-green-400">{{$post->dateYear}}</div>
                                                </div>
                                            </div>
                                            <div class="flex mt-4">
                                                <a href="{{route('postEdit', $post)}}">
                                                    <button class="bg-green-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</button>
                                                </a>
                                                <form method="post" action="{{route('trashArticle', $post)}}">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">corbeille</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>