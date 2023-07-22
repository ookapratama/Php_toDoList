function warna(){
    var sym,war;
    sym="0123456789ABCDEF";
    war="#";
    for(var i=0;i<6;i++){
        war=war+sym[Math.floor(Math.random() * 16 )];

    }

    document.body.style.background=war;
}