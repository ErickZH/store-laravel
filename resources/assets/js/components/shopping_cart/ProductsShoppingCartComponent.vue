<template>
	<div>
		<material-trasition-group
        tag="div">
	        <article class="card-product" :key="product.id" v-for="(product, index) in products" :data-index="index">
	        	<div class="row">
	        		<div class="col-10">
	        			<strong>{{ product.title }}</strong>
	        		</div>
	        		<div class="col-2">
	        			{{ product.humanPrice }}
	        		</div>
	        	</div>
	        </article>
	    </material-trasition-group>
	    <article class="total card-product">
	    	<div class="row">
	    		<div class="col-10">
	    			<strong>Total</strong>
	    		</div>
	    		<div class="col-2">
	    			<strong>{{ total}}</strong>
	    		</div>
	    	</div>
	    </article>
	</div>
	
</template>

<script>
	export default {
		data () {
			return {
				endpoint: '/carrito/productos',
				products: []
			};
		},
		created() {
			this.fetchProducts();
		},
		computed: {
			total() {
				let cents = this.products.reduce((acumulator, currentObj) => {
					return acumulator + currentObj.numberPrice
				}, 0);

				return `$${cents/100}`;
			}
		},
		methods: {
			fetchProducts() {
				axios.get(this.endpoint).then(response => {
					this.products = response.data.data;
				})
			}
		}
	}
</script>