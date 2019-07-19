/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

const newLine = document.getElementById('newExpence');
const tbody = document.querySelector('#tableau tbody');
const bouton = document.getElementById('bouton');

const table = document.getElementById('tableau');
// Ajouter une nouvelle ligne 
bouton.addEventListener('click', function(event){
    event.preventDefault();

    const lastTr = table.rows[table.rows.length - 1];

    const allInput = lastTr.querySelectorAll('input');
    let inputError = false;
    
    allInput.forEach(element => {

        if(element.value == "" || element.classList.contains('isInvalid')){
            inputError = true;
            element.classList.add('idInvalid');
        }
    });

    if(!inputError){

        let clone = newLine.cloneNode(true);
   

        const inputList = newLine.querySelectorAll('input');

        inputList.forEach(element => {
            element.value = "";
        });
        
        tbody.appendChild(clone);
    }
});

// const parentTr = getParentTr(event.target);
// const prix = parentTr.querySelector('.price'); 

// // Changement dans un input qui a la class price
// if(event.target.classList.contains('price')){

//     event.target.classList.remove('isInvalid');

//     let price = event.target.value;

//     if(price < 0){
//         prix.innerHTML = 'error';
//         return;
//     }
}