<template>
    <div>
          <!--  -->
        <!--<Page404 v-if="is404" />-->
        <div v-if="data" class="container-fluid post-div"
        :data="data">
            <img :src="'storage/' + data[0].uploaded_img" class="card-img-top" :alt="data[0].name">
            <div class="card-body d-flex flex-column">

                <!--todo LE CATEGORIES DEVONO ESSERE ASSOCIATE ALLO USER, AL MOMENTO L'ARRAY É VUOTO-->
                <!--<h4 v-if="data.categories">Categories: {{ data.categories.name }}</h4> -->
                <h5 class="card-title">Name: {{ data.name }}</h5>
                <h5 class="card-title">Email: {{ data[0].email }}</h5>
                <h5 class="card-title">Vat Number: {{ data[0].vat_number }}</h5>
                <h5 class="card-title">Opening Time: {{ data[0].opening_time }}</h5>
                <h5 class="card-title">Closing Time: {{ data[0].closing_time }}</h5>
                <h5 class="card-title">Opened now: {{ data[0].is_opened }}</h5>
                {{ data[0].dishes[0].name }}
                <ul class="restaurant-list">
                    <li v-for="(restaurant, index) in data" :key="index">
                        <h3>{{ restaurant.name }}</h3>
                        <ul class="dish-list">
                        <li v-for="(dish, i) in restaurant.dishes" :key="i">
                            <h5 class="dish-title">{{ dish.name }}</h5>
                            <h5 class="dish-text">Description: {{ dish.description }}</h5>
                            <h5 class="dish-text">Price: {{ dish.price }}€</h5>
                            <h5 class="dish-text">Available: {{ dish.available }}</h5>
                        </li>
                        </ul>
                    </li>
                    </ul>
                <!--<ul class="dish-index" v-for="(restaurant, i) in data" :key="i"></ul>-->
                    <!--{{ restaurants.dishes.name }}-->
                    <!--<li>{{ restaurants.dishes }}</li>-->
                    <!--{{ restaurants}}-->
                    <!--<div v-for="(dish, index) in restaurant.dishes" :key="index">-->
                    <!--<h5 class="dish-title">{{ dish.name }}</h5>-->
                    <!--<h5 class="dish-text">Description: {{ dish.description }}</h5>-->
                    <!--<h5 class="dish-text">Price: {{ dish.price }}€</h5>-->
                    <!--<h5 class="dish-text">Available: {{ dish.available }}</h5>-->
                    <!--</div>-->




                <!--<div class="dish-index">-->
                    <!--<div class="dish-card" v-for="dish in objUser.dishes" :key="dish.id">-->

                        <!--* QUESTO É IL LINK DEL SINGOLO PIATTO DEL SINGOLO RISTORANTE -->
                        <!--<router-link-->
                        <!--:to="{name: 'Dish', params:{slug: dish.slug}}">-->
                            <!--<img :src="'storage/' + dish.uploaded_img" :alt="dish.name">-->
                            <!--<h3>{{ dish.name }}</h3>-->
                            <!--<span>Price: {{ dish.price }}€</span>-->
                        <!--</router-link>-->
                    <!--</div>-->
                <!--</div>-->


            </div>
        </div>
        <!--<div v-else>Loading... {{ objUser.name }}</div>-->
    </div>
</template>

<script>
//import Page404 from './Page404.vue'
import Dish from './Dish.vue'
export default {
    components:{
        //Page404,
        Dish
    },
    props: {
        data: Array,
        slugs: Array
    },
    /* data() {
        return {
            objUser: null,
            is404: false,
        }
    },
    created() {
            axios.get('/api/users/' + this.slug).then(response => {
                if(response.data.success) {
                    this.objUser = response.data.results;
                } else {
                    this.is404 = true;
                }
        });}, */
}
</script>


<style>

</style>
