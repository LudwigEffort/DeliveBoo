<template>
    <div>
        <div v-if="data" class="container-fluid post-div" :data="data">
            <GoBack />

            <div>Cart items: {{ arrDishesId.length }}</div>
    <!--? UNICA SOLUZIONE CHE MI VIENTE IN MENTE É FARE UNA CHIAMATA API QUI SPECIFICA PER LO USER -->

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
                    <router-link :to="{ name: 'Dish', params: {dishSlug: dish.slug} }">
                        <h3>{{ dish.name }}</h3>
                        <h6>Price: {{ dish.price }}€</h6>
                        <h6>Available: <span :style="((dish.available) ? 'color:green' : 'color:red')">
                            {{ ((dish.available) ? 'Yes' : 'No') }} </span></h6>
                        </router-link>
                        <!--<button @click="addToCart(dish.name, dish.price)" >Add to Cart</button>-->
                    </div>


            </section>
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
    props: {
        data: Array,
        slug: {
            type: String,
            required: true
        },
    },
    data() {
        return {
            counter: '0',
            minDisabled:true,
            maxDisabled:false,
            max: 10, //! DATO NON C'É NELL'API, Sto simulando
            min: 0,
            name: '',
            price: '',
            arrDishesId: [],
            totalPrice: '',
        }
    },
    computed: {
        restaurant() {
            return this.data.find(
                restaurant => restaurant.slug == this.$route.params.slug
            )
        },
    },
    methods:{
        addToCart(arrDishes) {
            this.arrDishesId = arrDishes
            return console.log(this.arrDishesId)
            //this.$emit('addToCart', { name, price });
        },
        removeFromCart(arrDishes) {
            this.arrDishesId = arrDishes
            return console.log(this.arrDishesId)
        }
    }
}
</script>


<style>

</style>
