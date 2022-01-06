<template>
    <div>
            <navbar :ruta="ruta"></navbar> <!--Recibe la ruta del componente padre-->
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <slidebar :ruta="ruta"></slidebar>
            <!-- Content Wrapper. Contains page content -->
          
           <!-- <contenido></contenido>-->
            <!-- /.content-wrapper -->
             <!--instancio las rutas de los componentes-->
            
             <div class="content-wrapper">
                 <transition name="slide-fade" mode="in-out"> 
                      <router-view></router-view>
                 </transition>
             </div>
            

            <footer></footer>
            
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>

    </div>
</template>

<script>
import Navbar from './plantilla/Navbar.vue' /*importa el componente navbar y lo renombra con el mismo nombre */
import Slidebar from './plantilla/Slidebar.vue'   
import Contenido from './plantilla/Contenido.vue'
import Footer from './plantilla/Footer.vue'
   export default {
       
        props: ['ruta'], /*se coloca atributo props para comunicarse con el hijo
        y el nombre de la id colocada en este caso ruta*/

        components: {
            Navbar,
            Slidebar,
            Contenido,
            Footer
           
        }
    }
</script>
