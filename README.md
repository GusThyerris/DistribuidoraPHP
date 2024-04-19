<img width=100% src="https://capsule-render.vercel.app/api?type=waving&color=F803E3&height=180&section=header&animation=twinkling"/>

# DistribuidoraPHP - Laravel

Este repositório contém o código-fonte de um site web para DistribuidoraPHP, uma distribuidora de carnes. O projeto foi desenvolvido em Laravel, utilizando PHP, banco de dados orientado a objeto, rotas, Bootstrap 5 e JavaScript para proporcionar uma experiência de usuário aprimorada.

## Descrição

O projeto é uma aplicação web para DistribuidoraPHP, onde os usuários podem visualizar informações sobre os produtos oferecidos, fazer pedidos, acompanhar entregas e gerenciar o sistema administrativo do site.

## Funcionalidades

- Sistema de compras para clientes.
- Sistema de entrega para logística.
- Interface responsiva usando Bootstrap 5 para garantir uma experiência consistente em dispositivos móveis e desktops.

## Pré-requisitos

- PHP
- Composer
- Laravel CLI
- Banco de dados MySQL
- Node.js e npm (para compilar assets JavaScript)
- Bootstrap 5

## Instalação

1. Clone o repositório:

        git clone https://github.com/seu-usuario/DistribuidoraPHP.git

2. Navegue até o diretório do projeto:

       cd DistribuidoraPHP

3. Instale as dependências do PHP na pasta que esta o projeto:

        composer update

4. Crie um arquivo `.env` baseado no `.env.example` e configure sua conexão com o banco de dados:

        cp .env.example .env

5. Gere uma chave de aplicativo:

       php artisan key:generate

6. Execute as migrações para criar as tabelas do banco de dados:

       php artisan migrate

7. Instale as dependências JavaScript:

       npm install

    ou

       yarn install

8. Compile os assets:

       npm run dev

    ou

       yarn dev

9. Inicie o servidor local:

       php artisan serve

Acesse a aplicação em seu navegador em `http://localhost:8000`.

## Uso

- **Clientes**: Os clientes podem acessar a página de compras, visualizar os produtos, fazer pedidos e acompanhar o status dos pedidos.
  
- **Logística**: A equipe de logística pode acessar a página de entrega, gerenciar as rotas de entrega e atualizar o status das entregas.

## Contribuição

Contribuições são bem-vindas! Se você quiser contribuir para este projeto, siga as etapas abaixo:

1. Fork o projeto
2. Crie sua branch de recurso (`git checkout -b feature/NovoRecurso`)
3. Faça commit de suas alterações (`git commit -am 'Adicionar novo recurso'`)
4. Faça push para a branch (`git push origin feature/NovoRecurso`)
5. Crie um novo Pull Request

## Licença

Este projeto está licenciado sob a Licença MIT. Consulte o arquivo LICENSE para obter mais detalhes.

## Contato

Se você tiver alguma dúvida ou sugestão, sinta-se à vontade para entrar em contato através do email: `seu-email@gmail.com`.
