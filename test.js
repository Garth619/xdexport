
    var cssId = document.getElementById('themeCSS'),

    textContent = cssId.textContent;

    //var myCss = $("#themeCSS").text();

    //console.log(textContent);

    var stringTest = '{"garrett": {"position": "absolute","background": "red"},"cullen": {"margin-top": "50px","float": "left"}}';


    
    var obj = JSON.parse(stringTest);

    console.log(obj);

    // after building I might need to make stringify it JSON.stringify() or turn whatever I have into a string

    // has to be done in node,js
    //var json = JSON.parse(‘<json string>’);
    //var data = JSON.stringify(json);
    //var fs = require('fs');
    //fs.writeFile("file.json", data);
   
    //var myObj = JSON.parse('{"p": 5}');
    



