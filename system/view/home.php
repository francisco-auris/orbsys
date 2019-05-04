<div class="background"></div>

<header id="sys_header">
    <div class="icon_main">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
            <style type="text/css">.st0{fill:#CCCCCC;}</style>
            <path id="bar_1" class="st0" d="M33.3,19.2H17.7c-0.9,0-1.6-0.7-1.6-1.6v0c0-0.9,0.7-1.6,1.6-1.6h15.6c0.9,0,1.6,0.7,1.6,1.6v0
                C34.9,18.5,34.1,19.2,33.3,19.2z"/>
            <path id="bar_2" class="st0" d="M33.3,26.7H17.7c-0.9,0-1.6-0.7-1.6-1.6v0c0-0.9,0.7-1.6,1.6-1.6h15.6c0.9,0,1.6,0.7,1.6,1.6v0
                C34.9,26,34.1,26.7,33.3,26.7z"/>
            <path id="bar_3" class="st0" d="M33.3,34H17.7c-0.9,0-1.6-0.7-1.6-1.6v0c0-0.9,0.7-1.6,1.6-1.6h15.6c0.9,0,1.6,0.7,1.6,1.6v0
                C34.9,33.3,34.1,34,33.3,34z"/>
        </svg>
    </div>
    <div class="name_user text-secondary"><?php echo strtoupper($_SESSION[USR_NOME]); ?></div>
    <div class="name_object text-secondary"><?php echo strtoupper($_SESSION[USR_CONNECT]); ?></div>

    <div class="icon_logout" title="Sair" onclick="prepareLogout();">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
            <style type="text/css">
                .st01{fill:none;stroke:#CCCCCC;stroke-width:2;stroke-miterlimit:10;}
            </style>
            <g>
                <path class="st01" d="M22.5,34L22.5,34c-3,0-5.5-2.5-5.5-5.5v-7.3c0-3,2.5-5.5,5.5-5.5h0c3,0,5.5,2.5,5.5,5.5v7.3
                    C28,31.5,25.5,34,22.5,34z"/>
                <line class="st01" x1="23.1" y1="24.8" x2="30.8" y2="24.8"/>
                <polygon class="st01" points="30.7,23.4 30.7,26.4 33.3,24.9 	"/>
            </g>
        </svg>
    </div>

    <input type="text" class="input-search" placeholder="Buscar">

</header>
<div class="bar_effect"><div class="intro"></div></div>
<div id="sub_main">
    <div class="space_minimize">

    </div>
</div>

<div id="main">
    <span>MENU<span>
    <div class="caption">Sistema</div>
    <ul class="main-module">
        <li>
            <span class="icone-hash"></span> Administração
            <ul class="sub">
                <li>Usuários</li>
                <li>Niveis</li>
                <li>Conexão</li>
                <li>Smtp</li>
            </ul>
        </li>
        <li>
            <span class="icone-upload"></span> Importação
            <ul class="sub">
                <li>Pacotes</li>
                <li>Dados</li>
            </ul>
        </li>
        <li><span class="icone-pie-chart"></span> Dashboards</li>
        <li><span class="icone-terminal"></span> Gerador de consultas</li>
    </ul>
</div>

<div id="content">

    <div class="window" data-window="1">
        <div class="window-header">
            <span class="icone-hash"></span> FORMULARIO DE TESTE 
            <div class="close-window">Fechar <div class="close" aria-label="Close"><span aria-hidden="true">&times;</span></div></div>
            <div class="maximize-window float-right" onclick="_efeitos.maximize(1);">
                <svg width="40" height="40">
                    <rect width="15" y="11" x="13" height="15" style="stroke: #CCC;stroke-width:2;" fill="transparent" />
                </svg>
            </div>
            <div class="minimize-window float-right" onclick="_efeitos.minimizeWindow(1);">
                <svg width="40" height="40">
                    <line x1="10" y1="25" x2="30" y2="25" style="stroke: #CCC;stroke-width:2;" />
                </svg>
            </div>
        </div>
        <div class="window-body">
            <!-- corpo de uma janela -->
            <ul class="btn-action">
                <li><span class="icone-file"></span> Novo</li>
                <li><span class="icone-printer"></span> Impressão</li>
                <li><span class="icone-copy"></span> Copiar</li>
                <li><span class="icone-search"></span> Pesquisar</li>
            </ul>
            <hr>
            <!-- corpo do formulário com devidos campos -->
            <div class="row">
                <div class="col-md-3">
                    <label>Código:</label>
                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="col-md-6">
                    <label>Titulo:</label>
                    <input type="text" class="form-control form-control-sm" placeholder="titulo do form">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <sub>Table list items</sub>
                    <div class="space-table-form">
                    <table class="table-form" border="1">
                        <thead>
                            <td>Item</td>
                            <td>Item name</td>
                            <td>Centro de custo</td>
                            <td>Preço</td>
                            <td>Setor</td>
                            <td>Descrição</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" class="form-table"></td>
                                <td><input type="text" class="form-table form-table-lg"></td>
                                <td><input type="text" class="form-table"></td>
                                <td><input type="text" class="form-table"></td>
                                <td>
                                    <select class="form-table form-table-lg">
                                        <option>---</option>
                                        <option>Almoxarifado</option>
                                        <option>Comercial</option>
                                        <option>Financeiro</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-table form-table-lg"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-table"></td>
                                <td><input type="text" class="form-table form-table-lg"></td>
                                <td><input type="text" class="form-table"></td>
                                <td><input type="text" class="form-table"></td>
                                <td>
                                    <select class="form-table form-table-lg">
                                        <option>---</option>
                                        <option>Almoxarifado</option>
                                        <option>Comercial</option>
                                        <option>Financeiro</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-table form-table-lg"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-table"></td>
                                <td><input type="text" class="form-table form-table-lg"></td>
                                <td><input type="text" class="form-table"></td>
                                <td><input type="text" class="form-table"></td>
                                <td>
                                    <select class="form-table form-table-lg">
                                        <option>---</option>
                                        <option>Almoxarifado</option>
                                        <option>Comercial</option>
                                        <option>Financeiro</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-table form-table-lg"></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <label>Observações:</label>
                    <textarea class="form-control form-control-sm" rows="4"></textarea>
                </div>
                
            </div>

            <button class="btn btn-sm btn-primary mt-3">Salvar</button>

        </div>
    </div>

    <!--<div class="window">
        <div class="window-header">USUÁRIOS</div>
        <div class="window-body">

        </div>
    </div>-->

</div>

<script>
    var efeito_main = (localStorage.getItem('main')) ? localStorage.getItem('main') : false;

    $(document).ready(function(){

        efeitoMain();

        $('.window').draggable({
            handle: ".window-header", containment: "#content"
        });

        $( ".window" ).resizable({
        grid: 50
        });


        $('.icon_main').click(function(){
            efeitoMain();
        });

        $('.main-module > li').click(function(e){
            $(e.target.childNodes[3]).slideToggle();
        });

    });

    function efeitoMain(){
        if( efeito_main == true ){  
            $('#main').animate({
                left: '-300px'
            }, 150);
            efeito_main = false;
            $('#bar_2').css('transform', 'translateX(5px)');
            $('#content').css('width','100%');
            localStorage.setItem('main', true);
        }
        else {
            $('#main').animate({
                left: '20px'
            }, 150);
            efeito_main = true;
            $('#bar_2').css('transform', 'translateX(0px)');
            $('#content').css('width','calc(100% - 340px)');
            localStorage.setItem('main', false);
        }
    }
</script>