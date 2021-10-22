<h2> CSV file into the MySQL </h2>
<h3> Bu script ile tüm csv uzantılı dosyalarınızı veritabanınıza ekleyebilirsiniz.<br></h3>
<p>
  <h4> Nasıl Çalıştırabiliriz? </h4>
</p>

<p>
* Öncelikle dosyayı indirdikten sonra sql klasörü içerisinde bulunan 'challenge.sql' dosyasını veritabanınıza aktarmanız gerekmektedir.<br>
* Daha sonrasında 'database.php' içerisinde yer alan veritabanı bilgilerini kendi veritabanınız için düzenleyebilirsiniz <br>
* Bu işlemler bittikten sonra projemizi çalıştırmaya başlayabiliriz. <br>
* Projeyi çalıştırdığınızda karşımıza bir form gelecektir. Bu formda; klasörün ierisinde yer alan task.csv dosyasını , kampanya adını ve tarih bilgisini girmeniz gerekmektedir.<br>
* Verileri ekledikten sonra sonuc.php yönlendirerek karşınıza bir tablo çıkacaktır. Burada hangi verilerin eklenip eklenmediğini inceleyebilirsiniz.<br>

</p>

<p>
  <h4> Yapılan İşlemler </h4>
</p>

<p>
* Formdan gelen csv uzantılı dosyanın içerisinde yer alan veriler arasında ; karakteri yer alıyor. Öncelikle bu karakteri parçalayıp tüm veriler diziye aktarıldı.<br>
* Telefon numarası için bir metot oluşturup içerisinde yer alan boşluklar ve başında bulunan +90 , 0 vb sayılar silinerek sadece son 10 hanesi olacak şekilde kayıt edildi.<br>
* str_getcsv fonksiyonu sayesinde parçalama işlemi yapıldı.<br>
* Veritabanında aynı verinin olup olmadığı kontrol edip geri değer döndürüldü. Daha önce hiç eklenmemiş bir kayıtsa ekleme işlemi gerçekleştiriliyor. Form post edildikten sonra gelen sayfada bir tablo oluşturulup dönen değerler her bir veri için bildirildi.<br>

</p>
