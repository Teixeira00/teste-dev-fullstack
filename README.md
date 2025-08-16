#  Projeto Full Stack - Vue + Laravel + PostgreSQL (Supabase)

Este é um projeto full stack que consiste em:

- **Frontend**: Vue.js
- **Backend**: Laravel
- **Banco de dados**: PostgreSQL (hospedado no Supabase)
- **Containerização**: Docker + Docker Compose

---

##  Requisitos

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

---

##  Como executar o projeto

Clone este repositório:

```bash
git clone https://github.com/Teixeira00/teste-dev-fullstack.git
cd seu-repo 
```

1. Suba os containers com Docker

```bash
docker-compose up --build
```

Aguarde o build completar.

Acesse o frontend (Vue) em:
👉 http://localhost:8080

O backend (Laravel) roda na porta 9000.

## Configuração do banco de dados

O backend está conectado a um banco de dados PostgreSQL hospedado na Supabase.
As configurações estão definidas no arquivo /backend/.env:

```bash
DB_CONNECTION=pgsql
DB_HOST=db.vvntnimgjbwmqdhzfyen.supabase.co
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=ZvrvCvK1QCcI1Q0l
```
IMPORTANTE: O banco Supabase está online, não depende de container local

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
