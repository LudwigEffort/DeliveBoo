<template>
    <nav class="navbar navbar-expand-md navbar-dark bg-white border-bottom border-dark">
      <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
          <div class="col">
            <router-link :to="{ name: 'home' }" class="navbar-brand">
              <img src="/img/logo.jpg" class="logo" alt="">
            </router-link>
          </div>
          <div class="col">
            <router-link :to="{ name: 'about' }" class="nav-link text-dark">About</router-link>
          </div>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul
            class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
            style="--bs-scroll-height: 100px;"
          >
            <li class="nav-item" v-if="$route.name === 'home'">
              <form class="d-flex" role="search">
                <input type="text" v-model="search" @input="searchChanged">
              </form>
            </li>
            <div>
              <router-link :to="{ name: 'cart'}">
                Cart
              </router-link>
            </div>
          </ul>
        </div>
      </div>
    </nav>
</template>

<script>
  export default {
    name: 'HeaderPage',

    props: {
      cart: {
        type: Array,
      },
    },

    data() {
      return {
        search: ''
      }
    },

    methods: {
      searchChanged() {
        this.$emit('search-changed', this.search);
        console.log(this.cart)
      },
    }
  }
</script>

<style lang="scss" scoped>
.card {
    border-radius: 30px;
    background: white;
    box-shadow: 15px 15px 30px rgb(25, 25, 25), -15px -15px 30px rgb(60, 60, 60);
}

a {
    text-decoration: none;
}

.logo {
    width: 40%;
}

button {
    /* Variables */
    --button_radius: 0.75em;
    --button_color: #e8e8e8;
    --button_outline_color: #000000;
    font-size: 17px;
    font-weight: bold;
    border: none;
    border-radius: var(--button_radius);
    background: var(--button_outline_color);
}

.button_top {
    display: block;
    box-sizing: border-box;
    border: 2px solid var(--button_outline_color);
    border-radius: var(--button_radius);
    padding: 0.75em 1.5em;
    background: var(--button_color);
    color: var(--button_outline_color);
    transform: translateY(-0.2em);
    transition: transform 0.1s ease;
}

button:hover .button_top {
    /* Pull the button upwards when hovered */
    transform: translateY(-0.33em);
}

button:active .button_top {
    /* Push the button downwards when pressed */
    transform: translateY(0);
}
</style>
