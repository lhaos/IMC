<html>

		<head>
				<title>APS 2 </title>
				<meta charset = "utf-8">
				<link rel="stylesheet" type="text/css" href="style/style.css">

		</head>

		<body>

			<header>  Calcule seu IMC </header>

			<section>
				<p>
					Para saber com certeza o quanto você está acima do peso ideal,
					é preciso calcular o seu Índice de Massa Corporal. Descubra agora,
					sem complicação, o quanto você tem a perder.<br>
					O Índice de Massa Corporal (IMC) é o padrão pelo qual você pode ver se
					seus níveis de gordura e peso estão dentro do recomendado pela
					Organização Mundial de Saúde.<br>
					A fórmula é simples: chega-se ao resultado dividindo o peso da
					pessoa em quilos pela altura em centímetros, elevada ao quadrado.<br>
					Preencha agora os campos a seguir com seus dados e confira seu
					peso ideal.
				</p>

			<article>
				<form  class=""  method="post" action="control/control-imc.php">
						<label>	Nome: </label>
						<input type="text" name="nome" autofocus required>
						<label>	Data de nascimento:</label>
						<input type="text" name="datanasc" required>
						<label>Gênero</label>
						<select name="genero">
							<option value="" selected> </option>
							<option value="masculino">MASCULINO</option>
							<option value="feminino" >FEMININO</option>
						</select>
						<label>Peso</label>
						<input type="text" name="peso" required>
						<label>Altura:</label>
						<input type="text" name="altura" required>
						<input type="submit" name="calcular" value="Calcular">
						<input type="reset" name="limpar" value="Limpar">
					</form>
			<aside>
				<table border = "5">
					<tr>
						<td>
								Categoria
						</td>
						<td>
								IMC
						</td>
						<td rowspan="7">
							Peso saudável <br>
							equivale ao 	<br>
							peso NORMAL.
						</td>
					</tr>
					<tr>
						<td>
							Abaixo do peso
						</td>
						<td>
							Abaixo de 18,5
						</td>
					</tr>
					<tr>
						<td>
							Peso normal
						</td>
						<td>
							entre 18,5 e 24,9
						</td>
					</tr>
					<tr>
						<td>
							Sobrepeso
						</td>
						<td>
							entre 25,0 de 29,9
						</td>
					</tr>
					<tr>
						<td>
							Obesidade Grau I
						</td>
						<td>
							entre 30,0 e 34,9
						</td>
					</tr>
					<tr>
						<td>
							Obesidade Grau II
						</td>
						<td>
							entre 35,0 e 39,9
						</td>
					</tr>
					<tr>
						<td>
							Obesidade Grau III
						</td>
						<td>
							acima de 40,0
						</td>
					</tr>
				</table>
			</aside>

			</article>

		</section>





		<!-- section , articol , aside ,   -->

		</body>
</html>
