var reloadPage = function() {
    location.reload();
}

$(".btn-add-category").click(function() {
    dialog.iFrame("添加类目", '/admin/category/add', '400px', '350px', reloadPage);
});