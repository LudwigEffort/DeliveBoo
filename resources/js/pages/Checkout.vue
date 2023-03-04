<template>
    <div>
      <form @submit.prevent="salvaDatiForm">
        <div>
          <label for="f_name">Nome:</label>
          <input type="text" id="f_name" name="f_name" v-model="form.f_name" required>
        </div>
        <div>
          <label for="l_name">Cognome:</label>
          <input type="text" id="l_name" name="l_name" v-model="form.l_name" required>
        </div>
        <div>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" v-model="form.email" required>
        </div>
        <div>
          <label for="phone_number">Numero di telefono:</label>
          <input type="tel" id="phone_number" name="phone_number" v-model="form.phone_number" required>
        </div>
        <div>
          <label for="address">Indirizzo:</label>
          <textarea id="address" name="address" v-model="form.address" required></textarea>
        </div>
        <div>
          <label for="amount">Importo:</label>
          <input value="" type="number" id="amount" name="amount" v-model="form.amount" readonly required>
        </div>
        <div>
          <input type="hidden" id="order_date" name="order_date" v-model="form.order_date">
        </div>
        <div>
          <input type="hidden" id="pickup_date" name="pickup_date" v-model="form.pickup_date">
        </div>
        <div>
          <input type="hidden" id="payment_date" name="payment_date" v-model="form.payment_date">
          <input type="hidden" name="dishes[]" value="{{ $dish->id }}">
        </div>
        <button type="submit">Invia</button>
      </form>
    </div>
  </template>

  <script>
  import axios from 'axios';

  export default {
    name: "Checkout",
    props: {
      cart: Array,
      totalAmount: Number,
    },
    data() {
      return {
        form: {
          f_name: '',
          l_name: '',
          email: '',
          phone_number: '',
          address: '',
          amount: 0,
          order_date: '',
          pickup_date: '',
          payment_date: ''
        },
      };
    },
    methods: {
      salvaDatiForm() {
        this.form.amount = this.totalAmount;
        this.form.order_date = this.ottieniData();
        this.form.pickup_date = this.ottieniData();
        this.form.payment_date = this.ottieniData();
        axios.post('/makeOrder', this.form)
          .then(response => {
            console.log(response.data);
          })
          .catch(error => {
            console.log(error.response.data);
          });
      },
      ottieniData() {
        const today = new Date();
        const yyyy = today.getFullYear();
        let mm = today.getMonth() + 1;
        let dd = today.getDate();
        if (dd < 10) {
          dd = '0' + dd;
        }
        if (mm < 10) {
          mm = '0' + mm;
        }
        return yyyy + '-' + mm + '-' + dd;
      }
    }
}
</script>


<style lang="scss" scoped>

form {
  max-width: 500px;
  margin: 0 auto;
  font-size: 16px;
  font-family: Arial, sans-serif;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="tel"],
textarea {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 2px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  font-size: 16px;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="tel"]:focus,
textarea:focus {
  border-color: #007bff;
  outline: none;
}

input[type="text"]:read-only,
input[type="email"]:read-only,
input[type="tel"]:read-only {
  background-color: #f5f5f5;
}

input[type="submit"] {
  display: block;
  margin: 20px auto 0;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: #007bff;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #0062cc;
}

</style>
