<div class="relative mt-16 bg-gray-900">
  <svg class="absolute top-0 w-full h-6 -mt-5 sm:-mt-10 sm:h-16 text-blue-accent-200" preserveAspectRatio="none" viewBox="0 0 1440 54">
    <path fill="currentColor" d="M0 22L120 16.7C240 11 480 1.00001 720 0.700012C960 1.00001 1200 11 1320 16.7L1440 22V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z"></path>
  </svg>
  <div class="px-4 pt-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
      <div class="md:max-w-md lg:col-span-2">
        <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
              <div class="flex flex-shrink-0 items-center">
                <img class="h-14 w-14" src="{{asset('assets/img/logo.png')}}" alt="Ulises Vallejos">
              </div>
          <span class="ml-2 text-xl font-bold tracking-wide text-gray-100 ">Ulises Antonio Vallejos Salgado</span>
        </a>
      </div>
      <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
        <div>
            <div class="flex space-x-4">
                  @foreach($navigationItems as $item)
                  <x-layout.footer-item :href="$item['href']">{{$item["label"]}}</x-layout.footer-item>
                  @endforeach
            </div>
            
        </div>
        
      </div>
    </div>
    <div class="flex flex-col justify-between pt-5 pb-10 border-t border-deep-purple-accent-200 sm:flex-row">
      <p class="text-sm text-gray-100">
        © Copyright 2023.
      </p>
      <div class="flex items-center mt-4 space-x-4 sm:mt-0">
        
      </div>
    </div>
  </div>
</div>