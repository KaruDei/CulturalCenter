<x-layout>
    <div  class="container mt-10 mb-10 mx-auto bg-floral-white rounded-xl w-full h-[800px] p-10 shadow-2xl border-2 border-amber-200">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 h-full">
            <!-- Картинка -->
            <div class="h-[500px] md:h-full bg-gray-500 border border-amber-200 rounded-xl overflow-hidden">
                <img src="{{$event['picture']}}" class="w-full h-full object-cover">
            </div>

            <!-- Информация о мероприятии -->
            <div class="h-full overflow-y-auto p-4">
                <h1 class="text-4xl font-bold text-teal-800 mb-4">{{$event['title']}}</h1>
                <p class="text-gray-700 leading-relaxed mb-8">
                    {{$event['description']}}
                </p>
            </div>
            <h1 class=" leading-relaxed mb-8">
                Цена - {{$event->price}} рублей
            </h1>
            <h1 class="leading-relaxed mb-8">
                Дата - {{$event->date}} в {{$event->time}}
            </h1>
        </div>
    </div>


    <div>
        <h1 class="text-center">Купить билеты </h1>
        
        @session('success')
            <p class="text-green-700 text-center">{{$value}}</p>
        @endsession
        
        @session('error')
            <p class="text-red-700 text-center">{{$value}}</p>
        @endsession

        @guest
            <p class="text-center text-xl"><span class="text-red-700">*</span> Для покупки билетов, войдите в систему <span class="text-red-700">*</span></p>
        @endguest
        
        @auth
        <div class="flex justify-center container items-center mx-auto"> 
            <form action="{{Route('event', $event->id)}}" method="post">
                @csrf
                @method('POST')

                <input id="price" type="hidden" name="price" value="{{$event->price}}">
                <input type="hidden" name="user_id" value="{{Auth()->id()}}">
                <input type="hidden" name="event_id" value="{{$event->id}}">
                <input type="hidden" name="room_id" value="{{$event->room->id}}">
                
                {{-- <div class="form-theatre">  
                    @for($i=1; $i<= $event->room->seats->max("row"); $i++)
                            <p>{{$i}}</p>
                        
                        @foreach ($event->room->seats->where("row", $i) as $seat)
                            @php
                                $has = false;
                            @endphp

                            @for ($j = 0; $j < $event->tickets->count(); $j++) --}}
                                {{-- {{$event->tickets}} --}}
                                {{-- @if ($event->tickets[$j]->seat->id == $seat->id)
                                    @php
                                        $has = true;
                                    @endphp --}}
                                    {{-- <p class="text-center text-blue-600">{{$seat->id}}</p> --}}
                                    {{-- @break;
                                @endif
                            @endfor

                            @if ($has)
                                <label id="label-{{$seat->number}}" class="labelforcheckbox" for="seat-{{$seat->number}}"></label>
                                <input class="checkbox" type="checkbox" id="seat-{{$seat->number}}" name="seat_id[{{$seat->id}}]" disabled>
                            @else
                                <label id="label-{{$seat->number}}" class="labelforcheckbox" for="seat-{{$seat->number}}"></label>
                                <input class="checkbox" type="checkbox" id="seat-{{$seat->number}}" name="seat_id[{{$seat->id}}]">
                            @endif
                        @endforeach
            
                    @endfor 
                </div>--}}


                {{-- ---------------------- --}}
                
                <div class="flex flex-col gap-[20px] max-w-[1000px] w-[100%] mx-auto my-[100px]">
                    @for($i=1; $i<= $event->room->seats->max("row"); $i++)
                        <div class="flex flex-nowrap gap-[20px] justify-evenly">
                            {{-- <p>{{$i}}</p> --}}

                            @foreach ($event->room->seats->where("row", $i) as $seat)
                                @php
                                    $has = false;
                                @endphp

                                @for ($j = 0; $j < $event->tickets->count(); $j++)

                                    @if ($event->tickets[$j]->seat->id == $seat->id)
                                        @php
                                            $has = true;
                                        @endphp
                                        @break;
                                    @endif
                                @endfor

                                @if ($has)
                                    <label id="label-{{$seat->number}}" class="labelforcheckbox" for="seat-{{$seat->number}}"></label>
                                    <input class="checkbox" type="checkbox" id="seat-{{$seat->number}}" name="seat_id[{{$seat->id}}]" disabled>
                                @else
                                    <label id="label-{{$seat->number}}" class="labelforcheckbox" for="seat-{{$seat->number}}"></label>
                                    <input class="checkbox" type="checkbox" id="seat-{{$seat->number}}" name="seat_id[{{$seat->id}}]">
                                @endif
                            @endforeach
                        </div>
                    @endfor
                </div>
                
                {{-- ---------------------- --}}


                <button type="submit" class="buy-button">Купить билеты</button>
            </form>
        </div>
        @endauth
        <h1 class="text-center">Актеры </h1> 
        @foreach ($actors as $actor)
            <div class="px-[200px]"> 
                <div class="bg-floral-white rounded-xl shadow-2xl border border-amber-100 w-full h-[300px] flex flex-row overflow-hidden mt-10 mb-10">
                    <img src="{{$actor['picture']}}"  class="w-1/3 h-full bg-gray-500">
                    <div class="flex flex-col px-5 pt-5">
                        <h2 class="text-teal-700">{{$actor['full_name']}}</h2>
                        <p>Роль: {{$actor->actorRole->role}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>        

   
</x-layout>