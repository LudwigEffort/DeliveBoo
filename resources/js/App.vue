<template>
    <div class="container">
        <div>
        <h1>Index dei post</h1>
        <div v-if="results">
            <div class="row g-3">
                <div v-for="dish in results.data" :key="dish.id" class="col-sm-6 col-md-4">
                    <div class="card h-100">
                        <img :src="'storage/' + dish.uploaded_img" class="card-img-top" :alt="dish.name">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ dish.name }}</h5>
                            <p class="card-text flex-grow-1">{{ dish.description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>



export default {
  name: 'App',
  components: {

  },
  data() {
        return {
            results: null,
            query: "",
        }
    },
    methods: {
        getDishes() {
            axios.get('/api/dishes')
                .then(response => this.results = response.data.results);
        },

    },
    created() {
        this.getDishes();
    }
}
</script>

<style lang="scss">
    @import '~bootstrap/scss/bootstrap';
</style>
