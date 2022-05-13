var table;
function init(){
    mostrarform(false);
    listar();
    $('#formulario').on("submit", function(e){
        guardaryeditar(e);
    });
}

function listar(){ 
    table= $('#tblistadoregdata').dataTable({
        "Processing": true,  //activa el procesamiento de las tablas
        "ServerSide": true, //Paginación y filtros se reaicen desde el servidor
        responsive: true, //Active capacidades responsivas en la tabla
        dom: '<"top"Bfl>rt<"bottom"ip><"clear">', //definir los elementos de control de datatables
                                                //B Botones exports, f filtro sencillo, l selector de filas
                                                //re mensaje de procesamiento, ta table como tal, i información
                                                //p paginación
        buttons:[
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "ajax":{
            url: '../ajax/departamento.php?op=listar',
            type: 'get',
            dataType: 'json',
            error:  function(e){
                console.log(e.responseText);
            }
        },
        "destroy": true,
        "iDisplayLength": 3, // Indica cuantos registros vamos a mostrar en el table
        "order": [[1,"desc"]]
    }).DataTable();
}
//Limpiar formulario
function limpiar(){
    $("#idDepartamento").val("");
    $("#descripcion").val("");
}
function mostrarform(flag){
    limpiar();
    if(flag){
        $("#listadoregdata").hide();
        $("#formregdata").show();
        $("#btnagregar").hide();
        $("#btnguardar").prop("disable", false);
    }else{
        $("#listadoregdata").show();
        $("#formregdata").hide();
        $("#btnagregar").show();
    }
}
function cancelarform(){
    limpiar();
    mostrarform(false);
}
function guardaryeditar(e){
    e.preventDefault();
    $("#btnagregar").prop("disable", true);
    var formData = new FormData($("#formulario")[0]);
    $.ajax({
        url:"../ajax/departamento.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false, //No manda cabecero
        processData: false, //No convierte objectos en string
        
        success: function(mensaje){
            valida = mensaje.indexOf('rror');
            if(valida!=-1){
                toastr["error"](mensaje);
            }else{toastr["success"](mensaje);}
            mostrarform(false);
            table.ajax.reload();
        }
    });
    limpiar();
}
init();