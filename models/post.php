<?php
class Post
{
  public $id;
  public $title;
  public $content;

  function __construct($id, $title, $content)
  {
    $this->id = $id;
    $this->title = $title;
    $this->content = $content;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM posts');

    foreach ($req->fetchAll() as $item) {
      $list[] = new Post($item['id'], $item['title'], $item['content']);
    }

    return $list;
  }
    static function find($id)
    {
      $db = DB::getInstance();
      $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
      $req->execute(array('id' => $id));

      $item = $req->fetch();
      if (isset($item['id'])) {
        return new Post($item['id'], $item['title'], $item['content']);
      }
      return null;
    }
}
// khởi tạo kết nối
    $connect = new PDO('mysql:host=localhost;dbname=db_tuts', 'root', '');
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Câu truy vấn
    $sql = "SELECT * FROM tbl_news WHERE id=:id";
    //sét id
    $id = 7;
    //set truy vấn với prepare
    $query = $connect->prepare($sql);
    //gán thông số cho biến ẩn danh
    $query->bindParam(':id', $id);
    // thực hiện truy vấn
    $query->execute();
    //gán dữ liệu trả về
    $result = $query;
    //khởi tạo biến đếm $i
    $i = 1;
    // Lặp kết quả trả về
    foreach ($result as $item) {
        echo 'Dữ liệu thứ ' . $i . ' gồm: ' . $item['id'] . '-' . $item['title'] . '-' . $item['content'] . '<br/>';
        $i++;
    }
    //if (isset($_POST['registration'])) {
    //$Fullname=$_POST['fullname'];
    //$Age=$_POST['age'];
    //$Height=$_POST['height'];
    //$Weight=$_POST['weight'];
    //$Username=$_POST['username'];
    //$Password=$_POST['password'];
    //$Sex=$_POST['sex'];
    //$Dateofbirth=$_POST['dateofbirth'];
    //$Phone=$_POST['phone'];
    //if ($Fullname=='' || $Age=='' || $Height=='' || $Weight=='' || $Username=='' || $Password=='' || $Sex=='' || $Dateofbirth=='' || $Phone=='') {
    //echo '<p>Hãy điền đầy đủ thông tin!!!</p>';
    //} else {
    //$sql="INSERT INTO `user` (`Fullname`, `Age`, `Height`, `Weight`, `Username`, `Password`, `Sex`, `Date of birth`, `Phone`) VALUES ('$Fullname', '$Age', '$Height', '$Weight', '$Username', '$Password', '$Sex', '$Dateofbirth', '$Phone')";
    //$query= mysqli_query($con, $sql);
    //}
    //}
        // khởi tạo kết nối
        $connect = new PDO('mysql:host=localhost;dbname=db_tuts', 'root', '');
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Câu truy vấn
        $sql = "INSERT INTO tbl_news (title, content) VALUES ('tieu de', 'noi dung')";
        //thực hiện truy vấn
        $connect->exec($sql);
        echo 'Thành công';