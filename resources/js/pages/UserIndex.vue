<template>
<div v-if="data">
    <div class="row g-3">
        <div v-for="user in data" :key="user.id" class="col-sm-6 col-md-4">
            <router-link :to="{name: 'UserShow', params:{slug: user.slug}}" class="user-card">
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
}
</script>

<style scoped lang="scss">

</style>
