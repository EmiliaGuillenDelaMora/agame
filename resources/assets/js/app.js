
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

window.eventBus = new Vue(); 

import CELL from './components/cell.vue';
//Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    components:{
    	'cell':CELL
    },
    data : {
    	x:3,
    	y:3
    },
    computed:{
    	x_item(){
    		return parseInt(this.x);
    	},
    	y_item(){
    		return parseInt(this.y);
    	}
    },
    methods:{
    	change(){
    		this.$children.forEach(function(item,index){
    			console.log(item.something());
    		});
    	}
    }
});
