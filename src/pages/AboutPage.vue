<!-- <template>
    <div>
      <h1>About Page</h1>
      <p>Name: {{ profile.name }}</p>
      <p>Course Year: {{ profile.courseYear }}</p>
      <p>Matric Number: {{ profile.matricNumber }}</p>
      <p>Address: {{ profile.address }}</p>
      <button @click="resetProfile">Reset</button>
      <button @click="saveProfile">Save</button>
    </div>
  </template>
  
  <script>
  import { mapState, mapMutations } from 'vuex';
  
  export default {
    name: 'AboutPage',
    computed: {
      ...mapState(['profile'])
    },
    methods: {
      ...mapMutations(['resetProfile', 'updateProfile']),
      resetProfile() {
        this.resetProfile({
          name: 'Hazman Hanif',
          courseYear: '3/SECJH',
          matricNumber: 'A21MJ5039',
          address: 'UTM-KL'
        });
      },
      saveProfile() {
        // Assuming newProfile is obtained from a form or other inputs
        const newProfile = {
          name: 'Jane Doe',
          courseYear: 'Fourth Year',
          matricNumber: '654321',
          address: '456 Main St'
        };
        this.updateProfile(newProfile);
      }
    }
  };
  </script>
   -->

   <script setup>
   import AboutTable from '@/components/AboutTable.vue';
 </script>
 <template>
   <AboutTable />
 </template>