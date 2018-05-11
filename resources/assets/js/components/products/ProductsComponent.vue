<template>
    <div class="row">
        <product-card-component :product="product" v-for="product in products" ></product-card-component>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: 'Productos Componente',
            products: null,
            endpoint: '/productos'
        };
    },
    created() {
        this.fetchProducts();
    },
    methods: {
        fetchProducts() {
            axios.get(this.endpoint).then((response) => {
                console.log(response.data.data);
                this.products = response.data.data;
            });
        }
    }
}
</script>
