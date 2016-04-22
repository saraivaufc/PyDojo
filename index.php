<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
		</ol>

		<div class="carousel-inner">

			<div class="item active">
				<img src="static/img/banner_1.jpg" alt="First slide">
				<div class="container">
					<div class="carousel-caption">
					</div>
				</div>
			</div>

			<div class="item">
				<img src="static/img/grupo-pet.jpg" alt="Third slide">
				<div class="container">
					<div class="carousel-caption">
						<div class="box-text">
							<h1>Realização:</h1>
							<p>
								PET Tecnologia da Informação - Quixadá.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

	</div>
	<?php
		$send_email = $_GET['send_email'];
		if($send_email == 'TRUE'){
			?>
				<div class="alert alert-success">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Sucesso!</strong> Sua mensagem foi enviada!. :)
				</div>
			<?php
		}else if($send_email == 'FALSE'){
			?>
				<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Erro!</strong> Sua mensagem não pode ser enviada!, tente novamente mais tarde. :(
				</div>
			<?php
		}
	?>
	<div id="section-subscribe" class="text-center	">
		<a href="formulario_inscricao.php" class="btn btn-primary btn-lg">
			Inscreva-se aqui
		</a>
	</div>
	<div class="container-fluid">
	 	<div id="oevento" class="row featurette">
			<div class="container-fluid">
				<div class="col-md-6 section-img">
					<img class="featurette-image img-responsive" src="static/img/img_1.png">
				</div>
				<div class="col-md-6 section">
					<h2 class="">O que é?</h2>
					<p class="lead text-justify">
						O PyDojo é uma reunião entre desenvolvedores para aprimorar técnicas e metodologias de programação. Inspirado em fundamentos das artes marciais japonesas um dojo é um local de colaboração e não de competição, onde o principal objetivo é aprender. 
					</p>
				</div>
			</div>
		</div>

		<div id="programacao" class="row featurette">
			<div class="col-md-6 section">
				<h2 class="">Porque participar?</h2>
				<p class="lead text-justify">
					As reuniões permitem que programadores com diversos níveis de experiência possam interagir para melhorar habilidades técnicas e de socialização de maneira informal, além de promover o networking e compartilhamento de ideias entre os membros da equipe.
				</p>
			</div>
			<div class="col-md-6 section-img">
				<img class="featurette-image img-responsive" src="static/img/img_2.png">
			</div>
		</div>

		<div id="localizacao" class="row featurette">
			<div class="col-md-6 section-img">
				<img class="featurette-image img-responsive" src="static/img/img_3.png">
			
			</div>

			<div class="col-md-6 section">
				<h2 class="">Qual o objetivo?</h2>
				<p class="lead text-justify">
					O intuito de se realizar essas reuniões é a diversão. Desafiar programadores com novos problemas, enfim, buscar novas soluções. O PyDojo não é uma competição sobre quem resolve o problema mais rápido, ou qual solução é melhor implementada, mas sim que a solução seja criada atravéz do maior número de individuos possivéis, cada um criando uma pequena parte da solução.
				</p>
				<p class="lead text-justify">
					Obviamente o conhecimento obtido durante a reunião é utilizado pelos programadores nas tarefas de seu dia a dia, o que faz com que a qualidade do trabalho “real” produzido também aumente, de forma indireta, com a realização das reuniões.
				</p>
			</div>
		</div>

		<div id="premiacao" class="row featurette">
			<div class="col-md-6 section">
				<h2 class="">Qual linguagem será utilizada e quais são os problemas propostos?</h2>
				<p class="lead text-justify">
					No nosso PyDojo, utilizaremos a linguagem Python, uma linguagem simples de se usar, de muito alto nível, material para estudo em pt-br abrangente(<a href="http://turing.com.br/pydoc/2.7/tutorial/index.html" target="_blank">http://turing.com.br/pydoc/2.7/tutorial/index.html</a>) e bastante utilizada nos EUA para ensinar crianças a programar. Serão escolhidos problemas simples e que possibilite que sua solução possa ser fragmentada em vários pedaços, onde será buscado que cada pedaço seja desenvolvido por uma pessoa diferente.
				</p>
			</div>
			<div class="col-md-6 section-img">
				<img class="featurette-image img-responsive" src="static/img/img_4.png">
			</div>
		</div>

		<div id="regras" class="row featurette">
			<div class="col-md-12 section-img">
				<h2 class="">Como funciona?</h2>
				<ol class="lead text-justify">
				<li>
					Programação baseada em testes: Antes de ser escrito uma implementação de código é escrito um teste.  Se você não conhece ou não imagina como é testar um resultado de uma função que ainda não foi criada, o Dojo pode ser uma forma de você se iniciar nessa metodologia e ver quais as vantagens ou desvantagens dela.
				</li>
				<li>
					Passos de bebê: Quando um bebê está aprendendo a caminhar ele não arrisca dar passos grandes por aí. No Dojo acontece da mesma forma. O código vai saindo devagar, ajudando para que todos estejam entendendo o que está acontecendo e que rumo tudo está tomando. Sempre que alguém não estiver entendendo o que está acontecendo, esse tem o direito de perguntar e se encaixar nos trilhos novamente. 
				</li>
				<li>
					Programação em dupla: A programação é feita em dupla. Um piloto e um co-piloto. O piloto, obviamente, coloca a mão na massa, digitando e identando código e testes. O co-piloto palpita, ajuda olhando e apontando onde pode melhorar, o que está errado, etc. Quando esse piloto volta para a platéia após alguns minutos, o co-piloto se torna  piloto e alguém da platéia vem para ajudá-lo no papel de co-piloto. E assim segue.
				</li>
				<li>
					Fases: Quando piloto e co-piloto estão sem idéias de como resolver o problema, é liberado que a platéia interaja e opine a respeito do código. Para demais casos há  fases onde a platéia pode opinar ou não. Quem dita essas fases são os testes. Quando algum teste não estiver passando, não estiver  dando um resultado correto, a dupla deve se concentrar em corrigir isso. Nessa fase a platéia não deve opinar, a menos que seja pedido. Quando os testes estão passando e tudo está ok, é liberado que a platéia de opiniões e sugestões para o piloto e co-piloto.
				</li>
				</ol>
			</div>
		</div>

		<div id="realizacao" class="row featurette">
			<div class="col-md-6 section-img">
				<h2 class="">Qual o Dia e Horário?</h2>
				<p class="lead text-justify">
					As reuniões serão realizadas todas às sextas-feiras das 10 da manhá até o meio-dia. O local das reuniões será na Sala 1 do Bloco II. Sendo que talvez algum dia a reunião seja realizada em laboratório. 
				</p>
			</div>
			<div class="col-md-6 section">
				<img class="featurette-image img-responsive" src="static/img/img_5.png">
			</div>
		</div>

		<div id="apoio" class="row featurette">
			<div class="col-md-6 section-img">
				<h2 class="">O que preciso saber de programação?</h2>
				<p class="lead text-justify">
					Absolutamente nada de programação, apenas vontade de aprender. Agora caso você queira participar ativamente do PyDojo (sendo piloto ou co-piloto) você precisará saber o básico de python (variavéis, condições,laços de repetição e um pouco de funções).
				</p>
			</div>
			<div class="col-md-6 section">	
			</div>
		</div>

		<div id="localizacao" class="row featurette">
			<div class="col-md-6 section-img">
				<img class="featurette-image img-responsive" src="static/img/img_7.png">
			</div>

			<div class="col-md-6 section">
				<h2 class="">E se eu não souber nada de python?</h2>
				<p class="lead text-justify">
					Você pode ficar na platéia, a escolha de quem da platéia será escolhido para ir ser o co-piloto de uma seção se dará por manifesto próprio das pessoas, ou seja, caso você queira ajudar a resolver o problema, você pode se manifestar e na próxima seção você poderá se tornar piloto, caso contrario, você poderá aprender observando os outros a resolver o problema e talvez numa próxima seção sentir confiança e pedir para virar co-piloto. 
				</p>
			</div>
		</div>
		
		<div id="premiacao" class="row featurette">
			<div class="col-md-6 section">
				<h2 class="">Isso pode me ajudar nas minhas disciplinas de programação?</h2>
				<p class="lead text-justify">
					As reuniões buscam desenvolver a lógica de programação de uma maneira divertida e que os conhecimentos adquiridos por único indivíduo se reflita por todos os outros, sendo assim, enquanto você está aprendendo se divertindo, você também estará ensinando outra pessoa. Caso seu professor tenha passado um problema que você não conseguiu resolver e achou dificil, você poderá sugerir esse problema para ser atacado em uma reunião, você pode não ter conseguido resolve-lo sozinho, mas com ajuda de várias outras pessoas com certeza ele será resolvido e tanto você quanto as outras pessoas aprenderão muito com esse problema. 
				</p>
			</div>
			<div class="col-md-6 section-img">
				<img class="featurette-image img-responsive" src="static/img/img_8.png">
			</div>
		</div>

		<div id="realizacao" class="row featurette">
			<div class="col-md-6 section-img">
				<div class="row">
					<div class="col-md-4 section-img">
						<h2 class="">Realização:</h2>
					</div>
					<div class="col-md-8 section">
						<div class="container-fluid">
							<img class="featurette-image img-responsive" src="static/img/logo-pet-ti.jpg" alt="Generic placeholder image">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 section">
				<div class="row">
					<div class="col-md-4 section-img">
						<h2 class="">Apoio:</h2>
					</div>
					<div class="col-md-8 section">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6">
									<img class="featurette-image img-responsive" src="static/img/logo-ufc-quixada.png" alt="UFC Quixadá">
								</div>
								<div class='col-md-6'>
									<img class="featurette-image img-responsive" src="static/img/logo-ufc.jpg" alt="UFC">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>