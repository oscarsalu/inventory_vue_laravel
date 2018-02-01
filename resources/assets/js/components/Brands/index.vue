<template>
    <div>
        <router-link :to="{ name: 'createBrands' }"> Create Brands </router-link>
        
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
                brandColumns: ['name'],
                brands: []
            }
        },
        created(){
            this.fetchbrands();
        },
        methods:{
            fetchbrands(){
                axios.get('api/brands').then(response =>this.brands = response.data.brands)
            }
        }
    }

</script>