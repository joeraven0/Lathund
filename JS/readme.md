### Create p inside div inside body
```
//Place inside
var element = document.getElementById("mainheader");

//Create div element
var mydiv = document.createElement('div');

//Give id
mydiv.id = 'mydiv';

//Create p element
var myparagraph = document.createElement('p');

//Create text to p
var mytext = document.createTextNode('My text');

//Append text to p
myparagraph.appendChild(mytext);

//Apend p to div
mydiv.appendChild(myparagraph);

//Place inside
element.appendChild(mydiv);

//Styling
mydiv.style.position = 'absolute';
mydiv.style.top = '15px';
mydiv.style.left = '15px';

//OR document.getElementById('mydiv').style.position = "absolute";
//OR document.getElementById('mydiv').style.top = "15px";
//OR document.getElementById('mydiv').style.left = "15px";
```
