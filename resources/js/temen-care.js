$(document).ready(function () {
    $("#load-page").load("/admin/load/dashboard");

    $("a.collapse-item").on("click", function () {
        var targetLoad = $(this).attr('load');
        $("#load-page").load("/admin/"+targetLoad);
    });
});
