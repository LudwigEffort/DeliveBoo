<template>
    <div>
        <div v-if="data" class="container-fluid post-div"
        :data="data"
        >
                <img :src="'storage/' + data[0].uploaded_img" class="card-img-top" :alt="data[0].name">
                <div class="card-body d-flex flex-column">

                <!--todo LE CATEGORIES DEVONO ESSERE ASSOCIATE ALLO USER, AL MOMENTO L'ARRAY É VUOTO-->
                <!--<h4 v-if="data.categories">Categories: {{ data.categories.name }}</h4> -->

                <!--!I DATI NON SONO DIMANICI. RENDER SEMPRE DEL PRIMO USER-->
                <h5 class="card-title">{{ name }}</h5>
                <h5 class="card-title">Email: {{ email }}</h5>
                <h5 class="card-title">Vat Number: {{ vat_number }}</h5>
                <h5 class="card-title">Opening Time: {{ opening_time }}</h5>
                <h5 class="card-title">Closing Time: {{ closing_time }}</h5>
                <h5 class="card-title">Opened now: {{ is_opened }}</h5>

                <!--*SINGOLO DISH ITERATO-->
                <div class="dish-list">
                    <h3>Restaurant's dishes</h3>
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
export default {
    components:{
        Dish
    },
    props: {
        data: Array,
        slugs: Array,
        name: String,
        email: String,
        slug: String,
        vat_number: String,
        opening_time: Date,
        closing_time: Date,
        is_opened: Boolean,
        uploaded_img: String,
        dishes: Array
    },
}
/* :name="name"
        :email="email"
        :slug="slug"
        :vat_number="vat_number"
        :opening_time="opening_time"
        :closing_time="closing_time"
        :is_opened="is_opened"
        :uploaded_img="uploaded_img"
        :dishes="dishes" */
</script>


<style>

</style>
