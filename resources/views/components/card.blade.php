<div class="max-w-sm rounded overflow-hidden shadow-lg">
  <img class="w-full" src="{{$src}}" alt="Imagen de lenguaje">
  <div class="p-1">
    <div class="">
        <p class="mb-1 text-xs font-neutonb tracking-wide uppercase">
          <span class="text-gray-600">{{$date}}</span>
        </p>
      <div class="font-bold text-2xl mb-2">{{$title}}</div>
      <p class="text-gray-800 text-base font-jutsur">
      {{$content}}
      </p>
    </div>
    <div class="px-6 pt-4 pb-2">
      <span class="inline-block {{$bg1}} rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$pill1}}</span>
      <span class="inline-block {{$bg2}} rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$pill2}}</span>
      <span class="inline-block {{$bg3}} rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$pill3}}</span>
      <span class="inline-block {{$bg4}} rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$pill4}}</span>
      
    </div>
    <div class="grid grid-col-1 justify-items-center ">
      <div class="">
        <a href="{{$href}}" target="_blank" aria-label="" class="jus font-neutonb transition-colors duration-200 text-xl text-bold">{{$link}}</a>
      </div>
    </div>
  </div>
</div>