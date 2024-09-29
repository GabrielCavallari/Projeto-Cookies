# Projeto Cookies - Seleção de Idioma

Este projeto permite ao usuário escolher um idioma clicando em uma bandeira correspondente. Após a seleção, um texto é exibido na página de acordo com o idioma escolhido. A escolha do idioma é armazenada usando **cookies**, permitindo que o site se lembre da preferência do usuário por até 3 dias. O projeto também oferece a opção de "Escolher outro idioma", permitindo que o usuário volte para a página inicial e selecione novamente.

## Funcionalidades

- Seleção de idioma por bandeiras (Reino Unido, Brasil e Espanha).
- Exibição de um texto específico para o idioma escolhido.
- Armazenamento da escolha do idioma em um cookie.
- Opção para o usuário redefinir a escolha e selecionar outro idioma.

## Estrutura de Arquivos

- `index.php`: Página inicial com as bandeiras para seleção de idioma.
- `idioma.php`: Processa a seleção do idioma, define o cookie e redireciona para a página principal.
- `compara.inc`: Verifica o idioma armazenado no cookie e exibe o texto correspondente.
- `versao.txt`: Arquivo gerado dinamicamente com o texto no idioma selecionado.
- `limpar_cookie.php`: Script para remover o cookie e permitir nova escolha de idioma.
- `estilo.css`: Arquivo de estilos para a personalização da página.

## Como Funciona

1. Na página inicial (`index.php`), o usuário escolhe o idioma clicando na bandeira correspondente.
2. A página `idioma.php` armazena o idioma selecionado em um cookie (`idiomaEscolhido`).
3. A página principal (`index.php`) verifica se o cookie existe e, caso sim, inclui o arquivo `compara.inc`, que gera o texto correspondente ao idioma e o armazena em `versao.txt`.
4. O texto em `versao.txt` é exibido na página.
5. O usuário pode clicar no link "Escolher outro idioma" para redefinir a escolha e retornar à página das bandeiras.

## Tecnologias Utilizadas

- **PHP**: Para manipulação dos cookies e exibição do texto com base na escolha do idioma.
- **HTML/CSS**: Para estruturação e estilo das páginas.
- **Cookies**: Para armazenar a preferência de idioma do usuário.

## Como Executar o Projeto

1. Faça o clone do repositório para sua máquina local.
2. Coloque os arquivos do projeto em um servidor web compatível com PHP (como o XAMPP ou WAMP).
3. Acesse o projeto no navegador através do caminho `localhost/nome_do_projeto`.
4. Selecione uma bandeira na página inicial e veja o texto correspondente ser exibido.
5. Para redefinir o idioma, clique em "Escolher outro idioma" e faça uma nova seleção.
