<template>
  <nav class="navbar">
    <div class="icon">
      <h2 class="logo">W.Tech</h2>
    </div>
    <div class="menu">
      <ul>
        <li><router-link to="/home">Home</router-link></li>
        <li><router-link to="/about">About</router-link></li>
        <li><router-link to="/profile">Profile</router-link></li>
        <li><router-link to="/photos">Photos</router-link></li>
      </ul>
    </div>
    <div class="search">
      <input class="srch" type="search" v-model="query" placeholder="Type To Find">
      <button class="btn" @click="searchPhotos">Find</button>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'NavigationBar',
  data() {
    return {
      query: ''
    };
  },
  methods: {
    searchPhotos() {
      this.$emit('search', this.query);
    }
  }
};
</script>

<style scoped>
.navbar {
  width: 100%;
  height: 75px;
  background-color: #333;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 20px;
}

.icon .logo {
  color: #fc8d1e;
  font-size: 20px;
  font-family: Cambria;
}

.menu ul {
  list-style: none;
  display: flex;
  margin: 0;
  padding: 0;
}

.menu ul li {
  margin-left: 30px;
}

.menu ul li a {
  text-decoration: none;
  color: white;
  font-family: Arial;
  font-weight: bold;
  transition: color 0.4s ease-in-out;
}

.menu ul li a:hover {
  color: #ff7200;
}

.search {
  display: flex;
  align-items: center;
}

.srch {
  font-family: 'Times New Roman';
  width: 150px;
  height: 30px;
  background: transparent;
  border: 1px solid #ff7200;
  color: #fff;
  font-size: 16px;
  padding: 5px 10px;
  border-bottom-left-radius: 5px;
  border-top-left-radius: 5px;
  border-right: none;
}

.btn {
  width: 80px;
  height: 30px;
  background: #ff7200;
  border: 1px solid #ff7200;
  color: #fff;
  font-size: 15px;
  border-bottom-right-radius: 5px;
  border-top-right-radius: 5px;
  transition: 0.2s ease;
  cursor: pointer;
}

.btn:hover {
  color: black;
}

.btn:focus,
.srch:focus {
  outline: none;
}
</style>
