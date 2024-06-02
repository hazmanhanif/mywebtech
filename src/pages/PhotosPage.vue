<template>
  <div>
    <h1>Photos Page</h1>
    <div v-if="filteredPhotos.length" class="photos-grid">
      <div v-for="photo in filteredPhotos" :key="photo.id" class="photo-item">
        <img :src="photo.thumbnailUrl" :alt="photo.title" />
        <p>{{ photo.title }}</p>
      </div>
    </div>
    <div v-else>
      <p>Loading...</p>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'PhotosPage',
  data() {
    return {
      photos: [],
      query: ''
    };
  },
  computed: {
    filteredPhotos() {
      return this.photos.filter(photo => photo.title.includes(this.query));
    }
  },
  async created() {
    const response = await axios.get('https://jsonplaceholder.typicode.com/photos?_limit=10');
    this.photos = response.data;
  },
  watch: {
    '$route.query.search'(newQuery) {
      this.query = newQuery || '';
    }
  }
};
</script>

<style scoped>
.photos-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  gap: 10px;
  padding: 20px;
}

.photo-item {
  background: #f4f4f4;
  border-radius: 5px;
  overflow: hidden;
  text-align: center;
  padding: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.photo-item img {
  max-width: 100%;
  height: auto;
  border-radius: 5px;
}

.photo-item p {
  margin-top: 10px;
  font-size: 14px;
  color: #333;
}
</style>
