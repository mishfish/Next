<template>
<div id="wrapper" style="width:85%">
  <vue-event-calendar :events="demoEvents"></vue-event-calendar>
</div>
</template>
 
<script>
export default {
  data () {
    return {
      demoEvents: [{
        date: '2018/03/12', // Required
        title: 'Foo' // Required
      }, {
        date: '2018/03/18',
        title: 'Bar',
        desc: 'description',
        customClass: 'disabled highlight' // Custom classes to an calendar cell
      }]
    }
  },
  name: "calendar",
}
</script>

<style scoped>
 
</style>