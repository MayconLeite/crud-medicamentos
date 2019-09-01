<template>
  <div class="container">    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a href="http://localhost:8000/" id="logo"><img src="http://www.althaia.com.br/img/global/logo.png"></a>
        <ul class="navbar-nav">
        
        <li class="nav-item">
          <router-link to="/create" class="nav-link">Cadastro</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/posts" class="nav-link">Index</router-link>
        </li>
      </ul>
    </nav><br />
    <transition name="fade">
      <router-view></router-view>
    </transition>
  </div>
</template>

<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
      opacity: 0
    }
</style>

<script>

    export default{
    }
</script>