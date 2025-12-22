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
**Necessário GIT para clonar o projeto e Docker para rodar**.

---


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