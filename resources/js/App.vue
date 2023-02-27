<template>
    <div>
        <Navbar />
        <Cart :name="name" :price="price" />
        <main>
            <router-view
                :data="data"
                @addToCart="addToCart"
            />
        </main>
        <Footer />
    </div>
</template>

<script>
import Navbar from './components/Navbar.vue';
import Footer from './components/Footer.vue';
import Cart from './pages/Cart.vue';


export default {
    name: 'App',
    components: {
        Navbar,
        Footer,
        Cart,
    },
    data() {
            return {
                data: null,
                name: '',
                price: '',
            }
        },
        methods: {
            getUsers() {
                axios.get('/api/users').then(response => this.data = response.data.results);
            },
            addToCart(name, price) {
                this.name = name;
                this.price = price;
            }
        },
        created() {
            this.getUsers();
        }
}
</script>

<style lang="scss">
    @import '~bootstrap/scss/bootstrap';
</style>
