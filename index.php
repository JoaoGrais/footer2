<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
</head>

<body>

<?php

if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>

    <header>
        <h1>blablabla</h1>
    </header>

    <main>
        <div class="site">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore repellat quibusdam deleniti, repudiandae
            pariatur voluptatibus! Reprehenderit, provident similique. Dolore tenetur doloribus culpa voluptatibus
            delectus eius perferendis non amet magni laboriosam?
            Iste quae vitae soluta magni veritatis iusto aliquam iure consequatur minus laboriosam debitis, asperiores
            quam porro corporis dolor, maxime officiis quibusdam ea possimus adipisci fuga hic nemo architecto nesciunt.
            Repellat.
            Omnis rerum, debitis saepe alias voluptates nesciunt deserunt voluptatem qui, iste ullam at ad. Enim
            pariatur facilis quos tempore at consectetur, ut amet facere culpa saepe asperiores maxime molestias
            possimus?
            Tenetur earum, asperiores obcaecati dolore, blanditiis assumenda quasi, iusto nulla repellendus libero est!
            Voluptatibus recusandae ea necessitatibus. Molestiae excepturi eveniet aliquam debitis aperiam, a rem iusto
            soluta alias dolorem quis.
            Veniam fugit est tenetur ipsa eveniet eum voluptas magnam ratione, soluta animi placeat error quasi illum
            nesciunt officia consequuntur accusantium optio distinctio, repellendus accusamus corrupti id odio ipsum! A,
            accusamus.
        </div>
    </main>


















    <!-- formulário!!!!!!!!!!!!!!!!!!!!! -->



    <footer>
        <div class="logo">
            <img src="img/logo.png" alt="#">
        </div>

        <hr class="barrinha">

        <div class="container">

            <div class="child1">
                <h1>Portfólios</h1>


                <div class="redes">
                    <a href="">João Guilherme</a>
                    <a href="">Eduardo Fagundes</a>
                    <a href="">João Andrade</a>
                    <a href="">Kauã Roldão</a>
                    <a href="">Vinícius Braida</a>
                    <a href="">Davi Rexhausen</a>
                </div>
            </div>

            <div class="child2">
                <h1>Mapa do site</h1>

                <div class="redes">
                    <a href="">Home</a>
                    <a href="">Produtos</a>
                    <a href="">Carrinho</a>
                    <a href="">Inscreva-se</a>
                    <a href="">Programas</a>
                </div>
            </div>















            <div class="child3">

                <section class="content">

                    <div class="contato">
                        <h3>Formulário de contato</h3>
                        <form class="form" action="config.php" method="POST">
                            <input class="field" type="text" name="nome" id="" placeholder="Digite seu nome" required>
                            <input class="field" type="text" name="email" id="" placeholder="Digite seu email" required>
                            <textarea class="field" name="mensagem" id="" placeholder="Digite sua mensagem aqui."></textarea>
                            <input class="field" type="submit" value="Enviar">
                        </form>


                    </div>
                </section>
            </div>
        </div>















        <hr class="barrinha2">

        <div class="box">
            <div class="ed">
                <p>Av. Manoel Elias, 2001 - Passo das Pedras, Porto Alegre - RS, 91240-261</p>
            </div>
        </div>

    </footer>

</body>

</html>