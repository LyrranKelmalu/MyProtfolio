<template>
  <div class="hello">
    <ul>
      <router-link to="/registration">
        <button>
          <h1>Registration</h1>
        </button>
      </router-link>
      <router-link to="/shop">
        <button>
          <h1>Shop</h1>
        </button>
      </router-link>
    </ul>
    <h1>{{ msg }}</h1>
    <p>
      My name is Roman and I am 29 years old. <br>
      I am a beginner web developer.<br>
      I'm studying at college as a system administrator.
    </p>
    <h2>My skills</h2>
    <ul>
      <li><img src="../assets/html_logo_300x300.png" alt=""><p>HTML</p></li>
      <li><img src="../assets/css_logo_300x300.png" alt=""><p>CSS(SCSS/SASS)</p></li>
      <li><img src="../assets/javascript_logo_300x300.png" alt=""><p>JS(JQUERY, VUE.JS)</p></li>
    </ul>
    <h2>My Git</h2>
    <ul>
      <li><a href="https://github.com/LyrranKelmalu/" target="_blank" rel="noopener">LyrranKelmalu</a></li>
    </ul>
    <div class="footer">
      <h2>Contact Links</h2>
      <ul>
        <li><a href="https://twitter.com/LyrranK" target="_blank" rel="Twitter">Twitter</a></li>
        <li><a href="https://www.instagram.com/lyrran_kelmalu/" target="_blank" rel="insta">Instagram</a></li>
        <li><a href="https://vk.com/lyrra" target="_blank" rel="vk">VK</a></li>
        <li><a href="https://www.facebook.com/roman.pappinen.1/" target="_blank" rel="noopener">FaceBook</a></li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: 'mainPage',
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
.reg_form{
  width: 30%;
  margin: 0 auto;
  border: solid 2px #000000;
}
@media only screen and (max-width: 1440px) {
  .reg_form{
    width: 35%;
  }
  img{
    width: 200px;
    height: auto;
  }
}
@media only screen and (max-width: 1023px) {
  .reg_form{
    width: 90%;
  }
  img{
    width: 150px;
    height: auto;
  }
}
  input{
    width: 30%;
  }

.footer{
  height: 100px;
}
</style>
