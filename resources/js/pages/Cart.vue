<template>
<div>
    <h1>Cart</h1>
    {{ name }} - {{ price }}
    <ul>
        <li v-for="(item, index) in cartItems" :key="index">
            {{ item.name }}  {{ item.price }}
        </li>
    </ul>
</div>
</template>

<script>
export default {
data() {
    return {
    cartItems: []
    }
},
/* mounted() {
    this.$root.$on('addToCart', ({ name, price }) => {
    this.cartItems.push({ name, price });
    });
}, */
props:{
    addToCart: Array,
    name: String,
    price: Number
},
methods: {
    cart() {
        this.cartItems = this.addToCart;
    }
}
}
</script>
