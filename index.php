<!DOCTYPE html>
<html lang="pt-pt">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CAFENA</title>
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
    
  </head>
  <body>
    <header class="header">
      <a href="#" class="logo">
        <img src="./img/logo.png" alt="Logo da cafeteria" />
      </a>

      <nav class="nav-bar">
        <a href="#home">Inicial</a>
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

    <section class="home" id="home">
      <div class="content">
        <h3>Café fresco pela manhã</h3>
        <p>
          O Melhor da Banda
        </p>
        <a href="#" class="btn">Peça já o seu café!</a>
      </div>
    </section>

    <section class="about" id="about">
      <h1 class="heading"><span>Sobre</span> nós</h1>

      <div class="row">
        <div class="image">
          <img src="./img/about-img.jpeg" alt="Xícara de café" />
        </div>

        <div class="content">
          <h3>O que torna nosso café especial?</h3>
          <p>
            Tornar-se um empreendimento capaz de servir toda a população de Luanda e suficiente para atender o mercado e expandir gradualmente para o mercado vizinho.Os valores do nosso empreendimento irão basear-se nos seguintes aspectos:

            
          </p>
          <p>
            Clientes
            Gestão
            Conhecimento e Tecnologia
            Relações
          </p>
          <a href="#" class="btn">Saiba mais</a>
        </div>
      </div>
    </section>

    <section class="menu" id="menu">
      <h1 class="heading"><span>Nosso</span> menu</h1>

      <div class="box-container">
        <div class="box">
          <img src="./img/menu-1.png" alt="Item do menu" />
          <h3>Cappuccino</h3>
          <div class="price">500kz <span>650kz</span></div>
          <a href="#" class="btn">Adicione ao carrinho</a>
        </div>

        <div class="box">
          <img src="./img/menu-2.png" alt="Item do menu" />
          <h3>Cafe au Lait</h3>
          <div class="price">400kz <span>450kz</span></div>
          <a href="#" class="btn">Adicione ao carrinho</a>
        </div>

        <div class="box">
          <img src="./img/menu-3.png" alt="Item do menu" />
          <h3>Expresso</h3>
          <div class="price">800kz <span>1000kz</span></div>
          <a href="#" class="btn">Adicione ao carrinho</a>
        </div>

        <div class="box">
          <img src="./img/menu-4.png" alt="Item do menu" />
          <h3>Iced coffee</h3>
          <div class="price">980kz <span>870kz</span></div>
          <a href="#" class="btn">Adicione ao carrinho</a>
        </div>

        <div class="box">
          <img src="./img/menu-5.png" alt="Item do menu" />
          <h3>Cafe Latte</h3>
          <div class="price">720kz <span>1500kz</span></div>
          <a href="#" class="btn">Adicione ao carrinho</a>
        </div>

        <div class="box">
          <img src="./img/menu-6.png" alt="Item do menu" />
          <h3>Mocha</h3>
          <div class="price">280kz <span>200kz</span></div>
          <a href="#" class="btn">Adicione ao carrinho</a>
        </div>
      </div>
    </section>

    <section class="products" id="products">
      <h1 class="heading"><span>Nosso</span> produtos</h1>

      <div class="box-container">
        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="./img/produto1.jpg" alt="Produtos" />
          </div>
          <div class="content">
            <h3>Café com croissant</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">1000kz <span>1800kz</span></div>
          </div>
        </div>

        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="./img/produto2.jpeg" alt="Produtos" />
          </div>
          <div class="content">
            <h3>Café com Pão de Queijo</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">900Kz <span>1500kz</span></div>
          </div>
        </div>

        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="./img/produto3.jpeg" alt="Produtos" />
          </div>
          <div class="content">
            <h3>Café com Bolo de Chocolate</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">1600kz <span>1900kz</span></div>
          </div>
        </div>
      </div>
    </section>

    <section class="review" id="review">
      <h1 class="heading"><span>Avaliação</span> de clientes</h1>

      <div class="box-container">
        <div class="box">
          <img src="./img/quote-img.png" alt="" class="quote" />
          <p>
            Rápido e delicioso.
          </p>
          <img src="./img/pic-1.png" class="user" alt="" />
          <h3>António Junior</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="box">
          <img src="./img/quote-img.png" alt="" class="quote" />
          <p>
            Suave e gostoso.
          </p>
          <img src="./img/pic-2.png" class="user" alt="" />
          <h3>Celestino João</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="box">
          <img src="./img/quote-img.png" alt="" class="quote" />
          <p>
            Suave, forte e delicioso.
          </p>
          <img src="./img/pic-3.png" class="user" alt="" />
          <h3>José Correia</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
      </div>
    </section>

    
    <section class="blogs" id="blogs">
      <h1 class="heading"><span>Nossos </span>blogs</h1>

      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="./img/blog-1.jpeg" alt="" />
          </div>

          <div class="content">
            <a href="#" class="title">Faça seu próprio café</a>
            <span>Jair Campos</span>
            <p>
              Saudável e prazeroso
            </p>
            <a href="#" class="btn">Saiba mais!</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="./img/blog-2.jpeg" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title">Dicas para cozinhar</a>
            <span>Manuel Sampaio</span>
            <p>
              O Melhor da Cidade de Luanda!
            </p>
            <a href="#" class="btn">Saiba mais!</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="./img/blog-3.jpeg" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title">Benefícios da Cafeína</a>
            <span>José Ulo</span>
            <p>
              O melhor que há...
            </p>
            <a href="#" class="btn">Saiba mais!</a>
          </div>
        </div>
      </div>
    </section>

    <section class="footer">
      <div class="share">
        <a href="#home" class="Dionísio João-facebook-f"></a>
        <a href="#home" class="Dionísio João-twitter"></a>
        <a
          href="https://instagram.com/DionisioJoao_"
          target="_blank"
          class="Dionísio João-instagram"
        ></a>
        <a
          href="https://www.linkedin.com/in/Dionisio João-Oficial/"
          target="_blank"
          class="Dionísio João-linkedin"
        ></a>
        <a
          href="https://Caster black"
          target="_blank"
          class="Dionísio João "
        ></a>
      </div>

      <div class="links">
        <a href="#home">Inicial</a>
        <a href="#about">Sobre</a>
        <a href="#menu">Menu </a>
        <a href="#review">Avaliações</a>
        <a href="#contact">Contato</a>
        <a href="#blogs">Blogs</a>
      </div>

      <div class="credit">Feito por <span>CEO DIONÍSIO jOÃO</span></div>
    </section>
    <script src="./js/main.js"></script>
  </body>
</html>
