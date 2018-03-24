$(function () {
    post("meumanga", "read/leitorPagina", {capitulo: parseInt($("#capitulo-id").val())}, function (data) {
        $("#pag-anterior").attr("href", data.anterior);
        $("#pag-proximo").attr("href", data.proximo);
    });
});
