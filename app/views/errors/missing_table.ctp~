<h3>Narzędzie diagnostyczne Feniksa - zapraszam!</h3>

<h1>Witaj w Feniksie!</h1>

<p>Gratulacje! Jeszcze tylko kilka kroków, zanim Feniks będzie mógł rejestrować terminy oddawania projektów...</p>

<?php
/* Sprawdz polaczenie z baza danych */
$dbFail = false;
$filePresent = true;
if (!file_exists(CONFIGS.'database.php')):
  $filePresent = false;
  $dbFail = true;
endif;
if ($filePresent!=false):
  uses('model' . DS . 'connection_manager');
  $db = ConnectionManager::getInstance();
  @$connected = $db->getDataSource('default');
  if (!$connected->isConnected()):
    $dbFail = true;
  endif;
endif;
?>

<?php if ($dbFail): ?>
<h2>Połączenie z bazą danych</h2>
<p>Feniks nie może połączyć się z bazą danych</p>
<p>Aby dokończyć instalację aplikacji, proszę skonfigurować dostęp do bazy danych w pliku <b>app/config/database.php</b></p>

<pre>
<span style="font-weight: bold;color: #000000;">&lt;?php</span>
<span style="font-weight: bold;color: #000000;">class</span><span style="color: #000000;"> DATABASE_CONFIG {</span>

<span style="color: #000000;">	</span><span style="font-weight: bold;color: #000000;">var</span><span style="color: #000000;"> </span><span style="color: #5555ff;">$default</span><span style="color: #000000;"> = </span><span style="color: #000080;">array</span><span style="color: #000000;">(</span>
<span style="color: #000000;">		</span><span style="color: #dd0000;">'driver'</span><span style="color: #000000;"> =&gt; </span><span style="color: #dd0000;">'mysql'</span><span style="color: #000000;">,				</span><span style="font-style: italic;color: #808080;">// Silnik bazy danych</span>
<span style="color: #000000;">		</span><span style="color: #dd0000;">'persistent'</span><span style="color: #000000;"> =&gt; </span><span style="font-weight: bold;color: #000000;">false</span><span style="color: #000000;">,</span>
<span style="color: #000000;">		</span><span style="color: #dd0000;">'host'</span><span style="color: #000000;"> =&gt; </span><span style="color: #dd0000;">'localhost'</span><span style="color: #000000;">,			</span><span style="font-style: italic;color: #808080;">// Gdzie jest baza?</span>
<span style="color: #000000;">		</span><span style="color: #dd0000;">'login'</span><span style="color: #000000;"> =&gt; </span><span style="color: #dd0000;">'cakeuser'</span><span style="color: #000000;">,			</span><span style="font-style: italic;color: #808080;">// Nazwa użytkownika bazy danych</span>
<span style="color: #000000;">		</span><span style="color: #dd0000;">'password'</span><span style="color: #000000;"> =&gt; </span><span style="color: #dd0000;">'haslo_do_bazy'</span><span style="color: #000000;">,	</span><span style="font-style: italic;color: #808080;">// Hasło do bazy danych</span>
<span style="color: #000000;">		</span><span style="color: #dd0000;">'database'</span><span style="color: #000000;"> =&gt; </span><span style="color: #dd0000;">'cakeacl'</span><span style="color: #000000;">,		</span><span style="font-style: italic;color: #808080;">// Nazwa bazy danych</span>
<span style="color: #000000;">		</span><span style="color: #dd0000;">'prefix'</span><span style="color: #000000;"> =&gt; </span><span style="color: #dd0000;">''</span><span style="color: #000000;">,					</span><span style="font-style: italic;color: #808080;">// Pozostawić puste</span>
<span style="color: #000000;">		</span><span style="font-style: italic;color: #808080;">//'encoding' =&gt; 'utf8',</span>
<span style="color: #000000;">	);</span>

<span style="color: #000000;">	</span><span style="font-weight: bold;color: #000000;">var</span><span style="color: #000000;"> </span><span style="color: #5555ff;">$test</span><span style="color: #000000;"> = </span><span style="color: #000080;">array</span><span style="color: #000000;">(</span>
<span style="color: #000000;">		</span><span style="color: #dd0000;">'driver'</span><span style="color: #000000;"> =&gt; </span><span style="color: #dd0000;">'mysql'</span><span style="color: #000000;">,</span>
<span style="color: #000000;">		</span><span style="color: #dd0000;">'persistent'</span><span style="color: #000000;"> =&gt; </span><span style="font-weight: bold;color: #000000;">false</span><span style="color: #000000;">,</span>
<span style="color: #000000;">		</span><span style="color: #dd0000;">'host'</span><span style="color: #000000;"> =&gt; </span><span style="color: #dd0000;">'localhost'</span><span style="color: #000000;">,</span>
<span style="color: #000000;">		</span><span style="color: #dd0000;">'login'</span><span style="color: #000000;"> =&gt; </span><span style="color: #dd0000;">'user'</span><span style="color: #000000;">,</span>
<span style="color: #000000;">		</span><span style="color: #dd0000;">'password'</span><span style="color: #000000;"> =&gt; </span><span style="color: #dd0000;">'password'</span><span style="color: #000000;">,</span>
<span style="color: #000000;">		</span><span style="color: #dd0000;">'database'</span><span style="color: #000000;"> =&gt; </span><span style="color: #dd0000;">'test_database_name'</span><span style="color: #000000;">,</span>
<span style="color: #000000;">		</span><span style="color: #dd0000;">'prefix'</span><span style="color: #000000;"> =&gt; </span><span style="color: #dd0000;">''</span><span style="color: #000000;">,</span>
<span style="color: #000000;">		</span><span style="font-style: italic;color: #808080;">//'encoding' =&gt; 'utf8',</span>
<span style="color: #000000;">	);</span>
<span style="color: #000000;">}</span>
</pre>

<p>Upewnij się, że serwer SQL jest aktywny i obsługuje połączenia.</p>

<?php else: ?>
<h2>Feniks ma połączenie z bazą danych</h2>
<pre>Sukces! Połączenie z bazą danych jest skonfigurowane poprawnie!
Problem leży najprawdopodobniej w braku dostępu do odpowiednich tabel.</pre>
<?php endif ?>

<h2>Instlacja tabel</h2>
<p>Aby aplikacja mogła działać poprawnie, proszę wykonać następujące zapytania do parsera SQL na bazie danych, na której ma działać aplikacja.</p>

<pre>
<span style="font-weight: bold;color: #000000;">DROP</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">TABLE</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">IF</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">EXISTS</span><span style="color: #000000;"> `subscriptions`;</span>
<span style="font-weight: bold;color: #000000;">SET</span><span style="color: #000000;"> @saved_cs_client     = @@character_set_client;</span>
<span style="font-weight: bold;color: #000000;">SET</span><span style="color: #000000;"> character_set_client = utf8;</span>
<span style="font-weight: bold;color: #000000;">CREATE</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">TABLE</span><span style="color: #000000;"> `subscriptions` (</span>
<span style="color: #000000;">  `id` </span><span style="color: #800000;">int</span><span style="color: #000000;">(</span><span style="color: #0000ff;">10</span><span style="color: #000000;">) unsigned </span><span style="font-weight: bold;color: #000000;">NOT</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">NULL</span><span style="color: #000000;"> auto_increment,</span>
<span style="color: #000000;">  `title` </span><span style="color: #800000;">varchar</span><span style="color: #000000;">(</span><span style="color: #0000ff;">50</span><span style="color: #000000;">) </span><span style="font-weight: bold;color: #000000;">default</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">NULL</span><span style="color: #000000;">,</span>
<span style="color: #000000;">  `body` text,</span>
<span style="color: #000000;">  `created` datetime </span><span style="font-weight: bold;color: #000000;">default</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">NULL</span><span style="color: #000000;">,</span>
<span style="color: #000000;">  `modified` datetime </span><span style="font-weight: bold;color: #000000;">default</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">NULL</span><span style="color: #000000;">,</span>
<span style="color: #000000;">  `attendant` </span><span style="color: #800000;">varchar</span><span style="color: #000000;">(</span><span style="color: #0000ff;">128</span><span style="color: #000000;">) </span><span style="font-weight: bold;color: #000000;">default</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">NULL</span><span style="color: #000000;">,</span>
<span style="color: #000000;">  `attendantid` </span><span style="color: #800000;">int</span><span style="color: #000000;">(</span><span style="color: #0000ff;">4</span><span style="color: #000000;">) </span><span style="font-weight: bold;color: #000000;">default</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">NULL</span><span style="color: #000000;">,</span>
<span style="color: #000000;">  </span><span style="font-weight: bold;color: #000000;">PRIMARY</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">KEY</span><span style="color: #000000;">  (`id`)</span>
<span style="color: #000000;">) ENGINE=MyISAM AUTO_INCREMENT=</span><span style="color: #0000ff;">35</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">DEFAULT</span><span style="color: #000000;"> CHARSET=latin1;</span>
<span style="font-weight: bold;color: #000000;">SET</span><span style="color: #000000;"> character_set_client = @saved_cs_client;</span>
<!-- tego chyba nie trzeba...
<span style="font-weight: bold;color: #000000;">LOCK</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">TABLES</span><span style="color: #000000;"> `subscriptions` </span><span style="font-weight: bold;color: #000000;">WRITE</span><span style="color: #000000;">;</span>
<span style="font-weight: bold;color: #000000;">UNLOCK</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">TABLES</span><span style="color: #000000;">;</span>
-->

<span style="font-weight: bold;color: #000000;">DROP</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">TABLE</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">IF</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">EXISTS</span><span style="color: #000000;"> `users`;</span>
<span style="font-weight: bold;color: #000000;">SET</span><span style="color: #000000;"> @saved_cs_client     = @@character_set_client;</span>
<span style="font-weight: bold;color: #000000;">SET</span><span style="color: #000000;"> character_set_client = utf8;</span>
<span style="font-weight: bold;color: #000000;">CREATE</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">TABLE</span><span style="color: #000000;"> `users` (</span>
<span style="color: #000000;">  `id` </span><span style="color: #800000;">int</span><span style="color: #000000;">(</span><span style="color: #0000ff;">11</span><span style="color: #000000;">) </span><span style="font-weight: bold;color: #000000;">NOT</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">NULL</span><span style="color: #000000;"> auto_increment,</span>
<span style="color: #000000;">  `username` </span><span style="color: #800000;">char</span><span style="color: #000000;">(</span><span style="color: #0000ff;">50</span><span style="color: #000000;">) </span><span style="font-weight: bold;color: #000000;">default</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">NULL</span><span style="color: #000000;">,</span>
<span style="color: #000000;">  `password` </span><span style="color: #800000;">char</span><span style="color: #000000;">(</span><span style="color: #0000ff;">40</span><span style="color: #000000;">) </span><span style="font-weight: bold;color: #000000;">default</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">NULL</span><span style="color: #000000;">,</span>
<span style="color: #000000;">  `first_name` </span><span style="color: #800000;">varchar</span><span style="color: #000000;">(</span><span style="color: #0000ff;">32</span><span style="color: #000000;">) </span><span style="font-weight: bold;color: #000000;">default</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">NULL</span><span style="color: #000000;">,</span>
<span style="color: #000000;">  `last_name` </span><span style="color: #800000;">varchar</span><span style="color: #000000;">(</span><span style="color: #0000ff;">32</span><span style="color: #000000;">) </span><span style="font-weight: bold;color: #000000;">default</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">NULL</span><span style="color: #000000;">,</span>
<span style="color: #000000;">  `admin` </span><span style="color: #800000;">char</span><span style="color: #000000;">(</span><span style="color: #0000ff;">1</span><span style="color: #000000;">) </span><span style="font-weight: bold;color: #000000;">default</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">NULL</span><span style="color: #000000;">,</span>
<span style="color: #000000;">  `ticket` </span><span style="color: #800000;">varchar</span><span style="color: #000000;">(</span><span style="color: #0000ff;">20</span><span style="color: #000000;">) </span><span style="font-weight: bold;color: #000000;">default</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">NULL</span><span style="color: #000000;">,</span>
<span style="color: #000000;">  </span><span style="font-weight: bold;color: #000000;">PRIMARY</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">KEY</span><span style="color: #000000;">  (`id`)</span>
<span style="color: #000000;">) ENGINE=MyISAM AUTO_INCREMENT=</span><span style="color: #0000ff;">24</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">DEFAULT</span><span style="color: #000000;"> CHARSET=latin1;</span>
<span style="font-weight: bold;color: #000000;">SET</span><span style="color: #000000;"> character_set_client = @saved_cs_client;</span>

<span style="font-weight: bold;color: #000000;">LOCK</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">TABLES</span><span style="color: #000000;"> `users` </span><span style="font-weight: bold;color: #000000;">WRITE</span><span style="color: #000000;">;</span>
<span style="font-weight: bold;color: #000000;">INSERT</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">INTO</span><span style="color: #000000;"> `users` </span><span style="font-weight: bold;color: #000000;">VALUES</span><span style="color: #000000;"> (</span><span style="color: #0000ff;">1</span><span style="color: #000000;">,</span><span style="color: #dd0000;">'amrozek'</span><span style="color: #000000;">,</span><span style="color: #dd0000;">'78e1b9a9a351f10cb42f78690cba4867f0dc06f9'</span><span style="color: #000000;">,</span><span style="color: #dd0000;">'Adam'</span><span style="color: #000000;">,</span><span style="color: #dd0000;">'Mrozek'</span><span style="color: #000000;">,</span><span style="color: #dd0000;">'Y'</span><span style="color: #000000;">,</span><span style="color: #dd0000;">'bbb'</span><span style="color: #000000;">),(</span><span style="color: #0000ff;">2</span><span style="color: #000000;">,</span><span style="color: #dd0000;">'jkow'</span><span style="color: #000000;">,</span><span style="color: #dd0000;">'2745b9cf611f60db97c3ffdb0dfe7cee9962c93f'</span><span style="color: #000000;">,</span><span style="color: #dd0000;">'Jan'</span><span style="color: #000000;">,</span><span style="color: #dd0000;">'Kowalski'</span><span style="color: #000000;">,</span><span style="font-weight: bold;color: #000000;">NULL</span><span style="color: #000000;">,</span><span style="color: #dd0000;">'bbbe-3332'</span><span style="color: #000000;">),(</span><span style="color: #0000ff;">19</span><span style="color: #000000;">,</span><span style="color: #dd0000;">'robson'</span><span style="color: #000000;">,</span><span style="color: #dd0000;">'20a72da11f331fdb89c964aa189d52d16887c87e'</span><span style="color: #000000;">,</span><span style="color: #dd0000;">'Robert'</span><span style="color: #000000;">,</span><span style="color: #dd0000;">'Szczelina'</span><span style="color: #000000;">,</span><span style="color: #dd0000;">'Y'</span><span style="color: #000000;">,</span><span style="color: #dd0000;">'722c-862f'</span><span style="color: #000000;">);</span>
<span style="font-weight: bold;color: #000000;">UNLOCK</span><span style="color: #000000;"> </span><span style="font-weight: bold;color: #000000;">TABLES</span><span style="color: #000000;">;</span>

</pre>

<h2>Powodzenia!</h2>
<p>W razie problemów proszę skontaktować się z administratorem</p>
