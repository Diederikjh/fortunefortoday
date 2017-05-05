

function getNewFortune() {
	// Sets wait image
    var fortuneBody = document.getElementById('fortuneBody');
    fortuneBody.innerHTML = "<img src='img/busy.gif' />"
/*    $.get( "https://9bj8bks4p3.execute-api.us-west-2.amazonaws.com/prod/fortunefortoday-get-cookie", function( data ) {
        console.log(data);
    });*/

    $.ajax({
      url: "https://9bj8bks4p3.execute-api.us-west-2.amazonaws.com/prod/fortunefortoday-get-cookie"
    })
      .done(function( data ) {
           fortuneBody.innerHTML = data["body-json"].GetCookieResult;
      }).error( function(){
           console.log("Error retreiving fortune"); 
           fortuneBody.innerHTML = "";
      });
}

