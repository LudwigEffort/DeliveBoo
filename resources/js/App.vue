<template>
<div>
    <Navbar />
    <main>
        <!--Render del singolo component-->
        <!--!Vanno passati i dati dell'api tramite le props-->
        <router-view
            :data="data"
        />
    </main>
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
    data() {
            return {
                data: null,
            }
        },
        methods: {
            getUsers() {
                axios.get('/api/users').then(response => this.data = response.data.results);
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
