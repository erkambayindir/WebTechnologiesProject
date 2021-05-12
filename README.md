# WebTechnologiesProject
SAKARYA ÜNİVERSİTESİ
BİLGİSAYAR VE BİLİŞİM BİLİMLERİ FAKÜLTESİ
BİLGİSAYAR MÜHENDİSLİĞİ BÖLÜMÜ


Ders Adı: WEB TEKNOLOJİLERİ

Dersi veren öğretim elman: Dr.Öğr.Üyesi GÜLÜZAR ÇİT

Ödevin Proje Konusu: Kişisel Web Sitesi Geliştirilmesi.

Şube: 1C

Öğrenci’nin Adı-Soyadı:

Erkam Bayındır

Öğrenci Numarası: B081210006

Github linki: https://github.com/erkambayindir/WebTechnologiesProject











Proje Tanıtımı
Dersimizde öğretilen bilgiler (HTML, CSS, JavaScript, PHP vb.) teknolojileri kullanılarak responsive bir web sitesi geliştirmemiz isteniyor.
Kişisel Responsive Web sitesim içerisinde:
•	Ana sayfa olarak, memleketim ve memleketimde bulunan eserlerin tanıtım sayfası,
•	Hakkında Sayfası,
•	Özgeçmiş sayfası,
•	Mirsaımız sayfası,
•	İletişim Sayfası
•	Login Sayfası
•	İçerik sayfaları
Oluşturulmayı planlıyorum.

Ana Sayfa – Benim Şehrim (My City)
İçinde HTML, CSS teknolojileri kullanarak bir web sayfası oluşturacak, bir slayttan ve iki section olarak sayfayı tasarlayacağım. Ayrıca Nave Bar Menu ve Footer olacak. 

Slayt üzerinde tılklayınca, ilgili içerik makale sayfasına yönlendirme olacak.
Aynı şekilde eklşeyteceğim makaleler üzerinde tıklandığında ilgili içerik açılacak.
Gallery olan, her hangi bir resim üzerinde tıkladığımızda, resmi yeni bir pencerede tam boyutta açılacak.
CSS dosyaları: sitede mevcut sayfaları, her sayfa için ayrı bir style dosyası oluşturup, sonra da hepsini bir CSS klasör içine aktardıktan sonra, istediğim sayfada istenilen style dosyası çağırabileceğim.

Responsive özelliği olacak
 
Projenin dosya hiyerarşi – CSS dosyalar ayrı tutulacak


Hakkımda - (About) 

Sayfayı Html kullanarak bir Row dan ve bir ul, div ve benzeri html componentlerinden oluşuan bir sayfa. Ayrıca, alt kısımda Benim Resimlerim olarak bir slayder ekledim.

Mirasimiz - (Heritage) sayfası

Özgeçmiş (CV)

İlgi alanlarım sayfası, ilgi alanlarım çerçevesinde (film, spor vb) internetten bulduğum 
ücretsiz bir API servisinden veri alınıp gösterilecek.

İletişim Formu (Contact me) sayfası

İletişim formu tasarımında table bileşenleri, ve html’de input özelliği ve onun bileşenleri kullanılacak

Ayrıca iletişim sayfasında, iletişim formundaki gerekli kontrol işlemleri javaScript kullanarak denetlenecek: 

İletişim formundaki alanları temizlemek için de java Script kullanılacak, ve temizlemeden önce, kullanıcıya uyarı mesaj vererek, ikinci bir onay istenecek. Onay vermediği sürece, temizleme işlemi gerçekleşmeyecek

Submit botununa tıklayınca da, formun içindeki veriler bir login_process.php sayfasına gonderek, formun içindeki bilgileri, o sayfa içinde bir table ve özel tasarım şeklinde gösterilir.

Login Sayfası
Login.php
Login işlemi, ödev dokümaninde gibi istenindiği gibi yapılacak Login bilgileri kontrol edildiketen sonra:
1.	Başarılı login ise:
2.	Başarısiz login ise:
a.	Başarısizlik sebebi:
i.	Boş alan mı?
Boş bırakılırsa, aslında bunu ilk önce HTML ile kontrol etmek de mümkün tabi. Php ile GET işlemi kullanılabilir.
 
ii.	Yanlış kullanıcı yada şifre mi?
Kontrol işelminin sonucu yanlış şifre yada kullanıcı ismi var ise, aynı şekilde php ile GET işlemi yaparak, başarısızlığı oluşturan sebebi alabiliyorum.
