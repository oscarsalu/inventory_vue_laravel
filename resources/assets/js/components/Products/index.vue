<template>
    <div>
        <router-link :to="{ name: 'createProducts' }"> Create Products </router-link>

        <form id="search">
            <input type="text" class="form-control" placeholder="search..." name="query" v-model="searchQuery" aria-describedby='basic-addonly'>
        </form>
        <div v-if="brands">
            <demo-grid
                       :data="brands"
                       :columns="brandColumns"
                       :filter-key="searchQuery">
            </demo-grid>
        </div>
        <div v-else>
            Loading ......
        </div>
    </div>
</template>
<script>
    import DemoGrid from './../Filtering/filter.vue';
    export default {
        components:{
            DemoGrid
        },
        data(){
            return{
                searchQuery: '',
                brandColumns: ['serial','quantity','category','description','location','status'],
                brands: []
            }
        },
        created(){
            this.fetchbrands();
        },
        methods:{
            fetchbrands(){
                axios.get('api/products').then(response =>this.brands = _.map(response.data.products, function(num){
                    var pick = _.pick(num, 'quantity','serial','manufacture.name','description.name','location.name','category.name','brand.name','status');
                    var objectProduct = {quantity: pick.quantity, serial: pick.serial, manufacture: pick.manufacture.name, description: pick.description.name, location: pick.location.name, category: pick.category.name, model: pick.brand.name, status};
                    return objectProduct;
                }))
            }
        }
    }

</script>