# Node Js Backend Api Projesi

## Kullanılan teknolojiler
- [Node](https://nodejs.org/en/)
- [Objection](https://vincit.github.io/objection.js/)
- [Expressjs](https://expressjs.com)
- [PostgreSql](https://www.npmjs.com/package/pg)
- [Heroku](http://heroku.com)

## Geliştirme
1. `npm install`
2. `npm run migrate`
3. `npm run seed`

### Veritabanı Ayarlanması
1. db klasöründe migrations klasörü ile tablo yapıları belirlenir
2. db>>seeds>>dev dosyası eklenecek başlangıç verileri
3. db>>models klasöründeki dosyalar tabloların ilişkilerini belirler
4. dao klasöründeki dosyalar verilere erişim sağlayan kodlar

### Servis ve kontrolcüler 
1. service içerisindeki dosyalar veri işleme veya yapılacak işlemleri sağlar
2. controller içerisindekiler route üzerinden dönecek sonuçları ve servis bağlantısını sağlar

## Yapılacak işlemler
- İl-İlçe-Mahalle tabloları hazırlanacak.
- Başlangıç kullanıcıları admin, berber, müşteri örnekleri eklenecek.
- Rezervasyon ekleme, onaylama
- Üye olma, berber onaylama, giriş yapma


