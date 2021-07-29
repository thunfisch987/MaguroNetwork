// var allImages = new Array();
// $.ajax({url: "memes/", success: function (data) {
//     console.log({ data });
// 		$(data).find("td > a").each(function () {
				
//                 var images = $(this).attr("href");
//                 $('<p></p>').html(images)
// 			});
// 	},
// });

$.ajax({
    url: "memes/",
    success: function(data){
       $(data).find("a:contains(.jpg)").each(function(){
          // will loop through 
          var images = $(this).attr("href");
  
          $('<p></p>').html(images).appendTo('a div of your choice')
  
       });
    }
  });