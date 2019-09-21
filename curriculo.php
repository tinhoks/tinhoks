<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculo</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" id="bootstrap">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
		<?php
			$json = file_get_contents('estados_cidades.json');
			$cidades = json_decode($json, true);
			function especifica($x){
				var_dump($cidades);
				$z = 0;
				foreach($cidades as $c){
					if($c[z]['sigla'] == $x.valor){
						print "<option>{$c[z][1]}</option>";
					}
					$z++;
				}	
			}
		?>
	<style>
		.grid {
			display: grid;
		}
		.logo {
			grid-area: logo;
		}
		.nav {
			grid-area: nav;
		}
		.content {
			grid-area: content;
		}
		.sidenav {
			grid-area: sidenav;
		}
		.advert {
			grid-area: advert;
		}
		.footer {
			grid-area: footer;
		}
		.grid-template-areas-1 {
			grid-template-areas:
				"logo nav"
				"sidenav content advert"
				"sidenav footer footer";
		}
		.grid-template-areas-2 {
			grid-template-areas:
				"logo logo logo";
		}
		.grid-template-areas-3 {
			grid-template-areas:
				"logo logo nav"
		}
		.grid-template-areas-4 {
			grid-template-areas:
				"logo nav sidenav advert"
		}
		.grid-template-areas-5 {
			grid-template-areas:
				"logo"
		}
		.grid-template-areas-6 {
			grid-template-areas:
				"logo nav"
		}
		.item {
			margin: 20px 5px;
			text-align: center;
			font-size: 1.5em;
			padding:5px;
		}
		.grid {
			max-width: 1200px;
			margin-left:200px;
		}

		h1 {
			margin-left:200px;
			font-size: 1.25em;
			font-weight: normal;
		}
		h2 {
			font-size: 1em;
			font-weight: normal;
			margin-left:200px;
		}
		body {
			font-family: monospace;
			color: #333;
			padding-bottom: 60px;
			margin: 0px;
		}

		body > div {
			padding: 40px 0;
		}

		body > div:nth-of-type(even) {
			background: rgba(0,0,0,.03);
		}

		body > div > img {
			display: block;
			margin: 0 auto;
			max-width: 100%;
		}
		.total {
			background-color:#F8F8F8;	
			border-top: 1px solid lightgray;
		}
	</style>
	
  </head>
  <body>
	<div class='total'>
		<h1>1. QUAL SUA SITUAÇÃO ATUAL?</h1>
		<h2>Isso é importante para gerar o currículo mais adequado para o seu caso:</h2>
		<form method='post' action='#' class="grid grid-template-areas-2">
			<select value='situacao' class="item logo">
				<option value=""></option>
				<option value="primeiro-emprego">Procuro meu primeiro emprego</option>
				<option value="desempregado">Estou desempregado(a), a procura de um emprego</option>
				<option value="aviso-previo">Estou empregado(a), mas cumprindo aviso prévio</option>
				<option value="empregado">Estou empregado(a), querendo mudar de emprego</option>
				<option value="estagio">Procuro um estágio</option>
			</select>		
		</form>
	</div>
	<div class='total'>
		<h1>2. DADOS PESSOAIS</h1>
		<h2>Informe os dados corretamente para não ocorrer erros em seu currículo:</h2>
		<form method='post' action='#' class="grid grid-template-areas-3">
			<input placeholder='Nome Completo' name='nome' class="item logo"/>
			<input placeholder='Nacionalidade' name='nacionalidade' class="item nav"/>
		</form>
		<form method='post' action='#' class="grid grid-template-areas-4">
			<select value='sexo' class="item logo">
				<option value="" disabled selected>Sexo</option>
				<option value='M'>Masculino</option>
				<option value='F'>Feminino</option>
			</select>
			<input placeholder='Idade em Anos' type='number' name='idade' class="item nav"/>
			<select value='compromisso' class="item sidenav">
				<option value="" disabled selected>Estado Civil</option>
				<option value="1">Solteiro(a)</option>
				<option value="2">Casado(a)</option>
				<option value="3">União Estável</option>
				<option value="4">Separado(a)</option>
				<option value="5">Divorciado(a)</option>
				<option value="6">Viúvo(a)</option>
			</select>
			<select value='filhos' class="item advert">
				<option value="" disabled selected>Tem Filho(s)?</option>
				<option value="N">Não</option>
				<option value="S">Sim</option>
			</select>
		</form>
		<form method='post' action='#' class="grid grid-template-areas-5">
			<input placeholder='Endereço' name='endereco' class="item logo"/> 
		</form>
		<form method='post' action='#' class="grid grid-template-areas-6">
			<select value='estado' class="item logo" onchange='especifica(this)'>
				<option value=""></option>
					<option value="AC">Acre</option>
					<option value="AL">Alagoas</option>
					<option value="AP">Amapá</option>
					<option value="AM">Amazonas</option>
					<option value="BA">Bahia</option>
					<option value="CE">Ceará</option>
					<option value="DF">Distrito Federal</option>
					<option value="ES">Espírito Santo</option>
					<option value="GO">Goiás</option>
					<option value="MA">Maranhão</option>
					<option value="MT">Mato Grosso</option>
					<option value="MS">Mato Grosso do Sul</option>
					<option value="MG">Minas Gerais</option>
					<option value="PA">Pará</option>
					<option value="PB">Paraíba</option>
					<option value="PR">Paraná</option>
					<option value="PE">Pernambuco</option>
					<option value="PI">Piauí</option>
					<option value="RJ">Rio de Janeiro</option>
					<option value="RN">Rio Grande do Norte</option>
					<option value="RS">Rio Grande do Sul</option>
					<option value="RO">Rondônia</option>
					<option value="RR">Roraima</option>
					<option value="SC">Santa Catarina</option>
					<option value="SP">São Paulo</option>
					<option value="SE">Sergipe</option>
					<option value="TO">Tocantins</option>
			</select>
			<select>
				<?php
					
				?>
			</select>
		</form>
	</div>


	
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="./flag/assets/docs.js"></script>
  </body>
</html>
