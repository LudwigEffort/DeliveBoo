<template>
<div>
    <Navbar />
    <main>
        <!--Render del singolo component-->
        <router-view
            :data="data"
            :slugs="slugs"
                   >
        </router-view>
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
                slugs: ['slug']
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
