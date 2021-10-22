<?php include 'database.php'; ?>
<?php

function phoneConvert($number){
  $data				=	preg_replace("/[^0-9]/", "", $number);
  $result = substr($data, -10); 
  return $result;
}

function listValue($adi,$soyadi,$islem){ 
  return '<table align="center">
            <thead>
              <tr>
                <th>Adı</th>
                <th style="float:left;margin-left:150px;">Soyadı</th>
                <th style="float:left;margin-left:200px;">İşlem</th>
              </tr>
            </thead>
            <hr>
            <hr>
            <tbody>
              <tr>
                <td >'.$adi.'</td>
                <td style="float:left;margin-left:150px;margin-top:17px;">'.$soyadi.'</td>
                <td style="float:left;margin-left:150px;">'.$islem.'</td>
              </tr>
            </tbody>
          </thead>
        </table>';

}







?>