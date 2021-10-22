<?php include 'database.php';?>
<?php include 'function.php';
error_reporting(0); ?>

<?php
$csvtmp = array();
$csvFinal = array();
$c_name     =   $_POST["company_name"];
$datet       =   $_POST["datet"];  
$filename =$_FILES['file']['tmp_name'];

$csvfile = file_get_contents($filename);
$csv = str_getcsv($csvfile,"\n");
echo "<h2 align='center'>Forma geri dönmek için <a href='index.php'>tıklayınız</a></h2>";
foreach ($csv as $key => $item) {
    array_push($csvtmp, str_getcsv($item,";")); // dizi içerisinde bulunan ; karakterini kaldırıp her birini diziye atadım

      $csvFinal[$csvtmp[$key][0]] = $csvtmp[$key]; 
      $data = $csvtmp[$key][0]; 
      $data1 = $csvtmp[$key][1]; 
      $data2= ($csvtmp[$key][2]); 
      $data3 = $csvtmp[$key][3]; 
      $data4 = phoneConvert($csvtmp[$key][4]); 
      $data5 = $csvtmp[$key][5]; 
      unset($csvFinal[$csvtmp[$key][0]][0]);

    // Veritabanında aynı kayıt varsa ekleme yapılmaması için kontrol oluşturdum
      $users=$db->prepare("SELECT * FROM info WHERE email= :email AND employee_id= :employee_id AND phone=:phone");
      $users->execute(array('email' =>$data2,	'employee_id'=>$data3,'phone'=>$data4));
      $user_check = $users->fetch(PDO::FETCH_ASSOC);
      if($user_check==0){
        $db->query("INSERT INTO info (company_name, name, surname, email, employee_id, phone, point,datet)  VALUES (
          '".$c_name."', 
          '".$data."', 
          '".$data1."',
          '".$data2."',
          '".$data3."',
          '".$data4."',
          '".$data5."',
          '".$datet."'
          )");
          // İşlem sonucu olarak her bir değerin eklenip eklenmediğine dair bilgiyi function.php içerisinde yer alan listValue metodunu kullanarak yazdırdım
          echo listValue($data,$data1,"<p style='color:green;'>   başarılı bir şekilde eklendi!<br></p> ");
      }
      else {
        echo listValue($data,$data1,"<p style='color:red;'>  daha önce eklenmiş!<br> </p> ");
      }
    }