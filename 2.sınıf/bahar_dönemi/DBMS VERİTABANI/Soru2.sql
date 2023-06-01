select u.uyeID as "Üye ID", concat_ws(' ', u.uyeAdi, u.uyeSoyadi) as "Üye Ad Soyad",
"Kitap kaydı bulunmaktadır." as "Kayıt Durumu",
kt.kitapAdi as "Kitap",
datediff(current_date, k.aTarih) as "Kaç gün"
from ((kayitlar as k left join uyeler as u on k.uyeID=u.uyeID) inner join kitaplar as kt on k.ISBN = kt.ISBN)
where k.vTarih is null
order by u.uyeID