<!DOCTYPE html>
<html lang="en">

<!--instanciar el head-->
@include('sections.head')

<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">
        <prueba-component ruta="{{route('basepath')}}"></prueba-component>
        <!--para comunicarse los componentes padre a hijo se utiliza props-->
        <!--para comunicarse entre hijos a padres se utiliza emit-->
</div>

<!-- instanciar los scripts -->
@include('sections.script')
<!-- end scripts-->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
