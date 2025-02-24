<x-layout>
    <div  class="container mt-10 mb-10 mx-auto bg-floral-white rounded-xl w-full h-[600px] p-10 shadow-2xl border-2 border-amber-200">
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
        </div>
    </div>


    <div>
        <h1 class="text-center">Купить билеты </h1>
        @guest
            <p class="text-center text-xl"><span class="text-red-700">*</span> Для покупки билетов, войдите в систему <span class="text-red-700">*</span></p>
        @endguest
        
        @auth
        <div class="flex justify-center container items-center"> 
            <form action="{{Route('test')}}" method="post">
                @csrf
                @method('POST')

                <div class="form-theatre">

                </div>

                <button class="buy-button">Купить билет</button>
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
                        <p>Роль: Князь Владимир</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>        

   
</x-layout>