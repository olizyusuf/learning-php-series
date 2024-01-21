<?php

require_once __DIR__ . "/Entity/Comments.php";
require_once __DIR__ . "/Repository/CommentsRepositry.php";
require_once __DIR__ . "/GetConnection.php";

use model\Comments;
use Repositry\CommentsRepositoryImpl;

$connection = getConnection();

$commentRepo = new CommentsRepositoryImpl($connection);

$comment = new Comments(null, "sky@gmail.com", "test comment 1");

// insert data
// $commentRepo->insert($comment);

// find data by id
// $getData = $commentRepo->findById(14);

// find data all
$getData = $commentRepo->findAll();

var_dump($getData);

$connection = null;
