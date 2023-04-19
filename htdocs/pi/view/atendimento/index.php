<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Covid-19 Brasil</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../styles/header.css">
  <link rel="stylesheet" href="../styles/atendimento.css">
</head>
<body>
  <header>
    <div>
      <h1>Covid-19 Brasil</h1>
      <nav>
        <div>
          <ul class="navbar">
            <li>
              <a href="../" class='bold'>Início</a>
            </li>
            <li>
              <a href="../prevencoes" class='bold'>Prevenções</a>
            </li>
            <li>
              <a href="#" class='bold'>Atendimento profissional</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <a href="../login" class='bold'>Login</a>
  </header>
  <main>
  <form action="../../controller/cadastrarAtendimento.php" method="post">
      <div class=pages_group>
        <div class=form_page>
          <label>
            <span>Nome Completo:</span>
            <input type="text" name="name" id="name" placeholder='Digite seu nome' required maxlength="250" />
          </label>
          <div class=input_group>
            <label>
              <span>CPF:</span>
              <input type="text" name='cpf' id="cpf" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" title="Digite o CPF no formato: 333.333.333-33" placeholder='Digite seu CPF' maxlength="14" required />
            </label>
            <label>
              <span>Telefone:</span>
              <input type="text" id="phone" name="phone" pattern="[0-9]{13}" title="Digite apenas números contendo até os 2 dígitos do DDD!" placeholder='5551988776655' maxlength="13" required />
            </label>
          </div>
          <div class=input_group>
            <label>
              <span>E-mail:</span>
              <input type="email" name="email" id="email" placeholder='Digite seu nome' required />
            </label>
            <label>
              <span>Idade:</span>
              <input type="number" name="age" id="age" placeholder='Digite sua idade' min="0" max="125" required />
            </label>
          </div>
          <div class="input_group">
            <label>
              <span>Cep UF:</span>
              <input type="text" name="cep_uf" id="cep_uf" pattern="[0-9]{5}-[\d]{3}" title="Digite o CEP no formato: 95630-000" placeholder='95630-000' maxlength="9" required />
            </label>
            <label>
              <span>Sexo:</span>
              <input type="text" name="sexo" id="sexo" pattern="[M,F,O]" title="Digite M, F ou O" placeholder='M/F/O' maxlength="1" required />
            </label>
          </div>

          <p>Procure atendimento médico imediatamente se apresentar sintomas graves.</p>
          <p>Sempre ligue antes de ir ao médico, posto de saúde, clínicas ou hospitais.</p>
          <p>Pessoas saudáveis que apresentarem os sintomas leves devem acompanhar a situação em casa.</p>
          <p>Em média, os sintomos aparecem cinco ou seis dias após a infeção pelo vírus. No entanto, eles também podem levar até 14 dias para se manifestarem.</p>
        </div>
        <div class=form_page>
          <label>
            <span>Sintomas comuns:</span>
            <div class=checkbox_group>
              <input
                onChange="{handleFruitChange}"
                type="checkbox"
                name="symptoms"
                value="Febre"
              />Febre
            </div>
            <div class=checkbox_group>
              <input
                onChange={handleFruitChange}
                type="checkbox"
                name="symptoms"
                value="Tosse"
              />Tosse
            </div>
            <div class=checkbox_group>
              <input
                onChange={handleFruitChange}
                type="checkbox"
                name="symptoms"
                value="Cansaço"
              />Cansaço
            </div>
            <div class=checkbox_group>
              <input
                onChange={handleFruitChange}
                type="checkbox"
                name="symptoms"
                value="Perda de paladar ou olfato"
              />Perda de paladar ou olfato
            </div>
          </label>
          <label>
            <span>Sintomas menos comuns:</span>
            <div class=checkbox_group>
              <input
                onChange={handleFruitChange}
                type="checkbox"
                name="symptoms[]"
                value="Febre"
              />Febre
            </div>
            <div class=checkbox_group>
              <input
                onChange={handleFruitChange}
                type="checkbox"
                name="symptoms[]"
                value="Tosse"
              />Tosse
            </div>
            <div class=checkbox_group>
              <input
                onChange={handleFruitChange}
                type="checkbox"
                name="symptoms[]"
                value="Cansaço"
              />Cansaço
            </div>
            <div class=checkbox_group>
              <input
                onChange={handleFruitChange}
                type="checkbox"
                name="symptoms[]"
                value="Perda de paladar ou olfato"
              />Perda de paladar ou olfato
            </div>
          </label>
          <label>
            <span>Sintomas graves:</span>
            <div class=checkbox_group>
              <input
                onChange={handleFruitChange}
                type="checkbox"
                name="symptoms[]"
                value="Febre"
              />Febre
            </div>
            <div class=checkbox_group>
              <input
                onChange={handleFruitChange}
                type="checkbox"
                name="symptoms[]"
                value="Tosse"
              />Tosse
            </div>
            <div class=checkbox_group>
              <input
                onChange={handleFruitChange}
                type="checkbox"
                name="symptoms[]"
                value="Cansaço"
              />Cansaço
            </div>
            <div class=checkbox_group>
              <input
                onChange={handleFruitChange}
                type="checkbox"
                name="symptoms[]"
                value="Perda de paladar ou olfato"
              />Perda de paladar ou olfato
            </div>
          </label>
          <p class='bold'>Contato urgência: <a href="tel:5155553434">(54) 5555-3434</a></p>
          <p class='bold'>Atendimento profisional: <a href="tel:5466663434">(54) 6666-3434</a></p>
        </div>
      </div>
      <div class=buttons>
        <div>
          <input class=button type="button" value="Cancelar" />
          <input class=button type="submit" value="Enviar" />
        </div>
      </div>
    </form>
  </main>
</body>
</html>