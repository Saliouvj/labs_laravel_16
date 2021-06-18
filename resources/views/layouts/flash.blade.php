@if ($message = Session::get('success'))
      <div class="bg-green-100 border-t border-b border-green-500 text-green-700 py-3" role="alert">
        <p class="font-bold text-center">{{$message}}</p>
      </div>
@endif
@if ($message = Session::get('warning'))
      <div class="bg-yellow-100 border-t border-b border-yellow-500 text-yellow-700 px-4 py-3" role="alert">
        <p class="font-bold text-center">{{$message}}</p>
      </div>
@endif
