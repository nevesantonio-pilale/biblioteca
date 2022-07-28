<?php
    include_once('template/header.php');
    include_once('template/header_login.php');
?>
    <!-- Top content -->
    <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Iniciar Sessão de</strong> ACESSO</h1>
                            <div class="description">
                            	<p>
	                            	Preenche os Dados de  <a href="http://azmind.com"><strong>ACESSO</strong></a>, no formulário a baixo!
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>ACESSE A BIBLIOTECA</h3>
                            		<p>Digite seu nome de usuário e senha para Entrar:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Usuário</label>
			                        	<input type="text" name="form-username" placeholder="Nome de usuário..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Senha</label>
			                        	<input type="password" name="form-password" placeholder="Senha..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Entrar!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>Não está cadastrado? faz a sua <a href="#">subscrição aqui</a></h3>
                        	
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

<?php
    include_once ('template/script_login.php');
    include_once ('template/footer.php');
?>