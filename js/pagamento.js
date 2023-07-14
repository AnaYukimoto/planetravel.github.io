function mostrarCartao() {
    var checkbox = document.getElementById("mostrarCartao");
    var formCartao = document.getElementById("formCartao");

    if (checkbox.checked) {
        formCartao.style.display = "block";
    } else {
        formCartao.style.display = "none";
    }
}

function mostrarPix() {
    var checkbox = document.getElementById("mostrarPix");
    var formPix = document.getElementById("formPix");

    if (checkbox.checked) {
        formPix.style.display = "block";
    } else {
        formPix.style.display = "none";
    }
}

function copiarTexto(texto) {
    var areaTransferencia = document.createElement("textarea");
    areaTransferencia.value = texto;
    document.body.appendChild(areaTransferencia);
    areaTransferencia.select();
    document.execCommand("copy");
    document.body.removeChild(areaTransferencia);
}


