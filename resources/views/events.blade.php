<x-layout>
<div class="flex flex-col container items-stretch ml-auto mr-auto mt-[-80px]">
                <h1 class="text-5xl font-medium text-teal-800 mb-10 mt-10 mx-auto ">Все мероприятия</h1>

                <div class="grid grid-cols-4 gap-5">
                    
                    @foreach ($events as $event)
                    <a href="{{Route('event', $event['id'])}}" class=" bg-floral-white rounded-xl shadow-2xl max-w-4xl border border-amber-100  w-[400fr] h-[600px] flex flex-col items-center overflow-hidden">                     
                        <img src="{{$event['picture']}}"  class="w-full h-2/4"> <!-- этот див вместо картинки  -->
                        <h2 class="mt-3 mb-3">{{$event['title']}}</h2>
                        <p class="ml-5 mr-5">{{$event['description']}}</p>                       
                    </a>       
                    @endforeach
                </div>
</div>
</x-layout>
