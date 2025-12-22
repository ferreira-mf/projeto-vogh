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
- Laravel Lang
- Laravel Pint 
- PestPHP
- Laravel Sail 

### Frontend (NPM)
- Vite ^7.0.7 
- TailwindCSS ^4.0.0 
- @tailwindcss/vite
- Laravel Vite Plugin ^2.0.0
- Axios ^1.11.0 (requisições HTTP)
- Concurrently ^9.0.1 

---

## 📋 Pré-requisitos
- Git
- Docker

---
## ⚙️ Setup do Projeto

Aqui estão os passos para colocar o sistema para funcionar.  


1. **Clonar o projeto**  
```bash
git clone https://github.com/ferreira-mf/projeto-voch
```

2. **Vá até a pasta do projeto clonado** 
```bash
cd projeto-voch
```
3. **Subir os containers**  
```bash
docker compose up -d --build
```

4. **Gerar a APP_KEY** 
```bash
docker compose exec app php artisan key:generate
```
 **( Aguardar a mensagem: Application key set successfully.)**

5. **Rodar as migrations** 
```bash
docker compose exec app php artisan migrate
```

6. **OPCIONAL: Popular o banco com os seeders**
```bash 
docker compose exec app php artisan db:seed
```

7. **Acessar a aplicação pelo navegador** 
http://localhost:8000




### 🚀 Fluxo Básico de Uso

1. **Login no sistema** Crie um usuário e logue com suas credenciais. 
(OBS: se utilizou os seeders, é possivel logar como -  Login: admin@admin.com  senha: admin123) 
2. **Cadastrar um Grupo Econômico** Cadastre um Grupo Econômico para iniciar  
3. **Adicionar Bandeiras** Crie bandeiras vinculadas ao grupo.  
4. **Criar Unidades** Crie unidades dentro de cada bandeira.  
5. **Cadastrar Colaboradores** Crie colaboradores associados às unidades.  
6. **Gerar relatórios** Utilize os filtros na tela inicial para filtrar colaboradores e gerar um relatório com opção de exportação para Excel.  
7. **Exportar dados** Gere relatórios de qualquer seção (Grupo Economico, Bandeira, etc) clicando no botão de Exportar para Excel.  
8. **Registro de Atividades** Acesse para verificar histórico de alterações realizadas.