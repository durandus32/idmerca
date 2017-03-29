<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Responsive Hover Table</h3>

        <div class="box-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table id="tbEmpresa" class="table table-hover">
          <tr>
            <th>ID Empresa</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Codigo Postal</th>
          </tr>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
<script type="text/javascript">
  var base_url="<?php echo base_url();?>";
</script>
