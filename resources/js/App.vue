<template>
    <div class="container">
        <h1>Index dei restaurants</h1>
        <div v-if="arrUsers">
            <div class="row g-3">
                <!--CONTROLLARE DATI IN ARRIVO-->
                <div v-for="user in arrUsers" :key="user.id" class="col-sm-6 col-md-4">
                    <div class="card h-100">
                        <img :src="'storage/' + user.uploaded_img" class="card-img-top" :alt="user.name">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ user.name }}</h5>
                            <h5 class="card-title">{{ user.email }}</h5>
                            <h5 class="card-title">{{ user.vat_number }}</h5>
                            <h5 class="card-title">{{ user.opening_time }}</h5>
                            <h5 class="card-title">{{ user.closing_time }}</h5>
                            <h5 class="card-title">{{ user.is_opened }}</h5>
                            <p class="card-text flex-grow-1">{{ user.descripion }}</p>
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
            arrUsers: null,
        }
    },
    methods: {
        getUsers() {
            axios.get('/api/users').then(response => this.arrUsers = response.data.results);
        },

    },
    created() {
        this.getUsers();
    }
}
</script>

<style lang="scss">
    @import '~bootstrap/scss/bootstrap';
</style>
