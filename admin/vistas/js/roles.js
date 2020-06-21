$("select[id=Roles]").on("change", function() {
    let codRol = $("select[id=Roles]").val();
    let formData = new FormData();

    formData.append("codRol", codRol);

    $.ajax({
        url: "Ajax/rolesA.php",
        method: "POST",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "html",
        success: function(datosTabla) {
            $("div[id=tablaMenu]").html(datosTabla);
        },
        error: function(xhr, textStatus) {
            alert("ocurrio un error")
        }
    })

})

// let idMenu;
// let codMenu;
// let codRol;

$(document).on("change", "select[name=estadoN]", function() {
    let idMenu = $(this).attr("idMenu");
    let codMenu = $("select[id=" + idMenu + "]").val();
    let codRol = $("select[id=Roles]").val();
    let formData = new FormData();

    formData.append("codMenu", codMenu);
    formData.append("idMenu", idMenu);
    formData.append("codigoRol", codRol);

    $.ajax({
        url: "Ajax/updateRolA.php",
        data: formData,
        method: "post",
        cache: false,
        contentType: false,
        processData: false,
        success: function() {
            alert("se actualizo el rol");
        }
    })
})

// $(document).on("click", "button[id = btnAplicarMenu]", function() {
//     //idMenu = $("select[name=estadoN]").attr("idMenu");
//     //codMenu = $("select[id=" + idMenu + "]").val();
//     //codRol = $("select[id=Roles]").val();
//     //let formData = new FormData();
//     console.log("codMenu: " + codMenu + "idMenu:" + idMenu + "codigoRol: " + codRol)
//         //formData.append("codMenu", codMenu);
//         // $.ajax({
//         //     url: "Ajax/rolesA.php",
//         //     method: "POST",
//         //     data: formData,
//         //     cache: false,
//         //     contentType: false,
//         //     processData: false,
//         //     dataType: "html",
//         //     success: function(datosTabla) {
//         //         $("div[id=tablaMenu]").html(datosTabla);
//         //     },
//         //     error: function(xhr, textStatus) {
//         //         alert("ocurrio un error")
//         //     }
//         // })
// })