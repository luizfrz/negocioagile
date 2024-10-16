document.addEventListener('DOMContentLoaded', () => {
    const gambiarra = document.getElementsByClassName('balde');
    const imagem = document.getElementById('esconder');

    // Adicionar um evento de clique para cada elemento com a classe 'balde'
    Array.from(gambiarra).forEach((element) => {
        element.addEventListener('click', () => {
            // Exibir a imagem ao clicar
            imagem.style.display = 'block';
        });
    });
});

