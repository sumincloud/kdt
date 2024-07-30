<?php
  session_start();
  include('./include/dbconn.php');

  if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
  }else{
    $id = null;
  }

$category1 = isset($_GET['category1']) ? $_GET['category1'] : '';
$type = isset($_GET['type']) ? $_GET['type'] : '';
$date = isset($_GET['date']) ? $_GET['date'] : '';
$difficulty = isset($_GET['difficulty']) ? $_GET['difficulty'] : '';

$whereClauses = [];

if ($category1 !== '') {
    $whereClauses[] = "category1 LIKE '%$category1%'";
}
if ($type !== '') {
    $whereClauses[] = "category2 = '$type'";
}
if ($date !== '') {
    $whereClauses[] = "category3 = '$date'";
}
if ($difficulty !== '') {
    $whereClauses[] = "grade = '$difficulty'";
}

$whereSql = implode(' AND ', $whereClauses);

if ($whereSql) {
    $whereSql = 'WHERE ' . $whereSql;
}

$sql = "SELECT * FROM academy_list $whereSql";
$result = mysqli_query($conn, $sql);

$cart_class_no = [];
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $cart_sql = "SELECT class_no FROM cart WHERE id = '$id'";
    $cart_result = mysqli_query($conn, $cart_sql);
    while ($cart_row = mysqli_fetch_assoc($cart_result)) {
        $cart_class_no[] = $cart_row['class_no'];
    }
}

while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <div>
      <div class="cart" data-no="<?php echo $row['class_no']; ?>">
        <img src="./images/common/<?php echo in_array($row['class_no'], $cart_class_no) ? 'heart_r' : 'heart_w'; ?>.png" alt="찜버튼">
      </div>
      <a href="./detail.php?class_no=<?php echo $row['class_no']; ?>" title="상품">
        <img src="./uploads/class_main/<?php echo $row['thumnail_img']; ?>" alt="이미지">
        <div class="con-text">
          <p class="con-title"><?php echo $row['name']; ?></p>
          <p class="con-sub"><?php echo $row['detail']; ?></p>
        </div>
      </a>
    </div>
    <?php
}




?>
  <!-- 제이쿼리 -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <!-- 공통스크립트 연결 -->
  <script src="./script/common.js"></script>