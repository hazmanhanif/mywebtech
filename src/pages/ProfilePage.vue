<!-- <template>
    <div>
      <h1>Profile Page</h1>
      <form @submit.prevent="saveProfile">
        <div>
          <label for="name">Name:</label>
          <input v-model="profile.name" id="name" />
        </div>
        <div>
          <label for="courseYear">Course Year:</label>
          <input v-model="profile.courseYear" id="courseYear" />
        </div>
        <div>
          <label for="matricNumber">Matric Number:</label>
          <input v-model="profile.matricNumber" id="matricNumber" />
        </div>
        <div>
          <label for="address">Address:</label>
          <input v-model="profile.address" id="address" />
        </div>
        <button type="submit">Save</button>
      </form>
    </div>
  </template>
  
  <script>
  import { mapState, mapMutations } from 'vuex';
  
  export default {
    name: 'ProfilePage',
    computed: {
      ...mapState(['profile'])
    },
    methods: {
      ...mapMutations(['updateProfile']),
      saveProfile() {
        this.updateProfile(this.profile);
      }
    }
  };
  </script>
  -->


<script setup>
  import ProfileForm from '../components/ProfileForm.vue';
</script>
<template>
  <ProfileForm />
</template>