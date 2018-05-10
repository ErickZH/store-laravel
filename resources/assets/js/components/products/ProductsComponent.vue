<template>
    <div class="row">
        <div v-for="product in products" class="col-xs-12 col-sm-10 col-md-4 mb-2">
            <div class="card p-2">
                <header>
                    <h2 class="card-title">
                        <a href="#">
                            {{ product.title }}
                        </a>
                    </h2>
                    <h4 class="card-subtitle">
                        {{ product.price }}
                    </h4>
                </header>
                <p class="card-text">
                    {{ product.description }}
                </p>
            </div>
        </div>
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
