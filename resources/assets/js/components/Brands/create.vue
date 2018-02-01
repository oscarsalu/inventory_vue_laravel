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
                                    <h3>Create brand</h3>
                                </header>
                            </div>
                            <div class="panel panel-footer">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>brand</th>
                                        <th style="text-align: center">
                                            <a v-hotkey="addTd" v-on:click="addRow" class="addRow">
                                                <i class="glyphicon glyphicon-plus"></i>
                                            </a>
                                        </th>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(addTd, index) in addRows">
                                            <td><input type="text" class="form-control" placeholder="brand" v-model="addTd.brand"></td>
                                            <td>
                                                <!-- button -->
                                                <button @click.prevent="addRows.splice(index, 1)" class="btn btn-sm btn-danger">
                                                    <i class="glyphicon glyphicon-remove"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-primary pull-right" @click="addSerial">Add brand</button>
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
                brands:[]
            }
        },
        mounted() {
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
                    return _.pick(num,'brand')
                });
                axios.post('../api/brands', {brands :addRows}).then(response => {
                    console.log(response.data)
                })
            },
            addRow(){
                this.addRows.push({
                    brand:null
                });
            }
        }

    }
</script>
