<template>
    <div class="profile-form">
      <form @submit.prevent="saveProfile">
        <div class="form-group">
          <label for="name" style="text-align: left;">Name :</label>
          <input type="text" id="name" v-model="profile.name" />
        </div>
        <div class="form-group">
          <label for="courseYear" style="text-align: left;">Course Year :</label>
          <input type="text" id="courseYear" v-model="profile.courseYear" />
        </div>
        <div class="form-group">
          <label for="matrixNo" style="text-align: left;">Matrix Number :</label>
          <input type="text" id="matrixNo" v-model="profile.matricNumber" />
        </div>
        <div class="form-group">
          <label for="address" style="text-align: left;">Address :</label>
          <textarea id="address" v-model="profile.address"></textarea>
        </div>
        <!-- <div class="form-buttons">
          <button type="button" @click="resetProfile" class="btn reset">Reset</button>
          <button type="submit" class="btn save">Save</button>
        </div> -->
      </form>
    </div>
  </template>
  
  
  <script setup>
  import { computed } from 'vue';
  import { useStore } from 'vuex';
  
  const store = useStore();
  
  const profile = computed(() => store.getters.profile);
  </script>
  
  <style scoped>
  .profile-form {
    max-width: 400px;
    margin: auto;
    padding: 20px;
    background: #1d1d1d;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
  }
  
  .form-group {
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
  }
  
  .form-group label {
    width: 120px;
    color: #fff;
    font-weight: bold;
    margin-right: 10px;
    text-align: right;
  }
  
  .form-group input,
  .form-group textarea {
    flex: 1;
    padding: 5px 10px;
    border-radius: 4px;
    border: 1px solid #555;
    background: #333;
    color: #fff;
  }
  
  .form-group textarea {
    resize: vertical;
  }
  
  .form-buttons {
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }
  
  .btn {
    width: 80px;
    height: 30px;
    margin: 0 10px;
    background-color: green;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  
  .btn.reset {
    background-color: red;
  }
  
  .btn.save:hover {
    background-color: darkgreen;
  }
  
  .btn.reset:hover {
    background-color: darkred;
  }
  </style>
  