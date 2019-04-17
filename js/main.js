//objects
var _efeitos = new Effect();
var _main    = new Main();

function Main(){

    this.logout = function()
    {
        //action is the logout
        $.ajax({
            method: "post",
            url: "/orbsys/request.php",
            data: {
                type: "system", obj: "login", act: "sair"
            }
        })
        .done(function(msg){
            console.log(msg);
            if( msg == '_success_' ){
                window.location.reload();
            }
        });
    }

}

//function or modals functions
function prepareLogout(){
    /*var html = '<div class="modal fade" id="modal_logout" tabindex="-1" role="dialog">';
    html += '<div class="modal-dialog" role="document">';
    html += '  <div class="modal-content">';
    html += '    <div class="modal-header">';
    //html += '      <h5 class="modal-title">Modal title</h5>';
    html += '      <button type="button" class="close" data-dismiss="modal" aria-label="Close">';
    html += '        <span aria-hidden="true">&times;</span>';
    html += '      </button>';
    html += '    </div>';
    html += '    <div class="modal-body">';
    html += '      <p>Deseja mesmo sair?</p>';
    html += '       <button class="btn btn-sm btn-danger">Sim</button>';
    html += '       <button class="btn btn-sm btn-secondary">Não</button>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';
    html += '<div>';
    $(html).modal('show');*/
    var t = confirm("Deseja mesmo sair?");
    if( t ){
        _main.logout();
    }
}