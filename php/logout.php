<?php
include($_SERVER['DOCUMENT_ROOT']."/php/Classes/Main/class.php");
m_Login::logout();
Header("Location: /");
?>