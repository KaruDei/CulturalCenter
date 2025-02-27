<x-admin-layout>

    <div class="modalWindow-container">
        <div class="modalWindow-background">
            
        </div>
        <form action="{{Route('admin.news.update')}}" method="POST" class="modalWindow-body" enctype="multipart/form-data">
            @csrf
            @method("patch")
            <p class="button-close">Закрыть</p>
            
            <input type="hidden" name="news_id" id="exhibitionID" class="form-input">
            
            <label for="title" class="form-label">Название</label>
            <input type="text" name="title" id="inputTitle" class="form-input" placeholder="Введите Название выставки" required>

             
            <label for="description" class="form-label">Описание</label>
            <input type="text" name="content" id="inputDescription" class="form-input" placeholder="Введите описание выставки" required>

             
            <label for="picture" class="form-label">Картинка</label>
            <img id="exhibition_picture" class="object-contain" width="200px" src="" alt="">
            <input type="file" name="picture" id="inputPicture" class="form-input" placeholder="Картинка выставки">
            
            <input type="submit" value="Сохранить" class="submit-button">
            
        </form>
        
        
    </div>

    <div class="p-12 mt-[140px] mb-2 bg-floral-white rounded-xl shadow-2xl border-4 border-amber-100 max-w-md mx-auto">
        <h1 class="text-4xl font-bold text-teal-800 mb-8 border-b-2 border-amber-200 pb-2 text-center">Добавить новость</h1>

        <form class="space-y-6" action="{{Route('admin.news.create')}}" method="post" enctype="multipart/form-data">
            @csrf
            
            <div>
                <label class="form-label">Название</label>
                <input type="text" class="add-input"  placeholder="Введите Название новости" required>
            </div>

            <div>
                <label class="form-label">Описание</label>
                <input type="text" class="add-input" placeholder="Введите описание новости" required>
            </div>

            <div>
                <label class="form-label">Картинка</label>
                <input type="file" class="add-input" >
            
            </div>


            <div>
                <button type="submit" class="mt-1 bg-white transition duration-300 text-teal-700 font-semibold py-2 px-4 border border-teal-500 rounded w-full hover:bg-gray-100 focus:outline-none focus:shadow-outline">Добавить</button>
            </div>
        </form>
    </div>

    <div class="flex flex-col items-center justify-start min-h-screen bg-linen mt-6 mb-12 pt-20">
            <h1 class="text-4xl font-bold text-teal-800 mb-12 border-b-4 border-amber-300 pb-4 text-center">Все новости</h1>
    
            @session('error')
                {{$value}}
            @endsession

            @session('success')
                {{$value}}
            @endsession

            @error('title')
                <p>{{$message}}</p>
            @enderror

            @error('content')
                <p>{{$message}}</p>
            @enderror

            @error('picture')
                <p>{{$message}}</p>
            @enderror

            <div class="overflow-x-auto w-full max-w-5xl">
                <table class="table-auto w-full bg-floral-white rounded-xl shadow-md border border-amber-100">
                    <thead class="bg-amber-100 text-teal-800">
                        <tr>
                            <th class="py-2 px-4 border-b text-left">id новости</th>
                            <th class="py-2 px-4 border-b text-left">Название новости</th>
                            <th class="py-2 px-4 border-b text-left">Тело новости</th>
                            <th class="py-2 px-4 border-b text-left">Картинка</th>
                            <th class="py-2 px-4 border-b text-left">Кнопки</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                        $i = 0; 
                        @endphp
                        @foreach ($news as $news_item)
                        @php
                        $i++; 
                    @endphp
                        <tr>
                            <td class="py-2 px-4 border-b text-left">{{$news_item->id}}</td>
                            <td class="py-2 px-4 border-b text-left">{{$news_item->title}}</td>
                            <td class="py-2 px-4 border-b text-left">
                                <div class="w-60 h-40 overflow-y-auto">{{$news_item->content}}
                                </div>
                                </td>
                            <td class="py-2 px-4 border-b text-left"><img class="w-60 h-60 overflow-y-auto" src="{{$news_item->picture}}" alt=""></td>
                            <td class="py-2 px-4 border-b">
                                <div class="flex space-x-2">
                                    <button id="admin-news-button-edit-{{$i}}"  class="bg-white hover:bg-gray-100 text-teal-700 font-semibold py-2 px-4 border border-teal-500 rounded transition duration-300">Редактировать</button>
                                    <form action="{{Route('admin.news.delete', $news_item->id)}}", method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="bg-white hover:bg-gray-100 text-red-700 font-semibold py-2 px-4 border border-red-500 rounded transition duration-300">Удалить</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</x-admin-layout>