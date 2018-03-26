<template>
    <div id="right-menu">
      <router-link to="/" class="menu-item">Главная</router-link>
      <router-link to="/calendar" class="menu-item">Календарь мероприятий</router-link>
      <router-link to="/booking" class="menu-item">Бронирование</router-link>
      <router-link to="/contacts" class="menu-item">Контакты</router-link>
    </div>
</template>

<script>
   export default {
       name: "next-menu"
   }
</script>
 
<style scoped>
 
</style>