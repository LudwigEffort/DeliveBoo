<template>
    <div>
      <nav class="navbar navbar-expand-md navbar-dark bg-white border-bottom border-dark">
        <div class="container-fluid">
          <div class="row">
            <div class="col-3">
              <router-link :to="{ path: '/' }" class="navbar-brand">
                <img src="/img/logo.jpg" class="logo" alt="">
              </router-link>
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
              <li class="nav-item">
                <router-link :to="{ name: 'about' }" class="nav-link">About</router-link>
              </li>
              <!--<li class="nav-item">-->
              <!--<router-link :to="{name: 'contactUs'}" class="nav-link">Contact us</router-link>-->
              <!--</li>-->
              <li class="nav-item">
                <!--?Margari va bene anche un'icona invece che il testo-->
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input type="text" v-model="search" @input="getUsers" placeholder="Cerca ristoranti...">
            </form>
          </div>
        </div>
        <div>
        </div>
      </nav>
      <section class="mt-5">
        <div class="container">
          <div class="row">
            <div v-for="category in categories" class="col">
              <button  @click="changeValue(category.name)"><span class="button_top"> {{category.name}}
              </span></button>
            </div>
          </div>
          <div class="row mt-5">
            <div v-for="user in users" class="col-4">
              <router-link :to="{ path: '/user-show' }">
                <div class="card">
                  <h1>{{ user.name }}</h1>
                  <span class="card-title">{{ user.name }}</span>
                  <span class="card-title">Email:{{ user.email }}</span>
                  <span class="card-title">Opening Time: {{ user.opening_time }}</span>
                  <span class="card-title">Closing Time: {{ user.closing_time }}</span>
                  <span class="card-title">Now open: {{ ((user.is_opened) ? 'Yes' : 'No') }}
                  </span>
                  <ul>
                    <li v-for="categories in user.categories">
                      {{ categories.name }}
                    </li>
                  </ul>
                </div>
              </router-link>
            </div>
          </div>
        </div>
      </section>
    </div>
  </template>

<script>

export default {
    name: 'App',

    components: {

    },

    data() {
        return {
            users: [],
            search: '',
            category: '',
            categories: [],
        };
    },

    mounted() {
        this.getUsers();
    },



    methods: {
        getUsers() {
  let params = {};

  if (this.search) {
    params.search = this.search;
  } else {
    params.limit = 2;
  }

  if (this.category) {
    params.category = this.category;
    this.category=false
  }

  axios.get('/api/users', {
    params: params,
  })
  .then(response => {
    this.users = response.data.results;
    this.categories = response.data.categories;
  })
  .catch(error => {
    console.error(error);
  });
},
  changeValue(category) {
    this.category = category;
    this.getUsers();
  },
    }
}

</script>

<style lang="scss" scopeds>
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

.logo {
    width: 120%;
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
