<template>
    <div class="container mt-5">
        <div v-if="user">
            <h1 class="text-center name">{{ user.name }}</h1>
            <router-link :to="{ name: 'home' }">
                <button class="back">Other Dinings</button>
            </router-link>
            <div class="row">
                <div
                    class="col-4 thisdish"
                    v-for="dish in dishes"
                    :key="dish.id"
                >
                    <div class="row gy-2">
                        <div class="col-12">
                            <h3 class="name">{{ dish.name }}</h3>
                        </div>
                        <div class="col-12 dish-dev">
                            <p>{{ dish.description }}</p>
                        </div>
                        <div class="col-12">
                            <button class="text-white" @click="addToCart(dish)">
                                <span> {{ dish.price }}$ </span>
                                <img :src="dish.uploaded_img" alt="" />
                            </button>
                        </div>
                    </div>
                    <hr />
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
        axios
            .get(`/api/users/${this.$route.params.slug}`)
            .then((response) => {
                this.dishes = response.data.dishes;
                this.user = response.data.user;
            })
            .catch((error) => {
                console.error(error);
            });
        const cartFromStorage = localStorage.getItem("cart");
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
            });
            localStorage.setItem("cart", JSON.stringify(this.cart));
            this.$emit("cart-updated", this.cart);
            console.log(this.cart);
        },
    },
};
</script>

<style lang="scss">
button {
    appearance: none;
    background-color: transparent;
    border: 0.125em solid #1a1a1a;
    border-radius: 0.9375em;
    box-sizing: border-box;
    color: #3b3b3b;
    cursor: pointer;
    display: inline-block;
    line-height: normal;
    margin: 0;
    padding: 0.5rem;
    outline: none;
    text-align: center;
    text-decoration: none;
    transition: all 300ms cubic-bezier(0.23, 1, 0.32, 1);
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    will-change: transform;
}
button span {
    color: black;
}
button:disabled {
    pointer-events: none;
}

button:hover {
    color: white;
    background-color: #1a1a1a;
    box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
    transform: translateY(-2px);
}
button:hover span {
    color: white;
}

button:active {
    box-shadow: none;
    transform: translateY(0);
}
.name {
    font-variant: small-caps;
}
.dish-dev {
    font-variant: small-caps;
    font-style: italic;
}
.back {
    letter-spacing: 0.3rem;
}
hr {
    width: 80%;
}
</style>
