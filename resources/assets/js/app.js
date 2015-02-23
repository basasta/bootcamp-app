var $ = require("jquery");

console.log("Hello my friend");
console.log($().jquery);

(function (jq) {
    console.log(jq().jquery);  
})