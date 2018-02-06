<template>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>

                    <div class="panel-body">
                        <section class="panel">
                            <div class="panel panel-footer">
                                <header class="panel panel-default">
                                    <h3>Create Products</h3>
                                </header>
                            </div>
                            <div class="panel panel-footer">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>Serial</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Model</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Manufacture</th>
                                        <th>Location</th>
                                        <th style="text-align: center">
                                            <a v-hotkey="addTd" v-on:click="addRow" class="addRow">
                                                <i class="glyphicon glyphicon-plus"></i>
                                            </a>
                                        </th>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(addTd, index) in addRows">
                                            <td>
                                                <select name="product[]" class="input form-control"
                                                        v-model="addTd.product">
                                                        <option v-for="option in products" v-bind:value="option.id">
                                                            {{ option.serial ? option.serial : option.description.name }}
                                                        </option>
                                                </select>
                                            </td>                                            
                                            <td><input type="text" class="form-control" placeholder="Quantity" v-model="addTd.quantity"></td>
                                            <td>
                                                <select class="form-control"
                                                        v-model="addTd.status">
                                                        <option value="1">
                                                            Working
                                                        </option>
                                                        <option value="0">
                                                            Defective
                                                        </option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control"
                                                        v-model="addTd.model">
                                                        <option v-for="option in brands" v-bind:value="option.id">
                                                            {{ option.name }}
                                                        </option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control"
                                                        v-model="addTd.category">
                                                        <option v-for="option in categories" v-bind:value="options.id">
                                                            {{ option.name }}
                                                        </option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control"
                                                        v-model="addTd.description">
                                                        <option v-for="option in descriptions" v-bind:value="option.id">
                                                            {{ option.name }}
                                                        </option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control"
                                                        v-model="addTd.manufacture">
                                                        <option v-for="option in manufactures" v-bind:value="option.id">
                                                            {{ option.name }}
                                                        </option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control"
                                                        v-model="addTd.location">
                                                        <option v-for="option in locations" v-bind:value="option.id">
                                                            {{ option.name }}
                                                        </option>
                                                </select>
                                            </td>
                                            <td>
                                                <!-- button -->
                                                <button @click.prevent="addRows.splice(index, 1)" class="btn btn-sm btn-danger">
                                                    <i class="glyphicon glyphicon-remove"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-primary pull-right" @click="addSerial">Add Product</button>
                            </div>
                        </section>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                addRows:[],
                brands:[],
                categories:[],
                products:[],
                descriptions:[],
                manufactures:[],
                locations:[],
            }
        },
        mounted() {
            this.fetchModel();
            this.fetchCategory();
            this.fetchProduct();
            this.fetchDescription();
            this.fetchLocation();
            this.fetchManufacture();
            console.log('Create product running')
        },
        computed:{
            addTd(){
                return{
                    enter : this.addRow,
                    esc: this.deleteRow
                }
            }
        },
        methods:{
            deleteRow(){
                this.addRows.pop()
            },
            addSerial: function() {
                var addRows = _.map(this.addRows, function(num) {
                    return _.pick(num, 'quantity', 'serial', 'manufacture','description','location', 'category', 'model', 'status')
                });
                axios.post('../api/products', {products :addRows}).then(response => {
                    console.log(response.data)
                })
            },
            addRow(){
                this.addRows.push({
                    serial:null,
                    quantity:null,
                    status:null,
                    model:null,
                    category:null,
                    description:null,
                    manufacture:null,
                    location:null
                });
            },
            fetchModel: function() {
                axios.get('../api/brands').then(response => this.brands = _.map(response.data.brands, function (data) {
                    return _.pick(data,'name', 'id');
                }))
            },
            fetchCategory: function () {
                axios.get('../api/categories').then(response => this.categories = _.map(response.data.categories, function (data) {
                    return _.pick(data, 'name', 'id');
                }))
            },
            fetchProduct: function () {
                axios.get('../api/products').then(response => this.products = response.data.products)
            },
            fetchDescription: function () {
                axios.get('../api/descriptions').then(response => this.descriptions = _.map(response.data.descriptions, function (data) {
                    return _.pick(data, 'name', 'id');
                }))
            },
            fetchManufacture: function () {
                axios.get('../api/manufactures').then(response => this.manufactures = _.map(response.data.manufactures, function (data) {
                    return _.pick(data, 'name', 'id');
                }))
            },
            fetchLocation: function () {
                axios.get('../api/locations').then(response => this.locations = _.map(response.data.locations, function (data) {
                    return _.pick(data, 'name', 'id');
                }))
            },
        }

    }
</script>
