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
                        <span class="contact-highlight">Улица [Название улицы], Дом [Номер дома], Город [Название города], [Почтовый индекс]</span>
                    </p>
                    <p class="contact-text">
                        Позвоните нам по телефону:
                        <br>
                        <span class="contact-highlight">[Номер телефона]</span>
                    </p>
                    <p class="contact-text">
                        Напишите нам письмо:
                        <br>
                        <span class="contact-highlight">[Адрес электронной почты]</span>
                    </p>
                </div>
            </section>

            <section class="map-section mb-10">
                <h2 class="map-title">Укажите путь</h2>
                <!-- Здесь будет интерактивная карта (замените на ваш код карты) -->
                <div class="map-container">
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