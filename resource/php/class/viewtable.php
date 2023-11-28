<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/socmed/resource/php/class/core/init.php';
require_once 'config.php';

class viewtable extends config{

public function getUserById($userId) {
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_accounts` WHERE `id` = ?";
  $data = $con->prepare($sql);
  $data->execute([$userId]);
  $result = $data->fetch(PDO::FETCH_ASSOC);

  return $result;
}

public function viewPost2() {
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_posts` ORDER BY `created_at` DESC";
  $data = $con->prepare($sql);
  $data->execute();
  $posts = $data->fetchAll(PDO::FETCH_ASSOC);

  // Display posts
  foreach ($posts as $post) {
      echo '<div class="post">';
      echo '<p>' . $post['content'] . '</p>';
      // Add more details if needed
      echo '</div>';
  }

}


public function viewUserPosts($userId) {
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_posts` WHERE `user_id` = ?";
  $data = $con->prepare($sql);
  $data->execute([$userId]);
  $posts = $data->fetchAll(PDO::FETCH_ASSOC);

  // Display posts
  foreach ($posts as $post) {
      echo '<div class="post">';
      echo '<p>' . $post['content'] . '</p>';
      // Add more details if needed
      echo '</div>';
  }
}

public function viewAdminPostTable(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_statuspost`";
  $data= $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<h3 class='text-center'> User Post Management </h3>";
  echo "<div class='table-responsive'>";
  echo "<table id='accountTable' class='table table-bordered table-sm table-bordered table-hover shadow display' width='100%'>";
  echo "<thead class='thead-dark'>";
  echo "<th>Posted By</th>";
  echo "<th class='d-none d-sm-table-cell'>Post</th>";
  echo "<th class='d-none d-sm-table-cell'>Date Posted</th>";
  echo "<th class='d-none d-sm-table-cell'>Action</th>";
  echo "</thead>";

  foreach ($result as $data) {
  echo "<tr>";
  echo "<td class='d-none d-sm-table-cell' >$data[posted_by]</td>";
  echo "<td style='font-size: 85%;'>$data[post]</td>";
  echo "<td class='d-none d-sm-table-cell' style='font-size: 85%;'>".$data['date_posted']."</td>";
  echo "<td><a href='deletePost.php?id=$data[id]' class='btn btn-danger'>Delete Post</a></td>";
  }
  echo "</table>";

}


public function viewAccountTable2() {
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_accounts` WHERE `groups` = 1";
  $data = $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);

  foreach ($result as $userData) {
      echo '<h6 class="text-dark">';
      echo '<a href="studentprofile.php?id=' . $userData['id'] . '">' . $userData['name'] . '</a>';
      echo '</h6>';
  }
}



public function viewPost(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_statuspost`";
  $data = $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);

  foreach ($result as $data) {

      echo "<div class='timeline-card post'>";
      echo "<div class='post-header'>";
      echo "<div class='status-author'>$data[posted_by]</div>";
      echo "</div>";
      echo "<div class='post-content'>";
      echo "<div class='post-text'>";
      echo "$data[post]";
      echo "</div>";
      echo "<div class='post-date'>";
      echo "Status Posted on $data[date_posted]";
      echo "</div>";
      echo "</div>";
      echo "</div>";
  }
}
}