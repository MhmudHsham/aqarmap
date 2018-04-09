var Articles = function() {
    var filterArticles = function() {
        $(document).on("click", ".category", function(e) {
            e.preventDefault();
            var id = $(this).attr("href");
            $.ajax({
                url: config.base_url + "/filter" + "/" + id,
                type: "get",
                data: {},
                success: function(msg) {
                    $("#articles-area").html(msg);
                }
            });
        });
    };
    return {
        init: function() {
            filterArticles();
        }
    };
}();
$(document).ready(function() {
    Articles.init();
});