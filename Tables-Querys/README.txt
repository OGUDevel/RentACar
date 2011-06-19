## Users: Veritabanýndaki bütün kullanýcýlarý kapsayacak bir tablo.
* **id** : Otomatik artýþlý, her kayýt için bir numara ve her numarasý özel.
* **username** : Kaydolan kullanýcýnýn görünecek kullanýcý adý, bununla login olacak.
* **userpass** : Kaydolan kullanýcýnýn þifresi, login olurken bunu kullanacak. Þifreleme algoritmasý ile kaydedilecek.
* **level** : Kullanýcýnýn seviyesi, yetkilerinin belirlenmesini saðlar (1 = Üye , 2 = Co-Admin, 3 = Admin).
* **e_mail** : Kullanýcýnýn elektronik mail adresi.
* **name** : Kullanýcýnýn gerçek adý.
* **surname** : Kullanýcýnýn soyadý.
* **adress** : Kullanýcýnýn adresi.
* **security_code** : Güvenlik kodu, aktifleþtirme, þifre deðiþtirme ve bazý onay gerektiren iþlemlerde sistem-mail-kullanýcý üçlüsünde kullanýlacak. Sisteme, kullanýcýya dýþarýdan müdahaleyi engellemek ve son kullanýcýnýn son iþlemi yapmasýný saðlamak için.
* **status** : Kullanýcýnýn durumu (Active - Passive): Her kaydolan üye aktifleþtirme iþlemi yapmalý. Spam kayýtlarý önlemek için.

## Cars: Veritabanýndaki bütün araçlarý kapsayacak bir tablo.
* **id** : Otomatik artýþlý, her kayýt için bir numara ve her numarasý özel.
* **plate** : Kaydolan araçlarýn plakalarý.
* **car_model** : Kaydolan araçlarýn modelleri, ne model olduklarý. Listelenirken ana isim olarak kullanýlacak.
* **model_year** : Kaydolan araçlarýn model yýllarý, kaç model olduklarý. Listelenirken bu da ana isim olarak kullanýlacak.
* **color** : Kaydolan aracýn rengi, hangi renk olduðu. Bu da listelenirken kullanýlacak.
* **owner** : Araç sahibi, aracýný dýþarýdan kiralayan rent firmalarý için araç sahibinin ismi deðilse firma adý.
* **price** : Aracýn günlük fiyatý, sistem otomatik olarak aylýk fiyatýný da yansýtacaktýr.
* **Status** : Aracýn durumu ( Kirada - Müsait), araç kiralamasý buna göre yapýlacak ya da kiradaki araç takip edilecek.

## Pictures: Veritabanýndaki bütün görselleri kapsayacak bir tablo.
* **id** : Otomatik artýþlý, her kayýt için bir numara ve her numarasý özel.
* **picture_path** : Resmin yolu (Örnek: /pictures/redcar.jpg).
* **owner_id** : Hangi nesneye ait bir görsel ise o nesnenin id'si.