//index

setInterval(function() {
    var h1Element = document.querySelector('h1');
    var text = h1Element.textContent; // Obtenha o texto do elemento <h1>
    var newText = '';

    for (var i = 0; i < text.length; i++) {
        if (text.charAt(i).toLowerCase() === '7') { // Verifique se é a letra "a" (ignorando maiúsculas/minúsculas)
            newText += '<span class="blink">' + text.charAt(i) + '</span>';
        } else {
            newText += text.charAt(i);
        }
    }

    h1Element.innerHTML = newText;
}, 1000);

//menu

document.addEventListener("DOMContentLoaded", function () {
    const popupContainer = document.getElementById("popup-container");

    // Verifica se a classe 'fechada' está definida no corpo do documento
    if (!document.body.classList.contains("fechada")) {
        popupContainer.style.display = "block";
    }

    // Função para fechar a janela de mensagem
    function fecharPopup() {
        document.body.classList.add("fechada");
        popupContainer.style.display = "none";
    }

    // Associa a função de fechamento ao botão
    document.querySelector("button").addEventListener("click", fecharPopup);
});

