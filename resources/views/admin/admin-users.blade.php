<x-admin-layout>
    
    <div class="modalWindow-container">
        <div class="modalWindow-background">
            
        </div>
        <form action="" method="POST" class="modalWindow-body">
            @csrf
            @method("patch")
            <p class="button-close">Закрыть</p>
            <label for="fullname">
                ФИО
            </label>
            <input type="text" name="fullname" id="inputFullname" class="input-modal">
            <label for="email">
                почта
            </label>
            <input type="text" name="email" id="inputEmail" class="input-modal">
            <label for="picture">
                <img id="labelPicture" src="" alt="asdasd" class="w-12 h-12 rounded-full object-cover">
            </label>
            <input type="file" name="picture" id="inputPicture" class="input-modal">
            <input type="submit" name="" id="" class="input-modal">
        </form>
    </div>

    <div class="flex flex-col items-center justify-center min-h-screen bg-linen">

        <h1 class="text-4xl font-bold text-teal-800 mb-12 border-b-4 border-amber-300 pb-4 text-center">Все пользователи</h1>

        <div class="overflow-x-auto w-full max-w-5xl">
            <table class="table-auto w-full bg-floral-white rounded-xl shadow-md border border-amber-100">
                <thead class="bg-amber-100 text-teal-800">
                    <tr>
                        <th class="py-2 px-4 border-b text-left">Имя пользователя</th>
                        <th class="py-2 px-4 border-b text-left">Почта</th>
                        <th class="py-2 px-4 border-b text-left">Аватар</th>
                        <th class="py-2 px-4 border-b text-left">Заказы</th>
                        <th class="py-2 px-4 border-b text-left">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $i = 0; 
                    @endphp
                    @foreach ($users as $user)
                    @php
                        $i++; 
                    @endphp
                        <tr id="wrap-{{$i}}">
                            <td class="py-2 px-4 border-b">{{$user->full_name}}</td>
                            <td class="py-2 px-4 border-b">{{$user->email}}</td>
                            <td class="py-2 px-4 border-b">
                                <img src="{{$user->picture}}" alt="Аватар {{$user->full_name}}" class="w-12 h-12 rounded-full object-cover">
                            </td>
                            <td class="py-2 px-4 border-b">{{$user->userOrders->count()}}</td>
                            <td class="py-2 px-4 border-b">
                                <div class="flex space-x-2">
                                    <button id="button-edit-{{$i}}" class="button bg-white hover:bg-gray-100 text-teal-700 font-semibold py-2 px-4 border border-teal-500 rounded transition duration-300">Редактировать</button>
                                    <button id="button-delete-{{$i}}" class="button bg-white hover:bg-gray-100 text-red-700 font-semibold py-2 px-4 border border-red-500 rounded transition duration-300">Удалить</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <button class=" mt-10 bg-white hover:bg-gray-100 text-teal-700 font-semibold py-2 px-4 border border-teal-500 rounded transition duration-300"><a href="{{Route('admin-create-user')}}" class="nav-link">Добавить пользователя</a></button>
    </div>

</x-admin-layout>

