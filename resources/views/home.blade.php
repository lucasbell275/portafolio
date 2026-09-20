@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-10 md:flex-row container mx-auto max-w-[1224px] mt-5">

        <div class="flex flex-col gap-10 container ">
            {{-- Titulo FRONT-END --}}
            <h1
                class="font-[Blinker] text-[#6D665F] text-5xl md:text-8xl  font-bold text-center md:max-w-[600px] tracking-[0.13em] leading-tight ">
                FRONT-END DEVELOPER</h1>
            {{-- Mi descripcion --}}
            <div class="flex flex-col max-w-[700px]  items-center gap-5">
                <p class="font-[Blinker] text-4xl md:text-7xl font-italic tracking-wider text-[#8C6057] text-center">SOBRE MI
                </p>
                <div class="flex px-5 py-6 bg-[#8C6057] rounded-4xl mx-4 md:mx-1 mb-5">

                    <p class="text-[#F0F2EF] text-lg md:text-xl leading-8 md:leading-10 md:py-5 font-[Blinker] text-light">
                        Me llamo Lucas Bell, tengo 21 años. Siempre desde chico me atrae la computación, siendo a mis 17 mis
                        primeras cercanias a la programación. Luego, a partir de descubrir este mundo, a lo largo de los
                        años hice unos cursos y me fui acercando de a poco más a este sector hasta el día de hoy. Ofrezco
                        soluciones y mantenimientos a páginas webs.
                    </p>
                </div>
            </div>
        </div>

        {{-- Cards con ALPINE --}}
        <div class="flex flex-col gap-12  md:mt-8 w-[340px] md:w-full mx-auto container">
            <div x-data="{ open: false }"
                class="flex flex-col bg-[#6D665F] w-full rounded-2xl py-6 px-5 transition-all duration-300 h-fit">

                <div @click="open = !open" class="flex flex-col items-center cursor-pointer w-full">
                    <span
                        class="text-[#AFD5AA] font-[Blinker] mb-3 text-center uppercase font-semibold text-4xl md:text-5xl max-w-[260px] pointer-events-none">
                        Links utiles
                    </span>
                    <svg class="w-6 h-6 transform transition-transform duration-300 text-[#AFD5AA] shrink-0"
                        :class="open ? 'rotate-180' : 'rotate-0'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>

                <div x-show="open" x-collapse x-transition x-cloak
                    class="grid grid-cols-3 pt-6 gap-3 container justify-items-center">
                    <div>
                        <a href="https://www.linkedin.com/in/lucas-daniel-bell/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64px" height="64px" viewBox="0 0 24 24">
                                <title>linkedin</title>
                                <g fill="none" stroke="#AFD5AA" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5">
                                    <path
                                        d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2a2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                    <rect width="4" height="12" x="2" y="9" />
                                    <circle cx="4" cy="4" r="2" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div>
                        <a href="https://drive.google.com/file/d/1_fa7FQsLwp3HYR6K4VD8_xeaO8hWlbQM/view?usp=sharing">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64px" height="64px" viewBox="0 0 24 24">
                                <title>cv / curriculum</title>
                                <g fill="none" stroke="#AFD5AA" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5">
                                    <path d="M8 2h8l4 4v14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z" />
                                    <path d="M16 2v4h4" />
                                    <path d="M10 11h4m-4 4h6" />
                                    <circle cx="9" cy="8" r="1" fill="#6D665F" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div>
                        <a href="https://github.com/lucasbell275">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64px" height="64px" viewBox="0 0 24 24">
                                <title>github</title>
                                <g fill="none" stroke="#AFD5AA" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5">
                                    <path
                                        d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4" />
                                    <path d="M9 18c-4.51 2-5-2-7-2" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }"
                class="flex flex-col bg-[#AFD5AA]/60 w-full  rounded-2xl py-6 px-5 transition-all duration-300 h-fit">

                <div @click="open = !open" class="flex flex-col items-center cursor-pointer w-full">
                    <span
                        class="text-[#6D665F] font-[Blinker] mb-3 text-center uppercase font-semibold text-4xl md:text-5xl max-w-[260px] pointer-events-none">
                        Ver lenguajes
                    </span>
                    <svg class="w-6 h-6 transform transition-transform duration-300 text-[#6D665F] shrink-0 z-0"
                        :class="open ? 'rotate-180' : 'rotate-0'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>

                <div x-show="open" x-cloak x-collapse x-transition
                    class="grid grid-cols-2 md:grid-cols-3 container gap-6 pt-6 justify-items-center">

                    <svg xmlns="http://www.w3.org/2000/svg" width="64px" height="64px" viewBox="0 0 24 24">
                        <title>html</title>
                        <g fill="none" stroke="#6D665F" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5">
                            <path
                                d="m20.754 4.792l-2.84 14.31a1.5 1.5 0 0 1-1.099 1.161l-4.069 1.045a3 3 0 0 1-1.492 0l-4.07-1.045a1.5 1.5 0 0 1-1.097-1.16L3.246 4.792A1.5 1.5 0 0 1 4.717 3h14.566a1.5 1.5 0 0 1 1.471 1.792" />
                            <path
                                d="M17 6.881H7.732a.6.6 0 0 0-.589.718l.859 4.292h7.996l-.891 4.458a1 1 0 0 1-.64.744l-2.126.77a1 1 0 0 1-.681 0l-2.127-.77a1 1 0 0 1-.64-.744l-.224-1.119" />
                        </g>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="64px" height="64px" viewBox="0 0 24 24">
                        <title>css</title>
                        <g fill="none" stroke="#6D665F" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5">
                            <path
                                d="m20.754 4.792l-2.84 14.31a1.5 1.5 0 0 1-1.099 1.161l-4.069 1.045a3 3 0 0 1-1.492 0l-4.07-1.045a1.5 1.5 0 0 1-1.097-1.16L3.246 4.792A1.5 1.5 0 0 1 4.717 3h14.566a1.5 1.5 0 0 1 1.471 1.792" />
                            <path
                                d="m15.998 11.891l-.891 4.458a1 1 0 0 1-.64.744l-2.126.77a1 1 0 0 1-.681 0l-2.146-.777a.99.99 0 0 1-.622-.74l-.222-1.114m7.328-3.341l.859-4.292a.6.6 0 0 0-.589-.718H7m8.998 5.01H8.002" />
                        </g>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="64px" height="64px" viewBox="0 0 24 24">
                        <title>python</title>
                        <g fill="none">
                            <path stroke="#6D665F" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 7.5H7.5m4.5 9h4.5m0 0h1.521c.807 0 1.634-.188 2.13-.824c.531-.679 1.099-1.835 1.099-3.676c0-1.84-.568-2.997-1.098-3.676c-.497-.636-1.324-.824-2.13-.824H16.5m0 9v1.521c0 .807-.188 1.634-.824 2.13c-.679.531-1.835 1.099-3.676 1.099-1.84 0-2.997-.568-3.676-1.098c-.636-.497-.824-1.324-.824-2.13V16.5m0-9H5.978c-.807 0-1.633.188-2.13.824-.53.679-1.098 1.835-1.098 3.676c0 1.84.568 2.997 1.098 3.676c.497.636 1.323.824 2.13.824H7.5m0-9V5.978c0-.807.188-1.633.824-2.13c.679-.53 1.835-1.098 3.676-1.098c1.84 0 2.997.568 3.676 1.098c.636.497.824 1.323.824 2.13V7.5m-9 9V14a2 2 0 0 1 2-2h5a2 2 0 0 0 2-2V7.5" />
                            <path fill="currentColor"
                                d="M15 18.5a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m-6-13a.75.75 0 1 1 1.5 0a.75.75 0 0 1-1.5 0" />
                        </g>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="64px" height="64px" viewBox="0 0 24 24">
                        <title>mysql</title>
                        <path fill="#6D665F" fill-rule="evenodd"
                            d="M20.422 17.337c-1.088-.03-1.932.081-2.64.379c-.203.082-.53.082-.557.338c.11.108.122.284.218.433c.163.27.449.635.707.824l.87.622c.531.325 1.13.514 1.647.838c.299.19.598.433.898.636c.152.108.244.284.435.352v-.041c-.095-.122-.123-.297-.217-.433l-.409-.392a6.4 6.4 0 0 0-1.415-1.365c-.435-.298-1.387-.703-1.564-1.203l-.027-.03c.299-.03.653-.136.939-.217c.463-.121.884-.095 1.36-.216l.653-.19v-.12c-.245-.244-.422-.569-.68-.798a18 18 0 0 0-2.245-1.663c-.422-.27-.966-.447-1.415-.676c-.164-.081-.435-.122-.53-.257c-.246-.297-.381-.69-.558-1.041l-1.116-2.353c-.245-.527-.395-1.054-.694-1.54-1.4-2.3-2.925-3.692-5.265-5.058c-.503-.284-1.101-.406-1.738-.554l-1.02-.055c-.218-.094-.436-.351-.626-.473c-.775-.487-2.775-1.541-3.347-.151c-.368.878.544 1.743.854 2.19c.231.31.53.662.694 1.014c.091.23.122.473.217.716c.218.595.422 1.258.708 1.812c.152.284.312.582.503.839c.109.151.3.216.34.46c-.19.27-.204.675-.313 1.014-.49 1.528-.3 3.42.395 4.545c.218.338.731 1.082 1.428.798c.613-.244.476-1.014.653-1.69c.041-.162.014-.27.095-.379v.03l.558 1.123c.422.662 1.157 1.352 1.769 1.812c.326.243.584.662.992.81v-.04h-.026c-.082-.121-.205-.176-.314-.27a6.6 6.6 0 0 1-.707-.812a17.4 17.4 0 0 1-1.523-2.46c-.218-.42-.409-.879-.585-1.298c-.083-.162-.083-.406-.218-.487-.205.297-.503.555-.654.92c-.258.58-.285 1.297-.38 2.041c-.055.014-.03 0-.055.03c-.435-.107-.585-.554-.748-.932c-.408-.96-.476-2.501-.123-3.61c.096-.284.504-1.177.341-1.447-.082-.257-.354-.405-.504-.608a5.5 5.5 0 0 1-.49-.865c-.325-.758-.489-1.596-.843-2.353c-.163-.352-.449-.717-.68-1.041c-.259-.365-.544-.622-.748-1.055c-.068-.151-.163-.392-.054-.554.026-.108.081-.152.19-.176.176-.151.68.04.857.121c.503.203.925.392 1.347.676c.19.135.394.392.64.46h.285c.436.095.925.03 1.333.152c.72.23 1.374.567 1.96.933a12 12 0 0 1 4.244 4.624c.163.311.23.595.38.92c.287.662.64 1.338.926 1.987c.286.636.558 1.285.966 1.812c.204.284 1.02.433 1.387.582c.272.12.694.23.94.378c.461.284.924.609 1.359.92c.217.162.898.5.939.77zM6.548 5.588a2.2 2.2 0 0 0-.557.068v.03h.027c.109.216.3.365.435.555l.313.649l.027-.03c.19-.136.286-.352.286-.676-.082-.095-.095-.19-.163-.284-.082-.135-.259-.203-.368-.311"
                            clip-rule="evenodd" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="64px" height="64px" viewBox="0 0 24 24">
                        <title>laravel</title>
                        <path fill="#6D665F"
                            d="M21.7 6.53c.01.02.01.05.01.08v4.29c0 .1-.06.22-.15.27l-3.61 2.08v4.11c0 .11-.05.21-.15.27l-7.52 4.33c-.02.01-.04.04-.06.04H10s0-.03-.04-.04l-7.52-4.33a.32.32 0 0 1-.15-.27V4.5c0-.05 0-.08.01-.1c0-.01.01-.02.01-.03c0-.02.01-.03.02-.05c0-.01.01-.02.02-.03l.03-.03l.03-.03c.01-.01.02-.02.03-.02L6.2 2.04c.1-.04.22-.04.3 0l3.78 2.17c.01.01.02.01.03.02l.03.03l.03.03c.01.01.02.02.02.03c.01.02.02.03.02.05c0 .01.01.02.01.03c.01.03.01.05.01.1v8l3.14-1.78V6.61c0-.03 0-.06.01-.08l.01-.03s.01-.03.02-.05c0-.01.01-.02.02-.03l.03-.03l.03-.03c.01-.01.02-.02.03-.02l3.78-2.17c.08-.06.2-.06.3 0l3.76 2.17c.01 0 .02.01.03.02l.03.03l.03.03c.01.01.01.02.02.03c.01.02.01.05.02.05s.01 0 .01.03m-.61 4.19V7.15l-3.14 1.8v3.55zm-3.76 6.46V13.6l-6.9 3.94v3.61zM2.91 5v12.18l6.9 3.97v-3.61l-3.6-2.04H6.2c-.01 0-.02 0-.03-.03c-.01 0-.02-.01-.03-.02l-.03-.03c-.01-.01-.01-.02-.02-.03c-.01-.02-.01-.03-.02-.04c0-.02-.01-.03-.01-.04c-.01-.01-.01-.03-.01-.04V6.82zm3.45-2.32L3.23 4.5l3.13 1.78L9.5 4.5zm3.45 10.2V5L6.67 6.82v7.87zm7.83-8.08L14.5 6.61l3.14 1.8l3.13-1.8zm-.31 4.15l-3.14-1.8v3.57l3.14 1.78zM10.12 17L17 13.06l-3.12-1.8L7 15.23z" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="64px" height="64px" viewBox="0 0 24 24">
                        <title>php</title>
                        <path fill="#6D665F"
                            d="M3 15V9h3.5q.6 0 1.05.45T8 10.5v1q0 .6-.45 1.05T6.5 13h-2v2zm6.5 0V9H11v2h2V9h1.5v6H13v-2.5h-2V15zm7 0V9H20q.6 0 1.05.45t.45 1.05v1q0 .6-.45 1.05T20 13h-2v2zm-12-3.5h2v-1h-2zm13.5 0h2v-1h-2z" />
                    </svg>
                </div>
            </div>





        </div>

    </div>
    <span class="border-b-2 border-[#8C6057]/25 mt-2 flex mx-auto max-w-[1224px] "></span>
    <div class="max-w-[1224px] mx-auto container mt-1 min-h-screen">
        <div class="flex flex-col items-center container">
            <h2
                class="uppercase text-5xl border-b border-[#8C6057] mb-5 mt-5 font-bold tracking-wider font-[Blinker] text-[#8C6057]">
                mis proyectos
            </h2>

            @foreach ($proyectos as $proyecto)
                <div
                    class="flex flex-col items-center gap-2 bg-[#8C6057] border-[1.5px] border-white/20 backdrop-blur-md  p-10 shadow-xl">
                    <h2 class="font-bold text-[#AFD5AA] font-[Blinker] text-2xl tracking-wide   ">
                            {{ $proyecto['titulo'] }}</span>
                    </h2>
                    {{-- Relative al div padre, para que todas las cosas que tengan absolute se posicionen con respecto al padre --}}
                    <div class="relative w-full mx-auto max-w-3xl container" x-data="{
                        current: 0,
                        total: {{ count($proyecto['images']) }},
                        {{-- Con el %, se busca "repartir" como tal, entonces, si tenemos de longitud de imagenes 6 en total, 
                    y tenemos el current en 1, y sumamos, pasamos al 2,
                    2%6 no se puede repartir nada en numeros iguales, entonces nos deja 2. Si llegamos al 6, nos da 0,
                    porque nos quedamos sin repartir. --}}
                        next() { this.current = (this.current + 1) % this.total },
                        prev() { this.current = (this.current - 1 + this.total) % this.total }
                    }">
                        {{-- Al x-data, se le pasa el actual, el cual por predeterminado va a ser 0, y hay que tener el total de imagenes, 
                pasandole la funcion count al array de imagenes.
                Luego, se definen las funciones next y prev, los cuales van a ser los botones que se usan para ir 
                desplazandose de izquierda a derecha. --}}

                        <div class="overflow-hidden rounded-xl ">
                            <div class="flex transition-transform duration-500 ease-in-out"
                                :style="`transform: translatex(-${current * 100}%)`">
                                @foreach ($proyecto['images'] as $image)
                                    <div class="w-full flex-none">
                                        <img src="{{ asset($image['src']) }}" alt="{{ $image['alt'] }}"
                                            class="block h-[450px] w-full object-cover">
                                    </div>
                                @endforeach
                            </div>

                        </div>

                        <button @click="prev()" aria-label="Anterior"
                            class="bg-black/25 absolute left-3 top-1/2 h-11 w-11 -translate-y-1/2 rounded-full text-2xl text-white ">
                            <svg class="w-5 h-5" fill="none" stroke="#AFD5AA" stroke-width="2.5" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>

                        <button @click="next()" aria-label="Siguiente"
                            class="bg-black/25 absolute right-3 top-1/2 h-11 w-11 -translate-y-1/2 rounded-full text-2xl ">
                            <svg class="w-5 h-5 " fill="none" stroke="#AFD5AA" stroke-width="2.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>

                        <div class="mt-3 flex justify-center gap-2">
                            {{-- Aca estan los tipicos circulos de indice de los carruseles. Al hacer click, 
                                lo actual cambia al circulito correspondiente que hicimos click --}}
                            @foreach ($proyecto['images'] as $image)
                                <button @click="current = {{ $loop->index }}"
                                    aria-label="Ir a la imagen {{ $loop->iteration }}"
                                    class="h-2.5 w-2.5 rounded-full transition-colors"
                                    :class="current === {{ $loop->index }} ? 'bg-[#AFD5AA]' : 'bg-gray-300/60'">
                                </button>
                            @endforeach
                        </div>

                    </div>
                        <p class="text-center text-lg text-[#AFD5AA] font-semibold">{{ $proyecto['descripcion'] }}</p>

                        <a class="flex block justify-center text-xl text-[#AFD5AA] font-bold"
                            href="{{ $proyecto['url'] }}">Link al proyecto</a>
                </div>
            @endforeach



        </div>


    </div>
@endsection
