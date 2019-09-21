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
		.grid-template-areas-7 {
			grid-template-areas:
				"logo nav footer footer footer footer"
		}
		.grid-template-areas-8 {
			grid-template-areas:
				"logo"
		}
		.grid-template-areas-9 {
			grid-template-areas:
				"logo"
		}
		.grid-template-areas-10 {
			grid-template-areas:
				"logo logo nav sidenav"
		}
		.grid-template-areas-11 {
			grid-template-areas:
				"logo logo nav sidenav footer footer"
		}
		.grid-template-areas-12 {
			grid-template-areas:
				"logo"
		}
		.item {
			margin: 20px 5px;
			text-align: center;
			font-size: 1.5em;
			padding:5px;
			border-radius:1rem;
			border:1px solid #EADDDD;
			color:gray;
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
			background-color:#F8F8F8
		}
		body > div {
			padding: 40px 0;
		}
		.total {
			background-color:#F8F8F8;	
			border-top: 1px solid lightgray;
		}
		textarea{
			margin-bottom:50px;
		}
		.divao{
			display:block;
		}
		.file_customizada::-webkit-file-upload-button {
		  visibility: hidden;
		}
		.custom-file-input::before {
		  content: 'Select some files';
		  display: inline-block;
		  background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
		  border: 1px solid #999;
		  border-radius: 3px;
		  padding: 5px 8px;
		  outline: none;
		  white-space: nowrap;
		  -webkit-user-select: none;
		  cursor: pointer;
		  text-shadow: 1px 1px #fff;
		  font-weight: 700;
		  font-size: 10pt;
		}
		label.labelInput input[type="file"] {
			position: fixed;
			top: -1000px;
		}
		labelInput {
			border: 2px solid #AAA;
			border-radius: 4px;
			padding: 2px 5px;
			margin: 2px;
			background: #DDD;
			display: inline-block;
		}
		.labelInput :invalid + span {
			color: #A44;
		}
		.labelInput :valid + span {
			color: #4A4;
		}
		.labelInput{
			text-align:center;
		}
		#arquivofile{
			color:gray;
			padding: 10px 501px;
			margin-bottom:5px;
			background-color:white
		}
		#arquivofile:hover{
			border:1px solid gray;
			cursor:pointer
		}
		#arquivofile:active{
			background-color:lightgray;
			border:1px solid lightblue;
			transition:0.5s
		}
		#labela{
			margin-bottom:25px;
		}
		#space{
			margin-bottom:40px
		}
		.gerar{
			background-color:#25A3C5;
			padding: 25px 70px;
			margin-left:600px ;
			margin-top: 40px;
			border-radius:1.5rem;
			box-shadow: 5px 10px 18px #888888:;
			font-size:30px;
			color:white;
			transition:2s
		}
		.gerar:hover{
			background-color: rgba(30,33,191,1);
			transition:2s
		}
		<!--#btns{
			text-align:center;
		}
		.efeito{
			border:none;
			color: #ffffff;
			padding:20px;
			margin:10px;
			font-size:24px;
			line-height:24px;
			border-radius:10px;
			position:relative;
			box-sizing:border-box;
			cursor:pointer;
			transition:all 400ms ease;
		}
		.efeito-1{
			background-color:#28348A
		}
		.efeito-1:before{
			content: '';
			position:absolute;
			top:0px;
			left:0px;
			width:0px;
			height:64px;
			background: rgba (255,255,255,0.3);
			border-radius:10px;
			transition:all 2s ease;
		}
		.efeito-1:hover:before{
			width:100%;
		}-->
		
	</style>
	
  </head>
  <body>
	<div class='divao'>
		<div class='cabecalho'>
			<header><h1>Header</h1></header>
		</div>
		<form method='post' action='gerar.php'>
			<div class='total'>
				<h1>1. QUAL SUA SITUAÇÃO ATUAL?</h1>
				<h2>Isso é importante para gerar o currículo mais adequado para o seu caso:</h2>
				<div class="grid grid-template-areas-2">
					<select id='situacao' name='situacao' class="item logo">
						<option value=""></option>
						<option value="primeiro-emprego">Procuro meu primeiro emprego</option>
						<option value="desempregado">Estou desempregado(a), a procura de um emprego</option>
						<option value="aviso-previo">Estou empregado(a), mas cumprindo aviso prévio</option>
						<option value="empregado">Estou empregado(a), querendo mudar de emprego</option>
						<option value="estagio">Procuro um estágio</option>
					</select>		
				</div>
			</div>
			
			<div class='total'>
				<h1>2. DADOS PESSOAIS</h1>
				<h2>Informe os dados corretamente para não ocorrer erros em seu currículo:</h2>
				<div class="grid grid-template-areas-3">
					<input id='nome' placeholder='Nome Completo' name='nome' class="item logo"/>
					<input id='nacionalidade' placeholder='Nacionalidade' name='nacionalidade' class="item nav"/>
				</div>
				<div class="grid grid-template-areas-4">
					<select id='sexo' style='color:gray' name='sexo' class="item logo">
						<option value="" disabled selected>Sexo</option>
						<option value='M'>Masculino</option>
						<option value='F'>Feminino</option>
					</select>
					<input id='idade' placeholder='Idade em Anos' type='number' name='idade' class="item nav"/>
					<select id='compromisso' name='compromisso' class="item sidenav">
						<option value="" disabled selected>Estado Civil</option>
						<option value="1">Solteiro(a)</option>
						<option value="2">Casado(a)</option>
						<option value="3">União Estável</option>
						<option value="4">Separado(a)</option>
						<option value="5">Divorciado(a)</option>
						<option value="6">Viúvo(a)</option>
					</select>
					<select id='filhos' name='filhos' class="item advert">
						<option value="" disabled selected>Tem Filho(s)?</option>
						<option value="N">Não</option>
						<option value="S">Sim</option>
					</select>
				</div>
				<div class="grid grid-template-areas-5">
					<input id='endereco' placeholder='Endereço' name='endereco' class="item logo"/> 
				</div>
				<div class="grid grid-template-areas-6">
					<select id='estado' name='estado' class="item logo" onchange='especifica(this)'>
						<option value=""disabled selected>Estado</option>
							<?php 
								for ($i=0; $i < count($cidades) ; $i++) { 
									echo "<option value='{$cidades[$i]['sigla']}'>{$cidades[$i]['nome']}</option>";
								}
							?>
					</select>
					<select id='cidades' name='cidades' class="item nav" id="DivCidade">
						<option value=""disabled selected>Cidade</option>
					</select>
				</div>
				<div class="grid grid-template-areas-7">
					<input id='telefone1' placeholder='Telefone 1' type='number' name='telefone1' class="item logo"/> 
					<input placeholder='Telefone 2' type='number' name='telefone2' class="item nav"/> 
					<input id='email' placeholder='Email' type='email' name='email' class="item footer"/> 
				</div>
			</div>
				
			<div class='total'>
				<h1>3. OBJETIVO</h1>
				<h2>Escreva o seu objetivo ao trabalhar para uma empresa:</h2>
				<div class="grid grid-template-areas-8">
					<input id='objetivo' placeholder='Objetivo' name='objetivo' class="item logo"/> 
				</div>
			</div>
			
			<div id='t4' class='total'>
				<h1>4. FORMAÇÃO ACADÊMICA</h1>
				<h2>A sua formação universitária:</h2>
				<div class="grid grid-template-areas-9">
					<input placeholder='Curso' name='curso' class="item logo"/> 
				</div>
				<div class="grid grid-template-areas-10">
					<input placeholder='Instituição' name='instituicao' class="item logo"/>
					<select name='status' class="item nav">
						<option value="" disabled selected>Status</option>
						<option value="concluido">Concluído em: </option>
						<option value="em_andamento">Previsão de conclusão em: </option>
					</select>
					<input type='number' placeholder='Ano de Conclusão' name='anodeconclusao' class="item sidenav"/> 
				</div>
				<!-- <button onclick='adicionarcurso()'>Adicionar outro curso</button> -->
			</div>
			
			<div class='total'>
				<h1>5. EXPERIÊNCIA PROFISSIONAL</h1>
				<h2>Experiência adquirida por você: </h2>
				<div class="grid grid-template-areas-11">
					<input placeholder='Empresa' name='empresa' class="item logo"/> 
					<input type='number' placeholder='Ano de Entrada' name='anoeempresa' class="item nav"/> 
					<input type='number' placeholder='Ano de Saída' name='anosempresa' class="item sidenav"/> 
					<input placeholder='Cargo' name='cargo' class="item footer"/> 
				</div>
				<div class="grid grid-template-areas-12">
				Principais atividades desempenhadas no cargo:
					<textarea name='atividades' style="margin-top: 0px; margin-bottom: 0px; height: 67px; resize: vertical;">>
							
					</textarea>
				</div>
			</div>
			
			<div class='total'>
				<h1>6. QUALIFICAÇÕES E ATIVIDADES COMPLEMENTARES</h1>
				<h2>Atividades realizadas que aumentaram sua qualificação: </h2>
				<div class="grid grid-template-areas-12">
					<input placeholder='Qualificação' name='qualificacao' class="item logo"/> 
				</div>
			</div>
			
			<div class='total'>
				<h1>7. INFORMAÇÕES ADICIONAIS</h1>
				<h2>Informações complementares</h2>
				<div class="grid grid-template-areas-12">
					<input placeholder='Informações' name='informacao' class="item logo"/> 
				</div>
			</div>
			<div id='labela' class='total'>
				<h1>8. FOTO</h1>
				<h2 id='space' >Anexe uma foto formal para o currículo</h2>
				<div class="grid grid-template-areas-12">
					<label class="labelInput">
						<input id="file" name="foto" type="file" class="file_customizada" required/>
						<span id='arquivofile' class="item logo" >Anexe a sua foto</span>
					</label>
				</div>
			</div>
			
			<div class='total'>
				<button onclick='existe()' class="gerar" >GERAR CURRÍCULO</button>
			</div>	
		</form>
	</div>
		<script>
		var cidades = <?php echo json_encode($cidades, JSON_HEX_TAG); ?>;  
		</script>
		<script>
		function especifica(x) {
			let div = document.getElementById('DivCidade')
			div.innerHTML= " "
            for (let i = 0; i < cidades.length; i++) {	
                if (x.value==cidades[i]['sigla']) {		
                    let NumeroEstado = i						
                }
            }
			for(let i = 0; i < cidades[NumeroEstado]['cidades'].length; i++){		
				let option = document.createElement('OPTION')						
				option.innerHTML = cidades[NumeroEstado]['cidades'][i]				
				option.setAttribute('value', cidades[NumeroEstado]['cidades'][i])	
				div.appendChild(option)												
			}
		}
		/*function existe(){
			var v = [];
			var c = 0;
			if(document.getElementById('situacao').value == ""){
				v[c] = '-Situação\n';
				c++
			}
			if(document.getElementById('nome').value == ""){
				v[c] = '-Nome Completo\n'
				c++
			}
			if(document.getElementById('nacionalidade').value == ""){
				v[c] = '-Nacionalidade\n'
				c++
			}
			if(document.getElementById('sexo').value == ""){
				v[c] = '-Sexo\n'
				c++
			}
			if(document.getElementById('endereco').value == ""){
				v[c] = '-Endereço\n'
				c++
			}
			if(document.getElementById('estado').value == ""){
				v[c] = '-Estado\n'
				c++
			}
			if(document.getElementById('cidades').value == ""){
				v[c] = '-Cidade\n'
				c++
			}
			if(document.getElementById('telefone1').value == ""){
				v[c] = '-Telefone\n'
				c++
			}
			if(document.getElementById('email').value == ""){
				v[c] = '-E-mail\n'
				c++
			}
			if(document.getElementById('objetivo').value == ""){
				v[c] = '-Objetivo\n'
				c++
			}
			if(document.getElementById('file').value == ""){
				v[c] = '-Foto\n'
				c++
			}
			alert(v+' ')
		}*/
		/*function adicionarcurso(){
			let div = document.createElement('DIV')	
				div.className('grid grid-template-areas-9')			
			let input = document.createElement('INPUT')
				input.setAttribute('placeholder', 'Curso')
				input.setAttribute('name', 'curso')
				input.className('item logo')
				div.appendChild(input)				

				let div2 = document.createElement('DIV')
				div2.className('grid grid-template-areas-10')					
				let input2 = document.createElement('INPUT')
				input2.setAttribute('placeholder', 'Instituição')
				input2.setAttribute('name', 'instituicao')
				input2.className('item logo')
				div.appendChild(input2)	
				
				let select = document.createElement('SELECT')
				select.className('item nav')
				let option = document.createElement('OPTION')
				option.setAttribute('disabled')
				option.setAttribute('selected')	
				select.appendChild(option)	
				
				let option2 = document.createElement('OPTION')
				option2.setAttribute('value', 'concluido')
				select.appendChild(option2)	
				
				let option3 = document.createElement('OPTION')	
				option3.setAttribute('value', 'em_andamento')
				select.appendChild(option3)
				
				let input4 = document.createElement('INPUT')
				input4.setAttribute('placeholder', 'Ano de Conclusão')
				input4.setAttribute('name', 'anodeconclusao')
				input4.setAttribute('type', 'number')
				input4.className('item sidenav')
				div.appendChild(input4)	
				
		}*/
		</script>
	
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="./flag/assets/docs.js"></script>
  </body>
</html>
