# help-desk
Aplicativo de Help Desk em PHP para fins educativos.  
Ainda não está pronto, uma boa parte dos arrays foram hardcodeds porque não é utilizado nenhum banco de dados, o aplicativo inteiro foi feito apenas como um projeto para estudos.

## O que precisa para executar?
- PHP 7.0+
- Apache Server

## Lista de coisas que o app faz:
- Verifica a sessão de usuário (impedindo que áreas restritas sejam acessadas caso não esteja conectado);
- Verifica, antes de logar, se o e-mail e senha pertencem ao mesmo usuário e se existem no banco de dados;
- Verifica ``group_id`` do usuário (se pertencer ao grupo de Administradores, tem acessos privilegiados);
- Pode criar chamados;
- Pode verificar chamados;
- Mostra o ID do usuário que fez o chamado;
- Cria os chamados em um arquivo ``chamados.hd`` na pasta raiz para cada chamado, servindo como um "mini" banco de dados

## Screnshots
- Tela de login  
![0](https://i.imgur.com/w4E5W1s.png)
- Home.php  
![a](https://i.imgur.com/a5DPK1W.png)
- Abrir um chamado  
![b](https://i.imgur.com/3SdNUZh.png)
- Consultar um chamado  
![c](https://i.imgur.com/3QRayKm.png)
