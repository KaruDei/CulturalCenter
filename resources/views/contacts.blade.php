<x-layout>
    <div class="flex flex-col items-center justify-center min-h-screen">
        <div class="info-aboutus bg-floral-white rounded-xl shadow-2xl p-12 max-w-4xl border border-amber-100 "> 
        <h1 class="text-4xl font-bold text-teal-800 mb-8 border-b-2 border-amber-200 pb-2">Позвольте нам связаться с вами</h1>

        <section class="mb-10">
            <h2 class="text-3xl font-semibold text-teal-700 mb-4">Письмо в будущее</h2>
            <form class="space-y-6">
                <div>
                    <label for="name" class="block text-gray-700 text-lg font-medium mb-2">Ваше имя, пожалуйста:</label>
                    <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-old-lace" placeholder="Имя и фамилия">
                </div>
                <div>
                    <label for="email" class="block text-gray-700 text-lg font-medium mb-2">Ваш почтовый голубь:</label>
                    <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-old-lace" placeholder="Ваш email адрес">
                </div>
                <div>
                    <label for="message" class="block text-gray-700 text-lg font-medium mb-2">Ваше послание:</label>
                    <textarea id="message" name="message" rows="5" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-old-lace" placeholder="Ваше сообщение"></textarea>
                </div>
                <div>
                    <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-6 rounded focus:outline-none focus:shadow-outline transition duration-300">Отправить письмо</button>
                </div>
            </form>
        </section>

        <section class="mb-10">
            <h2 class="text-3xl font-semibold text-teal-700 mb-4">Дорога к нам</h2>
            <div class="space-y-4">
                <p class="text-gray-700 leading-relaxed">
                    Наш очаг находится по адресу:
                    <br>
                    <span class="font-bold">Улица [Название улицы], Дом [Номер дома], Город [Название города], [Почтовый индекс]</span>
                </p>
                <p class="text-gray-700 leading-relaxed">
                    Позвоните нам по телефону:
                    <br>
                    <span class="font-bold">[Номер телефона]</span>
                </p>
                <p class="text-gray-700 leading-relaxed">
                    Напишите нам письмо:
                    <br>
                    <span class="font-bold">[Адрес электронной почты]</span>
                </p>
            </div>
        </section>

        <section>
            <h2 class="text-3xl font-semibold text-teal-700 mb-4">Укажите путь</h2>
            <!-- Здесь будет интерактивная карта (замените на ваш код карты) -->
            <div class="w-full h-96 rounded-xl overflow-hidden shadow-md">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d[ZoomLevel]!2d[Longitude]!3d[Latitude]!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2s[Название места]!5e0!3m2!1sru!2sru!4v[Timestamp]"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
        </section>
</div>
    </div>
</x-layout>