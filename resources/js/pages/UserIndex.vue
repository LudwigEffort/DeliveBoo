<template>
    <div class="container mt-5">
        <div class="row">
            <div v-for="category in categories" class="col">
                <button @click="changeValue(category.name)">
                    <span class="button_top"> {{ category.name }}
                    </span>
                </button>
            </div>
        </div>
        <div class="row mt-5">
            <div v-for="user in users" class="col-4">
                <router-link :to="{ name: 'userShow', params: { slug: user.slug },
 }">
                    <div class="card">
                        <h1>{{ user.name }}</h1>
                        <span class="card-title">
                            {{ user.name }}
                        </span>
                        <span class="card-title">
                            Email:{{ user.email }}
                        </span>
                        <span class="card-title">
                            Opening Time: {{ user.opening_time }}
                        </span>
                        <span class="card-title">
                            Closing Time: {{ user.closing_time }}
                        </span>
                        <span class="card-title">
                            Now open: {{ ((user.is_opened) ? 'Yes' : 'No') }}
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
</template>

<script>
export default {
  name: 'UserIndex',
  props: {
    search: {
      type: String,
      default: ''
    }
  },
  data() {
    return {
      users: [],
      category: '',
      categories: [],
    }
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
        this.category = false
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
    }
  }
}
</script>

<style scoped lang="scss"></style>
