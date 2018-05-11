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
            products: [
                {
                    title: 'Git',
                    description: 'Learn system version',
                    price: 90
                },
                {
                    title: 'Ruby',
                    description: 'Learn lenaguage Ruby',
                    price: 40
                },
                {
                    title: 'Java',
                    description: 'Learn lenaguage Java',
                    price: 50
                },
                {
                    title: 'Laravel',
                    description: 'Learn the Framework Top of PHP',
                    price: 35
                },
                {
                    title: 'FX Ruby',
                    description: 'Build UI with library FXRuby',
                    price: 25
                }
            ]
        };
    }
}
</script>
