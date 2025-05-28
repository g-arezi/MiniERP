# MiniERP

## Visão Geral
O **MiniERP** é um sistema de gestão empresarial simplificado, desenvolvido em Laravel, que permite o controle de produtos, estoque, cupons de desconto e pedidos. O objetivo é fornecer uma solução fácil de usar, responsiva e didática para pequenas empresas, estudantes e desenvolvedores que desejam aprender ou gerenciar operações básicas de um ERP.

---

## Funcionalidades
- Cadastro e gerenciamento de produtos
- Controle de estoque (com variações)
- Gestão de cupons de desconto
- Emissão e acompanhamento de pedidos
- Relacionamento entre entidades (produtos, estoque, cupons, pedidos)
- Interface web responsiva
- CRUD completo para todas as entidades

---

## Estrutura do Projeto
- `app/Models`: Modelos Eloquent (Produto, Estoque, Cupom, Pedido, PedidoItem)
- `app/Http/Controllers`: Lógica dos controladores para cada entidade
- `resources/views`: Telas Blade para cada módulo (produtos, estoque, cupons, pedidos)
- `routes/web.php`: Rotas web (CRUD)
- `database/migrations`: Estrutura do banco de dados
- `database/seeders`: Seeds para popular o banco

---

## Requisitos
- PHP >= 8.1
- Composer
- SQLite (ou outro banco suportado pelo Laravel)
- Node.js e npm (para assets front-end)

---

## Instalação e Configuração

### 1. Clone o repositório
```powershell
git clone <url-do-repositorio>
cd MiniERP
```

### 2. Instale as dependências PHP
```powershell
composer install
```

### 3. Instale as dependências front-end
```powershell
npm install
```

### 4. Configure o ambiente
Copie o arquivo `.env.example` para `.env` e ajuste as variáveis de ambiente conforme necessário:
```powershell
cp .env.example .env
```

No `.env`, configure:
```
DB_CONNECTION=sqlite
DB_DATABASE=./database/database.sqlite
```

Crie o arquivo do banco de dados:
```powershell
New-Item -Path ".\database\database.sqlite" -ItemType File
```

### 5. Gere a chave da aplicação
```powershell
php artisan key:generate
```

### 6. Execute as migrações e seeds
```powershell
php artisan migrate --seed
```

### 7. Compile os assets front-end
```powershell
npm run build
```

### 8. Inicie o servidor
```powershell
php artisan serve
```
Acesse: http://localhost:8000

---

## Tutoriais de Execução Completa

### Executando Testes Automatizados
1. Certifique-se de que as dependências estejam instaladas e o banco de dados esteja configurado.
2. Execute:
```powershell
php artisan test
```
Ou diretamente com PHPUnit:
```powershell
vendor\bin\phpunit
```

### Rodando em Ambiente de Desenvolvimento
- Após executar `php artisan serve`, acesse o sistema pelo navegador em http://localhost:8000
- O sistema é responsivo e pode ser acessado por dispositivos móveis.

### Atualizando Dependências
- Para atualizar dependências PHP:
```powershell
composer update
```
- Para atualizar dependências front-end:
```powershell
npm update
```

### Limpando Cache
- Para limpar cache de configuração, rotas e views:
```powershell
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### Gerando Novas Migrations
- Para criar uma nova migration:
```powershell
php artisan make:migration nome_da_migration
```

### Gerando Novos Models, Controllers e Seeders
- Model:
```powershell
php artisan make:model NomeModel
```
- Controller:
```powershell
php artisan make:controller NomeController --resource
```
- Seeder:
```powershell
php artisan make:seeder NomeSeeder
```

### Popular o Banco de Dados com Seeds
- Para rodar todos os seeders:
```powershell
php artisan db:seed
```
- Para rodar um seeder específico:
```powershell
php artisan db:seed --class=NomeSeeder
```

### Resetando o Banco de Dados
- Para resetar e migrar novamente:
```powershell
php artisan migrate:fresh --seed
```

---

## Como Usar o Sistema (Tutoriais Rápidos)

### Produtos
1. Acesse "Produtos" no menu.
2. Clique em "Novo Produto".
3. Preencha nome e preço.
4. Salve.

### Estoque
1. Acesse "Estoque".
2. Clique em "Novo Estoque".
3. Selecione o produto, informe variação (opcional) e quantidade.
4. Salve.

### Cupons
1. Acesse "Cupons".
2. Clique em "Novo Cupom".
3. Preencha código, desconto, validade e valor mínimo.
4. Salve.

### Pedidos
1. Acesse "Pedidos".
2. Clique em "Novo Pedido".
3. Preencha os dados do cliente, selecione produtos, adicione cupom (opcional).
4. Salve.

---

## Estrutura das Telas
- Todas as telas são responsivas e utilizam Bootstrap.
- Navegação pelo menu superior.
- Mensagens de sucesso/erro exibidas após ações.

---

## Fluxo de Dados
1. Produto é cadastrado.
2. Estoque é atualizado para cada produto.
3. Cupom pode ser criado e aplicado em pedidos.
4. Pedido é realizado, vinculando produtos, estoque e cupons.

---

## Público-Alvo
- Pequenas empresas
- Estudantes de programação
- Desenvolvedores que desejam um exemplo prático de Laravel

---

## Observações
- O sistema é didático e pode ser expandido facilmente.
- Para dúvidas ou sugestões, abra uma issue.

---

## Licença
MIT

---

## Créditos
Desenvolvido com Laravel, Bootstrap e muito carinho para a comunidade!
