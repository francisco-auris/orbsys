//ARQUIVO DE EFEITOS DE TELA FO SISTEMA
function Effect(){
    
    //efeitos de window
    this.maximize = function( dataWindow ){
        $('.window[data-window='+dataWindow+']').animate({
            width: '100%',
            height: '100%',
            top: 0, left: 0
        }, 150);
    }


}

