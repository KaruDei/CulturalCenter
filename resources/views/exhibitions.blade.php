<x-layout>
<div class="flex flex-col container items-stretch ml-auto mr-auto">
                <h1 class="text-5xl font-medium text-teal-800 mb-10 mt-10 mx-auto ">Выставки</h1>
                <div class="grid-cols-4 gap-5 block md:grid">
                    @foreach ( $exhibitions as $exhibition)
                    <a href="{{Route('exhibition', $exhibition['id'])}}" class="event-item">                     
                        <img src="{{$exhibition['picture']}}" class="event-img">
                        <div class="event-text">
                            <h2>{{$exhibition['title']}}</h2>
                            <p>{{$exhibition['description']}}</p>      
                        </div>
                    </a>
                    @endforeach
                </div>
        </div>
</x-layout>
