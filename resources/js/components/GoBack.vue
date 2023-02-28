<template>
  <button @click="goBack" class="go-back">Go Back</button>
</template>

<script>
export default {
    methods: {
        goBack(){
            return this.$router.go(-1)
        }
    }
}
</script>

<style lang="scss" scoped>
.go-back {
    displa:flex;
    cursor: pointer;
}
button {
    border: 0;
}

</style>
