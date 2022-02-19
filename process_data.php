<?php
//process_data.php
	echo 'no';
	if (isset($_POST["query"])) {
	include 'database/conn.php';
//	$connect = new PDO("mysql:host=localhost;dbname=clubs", "root", "");
	
//	echo 'yes';
	$data = array();
	
	$condition = preg_replace('/[^A-Za-z0-9\- ]/', '', $_POST["query"]);
	
	$query = "SELECT name FROM clubs WHERE name LIKE '%" .$condition. "%' ";
	$result = $db->query($query);
	$replace_string = '<b>' . $condition . '</b>';
		
		foreach ($result as $row) {
			$data[] = array(
				'post_title' => str_ireplace($condition, $replace_string, $row["post_title"])
			);
		}
		
		echo json_encode($data);
	}
	
//
////	$post_data = json_decode(file_get_contents('php://input'), true);
////
////	if (isset($post_data['search_query'])) {
////
////		$data = array(
////			':search_query' => $post_data['search_query']
////		);
////
////		$query = "
////	SELECT search_id FROM recent_search
////	WHERE search_query = :search_query
////	";
////
////		$statement = $connect->prepare($query);
////
////		$statement->execute($data);
////
////		if ($statement->rowCount() == 0) {
////			$query = "
////		INSERT INTO recent_search
////		(search_query) VALUES (:search_query)
////		";
////
////			$statement = $connect->prepare($query);
////
////			$statement->execute($data);
////		}
////
////		$output = array(
////			'success' => true
////		);
////
////		echo json_encode($output);
////
////	}
////
////	if (isset($post_data['action'])) {
////		if ($post_data['action'] == 'fetch') {
////			$query = "SELECT * FROM recent_search ORDER BY search_id DESC LIMIT 10";
////
//			$result = $connect->query($query);
//
//			$data = array();
//
//			foreach ($result as $row) {
//
//				$data[] = array(
//					'id' => $row['search_id'],
//					'search_query' => $row["search_query"]
//				);
//			}
//
//			echo json_encode($data);
//		}
//
//	}
?>