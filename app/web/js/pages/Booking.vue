<template>
<div id="wrapper">
	<form action="/api/mail" name="sentMessage" id="contactForm" method="post" novalidate>
        <div class="contactform-group">
            <label for="name">Имя</label>
            <input type="text" class="form-control" placeholder="Ваше имя" id="name" required data-validation-required-message="Пожалуйста, введите Ваше имя">
            <p class="help-block text-danger"></p>
        </div>
        <div class="contactform-group">
            <label for="book-item">Что бронируем</label>
            <select class="form-control" id="book-item">
                <option>Консоли</option>
                <option>Мафия</option>
                <option>Настолки</option>
                <option>Настольный теннис</option>
            </select>
            <p class="help-block text-danger"></p>
        </div>
        <div class="contactform-group">
            <div class='input-group date' id='datetimepicker'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <div class="contactform-group">
            <label for="phone">Телефон</label>
            <input type="tel" class="form-control" placeholder="Телефон" id="phone" required data-validation-required-message="Пожалуйста, введите Ваш номер телефона">
            <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <div class="contactform-group">
            <button type="submit" class="btn-action contact-btn">Забронировать</button>
        </div>
    </form>
</div>
</template>

<script>
   export default {
	   name: "booking",
   }
</script>
 
<style scoped>
 
</style>