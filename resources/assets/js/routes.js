import Products from './components/Products/index.vue';
import CreateProducts from './components/Products/create.vue';
import Brands from './components/Brands/index.vue';
import CreateBrands from './components/Brands/create.vue';
import Categories from './components/Categories/index.vue';
import CreateCategories from './components/Categories/create.vue';
import Descriptions from './components/Descriptions/index.vue';
import CreateDescriptions from './components/Descriptions/create.vue';
import Locations from './components/Locations/index.vue';
import CreateLocations from './components/Locations/create.vue';
import Manufactures from './components/Manufactures/index.vue';
import CreateManufactures from './components/Manufactures/create.vue';
import CreateTransfers from './components/Transfers/create.vue';
export default [
    {
        path: '/products',
        component: Products,
        name: 'products'
    },
    {
        path: '/products/create',
        component: CreateProducts,
        name: 'createProducts'
    },
    {
        path: '/brands',
        component: Brands,
        name: 'brands'
    },
    {
        path: '/brands/create',
        component: CreateBrands,
        name: 'createBrands'
    },
    {
        path: '/categories',
        component: Categories,
        name: 'categories'
    },
    {
        path: '/categories/create',
        component: CreateCategories,
        name: 'createCategories'
    },
    {
        path: '/descriptions',
        component: Descriptions,
        name: 'descriptions'
    },
    {
        path: '/descriptions/create',
        component: CreateDescriptions,
        name: 'createDescriptions'
    },
    {
        path: '/locations',
        component: Locations,
        name: 'locations'
    },
    {
        path: '/locations/create',
        component: CreateLocations,
        name: 'createLocations'
    },
    {
        path: '/manufactures',
        component: Manufactures,
        name: 'manufactures'
    },
     {
        path: '/manufactures/create',
        component: CreateManufactures,
        name: 'createManufactures'
    },{
        path: '/transfers/create',
        component: CreateTransfers,
        name: 'createTransfers'
    },
]