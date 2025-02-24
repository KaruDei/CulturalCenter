<x-admin-layout>
    <div class="flex flex-col items-center justify-start min-h-screen bg-linen mt-6 pt-20">
            <h1 class="text-4xl font-bold text-teal-800 mb-12 border-b-4 border-amber-300 pb-4 text-center">Все заказы</h1>
    
            <div class="overflow-x-auto w-full max-w-5xl">
                <table class="table-auto w-full bg-floral-white rounded-xl shadow-md border border-amber-100">
                    <thead class="bg-amber-100 text-teal-800">
                        <tr>
                            <th class="py-2 px-4 border-b text-left">Название новости</th>
                            <th class="py-2 px-4 border-b text-left">Тело новости</th>
                            <th class="py-2 px-4 border-b text-left">Картинка</th>
                            <th class="py-2 px-4 border-b text-left">Кнопки</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $news_item)
                            
                        <tr>
                            <td class="py-2 px-4 border-b text-left">{{$news_item->title}}</td>
                            <td class="py-2 px-4 border-b text-left">
                                <div class="w-60 h-40 overflow-y-auto">{{$news_item->content}} {{$news_item->content}} {{$news_item->content}} {{$news_item->content}} {{$news_item->content}} {{$news_item->content}} {{$news_item->content}} {{$news_item->description}} {{$news_item->content}} {{$news_item->content}}
                                </div>
                                </td>
                            <td class="py-2 px-4 border-b text-left"><img class="w-60 h-60 overflow-y-auto"" src="{{$news_item->picture}}" alt=""></td>
                            <td class="py-2 px-4 border-b">
                                <div class="flex space-x-2">
                                    <button class="bg-white hover:bg-gray-100 text-teal-700 font-semibold py-2 px-4 border border-teal-500 rounded transition duration-300">Редактировать</button>
                                    <button class="bg-white hover:bg-gray-100 text-red-700 font-semibold py-2 px-4 border border-red-500 rounded transition duration-300">Удалить</button>
                                </div>
                            </td>
                        </tr>
    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</x-admin-layout>