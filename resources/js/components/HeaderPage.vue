<template>
    <nav
        class="navbar navbar-expand-md navbar-dark bg-white border-bottom border-dark"
    >
        <div class="container-fluid">
            <div class="row d-flex inputs">
                <div class="col-4">
                    <router-link :to="{ name: 'home' }" class="navbar-brand">
                        <img src="/img/logo.jpg" class="logo" alt="" />
                    </router-link>
                </div>
                <div class="col-1">
                    <router-link
                        :to="{ name: 'about' }"
                        class="nav-link text-dark"
                        >About</router-link
                    >
                </div>
                <div class="col-4">
                    <form role="search">
                        <input
                            class="input"
                            type="text"
                            v-model="search"
                            @input="searchChanged"
                            placeholder="yourdining..."
                        />
                    </form>
                </div>
                <div class="cart col-3">
                    <router-link :to="{ name: 'cart' }">
                        <img src="/img/cartright.jpg" alt="" />
                    </router-link>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "HeaderPage",

    props: {
        cart: {
            type: Array,
        },
    },

    data() {
        return {
            search: "",
        };
    },

    methods: {
        searchChanged() {
            this.$emit("search-changed", this.search);
            console.log(this.cart);
        },
    },
};
</script>

<style lang="scss" scoped>
.input::placeholder {
    font-variant: small-caps;
    letter-spacing: 0.2rem;
}
.input {
    max-width: 190px;
    height: 30px;
    border: 2px solid transparent;
    outline: none;
    border-bottom: 2px solid #3f3f3f;
    caret-color: #3f3f3f;
    background-color: #ffffff;
    padding: 5px;
    transition: 0.5s linear;
    font-family: monospace;
    letter-spacing: 1px;
}

.input:focus {
    border: 2px solid #ffffff;
    caret-color: #ffffff;
    color: #000000;
}

.input:focus::placeholder {
    color: rgb(0, 0, 0);
}

.inputs {
    align-items: center;
}
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
.cart {
    align-self: flex-end;
    display: flex;
    justify-content: flex-end;
}
.cart img,
a {
    width: 40%;
}
</style>
