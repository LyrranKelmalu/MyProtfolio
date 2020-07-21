<template>
  <div id="app">
    <img id="my_face" alt="Vue logo" src="./assets/my_photo.jpg">
    <HelloWorld msg="Welcome to my porfolio"/>
  </div>
</template>

<script>
import HelloWorld from './components/mainPage.vue'

export default {
  name: 'App',
  components: {
    HelloWorld
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
#my_face{
  border-radius: 100%;
  width: 250px;
  height: 250px;
}
</style>
