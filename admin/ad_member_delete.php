<?php
session_start();


$userId = $_SESSION["userId"];
$selected_member_id = $_REQUEST["selected_member_id"];
require("db_connect.php");
$query = $db->exec("delete from member where id = $selected_member_id");
$query = $db->exec("delete from file where fm_num = $selected_member_id");
$query = $db->exec("delete from board_free where member_id = '$selected_member_id'");
$query = $db->exec("delete from chat where a_user_id = '$selected_member_id' or b_user_id = '$selected_member_id'");
?>
<script>
	alert("삭제 되었습니다.");
	location.replace("memberlist.php");
</script>
