<template>
    <div>
        <div v-if="data" class="container-fluid post-div" :data="data">
            <GoBack />


            <div>Cart items: {{ cart.length }}</div>
            <div v-if="page === 'UserShow'">
                <button @click="navigateTo('cart'), $emit('moveCart', cart)">View Cart</button>

            <section class="restaurant-card">
                <img :src="'storage/' + restaurant.uploaded_img" class="card-img-top" :alt="restaurant.name">

                <!--todo MANCANO LE CATEGORIES CHE DEVONO ESSERE ASSOCIATE ALLO USER, AL MOMENTO L'ARRAY É VUOTO-->
                <!--<h4 v-if="data.categories">Categories: {{ data.categories.name }}</h4> -->

                <h3 class="card-title">{{ restaurant.name }}</h3>
                <h6 class="card-title">Email: {{ restaurant.email }}</h6>
                <h6 class="card-title">Vat Number: {{ restaurant.vat_number }}</h6>
                <h6 class="card-title">Opening Time: {{ restaurant.opening_time }}</h6>
                <h6 class="card-title">Closing Time: {{ restaurant.closing_time }}</h6>
                <h6 class="card-title">Opened now: {{ ((restaurant.is_opened) ? 'Yes' : 'No') }}</h6>

                <!--<button @click="sendDataToAPI">Make Order</button>-->
            </section>
            <hr>
            <section>
                <h1>DISHES of {{ restaurant.name }}</h1>
                <router-view
                :key="$route.path"
                :data="data"
                @addToCart="addToCart"
                @removeFromCart="removeFromCart"
                />
                <div class="dish-card"
                v-for="dish in restaurant.dishes"
                :key="dish.slug"
                >
                <!--*SINGOLO DISH ITERATO-->
                    <router-link :to="{ name: 'Dish', params: {dishSlug: dish.slug} }" class="card">
                        <h3>{{ dish.name }}</h3>
                        <h6>Price: {{ dish.price }}€</h6>
                        <h6>Available: <span :style="((dish.available) ? 'color:green' : 'color:red')">
                            {{ ((dish.available) ? 'Yes' : 'No') }} </span></h6>
                        </router-link>
                        <!--<button @click="addToCart(dish.name, dish.price)" >Add to Cart</button>-->
                    </div>

                </section>
            </div>
            <div v-else>
                <button @click="navigateTo('UserShow')">View Products</button>
                <ul v-for="(product, i) in cart" :key="i" class="card">
                    <li>Dish:{{ product.name }}</li>
                    <li>Price:{{ product.price / 100 }}€</li>
                    <li>Available: <span :style="((product.available) ? 'color:green' : 'color:red')"> {{ ((product.available) ? 'Yes' : 'No') }}</span></li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
import Dish from './Dish.vue'
import GoBack from '../components/GoBack'
export default {
    components:{
        Dish,
        GoBack
    },
    data() {
        return {
            cart: [],
            totalPrice: '',
            page: "UserShow"
        }
    },
    props: {
        data: Array,
        slug: {
            type: String,
            required: true
        },
    },
    computed: {
        restaurant() {
            return this.data.find(
                restaurant => restaurant.slug == this.$route.params.slug
            )
        },
    },
    methods:{
        addToCart(dish) {
            this.cart.push(dish);
            console.log(this.cart);
        },
        removeFromCart() {
            this.cart.pop();
            console.log(this.cart);
        },
        navigateTo(page){
            this.page = page;
        },
        arrOrders(){
            this.$emit('arrOrders', cart);
        },
        /* async sendDataToAPI() { //Non funziona perché non é JSON
            try {
                const response = await fetch('/orders', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ data: this.cart })
                });
                const result = await response.json();
                console.log(result);
            } catch (error) {
                console.error(error);
            }
        } */
    }
}
</script>

<style>

</style>
