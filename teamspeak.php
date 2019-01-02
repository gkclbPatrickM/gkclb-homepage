<h1>Geek Club TeamSpeak Server</h1>
<p>Zur Kommunikation verwenden wir einen TeamSpeak 3 Server, welcher unter ts.gkclb.de erreichbar ist.</p>
<p>Datenschutz sowie die klare Abgrenzung der Benutzergruppen stand bei der
  Einrichtung des Teamspeak Servers im Vordergrund. Alle per Konfiguration zugänglichen
  Logging-Kategorien wurden deaktiviert. Darüber hinaus gibt es nur 4 Berechtigungsgruppen,
  welche im Folgenden erklärt werden.</p>
<h2>Berechtigungskonzept für Clients</h2>
<table width="100%">
  <tr><td><b>Gruppe</b></td><td><b>Beschreibung</b></td></tr>
  <tr><td><img src="gfx/tsrank_guest.png"/>&nbsp;guest</td><td>
    <ul>
      <li>Neuen Clients erhalten automatisch den Rang "guest".</li>
      <li>Clients mit diesem Rang können lediglich im Channel "Entrance" verweilen.</li>
      <li>Bitte schreibt einen "operator" oder "admin" an, um euch bekannt zu machen.</li>
    </ul>
  </td></tr>
  <tr><td><img src="gfx/tsrank_registered.png"/>&nbsp;registered</td><td>
    <ul>
      <li>Im Geek Club bekannte Clients erhalten den Rang "registered".</li>
      <li>Der Rang "registered" kann von Clients mit den Rängen "operator" oder "admin" vergeben werden.</li>
    </ul>
  </td></tr>
  <tr><td><img src="gfx/tsrank_operator.png"/>&nbsp;operator</td><td>
    <ul>
      <li>Clients mit dem Rang "operator" können Clients mit dem Rang "guest" auf "registered" umstellen.</li>
      <li>Ein "operator" übernimmt hat Zugriff auf das Berechtigungssystem, sowie auf die Funktionen "kick" und "ban".</li>
    </ul>
  </td></tr>
  <tr><td><img src="gfx/tsrank_admin.png"/>&nbsp;admin</td><td>
    <ul>
      <li>Clients mit dem Rang "admin" haben vollen Zugriff auf den TeamSpeak Server (das Berechtigungssystem, die Channelstruktur, sowie alle sonstigen administrativen Funktionen)</li>
    </ul>
  </td></tr>
</table>

<h2>Berechtigungskonzept für Bots</h2>
<table width="100%">
  <tr><td><b>Gruppe</b></td><td><b>Beschreibung</b></td></tr>
  <tr><td><img src="gfx/tsrank_scriptbot.png"/>&nbsp;bot</td><td>
    <ul>
      <li>Clients des Rangs "bot" sind Radio Bots oder Message Bots.</li>
      <li>Clients dieses Rangs haben keine Berechtigungen, abgesehen von Join-Berechtigung permanenter Channel.</li>
    </ul>
  </td></tr>
</table>
