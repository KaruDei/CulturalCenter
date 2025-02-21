<x-layout>
    <div class="container mx-auto bg-floral-white rounded-xl w-full h-[600px] p-10 shadow-2xl border-2 border-amber-200">
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
    <h1 class="text-center">Купить билеты </h1>
    <div class="flex justify-center container items-center"> 
        <form action="">
                
            <div class="form-theatre"></div>

            <button class="buy-button">Купить билет</button>
        </form>
    </div>    
</x-layout>