<h1>Formulário de Cadastro</h1>

<form action="?pg=processar" class="form-group" method="POST" enctype="multipart/form-data">
<p>Nome: <input type="text" name="nome" id="nome" class="form-control">         
</p>
<p>Valor: <input type="number" name="valor" class="form-control" id="valor">
</p>
<p>Imagem: <input type="file" class="form-control" name="imagem" id="imagem"></p>
<p>Descrição: <textarea name="descricao" placeholder="Insira uma descrição breve do produto..." id="descricao" class="form-control" rows="5" cols="50"></textarea></p>
<p><input type="submit" name="enviar" class="btn btn-primary" value="Enviar"> <input type="reset" name="resetar" class="btn btn-danger" value="Resetar"></p>
</form>