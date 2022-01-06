import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
    routes:[
        /*Registramos las rutas de nuestro proyecto*/
        {path: '/', component: require('./components/modulos/dashboard/index').default},
        {path: '/categoria', component: require('./components/modulos/categoria/index').default},
        {path: '/cliente', component: require('./components/modulos/cliente/index').default},
        {path: '/pedido', component: require('./components/modulos/pedido/index').default},
        {path: '/permiso', component: require('./components/modulos/permiso/index').default},
        {path: '/producto', component: require('./components/modulos/producto/index').default},
        {path: '/reporte', component: require('./components/modulos/reporte/index').default},
        {path: '/rol', component: require('./components/modulos/rol/index').default},
        {path: '/usuario', component: require('./components/modulos/usuario/index').default},
    ],
    mode:'history' /*permite cambiar la vista cuando cambia la ruta */

})