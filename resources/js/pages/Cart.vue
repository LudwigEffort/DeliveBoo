    <template>
        <div>
        <h3>{{ cartItem.name }}</h3>
        <h3>{{ cartItem.price }}</h3>
        <h3>{{ cartItem.quantity }}</h3>
        </div>
    </template>

  <script>


  export default {
    name: 'Cart',
    props: {
        cartItem: Object,
    },

  };
  </script>
<style scoped lang="scss"></style>
