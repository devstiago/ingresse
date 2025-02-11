<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>BECKO Ingresso</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">

    

    

<!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dist/css/checkout.css" rel="stylesheet">
  </head>
  <body class="bg-body-tertiary">
   
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="img/logobc.png" alt="" width="72" height="57">
      <h2><div id="dNOME_EVENTO"></div></h2>
      <p class="lead"><div id="dDESC_EVENTO"></div></div>
      <h5> <div id="dDESC_DATA"> </div> </h5>
	    <h5> <div id="dDESC_HORA"> </div> </h5>
	    <h5> <div id="dDESC_LOCAL"></div> </h5>
          <hr class="my-4">

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Ingresso</span>
          
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Ingresso</h6>
              <small class="text-body-secondary">Ing antecipado</small>
            </div>
            <span class="text-body-secondary"><div id="dDESC_VALOR"></div></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Taxa Serv.</h6>
              <small class="text-body-secondary">Taxa plataforma</small>
            </div>
            <span class="text-body-secondary"><div id="dDESC_TAXA"></div></span>
          </li>
          <!--
          <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
            <div class="text-success">
              <h6 class="my-0">Promo code</h6>
              <small>----</small>
            </div>
            <span class="text-success">−$5</span>
          </li>
		  -->
          <li class="list-group-item d-flex justify-content-between">
            <span>Total</span>
            <strong><div id="dDESC_TOTAL"></div></strong>
          </li>
        </ul>

		<!--
        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </form>
		-->
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Informe para gerar o Ingresso</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nome</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
             
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">CPF</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              
            </div>
			

            <div class="col-12">
              <label for="address" class="form-label">whattsap</label>
              <input type="text" class="form-control" id="address" placeholder="(19) 0.0000-0000" required>             
            </div>


            <div class="col-12">
              <label for="address" class="form-label">E-mail</label>
              <input type="text" class="form-control" id="address" placeholder="email@com.br" required>             
            </div>
			
          </div>


          <hr class="my-4">

          <a id="bcomp" class="w-100 btn btn-primary btn-lg" onClick="COMPRAR_TICKET()" type="submit">
            <span id="bload1" role="status" aria-hidden="true"></span>
            <span id="bload_te1">Comprar Ingresso</span>
          </a>
        
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-body-secondary text-center text-small">
    <p class="mb-1">&copy; 2019–2024 Becko</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Consultar Ingresso</a></li>
    </ul>
  </footer>
</div>


    <script type="text/javascript" language="javascript">
      window.onload = function() {
        CARREGA_EVENTO();
     }

     function COMPRAR_TICKET(){
      
       document.getElementById("bload_te1").innerText = " Aguarde...";
       document.getElementById("bload1").classList.add('spinner-border', 'spinner-border-sm');
       document.getElementById("bcomp").disabled = true;
      
       //alert('aqui');

       $.ajax({
                    type: 'GET',  
                     dataType: 'JSON',              
                    url: 'control/ComprarTicket.php', 
                    success: function(result) { 


                    }, error: function(error) {
                        alert('erro..');
                    }
        });

     }

     function CARREGA_EVENTO(){
     
      $.ajax({
                    type: 'GET',  
                     dataType: 'JSON',              
                    url: 'control/CarregaEvento.php', 
                    success: function(result) { 
                    
                      if(result[0].codigo_retorno == 1){  
                        
                        document.querySelector("#dNOME_EVENTO").innerHTML = result[0].NomeEvento;
                        document.querySelector("#dDESC_EVENTO").innerHTML = result[0].DescEvento;
                        document.querySelector("#dDESC_DATA").innerHTML   = 'Data:' + result[0].DescData;
                        document.querySelector("#dDESC_HORA").innerHTML   = 'Horario:' + result[0].DescHora;
                        document.querySelector("#dDESC_LOCAL").innerHTML  = 'Local:' + result[0].Local;
                        
                        const v1formatado = result[0].vValor.toLocaleString('pt-BR', { 
                                                style: 'currency', currency: 'BRL' });

                        document.querySelector("#dDESC_VALOR").innerHTML  = v1formatado;
                        
                        const v2formatado = result[0].vTaxa.toLocaleString('pt-BR', { 
                                               style: 'currency', currency: 'BRL' });

                        document.querySelector("#dDESC_TAXA").innerHTML  = v2formatado;

                        const v3formatado = result[0].vTotal.toLocaleString('pt-BR', { 
                                               style: 'currency', currency: 'BRL' });

                        document.querySelector("#dDESC_TOTAL").innerHTML  = v3formatado;
                      }else{
                        alert(result[0].msg);
                        
                        //window.location.href = "erro400.php";            
                      }
                       
                    },
                    error: function(error) {
                        alert('erro..');
                    }
        });

     }

    </script>

    <script src="dist/js/jquery/jquery.min.js"></script>
    <!-- <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> -->
      <!-- <script src="dist/js/checkout.js"></script> -->
  </body>
</html>
