<template>
    <div>
        <!--<Page404 v-if="is404" />-->
        <router-link :to="'/'" class="back-btn">Home</router-link>
        <div v-if="data" class="container-fluid post-div">
            <div class="card-body d-flex flex-column">
                <img :src="'storage/' + data[0].dishes[0].uploaded_img" class="card-img-top" :alt="data[0].dishes[0].name">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ data[0].dishes[0].name }}</h5>
                        <h5 class="card-title">Description: {{ data[0].dishes[0].description }}</h5>
                        <h5 class="card-title">Price: {{ data[0].dishes[0].price }}€</h5>
                        <h5 class="card-title">Available: {{ data[0].dishes[0].available }}</h5>
                    </div>
            </div>
        </div>
        <div v-else>Loading... {{ data[0].dishes[0].name }}</div>
    </div>
</template>

<script>
// import Page404 from '.../Page404.vue'
export default {
    components:{
    //Page404
    },
    props: {
        data: Array,
        slugs: Array
    },
    /*data() {
        return {
            objDish: null,
            is404: false,
        }
    },
    created() {
            axios.get('/api/users/' + this.slug).then(response => {
                if(response.data.success) {
                    this.objUser = response.data.results;
                    console.log(this.objDish)
                } else {
                    this.is404 = true;
                }
        });},*/
}
</script>


<style>

</style>
