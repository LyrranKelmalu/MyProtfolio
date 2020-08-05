<template>
  <div id="app">
    <img id="my_face" alt="Vue logo" src="./assets/my_photo.jpg">
    <router-view></router-view>
  </div>
</template>

<script>


export default {
  name: 'App',
  methods: {

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

  h1{
    font-family: "Permanent Marker";
  }
  h2{
    font-family: "Permanent Marker";
  }
  p{
    font-family: "Permanent Marker";
    font-size: 23px;
  }
</style>
