var index=0;
var warna= document.getElementById('warna');

warna.addEventListener('click', function onClick(event){
    var warna=["red","blue","yellow","green","orange","purple"];
    document.getElementsByClassName('kotakk')[0].style.background= warna[index++];
   
});

