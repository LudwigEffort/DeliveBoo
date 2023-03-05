<template>
    <div class="container mt-5">
        <div class="row">
            <div
                v-for="category in categories"
                :key="category.slug"
                class="col-2 gy-1"
            >
                <button @click="changeValue(category.name)">
                    <span class="button_top"> {{ category.name }} </span>
                </button>
            </div>
        </div>

        <div class="row g-2 p-5">
            <div v-for="user in users" :key="user.slug" class="card col-3">
                <router-link
                    :to="{ name: 'userShow', params: { slug: user.slug } }"
                >
                    <img
                        :src="user.uploaded_img"
                        class="card-img-top"
                        alt="..."
                    />
                    <div class="card-body">
                        <h1 class="card-title">{{ user.name }}</h1>
                        <span class="card-title">
                            Time: {{ user.opening_time }} -
                            {{ user.closing_time }}
                        </span>

                        <span class="closed" v-if="user.is_opened == false">
                            closed
                        </span>
                        <span class="open" v-if="user.is_opened == true">
                            Open
                        </span>
                        <ul>
                            <li
                                v-for="categories in user.categories"
                                :key="categories.slug"
                            >
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
    name: "UserIndex",
    props: {
        search: {
            type: String,
        },
        users: {
            type: Array,
        },
        categories: {
            type: Array,
        },
    },
    data() {
        return {
            category: "",
        };
    },
    methods: {
        changeValue(category) {
            this.category = category;
            this.$emit("category-changed", category);
        },
    },
};
</script>

<style scoped lang="scss">
.background {
    background-size: cover !important;
}
.routerlink {
    text-decoration: none;
    color: black;
    display: flex;
    flex-direction: column;
}
.card {
    background: rgba(217, 217, 217, 1);
    border: 1px solid white;
    box-shadow: 12px 17px 51px rgba(0, 0, 0, 0.22);
    border-radius: 17px;
    cursor: pointer;
    transition: all 0.5s;
    display: flex;
    align-items: center;
    user-select: none;
    font-weight: bolder;
    font-variant: small-caps;
    margin: 2em;
    padding: 2em;
}
.card:hover {
    border: 1px solid black;
    transform: scale(1.05);
}
.card:active {
    transform: scale(0.95) rotateZ(1.7deg);
}
.open {
    position: relative;
    background-color: rgb(10, 121, 24);
    border-radius: 5px;
    box-shadow: rgb(22, 110, 0) 0px 4px 0px 0px;
    width: 20%;
    text-align: center;
    background-repeat: no-repeat;
    box-sizing: border-box;
    color: #fff;
    border: none;
    transition: all 0.3s ease-in-out;
    z-index: 1;
    overflow: hidden;
}
.closed {
    position: relative;
    background-color: rgb(230, 34, 77);
    border-radius: 5px;
    box-shadow: rgb(121, 18, 55) 0px 4px 0px 0px;
    width: 20%;
    text-align: center;
    background-repeat: no-repeat;
    box-sizing: border-box;
    color: #fff;
    border: none;
    transition: all 0.3s ease-in-out;
    z-index: 1;
    overflow: hidden;
}
button {
    padding: 15px 25px;
    border: unset;
    border-radius: 15px;
    color: #212121;
    z-index: 1;
    background: #e8e8e8;
    position: relative;
    -webkit-box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
    box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
    transition: all 250ms;
    overflow: hidden;
}
button::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 0;
    border-radius: 15px;
    background-color: #212121;
    z-index: -1;
    -webkit-box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
    box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
    transition: all 250ms;
}
button:hover {
    color: #e8e8e8;
}
button::after {
    background-color: #212121;
    z-index: 2;
}
button:hover::before {
    width: 100%;
}
</style>
