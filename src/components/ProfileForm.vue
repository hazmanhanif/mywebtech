<template>
    <div class="profile-form">
      <form @submit.prevent="saveProfile">
        <table>
          <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="text" id="name" v-model="profile.name" /></td>
          </tr>
          <tr>
            <td><label for="courseYear">Course Year:</label></td>
            <td><input type="text" id="courseYear" v-model="profile.courseYear" /></td>
          </tr>
          <tr>
            <td><label for="matrixNo">Matrix Number:</label></td>
            <td><input type="text" id="matrixNo" v-model="profile.matricNumber" /></td>
          </tr>
          <tr>
            <td><label for="address">Address:</label></td>
            <td><textarea id="address" v-model="profile.address"></textarea></td>
          </tr>
          <tr>
            <td colspan="2" class="form-buttons">
              <button type="button" @click="resetProfile" class="btn reset">Reset</button>
              <button type="submit" class="btn save">Save</button>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </template>
  
  <script>
  import { computed } from 'vue';
  import { useStore } from 'vuex';
  
  export default {
    setup() {
      const store = useStore();
      const profile = computed(() => store.state.profile);
  
      return {
        profile
      };
    },
    data() {
      return {
        originalProfile: {
          name: '',
          courseYear: '',
          matricNumber: '',
          address: '',
        }
      };
    },
    methods: {
      resetProfile() {
        this.profile.name = this.originalProfile.name;
        this.profile.courseYear = this.originalProfile.courseYear;
        this.profile.matricNumber = this.originalProfile.matricNumber;
        this.profile.address = this.originalProfile.address;
      },
      saveProfile() {
        // Save profile logic
        this.originalProfile = { ...this.profile };
        this.$store.commit('updateProfile', this.profile);
      }
    },
    mounted() {
      this.originalProfile = { ...this.profile };
    }
  };
  </script>
  
  <style scoped>
  .profile-form {
    align-items: center;
    max-width: 400px;
    margin: auto;
    padding: 20px;
    background: #1d1d1d;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
  }
  
  td {
    padding: 10px;
    vertical-align: middle;
  }
  
  label {
    color: #fff;
    font-weight: bold;
    display: inline-block;
    width: 100%;
  }
  
  input, textarea {
    width: 100%;
    padding: 5px 10px;
    border-radius: 4px;
    border: 1px solid #555;
    background: #333;
    color: #fff;
  }
  
  textarea {
    resize: vertical;
  }
  
  .form-buttons {
    text-align: center;
    padding-top: 20px;
  }
  
  .btn {
    width: 100px;
    height: 40px;
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
  