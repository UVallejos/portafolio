<li class="border-l-2 list-none {{$bordercolor}}">
          <div class="md:flex flex-start">
            <div class="{{$linecolor}} w-6 h-6 flex items-center justify-center rounded-full -ml-3.5">
              <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
              </svg>
            </div>
            <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-md ml-6 mb-10">
              <div class="flex justify-between mb-4">
                <p class="font-bold text-2xl">{{$title}}</p><br>
                <p class="font-bold text-gray-900 text-lg">{{$date}}</p>
              </div>
              <p class="text-gray-700 mb-6">{{$content}}</p>
              
            </div>
        </div>
</li>