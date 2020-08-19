<!DOCTYPE html>
<html lang="fi">
<head>
	<meta charset="UTF-8">
	<title id="title">Mikael Kolehmainen - Ansioluettelo</title>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <style>
    @import url("https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  font-family: "Montserrat", sans-serif;
}

.resume .resume_right img {
  width: 40px;
  height: 27px;
  border-style: solid;
  border-color: #0bb5f4;
}

body {
  background: #585c68;
  font-size: 14px;
  line-height: 22px;
  color: #555555;
}

.bold {
  font-weight: 700;
  font-size: 20px;
  text-transform: uppercase;
}

.semi-bold {
  font-weight: 500;
  font-size: 16px;
}

.resume {
  width: 860px;
  height: auto;
  display: flex;
  margin: 50px auto;
}

.resume .resume_left {
  width: 360px;
  background: #0bb5f4;
}

.resume .resume_left .resume_profile {
  width: 100%;
  height: 360px;
}

.resume .resume_left .resume_profile img {
  width: 100%;
  height: 100%;
}

.resume .resume_left .resume_content {
  padding: 0 25px;
}

.resume .title {
  margin-bottom: 20px;
}

.resume .resume_left .bold {
  color: #fff;
}

.resume .resume_left .regular {
  color: #b1eaff;
}

.resume .resume_item {
  padding: 25px 0;
  border-bottom: 2px solid #b1eaff;
}

.resume .resume_left .resume_item:last-child,
.resume .resume_right .resume_item:last-child {
  border-bottom: 0px;
}

.resume .resume_left ul li {
  display: flex;
  margin-bottom: 10px;
  align-items: center;
}

.resume .resume_left ul li:last-child {
  margin-bottom: 0;
}

.resume .resume_left ul li .icon {
  width: 35px;
  height: 35px;
  background: #fff;
  color: #0bb5f4;
  border-radius: 50%;
  margin-right: 15px;
  font-size: 16px;
  position: relative;
}

.resume .icon i,
.resume .resume_right .resume_hobby ul li i {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.resume .resume_left ul li .data {
  color: #b1eaff;
}

.resume .resume_left .resume_skills ul li {
  display: flex;
  margin-bottom: 10px;
  color: #b1eaff;
  justify-content: space-between;
  align-items: center;
}

.resume .resume_left .resume_skills ul li .skill_name {
  width: 25%;
}

.resume .resume_left .resume_skills ul li .skill_progress {
  width: 50%;
  margin: 0 6px;
  height: 5px;
  background: #009fd9;
  position: relative;
}

.resume .resume_left .resume_skills ul li .skill_per {
  width: 15%;
}

.resume .resume_left .resume_skills ul li .skill_progress span {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  background: #fff;
}

.resume .resume_left .resume_social .semi-bold {
  color: #fff;
  margin-bottom: 3px;
}

.resume .resume_right {
  width: 540px;
  background: #fff;
  padding: 25px;
}

.resume .resume_right .bold {
  color: #0bb5f4;
}

.resume .resume_right .resume_work ul,
.resume .resume_right .resume_education ul {
  padding-left: 40px;
  overflow: hidden;
}

.resume .resume_right ul li {
  position: relative;
}

.resume .resume_right ul li .date {
  font-size: 16px;
  font-weight: 500;
  margin-bottom: 15px;
}

.resume .resume_right ul li .info {
  margin-bottom: 20px;
}

.resume .resume_right ul li:last-child .info {
  margin-bottom: 0;
}

.resume .resume_right .resume_hobby ul {
  display: flex;
  justify-content: space-between;
}

.resume .resume_right .resume_hobby ul li {
  width: 80px;
  height: 80px;
  border: 2px solid #0bb5f4;
  border-radius: 50%;
  position: relative;
  color: #0bb5f4;
}

.resume .resume_right .resume_hobby ul li i {
  font-size: 30px;
}

.resume .resume_right .resume_hobby ul li:before {
  content: "";
  position: absolute;
  top: 40px;
  right: -52px;
  width: 50px;
  height: 2px;
  background: #0bb5f4;
}

.resume .resume_right .resume_hobby ul li:last-child:before {
  display: none;
}

footer {
  background: #fff;
  color: #0bb5f4;
  text-align: center;
}
  </style>
</head>
<body>
<div class="resume">
   <div class="resume_left">
     <div class="resume_profile">
       <img src="Images/Profile.jpg" alt="profile_pic">
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold">mikael kolehmainen</p>
           <p class="regular" id="profession">Opiskelija</p>
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
               Ekebynmäki 10, Siuntio <br /> Finland
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
          <p class="bold" id="skills">Taidot</p>
        </div>
        <ul>
         <li>
           <div class="skill_name" id="skill_1">
             Kestävyys
           </div>
           <div class="skill_progress">
             <span style="width: 90%;"></span>
           </div>
           <div class="skill_per">90%</div>
         </li>
         <li>
           <div class="skill_name" id="skill_2">
             Toiveikas
           </div>
           <div class="skill_progress">
             <span style="width: 80%;"></span>
           </div>
           <div class="skill_per">80%</div>
         </li>
         <li>
          <div class="skill_name" id="skill_3">
            Johtajuus
          </div>
          <div class="skill_progress">
            <span style="width: 75%;"></span>
          </div>
          <div class="skill_per">75%</div>
        </li>
         <li>
           <div class="skill_name" id="skill_4">
             Rohkea
           </div>
           <div class="skill_progress">
             <span style="width: 70%;"></span>
           </div>
           <div class="skill_per">70%</div>
         </li>
         <li>
           <div class="skill_name" id="skill_5">
             Luovuus
           </div>
           <div class="skill_progress">
             <span style="width: 55%;"></span>
           </div>
           <div class="skill_per">55%</div>
         </li>
         <li>
           <div class="skill_name" id="skill_6">
             Innokas
           </div>
           <div class="skill_progress">
             <span style="width: 40%;"></span>
           </div>
           <div class="skill_per">40%</div>
         </li>
         <li>
           <div class="skill_name" id="skill_7">
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
           <p class="bold" id="programmingskills">Ohjelmointi taidot</p>
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
           <p class="bold" id="social">Sosiaalit</p>
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
               <p><a href="https://www.instagram.com/mikael_k_05/" target="_blank">mikael_k_05</a></p>
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
              <p><a href="https://www.twitch.tv/super_michael_" target="_blank">super_michael_</a></p>
            </div>
          </li>
         </ul>
       </div>
     </div>
  </div>
  <div class="resume_right">
    <a href="#fin" data-reload><img src="Images/FIN.png"></a>
    <a href="#sve" data-reload><img src="Images/SVE.svg"></a>
    <a href="#eng" data-reload><img src="Images/ENG.jpg"></a>
    <div class="resume_item resume_about">
        <div class="title">
           <p class="bold" id="about">Minusta</p>
         </div>
        <p id="aboutText">Tervetuloa ansioluetteloni, tällä sivustolla on kaikki vuosien varella saaneet ansiot. Olen hyvin työläs ja ahkera luontestani. Olen myös valmis ottaman suuria haasteita ja tehdä töitä ahkerasti, tästä ansioluettelosta näet kaikki taitoni eri aloissa.</p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold" id="experience">Työkokemus</p>
         </div>
        <ul id="line_1">
          <li>
            <div class="date" id="date_1">12.10.2018</div>
            <div class="info">
                   <p class="semi-bold" id="WPP">Työelämään tutustuminen - TET</p> 
                <p id="WPPText">Olin vahtimestarina Gesterbyn koulussa kellon ajat 9:00 - 11:30. Työtehtäväni olivat seuraavat tyhjentää roskakorit, vastaanottaa koulun postit ja vartioida koulun käytäviä. Työnantajani(Kari Martiskainen) kommentit: "Kohtelias, kiinnostunut ja yhteistyö sujui hyvin. Kiitos!"</p>
                <br>
                <p id="WPPText_2">Olin myös siivooja Gesterbyn koulussa kellon ajat 12 - 14:30. Työtehtäväni olivat seuraavat siivota koulun luokkahuoneet ja käytävät. Työnantajani(Pom Pattamai Hinom) kommentit: "positiivinen, haluaa oppia uusia asioita, kuuntelee tarkasti, ystävällinen ja reippaasti tekee töitä."</p>
              </div>
          </li>
            <li>
                <div class="date" id="date_2">29.05.2018</div> 
                <div class="info">
                     <p class="semi-bold" id="corptown">Yrityskylä</p> 
                  <p id="corptownText">Olin Espoon Yrityskylässä. "Yrityskylä on maailman parhaana koulutusinnovaationa palkittu suomalainen oppimiskokonaisuus. Tarjoamme kuudes- ja yhdeksäsluokkalaisille myönteisiä kokemuksia työelämästä, taloudesta ja yhteiskunnasta. Mikä parasta, Yrityskylä perustuu opetussuunnitelmaan." Työtehtäväni olivat seuraavat pitää silmällä työntekijöitä, huolehtia yrityksen taloudesta ja pitää kokouksia työntekijöille.</p>
                </div>
            </li>
        </ul>
    </div>
    <div class="resume_item resume_education">
      <div class="title">
           <p class="bold" id="education">Koulutus</p>
         </div>
      <ul id="line_2">
              <li>
                <div class="date" id="date_5">13.08.2020 - nykyhetki</div> 
                <div class="info">
                    <p class="semi-bold" id="school_3">Vasa Övningsskola (peruskoulu)</p> 
                  <p id="schoolText_3">Olin vuoden Vaasassa koulussa.</p>
                </div>
            </li>
            <li>
                <div class="date" id="date_3">07.01.2014 - 01.06.2020</div> 
                <div class="info">
                     <p class="semi-bold" id="school">Winellska skolan (peruskoulu)</p> 
                  <p id="schoolText">Olin digioppilas ja vihreässä ryhmässä.</p>
                </div>
            </li>
            <li>
              <div class="date" id="date_4">08.08.2012 - 22.12.2013</div>
              <div class="info">
                     <p class="semi-bold" id="school_2">Martinlaakson koulu (peruskoulu)</p> 
                  <p id="schoolText_2">Aloitin peruskoulun Martinlaakson koulussa, kävin siellä noin yksi ja puoli vuotta ja sitten vaihdoin koulua, 'Winellska skolan' oli uuden koulun nimi.</p>
                </div>
            </li>
        </ul>
    </div>
    <div class="resume_item resume_hobby">
      <div class="title">
           <p class="bold" id="hobbies">Harrastukset</p>
         </div>
       <ul>
         <li><i class="fas fa-book"></i></li>
         <li><i class="fas fa-laptop-code"></i></li>
         <li><i class="fas fa-running"></i></li>
         <li><i class="fas fa-gamepad"></i></li>
      </ul>
    </div>
  </div>
</div>
<footer id="creator">Sivun tekijä: Mikael Kolehmainen 00.00.0000</footer>
<script>
  var dataReload = document.querySelectorAll("[data-reload]");

var date = "12.08.2020";
var englishDate = "08/12/2020"

function start() {
    if (!window.location.hash) {
        window.location.hash = "#fin"
    }
}
window.start();

var language = {
    fin: {
        title: "Mikael Kolehmainen - Ansioluettelo",
        profession: "Opiskelija",
        skills: "Taidot",
        skill_1: "Kestävyys",
        skill_2: "Toiveikas",
        skill_3: "Johtajuus",
        skill_4: "Rohkea",
        skill_5: "Luovuus",
        skill_6: "Innokas",
        skill_7: "Sosiaalinen kyky",
        programmingskills: "Ohjelmointi taidot",
        social: "Sosiaalit",
        about: "Minusta",
        aboutText: "Tervetuloa ansioluetteloni, tällä sivustolla on kaikki vuosien varella saaneet ansiot. Olen hyvin työläs ja ahkera luontestani. Olen myös valmis ottaman suuria haasteita ja tehdä töitä ahkerasti, tästä ansioluettelosta näet kaikki taitoni eri aloissa.",
        experience: "Työkokemus",
        date_1: "12.10.2018",
        WPP: "Työelämään tutustuminen - TET",
        WPPText: "Olin vahtimestarina Gesterbyn koulussa kellon ajat 9:00 - 11:30. Työtehtäväni olivat seuraavat tyhjentää roskakorit, vastaanottaa koulun postit ja vartioida koulun käytäviä. Työnantajani(Kari Martiskainen) kommentit: \"Kohtelias, kiinnostunut ja yhteistyö sujui hyvin. Kiitos!\"",
        WPPText_2: "Olin myös siivooja Gesterbyn koulussa kellon ajat 12 - 14:30. Työtehtäväni olivat seuraavat siivota koulun luokkahuoneet ja käytävät. Työnantajani(Pom Pattamai Hinom) kommentit: \"Positiivinen, haluaa oppia uusia asioita, kuuntelee tarkasti, ystävällinen ja reippaasti tekee töitä.",
        date_2: "29.05.2018",
        corptown: "Yrityskylä",
        corptownText: "Olin Espoon Yrityskylässä. \"Yrityskylä on maailman parhaana koulutusinnovaationa palkittu suomalainen oppimiskokonaisuus. Tarjoamme kuudes- ja yhdeksäsluokkalaisille myönteisiä kokemuksia työelämästä, taloudesta ja yhteiskunnasta. Mikä parasta, Yrityskylä perustuu opetussuunnitelmaan.\" Työtehtäväni olivat seuraavat pitää silmällä työntekijöitä, huolehtia yrityksen taloudesta ja pitää kokouksia työntekijöille.",
        education: "Koulutus",
        date_3: "07.01.2014 - 01.06.2020",
        school: "Winellska skolan (peruskoulu)",
        schoolText: "Olin digioppilas ja vihreässä ryhmässä.",
        date_4: "08.08.2012 - 22.12.2013",
        school_2: "Martinlaakson koulu (peruskoulu)",
        schoolText_2: "Aloitin peruskoulun Martinlaakson koulussa, kävin siellä noin yksi ja puoli vuotta ja sitten vaihdoin koulua, 'Winellska skolan' oli uuden koulun nimi.",
        hobbies: "Harrastukset",
        creator: "Sivun tekijä: Mikael Kolehmainen " + date,
        school_3: "Vasa Övningsskola (peruskoulu)",
        schoolText_3: "Olin vuoden Vaasassa koulussa.",
        date_5: "13.08.2020 - nykyhetki"
    },
    sve: {
        title: "Mikael Kolehmainen - CV",
        profession: "Elev",
        skills: "Färdigheter",
        skill_1: "Uthållighet",
        skill_2: "Hoppfull",
        skill_3: "Ledarskap",
        skill_4: "Modig",
        skill_5: "Kreativ",
        skill_6: "Entusiastisk",
        skill_7: "Social Förmåga",
        programmingskills: "Programmerings färdigheter",
        social: "Sociala",
        about: "Om mig",
        aboutText: "Välkommen till min CV, på den här sidan finns allting jag har åstadkommit under åren. Jag är väldigt arbetsam och flitig. Jag är också färdig att ta stora utmaningar och arbeta flitigt, från denna CV ser du alla mina färdigheter i olika branscher.",
        experience: "Arbetserfarenhet",
        date_1: "12.10.2018",
        WPP: "Praktisk arbetslivsorientering - PRAO",
        WPPText: "Jag var vaktmästare i Gesterbyn koulu mellan 9 och 11:30. Tömma skräpkorgarna, ta emot skolans post och vakta skolans korridorer var mina arbetsuppgifter. Min arbetsgivares(Kari Martiskainen) kommentarer: \"Kohtelias, kiinnostunut ja yhteistyö sujui hyvin. Kiitos!\", på svenska: Artig, intresserad och samarbetet for bra. Tack!",
        WPPText_2: "Jag var också en städerska i Gesterbyn koulu mellan 12 och 14:30. Städa klassrummen och korridorrarna var mina arbetsuppifter. Min arbetsgivares(Pom Pattamai Hinom) kommentarer: \"Positiivinen, haluaa oppia uusia asioita, kuuntelee tarkasti, ystävällinen ja reippaasti tekee töitä\", på svenska: Positiv, vill lära sig nya saker, lyssnar precist, vänlig och arbetar flitigt.",
        date_2: "29.05.2018",
        corptown: "Företagsbyn",
        corptownText: "Jag var i Yrityskylä i Esbo. \"Företagsbyn är en finländsk lärandemiljö som belönats som världens bästa utbildningsinnovation. Vi erbjuder sjätte- och niondeklassister positiva erfarenheter av arbetsliv, ekonomi och samhälle. Det bästa är, att Företagsbyn grundar sig på läroplanen.\" Hålla ett öga på arbetarna, sköta om företagets ekonomi och hålla möten för arbetarna.",
        education: "Utbildning",
        date_3: "07.01.2014 - 01.06.2020",
        school: "Winellska skolan (grundskola)",
        schoolText: "Jag var en digielev och i gröna gruppen.",
        date_4: "08.08.2012 - 22.12.2013",
        school_2: "Martinlaakson koulu (grundskola)",
        schoolText_2: "Jag började grundskolan i Martinlaakson koulu, jag gick där i skola i ett och ett halvt år och sen böt jag skola, 'Winellska skolan' var nya skolans namn.",
        hobbies: "Hobbyn",
        creator: "Sidans tilverkare: Mikael Kolehmainen " + date,
        school_3: "Vasa Övningsskola (grundskola)",
        schoolText_3: "Jag var ett år i Vasa i skola.",
        date_5: "13.08.2020 - nutid"
    },
    eng: {
        title: "Mikael Kolehmainen - CV",
        profession: "Student",
        skills: "Skills",
        skill_1: "Endurance",
        skill_2: "Hopeful",
        skill_3: "Leadership",
        skill_4: "Brave",
        skill_5: "Creative",
        skill_6: "Avid",
        skill_7: "Social ability",
        programmingskills: "Programming skills",
        social: "Socials",
        about: "About me",
        aboutText: "Welcome to my CV, on this site are all my achievements that I accomplished throughout the years. I'm hard-working and assiduous. I'm also ready to take huge challenges and work diligently, from this CV you can see all my skills in different lines of work.",
        experience: "Work experience",
        date_1: "10/12/2018",
        WPP: "Work practice program",
        WPPText: "I was a porter in Gesterbyn koulu from 9 AM to 11:30 AM. My work assignments were to empty the trashcans, receive the schools mail and guard the schools corridors. My employers(Kari Martiskainen) comments: \"Kohtelias, kiinnostunut ja yhteistyö sujui hyvin\", on English: Polite, interested and liaison went well. Thanks!",
        WPPText_2: "I was also a janitor in Gesterbyn koulu from 12 PM to 2:30 PM. My work assignments were to clean the classrooms and corridors. My employers(Pom Pattamai Hinom) comments: \"Positiivinen, haluaa oppia uusia asioita, kuuntelee tarkasti, ystävällinen ja reippaasti tekee töitä\", on English: Positive, curious, listens closely, friendly and works assiduously.",
        date_2: "05/29/2018",
        corptown: "Yrityskylä",
        corptownText: "I was in Yrityskylä in Espoo. \"Yrityskylä is a Finnish learning concept which has been recognised as the world’s best education innovation. Its story began in 2010. We offer school children in grades six and nine positive experiences of working life, the economy and society and encourage entrepreneurship. To top it all off, Yrityskylä is based on a curriculum.\" My work assignments were to keep an eye on the employees",
        education: "Education",
        date_3: "01/07/2014 - 06/01/2020",
        school: "Winellska skolan (comprehensive school)",
        schoolText: "I was a digital student and in the green group.",
        date_4: "08/08/2012 - 12/22/2013",
        school_2: "Martinlaakson koulu (comprehensive school)",
        schoolText_2: "I started comprehensive school in Martinlaakson koulu, I went to school one and a half year and then I changed school, 'Winellska skolan' was the new schools name.",
        hobbies: "Hobbies",
        creator: "Page creator: Mikael Kolehmainen " + englishDate,
        school_3: "Vasa Övningsskola (comprehensive school)",
        schoolText_3: "I lived one year in Vaasa and went to a Vaasa's school.",
        date_5: "08/13/2020 - present"
    }
};

    if (window.location.hash) {
        if (window.location.hash === "#sve") {
            profession.textContent = language.sve.profession;
            title.textContent = language.sve.title;
            skills.textContent = language.sve.skills;
            skill_1.textContent = language.sve.skill_1;
            skill_2.textContent = language.sve.skill_2;
            skill_3.textContent = language.sve.skill_3;
            skill_4.textContent = language.sve.skill_4;
            skill_5.textContent = language.sve.skill_5;
            skill_6.textContent = language.sve.skill_6;
            skill_7.textContent = language.sve.skill_7;
            programmingskills.textContent = language.sve.programmingskills;
            social.textContent = language.sve.social;
            about.textContent = language.sve.about;
            aboutText.textContent = language.sve.aboutText;
            experience.textContent = language.sve.experience;
            date_1.textContent = language.sve.date_1;
            WPP.textContent = language.sve.WPP;
            WPPText.textContent = language.sve.WPPText;
            WPPText_2.textContent = language.sve.WPPText_2;
            date_2.textContent = language.sve.date_2;
            corptown.textContent = language.sve.corptown;
            corptownText.textContent = language.sve.corptownText;
            education.textContent = language.sve.education;
            date_3.textContent = language.sve.date_3;
            school.textContent = language.sve.school;
            schoolText.textContent = language.sve.schoolText;
            date_4.textContent = language.sve.date_4;
            school_2.textContent = language.sve.school_2;
            schoolText_2.textContent = language.sve.schoolText_2;
            hobbies.textContent = language.sve.hobbies;
            creator.textContent = language.sve.creator;
            school_3.textContent = language.sve.school_3;
            schoolText_3.textContent = language.sve.schoolText_3;
            date_5.textContent = language.sve.date_5;
            
            var style = document.createElement('style');
            style.innerHTML = `
            .resume .resume_right .resume_work ul li:before,
            .resume .resume_right .resume_education ul li:before  {
                content: "";
                position: absolute;
                top: 5px;
                left: -25px;
                width: 6px;
                height: 6px;
                border-radius: 50%;
                border: 2px solid #0bb5f4;
            }
            
            .resume .resume_right .resume_work ul li:after,
            .resume .resume_right .resume_education ul li:after {
                content: "";
                position: absolute;
                top: -373px;
                left: -21px;
                width: 2px;
                height: 380px;
                background: #0bb5f4;
            `;
            document.head.appendChild(style);
        } else if (window.location.hash === "#eng") {
            profession.textContent = language.eng.profession;
            title.textContent = language.eng.title;
            skills.textContent = language.eng.skills;
            skill_1.textContent = language.eng.skill_1;
            skill_2.textContent = language.eng.skill_2;
            skill_3.textContent = language.eng.skill_3;
            skill_4.textContent = language.eng.skill_4;
            skill_5.textContent = language.eng.skill_5;
            skill_6.textContent = language.eng.skill_6;
            skill_7.textContent = language.eng.skill_7;
            programmingskills.textContent = language.eng.programmingskills;
            social.textContent = language.eng.social;
            about.textContent = language.eng.about;
            aboutText.textContent = language.eng.aboutText;
            experience.textContent = language.eng.experience;
            date_1.textContent = language.eng.date_1;
            WPP.textContent = language.eng.WPP;
            WPPText.textContent = language.eng.WPPText;
            WPPText_2.textContent = language.eng.WPPText_2;
            date_2.textContent = language.eng.date_2;
            corptown.textContent = language.eng.corptown;
            corptownText.textContent = language.eng.corptownText;
            education.textContent = language.eng.education;
            date_3.textContent = language.eng.date_3;
            school.textContent = language.eng.school;
            schoolText.textContent = language.eng.schoolText;
            date_4.textContent = language.eng.date_4;
            school_2.textContent = language.eng.school_2;
            schoolText_2.textContent = language.eng.schoolText_2;
            hobbies.textContent = language.eng.hobbies;
            creator.textContent = language.eng.creator;
            school_3.textContent = language.eng.school_3;
            schoolText_3.textContent = language.eng.schoolText_3;
            date_5.textContent = language.eng.date_5;
            
            var style = document.createElement('style');
            style.innerHTML = `
            .resume .resume_right .resume_work ul li:before,
            .resume .resume_right .resume_education ul li:before  {
                content: "";
                position: absolute;
                top: 5px;
                left: -25px;
                width: 6px;
                height: 6px;
                border-radius: 50%;
                border: 2px solid #0bb5f4;
            }
            
            .resume .resume_right .resume_work ul li:after,
            .resume .resume_right .resume_education ul li:after {
                content: "";
                position: absolute;
                top: -350px;
                left: -21px;
                width: 2px;
                height: 355px;
                background: #0bb5f4;
            `;
            document.head.appendChild(style);
        } else if (window.location.hash === "#fin") {
            profession.textContent = language.fin.profession;
            title.textContent = language.fin.title;
            skills.textContent = language.fin.skills;
            skill_1.textContent = language.fin.skill_1;
            skill_2.textContent = language.fin.skill_2;
            skill_3.textContent = language.fin.skill_3;
            skill_4.textContent = language.fin.skill_4;
            skill_5.textContent = language.fin.skill_5;
            skill_6.textContent = language.fin.skill_6;
            skill_7.textContent = language.fin.skill_7;
            programmingskills.textContent = language.fin.programmingskills;
            social.textContent = language.fin.social;
            about.textContent = language.fin.about;
            aboutText.textContent = language.fin.aboutText;
            experience.textContent = language.fin.experience;
            date_1.textContent = language.fin.date_1;
            WPP.textContent = language.fin.WPP;
            WPPText.textContent = language.fin.WPPText;
            WPPText_2.textContent = language.fin.WPPText_2;
            date_2.textContent = language.fin.date_2;
            corptown.textContent = language.fin.corptown;
            corptownText.textContent = language.fin.corptownText;
            education.textContent = language.fin.education;
            date_3.textContent = language.fin.date_3;
            school.textContent = language.fin.school;
            schoolText.textContent = language.fin.schoolText;
            date_4.textContent = language.fin.date_4;
            school_2.textContent = language.fin.school_2;
            schoolText_2.textContent = language.fin.schoolText_2;
            hobbies.textContent = language.fin.hobbies;
            creator.textContent = language.fin.creator;
            school_3.textContent = language.fin.school_3;
            schoolText_3.textContent = language.fin.schoolText_3;
            date_5.textContent = language.fin.date_5;

            var style = document.createElement('style');
            style.innerHTML = `
            .resume .resume_right .resume_work ul li:before,
            .resume .resume_right .resume_education ul li:before  {
                content: "";
                position: absolute;
                top: 5px;
                left: -25px;
                width: 6px;
                height: 6px;
                border-radius: 50%;
                border: 2px solid #0bb5f4;
            }
            
            .resume .resume_right .resume_work ul li:after,
            .resume .resume_right .resume_education ul li:after {
                content: "";
                position: absolute;
                top: -307px;
                left: -21px;
                width: 2px;
                height: 312px;
                background: #0bb5f4;
            `;
            document.head.appendChild(style);
        }
    }

    for (i = 0; i <= dataReload.length; i++) {
        dataReload[i].onclick = function() {
            setTimeout(function () {
                location.reload();
              }, 100);
        };
    }
</script>
</body>
</html>