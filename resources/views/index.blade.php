@extends('base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-6">
			<form>
				@csrf
				<div class="input-group mb-3">
					<input type="text" name="cep" id="txtCep" class="form-control" placeholder="CEP" aria-label="CEP" aria-describedby="consultar-cep">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button" id="consultar-cep">Consultar</button>
					</div>
				</div>
			</form>
		</div> <!-- /col -->
	</div> <!-- /row -->
	
	<div class="row">
		<div class="col-sm-12 col-md-6">
			<div class="card" style="display: none;">
				<div class="card-header">
					Endereço
				</div>
				<div class="card-body">
					<p class="card-text">
						<span id="end"></span> <br>
						<span id="bairro"></span> <br>
						<span id="cidade"></span> <br>
						<span id="cep"></span> <br>
						<span id="comple"></span>
					</p>
				</div> <!-- /card-body -->
			</div> <!-- /card -->
		</div> <!-- /col -->
	</div> <!-- /row -->
</div> <!-- /container -->
@stop
