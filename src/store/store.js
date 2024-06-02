// store/index.js
import { createStore } from 'vuex';
import axios from 'axios';

const store = createStore({
  state: {
    profile: {
      name: 'Hazman Hanif',
      courseYear: '3/SECJH',
      matricNumber: 'A21MJ5039',
      address: 'UTM - KL'
    },
    photos: []
  },
  mutations: {
    updateProfile(state, newProfile) {
      state.profile = newProfile;
    },
    setPhotos(state, photos) {
      state.photos = photos.slice(0, 10); // Limit photos to 10
    }
  },
  actions: {
    async fetchPhotos({ commit }) {
      try {
        const response = await axios.get('https://jsonplaceholder.typicode.com/photos');
        commit('setPhotos', response.data);
      } catch (error) {
        console.error('Error fetching photos:', error);
      }
    }
  },
  getters: {
    profile: (state) => state.profile
  }
});

export default store;
