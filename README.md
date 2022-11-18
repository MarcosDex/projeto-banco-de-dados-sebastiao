# Projeto Banco de dados - E-Commerce (Lojas Desamericanas)

<!---Esses são exemplos. Veja https://shields.io para outras pessoas ou para personalizar este conjunto de escudos. Você pode querer incluir dependências, status do projeto e informações de licença aqui--->

![GitHub repo size](https://img.shields.io/github/repo-size/marcosdex/projeto-banco-de-dados-sebastiao?style=for-the-badge)
![GitHub language count](https://img.shields.io/github/languages/count/marcosdex/projeto-banco-de-dados-sebastiao?style=for-the-badge)
![GitHub forks](https://img.shields.io/github/forks/marcosdex/projeto-banco-de-dados-sebastiao?style=for-the-badge)
![Bitbucket open pull requests](https://img.shields.io/github/issues-pr-closed/marcosdex/projeto-banco-de-dados-sebastiao?style=for-the-badge)

<img src="https://github.com/MarcosDex/projeto-banco-de-dados-sebastiao/blob/master/images/Screenshot_6.png" alt="exemplo imagem">


### Ajustes e melhorias

O projeto ainda está em desenvolvimento e as próximas atualizações serão voltadas nas seguintes tarefas:

- [x] Estabelecer conexão e registros para o banco de dados (MYSQL)
- [x] Implementar uma area de usuarios para registro e login
- [x] Interface do usuario
- [x] Interface pós login
- [x] CRUD Finalizado
- [ ] Funcionalidade dos botões e criação do checkout de pagamento
- [x] Concluido

## 💻 Pré-requisitos

Antes de começar, verifique se você atendeu aos seguintes requisitos:
<!---Estes são apenas requisitos de exemplo. Adicionar, duplicar ou remover conforme necessário--->
* Você instalou a versão mais recente de `<PHP / Wamp/Xamp / php: 7.4.26(php3/4), Wamp/Xamp: 2021/2022 build stable>`
* Você tem uma máquina `<Windows>`

## 🚀 Instalando Projeto Banco de Dados Sebastião

Para instalar o Projeto Banco de Dados Sebastião, siga estas etapas:

Windows:
```
git init
git clone https://github.com/MarcosDex/projeto-banco-de-dados-sebastiao
```

## ☕ Usando Projeto Banco de Dados Sebastião

Para usar Projeto Banco de Dados Sebastião, siga estas etapas:

```
WamppServer:
Primeiro vamos cria a vh, basta ir em Windows -> system32 -> drivers -> etc -> hosts (aconselho notepad ++ por ser mais organizado que o bloco de notas):
Adicionamos isso ao arquivo da host 127.0.0.1 locadora.com (locadora é o nome da pasta que criarei mais pra frente)
logo depois iremos a este caminho: wamp64\bin\apache\apache2.4.51\conf\extra e então ira adicionar esta linha de codigo ao escopo:
<VirtualHost *:80>
  ServerName locadora.com
  ServerAlias localhost
  DocumentRoot C:\wamp64\www\locadora <escolhe o lugar onde salvou o wamp (no meu caso é no disco C)>
  <Directory "C:\wamp64\www\locadora"> <escolhe o lugar onde salvou o wamp (no meu caso é no disco C)>
    Options +Indexes +Includes +FollowSymLinks +MultiViews
    AllowOverride All
    Require local
  </Directory>
</VirtualHost>
```
<img hight="300" width="700" alt="GIF" align="center" src="https://github.com/MarcosDex/desafio-estagio/blob/main/assets/vh.png">

```Abrimos então a pasta do wamp e vamos em www:```

<img hight="300" width="700" alt="GIF" align="center" src="https://github.com/MarcosDex/desafio-estagio/blob/main/assets/www.png">

```Logo apos iremos criar uma pasta (locadora):```

<img hight="300" width="700" alt="GIF" align="center" src="https://github.com/MarcosDex/desafio-estagio/blob/main/assets/Screenshot_1.png">

## Por ultimo basta abrir no navegador locadora.com (ele ira cair no index).
------------------------------------------------------------------------------
```
Xampp:
Basta ir na pasta do Xampp -> HTDOCS -> Criar uma nova pasta
```
<img hight="300" width="700" alt="GIF" align="center" src="https://github.com/MarcosDex/Estudar.io/blob/main/Screenshot_7.png">

## Agora só inserir os arquivos que desejar e acessar o navegador com o endereço do nome da pagina + o nome do arquivo desejado: lojasdesamericanas/index.php

<img hight="300" width="700" alt="GIF" align="center" src="https://github.com/MarcosDex/Estudar.io/blob/main/Screenshot_8.png">

## 📫 Contribuindo para Lojas Desamericanas
<!---Se o seu README for longo ou se você tiver algum processo ou etapas específicas que deseja que os contribuidores sigam, considere a criação de um arquivo CONTRIBUTING.md separado--->
Para contribuir com Projeto Banco de dados Sebastião Rogerio, siga estas etapas:

1. Bifurque este repositório.
2. Crie um branch: `git checkout -b <nome_branch>`.
3. Faça suas alterações e confirme-as: `git commit -m '<mensagem_commit>'`
4. Envie para o branch original: `git push origin projeto-banco-de-dados-sebastiao / <local>`
5. Crie a solicitação de pull.

Como alternativa, consulte a documentação do GitHub em [como criar uma solicitação pull](https://help.github.com/en/github/collaborating-with-issues-and-pull-requests/creating-a-pull-request).

## 🤝 Colaboradores

Agradecemos às seguintes pessoas que contribuíram para este projeto:

<table>
  <tr>
    <td align="center">
      <a href="https://github.com/Aline097">
        <img src="https://images-ext-2.discordapp.net/external/asiKmh3Px52GgIHzrIdJrq6eTNGGq0RfwbuvgeXlA8U/https/pbs.twimg.com/media/FS646o-UcAE3luS.jpg%3Alarge?width=862&height=676" width="125px;" alt="Foto da Aline Almeida"/><br>
        <sub>
          <b>Aline Almeida</b>
        </sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/IrthyellMuniz">
        <img src="https://camo.githubusercontent.com/5bf05e4419d993dc0b91333c3099814882bf9a65e69cb0dc0c9c2b66d90bce30/687474703a2f2f706d312e6e61727669692e636f6d2f363937352f3636663033653937336630663739376366613361313166386265366138643332636565623366303072312d3639362d36353076325f30302e6a7067" width="100px;" alt="Foto do Irtyhell"/><br>
        <sub>
          <b>Irthyell Muniz</b>
        </sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/MarcosDex">
        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/cfbc5316-5df8-4a30-b355-8b4ae4f38fd6/degyrzc-b6109f1e-4d06-4d54-8a89-fdd24d979d32.jpg/v1/fill/w_800,h_800,q_75,strp/zeke_yeager_by_caro_oliveira_degyrzc-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9ODAwIiwicGF0aCI6IlwvZlwvY2ZiYzUzMTYtNWRmOC00YTMwLWIzNTUtOGI0YWU0ZjM4ZmQ2XC9kZWd5cnpjLWI2MTA5ZjFlLTRkMDYtNGQ1NC04YTg5LWZkZDI0ZDk3OWQzMi5qcGciLCJ3aWR0aCI6Ijw9ODAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.hnD90bBqHH1CJ7iRdWMIX5_HS6ziX7iXzvdb72sbs2w" width="100px;" alt="Foto do WalkerAway"/><br>
        <sub>
          <b>Marcantonio Santos</b>
        </sub>
      </a>
    </td>
       <td align="center">
      <a href="https://github.com/MakotoNoxx">
        <img src="https://camo.githubusercontent.com/2d0bff933e3b6276b234c0751c863a71e3581c639adf8fd6b1da55fdc2b3e619/68747470733a2f2f63646e2e646973636f72646170702e636f6d2f617661746172732f3138333334303335353336303532323234302f62323336336336383438653539353431343065626233396566613833376330312e776562703f73697a653d313238" width="100px;" alt=""/><br>
        <sub>
          <b>Thobias José Soares</b>
        </sub>
      </a>
    </td>
       <td align="center">
      <a href="https://github.com/WendelAgra">
        <img src="https://pps.whatsapp.net/v/t61.24694-24/305588114_1561675434245921_7968151310615141536_n.jpg?ccb=11-4&oh=01_AdRTrrwP9QwKFAL5EqQCdvXPYBC8Pz5BLiBSG_d7MCJTqQ&oe=637E18CA" width="100px;" alt=""/><br>
        <sub>
          <b>Wendel Vinicius</b>
        </sub>
      </a>
    </td>
  </tr>
</table>

