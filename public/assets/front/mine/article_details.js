var Details = function() {
    var addNewComment = function() {
        $(document).on("submit", "#form-comment", function(e) {
            e.preventDefault();
            var id = $("#article_id").val();
            var name = $("#name").val();
            var comment = $("#comment").val();
            if (name != "" && comment != "") {
                $.ajax({
                    url: config.base_url + "/add_comment",
                    type: "post",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        name: name,
                        comment: comment,
                        article_id: id
                    },
                    success: function(msg) {
                        var html = "";
                        for (var i in msg) {
                            html += "<div class='card mb-4'>";
                            html += "<div class='card-body'>";
                            html += "<h5 class='card-title'>" + msg[i].name + "</h5>";
                            html += "<p class='card-text'>" + msg[i].comment + "</p>";
                            html += "</div></div>";
                        }
                        $("#name").val("");
                        $("#comment").val("");
                        $("#all-comments").html(html);
                    }
                });
            } else {
                $("#error").css("display", 'block');
                $("#error").html("Fill fields ... ");
                setTimeout(function() {
                    $("#error").css("display", 'none');
                    $("#error").html("");
                }, 2000);
            }
        });
    };
    return {
        init: function() {
            addNewComment();
        }
    };
}();
$(document).ready(function() {
    Details.init();
});