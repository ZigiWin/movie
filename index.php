<?php
require_once 'header.php';
?>
<section class="afisha">
    <div class="afisha-title">
        <h1 class="title">Афиша</h1>
        <a href="#" class="events-link">
            <img src="events.svg" alt="">
            Все мероприятия
        </a>
    </div>
    <div class="posters">
        <div class="poster">
            <div class="date">
                <span class="day">3</span>
                <span class="month">июня</span>
            </div>
            <img src="poster__image.png" class="image-placeholder">
            <div class="info">
                <h2>«ВЕК имени СИНАТРЫ»</h2>
                <p>Посвящение Фрэнку Синатре.</p>
                <div class="details">
                    <span class="type">Джаз</span>
                    <span class="time">19:00</span>
                    <span class="age">6+</span>
                </div>
            </div>
            <button class="buy-ticket">Заказать билет</button>
        </div>
        <div class="poster">
            <div class="date">
                <span class="day">30</span>
                <span class="month">июня</span>
            </div>
            <img src="poster2__image.png" class="image-placeholder">
            <div class="info">
                <h2>Опера VS Оперетта</h2>
                <p>Санкт-Петербургский камерный оркестр Olympic Orchestra</p>
                <div class="details">
                    <span class="type">Классика</span>
                </div>
            </div>
            <button class="buy-ticket">Заказать билет</button>
        </div>
    </div>
</section>
<?php
require_once 'footer.php';
?>
