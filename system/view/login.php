<div class="box-login">
    <div class="d-block">
        <img src="<?= BASEURI ?>/img/logo_main.svg" width="60">
        <span class="ml-3"><b><?php echo COMPANY_NAME; ?></b></span>
        <hr>

        <form method="post" action="">

            <label>Usuário:</label>
            <input type="text" name="login_user" class="form-control" placeholder="usuario"> 

            <label>Senha:</label>
            <input type="password" name="senha_user" class="form-control" placeholder="senha"> 

            <label>Conectar:</label>
            <select class="form-control" name="base_connect">
            <?php
            for( $i = 0; $i < count(CONECTIONS['label']); $i++ ){
                echo '<option value="'.CONECTIONS['value'][$i].'">'.CONECTIONS['label'][$i].'</option>';
            }
            ?>
            </select> 

            <button class="btn btn-primary mt-4" type="submit" name="sign">Entrar</button>
            <br>

            <input type="checkbox" name="remember" value="true" class="mt-4 mr-2"><label>Lembrar-me usuário</label>
            <br>
            <?php 
            $msg = new System\Controller\Login;
            echo $msg->message; 
            ?>
    
        </form>
    </div>
</div>

<div class="d-block w-100 text-secondary fixed-bottom p-2 text-center">
    <span>Version 1.0.0</span> / <span>Auris Maciel</span> / <span class="text-primary">orb</span>
</div>