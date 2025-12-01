let ubicacionPrincipal = window.pageYOffset;
window.onscroll = function() {
    let Desplasamiento_Actual = window.pageYOffset;
    if(ubicacionPrincipal >= Desplasamiento_Actual){
        this.document.getElementById('header-r').style.top ='0';
    }
    else{
        document.getElementById('header-r').style.top = '-170px';
    }
    ubicacionPrincipal = Desplasamiento_Actual;
}

document.getElementById("header-r").removeAttribute("#header-r");