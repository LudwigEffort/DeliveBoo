<template>
    <div>
        <h1>{{ $route.params.name }}</h1>
        <h2></h2>
    </div>
</template>

<script>
export default {
    props: ['slug'],
    data() {
        return {
            objUser: null,
        }
    },
    methods: {
        getUsers() {
            axios.get('/api/users/' + this.slug).then(response => this.objUser = response.data.results);
        },

    },
    created() {
        this.getUsers();
    }
}
</script>


<style>

</style>
