<?php

    if (isset($_POST['submit']))
    {         
         include_once('ligar.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone =$_POST['telefone'];
        $data_rese =$_POST['data_rese'];
        $data_busc =$_POST['data_busc'];

        $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,email,senha,telefone,data_rese,data_busc)
        VALUES ('$nome','$email','$senha','$telefone','$data_rese','$data_busc')");
       
       
       header('refresh: 0; url=cadastro.php');  
    }
?>

<!DOCTYPE html>
<html lang="pt-pt">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CADASTRO</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="./style/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    
<style>
    
    body{
            min-height: 100vh;
            display: flex;
            align-items: center;
            background-position: center;
            background-image: url(./img/home-img.jpeg);
            background-repeat: no-repeat;   
        }
        .box{
            color: white;
            position: absolute;
            top: 58%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 15px;
            border-radius: 15px;
            width: 30%;
            height: 530px;
            background-image: url(./img/frontlmg.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            box-shadow:  0 4px 8px 0 rgba(10, 10, 10, 17), 0 50px 50px 0 rgba(0, 0, 0, 0.30);
   
        }
       .titulo{
        font-size: 2.5rem;
        text-align: center;
        color: #fff;
       }
        .inputBox{
            position: relative;
            left: 10px;
            width: 90%;
            height: 25px;
            color: black;
            font-size: 1.5rem;
        }
        .inputB{
            position: relative;
            
        }
        
        .input{
            font-size: 1.8rem;
            position: relative;
            left: 15px;
            color: #fff;
        }
        #submit{
        background-color: #d69a50;
        width: 90%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
        position: relative;
        left: 1.2rem;
        }
        #submit:hover{
            background-color: #d3ad7f;
        }
        .fazer_login {
           margin-left: 8.5rem;
            color:#ea9c1e;
            background-color: #0b9735;
        }
        .fazer_login:hover{
            color: #24c415;
        }
        .forget{
            font-size: 1.5rem;
            left: 17px;
            position: relative;
            color: blue;
            text-decoration: underline;
            
        }
        .fa_login{
            font-size: 1.5rem;
            left: 140px;
            position: relative;
            color: #c07212 ;
            background-color: black;
            text-transform: uppercase ;
        }
</style> 
</head>
  <body>
    <header class="header">
      <a href="#" class="logo">
        <img src="./img/logo.png" alt="Logo da cafeteria" />
      </a>

      <nav class="nav-bar">
        <a href="index.php">Inicial</a>
        <a href="#about">Sobre</a>
        <a href="#menu">Menu</a>
        <a href="#products">Produtos</a>
        <a href="#review">Avaliações</a>
        <a href="#blogs">Blogs</a>
        <a href="login.php">Login</a>
      </nav>

      <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
      </div>

      <div class="search-form">
        <input type="search" id="search-box" placeholder="Pesquise aqui ..." />
        <label for="search-box" class="fas fa-search"></label>
      </div>

      <div class="cart-items-container">
        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="./img/menu-1.png" alt="" />
          <div class="content">
            <h3>Cappuccino</h3>
            <div class="price">500kz</div>
          </div>
        </div>

        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="./img/menu-2.png" alt="" />
          <div class="content">
            <h3>Cafe Au Lait</h3>
            <div class="price">400kz</div>
          </div>
        </div>

        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="./img/menu-3.png" alt="" />
          <div class="content">
            <h3>Expresso</h3>
            <div class="price">800kz</div>
          </div>
        </div>

        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="./img/menu-5.png" alt="" />
          <div class="content">
            <h3>Cafe Latte</h3>
            <div class="price">720kz</div>
          </div>
        </div>

        <a href="#" class="btn">Fazer Compra</a>
      </div>
    </header>
       <section class="container">
            <div class="box">
                <form action="cadastro.php" method="POST">
                        <h3 class="titulo">CADASTRO</h3>
                        <br>
                            <label  class="input">Nome:</label>
                            <input type="text" name="nome" id="nome" class="inputBox" required>
                        <br><br>
                            <label  class="input">Email:</label>
                            <input type="text" name="email" id="email" class="inputBox" required> 
                        <br><br>
                            <label class="input">Password:</label>
                            <input type="password" name="senha" id="senha" class="inputBox" required>
                        <br><br>
                            <label class="input">Telefone:</label>
                            <input type="tel" name="telefone" id="telefone" class="inputBox" required>
                        <br><br>
                        <label class="input">Data : hora de Reservas</label>
                        <input type="datetime-local" name="data_rese" id="data_rese" class="inputBox" required>
                        <br><br>
                        <label class="input">Data : hora da Busca</label>
                        <input type="datetime-local" name="data_busc" id="data_busc" class="inputBox" required>
                        <br><br>
                            <a class="forget" href="">Esquece a sua password ?</a>
                            <br><br><br>
                            <a class="fa_login" href="login.php">Fazer Login</a>
                            <br><br><br>
                        <input type="submit" name="submit" id="submit" value="Enviar">
                        
                    
                    </form>
                 </div>         
            </div>
       </section>
    <script src="./js/main.js"></script>
  </body>
</html>
