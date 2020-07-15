<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <p>
      My name is Roman and I am 29 years old. <br>
      I am a beginner web developer.<br>
      I'm studying at college as a system administrator.
    </p>
    <h3>My skills</h3>
    <ul>
      <li><img src="" alt="">HTML</li>
      <li><img src="" alt="">CSS(SCSS/SASS)</li>
      <li><img src="" alt="">JS(JQUERY, VUE.JS)</li>
      <li><img src="" alt="">PHP</li>
      <li><img src="" alt="">MySQL</li>
    </ul>
    <h3>My Git</h3>
    <ul>
      <li><a href="https://github.com/LyrranKelmalu/" target="_blank" rel="noopener">LyrranKelmalu</a></li>
    </ul>
    <h3>Contact Links</h3>
    <ul>
      <li><a href="https://twitter.com/LyrranK" target="_blank" rel="Twitter">Twitter</a></li>
      <li><a href="https://www.instagram.com/lyrran_kelmalu/" target="_blank" rel="insta">Instagram</a></li>
      <li><a href="https://vk.com/lyrra" target="_blank" rel="vk">VK</a></li>
      <li><a href="https://www.facebook.com/roman.pappinen.1/" target="_blank" rel="noopener">FaceBook</a></li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
