<template>
    <div>
        <div v-if="data" class="container-fluid post-div" :data="data">
            <GoBack />

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
                <h1>DISHES</h1>
                <!--*SINGOLO DISH ITERATO-->
                <div class="dishes-card">
                    <div class="dish-card"
                        v-for="(dish, i) in restaurant.dishes"
                        :key="i"
                    >
                        <img :src="'storage/' + dish.uploaded_img" :alt="dish.name" class="dish-img">
                        <h3>{{ dish.name }}</h3>
                        <h6>Price: {{ dish.price }}€</h6>
                        <h6>Available: <span :style="((dish.available) ? 'color:green' : 'color:red')">{{ ((dish.available) ? 'Yes' : 'No') }} </span></h6>
                        <p>Descrition: {{ dish.description }}</p>

                        <!--!Al momento i bottoni sono uguali per tutti i piatti, quando uno cambia, cambiano tutti-->

                        <button @click="count('-')" :disabled="minDisabled">-</button>
                            <span>{{ counter }}</span>
                        <button @click="count('+')" :disabled="maxDisabled">+</button>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
//import Dish from './Dish.vue'
import GoBack from '../components/GoBack'
export default {
    components:{
        //Dish,
        GoBack
    },
    props: {
        data: Array,
        slug: {
            type: String,
            required: true
        }
    },
    data() {
        return {
            counter: '0',
            minDisabled:true,
            maxDisabled:false,
            max: 10, //! DATO NON C'É NELL'API, Sto simulando
            min: 0,
            //decimalPrice: this.price.toString(),//Converte numero in stringa
        }
    },
    computed: {
        restaurant() {
            return this.data.find(
                restaurant => restaurant.slug == this.$route.params.slug
            )
        }
    },
    methods:{
        count(number) {
            if((number === '+') ? this.counter ++ : this.counter --);

            if(this.counter >= this.max) {
                this.minDisabled = false;
                this.maxDisabled = true;
            } else if (this.counter <= this.min) {
                this.minDisabled = true;
                this.maxDisabled = false;
            } else {
                this.minDisabled = false;
                this.maxDisabled = false;
            }
        }
    }
}
</script>


<style>

</style>
