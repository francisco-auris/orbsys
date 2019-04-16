<?php
//arquivos de contantes do sistema
define( "BASEURI", "http://localhost/orbsys/" );
define( "BASEROOT", $_SERVER['DOCUMENT_ROOT'].'/orbsys' );
//sessions de usuario
define( "USR_NOME", "orb_user_name" );
define( "USR_LOGIN", "orb_user_login" );
//conexao de banco
define( "DB_HOST", "localhost" );
define( "DB_USER", "root" );
define( "DB_PSWD", "" );
define( "DBASE", "orb" );

define( 
    "CONECTIONS", 
    [
        'label' => ['TESTE','PRODUÇÃO'], 
        'value' => ['teste_001','prod_2019']
    ]
);
