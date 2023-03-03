<template>
    <div>
      <h1>My cart</h1>
      <div v-for="(item, index) in itemQuantities" :key="index">
        <h3>{{ item.name }}</h3>
        <p>
          Quantity:
          <button class="btn btn-primary" @click="decreaseQuantity(item)">-</button>
          {{ item.quantity }}
          <button class="btn btn-primary" @click="increaseQuantity(item)">+</button>
        </p>
        <p>Price: {{ item.price * item.quantity }}$</p>
      </div>
      <p>Total amount: {{ totalAmount }}$</p>
      <button class="btn btn-primary" @click="emptyCart()">Empty cart</button>
    </div>
  </template>
  <script>
  export default {
    name: "Cart",
    props: {
      cart: Array,
    },
    data() {
      return {
        cartData: this.cart,
      };
    },
    computed: {
      itemQuantities() {
        return this.cartData.reduce((accumulator, item) => {
          if (accumulator[item.name]) {
            accumulator[item.name].quantity += 1;
          } else {
            accumulator[item.name] = {
              name: item.name,
              quantity: 1,
              price: item.price,
            };
          }
          return accumulator;
        }, {});
      },
      totalAmount() {
        return Object.values(this.itemQuantities).reduce((accumulator, item) => {
          return accumulator + item.price * item.quantity;
        }, 0);
      },
    },
    methods: {
      emptyCart() {
        this.cartData = [];
        localStorage.setItem("cart", JSON.stringify(this.cartData));
      },
      loadCart() {
        const cart = JSON.parse(localStorage.getItem("cart") || "[]");
        this.cartData.splice(0, this.cartData.length, ...cart);
      },
      increaseQuantity(item) {
        this.$forceUpdate();
        this.cart.push({
          id: item.id,
          name: item.name,
          price: item.price,
          quantity: 1,
        })
        item.quantity++;
        this.saveCart();
      },
      decreaseQuantity(item) {
  if (item.quantity > 1) {
    item.quantity--;
    this.saveCart();
  } else {
    const index = this.cart.findIndex(cartItem => cartItem.id === item.id);
    if (index !== -1) {
      this.cart.splice(index, 1);
      this.saveCart();
    }
  }
},
      saveCart() {
        localStorage.setItem("cart", JSON.stringify(this.cartData));
      },
    },
    mounted() {
      this.loadCart();
    },
    watch: {
      cartData: {
        handler(newVal) {
          this.$emit("update:cart", newVal);
          localStorage.setItem("cart", JSON.stringify(newVal));
        },
        deep: true,
      },
    },
  };
  </script>
  <style scoped lang="scss"></style>
