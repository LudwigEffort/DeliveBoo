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
            <button class="text-white" @click="addToCart(dish)">+</button>
            <span>{{ cart[dish.id] || 0 }}</span>
            <button class="text-white" @click="removeFromCart(dish)">-</button>
          </div>
        </div>
      </div>
    </div>
  </template>

  <script>
  import axios from 'axios';

  export default {
    name: 'UserShow',
    data() {
      return {
        user: {},
        cart: {},
        dishes: [],
      };
    },
    mounted() {
      axios.get(`/api/users/${this.$route.params.slug}`)
        .then(response => {
          this.dishes = response.data.dishes;
          this.user = response.data.user;
        })
        .catch(error => {
          console.error(error);
        });
    },
    methods: {
      addToCart(dish) {
        this.cart[dish.id] = (this.cart[dish.id] || 0) + 1;
        this.$forceUpdate();
        this.$emit('cart-updated', this.cart[dish.id]);
      },
      removeFromCart(dish) {
        if (this.cart[dish.id]) {
          this.cart[dish.id]--;
          if (this.cart[dish.id] === 0) {
            delete this.cart[dish.id];
          }
        }
        this.$forceUpdate();
        this.$emit('cart-updated', this.cart[dish.id]);
      },
    },
  };
  </script>

  <style scoped lang="scss"></style>
