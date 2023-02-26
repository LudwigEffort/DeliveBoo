<template>
<div>
    <Navbar />
    <main>
        <!--Render del singolo component-->
        <!--!Vanno passati i dati dell'api tramite le props-->
        <router-view
            :data="data"
            :userId="userId"
            :userName="userName"
            :userEmail="userEmail"
            :userSlug="userSlug"
            :userVat="userVat"
            :userOpeningTime="userOpeningTime"
            :userClosingTime="userClosingTime"
            :userIsOpened="userIsOpened"
            :userImage="userImage"
        />
    </main>
    <Footer />
</div>
</template>

<script>
import Navbar from './components/Navbar.vue';
import Footer from './components/Footer.vue';
export default {
    name: 'App',
    components: {
        Navbar,
        Footer,
    },
    data() {
            return {
                data: null,
                userId: null,
                userName: null,
                userEmail: null,
                userSlug: null,
                userVat: null,
                userOpeningTime: null,
                userClosingTime: null,
                userIsOpened: null,
                userImage: null,
            }
        },
        methods: {
            getUsers() {
                axios.get('/api/users').then(response => {
                    this.data = response.data.results,
                    this.userId = response.data.results.id,
                    this.userName = response.data.results.name,
                    this.userEmail = response.data.results.name,
                    this.userSlug = response.data.results.email,
                    this.userVat = response.data.results.vat_number,
                    this.userOpeningTime = response.data.results.opening_time,
                    this.userClosingTime = response.data.results.closing_time,
                    this.userIsOpened = response.data.results.is_opened,
                    this.userImage = response.data.results.uploaded_img
                });
            },
        },
        created() {
            this.getUsers();
        }
}
</script>

<style lang="scss">
    @import '~bootstrap/scss/bootstrap';
</style>
