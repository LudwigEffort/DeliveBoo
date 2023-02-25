<template>
<div v-if="data">
    <div class="row g-3">
        <!--*Per rendere cliccabile tutto il post, forse occorre mettere tutto il div in un tag <router-link> -->
        <div v-for="user in data" :key="user.id" class="col-sm-6 col-md-4">
            <router-link :to="{name: 'UserShow', params:{slug: user.slug}}" class="user-card">

                <!--<UserShow-->
                    <!--:data="data"-->
                    <!--:name="name"-->
                    <!--:email="email"-->
                    <!--:slug="slug"-->
                    <!--:vat_number="vat_number"-->
                    <!--:opening_time="opening_time"-->
                    <!--:closing_time="closing_time"-->
                    <!--:is_opened="is_opened"-->
                    <!--:uploaded_img="uploaded_img"-->
                    <!--:dishes="dishes" />-->
                <div class="card h-100">
                    <img :src="'storage/' + user.uploaded_img" class="card-img-top" :alt="user.name">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ user.name }}</h5>
                        <h5 class="card-title">{{ user.email }}</h5>
                        <h5 class="card-title">{{ user.vat_number }}</h5>
                        <h5 class="card-title">{{ user.opening_time }}</h5>
                        <h5 class="card-title">{{ user.closing_time }}</h5>
                        <h5 class="card-title">{{ ((user.is_opened) ? 'Yes' : 'No') }}</h5>
                    </div>
                </div>
            </router-link>
        </div>
    </div>
</div>
</template>

<script>
//import UserShow from './UserShow.vue';
export default {
    name: 'UserIndex',
    components:{
        //UserShow
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
</script>

<style scoped lang="scss">

</style>
