<template>
    <div id="app" class="main">
      <navigation-bar class="navbar" @search="searchPhotos"/>
      <router-view />
    </div>
  </template>
  
  <script>
  import NavigationBar from './components/NavigationBar.vue';

  export default {
    name: 'App',
    components: {
      NavigationBar,

    },
    methods: {
    searchPhotos(query) {
      this.$router.push({ path: '/photos', query: { search: query } });
    }
  }
  };
  </script>
  

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.main {
    width: 100%;
    background-color: #000;
    background-image: url('/src/assets/1.jpg');
    background-position: center;
    background-size: cover;
    height: 100vh;
}

.navbar {
    width: 100%;
    height: 75px;
    margin: auto;
}
</style>
