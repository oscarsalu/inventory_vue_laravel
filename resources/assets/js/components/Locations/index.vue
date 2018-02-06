<template>
    <div>
        <router-link :to="{ name: 'createLocations' }"> Create Locations </router-link>

        <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                            <form id="search">
                                <input type="text" class="form-control" placeholder="search..." name="query" v-model="searchQuery" aria-describedby='basic-addonly'>
                            </form>

                </div>
            </div>
        </div>
    </div>
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
                axios.get('api/locations').then(response =>this.brands = response.data.locations)
            }
        }
    }

</script>