<template>
   <div class="explanation">
	   <div id="next-greeting">
			<img id="next-logo-big" src="../../images/next.png">
			<div id="next-caption">Всё происходит здесь</div>
		</div>
	</div>
</template>
 
<script>
   export default {
	   name: "onloader",
	   mounted() {
		   $(function () {
                $('#datetimepicker').datetimepicker({
                    locale: 'ru'
                });
            });
	   }
   }
</script>
 
<style scoped>
 
</style>