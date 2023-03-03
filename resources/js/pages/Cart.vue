<template>
    <div>
        <h3>{{ cartItem.name }}</h3>
        <h3>{{ cartItem.price }}</h3>
        <h3>{{ cartItem.quantity }}</h3>
        <div>
            <button @click="decrementQuantity">-</button>
            <h3>{{ cartItem.quantity }}</h3>
            <button @click="incrementQuantity">+</button>
        </div>
        <button @click="removeItem">Remove</button>
        <h3>{{ cartItem.totalPrice }}</h3>
    </div>
</template>

<script>
export default {
    name: "Cart",
    props: {
        cartItem: Object,
    },
    methods: {
        incrementQuantity() {
            this.cartItem.quantity++;
            this.cartItem.totalPrice =
                this.cartItem.price * this.cartItem.quantity;
        },
        decrementQuantity() {
            if (this.cartItem.quantity > 1) {
                this.cartItem.quantity--;
                this.cartItem.totalPrice =
                    this.cartItem.price * this.cartItem.quantity;
            }
        },
        removeItem() {
            this.$emit("remove-item", this.itemIndex);
        },
    },
};
</script>
<style scoped lang="scss"></style>
