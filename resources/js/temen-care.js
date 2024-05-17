$(document).ready(function () {
    const loading = "<h2>Loading...</h2>";
    $("#load-page").html(loading);
    $("#load-page").load("/admin/load/dashboard");

    // const currentPath = window.location.pathname;

    // if(currentPath){
    //     e.preventDefault();
    //     $("#load-page").html(loading);
    //     $("#load-page").load("/admin/" + currentPath);
    // }

    $("a.collapse-item").on("click", function (e) {
        e.preventDefault();
        $("#load-page").html(loading);
        var targetLoad = $(this).attr("load");
        $("#load-page").load("/admin/" + targetLoad);
    });
});

// Fungsi untuk menambahkan query parameter ke URL
function addQueryParameter(key, value) {
    let url = new URL(window.location.href);
    url.searchParams.set(key, value);
    window.history.pushState({ path: url.href }, "", url.href);
}

// Fungsi untuk mengambil query parameter dari URL
function getQueryParameter(key) {
    let url = new URL(window.location.href);
    return url.searchParams.get(key);
}

// Event handler untuk tombol "Add Query Parameter"
function a() {
    console.log("hsopalam");
    addQueryParameter("example", "123");
    alert("Query parameter added: " + window.location.href);
}

// Event handler untuk tombol "Fetch Query Parameter"
function b() {
    console.log("hsopalamaskjnaskjn");
    const value = getQueryParameter("example");
    alert("Query parameter value: " + value);
}
