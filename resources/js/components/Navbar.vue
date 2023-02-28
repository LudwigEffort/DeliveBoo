<template>
    <div>
      <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container-fluid">
          <router-link :to="{name: 'home'}" class="navbar-brand">DeliveBoo</router-link>
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
                <router-link :to="{name: 'about'}" class="nav-link">About</router-link>
              </li>
              <!--<li class="nav-item">-->
              <!--<router-link :to="{name: 'contactUs'}" class="nav-link">Contact us</router-link>-->
              <!--</li>-->
              <li class="nav-item">
                <!--?Margari va bene anche un'icona invece che il testo-->
                <router-link :to="{name: 'Cart'}" class="nav-link">Cart</router-link>
              </li>
            </ul>
            <form class="d-flex" role="search">
                <input type="text" v-model="search" @input="getUsers" placeholder="Cerca utenti...">
            </form>
          </div>
        </div>
        <div v-for="user in users">{{ user.name }}</div>
      </nav>
    </div>
  </template>

  <script>
  import axios from "axios";

  export default {
    data() {
        return {
            users: [],
            search: '',
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

    axios.get('/api/users', {
      params: params,
    })
    .then(response => {
      this.users = response.data.results;
    })
    .catch(error => {
      console.error(error);
    });
  },
    },
  };
  </script>

  <style></style>
