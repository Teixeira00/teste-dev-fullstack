#  Projeto Full Stack - Vue + Laravel + PostgreSQL (Supabase)

Este é um projeto full stack que consiste em:

- **Frontend**: Vue.js
- **Backend**: Laravel
- **Banco de dados**: PostgreSQL (hospedado no Supabase)
- **Containerização**: Docker + Docker Compose (ainda em desenvolvimento)

---

## ⚠️ Aviso importante

> **O deploy com Docker Compose ainda não está funcional**.  
> Por enquanto, o projeto funciona corretamente apenas rodando o frontend e backend **separadamente** em servidores locais.

##  Como executar o projeto manualmente

### 1. Clone o repositório

```bash
git clone https://github.com/Teixeira00/teste-dev-fullstack.git
cd teste-dev-fullstack
```

### 2. Rode o backend (Laravel)

```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
```
Certifique-se de configurar corretamente o arquivo .env com os dados do Supabase e o API_KEY.

- banco de dados
```bash
DB_CONNECTION=pgsql
DB_HOST=db.vvntnimgjbwmqdhzfyen.supabase.co
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=ZvrvCvK1QCcI1Q0l
```
- chave API (chave meramente para testes)
```bash
API_KEY=senha123
```
Rodar backend:

```bash
php artisan serve
```


IMPORTANTE: O banco de dados é PostgreSQL hospedado no Supabase e está online, não depende de container local

### 3. Rode o Frontend (Vue)

Abra outro terminal e execute:

```bash  
cd frontend
npm install
npm run dev
```
4. Acesse no navegador:

Frontend: http://localhost:5173

Backend (API): http://127.0.0.1:8000

## passo a passo de como foi feito

BACKEND

- instalei o laravel, usando supabase como banco (postgres);
- criei as tabelas essênciais para o projeto, em /database/migrations, entre elas a tabela de produtos e outras que o laravel exigiu;
- populei a tabela com 50 produtos com dados em /database/seeders;
- criei uma rota para mostrar os produtos em /routes/web.php, um controller para os produtos (/app/http/Controllers/Api) e uma view para aparecerem (/views/produtos);
- criei as rotas da API em /routes/api.php;
- editei o arquivo do controlador dos produtos para combinar com as rotas criadas;
- testei o CRUD do projeto no POST;
- criei middleware para verificar a API-KEY pelo header das requisições.

------------------------------------------------------------------------------------

FRONTEND

- instalei o vue;
- desenhei uma página mais ou menos como queria e fui ajustando no arquivo /src/App.vue;
- implementei funcionalidade aos botões;
- Ajustei a lista de produtos;

-------------------------------------------------------------------------------------

INTEGRAÇÃO

- Axios instalado dentro do Vue;
- importação da API;
- ajuste de chamadas dentro da página do Vue;
- ajuste de autenticação das chamadas necessárias
