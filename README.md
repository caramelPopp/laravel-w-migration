## Instruções de instalação e configuração do Laravel + Breeze

Vídeo com o passo-a-passo para baixar e configurar um projeto com o Laravel + Breeze, além de um 'tour' pelo site criado a partir destas ferramentas:
- https://youtu.be/fpnmeKkBWRI

Observação -> Utilize o banco de dados preexistente em 'database/laravel-w-migration' para testar a aplicação:
- Starte o Apache e o MySQL no XAMPP Control Panel
- Importe o banco para dentro do phpMyAdmin
- Crie um arquivo '.env' como cópia do arquivo '.env.example'
- Crie uma chave de conexão da aplicação com o banco de dados a partir do comando 'php artisan key:generate' (garanta que o composer foi instalado corretamente para isso)
- Efetua as migrações (por precaução) com o comando 'php artisan migrate'
- Caso tudo tenha dado certo, rode a aplicação digitando o comando 'composer run dev' e abrindo o endereço da aplicação (normalmente http://127.0.0.1:8000)
- Utilize o login padrão [Nome: Camila de Souza; Email:camila.souza@etec.sp.gov.br; Senha: 12345678] ou crie um novo registro para entrar no sistema efetivamente
