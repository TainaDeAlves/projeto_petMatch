document.addEventListener('DOMContentLoaded', function() {
    const inputs = document.querySelectorAll('input[type="file"]');
    inputs.forEach(function(input) {
      const imagemId = input.dataset.imagemid;
      const imagem = document.getElementById(imagemId);
      input.addEventListener('change', function() {
        selecionarImagem(this, imagem);
      });
    });
  });
  
  function selecionarImagem(input, imagem) {
    if (input.files && input.files.length > 0) {
      const arquivo = input.files[0];
      const leitor = new FileReader();
      leitor.onload = function(e) {
        imagem.src = e.target.result;
      };
      leitor.readAsDataURL(arquivo);
    } else {
      console.error('Nenhum arquivo selecionado.');
    }
  }
