function readCapitulos(offset) {
    post("meumanga", "read/capitulo", {manga: parseInt($("#manga-id").val()), off: offset}, function (data) {
        $("#manga-capitulo").html(data);
    });
}
readCapitulos();