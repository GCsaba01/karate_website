<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karate Világa</title>
    <link rel="stylesheet" href="karate_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Fejléc -->
    <header>
        <div class="container">
            <nav class="navbar">
                <ul class="nav-menu">
                    <li><a href="#kezdolap">Kezdőlap</a></li>
                    <li><a href="#karate">Karate</a></li>
                    <li><a href="#stilusok">Stílusok</a></li>
                    <li><a href="#foreszei">Fő részei</a></li>
                    <li><a href="#sportolok">Sportolók</a></li>
                    <li><a href="#filozofia">Filozófia</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!--Fő tartalom-->
    <main>
        <!--Kezdőlap-->
        <section id="kezdolap" class="kezdo">
            <div class="container">
                <h1>Karate Világa</h1>
                <p class="kezdo-alairas">A test, elme és szellem egyesítése</p>
                <?php include 'php/karate_elvek.php'; ?>
                <div class="random-elv">
                    <p class="elv-szoveg">"<?php echo $random_elv; ?>"</p>
                    <p class="elv-forras">- Karate Do alapelv</p>
                </div>
                <div>
                    <a href="#karate" class="gomb">Tudj meg többet</a>
                </div>
            </div>
        </section>

        <!--Karatéról-->
        <section id="karate" class="karate-section">
            <div class="container">
                <div class="karate-szoveg">
                    <h2>Karate</h2>
                    <p class="alairas">A karate (japánul 空手) szabadkezes japán harcművészet, amely nem csupán testet, hanem lelket is edz.</p>
                    <div class="karate-leiras">
                        <p>A karate jelentése szó szerint: <strong>üres kéz</strong>, értelem szerint pedig olyan fegyver nélküli harcművészet, amelyben a karatét űző tanuló saját testrészeit, de leginkább a végtagjait használja fegyverként. A karatedó jelentése: kara - üres, te - kéz, dó - út, tehát „üres kéz útja".</p>
                    </div>

                    <div class="elvek">
                        <h3>Karate alapelvei:</h3>
                        <ul>
                            <li>🥋 Jellem</li>
                            <li>🙏 Tisztelet</li>
                            <li>💪 Szorgalom</li>
                            <li>🧘 Önuralom</li>
                            <li>🔥 Akarat</li>
                        </ul>
                    </div>
                </div>

                <div>
                    <div class="karate-kep">
                        <img src="res/Karate.jpg" alt="Karate gi">
                    </div>

                    <div class="kep-alairas">
                        <p>A hagyományos karate gi (egyenruha) és obi (öv)</p>
                    </div>
                </div>
                
            </div>
        </section>

        <!--Stílusok-->
        <section id="stilusok" class="section">
            <div class="container">
                <h2>Fő stílusok</h2>
                <p class="alairas">A karate több különböző ágra (stílusra) oszlik, mindegyik saját egyedi jellemzőkkel</p>

                <div class="racs">
                    <!--Shotokan-->
                    <div class="stilus-kartya">
                        <div class="stilus-kep"><img src="res/Shotokan.jpg" alt="Shotokan"></div>
                        <div>
                            <h3>Shotokan</h3>
                            <p>A legelterjedtebb karatestílus, melyet Funakoshi Gichin alapított. Alapvetően lineáris, erőteljes technikákra épül. A stílus jellegzetessége az alacsony, stabil állások és erőteljes mozdulatok.</p>
                            <ul>
                                <li><strong>Alapító:</strong> Funakoshi Gichin</li>
                                <li><strong>Jellemzők:</strong> Lineáris mozgás, erőteljes technikák</li>
                                <li><strong>Kata:</strong> Heian, Tekki, Bassai, Kanku</li>
                            </ul>
                        </div>
                    </div>

                    <!--Goju-ryu-->
                    <div class="stilus-kartya">
                        <div class="stilus-kep"><img src="res/Goju-ryu.jpg" alt="Goju-ryu"></div>
                        <div>
                            <h3>Goju-ryu</h3>
                            <p>A "kemény-lágy" stílus, mely a kemény (Go) és lágy (Ju) technikák harmóniájára épül. Kiemelt figyelmet fordít a légzésre és a belső erő fejlesztésére. Eredetileg Okinaváról származik.</p>
                            <ul>
                                <li><strong>Alapító:</strong> Miyagi Chojun</li>
                                <li><strong>Jellemzők:</strong> Kemény és lágy technikák keveréke</li>
                                <li><strong>Kata:</strong> Sanchin, Tensho, Saifa, Seienchin</li>
                            </ul>
                        </div>
                    </div>

                    <!--Shito-ryu-->
                    <div class="stilus-kartya">
                        <div class="stilus-kep"><img src="res/Shito-ryu.jpg" alt="Shito-ryu"></div>
                        <div>
                            <h3>Shito-ryu</h3>
                            <p>Kenwa Mabune által alapított stílus, amely a Shotokan keménységét és a Shorin-ryu gyorsaságát ötvözi. Nagyon sok kata ismert ebben a stílusban, gyakran több mint 50.</p>
                            <ul>
                                <li><strong>Alapító:</strong> Kenwa Mabune</li>
                                <li><strong>Jellemzők:</strong> Gyors, precíz technikák, sokféle kata</li>
                                <li><strong>Kata:</strong> Bassai, Seienchin, Nipaipo, Suparinpei</li>
                            </ul>
                        </div>
                    </div>

                    <!--Wado-ryu-->
                    <div class="stilus-kartya">
                        <div class="stilus-kep"><img src="res/Wado-ryu.jpg" alt="Wado-ryu"></div>
                        <div>
                            <h3>Wado-ryu</h3>
                            <p>A "béke útja" stílusa, amely a karate és a jiu-jitsu elemeit ötvözi. Hangsúlyozza az elkerülést, a testmozgás hatékonyságát és minimalizálja az erőszak alkalmazását.</p>
                            <ul>
                                <li><strong>Alapító:</strong> Hironori Otsuka</li>
                                <li><strong>Jellemzők:</strong> Kerülő mozgások, hatékonyság</li>
                                <li><strong>Kata:</strong> Pinan, Kushanku, Naihanchi, Seishan</li>
                            </ul>
                        </div>
                    </div>

                    <!--Kyokushin-->
                    <div class="stilus-kartya">
                        <div class="stilus-kep"><img src="res/Kyokushin.jpg" alt="Kyokushin"></div>
                        <div>
                            <h3>Kyokushin</h3>
                            <p>A "végső igazság" stílusa, melyet Masutatsu Oyama alapított. Full-contact küzdelmekről ismert, melyekben ütések erőteljesen, testen adják. A kemény edzésmódszereiről híres.</p>
                            <ul>
                                <li><strong>Alapító:</strong> Masutatsu Oyama</li>
                                <li><strong>Jellemzők:</strong> Full-contact, nagyon kemény edzés</li>
                                <li><strong>Kata:</strong> Taikyoku, Pinan, Sanchin, Tensho</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Sport / Verseny Karate -->
                    <div class="stilus-kartya">
                        <div class="stilus-kep">
                            <img src="res/WKF.jpg" alt="Sport Karate">
                        </div>
                        <div>
                            <h3>Sport / Verseny Karate</h3>
                            <p>A modern versenykarate, amely a WKF (World Karate Federation) szabályai szerint működik. A hangsúly a    pontszerzésen, technikai precizitáson és taktikán van. Védőfelszerelés használata kötelező.</p>
                            <ul>
                                <li><strong>Szervezet:</strong> WKF (World Karate Federation)</li>
                                <li><strong>Jellemzők:</strong> Pontrendszer, védőfelszerelés, időkorlát</li>
                                <li><strong>Versenyszámok:</strong> Kata, Kumite</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Fő részei-->
        <section id="foreszei" class="section">
            <div class="container">
                <h2>Fő részei</h2>
                <p class="alairas">Minden karatestílus e három alapvető gyakorlási formára épül</p>

                <div class="racs">
                    <!--Kihon-->
                    <div class="reszek-kartya">
                        <h3>Kihon (基本)</h3>
                        <p>Alapiskola</p>
                        <p>A kihon a karate alaptechnikáit foglalja magába: ütések, rúgások, blokkok és állások gyakorlását. Ezeket a gyakorlatokat általában sorban, előre meghatározott formában végzik, hogy a technikák tökéletesítésére összpontosíthassanak.</p>
                        <h4>Példák:</h4>
                        <ul>
                            <li>Oi-zuki (előre ütés)</li>
                            <li>Mae-geri (előrerúgás)</li>
                            <li>Age-uke (felfelé blokk)</li>
                            <li>Zenkutsu-dachi (előreállás)</li>
                        </ul>
                    </div>

                    <!--Kata-->
                    <div class="reszek-kartya">
                        <h3>Kata (形)</h3>
                        <p>Formagyakorlat</p>
                        <p>A kata előre meghatározott mozdulatsorok, melyek ellenféllel folytatott képzeletbeli küzdelmet ábrázolnak. Minden kata saját ritmussal, sebességgel és technikasorrenddel rendelkezik, és mély filozófiai jelentést hordoz.</p>
                        <h4>Népszerű katák:</h4>
                        <ul>
                            <li>Heian (békesség és nyugalom)</li>
                            <li>Tekki (lovasállás)</li>
                            <li>Bassai (erőd elfoglalása)</li>
                            <li>Kanku (égkapu)</li>
                        </ul>
                    </div>

                    <!--Kumite-->
                    <div class="reszek-kartya">
                        <h3>Kumite (組手)</h3>
                        <p>Küzdelem</p>
                        <p>A kumite a gyakorlók közötti küzdelmet jelenti, mely a legtöbb stílusban előre megállapított formában (ippon kumite) kezdődik, majd fokozatosan halad a szabad küzdelem (jiyu kumite) felé. A versenyeken pontrendszer alapján ítélik.</p>
                        <h4>Kumite típusok:</h4>
                        <ul>
                            <li>Ippon kumite (egy ütéses kumite)</li>
                            <li>Sanbon kumite (három ütéses kumite)</li>
                            <li>Jiyu ippon kumite (félszabad)</li>
                            <li>Jiyu kumite (szabad küzdelem)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--Sportolók-->
        <section id="sportolok" class="section">
            <div class="container">
                <h2>Híres sportolók</h2>
                <p class="alairas">A karate világszerte ismert versenyzői és mesterei</p>

                <div class="racs">

                    <!-- Luca Valdesi -->
                    <div class="versenyzo-kartya">
                        <div class="versenyzo-kep"><img src="res/Luca_Valdesi.jpg" alt="Luca Valdesi"></div>
                        <div class="versenyzo-info">
                            <h3>Luca Valdesi</h3>
                            <p class="versenyzo-orszag">Olaszország</p>
                            <p>Ötszörös világbajnok és hétszeres Európa-bajnok olasz karatéka. Az egyik legsikeresebb európai karatéka a történelemben.</p>
                            <div class="versenyzo-eredmenyek">
                                <h4>Legnagyobb sikerek:</h4>
                                <ul>
                                    <li>5x Világbajnok (2000, 2002, 2004, 2006, 2008)</li>
                                    <li>7x Európa-bajnok</li>
                                    <li>Világkupa-győztes</li>
                                    <li>Férfi kata legenda</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Sandra Sánchez -->
                    <div class="versenyzo-kartya">
                        <div class="versenyzo-kep"><img src="res/Sandra_Sanchez.jpg" alt="Sandra Sánchez"></div>
                        <div class="versenyzo-info">
                            <h3>Sandra Sánchez</h3>
                            <p class="versenyzo-orszag">Spanyolország</p>
                            <p>A női kata egyik legdominánsabb versenyzője, aki 2018-tól 2021-ig megszakítás nélkül vezette a világranglistát. Az első olimpiai aranyérmes női kata versenyző.</p>
                            <div class="versenyzo-eredmenyek">
                                <h4>Legnagyobb sikerek:</h4>
                                <ul>
                                    <li>Olimpiai aranyérmes (2020, Tokió)</li>
                                    <li>Világbajnok (2018, 2021)</li>
                                    <li>7x Európa-bajnok</li>
                                    <li>Rekordmennyiségű világkupa győzelem</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Ryo Kiyuna -->
                    <div class="versenyzo-kartya">
                        <div class="versenyzo-kep"><img src="res/Ryo_Kiyuna.jpg" alt="Ryo Kiyuna"></div>
                        <div class="versenyzo-info">
                            <h3>Ryo Kiyuna</h3>
                            <p class="versenyzo-orszag">Japán</p>
                            <p>A férfi kata domináns versenyzője, aki 2018-tól veretlenül nyerte minden jelentős nemzetközi versenyt, egészen az olimpiai aranyérméig.</p>
                            <div class="versenyzo-eredmenyek">
                                <h4>Legnagyobb sikerek:</h4>
                                <ul>
                                    <li>Olimpiai aranyérmes (2020, Tokió)</li>
                                    <li>Világbajnok (2016, 2018, 2021)</li>
                                    <li>Ázsiai játékok aranyérmes (2018)</li>
                                    <li>5x Ázsia-bajnok</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Rafael Aghayev -->
                    <div class="versenyzo-kartya">
                        <div class="versenyzo-kep"><img src="res/Rafael_Aghayev.jpg" alt="Rafael Aghayev"></div>
                        <div class="versenyzo-info">
                            <h3>Rafael Aghayev</h3>
                            <p class="versenyzo-orszag">Azerbajdzsán</p>
                            <p>Ötszörös világbajnok, kilencszeres Európa-bajnok, "a karate legenda" becenéven is ismert. Az egyik legsikeresebb férfi karatéka a történelemben.</p>
                            <div class="versenyzo-eredmenyek">
                                <h4>Legnagyobb sikerek:</h4>
                                <ul>
                                    <li>5x Világbajnok (2006, 2008, 2010, 2012, 2014)</li>
                                    <li>9x Európa-bajnok</li>
                                    <li>Európai játékok aranyérmes (2015, 2019)</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Jovana Preković -->
                    <div class="versenyzo-kartya">
                        <div class="versenyzo-kep"><img src="res/Jovana_Prekovic.jpg" alt="Jovana Preković"></div>
                        <div class="versenyzo-info">
                            <h3>Jovana Preković</h3>
                            <p class="versenyzo-orszag">Szerbia</p>
                            <p>Jovana Preković szerb világbajnok karatéka. Az egyik legsikeresebb szerb női karatéka, aki 2021-ben aranyérmet szerzett a tokiói olimpián.</p>
                            <div class="versenyzo-eredmenyek">
                                <h4>Legnagyobb sikerek:</h4>
                                <ul>
                                    <li>2x Világbajnok (2018, 2021)</li>
                                    <li>2x Európa-bajnok</li>
                                    <li>Olimpiai játékok aranyérmes (2020)</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Youssef Badawy -->
                    <div class="versenyzo-kartya">
                        <div class="versenyzo-kep"><img src="res/Youssef_Badawy.jpg" alt="Youssef Badawy"></div>
                        <div class="versenyzo-info">
                            <h3>Youssef Badawy</h3>
                            <p class="versenyzo-orszag">Egyiptom</p>
                            <p>Youssef Badawy egyiptomi világbajnok karatéka. Badawy az arab világ egyik legsikeresebb karatéja, aki nemcsak Afrika, hanem globális szinten is kiemelkedő eredményeket ért el.</p>
                            <div class="versenyzo-eredmenyek">
                                <h4>Legnagyobb sikerek:</h4>
                                <ul>
                                    <li>3x Világbajnok (2021, 2023, 2025)</li>
                                    <li>9x Karate1 Premier League győztes</li>
                                    <li>6x Afrikai Bajnok</li>
                                    <li>Vezeti a világ ranglistát -84kg-ban</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--Filozófia-->
        <section id="filozofia" class="section">
            <div class="container">
                <h2>A karate filozófiája</h2>
                <p class="alairas">A karate nem csupán harcművészet vagy sport, hanem életmód és filozófia is. A Do (道) karakter, ami "utat" jelent, a szellemi fejlődés folyamatát jelképezi, mely a gyakorlással párhuzamosan zajlik.</p>

                <div class="racs">
                    <div class="filozofia-kartya">
                        <h3><i class="fas fa-brain"></i> Elme</h3>
                        <p>A karate az önfegyelem, koncentráció és tisztelet fejlesztését szolgálja. A gyakorló tanulja meg kontrollálni gondolatait és érzelmeit.</p>
                    </div>

                    <div class="filozofia-kartya">
                        <h3><i class="fas fa-dumbbell"></i> Test</h3>
                        <p>Erő, rugalmasság, állóképesség és koordináció fejlesztése. A rendszeres gyakorlás egészséges testet és tartós fizikai kondíciót eredményez.</p>
                    </div>    

                    <div class="filozofia-kartya">
                        <h3><i class="fas fa-heart"></i> Szellem</h3>
                        <p>A karate a kitartás, alázat és becsületesség értékeit közvetíti. A fegyver csak végső esetben használható, önvédelemre.</p>
                    </div>
                </div>
            </div>
        </section>

        <!--Lábléc-->
        <footer>
            <div class="container">
                <p>A karate nem az ellenfél legyőzéséről szól, hanem a saját önmagunk legyőzéséről. A cél nem a győzelem, hanem a szellemi és fizikai fejlődés.</p>
                <p>2025 Karate Világa - Minden jog fenntartva.</p>
                <div>
                    <?php
                        include 'php/karate_social.php';
                        
                        foreach ($social_media as $key => $social) {
                            echo '<a href="' . $social['url'] . '" 
                                    target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="' . $social['icon'] .'"></i>
                                    </a>';
                        }
                    ?>
                </div>
            </div>
        </footer>
    </main>
</body>
</html>