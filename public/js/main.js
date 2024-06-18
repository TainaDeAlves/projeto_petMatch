function ocultaPesquisa() {
    var caixaPesquisa = document.getElementById('lightBox-pesquisa');
    if (caixaPesquisa.style.display === 'none') {
        caixaPesquisa.style.display = 'flex';
    } else {
        caixaPesquisa.style.display = 'none';
    }
}