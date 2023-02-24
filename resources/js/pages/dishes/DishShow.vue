<template>
    <div>
        <!--<Page404 v-if="is404" />-->
        <div v-if="objDish" class="container-fluid post-div">
            <img :src="'storage/' + objDish.uploaded_img" class="card-img-top" :alt="objDish.name">
            <div class="card-body d-flex flex-column">
                <img :src="'storage/' + dish.uploaded_img" class="card-img-top" :alt="dish.name">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ dish.name }}</h5>
                        <h5 class="card-title">Description: {{ dish.description }}</h5>
                        <h5 class="card-title">Price {{ dish.price }}€</h5>
                        <h5 class="card-title">Available: {{ dish.available }}</h5>
                    </div>
            </div>
        </div>
        <div v-else>Loading... {{ objDish.name }}</div>
    </div>
</template>

<script>
// import Page404 from '.../Page404.vue'
export default {
    components:{
        //Page404
    },
   /*  props:['slug'],
    data() {
        return {
            objDish: null,
            is404: false,
        }
    },
    created() {
            axios.get(`/api/users/${this.slug}/${this.slug}`).then(response => {
                if(response.data.success) {
                    this.objDish = response.data.results;
                } else {
                    this.is404 = true;
                }
        });}, */
}
</script>


<style>

</style>
