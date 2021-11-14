<html>
	<head>
		<title>Royal Games</title>
		<link href="favicon.ico" rel="shortcut icon"></link>
		<script src="javascripts/jquery-1.js"></script>
		<script src="javascripts/jquery-migrate-1.js"></script>
		<link rel="stylesheet" href="stylesheets/bootstrap.css"></link>
		<link rel="stylesheet" href="stylesheets/bootstrap-theme.css"></link>
		<script src="javascripts/bootstrap.min.js"></script>
		<link href="http://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic" rel="stylesheet" type="text/css"></link>
		<link href="stylesheets/royalgames.css" rel="stylesheet"></link>
		<script src="javascripts/angular.min.js"></script>
			<script src="javascripts/app.js"></script>
			<script src="javascripts/controllers/MembriController.js"></script>
			<script src="javascripts/controllers/GamesController.js"></script>
			<script src="javascripts/controllers/FondiController.js"></script>
			<script src="javascripts/controllers/NewsController.js"></script>
		<script src="javascripts/hide.js"></script>
		<script src="vote.js"></script>
	</head>
	<body ng-app="royal">
		<nav class="navbar navbar-royalgames">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#coso">
						<span>Menù</span>
					</button>
				  <a class="navbar-brand" href=# onclick="show(&quot;#main&quot;)">Royal Games</a>
				</div>
				<div class="collapse navbar-collapse" id="coso">
					<ul class="nav navbar-nav">
						<li><a href=# onclick="show(&quot;#chisiamo&quot;)">Chi siamo</a></li>
						<li><a href=# onclick="show(&quot;#membri&quot;)">Membri</a></li>
						<!--li><a href=# onclick="show(&quot;#giochi&quot;)">Giochi</a></li-->
						<!--li><a href=# onclick="show(&quot;#recensioni&quot;)">Recensioni</a></li-->
                        <li><a href=# onclick="show(&quot;#votazioni&quot;)"><!--span class="glyphicon glyphicon-exclamation-sign importante nonvotato"></span>&nbsp;-->Votazioni</a></li>
						<li><a href=# onclick="show(&quot;#fondi&quot;)">Fondi</a></li>
						<li><a href="http://steamcommunity.com/groups/royalgamescastle">Steam</a></li>
						<li><a href="https://www.youtube.com/user/TheAdventurousRoyals">Video</a></li>	
					</ul>
				</div>
			</div>
		</nav>
		<div class="jumbotron jumbotron-royalgames">
			<div class="container">
				<h1 class="text-center">
					Royal Games
				</h1>
				<center>"<span id="citazioni"></span>"</center>
				<script src="javascripts/citazioni.js"></script>
			</div>
		</div>
		<div class="container">
			<div id="main" class="gruppo" ng-controller="NewsController">
				<p>
					Benvenuto al sito web della Royal Games, la community di gamers!
					Clicca uno dei tasti in cima alla pagina per navigare il sito!
				<p>
				<div class="row">
					<div class="col-md-6">
						<h3>
							Notizie
						</h3>
						<div>
							<div ng-repeat="news in list" class="voto">
								<div class="row news">
									<div class="col-xs-1 time text-right">
										{{news.time | date}}
									</div>
									<div class="col-xs-11" ng-if="news.text">
										{{news.text}}
									</div>
									<div class="col-xs-7" ng-if="news.voto">
										<b>Votazione terminata:</b> {{news.voto}}
									</div>
									<div class="col-xs-2 newssi" ng-if="news.voto">
										<span class="glyphicon glyphicon-ok"></span>&nbsp;{{news.si}}
									</div>
									<div class="col-xs-2 newsno" ng-if="news.voto">
										<span class="glyphicon glyphicon-remove"></span>&nbsp;{{news.no}}
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<h3>
							Eventi
						</h3>
						<div>
							<a ng-repeat="event in events" href="{{event.link}}">
								<div class="voto">
									<div class="row news">
										<div class="col-xs-1 time text-right">
											{{event.time | date}}
										</div>
										<div class="col-xs-11" ng-if="event.text">
											{{event.text}}
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div id="chisiamo" class="gruppo">
				<h2>
					Chi siamo?
				</h2>
				<p>
					La Royal Games è una community di gamers di tutte le età basata sull'aiuto reciproco.
					E' stata fondata da Steffo circa nel 2007 insieme a dei suoi amici.
					Giochiamo da soli o in gruppo, e facciamo tante cose insieme.
					Molto spesso siamo online su Mumble, un programma per poter parlare tramite internet.
					Ci divertiamo giocando insieme, e anche se a volte litighiamo o flamiamo, il giorno dopo sarà come se non fosse mai successo niente...
				</p>
				<h3>
					Come diventare membri
				</h3>
				<p>
					Ci sono due modi per diventare membri:
				</p>
				<div class="row">
					<div class="col-xs-6">
						<h4>
							Tramite invito
						</h4>
						<p>
							Puoi essere invitato ufficialmente alla Royal Games dal Consiglio.
							In questo caso, non ci sarà bisogno di nessuna votazione.
						</p>
					</div>
					<div class="col-xs-6">
						<h4>
							Tramite richiesta
						</h4>
						<p>
							Puoi richiedere l'ammissione al gruppo <a href="mailto:royalgamesofthecastle@gmail.com?subject=Richiesta%20di%20ammissione">mandandoci una mail</a> o mandando un messaggio a uno dei nostri membri.
							In seguito, avrà luogo una votazione a cui parteciperanno tutti i membri appartenenti al gruppo da più di due settimane.
						</p>
					</div>
				</div>
				<h3>
					Come iniziare
				</h3>
				<p>
					Per iniziare, scarica questi programmi:
				</p>
				<div class="row">
					<div class="col-md-4">
						<h4>
							Steam
						</h4>
						<p>
							Steam è un programma necessario per acquistare e giocare alla maggior parte dei giochi per PC.
						</p>
						<p>
							<a class="btn btn-default wt" href="http://store.steampowered.com/about/" target="_blank" onMouseOver="$(this).tooltip()" title="Scarica"><span class="glyphicon glyphicon-download-alt"></span></a>
						</p>
					</div>
					<div class="col-md-4">
						<h4>
							Mumble
						</h4>
						<p>
							Mumble è un programma per il <abbr title="Voice over IP" class="initialism">VoIP</abbr> usato dai membri della community per parlare tra di loro.
						</p>
						<p>
							Puoi connetterti al nostro server cliccando <a href="mumble://royalgames.ddns.net?title=Royal%20Games&version=1.2.0">qui</a> oppure <a href="https://dl.dropboxusercontent.com/u/23313381/mumble.png">aggiungendo il server ai preferiti</a>.
						</p>
						<p>
							<a class="btn btn-default wt" href="http://wiki.mumble.info/wiki/Main_Page" target="_blank" onMouseOver="$(this).tooltip()" title="Scarica"><span class="glyphicon glyphicon-download-alt"></span></a>
						</p>
					</div>
					<div class="col-md-4">
						<h4>
							Telegram
						</h4>
						<p>
							Telegram è un programma per l'invio di messaggi, foto, video, audio e altri file a un gruppo di massimo 199 persone. E' disponibile anche su cellulare <small>e a differenza di un altro popolare programma per la chat online, è gratuito!</small>
						</p>
						<p>
							Clicca <a href="tg://join?invite=0180061f0020ac8a2819ea0bcde51b52">qui</a> per unirti al nostro gruppo!
						</p>
						<p>
							<a class="btn btn-default wt" href="https://telegram.org/" target="_blank" onMouseOver="$(this).tooltip()" title="Scarica"><span class="glyphicon glyphicon-download-alt"></span></a>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h4>
							TeamViewer
						</h4>
						<p>
							Se hai dei problemi con il tuo PC, puoi farti aiutare da un altro membro con questo programma per il controllo remoto del PC.
						</p>
						<p>
							<a class="btn btn-default wt" href="http://download.teamviewer.com/download/TeamViewer_Setup_it.exe" target="_blank" onMouseOver="$(this).tooltip()" title="Scarica"><span class="glyphicon glyphicon-download-alt"></span></a>
						</p>
					</div>
					<div class="col-md-4">
						<h4>
							Dropbox
						</h4>
						<p>
							Se vuoi condividere velocemente molti file con gli altri membri del gruppo, scarica questo programma e chiedi a Steffo di farti aggiungere nella cartella condivisa.
						</p>
						<p>
							<a class="btn btn-default wt" href="https://www.dropbox.com/home" target="_blank" onMouseOver="$(this).tooltip()" title="Scarica"><span class="glyphicon glyphicon-download-alt"></span></a>
						</p>
					</div>
					<div class="col-md-4">
						<h4>
							QBitTorrent
						</h4>
						<p>
							Abbiamo molti giochi disponibili per il download gratuito! Per scaricarli più in fretta, scarica questo programma di condivisione file <abbr title="Peer to Peer" class="initialism">P2P</abbr>.
						</p>
						<p>
							<a class="btn btn-default wt" href="http://www.qbittorrent.org/download.php" target="_blank" onMouseOver="$(this).tooltip()" title="Scarica"><span class="glyphicon glyphicon-download-alt"></span></a>
						</p>
					</div>
				</div>
			</div>
			<div id="membri" class="gruppo" ng-controller="MembriController">
				<h2>
					Membri
				</h2>
				<div class="row row-membri" ng-repeat="array in membri">
					<div class="col-md-4" ng-repeat="membro in array track by $index">
						<img class="profile" ng-src="https://dl.dropboxusercontent.com/u/23313381/logo/Personali/{{ membro.icon }}.png"></img>
						<h3>
							{{ membro.name }}
						</h3>
						<p>
							{{ membro.desc }}
						</p>
						<p>
							<a class="btn btn-default wt" href="http://steamcommunity.com/profiles/{{membro.steamid}}" ng-hide="!membro.steamid" target="_blank" onMouseOver="$(this).tooltip()" title="Visualizza profilo"><span class="glyphicon glyphicon-user"></span></a>
							<a class="btn btn-default wt" href="steam://friends/add/{{membro.steamid}}" ng-hide="!membro.steamid" onMouseOver="$(this).tooltip()" title="Aggiungi agli amici"><span class="glyphicon glyphicon-heart"></span></a>
							<a class="btn btn-default wt" href="tg://resolve?domain={{membro.telegram}}" ng-hide="!membro.telegram" onMouseOver="$(this).tooltip()" title="Invia un messaggio su Telegram"><span class="glyphicon glyphicon-envelope"></span></a>
							<a class="btn btn-default wt" href="http://steamcommunity.com/profiles/{{membro.steamid}}/inventory/" ng-hide="!membro.steamid" target="_blank" onMouseOver="$(this).tooltip()" title="Inventario"><span class="glyphicon glyphicon-th"></span></a>
							<a class="btn btn-default wt" href="{{membro.steamtrade}}" ng-hide="!membro.steamtrade" target="_blank" onMouseOver="$(this).tooltip()" title="Offri uno scambio"><span class="glyphicon glyphicon-transfer"></span></a>
						</p>
						<div ng-hide="!membro.csgo">
							<h4>
								Counter-Strike: Global Offensive
							</h4>
							<div class="row" ng-hide="!membro.csgo">
								<div class="col-xs-10">
									<img class="csgorank" ng-hide="!membro.csgo.rank" ng-src="https://dl.dropboxusercontent.com/u/23313381/CSGORanks/{{membro.csgo.rank}}.png"></img>
									<span ng-hide="!membro.csgo.rank">{{ membro.csgo.rank }}</span>
								</div>
								<div class="col-xs-2">
									<a href="http://csgo-stats.com/{{membro.steamid}}"><span class="glyphicon glyphicon-info-sign"></span></a>
								</div>
							</div>
						</div>
						<div ng-hide="!membro.dota">
							<h4>
								Dota 2
							</h4>
							<div class="row" ng-hide="!membro.dota">
								<div class="col-xs-5">
									<span ng-hide="!membro.dota.solo"><span class="badge dotammr">{{ membro.dota.solo }}</span> MMR da solo</span>
									<!--span ng-hide="membro.dota.solo"><span class="badge dotammr-unranked">N/A</span> MMR da solo</span-->
								</div>
								<div class="col-xs-5">
									<span ng-hide="!membro.dota.party"><span class="badge dotammr">{{ membro.dota.party }}</span> MMR gruppo</span>
									<!--span ng-hide="membro.dota.party"><span class="badge dotammr-unranked">N/A</span> MMR gruppo</span-->
								</div>
								<div class="col-xs-2">
									<a href="http://www.dotabuff.com/players/{{membro.steamid}}"><span class="glyphicon glyphicon-info-sign"></span></a>
								</div>
							</div>
						</div>
						<div ng-hide="!membro.hs">
							<h4>
								Hearthstone
							</h4>
							<img class="hsrank" ng-src="https://dl.dropboxusercontent.com/u/23313381/HearthstoneRanks/{{membro.hs}}.png"></img>
							Grado {{ membro.hs }}
						</div>
						<div ng-hide="!membro.lol">
							<h4>
								League of Legends
							</h4>
							<div class="row">
								<div class="col-xs-10">
									<img class="lolrank" ng-src="https://dl.dropboxusercontent.com/u/23313381/LoLRanks/{{membro.lol.rank}}.png"></img>
									{{ membro.lol.rank }}
								</div>
								<div class="col-xs-2">
									<a href="http://www.lolking.net/summoner/euw/{{membro.lol.id}}"><span class="glyphicon glyphicon-info-sign"></span></a>
								</div>
							</div>
						</div>
						<div ng-hide="!membro.osu">
							<h4>
								Osu
							</h4>
							<div class="row">
								<div class="col-xs-2">
									<span ng-hide="!membro.osu.nrank"><span class="badge osupp">{{ membro.osu.nrank }}pp</span> Osu</span>
								</div>
								<div class="col-xs-2">
									<span ng-hide="!membro.osu.trank"><span class="badge osupp">{{ membro.osu.trank }}pp</span> Taiko</span>
								</div>
								<div class="col-xs-2">
									<span ng-hide="!membro.osu.crank"><span class="badge osupp">{{ membro.osu.crank }}pp</span> CtB</span>
								</div>
								<div class="col-xs-2">
									<span ng-hide="!membro.osu.brank"><span class="badge osupp">{{ membro.osu.brank }}pp</span> Mania</span>
								</div>
								<div class="col-xs-2">
								</div>
								<div class="col-xs-2">
									<a href="http://osu.ppy.sh/u/{{membro.osu.id}}"><span class="glyphicon glyphicon-user"></span></a>
								</div>
							</div>
						</div>
						<div ng-hide="!membro.starcraft">
							<h4>
								Starcraft 2
							</h4>
							<div class="row">
								<div class="col-xs-4">
									<span ng-hide="!membro.starcraft.terran"><span class="badge starcraft">Lv{{ membro.starcraft.terran }}</span> Terran</span>
								</div>
								<div class="col-xs-4">
									<span ng-hide="!membro.starcraft.zerg"><span class="badge starcraft">Lv{{ membro.starcraft.zerg }}</span> Zerg</span>
								</div>
								<div class="col-xs-4">
									<span ng-hide="!membro.starcraft.protoss"><span class="badge starcraft">Lv{{ membro.starcraft.protoss }}</span> Protoss</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<h6>
					Se sei un membro, puoi tenere aggiornate queste informazioni modificando il file MembriController.js su Dropbox!
				</h6>
			</div>
			<!--div id="giochi" class="gruppo" ng-controller="GamesController">
				<h1>
					Giochi
				</h1>
				<p>
					Giochiamo a giochi di ogni genere: abbiamo però un database di giochi "condivisi" a cui puoi avere accesso se sei un membro.
				</p>
				<div class="row" ng-repeat="array in giochi">
					<div class="col-md-4" ng-repeat="gioco in array track by $index">
						<h3>
							{{gioco.name}}
						</h3>
						<p>
							{{gioco.desc}}
						</p>
						<p>
							<a class="btn btn-default wt" href="{{gioco.dl}}" ng-hide="!gioco.dl" onMouseOver="$(this).tooltip()" title="Scarica"><span class="glyphicon glyphicon-download-alt"></span></a>
							<a class="btn btn-default wt" href="{{gioco.dlpass}}" ng-hide="!gioco.dlpass" onMouseOver="$(this).tooltip()" title="Scarica (chiave richiesta)"><span class="glyphicon glyphicon-cloud-download"></span></a>
							<a class="btn btn-default wt" href="{{gioco.dlmagnet}}" ng-hide="!gioco.dlmagnet" onMouseOver="$(this).tooltip()" title="Scarica tramite BitTorrent"><span class="glyphicon glyphicon-magnet"></span></a>
						</p>
					</div>
				</div>
				<h6>
					Se sei un membro, puoi aggiungere giochi a questo elenco modificando il file GamesController.js su Dropbox!
				</h6>
			</div-->
			<div id="votazioni" class="gruppo">
				<!--div>
					<h2>
						Votazioni in corso
					</h2>
					<p>
						Questo sito usa cookie dalla durata di 3 giorni per le votazioni. NON CANCELLATELI SE AVETE VOTATO E NON RIVOTATE SE LI AVETE CANCELLATI PERCHE' VI SCOPRO.
					</p>
					<div class="voto">
						<p>
							Aggiungere <a href="http://steamcommunity.com/profiles/76561198123018368/">un coso cattivissimo chiamato Benna2</a> alla Royal Games?
						</p>
						<p>
							Non è il Benna del Fermi, è un altro Benna amico di Sensei!
						</p>
						<p>
							Se non lo conoscete, forse sarebbe meglio parlargli prima di votare... ma fate come volete.
						</p>
						<button class="btn btn-votazione btn-votosi incorso" onClick="vota('si')">
							<span class="glyphicon glyphicon-ok"></span>&nbsp;
							<span id="voto-si">
								<-?php
									$file = file_get_contents("si.json");
									echo $file;
								?>
							</span>
						</button>
						<button class="btn btn-votazione btn-votono incorso" onClick="vota('no')">
							<span class="glyphicon glyphicon-remove"></span>&nbsp;
							<span id="voto-no">
								<-?php
									$file = file_get_contents("no.json");
									echo $file;
								?>
							</span>
						</button>
						<script>
							if(document.cookie.indexOf("bennatre") >= 0)
							{
								cookie();
							}
						</script>
					</div>
				</div-->
				<div>
					<h2>
						Votazioni concluse
					</h2>
					<div class="voto">
						<p>
							Mettere come requisito per entrare in Royal Games avere finito la quinta elementare?
						</p>
						<button class="btn btn-votazione btn-votosi disabled">
							<span class="glyphicon glyphicon-ok"></span>&nbsp;
							3
						</button>
						<button class="btn btn-votazione btn-votono disabled">
							<span class="glyphicon glyphicon-remove"></span>&nbsp;
							0
						</button>
					</div>
					<div class="voto">
						<p>
							Vorresti aggiungere <a href="http://steamcommunity.com/profiles/76561198154175301/">Alleanderl</a>, <a href="http://steamcommunity.com/profiles/76561198131868211/">Boni</a> e <a href="#">MrDima</a> alla Royal Games?
						</p>
						<button class="btn btn-votazione btn-votosi disabled">
							<span class="glyphicon glyphicon-ok"></span>&nbsp;
							6
						</button>
						<button class="btn btn-votazione btn-votono disabled">
							<span class="glyphicon glyphicon-remove"></span>&nbsp;
							0
						</button>
					</div>
					<div class="voto">
						<p>
							Vorresti aggiungere <a href="http://steamcommunity.com/id/iEmax/">iEmax</a> alla Royal Games?
						</p>
						<button class="btn btn-votazione btn-votosi disabled">
							<span class="glyphicon glyphicon-ok"></span>&nbsp;
							6
						</button>
						<button class="btn btn-votazione btn-votono disabled">
							<span class="glyphicon glyphicon-remove"></span>&nbsp;
							1
						</button>
					</div>
					<div class="voto">
						<p>
							Vorresti aggiungere <a href="http://steamcommunity.com/profiles/76561198089120441">Saitorlock</a> alla Royal Games?
						</p>
						<button class="btn btn-votazione btn-votosi disabled">
							<span class="glyphicon glyphicon-ok"></span>&nbsp;
							6
						</button>
						<button class="btn btn-votazione btn-votono disabled">
							<span class="glyphicon glyphicon-remove"></span>&nbsp;
							4
						</button>
					</div>
					<div class="voto">
						<p>
							Modificare la descrizione della Royal Games aggiungendo <i>basata sull'aiuto reciproco</i>?
						</p>
						<button class="btn btn-votazione btn-votosi disabled">
							<span class="glyphicon glyphicon-ok"></span>&nbsp;
							7
						</button>
						<button class="btn btn-votazione btn-votono disabled">
							<span class="glyphicon glyphicon-remove"></span>&nbsp;
							3
						</button>
					</div>
					<div class="voto">
						<p>
							Permettere link NSFW sulla chat di Telegram?
						</p>
						<button class="btn btn-votazione btn-votosi disabled">
							<span class="glyphicon glyphicon-ok"></span>&nbsp;
							8
						</button>
						<button class="btn btn-votazione btn-votono disabled">
							<span class="glyphicon glyphicon-remove"></span>&nbsp;
							2
						</button>
					</div>
				</div>
			</div>
			<!--div id="recensioni" class="gruppo">
				<h1>
					Recensioni [IN COSTRUZIONE]
				</h1>
				<div class="row">
					<div class="col-md-2">
						<a href="#goi-nemesis" data-toggle="collapse" class="thumbnail">
							<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/apps/209080/925b7c2a6b698144622bed4bd2d0086114df2fa9.jpg"></img>
						</a>
					</div>
				</div>
				<div id="goi-nemesis" class="collapse">
					<div class="voto">
						<p>
							Guns of Icarus online è un gioco creato da Muse entertainment, che gira sul collaudato Unity engine. Se visto di sfuggita il gioco può sembrare un normalissimo gioco in multiplayer, una specie di Puzzle Pirates con grafica nettamente migliorata, in cui due team, i blu e i rossi (viva l’originalità eh), si contendono la vittoria sparandosi a vicenda con cannoni montati sulle singole navi (o sarebbe meglio dire dirigibili?). Prima di addentrarci nelle profondità del gioco, forse è necessario contestualizzare il gameplay introducendo il mondo di gioco. Ci troviamo in un mondo SteamPunk, con tutte le conseguenze del caso (ad esempio ci saranno turbine a vapore, caldaie, boiler ecc.), e qui i dirigibili si combattono a colpi di razzi, mitragliatori, lanciafiamme e arpioni. L’equipaggio di ogni nave è composto da 4 persone, le quali possono avere diversi ruoli:
						</p>
						<ul>
							<li>Timoniere (di solito solo un giocatore ne fa le veci): sebbene tutti i componenti dell’equipaggio possano dirigere la nave (come stare al controllo dei cannoni o riparare la nave) il timoniere è il più qualificato a farlo. Può essere equipaggiato infatti con “strumenti” in grado di mettere il turbo ai motori o fare scendere la nave molto rapidamente. E’ la mansione più impegnativa, dato che il timoniere deve anche essere un’abile stratega.</li>
							<li>Ingegnere (almeno 2 giocatori): gli ingegneri possono spegnere incendi a bordo e riparare molto in fretta l’attrezzatura. Sono vitali affinché la nave possa rimanere in aria. Spesso possono svolgere le veci di vedette e “spottare” le navi avversarie per segnalarle al resto dell’equipaggio.</li>
							<li>Cannonieri (non sempre necessari): i cannonieri sono dotati di un vasto arsenale di colpi, che provocano effetti diversi all’impatto.</li>
						</ul>
						<p>
							Affinché questi elementi riescano ad operare in maniera decente è necessario un gruppo molto coeso e che faccia molto lavoro di squadra, quindi consiglio l’acquisto del 4-pack per regalarlo ad amici. Infatti il fulcro del gioco, al di fuori delle vittorie sta tutto nella community che, sebbene sia piccola, è a dir poco eccezionale, e nel “team work”.
							La grafica fa il suo dovere, anche se bisogna segnalare una notevole quantità di frame drop in certe situazioni. Anche la colonna sonora è carina. Inoltre il gioco non è affatto “shoppone”, visto che gli oggetti acquistabili non influenzano la perstazione in game (vedi le skin per armi di CS:GO).
							I modelli delle navi sono davvero ben realizzati e contribuiscono a creare una bella atmosfera.
						</p>
						<p>
							Se ne consiglio l’acquisto? Certamente.
						</p>
						<h4>
							Il Nemesis
						</h4>
					</div>
				</div>
			</div-->
			<div id="fondi" class="gruppo" ng-controller="FondiController">
				<h1>
					Fondi
				</h1>
				<h3>
					Progetti da realizzare
				</h3>
				<p>
					Se vuoi, puoi dare fondi a un progetto, contribuendo alla sua realizzazione.
					Se non ti interessa il progetto, non dare soldi!
				</p>
				<div ng-repeat="progetto in progetti">
					<h4>
						{{ progetto.name }}
					</h4>
					<p>
						{{ progetto.desc }}
					</p>
					<div class="row">
						<div class="col-xs-10">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: {{progetto.percentuale}}%;">
									{{ progetto.curr | currency : '€'}}
								</div>
							</div>
						</div>
						<div class="col-xs-2">
							{{ progetto.max | currency : '€' }}
						</div>
					</div>
				</div>
				<h6>
					Se sei un membro, puoi aggiungere nuovi progetti modificando il file FondiController.js su Dropbox!
				</h6>
			</div>
		</div>
	</body>
	<script>
		//Inizializza i tooltip.
		$(function () {
			$('.wt').tooltip()
		});
	</script>
</html>
