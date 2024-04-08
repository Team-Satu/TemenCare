$(document).ready(function () {
    $("a.collapse-item").on("click", function () {
        console.log($(this).attr('load'))
        var id = $(this).attr("id");
        // $("#div-details").load("users/details/" + id + "/view");
    });
});
