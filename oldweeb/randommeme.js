// window.onload = choosePic;

// var myPix = new Array("images/lion.jpg","images/tiger.jpg","images/bear.jpg");

// function choosePic() {
//      var randomNum = Math.floor(Math.random() * myPix.length);
//      document.getElementById("myPicture").src = myPix[randomNum];

// var path = 'memes/',
// imgs = ['carrot.gif','neil_1.jpg','steak.jpg'],
// i = Math.floor(Math.random()*imgs.length);
//  $('.el').append("<img src='"+path+imgs[i]+"'>").hide().fadeIn(2000);

var allImages = new Array();
$.ajax({url: "memes/", success: function (data) {
    console.log({ data });
		$(data).find("td > a").each(function () {
				// // will loop through
				// // alert("Found a file: " + $(this).attr("href"));
				// console.log("%c this", "color:orange");
				// console.log(this);
				// console.log("%c $(this)", "color:red");
				// console.log($(this));
				// console.log("%c $(this).attr('href')", "color:green");
				// console.log($(this).attr("href"));
				// // allImages.push(data);
                var images = $(this).attr("href");
                $('<p></p>').html(images)
			});
	},
});

// $.get("memes/", function (data) {
//     console.log({ data });
//     $(data).find("td > a").each(function () {
// 				// will loop through
// 				// alert("Found a file: " + $(this).attr("href"));
// 				console.log("%c this", "color:orange");
// 				console.log(this);
// 				console.log("%c $(this)", "color:red");
// 				console.log($(this));
// 				console.log("%c $(this).attr('href')", "color:green");
// 				console.log($(this).attr("href"));
// 				// allImages.push(data);
//     })
// });