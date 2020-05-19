// https://codepen.io/Faros/pen/xjyBm


var myTheme = $("#themeCSS").text();

function parseCSStoJSON(cssString){
  //split string into css rules
  var JSONarray = cssString.split("}");
  
  //for each rule
  for (var i=0;i<JSONarray.length;i++){
      //split selector and properties
      JSONarray[i] = JSONarray[i].split("{");
      //for each property
      for(var j in JSONarray[i]){
        //split key:value pairs
        JSONarray[i][j] = JSONarray[i][j].split(";");
        //for each key value pair
        for(var k in JSONarray[i][j]){
          //split key and value
          JSONarray[i][j][k] = JSONarray[i][j][k].split(":");
        }
      }
  }
  
  //rebuild string with JSON syntax
  var jsonStr = "";
  //for each rule
  for (var i=0;i<JSONarray.length;i++){
    jsonStr += '"' + JSONarray[i][0] + '" {' 
    for(var j=0;j<JSONarray[i].length;j++){
        for(var k=0;k<JSONarray[i][j].length;k++){
          jsonStr += '"' + JSONarray[i][j][k][0] + '":"' + JSONarray[i][j][k][1] + '" ;'
        }
    }
    jsonStr += '}'
  }
  
  //alert(jsonStr);
  return jsonStr;

  


}

parseCSStoJSON(myTheme);

console.log(parseCSStoJSON(myTheme));