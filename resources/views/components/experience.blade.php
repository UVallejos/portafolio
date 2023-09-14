<div class="py-5 ">
        <details class="group" open="">
          <summary class="mb-5 flex justify-center items-center font-jutsub cursor-pointer list-none">
            <h3 class="font-jutsub text-3xl">{{$title}}</h3>
            <span class="transition group-open:rotate-180">
                  <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                </span>
          </summary>
          <div class="grid gap-8 lg:grid-cols-{{$cols}} sm:max-w-md sm:mx-auto lg:max-w-full">
            
          {{$content}}
    
          </div>
        </details>
      </div>