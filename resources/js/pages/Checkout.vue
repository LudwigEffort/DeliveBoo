<template>
    <div>
        <h1>checkout</h1>

<v-braintree
    :authorization="authorization"
    @success="onSuccess"
    @error="onError"
></v-braintree>

    </div>
</template>

<script>
export default {
    props: {
    authorization: {
      required: true,
      type: String
    }
  },
  methods: {
    onSuccess (payload) {
      let nonce = payload.nonce;
      // Do something great with the nonce...
    },
    onError (error) {
      let message = error.message;
      // Whoops, an error has occured while trying to get the nonce
    }
  }
}
</script>
