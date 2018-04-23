<template>
<div id="wrapper">
	<div id="bg-svg">
		<object id="svg-top" type="image/svg+xml" data="../../images/colored-01.svg">Your browser does not support SVGs</object>
		<object id="background-svg" type="image/svg+xml" data="../../images/contur-01.svg">Your browser does not support SVGs</object>
	</div>
	<component :is="currentView"></component>
</div>
</template>

<script>
import Consoles from '../components/Consoles';
import Birthday from '../components/Birthday';
import Koworking from '../components/Koworking';
import Food from '../components/Food';
import Tennis from '../components/Tennis';
import Scene from '../components/Scene';
import Games from '../components/Games';
import Kicker from '../components/Kicker';
import Mafia from '../components/Mafia';
import Onloader from '../components/Onloader';
export default {
	name: "home",
	data: function() {
		return {
			currentView: 'onloader',
			items: ['consoles', 'birthday', 'koworking', 'food', 'tennis', 'scene', 'games', 'kicker', 'mafia']
		}
	},
	components: {
		consoles: Consoles,
		birthday: Birthday,
		koworking: Koworking,
		food: Food,
		tennis: Tennis,
		scene: Scene,
		games: Games,
		kicker: Kicker,
		mafia: Mafia,
		onloader: Onloader,
	},
	mounted(){
		// ToDo КОСТЫЛЬ с setTimeout - почему-то svg-top появляется после mounted-хука
		setTimeout(()=> { 
			var object = document.getElementById("svg-top");
			var svgDocument = object.contentDocument;
			this.items.forEach((item)=>{
				var svg = svgDocument.getElementById(item);
				svg.addEventListener('click', () =>{
					this.items.forEach((item)=>{
						svgDocument.getElementById(item).style.opacity = '0';
					});
					svg.style.opacity = '1';
					this.currentView = item;
				});
			});
		}, 500); 
	},
}
</script>
 
<style scoped>
 
</style>