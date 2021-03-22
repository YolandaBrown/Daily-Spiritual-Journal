fetch("https://quotes15.p.rapidapi.com/quotes/random/", {
     "method": "GET",
     "headers": {
          "x-rapidapi-key": "91689b9c6dmsh2dea87d40c5c6aep162dfbjsn52594f6e7867",
          "x-rapidapi-host": "quotes15.p.rapidapi.com"
     }
})
     .then(response => response.json())
               .then(response => {
                    console.log(response);
                    document.getElementById("daily-quote").innerHTML = response.content;
                    document.getElementById("author").innerHTML = response.orginator.name;
               })
               .catch(err => {
                    console.error(err);
               });