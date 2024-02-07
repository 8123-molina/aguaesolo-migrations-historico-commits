# Migrations SGI 
Este projeto tem por objetivo a unificação e melhor gerenciamento dos scripts de banco que serão incorporados aos sistemas da Agua&Solo,
através do ORM Eloquent, de forma a facilitar o gerenciamento e implantação.

## Instalação 
Faça o git clone do projeto e, após baixar os arquivos, execute o comando para instalar as dependências
```
composer install
```
Se necessario também rode:
```
composer update
```

Ao terminar a instalação, na pasta raíz do projeto, efetue uma cópia do arquivo .env.example e cole-o renomendo para
.env. 

## Comandos Básicos 
### Rodar as migrations já criadas
Primeiro crie uma Banco de Dados com o nome agua-solo-db, após rode o comando para gerar as tabelas no branco a partir das migration

```
php artisan migrate
```
### Criar uma migration 
Para criar uma migration.

* execute o comando:

    ```
     php artisan make:migration {nome_da_migration} --path=database/migrations/{ano-mes}
    ```

Este comando irá criar uma migration na pasta definida pelo ano e mês, conforme estrutura definida pela equipe.<br>
Conforme convenção, para criar uma migration que cria uma tabela, definimos o {nome_da_migration} pelo prefixo
create_ e o sufixo _table. 

* Exemplo: 
    ```
    create_name_table_table.
     
    alter_name_table_table.
     
    insert_name_table_table
    ``` 

Conforme convenção, para criar uma migração que altere a estrutura de uma tabela, definimos o {nome_da_migration}
pelo prefixo alter_ e o sufixo _table.

* Exemplo: 
    ```
    alter_name_table_table.
    ```

Conforme convenção, o diretório da pasta é definido pelo {ano-mes} que a migration foi criada. 
* Exemplo: 
    ```
    --path=database/migrations/2024-01
    ```

Um arquivo com a estrutura padrão da migration será criada no diretório definido em --path=. 

### Subir/Reverter migration para o Banco

Após criada a migration e modificado o arquivo da migração conforme sua necessidade, para subir a migration para o banco
definido.

* Rode o comando no terminal: 
    ```
    php artisan migrate --path=database/migrations/{ano-mes}
    ```
Caso precise reverter a migração que acabou de efetuar.
* rode o seguinte comando: 
    ``` 
    php artisan migrate:rollback --path=database/migrations/{ano-mes}
    ```

Se as migrations executarem sem erros, uma mensagem de sucesso será mostrada no terminal.<br>
Caso não, o erro aparacerá no terminal e você poderá corrigí-lo conforme for apontado.

### Estrutura das migrations 
#### Esqueleto padrão
Ao criar uma migration, será criado um arquivo na pasta definida seguindo o seguinte esqueleto: 

```
<?php 
    use Illuminate\Support\Facades\Schema; 
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration; 
    
    return new class extends Migration { 
        /**
        * Run the migrations.
        */

        public function up(): void
        { 
            Schema::create('name_table', function (Blueprint $table) {
                $table->id();
                $table->string('name');
            });
        } 
        /* Reverse the migrations.
        *
        * @return void
        */
        public function down(): void
        {
            Schema::dropIfExists('name_table');
        }

    } 
``` 

### Método up

Dentro da estrutura existe o método public function up(), nele você define o que será criado quando executar o comando:
```
php artisan migrate
```

Para criação de uma tabela, crie a seguinte estrutura dentro do método: 
```
    Schema::create(‘name_table’, function(Blueprint $table) { 
        $table->increments(‘cd_atn_lorem_ipsum’); 
        $table->integer(‘id_responsavel’); $table->string(‘nm_name’,255); 
        $table->boolean(‘st_active’);
        $table->foreign('id_responsible')
        ->references('id')
        ->on('user');
    }); 
```
Para criação de uma procedure, cria a seguinte estrutura dentro do método: 
```
DB::statement( 
<<<SQL 
    -- Crie aqui dentro o código SQL da sua procedure 
SQL 
); 
```

Mais informações a respeito de como montar a estrutura, Acesse a Documentação 

### Método down
Dentro da estrutura existe o método public function down(), nele você define o que será revertido quando executado o comando
```
php artisan migrate:rollback
```
Para apagar a tabela, cria a seguinte estrutura dentro do método:
```
Schema::table(‘name_table’,function (Blueprint $table) { 
    $table->dropForeign([‘id_responsible’]); 
    $table->dropIfExists('lorem_ipsum');
});
```
Para apagar a procedure, cria a seguinte estrutura dentro do método: 
```
DB::statement( 
<<<SQL 
    -- Crie aqui dentro o código SQL para apagar a procedure 
SQL
); 
```
Mais informações a respeito de como montar a estrutura, Acesse a Documentação.

### Considerações Finais 
A documentação está em fase de desenvolvimento, caso encontre algum erro ou falha, favor adicionar correção o comunicar
ao responsável.

Todas as informações contidas na documentação foram baseadas na documentação oficial do Eloquent. Caso apresente uma
dúvida específica, favor seguir a Documentação Oficial
