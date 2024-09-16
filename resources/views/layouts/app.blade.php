<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
         <!--script de fullcalendar-->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
         @vite(['resources/css/app.css', 'resources/js/app.js'])
         @notifyCss


    </head>
    <body class="bg-gray-200">
        <div class="flex flex-wrap">
            <x-Header.navbar/>
            <div class="w-full flex-1">
            <!-- Main navigation container -->
            <header>
              <nav
              class="flex-no-wrap relative flex w-full items-center justify-between bg-neutral-100 py-2 shadow-md shadow-black/5 dark:bg-neutral-600 dark:shadow-black/10 lg:flex-wrap lg:justify-start lg:py-4"
              data-twe-navbar-ref>
              <div class="flex w-full flex-wrap items-center justify-between px-3">
                <!-- Hamburger button for mobile view -->
                <button class="nav-buttom">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                  </svg>
              </button>

                <!-- Collapsible navigation container -->
                <div
                  class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
                  id="navbarSupportedContent1"
                  data-twe-collapse-item>
                    <!-- <button class="nav-buttom">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button> -->
                </div>

                <!-- Right elements -->
                <div class="relative flex items-center">

                  <!-- Second dropdown container -->
                  <div class="relative" data-twe-dropdown-ref>
                    <!-- Second dropdown trigger -->
                    <a
                      class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                      href="#"
                      id="dropdownMenuButton2"
                      role="button"
                      
                      aria-expanded="false">
                      <!-- User avatar -->
                      <img
                        src="{{ asset('img/perfil/'. Auth::user()->icono)}}"
                        class="rounded-full"
                        style="height: 25px; width: 25px"
                        alt=""
                        loading="lazy" />
                    </a>
                    <!-- Second dropdown menu -->
                    <ul
                      class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-neutral-700"
                      aria-labelledby="dropdownMenuButton2"
                      id="dropdown"
                      data-twe-dropdown-menu-ref>
                      <!-- Second dropdown menu items -->
                      <li>
                        <a
                          class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                          href="{{route('profile.edit')}}"
                          data-twe-dropdown-item-ref
                          >Perfil</a
                        >
                      </li>
                      <li>
                         <form action="{{ route('logout') }}" method="POST">
                             @csrf
                             <button
                             class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"onclick="event.preventDefault(); this.closest('form').submit();">Cerrar Sesión</button>
                         </form>
                      </li>
                    </ul>
                  </div>
                </div>
                
              </div>
              
            </nav>
            </header>
              <!--contenido-->
            <div class=" py-4">
              <x-notify::notify />
                <main class="container mx-auto">
                    {{ $slot }}
                </main>
            </div>

        </div>
        @notifyJs
    </body>
    <script>
          let pathme = window.location.pathname;
          if(pathme === '/Agenda') {
            $(document).ready(function() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $('#calendar').fullCalendar({
                        header: {
                            left: 'prev, next today',
                            center: 'title',
                            right: 'month, agendaWeek, agendaDay',
                        },
                        locale: 'es',
                    initialView: 'dayGridMonth',
                    events: '/calendar/events',
                    editable: true,
                    eventClick: function (event) {
                         let deleteMsg = confirm("¿Realmente quieres eliminar?");
                         if (deleteMsg) {
                             $.ajax({
                                  type:"POST",
                                  dataType:"json",
                                  url: "#",
                                  data: {
                                          id: event.id,
                                          type: 'delete'
                                  },
                                  success: function (response) {
                                     location.reload();
                                  }
                              });
                         }
                    }
                    });
              });
          }
    </script>
</html>
