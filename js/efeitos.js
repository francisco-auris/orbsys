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

    this.minimizeWindow = function( dataWindow ){
        console.log('Minimize window ==> '+dataWindow);
        $('[data-window='+dataWindow+'] .window-body').animate({
            height: '0%'
        }, 150);
        $('[data-window='+dataWindow+']').animate({
            height: '40px'
        }, 150);
    }



}

