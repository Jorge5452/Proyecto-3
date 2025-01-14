<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Candidatos Vacante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="text-center text-3xl font-bold  mb-10 my-5">Candidatos Vacante: {{ $vacante->titulo }}</h1>
                    <div class="md:flex md:justify-center">
                        <ul class="divide-y divide-white w-full">
                            @forelse ($vacante->candidatos  as $candidato)
                                <li class="p-3 flex items-center">
                                    <div class="flex-1">
                                        <p class="text-xl font-medium text-white"> {{$candidato->user->name}} </p>
                                        <p class="text-sm text-white"> {{$candidato->user->email}} </p>
                                        <p class="text-sm font-medium text-white">Dia que se postulo: <span class="font-normal"> {{$candidato->user->created_at ->diffForHumans()}}</span> </p>


                                    </div>

                                    <div>
                                        <a
                                        class="inline-flex items-center shadow-sm px-3 py-2 border border-white text-sm
                                             leading-5 font-medium text-black rounded-full bg-white hover:bg-gray-300 focus:outline-none focus:ring-2 " 
                                        href=" {{ asset('storage/cv/' . $candidato->cv) }}"
                                        target="_blank"
                                        rel="noreferrer noopener"

                                        >
                                            Ver CV
                                        </a>

                                    </div>
                                </li>
                            @empty
                                <p class="p-3 text-center text-sm text-white">No hay candidatos</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
