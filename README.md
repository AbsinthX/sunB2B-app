<h1 align="center">☀︎ SunB2B ☀︎</h1>
<h3 align="center">Aplikacja B2B dla branży fotowoltaicznej</h3>

- 🕸️ Aplikacja dostępna jest pod adresem [http://konradptak.pl/](http://konradptak.pl/) 🕸️
- Zalogować się do niej możemy poprzez dane:<br>
>admin@wp.pl   
>Haslo1234#
- Aplikacja pozwala wyliczyć ilość elementów potrzebnych do instalacji paneli fotowoltaicznych na różnych rodzajach dachów. Pozwala ona na złożenie zamówienia na zakup elementów, a także na zarządzanie statusem zamówień. Dostępny jest również sklep z mechanizmem koszyka gdzie przeglądać można wszystkie dostępne produkty ([LaravelShoppingcart by bumbummen99]([http://konradptak.pl/](https://github.com/bumbummen99/LaravelShoppingcart))). Wszystkie kluczowe obiekty posiadają także dostępne dla administratora panele CRUD.<br>
- Aplikacja została samodzielnie udostępniona przy pomocy AWS Free Tier. Postawiona jest na serwerze nginx zainstalowanym na instancji EC2 - Ubuntu 20. Bazę danych umieściłem na MariaDB.  

<h3 align="center">Wykorzystane technologie i oprogramowanie</h3>

- PHP<br>
- Framework Laravel 8+<br>
- JS<br>
- biblioteka jQuery<br>
- HTML/CSS<br>
- AWS EC2<br>
- Linux - Ubuntu<br>
- nginx<br>
- MariaDB<br>
- PHPStorm<br>
- XAMPP<br>

<h3 align="center">Wykonane i planowane funkcjonalności</h3>

- [x] Kalkulator wyliczający liczbę elementów dla 4 różnych konstrukcji
- [x] Sklep pozwalający zamówić dowolne elementy
- [x] Możliwość składanie zamówień z poziomu kalkulatora jak i sklepu
- [x] Zarządzanie statusem zamówień
- [x] Koszyk
- [x] CRUD'y dla najważniejszych obiektów
- [x] Seed'ery tworzące podstawowe produkty niezbędne do pracy kalkulatora
- [x] Seed'ery tworzące podstawowych użytkowników
- [x] Dodawanie zdjęć do produktów
- [ ] Wysyłka e-mail'i
- [ ] Podpięcie systemu płatności
- [ ] Dopisanie walidacji w miejscach gdzie jej brakuje
- [ ] Dopisanie limitów długości znaków do bazy danych
- [ ] Zastosowanie podziału na role użytkowników
- [ ] Stworzenie wewnętrznego systemu wiadomości między użytkownikami
