## Users: Veritaban�ndaki b�t�n kullan�c�lar� kapsayacak bir tablo.
* **id** : Otomatik art��l�, her kay�t i�in bir numara ve her numaras� �zel.
* **username** : Kaydolan kullan�c�n�n g�r�necek kullan�c� ad�, bununla login olacak.
* **userpass** : Kaydolan kullan�c�n�n �ifresi, login olurken bunu kullanacak. �ifreleme algoritmas� ile kaydedilecek.
* **level** : Kullan�c�n�n seviyesi, yetkilerinin belirlenmesini sa�lar (1 = �ye , 2 = Co-Admin, 3 = Admin).
* **e_mail** : Kullan�c�n�n elektronik mail adresi.
* **name** : Kullan�c�n�n ger�ek ad�.
* **surname** : Kullan�c�n�n soyad�.
* **adress** : Kullan�c�n�n adresi.
* **security_code** : G�venlik kodu, aktifle�tirme, �ifre de�i�tirme ve baz� onay gerektiren i�lemlerde sistem-mail-kullan�c� ��l�s�nde kullan�lacak. Sisteme, kullan�c�ya d��ar�dan m�dahaleyi engellemek ve son kullan�c�n�n son i�lemi yapmas�n� sa�lamak i�in.
* **status** : Kullan�c�n�n durumu (Active - Passive): Her kaydolan �ye aktifle�tirme i�lemi yapmal�. Spam kay�tlar� �nlemek i�in.

## Cars: Veritaban�ndaki b�t�n ara�lar� kapsayacak bir tablo.
* **id** : Otomatik art��l�, her kay�t i�in bir numara ve her numaras� �zel.
* **plate** : Kaydolan ara�lar�n plakalar�.
* **car_model** : Kaydolan ara�lar�n modelleri, ne model olduklar�. Listelenirken ana isim olarak kullan�lacak.
* **model_year** : Kaydolan ara�lar�n model y�llar�, ka� model olduklar�. Listelenirken bu da ana isim olarak kullan�lacak.
* **color** : Kaydolan arac�n rengi, hangi renk oldu�u. Bu da listelenirken kullan�lacak.
* **owner** : Ara� sahibi, arac�n� d��ar�dan kiralayan rent firmalar� i�in ara� sahibinin ismi de�ilse firma ad�.
* **price** : Arac�n g�nl�k fiyat�, sistem otomatik olarak ayl�k fiyat�n� da yans�tacakt�r.
* **Status** : Arac�n durumu ( Kirada - M�sait), ara� kiralamas� buna g�re yap�lacak ya da kiradaki ara� takip edilecek.

## Pictures: Veritaban�ndaki b�t�n g�rselleri kapsayacak bir tablo.
* **id** : Otomatik art��l�, her kay�t i�in bir numara ve her numaras� �zel.
* **picture_path** : Resmin yolu (�rnek: /pictures/redcar.jpg).
* **owner_id** : Hangi nesneye ait bir g�rsel ise o nesnenin id'si.