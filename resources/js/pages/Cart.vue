<template>
    <div>
        <div class="container-fluid">
            <div class="top-content d-flex justify-content-between align-items-center">
                <h1>Cart</h1>
                <div class="buttons mt-4">
                    <router-link class="btn btn-danger" :to="{ name: 'home' }">BACK</router-link>
                    <router-link class="checkout btn .blue-background" :to="{ name: 'checkout' }">CHECKOUT</router-link>
                    <p class="my-3 fs-2">Total amount: {{ totalAmount }}$</p>
                </div>
            </div>
            <div class="cart-item p-2 border w-25" v-for="(item, index) in itemQuantities" :key="index">
                <h3 class="cart-item-item">{{ item.name }}</h3>
                <p class="cart-item-item cart-item-paragraph">
                    Quantity:
                    <button class="btn" @click="decreaseQuantity(item)">-</button>
                    {{ item.quantity }}
                    <button class="btn" @click="increaseQuantity(item)">+</button>
                </p>
                <p class="cart-item-item">Price: {{ item.price * item.quantity }}$</p>
            </div>
            <div class="right-content">
            <button class="btn mt-4" @click="emptyCart()">Empty cart</button>
        </div>
        </div>
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
    const amount = Object.values(this.itemQuantities).reduce((accumulator, item) => {
      return accumulator + item.price * item.quantity;
    }, 0);
    this.$emit('total-amount', amount);
    return amount;
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
    this.cart.pop({
          id: item.id,
          name: item.name,
          price: item.price,
          quantity: 1,
        })
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

<style scoped lang="scss">

body {
    overflow: hidden;
    font-variant: small-caps !important;

}

.cart-item-item {
    margin-bottom: 0;
}

.cart-item-paragraph {
    margin-top: .5rem;
    margin-bottom: .5rem;

}

button {
    background-color: black !important;
    color: white !important;
    border-radius: none !important;
}

.blue-background {
    background-color: blue !important;
    color: white;
}








</style>
