//This is to connect to the random quotes api

fetch("https://quotes-inspirational-quotes-motivational-quotes.p.rapidapi.com/quote?token=ipworld.info", {
	"method": "GET",
	"headers": {
		"x-rapidapi-key": "91689b9c6dmsh2dea87d40c5c6aep162dfbjsn52594f6e7867",
		"x-rapidapi-host": "quotes-inspirational-quotes-motivational-quotes.p.rapidapi.com"
	}
})//getting the quote and author from the API
    //.then(response => response.json())
            .then(response => {
                console.log(response);
                //document.getElementById("daily-quote").innerHTML = response.text;
                //document.getElementById("author").innerHTML = "-" + response.author + "-";
            })
            .catch(err => {
                console.error(err);
            });

        //This is to display the date in the top left of the page
        var d = new Date();
        var year = d.getFullYear();
        var date = d.getDate();
        var months = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
        ];

        var monthName = months[d.getMonth()];
        //Created dName variable with an array listing the days of the week
        var days = [
            'Sunday',
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday'
        ];
        var dayName = days[d.getDay()];
        //Put the date in the format I want it to display
        var dateFormat = `${dayName}  ${monthName} ${date}, ${year}`;
        //Display dateFormat in the div of dayofweek
        document.getElementById("dayofweek").innerHTML = dateFormat;

        /*displaying the icon on the calendar if the checkbox next to the icon is checked
        var exercise = "exercise-icon";
           var meditate = "meditate-icon";
           var prayer = "prayer-icon";
         
          if (checkbox)  "true"; {
              display i;
          }
*/

