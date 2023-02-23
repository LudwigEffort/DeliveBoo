<template>
<div v-if="arrDishes">
    <div class="row g-3">
        <div v-for="dish in arrDishes" :key="dish.id" class="col-sm-6 col-md-4">
            <router-link :to="{name: 'dishShow', params:{slug: dish.slug}}" class="dish-card">
                <div class="card h-100">
                    <img :src="'storage/' + dish.uploaded_img" class="card-img-top" :alt="dish.name">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ dish.name }}</h5>
                        <h5 class="card-title">Description: {{ dish.description }}</h5>
                        <h5 class="card-title">Price {{ dish.price }}€</h5>
                        <h5 class="card-title">Available: {{ dish.available }}</h5>
                    </div>
                </div>
            </router-link>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'DishIndex',
    props:['user'],
    data() {
        return {
            arrDishes: null,
        }
    },
    methods: {
        getDishes() {
            axios.get(`/api/${this.user}/dishes`).then(response => this.arrDishes = response.data.results);
        },

    },
    created() {
        this.getDishes();
    }
}
</script>

<style scoped lang="scss">

</style>
