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
    <div class="name_user">AURIS MACIEL</div>

    <div class="icon_logout">
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

</div>

<div id="main">

</div>

<div id="content">

    <div class="window">
        <div class="window-header">FORMULARIO DE TESTE</div>
        <div class="window-body">

        </div>
    </div>

    <div class="window">
        <div class="window-header">USUÁRIOS</div>
        <div class="window-body">

        </div>
    </div>

</div>

<script>
$(document).ready(function(){

    $('.window').draggable({
        handle: ".window-header", containment: "#content"
    });

    $( ".window" ).resizable({
      grid: 50
    });

});
</script>