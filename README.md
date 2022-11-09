# Para dar RUN no projeto é necessario seguir estes passos: 

```WamppServer (particularmente eu o prefiro)
Primeiro vamos cria a vh, basta ir em Windows -> system32 -> drivers -> etc -> hosts (aconselho notepad ++ por ser mais organizado que o bloco de notas):
Adicionamos isso ao arquivo da host 127.0.0.1 locadora.com (locadora é o nome da pasta que criarei mais pra frente)
logo depois iremos a este caminho: wamp64\bin\apache\apache2.4.51\conf\extra e então ira adicionar esta linha de codigo ao escopo:
<VirtualHost *:80>
  ServerName locadora.com
  ServerAlias localhost
  DocumentRoot C:\wamp64\www\locadora escolhe o lugar onde salvou o wamp (no meu caso é no disco C)
  <Directory "C:\wamp64\www\locadora"> escolhe o lugar onde salvou o wamp (no meu caso é no disco C)
    Options +Indexes +Includes +FollowSymLinks +MultiViews
    AllowOverride All
    Require local
  </Directory>
</VirtualHost>
```
<img hight="300" width="700" alt="GIF" align="center" src="https://github.com/MarcosDex/desafio-estagio/blob/main/assets/vh.png">

``` Abrimos então a pasta do wamp e vamos em www: ```

<img hight="300" width="700" alt="GIF" align="center" src="https://github.com/MarcosDex/desafio-estagio/blob/main/assets/www.png">

``` Logo apos iremos criar uma pasta: ```

<img hight="300" width="700" alt="GIF" align="center" src="https://github.com/MarcosDex/desafio-estagio/blob/main/assets/Screenshot_1.png">

## Depois de adicionado tudo basta abrir a localhost ou locadora.com(ou o link que voce criou no servername)

