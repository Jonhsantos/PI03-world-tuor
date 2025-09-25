# 🌍 Projeto World Tour - Agência de Turismo

Este é um sistema desenvolvido em **Laravel** que simula uma Agência de Viagens, focado na gestão de pacotes, reservas de clientes e controle administrativo.

## 🚀 Tecnologias
- **Framework:** Laravel 10.x (PHP)
- **Linguagem:** PHP 8.0.30+
- **Banco de Dados:** MySQL
- **Gerenciadores:** Composer e Node.js & NPM 22.15.0+
- **Padrão:** MVC (Model-View-Controller)

---

## ⚙️ Instalação e Configuração

Para configurar e rodar o projeto localmente, siga os passos abaixo:

1.  **Clone o repositório e acesse a pasta:**
    ```bash
    git clone [https://github.com/EduardoFigueiredo05/pi03-world-tuor.git]
    cd agencia-turismo
    ```

2.  **Instale as dependências do PHP (Composer):**
    ```bash
    composer install
    ```

3.  **Instale as dependências do Node.js (Frontend):**
    ```bash
    npm install && npm run dev
    ```

4.  **Configure o arquivo .env:**
    Crie o arquivo de configuração e gere a chave da aplicação.
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5.  **Configure o Banco de Dados e Migre:**
    * Edite as credenciais do MySQL no arquivo `.env`.
    * Rode o comando para criar as tabelas e popular com dados iniciais (Seeders).
    ```bash
    php artisan migrate:fresh --seed
    ```

6.  **Rode o servidor local:**
    ```bash
    php artisan serve
    ```
    O sistema estará acessível em `http://127.0.0.1:8000`.

---

## 🏗️ Estrutura e Funcionalidades Desenvolvidas (Base)

A estrutura inicial do banco de dados e a primeira visualização de dados já foram estabelecidas.

### 1. Base de Dados (Migrations e Models)

| Tabela | Model | Objetivo | Detalhe Chave |
| :--- | :--- | :--- | :--- |
| **users** | `User` | Gestão de clientes e ADMs. | Coluna `is_admin` para diferenciação de nível de acesso. |
| **pacotes** | `Pacote` | Armazena os produtos de viagem. | Campos `continente`, `pais`, `preco`, `data_inicio`, `data_fim`. |
| **reservas** | `Reserva` | Sistema de reserva de pacotes (sem pagamento). | Chaves estrangeiras (`user_id`, `pacote_id`) e coluna `status`. |

### 2. Relações e Lógica Inicial

* Os Models (`Pacote`, `Reserva`, `User`) foram criados e as relações de **um-para-muitos** (`hasMany`, `belongsTo`) foram definidas.
* O Seeder (`PacoteSeeder`) foi utilizado para popular a tabela `pacotes` com dados de teste.

### 3. Visualização de Pacotes

A primeira página de exibição dos pacotes foi criada e configurada:

* **Rota:** `/pacotes`
* **Controller:** `PacoteController@index` (busca todos os pacotes no BD).
* **View:** `resources/views/pacotes/pacote.blade.php` (exibe a lista formatada).
