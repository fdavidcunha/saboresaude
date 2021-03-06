<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Categorias
  </h1>
  
  <ol class="breadcrumb">
    
    <li>
      <a href="/admin">
        <i class="fa fa-dashboard"></i> Home
      </a>
    </li>
    
    <li>
      <a href="/admin/categories">Categorias</a>
    </li>
    
    <li class="active">
      <a href="/admin/categories/create">Cadastrar</a>
    </li>
    
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Inclusão de Categoria</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/categories/create" method="post">
          <div class="box-body">
            
            <div class="form-group">
              <label for="descategory">Nome da categoria</label>
              <input type="text" class="form-control" id="descategory" name="descategory" placeholder="Digite o nome da categoria">
            </div>
            
            <div class="form-group">
              <label for="desdescription">Descrição</label>
              <textarea class="form-control" id="desdescription" name="desdescription" placeholder="Descrição"></textarea>
            </div>
            
            <div class="checkbox">
              <label>
                <input type="checkbox" id="availablemenu" name="availablemenu" value="1"> Disponível no menu do site
              </label>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" id="availablefooter" name="availablefooter" value="1"> Disponível no rodapé do site
              </label>
            </div>

          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">
              <i class="fa fa-save"></i> Salvar
            </button>
            
            <a href="/admin/categories" class="btn btn-primary">
              <i class="fa fa-undo"></i> Voltar
            </a>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->