$(document).ready(function () {
    $("a.collapse-item").on("click", function () {
        var targetLoad = $(this).attr('load');
        $("#load-page").load("/"+targetLoad);
    });
});
