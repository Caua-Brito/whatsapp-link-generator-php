<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de links de conversa no WhatsApp</title>
    <link rel="stylesheet" href="./app.css">
    <link rel="shortcut icon" href="./whatsapp.svg" type="image/x-icon">
</head>

<body>
    <main class="app">
        <h1>Gerador de link para o WhatsApp <img src="./whatsapp.svg" alt="WhatsApp"></h1>
        <form name="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <p class="user-message display-none"></p>
            <div class="initial">

                <div class="input-group">
                    <label for="phone">Número do celular</label>
                    <div>
                        <img src="./phone.svg" alt="telefone">
                        <input type="text" id="phone" name="phone" autofocus placeholder="(00) 000000000" required />
                    </div>
                </div>

                <div class="input-group">
                    <label for="message">Mensagem</label>
                    <div>
                        <img src="./chat.svg" alt="chat">
                        <input id="message" type="text" name="message" />
                    </div>
                </div>

                <footer>
                    <button type="submit" name="submit" class="generate">Gerar link</button>
                </footer>
            </div>
        </form>

        <p class="info">Não guardamos os dados informados</p>

        <section class="how-to-use">
            <h2>Como funciona</h2>
            <ul class="steps">
                <li>
                    <span class="index">1.</span>
                    <span class="text">Insira o nº do WhatsApp sem se preocupar com hífem ou parênteses</span>
                </li>
                <li>
                    <span class="index">2.</span>
                    <span class="text">Escreva uma mensagem para começar a conversa (não é obrigatório)</span>
                </li>
                <li>
                    <span class="index">3.</span>
                    <span class="text">Clique no botão "GERAR LINK"</span>
                </li>
                <li>
                    <span class="index">4.</span>
                    <span class="text">Antes de usar, faça o teste</span>
                </li>
            </ul>
        </section>
    </main>
</body>

</html>

<?php


$phone = $_POST['phone'];
$message = $_POST['message'];
$link = "https://api.whatsapp.com/send?phone=$phone&text=$message";

if (strlen($phone)  < 11) {
    echo '<h4 align="center">Numero invalido</h4>';
} else {
    echo '<h4 align="center">Seu link: ' . $link . '</h4>';
}

?>