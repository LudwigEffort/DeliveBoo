<template>
    <div>
        <Page404 v-if="is404" />
        <div v-else-if="objUser" class="container-fluid post-div">
            <img :src="'storage/' + objUser.uploaded_img" class="card-img-top" :alt="objUser.name">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Name: {{ objUser.name }}</h5>
                <h5 class="card-title">Email: {{ objUser.email }}</h5>
                <h5 class="card-title">Vat Number: {{ objUser.vat_number }}</h5>
                <h5 class="card-title">Opening Time: {{ objUser.opening_time }}</h5>
                <h5 class="card-title">Closing Time: {{ objUser.closing_time }}</h5>
                <h5 class="card-title">Opened now: {{ objUser.is_opened }}</h5>
            </div>
        </div>
        <div v-else>Loading... {{ objUser.name }}</div>
    </div>
</template>

<script>
import Page404 from './Page404.vue'
export default {
    components:{Page404},
    props:['slug'],
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
