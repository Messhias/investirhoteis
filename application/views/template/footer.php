 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.form.min.js"></script>
    <script src="js/custom.js"></script>



<!-- end main container -->
</div>
<!-- footer container -->
<div class="container col-lg-12 col-md-12 col-xs-12 col-sm-12 header footer-container"> 
	
	<div class="row">
		<div class='col-sm-12 col-xs-12 col-lg-3 col-md-3 col-lg-offset-1 copyright'>
			TODOS OS DIREITOS RESERVADOS
		</div>
	
		<div class='col-sm-12 col-xs-12 col-lg-3 col-md-3 col-lg-offset-1 logo'>		
			<img src="<?=site_url('img/praias.png') ?>" alt="Praias construtora logo"
			class='img-responsive'>
		</div>

		<div class='col-sm-12 col-xs-12 col-lg-2 col-md-2 col-lg-offset-2 copyright'>
			<?=date('Y') ?>
		</div>

	</div>
</div>
<!-- end footer container -->

<!-- MATERIAL MODAL -->
<!-- Modal -->
<div class="modal fade" id="materialModal" tabindex="-1" role="dialog" aria-labelledby="Material Modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Dados</h4>
      </div>
      <div class="modal-body">
      	<p>
      		Digite as informações abaixo para conseguir seu material completo!
      	</p>

      	<form name="frmSendMaterial" id="frmSendMaterial" action="<?=site_url('welcome/sendMaterialEmail') ?>" method="POST" role='form'>
      		
			<div class="form-group">
				<label for="email">Digite o seu e-mail:</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="DIGITE AQUI SEU EMAIL"
				value="">
			</div>


      </div>
      <div class="modal-footer">
	        <button type="submit" class="btn btn-primary">OBTER MATERIAL</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">FECHAR FORMULÁRIO</button>
      	</form>
      </div>
    </div>
  </div>
</div>
<!-- end material modal -->

<!-- lading mask -->

<div class='lmask'>
	<img src="<?=site_url('img/praias.png') ?>" alt="PRAIAS CONSTRUTORA" class='img-responsive'>
</div>
<!-- END LOADING  -->
</body>
</html>