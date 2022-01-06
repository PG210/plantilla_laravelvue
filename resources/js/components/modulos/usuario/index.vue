<template>
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Usuarios</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <!--parte del usuario-->
      <div class="content container-fluid">
        <div class="card">
          <div class="card-header">
            <div class="card-tools">
              <router-link class="btn btn-info btn-sm " :to="'/'">
                  <i class="fas fa-plus-square"></i> Nuevo usuario
              </router-link>
            </div>
          </div>
          <div class="card-body">
            <div class="container-fluid">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Criterios de busqueda</h3>
                </div>
                <div class="card-body">
                   <form role="form">
                     <div class="row">
                       <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                              Nombre
                            </label>
                            <div class="col-md-9">
                               <input type="text" class="form-control" v-model="fillBsqUsuario.cNombre"> 
                               <!---v-model="fillBsqUsuario.cNombre" se debe vincular para que pueda borrar los datos de busqueda-->
                            </div>
                          </div>
                       </div>
                       <!--segundo input-->
                       <div class="col-md-6">
                         <div class="form-group row">
                          <label class="col-md-3 col-form-label"> Usuario</label>
                          <div class="col-md-9">
                               <input type="text" class="form-control" v-model="fillBsqUsuario.cUsuario"> 
                            </div>
                         </div>
                       </div>
                       <!--tercer input-->
                        <div class="col-md-6">
                         <div class="form-group row">
                          <label class="col-md-3 col-form-label">Correo electronico</label>
                          <div class="col-md-9">
                               <input type="text" class="form-control" v-model="fillBsqUsuario.cCorreo"> 
                            </div>
                         </div>
                       </div>
                       <!--cuatro input-->
                        <div class="col-md-6">
                         <div class="form-group row">
                          <label class="col-md-3 col-form-label">Estado</label>
                          <div class="col-md-9">
                               <!--<input type="text" class="form-control"> -->
                               <!--Codigo de element lista select-->
                                     <el-select v-model="fillBsqUsuario.cEstado" placeholder="Seleccione un estado" clearable>
                                      <el-option
                                        v-for="item in listEstados"
                                        :key="item.value"
                                        :label="item.label"
                                        :value="item.value">
                                      </el-option>
                                    </el-select>
                               <!--end codigo de element-->
                            </div>
                         </div>
                       </div>
                     </div>
                   </form>
                </div>
               <!--si coloca aqui los botones se agrandan --> 
              </div>
               <!--botones-->
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-md-4 offset-4">
                           <button class="btn btn-flat btn-info btnWidth ">Buscar</button>
                           <button class="btn btn-flat btn-default btnWidth" @click.prevent="limpiarCriterios()">Limpiar</button>
                      </div>
                       
                    </div>
                  </div>
             <!--final de botones--> 
            </div>
            <!--bandeja de resultados-->
             <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">Bandeja de Resultados</h3>
                    </div>
                    <div class="card-body table-responsive">
                           <table class="table table-hover table-head-fixed text-nowrap projects">
                             <thead>
                               <tr>
                                 <th>Fotografia</th>
                                 <th>Nombre</th>
                                 <th>Correo</th>
                                 <th>Usuario</th>
                                 <th>Estado</th>
                                 <th>Acciones</th>
                               </tr>
                             </thead>
                             <tbody>
                               <tr>
                                 <td><img src="#" alt="imagen"></td>
                                 <td>Pedro Cuasquer</td>
                                 <td>pedrocuasquer21095@gmail.com</td>
                                 <td>pedroC</td>
                                 <td><span class="badge badge-success">Activo</span></td>
                                 <td>
                                   <router-link class="btn btn-primary btn-sm" :to="'/'">
                                     <i class="fas fa-folder"></i> Ver
                                   </router-link>
                                    <router-link class="btn btn-info btn-sm" :to="'/'">
                                     <i class="fas fa-pencil-alt"></i> Editar
                                   </router-link>
                                    <router-link class="btn btn-success btn-sm" :to="'/'">
                                     <i class="fas fa-key"></i> Permiso
                                   </router-link>
                                    <router-link class="btn btn-danger btn-sm" :to="'/'">
                                     <i class="fas fa-trash"></i>  Desactivar
                                   </router-link>
                                    <router-link class="btn btn-success btn-sm" :to="'/'">
                                     <i class="fas fa-check"></i> Activar
                                   </router-link>
                                 </td>
                               </tr>
                             </tbody>
                           </table>
                           <!--cuadro de anterior, 1 y siguiente -->
                              <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                  <li class="page-item">
                                    <a href="#" class="page-link">Ant</a>
                                  </li>
                                  <li class="page-item active">
                                     <a href="#" class="page-link">1</a>
                                  </li>
                                  <li class="page-item">
                                     <a href="#" class="page-link">Post</a>
                                  </li>
                                </ul>

                              </div>
                           <!--fin de anterior, 1 y siguiente-->
                    </div>
                  </div>
            <!---end bandeja resultados-->

          </div>
        </div>
      </div>
    </div>

    
</template>

<script>
export default {
           data(){
             return{
               fillBsqUsuario:{
                 cNombre: '', //cVariable recibe un string nvar integer dvar recibe date, fvar decimal o float
                 //si es listvar array
                 cUsuario: '',
                 cCorreo: '',
                 cEstado: ''
               },
               listUsuarios:[ //almacena el resultado de la busqueda de usuarios

               ],
               listEstados:[//array list que se va a mostrar en la etiqueta
                 {value: 'A', label: 'Activo'},
                 {value: 'I', label: 'Inactivo'}
               ]


             }
           },
           methods:{
             limpiarCriterios(){
               this.fillBsqUsuario.cNombre='';
               this.fillBsqUsuario.cUsuario='';
               this.fillBsqUsuario.cCorreo='';
               this.fillBsqUsuario.cEstado='';
             }
           }

}
</script>

<style>

</style>