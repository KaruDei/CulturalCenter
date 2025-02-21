<x-layout>

<div class="flex flex-col container items-stretch ml-auto mr-auto mt-[-80px]">
                <h1 class="text-5xl font-medium text-teal-800 mb-10 mt-10 mx-auto ">Выставки</h1>
                <div class="grid grid-cols-4 gap-5">
                    @foreach ( $exhibitions as $exhibition)
                    <a href="{{Route('exhibition', $exhibition['id'])}}" class=" bg-floral-white rounded-xl shadow-2xl max-w-4xl border border-amber-100  w-[400fr] h-[600px] flex flex-col items-center overflow-hidden">                     
                        <img src="{{$exhibition['picture']}}"  class="w-full h-2/4">
                        <h2 class="mt-3 mb-3">{{$exhibition['title']}}</h2>
                        <p class="ml-5 mr-5">{{$exhibition['description']}}</p>                       
                    </a>
                    @endforeach
                </div>
        </div>
</x-layout>
