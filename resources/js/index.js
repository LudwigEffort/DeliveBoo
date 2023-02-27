//import Dish from './pages/Dish.vue'; // Importare componente
//import { Dish } from './pages/Dish.vue'; //! Non legge i file .vue, vuole per forza .js
//const newDish = new Dish();
//const dish = newDish.dishId; // Estrarre il dato da usare come contenuto API

const express = require('express'); // Richiesta modulo Express
const app = express(); // Creazione App / Server

app.listen(3000, () => {
    console.log('Server started on port 3000');
}); // Mettere in ascolto su una porta

app.get('/', (req, res) => { //Esempi di risposte
    res.send(dish.dishId);
})

app.post('/orders', (req, res) => {
    res.send(orders)
})

const orders = {
    dishesName: ['Pizza', 'Birra', 'Patatine'],
}
