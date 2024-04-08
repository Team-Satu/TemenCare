$(document).ready(function () {
    const loading = "<h2>Loading...</h2>"
    $("#load-page").html(loading);
    $("#load-page").load("/admin/load/dashboard");
    
    $("a.collapse-item").on("click", function () {
        $("#load-page").html(loading);
        var targetLoad = $(this).attr('load');
        $("#load-page").load("/admin/"+targetLoad);
    });
});
