<template>
    <div>
        <Navbar />
        <!--<Cart :cart="cart" />-->
        <!--<lu class="order-list" :v-for="order in orders" :key="order.id">-->
            <!--<li>{{ order.name }} - {{ order.price }}€</li>-->
        <!--</lu>-->
        <main>
            <router-view

            />
        </main>
        <Footer />
    </div>
</template>

<script>
import Navbar from './components/Navbar.vue';
import Footer from './components/Footer.vue';
//import Cart from './pages/Cart.vue';
export default {
    name: 'App',
    components: {
        Navbar,
        Footer,
        //Cart,
    },
    data() {
        return {
            data: null,
            cart: [],
        }
    },
    methods: {

    }
}
</script>

<style lang="scss">
@import '~bootstrap/scss/bootstrap';
ul {
    list-style: none;
}
</style>
