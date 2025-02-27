<x-layout>
    @php
        $lastEvents = array_reverse($events->toArray());
        $lastNews = array_reverse($news->take(-2)->toArray());
    @endphp
    <div class="flex flex-col">
        <div class="slider">
                <img class="slider-item slider-item-1" src="{{$lastEvents[0]['bigpicture']}}" alt="">
                <img class="slider-item slider-item-2" src="{{$lastEvents[1]['bigpicture']}}" alt="">
                <img class="slider-item slider-item-3" src="{{$lastEvents[2]['bigpicture']}}" alt="">
                {{-- <img class="slider-item slider-item-3" src="{{ asset('images/filters_quality(95)format(webp).png') }}" alt=""> --}}
        </div>

        <div class="events-container ">
                <h1 class="h">Ближайшие мероприятия</h1>
                
                <div class="event-grid">
                    @foreach ($lastEvents as $event)
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

        <div class="container-avtor">
            <div class="content">
                <h1 class="title">Станьте автором мероприятия</h1>
                <button class="create-button"><a href="{{Route('contacts')}}" class="nav-link">Контакты</a></button>
            </div>
            <img src="{{ asset('icons/chel.png') }}" class="image hidden">
        </div>

        <div class="flex flex-col container items-stretch mx-auto">

            <h1 class="h text-5xl text-teal-700 mx-auto mt-20 mb-[80px]"> Новости </h1>

            <div class="">
            @foreach ($lastNews as $newsItem)
                    <div class="bg-floral-white rounded-xl shadow-2xl border border-amber-100 w-full h-[600px] grid grid-cols-2  overflow-hidden mt-10 mb-10 ">
                        <img src="{{$newsItem['picture']}}"  class="h-full w-full object-cover bg-gray-500 overflow-hidden">
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