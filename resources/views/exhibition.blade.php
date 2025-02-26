<x-layout>
    <div id="con" class="hidden">
    </div>
    <div  class="container mt-12 mb-4 mx-auto bg-floral-white rounded-xl w-full h-[800px] p-10 shadow-2xl border-2 border-amber-200">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 h-full">
            <!-- Картинка -->
            <div class="h-[500px] md:h-full bg-gray-500 border border-amber-200 rounded-xl overflow-hidden">
                <img src="{{$exhibition['picture']}}" alt="Изображение выставки современного искусства" class="w-full h-full object-cover">
            </div>

            <!-- Информация о выставке -->
            <div class="h-full overflow-y-auto p-4">
                <h1 class="text-4xl font-bold text-teal-800 mb-4">{{$exhibition['title']}}</h1>
                <p class="text-gray-700 leading-relaxed mb-8">
                    {{$exhibition['description']}}
                </p>
                
            </div>
            <h1 class="leading-relaxed mb-8">
                Начало - {{$exhibition->start_date}}
            </h1>
            <h1 class="leading-relaxed mb-8">
                Конец - {{$exhibition->end_date}}
            </h1>
        </div>
    </div>
</x-layout>