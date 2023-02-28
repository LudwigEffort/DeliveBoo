<template>
<div>
    <h1>Cart COMPONENT</h1>
    <div v-if="cartItems">

        <ul v-for="(product, i) in cartItems" :key="i" class="card">
            <li>Dish:{{ product.name }}</li>
            <li>Price:{{ product.price / 100 }}€</li>
            <li>Available: <span :style="((product.available) ? 'color:green' : 'color:red')"> {{ ((product.available) ? 'Yes' : 'No') }}</span></li>
        </ul>

    </div>
    <hr>
</div>
</template>

<script>
export default {
    data() {
        return {
        cartItems: null,
        }
    },
    props:{
        cart: Array,
    },
    methods: {
        cart() {
            this.cartItems = this.cart;
        },
    },
}
</script>
