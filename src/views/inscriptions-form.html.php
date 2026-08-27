<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nouvelle inscription — École Primaire Al Amal</title>
<style>
  :root{
    --green: #1f6b4d;
    --green-dark: #17553d;
    --green-light: #e7f3ee;
    --amber: #d98a1f;
    --amber-light: #fdf1de;
    --text-dark: #1c2321;
    --text-mid: #5c6a66;
    --text-muted: #8a9591;
    --border: #e6e9e8;
    --bg: #f7f8f7;
    --white: #ffffff;
  }

  *{ box-sizing: border-box; }

  body{
    margin:0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    background: var(--bg);
    color: var(--text-dark);
  }

  .page{
    max-width: 1300px;
    margin: 0 auto;
    padding: 24px 32px 48px;
  }

  /* ---------- Bandeau vert d'en-tête ---------- */
  .header-banner{
    background: linear-gradient(135deg, var(--green), var(--green-dark));
    border-radius: 16px;
    padding: 24px 28px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    margin-bottom: 28px;
    color: var(--white);
  }
  .header-left{
    display:flex;
    align-items:center;
    gap: 16px;
  }
  .header-icon{
    width:48px;height:48px;
    border-radius: 10px;
    background: rgba(255,255,255,0.15);
    display:flex;align-items:center;justify-content:center;
    font-size: 22px;
    flex-shrink:0;
  }
  .header-eyebrow{
    font-size: 11px;
    font-weight:700;
    letter-spacing: 0.8px;
    opacity: 0.85;
    margin: 0 0 4px;
  }
  .header-title{
    font-size: 22px;
    font-weight: 800;
    margin: 0 0 4px;
  }
  .header-subtitle{
    font-size: 13px;
    opacity: 0.85;
    margin: 0;
  }
  .btn-retour{
    background: rgba(255,255,255,0.12);
    border: 1px solid rgba(255,255,255,0.3);
    color: var(--white);
    padding: 10px 18px;
    border-radius: 10px;
    font-size: 13.5px;
    font-weight: 600;
    cursor:pointer;
    white-space: nowrap;
  }

  /* ---------- Stepper ---------- */
  .stepper{
    display:flex;
    align-items:center;
    justify-content:center;
    margin: 8px 0 32px;
  }
  .step{
    display:flex;
    flex-direction:column;
    align-items:center;
    gap: 8px;
    position: relative;
  }
  .step-circle{
    width: 34px; height: 34px;
    border-radius: 50%;
    display:flex;align-items:center;justify-content:center;
    font-size: 13px;
    font-weight:700;
    background: var(--white);
    border: 2px solid var(--border);
    color: var(--text-muted);
    transition: all .2s ease;
  }
  .step.active .step-circle{
    background: var(--green);
    border-color: var(--green);
    color: var(--white);
  }
  .step.done .step-circle{
    background: var(--green);
    border-color: var(--green);
    color: var(--white);
  }
  .step-label{
    font-size: 12px;
    font-weight:600;
    color: var(--text-muted);
  }
  .step.active .step-label, .step.done .step-label{
    color: var(--green-dark);
  }
  .step-line{
    flex:1;
    height: 2px;
    background: var(--border);
    margin: 0 8px;
    min-width: 60px;
    max-width: 180px;
    align-self: flex-start;
    margin-top: 17px;
    transition: background .2s ease;
  }
  .step-line.done{ background: var(--green); }

  /* ---------- Carte du formulaire ---------- */
  .form-card{
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: 14px;
    padding: 28px 32px;
  }

  .form-step{ display:none; }
  .form-step.active{ display:block; }

  .section-header{
    display:flex;
    align-items:center;
    gap: 12px;
    margin-bottom: 20px;
  }
  .section-badge{
    width: 26px; height: 26px;
    border-radius: 50%;
    background: var(--green-light);
    color: var(--green-dark);
    font-size: 12px;
    font-weight:700;
    display:flex;align-items:center;justify-content:center;
    flex-shrink:0;
  }
  .section-title{
    font-size: 14.5px;
    font-weight:700;
    color: var(--text-dark);
  }
  .section-subtitle{
    font-size: 12px;
    color: var(--text-muted);
    margin-top: 1px;
  }

  .field-grid{
    display:grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-bottom: 24px;
  }
  .field label{
    display:block;
    font-size: 13px;
    font-weight:600;
    color: var(--text-dark);
    margin-bottom: 6px;
  }
  .field label .facultatif{
    font-weight: 400;
    color: var(--text-muted);
    font-size: 12px;
  }
  .field input, .field select{
    width:100%;
    padding: 11px 14px;
    border: 1px solid var(--border);
    border-radius: 10px;
    font-size: 14px;
    color: var(--text-dark);
    background: var(--white);
    font-family: inherit;
  }
  .field input:focus, .field select:focus{
    outline: none;
    border-color: var(--green);
  }

  hr.section-sep{
    border:none;
    border-top: 1px solid var(--border);
    margin: 24px 0;
  }

  /* ---------- Justificatifs ---------- */
  .docs-grid{
    display:grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    margin-bottom: 20px;
  }
  .doc-card{
    border: 1px solid var(--border);
    border-radius: 12px;
    padding: 16px 18px;
  }
  .doc-top{
    display:flex;
    align-items:flex-start;
    justify-content:space-between;
    gap: 10px;
  }
  .doc-info{
    display:flex;
    gap: 10px;
  }
  .doc-icon{
    width: 32px; height:32px;
    border-radius: 8px;
    background: var(--bg);
    display:flex;align-items:center;justify-content:center;
    font-size: 14px;
    flex-shrink:0;
  }
  .doc-name{
    font-size: 13.5px;
    font-weight:700;
    color: var(--text-dark);
  }
  .doc-desc{
    font-size: 11.5px;
    color: var(--text-muted);
    margin-top: 1px;
  }
  .doc-hint{
    font-size: 11px;
    color: var(--amber);
    font-weight:600;
    margin-top: 2px;
  }
  .badge-manquant{
    font-size: 11px;
    font-weight:700;
    color: var(--amber);
    background: var(--amber-light);
    padding: 4px 10px;
    border-radius: 20px;
    white-space:nowrap;
  }
  .btn-fichier{
    margin-top: 12px;
    background: var(--bg);
    border: 1px solid var(--border);
    color: var(--text-dark);
    padding: 8px 14px;
    border-radius: 8px;
    font-size: 12.5px;
    font-weight:600;
    cursor:pointer;
    display:inline-flex;
    align-items:center;
    gap: 6px;
  }

  .notice-amber{
    background: var(--amber-light);
    border-radius: 12px;
    padding: 14px 18px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap: 16px;
  }
  .notice-amber .notice-title{
    font-size: 13px;
    font-weight:700;
    color: #7a5311;
  }
  .notice-amber .notice-desc{
    font-size: 12px;
    color: #8a6a2c;
    margin-top: 2px;
  }
  .btn-notice{
    background: var(--white);
    border: 1px solid #ead9b3;
    color: #7a5311;
    padding: 9px 16px;
    border-radius: 8px;
    font-size: 12.5px;
    font-weight:600;
    white-space:nowrap;
    cursor:pointer;
  }

  .formats-note{
    font-size: 11.5px;
    color: var(--text-muted);
    margin-top: 16px;
  }

  /* ---------- Validation ---------- */
  .recap-card{
    border: 1px solid var(--border);
    border-radius: 12px;
    padding: 18px 20px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    margin-bottom: 20px;
  }
  .recap-eleve{
    display:flex;
    align-items:center;
    gap: 14px;
  }
  .recap-avatar{
    width: 44px; height:44px;
    border-radius: 50%;
    background: var(--green-light);
    color: var(--green-dark);
    display:flex;align-items:center;justify-content:center;
    font-weight:700;
    font-size: 13px;
  }
  .recap-nom{
    font-weight:700;
    font-size: 14.5px;
    color: var(--text-dark);
  }
  .recap-sub{
    font-size: 12px;
    color: var(--text-muted);
    margin-top: 2px;
  }
  .badge-preinscription{
    font-size: 11.5px;
    font-weight:700;
    color: var(--amber);
    background: var(--amber-light);
    padding: 5px 12px;
    border-radius: 20px;
    white-space:nowrap;
  }

  .recap-grid{
    display:grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    padding: 4px 0 20px;
    border-bottom: 1px solid var(--border);
    margin-bottom: 20px;
  }
  .recap-label{
    font-size: 11px;
    font-weight:700;
    letter-spacing: 0.4px;
    color: var(--text-muted);
    margin-bottom: 4px;
  }
  .recap-value{
    font-size: 14px;
    font-weight:600;
    color: var(--text-dark);
  }

  .notice-green{
    background: var(--green-light);
    border-radius: 10px;
    padding: 12px 16px;
    font-size: 13px;
    color: var(--green-dark);
    font-weight:600;
    display:flex;
    align-items:center;
    gap: 8px;
  }

  /* ---------- Pied du formulaire ---------- */
  .form-footer{
    display:flex;
    align-items:center;
    justify-content:space-between;
    margin-top: 28px;
    padding-top: 20px;
    border-top: 1px solid var(--border);
  }
  .footer-left, .footer-right{
    display:flex;
    align-items:center;
    gap: 20px;
  }
  .btn-lien{
    background:none;
    border:none;
    color: var(--text-mid);
    font-size: 13.5px;
    font-weight:600;
    cursor:pointer;
    padding: 8px 4px;
  }
  .btn-lien:disabled{
    opacity: 0.4;
    cursor: default;
  }
  .btn-annuler{
    background:none;
    border:none;
    color: var(--text-mid);
    font-size: 13.5px;
    font-weight:600;
    cursor:pointer;
  }
  .btn-suite{
    background: var(--green);
    color: var(--white);
    border:none;
    padding: 12px 22px;
    border-radius: 10px;
    font-size: 14px;
    font-weight:700;
    cursor:pointer;
    display:flex;
    align-items:center;
    gap: 8px;
  }
  .btn-suite:hover{ background: var(--green-dark); }

  @media (max-width: 800px){
    .field-grid, .docs-grid, .recap-grid{ grid-template-columns: 1fr; }
    .step-label{ display:none; }
    .form-card{ padding: 20px; }
  }
</style>
</head>
<body>

<div class="page">

  <div class="header-banner">
    <div class="header-left">
      <div class="header-icon">🎓</div>
      <div>
        <p class="header-eyebrow">SCOLARITÉ · DOSSIER ÉLÈVE</p>
        <h1 class="header-title">Nouvelle inscription</h1>
        <p class="header-subtitle">Complétez les informations obligatoires puis validez le dossier.</p>
      </div>
    </div>
    <button class="btn-retour">‹ Retour aux élèves</button>
  </div>

  <div class="stepper" id="stepper">
    <div class="step active" data-step="1">
      <div class="step-circle">1</div>
      <div class="step-label">Élève</div>
    </div>
    <div class="step-line" data-line="1"></div>
    <div class="step" data-step="2">
      <div class="step-circle">2</div>
      <div class="step-label">Responsable</div>
    </div>
    <div class="step-line" data-line="2"></div>
    <div class="step" data-step="3">
      <div class="step-circle">3</div>
      <div class="step-label">Justificatifs</div>
    </div>
    <div class="step-line" data-line="3"></div>
    <div class="step" data-step="4">
      <div class="step-circle">4</div>
      <div class="step-label">Validation</div>
    </div>
  </div>

  <form class="form-card" id="formInscription">

    <!-- ÉTAPE 1 : ÉLÈVE -->
    <div class="form-step active" data-form-step="1">
      <div class="section-header">
        <div class="section-badge">1</div>
        <div>
          <div class="section-title">Identité de l'élève</div>
          <div class="section-subtitle">Informations d'état civil</div>
        </div>
      </div>

      <div class="field-grid">
        <div class="field">
          <label>Prénom</label>
          <input type="text" name="eleve_prenom" required>
        </div>
        <div class="field">
          <label>Nom</label>
          <input type="text" name="eleve_nom" required>
        </div>
        <div class="field">
          <label>Sexe</label>
          <select name="eleve_sexe">
            <option value="F">Féminin</option>
            <option value="M">Masculin</option>
          </select>
        </div>
        <div class="field">
          <label>Date de naissance</label>
          <input type="date" name="eleve_date_naissance">
        </div>
        <div class="field">
          <label>Lieu de naissance</label>
          <input type="text" name="eleve_lieu_naissance">
        </div>
      </div>

      <hr class="section-sep">

      <div class="section-header">
        <div class="section-badge">2</div>
        <div>
          <div class="section-title">Affectation scolaire</div>
          <div class="section-subtitle">Établissement, niveau et classe</div>
        </div>
      </div>

      <div class="field-grid">
        <div class="field">
          <label>Établissement</label>
          <select name="etablissement_id">
            <option>CEM Al Amal</option>
          </select>
        </div>
        <div class="field">
          <label>Niveau</label>
          <select name="niveau">
            <option>6ème</option>
            <option>5ème</option>
            <option>4ème</option>
            <option>3ème</option>
          </select>
        </div>
        <div class="field">
          <label>Classe <span class="facultatif">(facultatif)</span></label>
          <select name="classe_id">
            <option value="">Non affecté pour le moment</option>
          </select>
        </div>
      </div>
    </div>

    <!-- ÉTAPE 2 : RESPONSABLE -->
    <div class="form-step" data-form-step="2">
      <div class="section-header">
        <div class="section-badge">2</div>
        <div>
          <div class="section-title">Responsable légal</div>
          <div class="section-subtitle">Contact et prise en charge</div>
        </div>
      </div>

      <div class="field-grid">
        <div class="field">
          <label>Nom complet</label>
          <input type="text" name="responsable_nom_complet" required>
        </div>
        <div class="field">
          <label>Téléphone</label>
          <input type="tel" name="responsable_telephone" placeholder="+221 77 000 00 00" required>
        </div>
        <div class="field">
          <label>Email <span class="facultatif">(facultatif)</span></label>
          <input type="email" name="responsable_email">
        </div>
        <div class="field">
          <label>Adresse <span class="facultatif">(facultatif)</span></label>
          <input type="text" name="responsable_adresse">
        </div>
        <div class="field">
          <label>Bourse</label>
          <select name="bourse">
            <option>Aucune</option>
            <option>Partielle</option>
            <option>Totale</option>
          </select>
        </div>
      </div>
    </div>

    <!-- ÉTAPE 3 : JUSTIFICATIFS -->
    <div class="form-step" data-form-step="3">
      <div class="section-header">
        <div class="section-badge">3</div>
        <div>
          <div class="section-title">Pièces justificatives</div>
          <div class="section-subtitle">Ajoutez les documents disponibles au dossier de l'apprenant</div>
        </div>
      </div>

      <div class="docs-grid">
        <div class="doc-card">
          <div class="doc-top">
            <div class="doc-info">
              <div class="doc-icon">📄</div>
              <div>
                <div class="doc-name">Extrait de naissance</div>
                <div class="doc-desc">Copie lisible du document</div>
                <div class="doc-hint">À fournir plus tard</div>
              </div>
            </div>
            <span class="badge-manquant">● Manquant</span>
          </div>
          <button type="button" class="btn-fichier">⭱ Choisir un fichier</button>
        </div>

        <div class="doc-card">
          <div class="doc-top">
            <div class="doc-info">
              <div class="doc-icon">📄</div>
              <div>
                <div class="doc-name">Certificat médical</div>
                <div class="doc-desc">Aptitude à la vie scolaire</div>
                <div class="doc-hint">À fournir plus tard</div>
              </div>
            </div>
            <span class="badge-manquant">● Manquant</span>
          </div>
          <button type="button" class="btn-fichier">⭱ Choisir un fichier</button>
        </div>

        <div class="doc-card">
          <div class="doc-top">
            <div class="doc-info">
              <div class="doc-icon">📄</div>
              <div>
                <div class="doc-name">Anciens bulletins</div>
                <div class="doc-desc">Dernière année fréquentée</div>
                <div class="doc-hint">À fournir plus tard</div>
              </div>
            </div>
            <span class="badge-manquant">● Manquant</span>
          </div>
          <button type="button" class="btn-fichier">⭱ Choisir un fichier</button>
        </div>

        <div class="doc-card">
          <div class="doc-top">
            <div class="doc-info">
              <div class="doc-icon">📄</div>
              <div>
                <div class="doc-name">Photos d'identité</div>
                <div class="doc-desc">Deux photos récentes ou un document regroupé</div>
                <div class="doc-hint">À fournir plus tard</div>
              </div>
            </div>
            <span class="badge-manquant">● Manquant</span>
          </div>
          <button type="button" class="btn-fichier">⭱ Choisir un fichier</button>
        </div>
      </div>

      <div class="notice-amber">
        <div>
          <div class="notice-title">Vous n'avez pas encore toutes les pièces ?</div>
          <div class="notice-desc">Ce n'est pas bloquant. Les documents manquants resteront indiqués « À fournir » dans le dossier.</div>
        </div>
        <button type="button" class="btn-notice">⏱ Compléter plus tard</button>
      </div>

      <div class="formats-note">Formats acceptés : PDF, JPG ou PNG · 5 Mo maximum par fichier.</div>
    </div>

    <!-- ÉTAPE 4 : VALIDATION -->
    <div class="form-step" data-form-step="4">
      <div class="section-header">
        <div class="section-badge">4</div>
        <div>
          <div class="section-title">Vérification du dossier</div>
          <div class="section-subtitle">Contrôlez les informations avant l'envoi</div>
        </div>
      </div>

      <div class="recap-card">
        <div class="recap-eleve">
          <div class="recap-avatar" id="recapAvatar">--</div>
          <div>
            <div class="recap-nom" id="recapNom">—</div>
            <div class="recap-sub" id="recapEtablissement">—</div>
          </div>
        </div>
        <span class="badge-preinscription">● Préinscription</span>
      </div>

      <div class="recap-grid">
        <div>
          <div class="recap-label">NAISSANCE</div>
          <div class="recap-value" id="recapNaissance">—</div>
        </div>
        <div>
          <div class="recap-label">RESPONSABLE</div>
          <div class="recap-value" id="recapResponsable">—</div>
        </div>
        <div>
          <div class="recap-label">CLASSE</div>
          <div class="recap-value" id="recapClasse">—</div>
        </div>
        <div>
          <div class="recap-label">PIÈCES FOURNIES</div>
          <div class="recap-value">Aucune pour le moment — dossier à compléter plus tard</div>
        </div>
      </div>

      <div class="notice-green">✓ Le dossier sera créé « En étude ». Il devra être accepté avant l'encaissement des frais d'inscription.</div>
    </div>

    <!-- PIED DE FORMULAIRE -->
    <div class="form-footer">
      <div class="footer-left">
        <button type="button" class="btn-lien" id="btnPrecedent" disabled>‹ Précédent</button>
      </div>
      <div class="footer-right">
        <button type="button" class="btn-annuler">Annuler</button>
        <button type="button" class="btn-suite" id="btnSuite">Continuer →</button>
      </div>
    </div>

  </form>
</div>

<script>
  let etapeActuelle = 1;
  const nombreEtapes = 4;

  const btnPrecedent = document.getElementById('btnPrecedent');
  const btnSuite = document.getElementById('btnSuite');

  function afficherEtape(numero) {
    document.querySelectorAll('.form-step').forEach(el => {
      el.classList.toggle('active', el.dataset.formStep == numero);
    });

    document.querySelectorAll('.step').forEach(el => {
      const n = parseInt(el.dataset.step);
      el.classList.remove('active', 'done');
      if (n < numero) el.classList.add('done');
      if (n === numero) el.classList.add('active');
      if (n < numero) el.querySelector('.step-circle').textContent = '✓';
      else el.querySelector('.step-circle').textContent = n;
    });

    document.querySelectorAll('.step-line').forEach(el => {
      const n = parseInt(el.dataset.line);
      el.classList.toggle('done', n < numero);
    });

    btnPrecedent.disabled = (numero === 1);
    btnSuite.textContent = (numero === nombreEtapes) ? '✓ Créer le dossier' : 'Continuer →';

    if (numero === 4) {
      remplirRecapitulatif();
    }
  }

  function remplirRecapitulatif() {
    const form = document.getElementById('formInscription');
    const prenom = form.eleve_prenom.value || '';
    const nom = form.eleve_nom.value || '';
    const naissance = form.eleve_date_naissance.value || '—';
    const lieu = form.eleve_lieu_naissance.value || '';
    const responsableNom = form.responsable_nom_complet.value || '—';
    const responsableTel = form.responsable_telephone.value || '';
    const niveau = form.niveau.value || '';

    const initiales = ((prenom[0] || '') + (nom[0] || '')).toUpperCase();

    document.getElementById('recapAvatar').textContent = initiales || '--';
    document.getElementById('recapNom').textContent = (prenom + ' ' + nom).trim() || '—';
    document.getElementById('recapEtablissement').textContent = 'CEM Al Amal · ' + niveau;
    document.getElementById('recapNaissance').textContent = naissance + (lieu ? ' · ' + lieu : '');
    document.getElementById('recapResponsable').textContent = responsableNom + (responsableTel ? ' · ' + responsableTel : '');
    document.getElementById('recapClasse').textContent = form.classe_id.value || 'Non affecté';
  }

  btnSuite.addEventListener('click', () => {
    if (etapeActuelle < nombreEtapes) {
      etapeActuelle++;
      afficherEtape(etapeActuelle);
    } else {
      // Étape 4 : ici viendra la vraie soumission du formulaire (logique à voir ensuite)
      alert('Prochaine étape : brancher la vraie soumission vers le contrôleur PHP.');
    }
  });

  btnPrecedent.addEventListener('click', () => {
    if (etapeActuelle > 1) {
      etapeActuelle--;
      afficherEtape(etapeActuelle);
    }
  });
</script>

</body>
</html>