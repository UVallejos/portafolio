<div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
    <img src="{{$src}}" class="object-contain max-h-full max-w-full" alt="" />
    
    <div class="p-5">
        <p class="mb-1 text-xs font-neutonb tracking-wide uppercase">
          <span class="text-gray-600">{{$date}}</span>
        </p>
        <a href="/" aria-label="Category" title="Visit the East" class="inline-block mb-1  font-bold leading-5 "></a>
        <p class="mb-2 text-2xl font-jutsuo transition-colors duration-200 hover:text-deep-purple-accent-700">
          {{$title}}
        </p>
        <p class="mb-2 text-gray-700 text-lg font-jutsur ">
          {{$content}}
        </p>
        <div class="flex justify-center content-end">
          <a href="{{$href}}" target="_blank" aria-label="" class="jus font-neutonb transition-colors duration-200 text-xl text-bold">{{$link}}</a>
        </div>
    </div>
</div>