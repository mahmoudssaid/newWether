// let toDay = new XMLHttpRequest();
// weather()
// async function weather() {
//     let toDay = await fetch("https://api.weatherapi.com/v1/forecast.json?key=7d77b96c972b4d119a3151101212704&q=${a}&days=3");
//     let weatherTD = toDay.json();
//     console.log(weatherTD);
// }
var myHttp = new XMLHttpRequest();
var allPosts;
myHttp.open('GET', 'https://jsonplaceholder.typicode.com/posts');
myHttp.send();
myHttp.addEventListener('readystatechange', function() {
    if (myHttp.readyState == 4 && myHttp.status == 200) {
        allPosts = JSON.parse(myHttp.response);
        console.log(allPosts)
    }
})
console.log("hello")