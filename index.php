<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Bancária</title>
    <link rel="stylesheet" href="style.css"></head>
 

<body>
   <header>
      <nav>
        <a class="logo" href="/">Conta bancaria</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="saldo.html">Retirar</a></li>
          <li><a href="#">Poupança</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
      </nav>
    </header>
                <section>
                    <table>
                        <thead></thead>
                        <tbody>
    <div class="conteudo">
      <h1>Saldo total</h1>
      <img src="moeda.svg" alt="moeda">
      
        <?php

        class ContaBancaria
        {
            private $saldo = 0;
            private $historicoMovimentacao = [];

            function imprimirValor()
            {
                echo ("<p>R$" . $this->saldo . "</p>");
            }

            function exibirHistorico()
            {
                // echo ("<pre>");
                // var_dump($this->historicoMovimentacao);

        ?>
    </div>
              
                            <?php

                            foreach ($this->historicoMovimentacao as $historico) {
                                echo ("<tr><td>$historico</td></tr>");
                            }
                            ?>

                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </section>
       <main></main>
    <script src="mobile-navbar.js"></script>
    
   
  </body>


        <?php

            }

            function depositar($valor)
            {
                if ($valor > 0) {
                    $this->saldo += $valor;
                    $this->historicoMovimentacao[] = $valor;
                }
            }

            function sacar($valor)
            {
                if ($valor > 0 && $valor <= $this->saldo) {
                    $this->saldo -= $valor;
                    $this->historicoMovimentacao[] = -1 * $valor;
                }
            }
        }

        $conta1 = new ContaBancaria();
        $conta1->depositar(10);
        $conta1->depositar(16.99);
        $conta1->sacar(20.00);
        $conta1->sacar(20.00);


        $conta1->exibirHistorico();

        ?>

    </div>
</body>

</html>