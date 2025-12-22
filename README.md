# Projeto Voch

Sistema de gestão de grupos econômicos, bandeiras, unidades e colaboradores, com autenticação, auditoria e exportação de relatórios.

---

## 🚀 Tecnologias utilizadas

### Backend (Composer)
- Laravel Framework ^12.0
- Laravel Sanctum (autenticação)
- Laravel Tinker
- Livewire ^3.7 (componentes dinâmicos)
- Maatwebsite Excel (exportação/importação de planilhas)
- Spatie Activitylog (auditoria de ações)
- Laravel Lang (traduções)
- Laravel Pint (code style)
- PestPHP (testes unitários)
- Laravel Sail (ambiente Docker opcional)

### Frontend (NPM)
- Vite ^7.0.7 (bundler)
- TailwindCSS ^4.0.0 (estilização)
- @tailwindcss/vite
- Laravel Vite Plugin ^2.0.0
- Axios ^1.11.0 (requisições HTTP)
- Concurrently ^9.0.1 (execução paralela de processos)

---

## ⚙️ Setup do Projeto

Aqui estão os passos para colocar o sistema para funcionar.  
Você pode escolher entre duas formas: **rodar direto no computador** (com PHP/MySQL instalados, como Laragon ou XAMPP) ou **rodar com Docker** usando o Laravel Sail.

---

### 🖥️ Opção 1: Rodar direto no computador (Laragon/XAMPP/PHP)

1. **Baixar o projeto**  
   - Abra o terminal e digite:  

     git clone https://github.com/ferreira-mf/projeto-voch
     cd projeto-voch


2. **Configurar o arquivo `.env`**  
   - Copie o arquivo de exemplo:  

     cp .env.example .env
 
   - Abra o arquivo `.env` e coloque as informações do banco de dados (nome, usuário e senha).

3. **Instalar dependências do PHP**    
   composer install

4. **Instalar dependências do JavaScript**  
    npm install
    npm run build

5. **Gerar a chave do sistema**  
    php artisan key:generate

6. **Criar as tabelas no banco e dados iniciais**  
    php artisan migrate --seed

7. **- Iniciar o servidor**  
    php artisan serve

7. **Abrir sistema**  
    Acessar o seguinte link pelo navegador: http://localhost:8000



🔑 Usuário padrão para login:

Depois de rodar os seeders, o sistema cria um usuário administrador:
- Email: admin@admin.com
- Senha: admin123





Projeto Voch
Passo a passo para rodar o projeto

1. **Clonar o projeto**  
git clone https://github.com/ferreira-mf/projeto-voch

2. **Vá até a pasta do projeto clonado** 
cd projeto-voch

3. **Subir os containers**  
docker compose up -d --build

4. **Gerar a APP_KEY** 
docker compose exec app php artisan key:generate

5. **Rodar as migrations** 
docker compose exec app php artisan migrate

6. **OPCIONAL: Popular o banco com os seeders** 
docker compose exec app php artisan db:seed

7. **Acessar a aplicação pelo navegador** 
http://localhost:8000