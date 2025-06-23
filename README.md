## Instruções de instalação e configuração do Laravel + Breeze

Vídeo com o passo-a-passo para baixar e configurar um projeto com o Laravel + Breeze, além de um 'tour' pelo site criado a partir destas ferramentas:
- https://youtu.be/fpnmeKkBWRI

<br>
<br>

## Instruções para testar o projeto

- Garantir que o arquivo 'C:/xampp/php/php.ini' possui a linha 'extension=zip' descomentada (sem ';' antes dela)
- Startar o Apache e o MySQL no XAMPP Control Panel
- Importe o banco de dados 'database/laravel-w-migration' para dentro do phpMyAdmin
- Crie um arquivo '.env' como cópia do arquivo '.env.example'
- Instalar o composer com o comando 'composer install'
- Instalar o NPM com 'npm install'
- Crie uma chave de conexão da aplicação com o banco de dados a partir do comando 'php artisan key:generate'
- Efetua as migrações (por precaução) com o comando 'php artisan migrate'
- Caso tudo tenha dado certo, rode a aplicação digitando o comando 'composer run dev' e abrindo o endereço da aplicação (normalmente http://127.0.0.1:8000)
- Utilize o login padrão (Email: rebeca.moura@etec.sp.gov.br; Senha: 12345678) ou crie um novo registro para entrar no sistema efetivamente
