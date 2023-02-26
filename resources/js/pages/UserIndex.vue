<template>
<div v-if="data">
    <div class="row g-3">
        <div v-for="user in data" :key="user.id" class="col-sm-6 col-md-4">
            <router-link :to="user.slug" class="user-card">
                <div class="card h-100">
                    <img :src="'storage/' + user.uploaded_img" class="card-img-top" :alt="user.name">
                    <div class="card-body d-flex flex-column">
                        <span class="card-title">{{ user.name }}</span>
                        <span class="card-title">Email:{{ user.email }}</span>
                        <span class="card-title">Opening Time: {{ user.opening_time }}</span>
                        <span class="card-title">Closing Time: {{ user.closing_time }}</span>
                        <span class="card-title">Now open: {{ ((user.is_opened) ? 'Yes' : 'No') }}</span>
                        <span class="card-title">Vat: {{ user.vat_number }}</span>
                    </div>
                </div>
            </router-link>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'UserIndex',
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
/*     data(){
        return{
            restaurants: this.data,
        }
    } */
}
</script>

<style scoped lang="scss">

</style>
