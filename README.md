# MiniERP

## Objetivo
O MiniERP é um sistema web simples de gestão de produtos, estoque, cupons de desconto e pedidos, desenvolvido em Laravel. Ele serve como um exemplo prático de ERP (Enterprise Resource Planning) para pequenas empresas, lojas ou para fins didáticos.

## Funcionalidades
- **Cadastro e gerenciamento de produtos**: nome e preço.
- **Controle de estoque**: vinculado a produtos, com variações e quantidade.
- **Cupons de desconto**: criação, validade, valor mínimo e desconto.
- **Pedidos**: cadastro de pedidos com cliente, endereço, subtotal, frete, total, cupom e status.
- **Interface web responsiva**: visual moderno, adaptado para desktop e mobile, usando Bootstrap 5.

## Estrutura do Projeto
- `app/Models/`: Modelos Eloquent para Produto, Estoque, Cupom, Pedido e PedidoItem.
- `app/Http/Controllers/`: Controllers RESTful para cada entidade, responsáveis pelo fluxo CRUD.
- `resources/views/`: Views Blade para cada módulo, com tabelas, formulários e navegação.
- `routes/web.php`: Rotas principais, usando resource controllers.
- `database/migrations/`: Migrations para criar as tabelas do banco de dados.

## Fluxo do Sistema
1. **Produtos**: Cadastre produtos com nome e preço.
2. **Estoque**: Associe produtos ao estoque, controlando variações e quantidades.
3. **Cupons**: Crie cupons com desconto, validade e valor mínimo.
4. **Pedidos**: Registre pedidos de clientes, aplicando cupons e listando itens.

## Responsividade
A interface utiliza Bootstrap 5, garantindo visual agradável e adaptação automática para celulares, tablets e desktops.

## Como Usar
### Pré-requisitos
- PHP >= 8.1
- Composer
- SQLite (ou outro banco configurado em `config/database.php`)

### Instalação
1. Clone o repositório:
   ```powershell
   git clone <url-do-repositorio>
   cd MiniERP
   ```
2. Instale as dependências:
   ```powershell
   composer install
   ```
3. Configure o arquivo `.env` (copie de `.env.example` e ajuste o banco):
   ```powershell
   cp .env.example .env
   # Edite o .env conforme necessário
   php artisan key:generate
   ```
4. Rode as migrations:
   ```powershell
   php artisan migrate
   ```
5. Inicie o servidor:
   ```powershell
   php artisan serve
   ```
6. Acesse em [http://localhost:8000](http://localhost:8000)

## Estrutura das Tabelas
- **produtos**: id, nome, preco
- **estoque**: id, produto_id, variacao, quantidade
- **cupons**: id, codigo, desconto, validade, valor_minimo
- **pedidos**: id, cliente_nome, cliente_email, endereco, cep, subtotal, frete, total, cupom_id, status
- **pedido_itens**: id, pedido_id, produto_id, variacao, quantidade, preco_unitario

## Público-alvo
- Pequenos negócios, lojas, empreendedores
- Estudantes de programação e desenvolvedores iniciantes
- Professores e instrutores de cursos de Laravel

## Observações
- O sistema é totalmente CRUD, fácil de expandir.
- O layout pode ser customizado em `resources/views/layouts/app.blade.php`.
- O banco padrão é SQLite, mas pode ser alterado.

## Licença
MIT. Livre para uso e modificação.

---

**Dúvidas ou sugestões?** Abra uma issue ou entre em contato!
