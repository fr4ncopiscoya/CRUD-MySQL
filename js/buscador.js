$(document).ready(function () {
    $("#buscador").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tablita tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});