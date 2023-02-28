<template>
    <div>
        <!--<Page404 v-if="is404" />-->
        <div class="container-fluid post-div">

            <div class="card-body d-flex flex-column">
                <img :src="'storage/' + dish.uploaded_img" class="card-img-top" :alt="dish.name">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ dish.name }}</h5>
                    <span class="card-title">Description: {{ dish.description }}</span>
                    <span class="card-title">Price: {{ dish.price }}€</span>
                    <span class="card-title">
                    Available: <span :style="((dish.available) ? 'color:' : 'color:red')">
                        {{ ((dish.available) ? 'Yes' : 'No') }} </span> </span>

                    <!--<button @click="count('-')" :disabled="minDisabled">-</button>-->
                    <!--<span>{{ counter }}</span>-->
                    <!--<button @click="count('+')" :disabled="maxDisabled">+</button>-->
                    <button @click="$emit('addToCart', dish)">Add to Cart</button>
                    <button @click="$emit('removeFromCart', dish)">Remove from Cart</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Dish',
    props: {
        data: Array,
        slug: {
            type: String,
            required: true
        },
        dishSlug: {
            type: String,
            required: true
        }
    },
    data() {
        return {
            counter: '0',
            minDisabled:true,
            maxDisabled:false,
            max: 10, //! DATO NON C'É NELL'API, Sto simulando
            min: 0,
        }
    },
    computed: {
        restaurant() {
            return this.data.find(
                restaurant => restaurant.slug == this.slug
            )
        },
        dish() {
            return this.restaurant.dishes.find(
                dish => dish.slug == this.dishSlug
            )
        }
    },
    methods:{
        /* count(number) {
            if((number === '+') ? this.counter ++ : this.counter --);

            if(this.counter >= this.max) {
                this.minDisabled = false;
                this.maxDisabled = true;
            } else if (this.counter <= this.min) {
                this.minDisabled = true;
                this.maxDisabled = false;
            } else {
                this.minDisabled = false;
                this.maxDisabled = false;
            }
        }, */
        /* addToCart(id) {
            return this.$emit('addToCart', id)
        },
        removeFromCart(id) {
            return this.$emit('removeFromCart', id)
        }, */
    },
}
</script>


<style>

</style>
