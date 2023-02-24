<template>
    <div>
        <!--<Page404 v-if="is404" />-->
        <router-link :to="'/'" class="back-btn">Home</router-link>
        <div v-if="objDish" class="container-fluid post-div">
            <div class="card-body d-flex flex-column">
                <img :src="'storage/' + uploaded_img" class="card-img-top" :alt="name">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ name }}</h5>
                        <h5 class="card-title">Description: {{ description }}</h5>
                        <h5 class="card-title">Price: {{ price }}€</h5>
                        <h5 class="card-title">Available: {{ available }}</h5>
                    </div>
            </div>
        </div>
        <div v-else>Loading... {{ name }}</div>
        {{ name }}
    </div>
</template>

<script>
// import Page404 from '.../Page404.vue'
export default {
    components:{
    //Page404
    },
    props:['slug', 'dish'],
    data() {
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
        });},
}
</script>


<style>

</style>
