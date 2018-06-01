<template>
    <div class="col-xs-12 col-sm-10 col-md-4 mb-2">
        <div class="card p-2">
            <header>
                <h2 class="card-title">
                    <a :href="'/productos/'+product.id">
                        {{ product.title }}
                    </a>
                </h2>
                <h4 class="card-subtitle">
                    {{ product.humanPrice }}
                </h4>
            </header>
            <p class="card-text">
                {{ product.description }}
            </p>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        product: {
            type: Object
        }
    }
}
</script>
