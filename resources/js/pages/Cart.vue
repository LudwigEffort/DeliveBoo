<template>
    <div>
      <h1>Cart</h1>
      <ul>
        <li v-for="(item, index) in cartItems" :key="index">
          {{ item.name }} - {{ item.price }}
        </li>
      </ul>
    </div>
  </template>

  <script>
import { arrayBuffer } from 'stream/consumers';

  export default {
    data() {
      return {
        cartItems: []
      }
    },
    mounted() {
      this.$root.$on('addToCart', ({ name, price }) => {
        this.cartItems.push({ name, price });
      });
    },
    props:{
        addToCart: Array,
    },
    methods: {
        cart() {
            this.cartItems = this.addToCart;
        }
    }
  }
  </script>
