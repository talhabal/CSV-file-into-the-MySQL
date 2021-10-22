<h2> CSV file into the MySQL </h2>
<h3> Bu script ile tüm csv uzantılı dosyalarınızı veritabanınıza ekleyebilirsiniz.<br></h3>
<p>
  <h4> Yapılan İşlemler </h4>
</p>

<p>
* Formdan gelen csv uzantılı dosyanın içerisinde yer alan veriler arasında ; karakteri yer alıyor. Öncelikle bu karakteri parçalayıp tüm veriler diziye aktarıldı.<br>
* Telefon numarası için bir metot oluşturup içerisinde yer alan boşluklar ve başında bulunan +90 , 0 vb sayılar silinerek sadece son 10 hanesi olacak şekilde kayıt edildi.<br>
* str_getcsv fonksiyonu sayesinde parçalama işlemi yapıldı.<br>
* Veritabanında aynı verinin olup olmadığı kontrol edip geri değer döndürüldü. Daha önce hiç eklenmemiş bir kayıtsa ekleme işlemi gerçekleştiriliyor. Form post edildikten sonra gelen sayfada bir tablo oluşturulup dönen değerler her bir veri için bildirildi.<br>

</p>
