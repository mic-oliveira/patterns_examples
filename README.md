## Exemplos de padrões de projeto usando PHP
Exemplos de referência simples utilizando contextos mais próximos da realidade com intuito de facilitar
a compreensão sobre a aplicação de padrões de projeto. Fique a vontade para contribuir e trazer mais casos de uso que
possam ser utilizados!

### Comportamentais

- Chain of Responsability - testes OK


Também está sendo usado várias boas práticas e abordagens referente a projeto de software.


### Como executar o projeto
- Copie o arquivo env.example para .env.
- Através do docker, use o comando: <br>
``docker-compose up -d``
- Após os comando para iniciar os container docker ser realizado, utilize o comando: <br>
``docker-compose exec app composer install``<br>
Ou apenas ``composer install``, caso tenha o PHP com composer instalado.

### Como executar os testes
Para a execuação dos testes pode-se usar o comando: <br>
``docker-compose exec app ./vendor/bin/pest`` podendo também ser utilizado com
o parâmetro ``--coverage`` para teste de cobertura.

#### “Descobrir o inesperado é mais importante do que confirmar o conhecido.” – Pranav D