<template>
    <div>
        <!--<Page404 v-if="is404" />-->
        <!--<router-link :to="'/'" class="back-btn">Home</router-link>-->
        <div class="container-fluid post-div">

            <div class="card-body d-flex flex-column">
                <img :src="'storage/' + uploaded_img" class="card-img-top" :alt="name">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ name }}</h5>
                    <span class="card-title">Description: {{ description }}</span>
                    <span class="card-title">Price: {{ decimalPrice }}€</span>
                    <span class="card-title">
                    Available: <span :style="((available) ? '' : 'color:red')">
                        {{ ((available) ? 'Yes' : 'No') }} </span> </span>

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
            min: 0,
            decimalPrice: this.price.toString(),//Converte numero in stringa
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
        },
        //TODO Funzione per trasformare il numero da intero a decimale con la virgola
        /* decimal(){
            this.decimalPrice = this.price.toString();
            console.log(this.decimalPrice)
        } */
    }
}
</script>


<style>

</style>
