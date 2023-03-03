<template>
    <div>
        <HeaderPage @search-changed="updateSearch"></HeaderPage>
        <router-view :search="search"></router-view>
    </div>
</template>

<script>
import HeaderPage from './components/HeaderPage.vue';


export default {
    name: 'App',
    components: {
        HeaderPage,
    },
    data() {
        return {
            search: '',
        }
    },
    methods: {
    updateSearch(search) {
      this.search = search;
    },
  },
}

</script>

<style lang="scss">
@import '~bootstrap/scss/bootstrap';

.card {
 border-radius: 30px;
 background: white;
 box-shadow: 15px 15px 30px rgb(25, 25, 25),
             -15px -15px 30px rgb(60, 60, 60);
}

a {
    text-decoration: none;
}

// .logo {
//     width: 110%;
// }

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
