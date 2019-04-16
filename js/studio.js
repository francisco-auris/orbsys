//VARIAVEIS DE STUDIO
var _studio = new Studio();

var projects = new Array();
var pacotes = new Array();
var labels = new Array();

//INITIALIZING SYSTEM
$(document).ready(function(){

    if( projects.length == 0 && pacotes.length == 0 ){ mdlProject(); }

});

//FUNCÕES
function rdToken(){
    var token = objData.getMilliseconds()+''+objData.getHours()+''+objData.getDay()+''+objData.getMinutes();
    return token;
}
function loadProjects(){}
function loadPacotes(){}

//OBJECTS
function Studio(){

    this.newProject = function( token ){
        var nome   = $('input[name=project_'+token+']').val();
        var titulo = $('input[name=pacote_'+token+']').val();

        projects.push( nome );
        pacotes.push( titulo );
        //html intop header
        var html = nome+' <span class="badge badge-primary ml-3">'+titulo+'</span>';

        $('.name_object').html( html );

        $('#modalProject_'+token).modal('hide');
    }


}

//MODAIS DE ATENDIMENTO DE STUDIO
function mdlProject()
{
    var token = rdToken();
    var html = '<div class="modal fade" id="modalProject_'+token+'" tabindex="-1" role="dialog">';
    html += '<div class="modal-dialog modal-sm" style="margin-top:180px;" role="document">';
    html += '    <div class="modal-content">';
    html += '    <div class="modal-header">';
    html += '        <button type="button" class="close" data-dismiss="modal" aria-label="Close">';
    html += '        <span aria-hidden="true">&times;</span>';
    html += '        </button>';
    html += '    </div>';
    html += '    <div class="modal-body">';
    html += '        <label>Nome do projeto:</label>';
    html += '        <input type="text" maxlength="50" name="project_'+token+'" class="form-control" placeholder="nome do projeto">';
    html += '        <label>Nome do pacote:</label>';
    html += '        <input type="text" maxlength="50" name="pacote_'+token+'" class="form-control" placeholder="nome do pacote">';
    html += '        <button class="btn btn-sm btn-primary mt-3" onclick=_studio.newProject("'+token+'");>Criar projeto</button>';
    html += '    </div>';
    html += '    </div>';
    html += '</div>';
    html += '</div>';

    $(html).modal('show');
}
