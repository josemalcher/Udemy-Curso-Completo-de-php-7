<?php

session_start();

if (empty($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}
?>

<p>
    Olá visitante, você acessou esta página <?php echo $_SESSION['count']; ?> vezes.
</p>

<p>
    Para continuar, <a href="nextpage.php?<?php echo htmlspecialchars(SID); ?>">clique
        aqui</a>.
</p>