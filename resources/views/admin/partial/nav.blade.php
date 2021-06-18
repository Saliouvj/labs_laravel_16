<nav class="flex flex-col bg-green-900 w-64 max-h-full px-4 tex-gray-900">

    <!-- USER Name + Photo -->
    {{-- <div class="mt-8">
        <div class="flex justify-center mx-8">
            <img src="{{ asset('img/'. Auth::user()->photo) }}" class="mx-auto h-25 border-4 border-green-500"/>
        </div>
        <div class="flex justify-center mt-2">
            <span class="font-semibold text-white">{{ Auth::user()->name }} {{ Auth::user()->firstname }}</span>       
        </div>
    </div> --}}

    <!-- LOG OUT -->
    <div class="flex justify-center">
        <form method="POST" action="{{ route('logout') }}" class="mt-2">
            @csrf
            <button class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-6 rounded">Log Out</button>
        </form> 
    </div>
    
    <div class="mt-4 mb-4">
        <ul class="ml-1">

            <!-- DASHBOARD -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300 hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <span>
                    <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24">
                        <path d="M16 20h4v-4h-4m0-2h4v-4h-4m-6-2h4V4h-4m6
                    4h4V4h-4m-6 10h4v-4h-4m-6 4h4v-4H4m0 10h4v-4H4m6
                    4h4v-4h-4M4 8h4V4H4v4z"></path>
                    </svg>
                </span>
                <a href="{{ route('dashboard') }}">
                    <span class="ml-2">Dashboard</span>
                </a>
            </li>

            @userValidate
            <!-- INFO -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300 hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <a href="{{ route('userEdit', Auth::id()) }}">
                    <span class="ml-2">Profil</span>
                </a>
            </li>
            @enduserValidate

            @admin
            <!-- ALL USERS  -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                
                <a href="{{route('adminUsers')}}">
                    <span class="ml-2">Utilisateurs</span>
                </a>
            </li>

            <!-- CAROUSEL  -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                
                <a href="{{route('adminCarousel')}}">
                    <span class="ml-2">Carousel</span>
                </a>
            </li>

            <!-- GENERAL, Logo + Footer -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <a href="{{route('adminGeneral')}}">
                    <span class="ml-2">General</span>
                </a>
            </li>

            <!-- DISCOVER, Discover + Video + Title 1 -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                
                </span>
                <a href="{{route('adminDiscover')}}">
                    <span class="ml-2">Videos et textes</span>
                </a>
            </li>
            
            <!-- TESTIMONIALS-->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                
                <a href="{{route('adminTestimonial')}}">
                    <span class="ml-2">Testimonials</span>
                </a>
            </li>

            <!-- SERVICES, Services + Title 3 -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                
                <a href="{{route('adminServices')}}">
                    <span class="ml-2">Services</span>
                </a>
            </li>

            <!-- FEATURES, Features + Title 4 -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                
                <a href="{{route('adminFeatures')}}">
                    <span class="ml-2">Features</span>
                </a>
            </li>
            
            <!-- BLOG -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                
                <a href="{{route('adminBlog')}}">
                    <span class="ml-2">Blog</span>
                </a>
            </li>

            <!-- TAGS/CATEGORIES -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                
                <a href="{{route('adminTagCategory')}}">
                    <span class="ml-2">Tags/Categories</span>
                </a>
            </li>

            <!-- CONTACT, Adress + Google Maps -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                
                <a href="{{route('adminContact')}}">
                    <span class="ml-2">Contact</span>
                </a>
            </li>
            
            <!-- VALIDATE -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                
                <a href="{{route('adminValidate')}}">
                    <span class="ml-2">Validate</span>
                </a>
            </li>

            <!-- USERS ROLES -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <a href="{{route('adminUserRole')}}">
                    <span class="ml-2">Users Roles</span>
                </a>
            </li>

            <!-- TRASH -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                
                <a href="{{route('adminTrash')}}">
                    <span class="ml-2">corbeille</span>
                </a>
            </li>
            @endadmin

            @webmaster
            <!-- VALIDATE -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                
                <a href="{{route('adminValidate')}}">
                    <span class="ml-2">Validate</span>
                </a>
            </li>

            <!-- USERS ROLES -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                
                <a href="{{route('adminUserRole')}}">
                    <span class="ml-2">Users Roles</span>
                </a>
            </li>

            <!-- TRASH -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                
                <a href="{{route('adminTrash')}}">
                    <span class="ml-2">Corbeille</span>
                </a>
            </li>
            @endwebmaster

            @writer
            <!-- BLOG -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                
                <a href="{{route('adminBlog')}}">
                    <span class="ml-2">Blog</span>
                </a>
            </li>
            @endwriter
        </ul>
    </div>
</nav>