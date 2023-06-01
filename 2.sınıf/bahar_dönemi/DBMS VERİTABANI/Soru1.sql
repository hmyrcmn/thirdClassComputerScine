select k.ISBN, k.kitapAdi as "Kitap Adı", k.kitapAciklama as "Kitap Açıklaması", k.sayfaSayisi as "Sayfa Sayısı",
concat_ws(' ', y.yazarAdi, y.yazarSoyadi) as "Kitabın Yazarı",
t.turAdi as "Kitabın Türü" 
from ((kitaplar as k inner join yazarlar as y on k.yazarID=y.yazarID) inner join turler as t on k.turID=t.turID)
order by ISBN;