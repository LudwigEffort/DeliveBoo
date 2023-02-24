<template>
    <div>
        <!--<Page404 v-if="is404" />-->
        <div v-if="objUser" class="container-fluid post-div">
            <img :src="'storage/' + objUser.uploaded_img" class="card-img-top" :alt="objUser.name">
            <div class="card-body d-flex flex-column">

                <!--todo DEVONO ESSERE ASSOCIATE, AL MOMENTO L'ARRAY É VUOTO-->
                <!--<h4 v-if="objUser.categories">Categories: {{ objUser.categories.name }}</h4> -->
                <h5 class="card-title">Name: {{ objUser.name }}</h5>
                <h5 class="card-title">Email: {{ objUser.email }}</h5>
                <h5 class="card-title">Vat Number: {{ objUser.vat_number }}</h5>
                <h5 class="card-title">Opening Time: {{ objUser.opening_time }}</h5>
                <h5 class="card-title">Closing Time: {{ objUser.closing_time }}</h5>
                <h5 class="card-title">Opened now: {{ objUser.is_opened }}</h5>

                <!--TODO: QUI VANNO RENDERIZZATI TUTTI I PIATTI DEL SINGOLO RISTORANTE -->
                <!--<DishIndex />-->

                <!--? OPPURE MOSTRARE I PIATTI DIRETTAMENTE QUI SENZA CREARE IL COMPONENTE DishIndex?-->
                <div class="dish-index">
                    <div class="dish-card" v-for="dish in objUser.dishes" :key="dish.id">
                        <!--<router-link :to="{name: 'Dish', params:{slug: user.slug, dish: dish.slug}}">       </router-link>-->
                            <img :src="'storage/' + dish.uploaded_img" :alt="dish.name">
                            <h3>{{ dish.name }}</h3>
                            <span>Price: {{ dish.price }}€</span>
                    </div>
                </div>


            </div>
        </div>
        <!--<div v-else>Loading... {{ objUser.name }}</div>-->
    </div>
</template>

<script>
//import Page404 from './Page404.vue'
//import DishIndex from './dishes/DishIndex.vue'
export default {
    components:{
        //Page404,
        //DishIndex
    },
    props:['slug', 'dish'],
    data() {
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
        });},
}
</script>


<style>

</style>
