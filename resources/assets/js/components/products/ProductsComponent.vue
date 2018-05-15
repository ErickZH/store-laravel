<template>
    <section>
        <transition-group
            tag="div"
            :css="false"
            name="fadeIn"
            @before-enter="beforeEnter"
            @enter="enter"
            @leave="leave"
            class="row">
            <product-card-component :key="product.id" :data-index="index" :product="product" v-for="(product, index) in products" ></product-card-component>
        </transition-group>
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
        },
        beforeEnter(el) {
            el.style.opacity = 0;
            el.style.transform = "scale(0)";
            el.style.transition = "all 0.2s cubic-bezier(0.4, 0.0, 0.2, 1)";
        },
        enter(el) {
            const delay = 300 * el.dataset.index;
            setTimeout(() => {
                el.style.opacity = 1;
                el.style.transform = "scale(1)";
            }, delay)
            
        },
        leave(el) {
            el.style.opacity = 0;
            el.style.transform = "scale(0)";
        }
    }
}
</script>
