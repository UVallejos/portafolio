
<!--About Me-->
<div id="about" class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-10 drop-shadow-xl">
  <x-about-me></x-about-me>
</div>

<!--Stacks-->
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-10 drop-shadow-xl">
<x-stacks></x-stacks>
</div>

<!--Portafolio-->
<div id="portafolio" class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-10 drop-shadow-xl">
  <x-title>
    Portafolio
  </x-tittle>
  <div class="grid gap-8 lg:grid-cols-4 sm:max-w-sm sm:mx-auto lg:max-w-full">

  @component("components.card")
      @slot('src', asset("assets/img/laravel.svg"))
      @slot("date", "2023")
      @slot("title", "Portafolio")
      @slot("content", "Desarrollo de portafolio web con Lararavel y Tailwind CSS ")
      @slot("link", "GitHub")
      @slot("href", "https://github.com/UVallejos/portafolio_simple")
    @endcomponent

    @component("components.card")
      @slot('src', asset("assets/img/laravel.svg"))
      @slot("date", "2023")
      @slot("title", "Aplicación de Ayuno Intermitente")
      @slot("content", "Aplicación de divulgación del ayuno intermitente y aplicación de registro de horas de un ayuno")
      @slot("link", "GitHub")
      @slot("href", "https://github.com/UVallejos/Fast4UBody")
    @endcomponent

    @component("components.card")
      @slot('src', asset("assets/img/solidity.svg"))
      @slot("date", "2023")
      @slot("title", "Cajero Automatico de Criptomonedas")
      @slot("content", " Cajero Automatico de ETH con diversas funciones codificado con Solidity")
      @slot("link", "Próximamente")
      @slot("href", "#")
    @endcomponent

    @component("components.card")
      @slot('src', asset("assets/img/solidity.svg"))
      @slot("date", "2023")
      @slot("title", "Billetera de Criptomonedas")
      @slot("content", "Mercado en línea descentralizado.")
      @slot("link", "Próximamente")
      @slot("href", "#")
    @endcomponent

    
  </div>
</div>

<!--Experience-->
<div id="experience" class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-10 drop-shadow-xl">
  <div class="max-w-screen-xl mx-auto px-5 bg-white min-h-sceen">
    <x-title>
      Experiencia
    </x-tittle>
    <div class="grid grid-cols-2 divide-x divide-neutral-200 max-w-full mx-auto mt-4">
      
      <!--ACADEMICA-->
      @component("components.experience")
        @slot("cols", 1)
        @slot('title', "Academica")
        @slot('content')
        <x-timeline>
            @component("components.timeline-item")
              @slot("bordercolor", "border-purple-600")
              @slot("linecolor", "bg-purple-600")
              @slot("title", "Bootcamp De Programación Blockchain")
              @slot('date', "2023")
              @slot('content')
                    -Introducción a Blockchain y Criptografía
                    -Fundamentos de programación en Solidity
                    -Estándares de Activos Digitales
                    <br>-Automatización, Pruebas y Extensión de Contratos Inteligentes
                    <br>-Finanzas Descentralizadas (DeFi)
              @endslot
              
            @endcomponent

            @component("components.timeline-item")
              @slot("bordercolor", "border-blue-accent-200")
              @slot("linecolor", "bg-blue-accent-200")
              @slot("title", "CFGS Desarrollo De Aplicaciones Web")
              @slot('date', "2022-2023")
              @slot('content')
              Formación en lenguajes de programación, metodologías ágiles, bases de datos, seguridad de la información y experiencia de usuario
              @endslot
              
            @endcomponent

            @component("components.timeline-item")
              @slot("bordercolor", "border-purple-600")
              @slot("linecolor", "bg-purple-600")
              @slot("title", "CFGM Actividades Comerciales")
              @slot('date', "2016-2018")
              @slot('content')
              Centrado en la preparación para trabajar en el ámbito comercial y de servicios. Habilidades de gestión, marketing, relaciones públicas, atención al cliente y comercio electrónico.
              @endslot
              
            @endcomponent

            
            @component("components.timeline-item")
              @slot("bordercolor", "border-blue-accent-200")
              @slot("linecolor", "bg-blue-accent-200")
              @slot("title", "CFGM Sistemas Microinformáticos")
              @slot('date', "2015-2016")
              @slot('content')
              Centrado en la instalación, configuración y mantenimiento de sistemas informáticos y redes. conocimientos en áreas como hardware de computadoras, sistemas operativos, redes y seguridad informática.
              @endslot
              
            @endcomponent
        </x-timeline>
        @endslot
        
      @endcomponent

      <!--PROFESIONAL-->
      @component("components.experience")
        @slot("cols", 1)
        @slot('title', "Profesional")
        @slot('content')
        <x-timeline>
            @component("components.timeline-item")
              @slot("bordercolor", "border-blue-accent-200")
              @slot("linecolor", "bg-blue-accent-200")
              @slot("title", "Practicas Desarrollo Web")
              @slot('date', "2023")
              @slot('content')
                Practicas académicas centradas en desarrollo web con Laravel 9, NodeJS y Solidity. 
              @endslot
              
            @endcomponent

            @component("components.timeline-item")
              @slot("bordercolor", "border-purple-600")
              @slot("linecolor", "bg-purple-600")
              @slot("title", "Atención al Cliente HBO Max")
              @slot('date', "2019-2022")
              @slot('content')
                Atención al cliente por canales como llamada, mail y chat de clientes del servicio.
              @endslot
              
            @endcomponent

            @component("components.timeline-item")
              @slot("bordercolor", "border-blue-accent-200")
              @slot("linecolor", "bg-blue-accent-200")
              @slot("title", "Atención al cliente Decathlon")
              @slot('date', "2017-2018")
              @slot('content')
                Atención al cliente y venta directa enDecathlon, organización en equipo, control de inventario y contacto directo con el cliente.
              @endslot
              
            @endcomponent

            @component("components.timeline-item")
              @slot("bordercolor", "border-purple-600")
              @slot("linecolor", "bg-purple-600")
              @slot("title", "Auxiliar de Cocina")
              @slot('date', "2015-2017")
              @slot('content')
                Atención al cliente y venta directa enDecathlon, organización en equipo, control de inventario y contacto directo con el cliente.
              @endslot
              
            @endcomponent

      
        </x-timeline>
        @endslot
      @endcomponent

      
      
    </div>
  </div>
</div>

<!--Tecnology-->


<!--Contacto-->
<div id="contact" class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-10 drop-shadow-xl">
  <x-title>
    Contacto
  </x-tittle>
  <div class="grid gap-8 lg:grid-cols-1 sm:max-w-sm sm:mx-auto lg:max-w-full">
    <x-contact></x-contact>
  </div>
</div>

