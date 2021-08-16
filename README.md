# Otel Yönetim Sistemi

## Oda Yönetimi

Acente otellerden rezerv ettiği odaları sisteme ekler ve bu odalar üzerinden fiyatlandırma sağlar. Otellerde genellikle Single, Double, Suit vb. gibi belirli
oda tipleri mevcuttur ve aynı türdeki oda tiplerini sistemde tekrar tekrar eklememek için stok mantığı kullanılmaktadır. Ayrıca odalara ait özelliklerde
girilmelidir.

### Sistemde olması beklenen **Oda Özellikleri** :

Yatak sayısı dışında ki diğer bilgileri opsiyoneldir.

- Max Yetişkin Sayısı
- Max Çocuk Sayısı
- Televizyon (Var, Yok)
- Minibar (Var ,Yok)
- Oyun Konsolu (Var, Yok)
- Metrekare
- Kasa
- Projeksiyon

### **Örnek Oda Verisi ;**

- Oda Adı : Single Oda
- Yetişkin Sayısı : 1
- Çocuk Sayısı : 0
- Stok Sayısı : 10
- Oda Özellikleri
    - Yatak Sayısı :  1
    - Televizyon : Var
    - Minibar : Var
    - Kasa : var

## Oda Fiyatlandırmaları

Odalar gecelik fiyat olarak hesaplanır. Fiyatlar otel için eklenmiş olan dönemler üzerinden pansiyon ve yetişkin çocuk tiplerine göre tanımlanır.

### Sistemde olması beklenen **Fiyatlandırma** :

Fiyatlar odaların gecelik bedellerine göre tanımlanır. Bu fiyatlara acentenin komisyon bedeli dahildir.

![figures/price.png](https://raw.githubusercontent.com/Kodluyoruz/taskforce/main/java102/odev-turizm-acente/figures/price.png)

Yukarıda ki örnekte odaya ait otele tanımlanmış olan dönemler ve pansiyon tiplerine göre alanlar otomatik gelmiştir.

