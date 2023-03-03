<template>
    <div class="container mt-5">
        <div v-if="user">
            <h1>{{ user.name }}</h1>
            <h1>{{ user.opening_time }}</h1>
            <div v-for="dish in dishes" :key="dish.id">
                <h3>{{ dish.name }}</h3>
                <p>{{ dish.description }}</p>
                <p>{{ dish.price }}$</p>
                <div>
                    <button class="text-white" @click="addToCart(dish)">
                        aggiungi
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "UserShow",
    data() {
        return {
            user: {},
            cart: [],
            dishes: [],
        };
    },
    mounted() {
        axios
            .get(`/api/users/${this.$route.params.slug}`)
            .then((response) => {
                this.dishes = response.data.dishes;
                this.user = response.data.user;
            })
            .catch((error) => {
                console.error(error);
            });
    },
    methods: {
        addToCart(dish) {
            const orderedDish = this.cart.find((item) => item.id === dish.id);
            if (orderedDish) {
                orderedDish.quantity++;
                orderedDish.totalPrice = orderedDish.quantity * dish.price;
            } else {
                this.cart.push({
                    id: dish.id,
                    name: dish.name,
                    price: dish.price,
                    quantity: 1,
                    totalPrice: dish.price,
                });
            }
            this.$emit("cart-updated", this.cart);
            console.log(this.cart);
            //   addToCart(dish) {
            //   const orderedDishIndex = this.cart.findIndex(item => item.id === dish.id);
            //   if (orderedDishIndex > -1) {
            //     this.cart[orderedDishIndex].quantity++;
            //   } else {
            //     this.cart.push({
            //       id: dish.id,
            //       name: dish.name,
            //       price: dish.price,
            //       quantity: 1,
            //     });
            //   }
            //   this.$emit('cart-updated', this.cart);
        },
    },
};
</script>

<style scoped lang="scss"></style>
this.$forceUpdate();
