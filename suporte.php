<?php 
include ("conexao.php");
include ("/xampp/htdocs/tcc_horta_caseira/view/menu-fixo-suporte.php");
?>
<body>
            <div class="container">
                <h1>Consulta de Mensagens no Sistema</h1>
                <form action="administrador.php" method="post">
                    <div class="container-forms">
                        <div class="col">
                          <div class="form-group col-md-6" id="signin">
                            <h4>Entrar no Sistema</h4>
                        </div>
                        <div class="col-6">
                        <label for="email">Coloque o seu email</label>
                        <input type="email" class="form-control" size="30" name="email" id="email" aria-describedby="endereco"  required="required" 
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        <small id="email" class="form-text text-muted">Digite o seu Email</small>
                        <br>

                      </div>
                        
                        <div class="col-6">
                        <label for="mensagem">Digite a sua Senha</label>
                        <input type="password" class="form-control" name="senha" rows="5" id="senha" aria-describedby="senha" required="required"></input>
                        <small id="senha" class="form-text text-muted">Digite a sua Senha </small>
                        <button type="submit" class="btn btn-primary" name="botao" value="botao"  >Entrar no Sistema</button><br>

                        <br>
                        <br>

                    
                    </div>
            </form>
</body>

</html>
