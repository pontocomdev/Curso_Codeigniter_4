<div class="container">
	<div class="alert-danger p-3 my-3">
		<?= \Config\Services::validation()->listErrors(); ?>
	</div>
	<form action="<?= '/noticias/gravar' ?>" method="post">
		<div class="form-group">
			<label for="titulo">Título</label>
			<input type="text" class="form-control" name="titulo" 
			value="<?= isset($noticias['titulo']) ? $noticias['titulo'] : set_value('titulo') ?>"/>
		</div>
		<div class="form-group">
			<label for="autor">Autor</label>
			<input type="text" class="form-control" name="autor" 
			value="<?= isset($noticias['autor']) ? $noticias['autor'] : set_value('autor') ?>"/>
		</div>
		<div class="form-group">
			<label for="descricao">Descrição</label>
			<textarea name="descricao" class="form-control">
				<?= isset($noticias['descricao']) ? $noticias['descricao'] : set_value('descricao') ?>
			</textarea>
		</div>
		<input type="hidden" name="id" 
		value="<?= isset($noticias['id']) ? $noticias['id'] : set_value('id') ?>">
		<input type="submit" name="submit" class="btn btn-primary">
	</form>
</div>