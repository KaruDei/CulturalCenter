<x-layout>
<div class="flex flex-col container items-stretch ml-auto mr-auto">
                <h1 class="text-5xl font-medium text-teal-800 mt-10 mx-auto ">Все мероприятия</h1>

                <div class="grid grid-cols-4 gap-5">
                    
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
</x-layout>




