﻿
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indicaí|Formulário</title>
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, rgb(129, 129, 223), rgb(15, 15, 78));
        color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-left: 1.0rem;
        padding-rigth: 1.0rem;
      }
      .box {
        position: absolute;
        top: 80%;
        left: 50%;
        transform: translate(-50%, -15%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 45px;
        border-radius: 20px; 
        width: 50%;
      }
      fieldset {
        border:2px solid dodgerblue;
      }
      legend {
        border: 3px solid dodgerblue;
        padding: 10px;
        text-align: center;
        background-color: dodgerblue;
        border-radius: 8px left;
      }
      .imputBox {
        position: relative;
      }
      .ImputUser {
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        color: white;
        font-size: 15px;
        width: 100%;
        letter-spacing: 2px;
      }
      .labelInput {
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5s;
      }
      textarea{
        display: block;
        font: inherit;
        padding: 0.2rem;
        border: 1px solid transparent;
        min-height: 5rem;
        resize: vertical;
      }
      .ImputUser:focus ~ .labelInput,
      .ImputUser:valid ~ .labelInput{
        top: -20px;
        font-style: 22px;
        color: dodgerblue;
      }
      #data_nascimento {
        border: none;
        padding: 8px;
        border-radius: 10px;
        outline: none;
        font-size: 25px;
      }
      #submit {
        background-image: linear-gradient(to right, rgb(129, 129, 223), rgb(15, 15, 78));
        width: 100%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        border-radius: 10px;
      }
      #submit:hover {
        background-image: linear-gradient(to right, rgb(129, 129, 223), rgb(86, 86, 155));
      }

    </style>
</head>
<body>
  <div class="box">  
    <form action="privado/pedidosql.php" method="POST">
      <fieldset>
        <legend><h2>Pedido de Pintor</h2></legend>
          <br>
          <input type="hidden" id="valy" name="valy" value="75">
          <input type="hidden" id="servico" name="servico" value="Pintor">
            <h2>Tipo de serviço</h2> 
         <input type="radio" id="tipodeservico" name="tipodeservico" value="Interior/exterior" required>
           <label for="tipodeservico">Interior/exterior</label>
         </imput>
         <br>
         <input type="radio" id="tipodeservico" name="tipodeservico" value="Massa corrida" required>
         <label for="tipodeservico">Massa corrida</label>
          </imput>
          <br>
          <input type="radio" id="tipodeservico" name="tipodeservico" value="Decorativa" required>
         <label for="tipodeservico">Decorativa</label>
          </imput>
          <br>
          <input type="radio" id="tipodeservico" name="tipodeservico" value="Textura/granito" required>
         <label for="tipodeservico">Textura/granito</label>
          </imput>
          <br>
         <input type="radio" id="tipodeservico" name="tipodeservico" value="Madeiras/ferro" required>
         <label for="tipodeservico">Madeiras/ferro</label>
          </imput>
          <br>
          <input type="radio" id="tipodeservico" name="tipodeservico" value="Outros" required>
         <label for="tipodeservico">Outros</label>
          </imput>
          <br>
          
          <h2>Precisa de material?</h2>
          <input type="radio" id="precisadematerial" name="precisadematerial" value="Sim" required>
            <label for="precisadematerial">Sim</label>
          </imput>
          <br>
          <input type="radio" id="precisadematerial" name="precisadematerial" value="Não" required>
            <label for="precisadematerial">Não</label>
          </imput>
           <br><br>
           <h2>Aonde é o serviço</h2>
           <input type="radio" id="aondeeoservico" name="aondeeoservico" value="Casa" required>
             <label for="aondeeoservico">Casa</label>
           </imput>
           <br>
           <input type="radio" id="aondeeoservico" name="aondeeoservico" value="Sobrado" required>
             <label for="aondeeoservico">Sobrado</label>
           </imput>
           <br>
           <input type="radio" id="aondeeoservico" name="aondeeoservico" value="Apt" required>
             <label for="aondeeoservico">Apt</label>
           </imput>
           <br>
           <input type="radio" id="aondeeoservico" name="aondeeoservico" value="Sala_comercial" required>
             <label for="aondeeoservico">Sala comercial</label>
           </imput>
           <br>
           <input type="radio" id="aondeeoservico" name="aondeeoservico" value="Galpão" required>
             <label for="aondeeoservico">Galpão</label>
           </imput>
            <br><br>
            <h2>Quando será serviço</h2>
            <input type="radio" id="quandoseraoservico" name="quandoseraoservico" value="Urgente(24hs)" required>
              <label for="quandoseraoservico">Urgente(24hs)</label>
            </imput>
            <br>
            <input type="radio" id="quandoseraoservico" name="quandoseraoservico" value="Essa_semana" required>
              <label for="quandoseraoservico">Essa semana</label>
            </imput>
            <br>
            <input type="radio" id="quandoseraoservico" name="quandoseraoservico" value="Em_7_dias" required>
              <label for="quandoseraoservico">Em 7 dias</label>
            </imput>
            <br>
            <input type="radio" id="quandoseraoservico" name="quandoseraoservico" value="Em_30_dias" required>
              <label for="quandoseraoservico">Em 30 dias</label>
            </imput>
            <br>
            <input type="radio" id="quandoseraoservico" name="quandoseraoservico" value="Sou_flexível" required>
              <label for="quandoseraoservico">Sou flexível</label>
            </imput>
            <br>
            
             <br><br>
             <h2>Horário do serviço</h2>
             <input type="radio" id="horariodoservico" name="horariodoservico" value="Manhã(7hs às 11hs)" required>
               <label for="horariodoservico">Manhã(7hs às 11hs)</label>
             </imput>
             <br>
             <input type="radio" id="horariodoservico" name="horariodoservico" value="Tarde(12hs às 18hs)" required>
               <label for="horariodoservico">Tarde(7hs às 11hs)</label>
             </imput>
             <br>
             <input type="radio" id="horariodoservico" name="horariodoservico" value="Noite(19hs às 22hs)" required>
               <label for="horariodoservico">Noite(7hs às 11hs)</label>
             </imput>
             <br><br><br><br>
             <div class="imputBox">
             <br><br>
            
          <textarea type="text" name="oquemaisoproprecisasaber" id="oquemaisoproprecisasaber" class="ImputUser" required></textarea>
          <label for="oquemaisoproprecisasaber" class="labelInput">O que mais o profissional precisa saber</label>
          <br><br>
	      
        
          <div class="imputBox">
          <input type="text" name="cep" id="cep" class="ImputUser" required>
           <label for="cep" class="labelInput">CEP</label>
        </div>
	     <br><br>
          <div class="imputBox">
          <input type="text" name="bairro" id="bairro" class="ImputUser" required>
           <label for="bairro" class="labelInput">Bairro</label>
        </div>
	   <br><br>
          <div class="imputBox">
          <input type="text" name="cidade" id="cidade" class="ImputUser" required>
           <label for="cidade" class="labelInput">Cidade</label>
        </div>
      <br><br>
          <div class="imputBox">
          <input type="text" name="nome" id="nome" class="ImputUser" required>
           <label for="nome" class="labelInput">Nome</label>
        </div>
	   <br><br>
          <div class="imputBox">
          <input type="text" name="email" id="email" class="ImputUser" required>
           <label for="email" class="labelInput">Email</label>
        </div>
 	    <br><br>
          <div class="imputBox">
          <input type="text" name="celular" id="celular" class="ImputUser" required>
           <label for="celular" class="labelInput">Celular</label>
        </div>
	      <br><br>
              <h2>Diga a preferencia do serviço</h2>
              <input type="radio" id="digaapreferenciadoservico" name="digaapreferenciadoservico" value="Ótimo custo" required>
                <label for="digaapreferenciadoservico">Ótimo custo</label>
              </imput>
              <br>
              <input type="radio" id="digaapreferenciadoservico" name="digaapreferenciadoservico" value="Ótimo benefício" required>
              <label for="digaapreferenciadoservico">Ótimo benefício</label>
               </imput>
               <br>
               <input type="radio" id="digaapreferenciadoservico" name="digaapreferenciadoservico" value="Ótimo custo/benefício" required>
               <label for="digaapreferenciadoservico">Ótimo custo/benefício</label></input>
               
               <br><br>
        </div>       
     <br><br>
        <input type="submit" name="submit" id="submit"></input>
      </fieldset>
    </form>
  </div>
  <script src="
https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js
"></script>
<script>
    var cleave = new Cleave('#cpf', {
    delimiters: ['.', '.', '-'],
    blocks: [3, 3, 3, 2],
    numericOnly: true
});

var cleave = new Cleave('#cep', {
    delimiters: ['', '-'],
    blocks: [2, 3, 3],
    numericOnly: true
});

var cleave = new Cleave('#celular', {
    delimiters: ['-', '-'],
    blocks: [2, 5, 4],
    numericOnly: true
});

</script>

</body>
</html>