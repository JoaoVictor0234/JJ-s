// Obtém o elemento do carrinho e o contador de itens
const cartCount = document.getElementById('cart-count');
let itemCount = 0; // Inicializa o contador de itens

// Função para adicionar um item ao carrinho
function addItemToCart() {
  itemCount++; // Incrementa o contador de itens
  cartCount.textContent = itemCount; // Atualiza o texto do contador de itens
}

// Exemplo de uso: chame a função addItemToCart() quando o usuário adicionar um item ao carrinho
// Por exemplo, no evento de clique do botão 'COMPRAR' em cada card de produto

// Seleciona todos os botões 'COMPRAR' (supondo que cada botão tenha a classe 'button')
const buyButtons = document.querySelectorAll('.button');

// Adiciona um listener de evento de clique a cada botão
buyButtons.forEach(button => {
  button.addEventListener('click', () => {
    addItemToCart(); // Chama a função para adicionar um item ao carrinho
    // Você pode adicionar aqui lógica adicional, como exibir uma mensagem de sucesso, etc.
  });
});
