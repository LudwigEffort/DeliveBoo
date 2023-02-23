<template>
<div>
    <!--Navbar-->
    <Navbar />
    <main>
        <!--Render del singolo component-->
        <router-view></router-view>
    </main>
    <!--Footer-->
    <Footer />
</div>
</template>

<script>
import Navbar from './components/Navbar.vue';
import Footer from './components/Footer.vue';
export default {
  name: 'App',
  components: {
    Navbar,
    Footer,
  },
  /* data() {
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
    } */
}
</script>

<style lang="scss">
    @import '~bootstrap/scss/bootstrap';
</style>
