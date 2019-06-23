<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">


# Symfony - egzamin


## Jak zacząć?

1. Stwórz [*fork*](https://guides.github.com/activities/forking/) repozytorium z zadaniami.
2. Sklonuj repozytorium na swój komputer. Użyj do tego komendy `git clone adres_repozytorium`
Adres repozytorium możesz znaleźć na stronie repozytorium po naciśnięciu w guzik "Clone or download".
3. Rozwiąż zadania i skomituj zmiany do swojego repozytorium. Użyj do tego komend `git add nazwa_pliku`.
Jeżeli chcesz dodać wszystkie zmienione pliki użyj `git add .` 
Pamiętaj że kropka na końcu jest ważna!
Następnie skommituj zmiany komendą `git commit -m "nazwa_commita"`
4. Wypchnij zmiany do swojego repozytorium na GitHubie.  Użyj do tego komendy `git push origin master`
5. Stwórz [*pull request*](https://help.github.com/articles/creating-a-pull-request) do oryginalnego repozytorium, gdy skończysz wszystkie zadania.

**Pamiętaj, że pull request musi być stworzony, aby Mentor dostał Twoje odpowiedzi**.

* Podczas egzaminu możesz korzystać z notatek, kodu napisanego wcześniej, internetu i prezentacji.
* Zabroniona jest jakakolwiek komunikacja z innymi kursantami.

## Quiz

Poniżej znajduje się kilka pytań quizowych z teorii.  
Każde z pytań może mieć jedną lub wiele prawidłowych odpowiedzi.  

Odpowiedzi do pytań wpisz w pliku `quiz.php` do odpowiedniej zmiennej.  
Jeśli pytanie posiada jedną prawidłową odpowiedź wpisz wybraną odpowiedź np. 
  
```php
$answer3 = 'b';
```
Jeśli pytanie posiada więcej niż jedną prawidłową odpowiedź wpisz je w formie tablicy np.  

```php
$answer3 = ['a', 'd'];
```

### Pytanie 1 (0.5 pkt)  

Co oznaczają kolejne litery skrótu `MVC`?  
a) `many`, `version`, `class`    
b) `model`, `view`, `class`  
c) `model`, `version`, `code`  
d) `model`, `view`, `controller`  

### Pytanie 2 (0.5 pkt)  

Jaka komenda konsolowa spowoduje dodanie kontrolera?  
a) `bin/console generate:bundle:controller`  
b) `bin/console generate:controller`  
c) `bin/console make:controller`  
d) `bin/console create:controller`  

### Pytanie 3 (0.5 pkt)  

Jakiej metody EntityManagera użyjesz do zapisu **nowej** encji do bazy?  
a) `$em->persist()`  
b) `$em->save()`  
c) `$em->reload()`  
d) `$em->toDb()`  

### Pytanie 4 (0.5 pkt)  

Które z poniższych obiektów, mogą być zwrócone z akcji kontrolera?    
a) `FileResponse()`  
b) `Response()`  
c) `JsonResponse()`  
d) `ImageResponse()`   

## Zadania praktyczne

* Utwórz bundla o nazwie `ExamBundle`. 
* Wypchnij na GitHub **tylko** katalog z tym bundlem, **katalog `ExamBundle` powinien znaleźć się w głównym katalogu repozytrium**.

**BARDZO WAŻNE** - Wasze zadania są sprawdzanie przy pomocy automatycznego systemu.  
  
Aby odpowiedzi zostały uznane za poprawne strony **MUSZĄ** wyświetlać te same komunikaty co w treści zadania,  
a funkcje, metody, zmienne i akcje **MUSZĄ** posiadać nazwy dokładnie takie same jak podane w zadaniu.

**Pamiętaj, żeby nie używać polskich nazw zmiennych i funkcji**.

**Umieść plik `quiz.php`, w głównym katalogu `ExamBundle`.**

### Zadanie 1 (6 pkt)

Napisz kontroler, który ma następujące akcje:
* `GET /setUsername/{userName}` - wczytuje dane ze sluga i zapisać je do sesji pod kluczem `username`. 
   Powinien także wyświetlić informację o zapisaniu danych w formie komunikatu `Sesja utworzona`.
* `GET /sayHello/{n}` - gdzie `n` jest liczbą (wartość domyślna to `10`)!  
   Ta akcja powinna wczytać z sesji zapisane wcześniej imię i wyświetlić `n` razy w tagu `<h2>` napis `Witaj {{ username }}`.  
   Np.  
   `<h2>Witaj Marek</h2>`  
   `<h2>Witaj Marek</h2>`  
   `<h2>Witaj Marek</h2>`  
   `<h2>Witaj Marek</h2>`  
   `<h2>Witaj Marek</h2>`  
   Jeżeli w sesji nie ma zapisanego imienia, to powinien wyświetlić `n` razy w tagu `<h2>` napis `Witaj nieznajomy`.  
   Np.  
   `<h2>Witaj nieznajomy</h2>`  
   `<h2>Witaj nieznajomy</h2>`  
   `<h2>Witaj nieznajomy</h2>`  
   `<h2>Witaj nieznajomy</h2>`  
* `GET /createCookie/{cookieName}/{cookieValue}/{cookieTime}` - gdzie `cookieTime` jest liczbą (jest to założenie, które ma się znaleźć w routingu).  
   Ma on nastawiać ciasteczko o podanej nazwie na podaną wartość.  
   Ciasteczko ma żyć przez `cookieTime` minut.
* `GET /deleteCookie/{cookieName}` - wyświetla zawartość ciasteczka o podanej nazwie i następnie je usuwa.  
   Jeżeli takiego ciasteczka nie ma - powinien wyświetlać informację `Brak ciasteczka`.

**Do każdej akcji stwórz osobny template.**

### Zadanie 2 (6 pkt)

Napisz następujące modele:
```SQL
User:
  * id - int AUTO_INCREMENT, klucz główny,
  * name - napis o długości 100,
  * email - napis o długości 50,
  * password - napis o długości 25,

Tweet:
  * id - int AUTO_INCREMENT, klucz główny,
  * title - napis o długości 50,
  * tweet_text - napis,
```

* Połącz te modele relacją jeden do wielu (dwukierunkową).  
* W encji `User` pole odnoszące się do wielu Tweetów nazwij ```tweets```.  
* W encji `Tweet` analogicznie pole odnoszące się do jednej encji `User` nazwij ```user```.

### Zadanie 3 (6 pkt)

W repozytorium znajduje się katalog `Zadanie3`, w którym jest plik modelu `Post.php` oraz dump z przykładowymi danymi.
Utwórz kontroler `PostController` i dopisz poszczególne akcje wg poniższej specyfikacji.  
Pamiętaj o przenisieniu pliku modelu do swojego bundle'a.  

| adres            | opis                                                                                               |
|------------------|----------------------------------------------------------------------------------------------------|
| /changeTitlePost | Akcja wczyta post o id `3`, zmieni mu tytuł na `Some other title` i zapisze zmiany do bazy         |
| /showFooBarPosts | Akcja wyświetli liczbę postów o tytule `fooBar` nie uwzględniając wielkości liter                  |
| /createPost      | Akcja stworzy nowy post z jakimikolwiek danymi a następnie wyświetli ilość postów w bazie danych   |
| /deletePosts     | Akcja usunie wszystkie posty o ratingu większym niż `5`                                            |

Akcje powinny zwracać obiekt `Response` i nie posiadać widoków Twig.

