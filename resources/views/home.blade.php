<x-layout>
    <div class="flex flex-col">
        <div class="slider">
                <img class="slider-item slider-item-1" src="{{ asset('images/0QNStUuWe11UCkUaSeUqRQ.png') }}" alt="">
                <img class="slider-item slider-item-2" src="{{ asset('images/1739989222-BobStoneBeginer.png') }}" alt="">
                <img class="slider-item slider-item-3" src="{{ asset('images/filters_quality(95)format(webp).png') }}" alt="">
        </div>

        <div class="events-container ">
                <h1>Ближайшие мероприятия</h1>

                <div class="event-grid grid grid-cols-4 gap-5">

                    @foreach ($events as $event)
                        <a href="{{Route('event', $event['id'])}}" class="event-item">                     
                            <img src="{{$event['picture']}}" class="event-img">
                            <div class="event-text">
                                <h2>{{$event['title']}}</h2>
                                <p>{{$event['description']}}</p>      
                            </div>
                        </a>
                    @endforeach
                       
                </div>
        </div>

        <div class="flex justify-center h-[1000px] mt-20">
            <div class="h-full w-1/2 pt-64 px-auto 2xl:pl-48 ">
                <h1 class="text-5xl text-center text-teal-700 md:text-7xl 2xl:text-left">Станьте автором мероприятия</h1>
                <button class=" text-4xl text-teal-700 shadow-2xl border-[5px] rounded-xl border-amber-300  w-[350px] h-[80px] flex flex-col items-center mx-auto mt-10 2xl:mx-0 cursor-pointer hover:border-amber-200 hover:text-teal-400  transition-colors duration-300 ">
                    Создать
                </button>
            </div>
            <img src="{{ asset('images/1739989222-BobStoneBeginer.png') }}" class="h-full w-1/2 sca hidden 2xl:block">

        </div>

        <div class="flex flex-col container items-stretch mx-auto">

            <h1 class="text-5xl text-teal-700 mx-auto mt-20 mb-20"> Новости </h1>

            <div class="">

            @foreach ($news as $newsItem)
                    <div class="bg-floral-white rounded-xl shadow-2xl border border-amber-100 w-full h-[600px] grid grid-cols-2  overflow-hidden mt-10 mb-10 ">
                        <img src="{{$newsItem['picture']}}"  class="h-full bg-gray-500 overflow-hidden">
                        <div class="flex flex-col px-5 pt-5 overflow-y-auto">
                            <h2 class="text-teal-700">{{$newsItem['title']}}</h2>
                            <p class="text-teal-700">
                                {{$newsItem['content']}}
                            </p>
                        </div>
                    </div>              
            @endforeach
        
            </div>

        </div>
    </div>    

</x-layout> 