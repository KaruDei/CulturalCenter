<x-layout>
    <div class="container-info">
        <div class="all-info"> 
            <h1>Позвольте нам связаться с вами</h1>

            <section>
                <h2>Письмо в будущее</h2>
                <form class="contact-form">
                    <div class="form-group">
                        <label for="name" class="form-label">Ваше имя, пожалуйста:</label>
                        <input type="text" id="name" name="name" class="form-input" placeholder="Имя и фамилия">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Ваш почтовый голубь:</label>
                        <input type="email" id="email" name="email" class="form-input" placeholder="Ваш email адрес">
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Ваше послание:</label>
                        <textarea id="message" name="message" rows="5" class="form-textarea" placeholder="Ваше сообщение"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="submit-button">Отправить письмо</button>
                    </div>
                </form>
            </section>

            <section class="contact-info">
                <h2 class="contact-title">Дорога к нам</h2>
                <div class="contact-details space-y-4">
                    <p class="contact-text">
                        Наш очаг находится по адресу:
                        <br>
                        <span class="contact-highlight">Улица Пушкинская, Дом 268, Город Ижевск, 426006</span>
                    </p>
                    <p class="contact-text">
                        Позвоните нам по телефону:
                        <br>
                        <span class="contact-highlight">+7 (3412) 91-81-18</span>
                    </p>
                    <p class="contact-text">
                        Напишите нам письмо:
                        <br>
                        <span class="contact-highlight">mveu@25.ru</span>
                    </p>
                </div>
            </section>

            <section class="map-section mb-10">
                <h2 class="map-title">Укажите путь</h2>
                <!-- Здесь будет интерактивная карта (замените на ваш код карты) -->
                <div class="map-container">
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3A&ll=53.213395%2C56.861756&z=16"
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