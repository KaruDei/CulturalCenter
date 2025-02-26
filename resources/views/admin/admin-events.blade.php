<x-admin-layout>
    
    <div class="p-12 mt-[140px] mb-2 bg-floral-white rounded-xl shadow-2xl border-4 border-amber-100 max-w-md mx-auto">
        <h1 class="text-4xl font-bold text-teal-800 mb-8 border-b-2 border-amber-200 pb-2 text-center">Добавить мероприятие</h1>

        <form class="space-y-6">
            <div>
                <label class="form-label">Название</label>
                <input type="text" class="form-input"  placeholder="Введите Название мероприятия" required>
            </div>

            <div>
                <label class="form-label">Описание</label>
                <input type="text" class="form-input" placeholder="Введите описание мероприятия" required>
            </div>

            <div>
                <label class="form-label">Тип Мероприятия</label>
            <section>
                <select class="form-input-options form-input">
                </select>
            </section>

            </div>

            <div>
                <label class="form-label">Выберите Зал</label>
                <section>
                    <select class="form-input-options form-input">

                    </select>
                </section>
            
                <label class="form-label">Дата Мероприятия</label>
                <input type="date" class="form-input" placeholder="Введите дату мероприятия">

            </div>

            <div>
                <label class="form-label">Время Мероприятия</label>
                <input type="time" class="form-input" placeholder="Введите время мероприятия" >
            
            </div>

            <div>
                <label class="form-label">Длительность Мероприятия(минут)</label>
                <input type="number" class="form-input" placeholder="Введите Длительность мероприятия" >
            </div>

            <div>
                <label class="form-label">Цена Мероприятия(рублей)</label>
                <input type="number" class="form-input" placeholder="Введите цену мероприятия" >
            </div>

            <div>
                <label class="form-label">Сценарий Мероприятия</label>
                <input type="text" class="form-input" placeholder="Введите сценарий мероприятия" >
            </div>

            <div>
                <input type="hidden" name="autor" id="inputAutor" class="form-input" placeholder="Введите статус мероприятия" required disabled >
            </div>

            <div>
                <label class="form-label">Статус Мероприятия</label>
                <section>
                    <select class="form-input-options form-input">
    
                    </select>
                </section>
            </div>

            <div>
                <button type="submit" class="mt-1 bg-white transition duration-300 text-teal-700 font-semibold py-2 px-4 border border-teal-500 rounded w-full hover:bg-gray-100 focus:outline-none focus:shadow-outline">Добавить</button>
            </div>
        </form>
    </div>

    <div class="modalWindow-container">
        <div class="modalWindow-background">
            
        </div>
        <form action="{{Route('admin.users')}}" method="POST" class="modalWindow-body">
            @csrf
            @method("patch")
            <p class="button-close">Закрыть</p>
            
            
            <label for="title" class="form-label">Название</label>
            <input type="text" name="title" id="inputTitle" class="form-input" placeholder="Введите Название мероприятия" required>

            <label for="desc" class="form-label">Описание</label>
            <input type="text" name="desc" id="inputDesc" class="form-input" placeholder="Введите описание мероприятия" required>

            <label for="type" class="form-label">Тип Мероприятия</label>
            <section>
                <select id="type-select" class="form-input-options form-input">

                </select>
            </section>

            <label for="room" class="form-label">Выберите Зал</label>
            <section>
                <select id="room-select" class="form-input-options form-input">

                </select>
            </section>

            <label for="date" class="form-label">Дата Мероприятия</label>
            <input type="date" name="date" id="inputDate" class="form-input" placeholder="Введите дату мероприятия" required>

            <label for="time" class="form-label">Время Мероприятия</label>
            <input type="time" name="time" id="inputTime" class="form-input" placeholder="Введите время мероприятия" required>

            <label for="duration" class="form-label">Длительность Мероприятия(минут)</label>
            <input type="number" name="duration" id="inputDuration" class="form-input" placeholder="Введите Длительность мероприятия" required>

            <label for="price" class="form-label">Цена Мероприятия(рублей)</label>
            <input type="number" name="price" id="inputPrice" class="form-input" placeholder="Введите цену мероприятия" required>

            <label for="script" class="form-label">Сценарий Мероприятия</label>
            <input type="text" name="script" id="inputScript" class="form-input" placeholder="Введите сценарий мероприятия" required>

            <input type="hidden" name="autor" id="inputAutor" class="form-input" placeholder="Введите статус мероприятия" required disabled >

            <label for="status-select" class="form-label">Статус Мероприятия</label>
            <section>
                <select id="status-select" class="form-input-options form-input">

                </select>
            </section>
            <input type="hidden" name="event_id" id="eventID" class="form_input">
            <input type="submit" value="Сохранить" class="submit-button">
            
        </form>
        
        
    </div>
    <div class="flex flex-col items-center justify-start min-h-screen bg-linen mt-4 mb-12 pt-20">
        <h1 class="text-4xl font-bold text-teal-800 mb-12 border-b-4 border-amber-300 pb-4 text-center">Все мероприятия</h1>
        <div class="overflow-x-auto w-full max-w-5xl">
            <table class="h-20 w-full bg-floral-white rounded-xl shadow-md border border-amber-100">
                <thead class="bg-amber-100 text-teal-800">
                    <tr>
                        <th class="py-2 px-4 border-b text-left">Название</th>
                        <th class="py-2 px-4 border-b text-left">Описание</th>
                        <th class="py-2 px-4 border-b text-left">Тип мероприятия</th>
                        <th class="py-2 px-4 border-b text-left">Комната</th>
                        <th class="py-2 px-4 border-b text-left">Дата</th>
                        <th class="py-2 px-4 border-b text-left">Время</th>
                        <th class="py-2 px-4 border-b text-left">Длительность</th>
                        <th class="py-2 px-4 border-b text-left">Цена</th>
                        <th class="py-2 px-4 border-b text-left">Сценарий</th>
                        <th class="py-2 px-4 border-b text-left">Создатель</th>
                        <th class="py-2 px-4 border-b text-left">Статус</th>
                        <th class="py-2 px-4 border-b text-left">Создано</th>
                        <th class="py-2 px-4 border-b text-left">Обновлено</th>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b text-left">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $i = 0; 
                    @endphp
                    @foreach ($events as $event)
                    @php
                        $i++; 
                    @endphp
                    <tr class="h-20">
                        <td class="py-2 px-4 border-b">{{$event->title}}</td>
                        <td class="py-2 px-4 border-b">
                            <div class="w-60 h-40 overflow-y-auto">
                                {{$event->description}}
                            </div>
                        </td>
                        <td class="py-2 px-4 border-b">{{$event->eventType->type}}</td>
                        <td class="py-2 px-4 border-b">{{$event->room->number}}</td>
                        <td class="py-2 px-4 border-b">{{$event->date}}</td>
                        <td class="py-2 px-4 border-b">{{$event->time}}</td>
                        <td class="py-2 px-4 border-b">{{$event->duration}}</td>
                        <td class="py-2 px-4 border-b">{{$event->price}}</td>
                        <td class="py-2 px-4 border-b">{{$event->eventScript->title}}</td>
                        <td class="py-2 px-4 border-b">
                            
                            @if (empty($event->user))
                                Мы
                            @else
                                {{$event->user->full_name}}
                            @endif
                        
                        </td>
                        <td class="py-2 px-4 border-b">{{$event->eventStatus->status}}</td>
                        <td class="py-2 px-4 border-b">{{$event->created_at}}</td>
                        <td class="py-2 px-4 border-b">{{$event->updated_at}}</td>
                        <td class="py-2 px-4 border-b">{{$event->id}}</td>
                        <td class="py-2 px-4 border-b">
                            <div class="flex space-x-2">
                                <button id="admin-event-button-edit-{{$i}}" class="bg-white hover:bg-gray-100 text-teal-700 font-semibold py-2 px-4 border border-teal-500 rounded transition duration-300">Редактировать</button>
                                <button class="bg-white hover:bg-gray-100 text-red-700 font-semibold py-2 px-4 border border-red-500 rounded transition duration-300">Удалить</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        window.events = {!! json_encode($events) !!};
        window.eventStatuses = {!! $event_statuses_json !!};
        window.eventTypes = {!! $event_types_json !!};
        window.rooms = {!! $rooms_json !!};
    </script>
</x-admin-layout>