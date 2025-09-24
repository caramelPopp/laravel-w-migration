## ✍ Requisitos iniciais
### Clonar o repositório
```bash
git clone https://github.com/caramelPopp/laravel-w-migration.git
```

### Conferir se o arquivo 'C:/xampp/php/php.ini' possui a linha 'extension=zip' descomentada 
![Linha descomentada](prints/zip-descoment.png)

### Startar o Apache e o MySQL no XAMPP Control Panel
![XAMPP Controll Panel](prints/controll-pane.png)

### Importe o banco de dados 'database/laravel-w-migration' para dentro do phpMyAdmin
![Banco importado](prints/import-bd.png)

---

## 🚀 Como rodar o projeto
### 1. Instalar as dependências
```bash
composer install
```

### 2. Configurar o `.env`
```bash
cp .env.example .env  
php artisan key:generate
```

### 3. Rodar a aplicação
```bash
composer run dev
```

### 4. Acessar no navegador
```bash
http://127.0.0.1:8000
```

### 5. Criar um usuário ou usar o login padrão
*Cadastro*
<br>
![Cadastro](prints/cadastro-site.png)
<br>

*Login padrão*
<br>
![Login padrão](prints/login-site.png)
---

### 🎬 Instruções alternativas
Vídeo com o passo-a-passo para baixar e configurar um projeto com o Laravel + Breeze, além de um 'tour' pelo site criado a partir destas ferramentas:

https://youtu.be/fpnmeKkBWRI

---

## 🛠️ Funcionalidades implementadas

### Rota Fallback
Criação de uma rota fallback personalizada para exibir a mensagem de erro **Erro 404 ❌** em caso de páginas inexistentes ou não encontradas.  

*Criação da rota*
<br>
![Rota Fallback](prints/web-fallback.png)

*Exibição da rota*
<br>
![Página Fallback](prints/fallback-page.png)


### Implementação do método GET ao formulário de contato
Formulário criado na página de contato, configurado para enviar dados pela URL.  

*Criação da rota do GET*
<br>
![Rota do GET](prints/web-forms.png)

*Exibição do formulário*
<br>
![Formulário](prints/forms.png)

*Formulário com dados para testar o método GET*
<br>
![Formulário com dados](prints/forms-get.png)

### Exibição com `var_dump($_GET)`
Controller configurado para exibir os parâmetros enviados pelo formulário de forma "crua", conforme exigência da tarefa.  

*Controller do formulário*
<br>
![Print do ContactControler](prints/print-controller.png)

*Página com resultados do GET e var_dump*
<br>
![Exibição do var_dump](prints/result-var_dump.png)
