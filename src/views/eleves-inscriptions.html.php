<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Élèves & inscriptions — École Primaire Al Amal</title>
<style>
  :root{
    --green: #1f6b4d;
    --green-dark: #17553d;
    --green-light: #e7f3ee;
    --purple-light: #efeafb;
    --purple: #7c5cf0;
    --blue-light: #e8f1fd;
    --blue: #2f7fe0;
    --amber-light: #fdf1e0;
    --amber: #d98a1f;
    --red: #c0392b;
    --red-bg: #fceceb;
    --amber-badge-bg: #fdf1de;
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

  .topbar{
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding: 14px 28px;
    background: var(--white);
    border-bottom: 1px solid var(--border);
  }
  .topbar-left{
    display:flex;
    align-items:center;
    gap:10px;
    font-weight:600;
    font-size: 14px;
    letter-spacing:0.3px;
    color: var(--text-dark);
  }
  .topbar-left .dot{
    width:10px;height:10px;border-radius:50%;
    background: var(--green);
    display:inline-block;
  }
  .topbar-right{
    display:flex;
    align-items:center;
    gap:16px;
  }
  .year-pill{
    display:flex;
    align-items:center;
    gap:6px;
    font-size:13px;
    color: var(--text-mid);
    background: var(--bg);
    border:1px solid var(--border);
    padding:6px 12px;
    border-radius:20px;
  }
  .year-pill .dot-sm{
    width:7px;height:7px;border-radius:50%;
    background: var(--green);
    display:inline-block;
  }
  .icon-btn{
    width:34px;height:34px;
    border-radius:50%;
    border:1px solid var(--border);
    background: var(--white);
    display:flex;align-items:center;justify-content:center;
    color: var(--text-mid);
    font-size:15px;
  }
  .user-chip{
    display:flex;
    align-items:center;
    gap:10px;
  }
  .avatar{
    width:34px;height:34px;
    border-radius:50%;
    background: var(--green);
    color:var(--white);
    display:flex;align-items:center;justify-content:center;
    font-size:12px;font-weight:700;
  }
  .user-meta{ line-height:1.3; }
  .user-meta .name{ font-size:13px; font-weight:700; color:var(--text-dark); }
  .user-meta .role{ font-size:11.5px; color:var(--text-muted); }

  .page{
    max-width: 1500px;
    margin: 0 auto;
    padding: 32px 32px 48px;
  }

  .eyebrow{
    font-size:12px;
    font-weight:700;
    letter-spacing:0.8px;
    color: var(--green);
    margin: 0 0 6px;
  }

  .page-header{
    display:flex;
    align-items:flex-start;
    justify-content:space-between;
    gap: 24px;
    margin-bottom: 28px;
  }
  .page-header h1{
    font-size: 30px;
    margin: 0 0 6px;
    color: var(--text-dark);
    font-weight: 800;
  }
  .page-header p{
    margin:0;
    font-size: 14px;
    color: var(--text-mid);
  }

  .btn-primary{
    background: var(--green);
    color: var(--white);
    border:none;
    padding: 12px 20px;
    border-radius: 10px;
    font-size: 14px;
    font-weight:600;
    display:flex;
    align-items:center;
    gap:8px;
    cursor:pointer;
    white-space:nowrap;
    box-shadow: 0 1px 2px rgba(0,0,0,0.05);
  }
  .btn-primary:hover{ background: var(--green-dark); }

  .actions-grid{
    display:grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
    margin-bottom: 24px;
  }
  .action-card{
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: 14px;
    padding: 16px 18px;
    display:flex;
    align-items:center;
    gap: 14px;
    cursor:pointer;
    transition: box-shadow .15s ease, transform .15s ease;
  }
  .action-card:hover{
    box-shadow: 0 4px 14px rgba(0,0,0,0.06);
    transform: translateY(-1px);
  }
  .action-icon{
    width:42px;height:42px;
    border-radius: 10px;
    display:flex;align-items:center;justify-content:center;
    font-size:18px;
    flex-shrink:0;
  }
  .action-icon.green{ background: var(--green-light); color: var(--green); }
  .action-icon.purple{ background: var(--purple-light); color: var(--purple); }
  .action-icon.blue{ background: var(--blue-light); color: var(--blue); }
  .action-icon.amber{ background: var(--amber-light); color: var(--amber); }

  .action-text{ flex:1; }
  .action-text .title{
    font-size: 14px;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 2px;
  }
  .action-text .subtitle{
    font-size: 12px;
    color: var(--text-muted);
  }
  .action-arrow{
    color: var(--text-muted);
    font-size: 16px;
  }

  .filters-bar{
    display:flex;
    align-items:center;
    gap: 14px;
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: 14px;
    padding: 12px 16px;
    margin-bottom: 20px;
  }
  .search-input{
    flex:1;
    display:flex;
    align-items:center;
    gap: 10px;
    padding: 10px 14px;
    border: 1px solid var(--border);
    border-radius: 10px;
    color: var(--text-muted);
    font-size: 14px;
  }
  .search-input input{
    border:none;
    outline:none;
    font-size:14px;
    width:100%;
    background:transparent;
    color: var(--text-dark);
  }
  .search-input .icon{ color: var(--text-muted); }

  .select{
    padding: 10px 14px;
    border:1px solid var(--border);
    border-radius: 10px;
    font-size: 13px;
    color: var(--text-dark);
    background: var(--white);
    min-width: 150px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:8px;
    cursor:pointer;
  }
  .count-tag{
    font-size:13px;
    color: var(--text-muted);
    white-space:nowrap;
    padding-left: 4px;
  }

  .table-card{
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: 14px;
    overflow:hidden;
  }
  table{
    width:100%;
    border-collapse: collapse;
  }
  thead th{
    text-align:left;
    font-size: 11px;
    letter-spacing: 0.5px;
    color: var(--text-muted);
    font-weight: 700;
    padding: 14px 20px;
    background: var(--bg);
    border-bottom: 1px solid var(--border);
  }
  tbody td{
    padding: 14px 20px;
    border-bottom: 1px solid var(--border);
    font-size: 13.5px;
    color: var(--text-dark);
    vertical-align: middle;
  }
  tbody tr:last-child td{ border-bottom:none; }
  tbody tr:hover{ background: #fafbfa; }

  .eleve-cell{
    display:flex;
    align-items:center;
    gap: 12px;
  }
  .eleve-avatar{
    width: 36px; height: 36px;
    border-radius: 50%;
    background: var(--green-light);
    color: var(--green);
    display:flex;align-items:center;justify-content:center;
    font-size: 12px;
    font-weight:700;
    flex-shrink:0;
  }
  .eleve-meta .name{ font-weight:700; font-size: 13.5px; color: var(--text-dark); }
  .eleve-meta .dob{ font-size: 11.5px; color: var(--text-muted); margin-top:1px; }

  .classe-cell .main{ font-weight:600; font-size:13.5px; }
  .classe-cell .sub{ font-size:11.5px; color: var(--text-muted); margin-top:1px; }
  .classe-cell.unassigned .main{ color: var(--red); }

  .resp-cell .name{ font-weight:600; font-size: 13.5px; }
  .resp-cell .phone{ font-size: 11.5px; color: var(--text-muted); margin-top:1px; }

  .status-badge{
    display:inline-flex;
    align-items:center;
    gap:6px;
    font-size: 12px;
    font-weight:600;
    padding: 5px 12px;
    border-radius: 20px;
  }
  .status-badge .dot{
    width:6px;height:6px;border-radius:50%;
  }
  .status-badge.inscrit{ background: var(--green-light); color: var(--green-dark); }
  .status-badge.inscrit .dot{ background: var(--green); }
  .status-badge.non-affecte{ background: var(--red-bg); color: var(--red); }
  .status-badge.non-affecte .dot{ background: var(--red); }
  .status-badge.attente{ background: var(--amber-badge-bg); color: var(--amber); }
  .status-badge.attente .dot{ background: var(--amber); }

  .view-btn{
    width: 32px; height:32px;
    border-radius: 50%;
    border: 1px solid var(--border);
    background: var(--white);
    color: var(--text-mid);
    display:flex;align-items:center;justify-content:center;
    cursor:pointer;
    font-size: 14px;
  }
  .view-btn:hover{ background: var(--bg); }

  .table-footer{
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding: 14px 20px;
  }
  .table-footer .note{
    font-size: 12px;
    color: var(--text-muted);
  }
  .page-num{
    width: 30px;height:30px;
    border-radius:8px;
    background: var(--green);
    color: var(--white);
    display:flex;align-items:center;justify-content:center;
    font-size: 13px;
    font-weight:700;
  }

  @media (max-width: 1100px){
    .actions-grid{ grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 700px){
    .actions-grid{ grid-template-columns: 1fr; }
    .page-header{ flex-direction:column; }
    .filters-bar{ flex-wrap:wrap; }
    table{ display:block; overflow-x:auto; white-space:nowrap; }
  }
</style>
</head>
<body>

  <div class="topbar">
    <div class="topbar-left">
      <span class="dot"></span>
      ÉCOLE PRIMAIRE AL AMAL
    </div>
    <div class="topbar-right">
      <div class="year-pill"><span class="dot-sm"></span> 2026-2027</div>
      <div class="icon-btn">🔔</div>
      <div class="user-chip">
        <div class="avatar">MF</div>
        <div class="user-meta">
          <div class="name">Mariama Faye</div>
          <div class="role">Administrateur d'établissement</div>
        </div>
      </div>
    </div>
  </div>

  <div class="page">

    <div class="page-header">
      <div>
        <p class="eyebrow">SCOLARITÉ</p>
        <h1>Élèves &amp; inscriptions</h1>
        <p>Gérez le dossier de l'élève de son admission jusqu'à sa sortie de l'établissement.</p>
      </div>
      <button class="btn-primary">+ Inscrire un élève</button>
    </div>

    <div class="actions-grid">
      <div class="action-card">
        <div class="action-icon green">🎓</div>
        <div class="action-text">
          <div class="title">Inscription</div>
          <div class="subtitle">Créer un nouveau dossier</div>
        </div>
        <div class="action-arrow">→</div>
      </div>

      <div class="action-card">
        <div class="action-icon purple">📋</div>
        <div class="action-text">
          <div class="title">Réinscription</div>
          <div class="subtitle">Passage à la nouvelle année</div>
        </div>
        <div class="action-arrow">→</div>
      </div>

      <div class="action-card">
        <div class="action-icon blue">⬇️</div>
        <div class="action-text">
          <div class="title">Transfert entrant</div>
          <div class="subtitle">Élève venant d'une autre école</div>
        </div>
        <div class="action-arrow">→</div>
      </div>

      <div class="action-card">
        <div class="action-icon amber">⬆️</div>
        <div class="action-text">
          <div class="title">Transfert sortant</div>
          <div class="subtitle">Archiver un départ</div>
        </div>
        <div class="action-arrow">→</div>
      </div>
    </div>

    <div class="filters-bar">
      <div class="search-input">
        <span class="icon">🔍</span>
        <input type="text" placeholder="Nom, matricule ou responsable...">
      </div>
      <div class="select">Toutes les classes <span>▾</span></div>
      <div class="select">Tous les statuts <span>▾</span></div>
      <div class="count-tag">5 élève(s)</div>
    </div>

    <div class="table-card">
      <table>
        <thead>
          <tr>
            <th>ÉLÈVE</th>
            <th>MATRICULE</th>
            <th>CLASSE</th>
            <th>ÉTABLISSEMENT</th>
            <th>RESPONSABLE</th>
            <th>STATUT</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="eleve-cell">
                <div class="eleve-avatar">AF</div>
                <div class="eleve-meta">
                  <div class="name">Awa Fall</div>
                  <div class="dob">Né(e) le 2014-05-18</div>
                </div>
              </div>
            </td>
            <td>JE-26001</td>
            <td>
              <div class="classe-cell">
                <div class="main">CM2 A</div>
                <div class="sub">CM2</div>
              </div>
            </td>
            <td>Primaire Al Amal</td>
            <td>
              <div class="resp-cell">
                <div class="name">Marième Fall</div>
                <div class="phone">+221 77 420 18 04</div>
              </div>
            </td>
            <td><span class="status-badge inscrit"><span class="dot"></span>Inscrit</span></td>
            <td><button class="view-btn">👁</button></td>
          </tr>

          <tr>
            <td>
              <div class="eleve-cell">
                <div class="eleve-avatar">MB</div>
                <div class="eleve-meta">
                  <div class="name">Mariama Ba</div>
                  <div class="dob">Né(e) le 2014-05-30</div>
                </div>
              </div>
            </td>
            <td>JE-26007</td>
            <td>
              <div class="classe-cell">
                <div class="main">CM2 A</div>
                <div class="sub">CM2</div>
              </div>
            </td>
            <td>Primaire Al Amal</td>
            <td>
              <div class="resp-cell">
                <div class="name">Khadidiatou Sy</div>
                <div class="phone">+221 70 456 78 90</div>
              </div>
            </td>
            <td><span class="status-badge inscrit"><span class="dot"></span>Inscrit</span></td>
            <td><button class="view-btn">👁</button></td>
          </tr>

          <tr>
            <td>
              <div class="eleve-cell">
                <div class="eleve-avatar">CT</div>
                <div class="eleve-meta">
                  <div class="name">Cheikh Tidiane</div>
                  <div class="dob">Né(e) le 2018-02-15</div>
                </div>
              </div>
            </td>
            <td>JE-26008</td>
            <td>
              <div class="classe-cell">
                <div class="main">CP A</div>
                <div class="sub">CP</div>
              </div>
            </td>
            <td>Primaire Al Amal</td>
            <td>
              <div class="resp-cell">
                <div class="name">Ibrahima Tidiane</div>
                <div class="phone">+221 77 999 88 77</div>
              </div>
            </td>
            <td><span class="status-badge inscrit"><span class="dot"></span>Inscrit</span></td>
            <td><button class="view-btn">👁</button></td>
          </tr>

          <tr>
            <td>
              <div class="eleve-cell">
                <div class="eleve-avatar">MD</div>
                <div class="eleve-meta">
                  <div class="name">Mouhamed Diop</div>
                  <div class="dob">Né(e) le 2019-03-10</div>
                </div>
              </div>
            </td>
            <td>JE-26011</td>
            <td>
              <div class="classe-cell unassigned">
                <div class="main">Non affecté</div>
                <div class="sub">CI</div>
              </div>
            </td>
            <td>Primaire Al Amal</td>
            <td>
              <div class="resp-cell">
                <div class="name">Babacar Diop</div>
                <div class="phone">+221 77 333 22 11</div>
              </div>
            </td>
            <td><span class="status-badge non-affecte"><span class="dot"></span>Non affecté</span></td>
            <td><button class="view-btn">👁</button></td>
          </tr>

          <tr>
            <td>
              <div class="eleve-cell">
                <div class="eleve-avatar">AN</div>
                <div class="eleve-meta">
                  <div class="name">Aïssatou Ndiaye</div>
                  <div class="dob">Né(e) le 2019-07-22</div>
                </div>
              </div>
            </td>
            <td>JE-26012</td>
            <td>
              <div class="classe-cell unassigned">
                <div class="main">Non affecté</div>
                <div class="sub">CI</div>
              </div>
            </td>
            <td>Primaire Al Amal</td>
            <td>
              <div class="resp-cell">
                <div class="name">Saliou Ndiaye</div>
                <div class="phone">+221 78 444 33 22</div>
              </div>
            </td>
            <td><span class="status-badge attente"><span class="dot"></span>En attente</span></td>
            <td><button class="view-btn">👁</button></td>
          </tr>
        </tbody>
      </table>

      <div class="table-footer">
        <div class="note">Dossiers synchronisés et sauvegardés</div>
        <div class="page-num">1</div>
      </div>
    </div>

  </div>

</body>
</html>