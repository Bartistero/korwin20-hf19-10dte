<?php

$phrases = [
    [ "Proszę zwrócić uwagę, że", "właściciele niewolników", "po przeczytaniu Manifestu Komunistycznego", "udają homoseksualistów", "żeby poddawać wszystkich tresurze", "co ma zresztą tyle samo sensu, co zawody w szachach dla debili." ],
    [ "I tak mam trzy razy mniej czasu, więc proszę mi pozwolić powiedzieć:", "związkowcy", "którymi się brzydzę", "niszczą rodzinę", "bo taka jest ich natura", "co zostało dokładnie zaplanowane w Magdalence przez śp. generała Kiszczaka." ],
    [ "Państwo się nie śmieją, ale", "trockiści", "których nienawidzę", "idą do polityki", "bo chcą wszystko kontrolować", "i trzeba być idiotą, żeby ten system popierać." ],
    [ "Ja nie potrzebowałem edukacji seksualnej, żeby wiedzieć, że", "tak zwane „dzieci kwiaty”", "z okolic „Gazety Wyborczej”", "zakazują góralom robienia oscypków", "bo nie rozumieją, że socjalizm nie działa", "ale nawet ja jeszcze dożyję normalnych czasów." ],
    [ "No niestety:", "rozmaici urzędnicy", "czyli taka żydokomuna", "organizują paraolimpiady", "żeby wreszcie zapanował socjalizm", "co dowodzi, że wyskrobano nie tych, co trzeba." ],
    [ "Gdzie leży przyczyna problemu? Ja państwu powiem:", "federaści", "odkąd zniesiono karę śmierci", "wprowadzają ustrój, w którym raz na cztery lata można wybrać sobie pana", "dokładnie tak jak tow. Janosik", "a zwykłym ludziom wmawlają, że im coś „dadzą”." ],
    [ "Państwo chyba nie widzą, że", "etatyści", "którymi pogardzam", "ustawiają fotoradary", "zamiast pozwolić ludziom zarabiać", "- cóż: chcieliście (tfu!) demokracji, to macie." ],
    [ "Oświadczam kategorycznie:", "ci durnie i złodzieje", "których miejsce w normalnym kraju jest w więzieniu", "wprowadzają dotacje", "żeby wyrwać kobiety z domu", "dlatego trzeba zlikwidować koryto, a nie zmieniać świnie." ],
    [ "Powtarzam:", "ludzie wybrani glosami meneli spod budki z piwem", "na polecenie Brukseli", "wydzielają buspasy", "bo to jest w interesie tak zwanych ludzi pracy", "a wystarczyłoby przestać wypłacać zasiłki." ],
    [ "Powiedzmy to z całą mocą:", "socjaliści pobożni", "posłusznie", "podnoszą wiek emerytalny", "zamiast pozwolić decydować konsumentowi", "podczas gdy normalni ludzie uważani są za dziwaków." ],
    [ "W Polsce dzisiaj", "socjaliści bezbożni", "bezmyślnie", "rżną głupa", "żeby nie opłacało się mieć dzieci", "co w wieku XIX po prostu by wyśmiano." ],
    [ "Państwo sobie nie zdają sprawy, że", "komuniści z krzyżem w zębach", "z nieprawdopodobną pogardą dla człowieka", "odbierają dzieci rodzicom", "zamiast obniżyć podatki", "- dlatego w społeczeństwie jest równość, a powinno być rozwarstwienie." ],
    [ "To ja przepraszam bardzo:", "agenci obcych służb", "za pieniądze podatników", "wprowadzają absurdalne przepisy", "bo nie rozumieją że selekcja naturalna jest czymś dobrym", "co prowadzi Polskę do katastrofy." ],
    [ "Otóż nie wiem, czy pan wie że", "członkowie Bandy Czworga", "zgodnie z ideologią LGBTQZ", "umieszczają dzieci w szkołach koedukacyjnych", "żeby mężczyźni przestali być agresywni", "- dlatego trzeba przywrócić normalność." ],
    [ "Yyyyy...", "pseudo-masoni z Wielkiego Wschodu Francji", "za wszelka cenę", "wprowadzają parytety", "bo dzięki temu mogą brać łapówki", "ale w wolnej Polsce pójdą siedzieć." ],
    [ "Ja chcę powiedzieć jedną rzecz", "przedstawiciele czerwonej hołoty", "zupełnie bezkarnie", "nawołują do podniesienia podatków", "bo dzięki temu mogą kraść", "przez kolejne kadencje." ],
    [ "Trzeba powiedzieć jasno:", "ci wszyscy (tfu!) geje", "całkowicie bezczelnie", "próbują wyrzucić kierowców z miast", "bo dostają za to pieniądze", "o czym się nie mówi." ],
    [ "Jak powiedział wybitny krakowianin Stanisław Lem,", "funkcjonariusze reżimowej telewizji", "o poglądach na lewo od komunizmu", "próbują skłócić Polskę z Rosją", "bo tak się uczy w państwowej szkole", "i właśnie dlatego Europa umiera." ],
    [ "Proszę mnie dobrze zrozumieć:", "tak zwani ekolodzy", "celowo i świadomie", "głoszą brednie o globalnym ociepleniu", "bo bez tego (tfu!) demokracja nie może istnieć", "ale przyjdą muzułmanie i zrobią porządek." ],
    [ "Ja chciałem państwu przypomnieć że", "ci wszyscy (tfu!) demokraci", "z premedytacją", "zakazują posiadania broni", "bo głupich jest więcej niż mądrych", "- tak samo zresztą jak za Hitlera." ],
    [ "Niech państwo nie maja złudzeń:", "agenci bezpieki", "od czasów Okrągłego Stołu", "nie dopuszczają prawicy do władzy", "bo chcą tworzyć raj na Ziemi", "- proszę zobaczyć co się dzieje na Zachodzie, jeśli mi państwo nie wierzą." ],
    [ "Powiedzmy to wyraźnie:", "feminazistki", "w ramach postępu", "uczą dzieci homoseksualizmu", "bo chcą niszczyć cywilizację białego człowieka", "co sto lat temu nikomu nie przyszło by nawet do głowy." ]
];

$count = random_int(5, 10);
$phrase_count = count($phrases);

if (isset($_GET['count']) && is_int($_GET['count']))
    $count = (int)$_GET['count'];

for ($j = 0; $j < $count; $j++)
    for ($i = 0; $i < $phrase_count; $i++)
        echo $phrases[random_int(0, $phrase_count -1)][$i];

?>
