<?php
/* 
Template Name: Ansioluettelo
*/
?>

<?php get_header();?>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script>
    function openModal() {
    document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
    document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>

<section class="page-wrap-id-25">
    <!-- Image Viewer -->
    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">

            <div class="mySlides">
            <div class="numbertext">1 / 6</div>
                <img src="img1_wide.jpg" style="width:100%">
            </div>

            <div class="mySlides">
            <div class="numbertext">2 / 6</div>
                <img src="img2_wide.jpg" style="width:100%">
            </div>

            <div class="mySlides">
            <div class="numbertext">3 / 6</div>
                <img src="img3_wide.jpg" style="width:100%">
            </div>

            <div class="mySlides">
            <div class="numbertext">4 / 6</div>
                <img src="img4_wide.jpg" style="width:100%">
            </div>

            <div class="mySlides">
            <div class="numbertext">5 / 6</div>
                <img src="img4_wide.jpg" style="width:100%">
            </div>

            <div class="mySlides">
            <div class="numbertext">6 / 6</div>
                <img src="img4_wide.jpg" style="width:100%">
            </div>
            
            <!-- Next/previous controls -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Caption text -->
            <div class="caption-container">
                <p id="caption"></p>
            </div>

            <!-- Thumbnail image controls -->
            <div class="column">
                <img class="demo" src="img1.jpg" onclick="currentSlide(1)" alt="Devatus">
            </div>

            <div class="column">
                <img class="demo" src="img2.jpg" onclick="currentSlide(2)" alt="Winellska">
            </div>

            <div class="column">
                <img class="demo" src="img3.jpg" onclick="currentSlide(3)" alt="Corptown">
            </div>

            <div class="column">
                <img class="demo" src="img4.jpg" onclick="currentSlide(4)" alt="GreenGroup">
            </div>

            <div class="column">
                <img class="demo" src="img4.jpg" onclick="currentSlide(5)" alt="DigitalStudent">
            </div>

            <div class="column">
                <img class="demo" src="img4.jpg" onclick="currentSlide(6)" alt="aXion">
            </div>
        </div>
    </div>
    <div class="container">
        <h1><?php the_title();?></h1>
        <div class="page-id-25">
            <div class="resume">
                <div class="resume_left">
                    <div class="resume_profile">
                        <img src="http://cv.test/wp-content/uploads/2021/02/Profile.jpg" alt="profile_pic">
                    </div>
                    <div class="resume_content">
                        <div class="resume_item resume_info">
                            <div class="title">
                                <p class="bold">mikael kolehmainen</p>
                                <p class="regular">Opiskelija</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-baby"></i>
                                    </div>
                                    <div class="data">
                                        21.08.2005
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-signs"></i>
                                    </div>
                                    <div class="data">
                                    Koulukatu 57 - 61, Vaasa <br /> Finland
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div class="data">
                                        +358 40 9310570
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="data">
                                        mikaelkolehmainen05@gmail.com
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="resume_item resume_skills">
                            <div class="title">
                                <p class="bold">Taidot</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="skill_name">
                                        Kestävyys
                                    </div>
                                    <div class="skill_progress">
                                        <span style="width: 90%;"></span>
                                    </div>
                                    <div class="skill_per">90%</div>
                                </li>
                                <li>
                                    <div class="skill_name">
                                        Toiveikas
                                    </div>
                                    <div class="skill_progress">
                                        <span style="width: 80%;"></span>
                                    </div>
                                    <div class="skill_per">80%</div>
                                </li>
                                <li>
                                    <div class="skill_name">
                                        Johtajuus
                                    </div>
                                    <div class="skill_progress">
                                        <span style="width: 75%;"></span>
                                    </div>
                                    <div class="skill_per">75%</div>
                                </li>
                                <li>
                                    <div class="skill_name">
                                        Rohkea
                                    </div>
                                    <div class="skill_progress">
                                        <span style="width: 70%;"></span>
                                    </div>
                                    <div class="skill_per">70%</div>
                                </li>
                                <li>
                                    <div class="skill_name">
                                        Luova
                                    </div>
                                    <div class="skill_progress">
                                        <span style="width: 55%;"></span>
                                    </div>
                                    <div class="skill_per">55%</div>
                                </li>
                                <li>
                                    <div class="skill_name">
                                        Innokas
                                    </div>
                                    <div class="skill_progress">
                                        <span style="width: 40%;"></span>
                                    </div>
                                    <div class="skill_per">40%</div>
                                </li>
                                <li>
                                    <div class="skill_name">
                                        Sosiaalinen kyky
                                    </div>
                                    <div class="skill_progress">
                                        <span style="width: 30%;"></span>
                                    </div>
                                    <div class="skill_per">30%</div>
                                </li>
                            </ul>
                        </div>
                        <div class="resume_item resume_skills">
                            <div class="title">
                                <p class="bold">Ohjelmointi taidot</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="skill_name">
                                        C#
                                    </div>
                                    <div class="skill_progress">
                                        <span style="width: 60%;"></span>
                                    </div>
                                    <div class="skill_per">60%</div>
                                </li>
                                <li>
                                    <div class="skill_name">
                                        HTML
                                    </div>
                                    <div class="skill_progress">
                                        <span style="width: 55%;"></span>
                                    </div>
                                    <div class="skill_per">55%</div>
                                </li>
                                <li>
                                    <div class="skill_name">
                                        CSS
                                    </div>
                                    <div class="skill_progress">
                                        <span style="width: 55%;"></span>
                                    </div>
                                    <div class="skill_per">55%</div>
                                </li>
                                <li>
                                    <div class="skill_name">
                                        Java
                                    </div>
                                    <div class="skill_progress">
                                        <span style="width: 50%;"></span>
                                    </div>
                                    <div class="skill_per">50%</div>
                                </li>
                                <li>
                                    <div class="skill_name">
                                        Flutter
                                    </div>
                                    <div class="skill_progress">
                                        <span style="width: 50%;"></span>
                                    </div>
                                    <div class="skill_per">50%</div>
                                </li>
                                <li>
                                    <div class="skill_name">
                                        Python
                                    </div>
                                    <div class="skill_progress">
                                        <span style="width: 40%;"></span>
                                    </div>
                                    <div class="skill_per">40%</div>
                                </li>
                                <li>
                                    <div class="skill_name">
                                        JS
                                    </div>
                                    <div class="skill_progress">
                                        <span style="width: 20%;"></span>
                                    </div>
                                    <div class="skill_per">20%</div>
                                </li>
                                <li>
                                    <div class="skill_name">
                                        C++
                                    </div>
                                    <div class="skill_progress">
                                        <span style="width: 20%;"></span>
                                    </div>
                                    <div class="skill_per">20%</div>
                                </li>
                            </ul>
                        </div>
                        <div class="resume_item resume_social">
                            <div class="title">
                                <p class="bold">Sosiaalit</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fab fa-facebook-square"></i>
                                    </div>
                                    <div class="data">
                                        <p class="semi-bold">Facebook</p>
                                        <p><a href="https://www.facebook.com/mikael.kolehmainen.142/" target="_blank">Mikael Kolehmainen</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fab fa-instagram-square"></i>
                                    </div>
                                    <div class="data">
                                        <p class="semi-bold">Instagram</p>
                                        <p><a href="https://www.instagram.com/michael_k_2005/" target="_blank">michael_k_2005</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fab fa-youtube-square"></i>
                                    </div>
                                    <div class="data">
                                        <p class="semi-bold">YouTube</p>
                                        <p><a href="https://www.youtube.com/channel/UCb4ZkKi2XqeopJUEQcTIR8w?view_as=subscriber" target="_blank">Super Michael</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fab fa-github-square"></i>
                                    </div>
                                    <div class="data">
                                        <p class="semi-bold">GitHub</p>
                                        <p><a href="https://github.com/Super-Michael-05" target="_blank">Super-Michael-05</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fab fa-twitch"></i>
                                    </div>
                                    <div class="data">
                                        <p class="semi-bold">Twitch</p>
                                        <p><a href="https://www.twitch.tv/super__michael" target="_blank">super_michael_</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="resume_right">
                    <div class="resume_item resume_about">
                        <div class="title">
                            <p class="bold">Minusta</p>
                        </div>
                        <p>Tervetuloa ansioluetteloni, tällä sivustolla on kaikki vuosien varella saaneet ansiot. Olen hyvin työläs ja ahkera luontestani. Olen myös valmis ottaman suuria haasteita ja tehdä töitä ahkerasti, tästä ansioluettelosta näet kaikki taitoni eri aloissa.</p>
                    </div>
                    <div class="resume_item resume_work">
                        <div class="title">
                            <p class="bold">Työkokemus</p>
                        </div>
                        <ul>
                            <li>
                                <div class="date">09.09.2020 - nykyhetki</div>
                                <div class="info">
                                    <p class="semi-bold">Suomen Suoramainonta - SSM</p> 
                                    <p>Olin mainosten ja lehtien jakaja Suomen Suoramainonalle.</p>
                                </div>
                            </li>
                            <li>
                                <div class="date">31.08.2020 - 04.09.2020</div>
                                <div class="info">
                                    <p class="semi-bold">Työelämään tutustuminen - TET <i class="far fa-image" onclick="openModal();currentSlide(1)" class="hover-shadow"></i></p> 
                                    <p>Olin mobiilikehittäjä Devatus Oy:lla yhden viikon, käytin ohjelmointikieltä Flutter. Vastuuhenkilön (Sanna Lundström) kommentit: "Eleven visade sig att vara en duktig programmerare och gjorde sin uppgift bra.", suomeksi: "Opiskelija osoittautui hyväksi ohjelmoijaksi ja teki työnsä hyvin."</p>
                                </div>
                            </li>
                            <li>
                                <div class="date">12.10.2018</div>
                                <div class="info">
                                    <p class="semi-bold">Työelämään tutustuminen - TET</p> 
                                    <p>Olin vahtimestarina Gesterbyn koulussa kellon ajat 9:00 - 11:30. Työtehtäväni olivat seuraavat tyhjentää roskakorit, vastaanottaa koulun postit ja vartioida koulun käytäviä. Työnantajani(Kari Martiskainen) kommentit: "Kohtelias, kiinnostunut ja yhteistyö sujui hyvin. Kiitos!"</p>
                                    <br>
                                    <p>Olin myös siivooja Gesterbyn koulussa kellon ajat 12 - 14:30. Työtehtäväni olivat seuraavat siivota koulun luokkahuoneet ja käytävät. Työnantajani(Pom Pattamai Hinom) kommentit: "positiivinen, haluaa oppia uusia asioita, kuuntelee tarkasti, ystävällinen ja reippaasti tekee töitä."</p>
                                </div>
                            </li>
                            <li>
                                <div class="date">29.05.2018</div> 
                                <div class="info">
                                    <p class="semi-bold">Yrityskylä</p> 
                                    <p>Olin Espoon Yrityskylässä. "Yrityskylä on maailman parhaana koulutusinnovaationa palkittu suomalainen oppimiskokonaisuus. Tarjoamme kuudes- ja yhdeksäsluokkalaisille myönteisiä kokemuksia työelämästä, taloudesta ja yhteiskunnasta. Mikä parasta, Yrityskylä perustuu opetussuunnitelmaan." Työtehtäväni olivat seuraavat pitää silmällä työntekijöitä, huolehtia yrityksen taloudesta ja pitää kokouksia työntekijöille.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="resume_item resume_education">
                        <div class="title">
                            <p class="bold">Koulutus</p>
                        </div>
                        <ul>
                            <li>
                                <div class="date">13.08.2020 - nykyhetki</div> 
                                <div class="info">
                                    <p class="semi-bold">Vasa Övningsskola (peruskoulu)</p> 
                                    <p>Olin varapuheenjohtaja oppilaskunnassa.</p>
                                </div>
                            </li>
                            <li>
                                <div class="date">07.01.2014 - 01.06.2020</div> 
                                <div class="info">
                                    <p class="semi-bold">Winellska skolan (peruskoulu)</p> 
                                    <p>Olin digioppilas ja vihreässä ryhmässä.</p>
                                </div>
                            </li>
                            <li>
                                <div class="date">08.08.2012 - 22.12.2013</div>
                                <div class="info">
                                    <p class="semi-bold">Martinlaakson koulu (peruskoulu)</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="resume_item resume_position">
                        <div class="title">
                            <p class="bold">Luottamustehtävät</p>
                        </div>
                        <ul>
                            <li>
                                <div class="date">2020 - 2021</div> 
                                <div class="info">
                                    <p class="semi-bold">Oppilaskunta</p> 
                                    <p>Olin varapuheenjohtaja oppilaskunnassa Vasa Övningsskola:ssa.</p>
                                </div>
                            </li>
                            <li>
                                <div class="date">2019 - 2020</div> 
                                <div class="info">
                                    <p class="semi-bold">Vihreä ryhmä</p> 
                                    <p>Olin vihreässä ryhmässä Winellska skola:ssa. Vihreä ryhmä luovat opettavaa materiaalia ilmastosta ja miten vaikuttaa ilmastoon.</p>
                                </div>
                            </li>
                            <li>
                                <div class="date">2019 - 2020</div> 
                                <div class="info">
                                    <p class="semi-bold">Digioppilas</p> 
                                    <p>Olin digioppilas Winellska skola:ssa. Digioppilat auttavat opettajia ja toisia oppilaita IT ja teknika kysymyksissä.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="resume_item resume_course">
                        <div class="title">
                            <p class="bold">Kurssit</p>
                        </div>
                        <ul>
                            <li>
                                <div class="date">11.12.2018 - 12.12.2018</div> 
                                <div class="info">
                                    <p class="semi-bold">aXion - kurssi</p> 
                                    <p>Kurssi  sisältää mm. harjoituksia jotka parantavat yhteistyötä ryhmässä ja kyky tehdä päätöksiä.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="resume_item resume_hobby">
                        <div class="title">
                            <p class="bold">Harrastukset</p>
                        </div>
                        <ul>
                            <li><i class="fas fa-book"></i></li>
                            <li><i class="fas fa-laptop-code"></i></li>
                            <li><i class="fas fa-dumbbell"></i></li>
                            <li><i class="fas fa-gamepad"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>