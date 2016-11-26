$(function () {

    $(".rateyo6s").rateYo({
        rating: 4,
        fullStar: true,
        onChange: function (rating, rateYoInstance) {
            //$(this).next().text(rating);
            $("#rateY").val(rating);
        }

    });
    $(".rateyoS7").rateYo({
        rating: 3,
        fullStar: true,
        onChange: function (rating, rateYoInstance) {
            //$(this).next().text(rating);
            $("#rateY").val(rating);

        }

    });
	$(".userToRate").rateYo({
        rating: 0,
        fullStar: true,
        onChange: function (rating, rateYoInstance) {
            //$(this).next().text(rating);
            $("#rateY").val(rating);

        }

    });
    $(".rateyo13").rateYo({
        rating: 3,
        fullStar: true,
        onChange: function (rating, rateYoInstance) {
            //$(this).next().text(rating);
            $("#rateY").val(rating);
        }

    });
    $(".rateyoWX3").rateYo({
        rating: 2,
        fullStar: true,
        onChange: function (rating, rateYoInstance) {
            //$(this).next().text(rating);
            $("#rateY").val(rating);
        }

    });

});

