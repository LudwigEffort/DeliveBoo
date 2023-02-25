<template>
    <div>
        <!--<Page404 v-if="is404" />-->
        <!--<router-link :to="'/'" class="back-btn">Home</router-link>-->
        <div class="container-fluid post-div">
            <div class="card-body d-flex flex-column">
                <img :src="'storage/' + uploaded_img" class="card-img-top" :alt="name">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ name }}</h5>
                    <h5 class="card-title">Description: {{ description }}</h5>
                    <h5 class="card-title">Price: {{ price }}€</h5>
                    <h5 class="card-title">Available: {{ ((user.available) ? 'Yes' : 'No')  }}</h5>
                    <button @click="count('-')" :disabled="minDisabled">-</button>
                    <span>{{ counter }}</span>
                    <button @click="count('+')" :disabled="maxDisabled">+</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Dish',
    props: {
        name: String,
        uploaded_img: String,
        description: String,
        price: Number,
        available: Boolean,
    },
    data() {
        return {
            counter: '0',
            minDisabled:true,
            maxDisabled:false,
            max: 10, //! DATO NON C'É NELL'API, Sto simulando
            min: 0
        }
    },
    methods:{
        count(number) {
            if((number === '+') ? this.counter ++ : this.counter --);

            if(this.counter >= this.max) {
                this.minDisabled = false;
                this.maxDisabled = true;
            } else if (this.counter <= this.min) {
                this.minDisabled = true;
                this.maxDisabled = false;
            } else {
                this.minDisabled = false;
                this.maxDisabled = false;
            }
        }
    }
}
</script>


<style>

</style>
