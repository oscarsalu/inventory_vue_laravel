<template>

    <div id="app">
        <nav class='navbar navbar-default navbar-static-top'>
            <div class="container">
                <div class="navbar-header">
                    
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </button>
                    
                <a class="navbar-brand">
                Inventory</a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a>Create CFAT</a></li>
                        <li><router-link :to ="{ name: 'products' }" >Items</router-link></li>
                        <li><router-link :to ="{ name: 'descriptions' }" >Description</router-link></li>
                        <li><router-link :to ="{ name: 'brands' }" >Models</router-link></li>
                        <li><router-link :to ="{ name: 'manufactures' }" >Manufacture</router-link></li>
                        <li><router-link :to ="{ name: 'locations' }" >Locations</router-link></li>
                        <li><router-link :to ="{ name: 'categories' }" >Categories</router-link></li>
                    </ul>
                </div>
            </div>
        </nav>
        <router-view>
    
        </router-view>
    </div>
</template>

<script>
     export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>