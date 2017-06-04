<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
	file_put_contents('files/orderscurrentdatesMs8Sb17sJqb28sQJs2D3a.txt', '');
    file_put_contents('files/ordersloginsMs8Sb17sJqb28sQJs2D3a.txt', '');
    file_put_contents('files/ordersfullnamesMs8Sb17sJqb28sQJs2D3a.txt', '');
    file_put_contents('files/ordersphonenumbersMs8Sb17sJqb28sQJs2D3a.txt', '');
    file_put_contents('files/ordersemailsMs8Sb17sJqb28sQJs2D3a.txt', '');
    file_put_contents('files/ordersaddressesMs8Sb17sJqb28sQJs2D3a.txt', '');
    file_put_contents('files/ordersdatesMs8Sb17sJqb28sQJs2D3a.txt', '');
    file_put_contents('files/ordersitemsMs8Sb17sJqb28sQJs2D3a.txt', '');
    echo '<script>location.href="new_orders.php"</script>';
} else
    header('Location:index.php');
?>