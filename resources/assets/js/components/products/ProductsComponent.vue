<template>
    <section>
        <material-trasition-group
            tag="div"
            class="row">
            <product-card-component :key="product.id" :data-index="index" :product="product" v-for="(product, index) in products" ></product-card-component>
        </material-trasition-group>
    </section>
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
