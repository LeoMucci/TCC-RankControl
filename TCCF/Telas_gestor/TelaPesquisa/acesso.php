<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!----===== Bootstrap ===== -->


    <title>Rank & Control - Home </title>
</head>

 <body>
    <nav class="sidebar close">
        <header>


            <div class="image-text">
                <span class="image">
                    <img src="logonova.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Rank & Control</span>

                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">


                <!--
                    Esta tela deixa o Home selecionado
                    Para deixar outos selecionados coloque no <a hrerf>
                        style =
                        background-color: var(--primary-color);
                        border-left: 5px solid #0e2230;
                -->




                <ul class="menu-links">
                    <li class="nav-linkhome">
                        <a href="../../Login/tela_home_gestor.html">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../TelaPlanoSucessao/index.html" >
                            <i class='bx bx-briefcase icon'></i>
                            <span class="text nav-text">Plano de sucessão</span>
                        </a>
                    </li>

                    <!-- <li class="nav-link">
                        <a href="../Tela9Box/index.html">
                            <i class='bx bxs-inbox icon'></i>
                            <span class="text nav-text">Nine Box</span>
                        </a>
                    </li> -->

                    <li class="nav-link">
                        <a href="../TelaPesquisa/index.php" style="background-color: var(--primary-color);
                        border-left: 5px solid #0e2230;;">
                            <i class='bx bx-pencil icon'></i>
                            <span class="text nav-text">Editar</span>
                        </a>
                    </li>


                </ul>
            </div>

            <div class="bottom-content">



                <li class="nav-link">
                    <a href="../SobreNos/index.html">
                        <i class='bx bxs-group icon'></i>
                        <span class="text nav-text">Sobre Nós</span>
                    </a>
                </li>




                <li class="">
                    <a href="../../Login/index.html">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>



            </div>
        </div>

    </nav>

   <section class="home">
<?php
     if(!empty($_GET['id'])){

    $id = $_GET['id'];
    
?>
   <form action="delete.php" method="post">
            <div class="container1">

                <input type="hidden" name="id" value="<?php echo $id?>">
                <input type="submit" placeholder="Digite sua senha!" name="senha" autocomplete="off">
                <input type="text" placeholder="Digite sua senha!" name="senha" autocomplete="off">
                <div class="search"></div>
    
            </div>   
        </form>
    </section>
    <script src="script.js"></script>

    <?php 
     }
    ?>
</body>
</html>