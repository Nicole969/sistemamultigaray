<div class="w-full md:flex-row">
<div class="relative bg-white overflow-hidden">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <div class="max-w-7x1 mx-auto">
      <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
        <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
          <polygon points="50,0 100,0 50,100 0,100" />
        </svg>
  
        <div  x-data="{open:false}">
          <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
            <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global" >
              <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0" >
                <div class="flex items-center justify-between w-full md:w-auto">
                  <a href="/">
                    <span class="sr-only">Workflow</span>
                    <img class="h-8 w-auto sm:h-10" src="{{asset('assets/img/logo.jpg')}}">
                  </a>
                  <!-- BOTON -->
                  <div class="-mr-2 flex items-center md:hidden" >
                    <button x-on:click="open = true" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                      <span class="sr-only">Open main menu</span>
                      <!-- Heroicon name: outline/menu -->
                      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                      </svg>
                    </button>
                  </div>

                </div>
              </div>

              <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
  
                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Productos</a>
  
                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Galeria</a>
  
                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Nosotros</a>
  
                <a href="{{ route('login') }}" class="font-medium text-blue-700 hover:text-indigo-500">Log in</a>
              </div>
            </nav>
          </div>
  
          <!--
            Mobile menu, show/hide based on menu open state.
                  
            Entering: "duration-150 ease-out"
              From: "opacity-0 scale-95"
              To: "opacity-100 scale-100"
            Leaving: "duration-100 ease-in"
              From: "opacity-100 scale-100"
              To: "opacity-0 scale-95"
          -->
          <!-- menu -->
          <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" >

            <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden" x-show="open">
              <div class="px-5 pt-4 flex items-center justify-between">
                <div>
                  <img class="h-8 w-auto" src="{{asset('assets/img/logo.jpg')}}" alt="">
                </div>
                <div class="-mr-2" >
                  <button x-on:click="open = false" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Close main menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="px-2 pt-2 pb-3 space-y-1" x-show="open" >
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Productos</a>
  
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Galeria</a>
  
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Nosotros</a>
  
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Contactanos</a>
              </div>


              <a  href="{{ route('login') }}" class="block w-full px-5 py-3 text-center font-medium text-blue-700 bg-gray-50 hover:bg-blue-200">
                Log in
              </a>



            </div>
          </div>
        
        </div>
  
  
    <!-- despues del menu -->
    <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
          <div class="sm:text-center lg:text-left">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
              <span class="block xl:inline">Multiservicios</span>
              <span class="block text-blue-700 xl:inline">Garay</span>
            </h1>
            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
              Buscamos ofrecerte atención personalizada a cada uno de nuestros clientes poniendo en práctica nuestros valores, como el respeto, responsabilidad, colaboración, creatividad e iniciativa, y así dar la mejor experiencia posible.
            </p>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
              <div class="rounded-md shadow">
                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-700 hover:bg-blue-300 md:py-4 md:text-lg md:px-10">
                  Contactanos
                </a>
              </div>
              <div class="mt-3 sm:mt-0 sm:ml-3">
                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-700b g-blue-200 hover:bg-blue-300 md:py-4 md:text-lg md:px-10">
                  Ubicanos
                </a>
              </div>
            </div>
          </div>
    </main>

    </div>
    </div>
    <!-- IMAGEN -->
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
      <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{asset('assets/img/5.jpg')}}" alt="">
    </div>
  </div>

</div>

  

