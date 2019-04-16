<div class="box-login">
    <div class="d-block">
        <img src="<?= BASEURI ?>/img/logo_main.svg" width="60">
        <span class="ml-3"><b>EMPRESA NEW TECHNOLOGY</b></span>
        <hr>

        <form method="post">

            <label>Usuário:</label>
            <input type="text" class="form-control" placeholder="usuario"> 

            <label>Senha:</label>
            <input type="password" class="form-control" placeholder="senha"> 

            <label>Conectar:</label>
            <select class="form-control">
            <?php
            for( $i = 0; $i < count(CONECTIONS['label']); $i++ ){
                echo '<option value="'.CONECTIONS['value'][$i].'">'.CONECTIONS['label'][$i].'</option>';
            }
            ?>
            </select> 

            <button class="btn btn-primary mt-4">Entrar</button>
            <br>

            <input type="checkbox" class="mt-4 mr-2"><label>Lembrar-me usuário</label>
    
        </form>
    </div>
</div>

<div class="d-block w-100 text-secondary fixed-bottom p-2 text-center">
    <span>Version 1.0.0</span> / <span>Auris Maciel</span> / <span class="text-primary">orb</span>
</div>