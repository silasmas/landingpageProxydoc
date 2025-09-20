<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Support – ProxyDoc</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Support ProxyDoc : aide, contact, FAQ, tickets, statut du service.">
  <meta name="theme-color" content="#0ea5e9">
  <style>
    :root{--primary:#0ea5e9;--muted:#475569;--bg:#ffffff;--line:#e2e8f0}
    *{box-sizing:border-box}
    body{margin:0;font:16px/1.6 system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,"Helvetica Neue",Arial,sans-serif;color:#0f172a;background:var(--bg)}
    header{padding:36px 20px;background:linear-gradient(180deg,#e0f2fe,transparent)}
    main{max-width:1040px;margin:auto;padding:24px 20px}
    h1{font-size:clamp(28px,4vw,40px);margin:0 0 8px}
    h2{margin:28px 0 12px}
    p.muted,small.muted{color:var(--muted)}
    .row{display:grid;gap:16px}
    .grid-3{grid-template-columns:repeat(1,minmax(0,1fr))}
    .grid-2{grid-template-columns:repeat(1,minmax(0,1fr))}
    @media(min-width:680px){.grid-3{grid-template-columns:repeat(3,1fr)}.grid-2{grid-template-columns:repeat(2,1fr)}}
    .card{border:1px solid var(--line);border-radius:14px;padding:16px;background:#fff}
    .card h3{margin:0 0 6px;font-size:1.05rem}
    .card p{margin:.3rem 0}
    a{color:#0369a1;text-decoration:none}
    a:hover{text-decoration:underline}
    .badge{display:inline-block;background:#e0f2fe;color:#0369a1;padding:.2rem .45rem;border-radius:999px;font-size:.8rem}
    .kpis{display:grid;gap:12px;grid-template-columns:repeat(1,1fr)}
    @media(min-width:840px){.kpis{grid-template-columns:repeat(3,1fr)}}
    .kpi{border:1px solid var(--line);border-radius:12px;padding:14px;background:#fff}
    .kpi strong{display:block;font-size:1.1rem}
    .kpi span{color:var(--muted);font-size:.9rem}
    .section{margin-top:28px}
    .form{display:grid;gap:12px}
    .form .group{display:flex;flex-direction:column;gap:6px}
    .form label{font-weight:600}
    .form input,.form select,.form textarea{border:1px solid var(--line);border-radius:10px;padding:10px;font:inherit}
    .form textarea{min-height:130px;resize:vertical}
    .btn{display:inline-flex;align-items:center;gap:8px;background:var(--primary);color:#fff;border:none;border-radius:999px;padding:10px 16px;cursor:pointer}
    .btn:disabled{opacity:.6;cursor:not-allowed}
    .help{border-left:3px solid var(--line);padding-left:12px;color:var(--muted)}
    .table{width:100%;border-collapse:collapse}
    .table th,.table td{padding:10px;border-bottom:1px solid var(--line);text-align:left}
    footer{padding:24px 20px;border-top:1px solid var(--line);color:var(--muted)}
    .full{grid-column:1/-1}
  </style>
</head>
<body>
<header>
  <div class="badge">Support ProxyDoc</div>
  <h1>Besoin d’aide ?</h1>
  <p class="muted">Nous sommes là pour vous accompagner sur vos commandes, rendez-vous, paiements et comptes.</p>
</header>

<main>
  <!-- Cartes de contact rapide -->
  <section class="row grid-3">
    <article class="card">
      <h3>📧 E-mail</h3>
      <p>Écrivez-nous et recevez une réponse prioritaire.</p>
      <p><a href="mailto:contact@proxydoc.org" aria-label="Envoyer un e-mail au support">contact@proxydoc.org</a></p>
      <small class="muted">Heures ouvrées (Afrique/Kinshasa)</small>
    </article>

    <article class="card">
      <h3>💬 WhatsApp</h3>
      <p>Posez une question rapide ou suivez un dossier.</p>
      <p><a href="https://wa.me/+243823235255" target="_blank" rel="noopener">+243 823 235 255</a></p>
      <small class="muted">TODO : numéro officiel</small>
    </article>

    <article class="card">
      <h3>📞 Téléphone</h3>
      <p>Lun–Ven 09:00–18:00 (UTC+1)</p>
      <p><a href="tel:+243823235255">++243 823 235 255</a></p>
      <small class="muted">Appels au tarif local</small>
    </article>
  </section>

  <!-- Indicateurs -->
  <section class="section kpis">
    <div class="kpi">
      <strong>Horaires support</strong>
      <span>Lundi–Dimanche 24/7 (Afrique/Kinshasa, UTC+1)</span>
    </div>
    <div class="kpi">
      <strong>Délai de première réponse</strong>
      <span>≤ 1 jour ouvré (priorité : paiements/commandes)</span>
    </div>
    <div class="kpi">
      <strong>Statut du service</strong>
      <span><a href="mailto:contact@proxydoc.org">status.proxydoc.org</a> (TODO)</span>
    </div>
  </section>

  <!-- Formulaire ticket -->
  <section class="section card">
    <h2>Ouvrir un ticket</h2>
    <p class="help">Plus vous nous donnez de contexte, plus nous allons vite. Les champs marqués * sont requis.</p>
    <form class="form" action="mailto:contact@proxydoc.org" method="post" enctype="text/plain">
      <div class="row grid-2">
        <div class="group">
          <label for="name">Nom complet *</label>
          <input id="name" name="name" required autocomplete="name">
        </div>
        <div class="group">
          <label for="email">E-mail *</label>
          <input id="email" type="email" name="email" required autocomplete="email">
        </div>
      </div>

      <div class="row grid-2">
        <div class="group">
          <label for="phone">Téléphone</label>
          <input id="phone" name="phone" placeholder="+243…">
        </div>
        <div class="group">
          <label for="category">Catégorie *</label>
          <select id="category" name="category" required>
            <option value="">— Sélectionner —</option>
            <option>Commande / livraison</option>
            <option>Paiement (Mobile Money / carte)</option>
            <option>Compte / connexion</option>
            <option>Rendez-vous</option>
            <option>Données & confidentialité</option>
            <option>Autre</option>
          </select>
        </div>
      </div>

      <div class="row grid-2">
        <div class="group">
          <label for="ref">Référence (commande / transaction / RDV)</label>
          <input id="ref" name="reference" placeholder="Ex. ORD-123, TX-456…">
        </div>
        <div class="group">
          <label for="priority">Priorité *</label>
          <select id="priority" name="priority" required>
            <option value="">— Sélectionner —</option>
            <option>Élevée (bloquant)</option>
            <option>Normale</option>
            <option>Basse</option>
          </select>
        </div>
      </div>

      <div class="group">
        <label for="subject">Objet *</label>
        <input id="subject" name="subject" required>
      </div>

      <div class="group">
        <label for="message">Description détaillée *</label>
        <textarea id="message" name="message" required placeholder="Expliquez le contexte, ce que vous attendiez, ce qui s’est produit, les messages d’erreur éventuels…"></textarea>
      </div>

      <div class="row grid-2">
        <div class="group">
          <label for="attachment">Pièce jointe (capture, PDF…)</label>
          <input id="attachment" type="file" name="attachment">
        </div>
        <div class="group">
          <label>&nbsp;</label>
          <button class="btn" type="submit">Envoyer le ticket</button>
        </div>
      </div>

      <small class="muted">En envoyant ce formulaire, vous acceptez notre
        <a href="/politique-confidentialite.html">politique de confidentialité</a>.</small>
    </form>
  </section>

  <!-- FAQ rapide -->
  <section class="section">
    <h2>Questions fréquentes</h2>
    <div class="row grid-2">
      <div class="card">
        <h3>Un paiement est « en cours » depuis trop longtemps</h3>
        <ul>
          <li>Vérifiez votre réseau et le solde Mobile Money / carte.</li>
          <li>Consultez le <a href="mailto:contact@proxydoc.org">statut</a> du service (TODO).</li>
          <li>Fournissez la <strong>référence transaction</strong> dans un ticket.</li>
        </ul>
      </div>
      <div class="card">
        <h3>Commande validée mais produit indisponible</h3>
        <p>La pharmacie peut proposer une alternative, un avoir ou un remboursement. Ouvrez un ticket avec le numéro de commande pour accélérer le traitement.</p>
      </div>
      <div class="card">
        <h3>Je ne reçois pas les e-mails</h3>
        <ul>
          <li>Vérifiez les spams et l’adresse enregistrée.</li>
          <li>Ajoutez <code>contact@proxydoc.org</code> à vos contacts.</li>
        </ul>
      </div>
      <div class="card">
        <h3>Connexion impossible</h3>
        <ul>
          <li>Utilisez « Mot de passe oublié » pour réinitialiser.</li>
          <li>Essayez un autre navigateur ou videz le cache.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- SLA / Processus -->
  <section class="section card">
    <h2>Délais & priorités</h2>
    <table class="table" aria-describedby="sla-desc">
      <thead>
        <tr>
          <th>Priorité</th>
          <th>Exemples</th>
          <th>1ère réponse</th>
          <th>Résolution cible</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Élevée</td>
          <td>Paiement bloqué, commande urgente, incident majeur</td>
          <td>≤ 4 h ouvrées</td>
          <td>≤ 24 h ouvrées</td>
        </tr>
        <tr>
          <td>Normale</td>
          <td>Question produit, suivi commande, rendez-vous</td>
          <td>≤ 1 jour ouvré</td>
          <td>≤ 3 jours ouvrés</td>
        </tr>
        <tr>
          <td>Basse</td>
          <td>Suggestion, demande d’info générale</td>
          <td>≤ 2 jours ouvrés</td>
          <td>Selon complexité</td>
        </tr>
      </tbody>
    </table>
    <p id="sla-desc" class="muted">Les délais sont indicatifs et peuvent varier en fonction de la charge et des partenaires (pharmacies, passerelles de paiement).</p>
  </section>

  <!-- Liens utiles -->
  <section class="section row grid-3">
    <div class="card">
      <h3>📄 Conditions</h3>
      <p><a href="{{ route('terms') }}">Lire les Conditions d’utilisation</a></p>
    </div>
    <div class="card">
      <h3>🔒 Confidentialité</h3>
      <p><a href="{{ route('privacy-policy') }}">Lire la Politique de confidentialité</a></p>
    </div>
    <div class="card">
      <h3>🟢 Statut du service</h3>
      <p><a href="https://contact.proxydoc.org">status.proxydoc.org</a> (TODO)</p>
    </div>
  </section>
</main>

<footer>
  © <span id="y"></span> ProxyDoc — Support • Contact : <a href="mailto:contact@proxydoc.org">support@proxydoc.org</a>
</footer>
<script>
  document.getElementById('y').textContent = new Date().getFullYear();
</script>
</body>
</html>
