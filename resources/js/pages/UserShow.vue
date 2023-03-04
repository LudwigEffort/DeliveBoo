<template>
    <div class="container mt-5">
        <div v-if="user">
            <h1>{{ user.name }}</h1>
            <h1>{{ user.opening_time }}</h1>
            <router-link :to="{ name: 'home'}">
                <button class="btn btn-danger">Back</button>
            </router-link>
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

      axios.get(`/api/users/${this.$route.params.slug}`)
        .then(response => {
          this.dishes = response.data.dishes;
          this.user = response.data.user;
        })
        .catch(error => {
          console.error(error);
        });
      const cartFromStorage = localStorage.getItem('cart');
      if (cartFromStorage) {
        this.cart = JSON.parse(cartFromStorage);
      }
    },
    methods: {
      addToCart(dish) {
        this.$forceUpdate();
        this.cart.push({
          id: dish.id,
          name: dish.name,
          price: dish.price,
          quantity: 1,
        })
        localStorage.setItem('cart', JSON.stringify(this.cart));
        this.$emit('cart-updated', this.cart);
        console.log(this.cart);
      },
    },
    watch: {
  cart: {
    handler(newCart) {
      this.$emit("update:cart", newCart);
    },
    deep: true
  }
},

  };
  </script>

