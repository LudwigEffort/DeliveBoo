<template>
    <div>
        <div v-if="data" class="container-fluid post-div" :data="data">
            <GoBack />

    <!--? UNICA SOLUZIONE CHE MI VIENTE IN MENTE É FARE UNA CHIAMATA API QUI SPECIFICA PER LO USER -->


                <!--<img :src="'storage/' + uploaded_img" class="card-img-top" :alt="name">-->
                <div class="card-body d-flex flex-column">

                <!--todo MANCANO LE CATEGORIES CHE DEVONO ESSERE ASSOCIATE ALLO USER, AL MOMENTO L'ARRAY É VUOTO-->
                <!--<h4 v-if="data.categories">Categories: {{ data.categories.name }}</h4> -->


                <h5 class="card-title">{{ restaurant.name }}</h5>
                <h5 class="card-title">Email: {{ restaurant.email }}</h5>
                <h5 class="card-title">Vat Number: {{ restaurant.vat_number }}</h5>
                <h5 class="card-title">Opening Time: {{ restaurant.opening_time }}</h5>
                <h5 class="card-title">Closing Time: {{ restaurant.closing_time }}</h5>
                <h5 class="card-title">Opened now: {{ ((restaurant.is_opened) ? 'Yes' : 'No') }}</h5>

                <!--*SINGOLO DISH ITERATO-->
                <!--? serve una router-link per mostrare questo componente?-->
                <!--!I DATI NON SONO DINAMICI!-->
                <div class="dish-list">
                    <h3>DISHES</h3>
                    <Dish v-for="dish in data[0].dishes"
                        class="dish-item"
                        :data="data"
                        :key="dish.id"
                        :name="dish.name"
                        :description="dish.description"
                        :price="dish.price"
                        :aviable="dish.available"
                    >
                    </Dish>
                </div>
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
    props: {
        data: Array,
    },
    data() {
        return {

        }
    },
    computed: {
        restaurant() {
            return this.data.find(
                restaurant => restaurant.slug == this.$route.params.slug
            )
        }
    }
}
</script>


<style>

</style>
