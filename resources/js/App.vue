<template>
<div>
    <Navbar />
    <main>
        <!--Render del singolo component-->
        <router-view></router-view>
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
}
</script>

<style lang="scss">
    @import '~bootstrap/scss/bootstrap';
</style>
