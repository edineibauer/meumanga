function readCapitulos(offset) {
    post("meumanga", "read/capitulo", {manga: parseInt($("#manga-id").val()), off: offset}, function (data) {
        $("#manga-capitulo").html(data);
    });
}

function readNextCapitulo() {
    post("meumanga", "read/leitorPagina", {capitulo: parseInt($("#capitulo-id").val())}, function (data) {
        $(".pag-leitor").removeClass("disabled").prop("disabled", false);
        if(data.anterior === null)
            $(".pag-anterior").addClass("disabled").prop("disabled", true);
        if(data.proximo === null)
            $(".pag-proximo").addClass("disabled").prop("disabled", true);

        $(".pag-anterior").attr("href", data.anterior);
        $(".pag-proximo").attr("href", data.proximo);
    });
}

$(function () {
    if ($("#manga-id").length)
        readCapitulos();
    else
        readNextCapitulo();
});
