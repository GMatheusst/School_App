import './bootstrap';
document.addEventListener('DOMContentLoaded', function () {
    // Exibir mensagem de confirmação ao adicionar um curso ao carrinho
    const addToCartButtons = document.querySelectorAll('.btn-add-cart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function () {
            alert('Curso adicionado ao carrinho com sucesso!');
        });
    });

    // Interação para remover um item do carrinho
    const removeFromCartButtons = document.querySelectorAll('.btn-remove-cart');
    removeFromCartButtons.forEach(button => {
        button.addEventListener('click', function () {
            const item = this.closest('tr');
            item.remove(); // Remove a linha correspondente da tabela do carrinho
            updateCartTotal(); // Atualiza o total do carrinho
        });
    });

    // Atualizar o total do carrinho
    function updateCartTotal() {
        const cartRows = document.querySelectorAll('.cart-table tbody tr');
        let total = 0;
        cartRows.forEach(row => {
            const priceElement = row.querySelector('.cart-item-price');
            const quantityElement = row.querySelector('.cart-item-quantity');
            const price = parseFloat(priceElement.textContent.replace('R$', ''));
            const quantity = parseInt(quantityElement.textContent);
            total += price * quantity;
        });

        const totalElement = document.querySelector('.cart-total-value');
        totalElement.textContent = 'R$ ' + total.toFixed(2);
    }

    // Navegação dinâmica entre as abas do dashboard (Aluno/Professor/Admin)
    const dashboardTabs = document.querySelectorAll('.dashboard-tab');
    const tabContents = document.querySelectorAll('.tab-content');

    dashboardTabs.forEach(tab => {
        tab.addEventListener('click', function () {
            dashboardTabs.forEach(t => t.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));

            this.classList.add('active');
            const tabId = this.getAttribute('data-tab');
            document.querySelector(`#${tabId}`).classList.add('active');
        });
    });
});
