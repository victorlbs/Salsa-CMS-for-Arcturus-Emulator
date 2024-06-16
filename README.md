# Salsa CMS | Salsa CMS for Arcturus Emulator Habbo

<center>
    <img alt="Salsa CMS for Arcturus Emulator Habbo" title="Salsa CMS for Arcturus Emulator Habbo" src="https://habbofont.net/font/habbo_clicker/salsa%20cms.gif">
</center>

<hr>

## Sobre
Salsa CMS é uma CMS simples, projetada especificamente para o Arcturus e Arcturus Morningstar, proporcionando uma integração eficiente com esses emuladores.

## Requisitos
- **PHP 7+**: Linguagem de programação necessária para rodar a CMS.
- **MySQL**: Banco de dados utilizado para armazenar informações do site.
- **Importar a [salsa.sql](https://github.com/victorlbs/Salsa-CMS-for-Arcturus-Emulator/blob/master/structure/util/sql/salsa.sql)**: Arquivo SQL que configura o banco de dados com as tabelas necessárias.

## Compatibilidade
- **cPanel**: Painel de controle para hospedagem de sites.
- **IIS**: Servidor web da Microsoft.
- **Xampp**: Pacote que inclui servidor Apache, PHP e MySQL.

## Instalação
### Usando o Console

1. **Clone o Repositório**: Abra o terminal e execute o comando para clonar o repositório do GitHub:
    ```bash
    git clone https://github.com/victorlbs/Salsa-CMS-for-Arcturus-Emulator.git
    ```

2. **Navegue para o Diretório**: Vá para o diretório onde você clonou o repositório:
    ```bash
    cd Salsa-CMS-for-Arcturus-Emulator
    ```

3. **Copie os Arquivos para a Pasta Raiz**: Movimente os arquivos para a pasta raiz do seu servidor web. Supondo que você esteja usando uma configuração local, como `xampp`:
    ```bash
    cp -R * /caminho/para/a/pasta/raiz/servidor/
    ```

4. **Configure as Permissões**: Dependendo do seu servidor, você pode precisar configurar permissões para que o servidor web tenha acesso aos arquivos:
    ```bash
    chmod -R 755 /caminho/para/a/pasta/raiz/servidor/
    ```

5. **Importe o Arquivo SQL**: Use o phpMyAdmin ou o console MySQL para importar o arquivo SQL.
    ```bash
    mysql -u usuario -p banco_de_dados < structure/util/sql/salsa.sql
    ```

6. **Configure o Arquivo `arc.config.php`**: Edite o arquivo `arc.config.php` para inserir os dados do banco de dados e outras configurações:
    ```php
    // Exemplo de configuração
    $config['database_hostname'] = "localhost";
    $config['database_username'] = "user";
    $config['database_password'] = "password";
    $config['database_name'] = "database";
    ```

7. **Finalização**: Acesse o site no navegador para verificar se a instalação foi concluída com sucesso.

## Documentação Técnica

### Configurações do Banco de Dados


// Configurações do banco de dados
```php
$config['database_hostname'] = "localhost"; // Hostname do banco de dados
$config['database_username'] = "user"; // Nome de usuário do banco de dados
$config['database_password'] = "pass"; // Senha do banco de dados
$config['database_name'] = "db"; // Nome do banco de dados
 ```


Configurações do Site
```php
$config['site.nome'] = "Habbo"; // Nome do Hotel
$config['site.url'] = "http://localhost"; // URL do Hotel
$config['404page'] = "404"; // Página de erro
$config['site.manutencao'] = 0; // 0: Desativar, 1: Ativar manutenção
$config['site.login'] = 1; // 0: Desativar, 1: Ativar login
$config['site.avatar'] = "https://habbo.city/habbo-imaging/avatarimage?figure="; // URL do avatar
$config['site.red'] = "1";
$config['site.rank.minimo'] = 3; // Rank mínimo para acesso durante manutenção
$config['site.cmfclient'] = 0; // 0: Desativar, 1: Ativar camuflagem de IP
 ```

Configurações do Painel de Controle
```php
$config['painel.rankminimo'] = 5; // Rank mínimo para acesso ao painel
$config['painel.premiar_creditos'] = 200; // Créditos dados como prêmio
$config['painel.premiar_diamantes'] = 10; // Diamantes dados como prêmio
$config['painel.premiar_codigo_emblema'] = "NV"; // Código do emblema de prêmio
 ```

Configurações do Registro
```php
$config['registro.ativado'] = 1; // 0: Desativar, 1: Ativar registro
$config['registro.captcharegistro'] = 1; // 0: Desativar, 1: Ativar captcha
$config['registro.missao'] = "Dominar o mundo"; // Missão inicial do usuário
$config['registro.creditos'] = "100"; // Créditos iniciais
$config['registro.visual'] = "hr-115-45.hd-209-2.ch-255-76.lg-275-62.fa-1204.ca-1806-65"; // Visual inicial do avatar
$config['registro.quartoinicial'] = "1"; // Quarto inicial
$config['registro.contasporip'] = 50; // Limite de contas por IP
 ```

Configurações da Client
```php
$config['connection.info.host'] = "localhost"; // IP da VPS ou Hamachi
$config['connection.info.port'] = "30000"; // Porta do emulador
$config['url.prefix'] = "http://localhost";
$config['client.starting'] = "Bem vindo!";
$config['external.texts.txt'] = "http://localhost/swf/gamedata/external_flash_texts.txt";
$config['furnidata.load.url'] = "http://localhost/swf/gamedata/furnidata.xml";
$config['external.variables.txt'] = "http://localhost/swf/gamedata/external_variables.txt";
$config['external.override.texts.txt'] = "http://localhost/swf/gamedata/override/external_flash_override_texts.txt";
$config['external.figurepartlist.txt'] = "http://localhost/swf/gamedata/figuredata.xml";
$config['productdata.load.url'] = "http://localhost/swf/gamedata/productdata.txt";
$config['external.override.variables.txt'] = "http://localhost/swf/gamedata/override/external_override_variables.txt";
$config['flash.client.url'] = "http://localhost//swf/gordon/PRODUCTION-201601012205-226667486/";
$config['habbo.swf'] = "http://localhost/swf/gordon/PRODUCTION-201601012205-226667486/Habbo.swf";
 ```

Configurações do Tema
```php
$config['tema.tema'] = "original";
$config['tema.logo'] = "http://habbox.com/text/70/Habbo";
$config['tema.topheader'] = "https://i.imgur.com/tgTqRgb.gif";
$config['tema.urlemblemas'] = "http://images.habbo.com/c_images/album1584/"; // URL dos emblemas
$config['tema.postagens'] = 1; // 0: Desativar, 1: Ativar postagens na página principal
$config['tema.facebook'] = "http://facebook.com/Habbo";
$config['tema.twitter'] = "http://twitter.com/Habbo";
$config['tema.discord'] = "http://discord.gg/Habbo";
 ```




Considerações Finais
Ao seguir essas instruções e utilizar essa documentação, você garante que a instalação e configuração do Salsa CMS sejam realizadas de maneira profissional e eficaz, permitindo uma experiência tranquila para os administradores do sistema e usuários finais.

Para mais informações e atualizações, visite o repositório do projeto no GitHub.
