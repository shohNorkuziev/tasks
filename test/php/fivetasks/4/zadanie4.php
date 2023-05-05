<?php

// Определяем массив гороскопов на каждый день недели вперед для каждого знака зодиака
$horoscopes = array(
    "Овен" => array(
        "Понедельник" => "Сегодня вы будете одним из лучших представителей человечества, преисполненным лучшими чувствами к остальным его представителям. Только никому об этом не говорите, обидятся",
        "Вторник" => "Вы можете почувствовать, что у вас слишком много обязанностей на работе или дома. Попробуйте найти способ справиться со стрессом.",
        "Среда" => "Сегодня вы можете столкнуться с некоторыми препятствиями, но не отчаивайтесь. Вам удастся преодолеть их, если будете настойчивыми и терпеливыми.",
        "Четверг" => "Ваше терпение и настойчивость будут награждены сегодня. Вы можете получить приятную новость от друзей или коллег.",
        "Пятница" => "Сегодня вы можете ощущать неуверенность в себе или сомнения в своих способностях. Не давайте этому чувству власти над вами.",
        "Суббота" => "Ваша интуиция будет сегодня очень сильна. Слушайте свое внутреннее голос и доверьтесь своим чувствам.",
        "Воскресенье" => "Вы можете провести сегодня время с близкими людьми или заняться своим хобби. Не забывайте отдыхать!"
    ),
    "Телец" => array(
        "Понедельник" => "Сегодня вы можете столкнуться с некоторыми финансовыми проблемами или трудностями на работе. Не паникуйте, вам удастся решить эти проблемы.",
        "Вторник" => "Вы можете ощущать некоторое беспокойство по поводу своих отношений с партнером или близкими людьми. Попробуйте открыто обсудить свои чувства с ними.",
        "Среда" => "Сегодня у вас может быть нехватка времени или ресурсов для реализации важных задач. Попробуйте сосредоточиться на самом важноми разбивать большие задачи на более мелкие.",
"Четверг" => "Ваша работа может быть оценена высоко сегодня. Получение похвалы или признания может стать хорошим стимулом для дальнейшей работы.",
"Пятница" => "Вы можете ощущать нехватку энергии или сил сегодня. Попробуйте отдохнуть и взять небольшой перерыв в работе.",
"Суббота" => "Сегодня вы можете провести время со своими близкими или друзьями. Общение с людьми, которые вам дороги, может быть очень ценным.",
"Воскресенье" => "Сегодня у вас может быть возможность расширить свой круг общения или познакомиться с новыми людьми. Будьте открыты к новым знакомствам!"
),
"Близнецы" => array(
"Понедельник" => "Сегодня у вас может быть много дел на работе или в личной жизни. Постарайтесь организоваться и не терять голову в суете.",
"Вторник" => "Вы можете ощущать некоторое беспокойство по поводу своего здоровья или здоровья близких людей. Попробуйте обратить больше внимания на свое физическое и эмоциональное состояние.",
"Среда" => "Сегодня вы можете ощущать неуверенность в своих способностях или решениях. Попробуйте не сомневаться в себе и принимать решения на основе своих убеждений.",
"Четверг" => "Ваша коммуникабельность и способность к общению могут стать вашими сильными сторонами сегодня. Используйте эти качества, чтобы наладить контакты с людьми.",
"Пятница" => "Сегодня у вас может быть возможность проявить свою креативность или творческие способности. Не бойтесь проявлять свою индивидуальность и выделяться из толпы.",
"Суббота" => "Вы можете провести сегодня время со своими близкими или друзьями. Общение с людьми, которые вам дороги, может быть очень ценным.",
"Воскресенье" => "Сегодня вы можете получить новые знания или навыки, которые могут быть полезны в вашей работе или личной жизни. Будьте открыты к новым знаниям и опыту!"
),
  "Рак" => array(
    "Понедельник" => "даже те Раки, которые не страдают излишней любовью к философии, могут почувствовать странную и неудержимую тягу к этой науке сотрясания воздуха языком. Идеи, которые будут приходить Раку в голову, в понедельник будут казаться ему блестящими и интересными. Однако ужу через пару дней они, скорее всего, покажутся ему полной ерундой. Или, в лучшем случае, бесполезной игрой ума.",
    "Вторник" => "Рака могут одолевать самые разнообразные вопросы, по значимости и по практической ценности сопоставимые с сакральным вопросом о смысле жизни.",
    "Среда" => "у Рака может родиться грандиозная идея по поводу переустройства своего дома.",
    "Четверг" => "достаточно одного неловкого замечания, чтобы из глаз Рака начали сыпаться искры.",
    "Пятница" => "Рак может быть захвачен неудержимым водоворотом разнообразных эмоций.",
    "Суббота" => "судьба готова предоставить Раку едва ли не все возможные шансы для того, чтобы хотя бы на ступеньку подняться в общественной иерархии. ",
    "Воскресенье" => "Рака может неудержимо потянуть в большие, шумные компании, чтобы хоть на мгновение оказаться в центре внимания."
    ),
  "Лев" => array(
    "Понедельник" => "в голову Льва могут прийти любопытные мысли о том, как наилучшим образом и без лишних усилий улучшить свое материальное положение.",
    "Вторник" => "Лев имеет все шансы найти ответ на сакраментальный вопрос: «Куда уходят деньги?».",
    "Среда" => "все мысли и планы Льва будут отличаться необычайной глубиной и яркостью.",
    "Четверг" => "в голову Льва может прийти немало перспективных идей!",
    "Пятница" => "Льву лучше не давать воли своему языку: есть вероятность наговорить близким людям столько лишнего, что это станет серьезным испытанием для отношений.",
    "Суббота" => "Лев может с головой погрузиться в решение домашних вопросов.",
    "Воскресенье" => "Лев постоянно будет отвлекаться на домашние дела и заботы."
    ),
  "Дева" => array(
    "Понедельник" => "Дева почувствует в себе удивительную способность решать любые сложные задачи максимально простым и эффективным способом",
    "Вторник" => "Дева будет точно знать, что, кому и в каком порядке нужно делать.",
    "Среда" => "тот день обещает пройти у Девы достаточно спокойно, но только спокойствие это будет кажущимся.",
    "Четверг" => "четверг на первом месте у Девы будут стоять вопросы финансовой независимости.",
    "Пятница" => "тот день у Девы обещает пройти за бесконечными разговорами. ",
    "Суббота" => "Деве захочется быть полноправным хозяином не только своей жизни, но и своих мыслей и планов. ",
    "Воскресенье" => "у Девы будет буквально переполнен общением, а также всякого рода недоразумениями."
    ),
  "Весы" => array(
    "Понедельник" => "у Весов будет подчинен четкому распорядку, не предполагая особенных потрясений.",
    "Вторник" => "Лучшее, что могут сделать во вторник Весы, – это посвятить день себе и своим близким!",
    "Среда" => "В среду в душе у Весов будет бурлить если не котел, то, как минимум, котелок с противоречиями.",
    "Четверг" => "В четверг девизом Весов будет: «Самозванцев нам не надо, командиром буду я!».",
    "Пятница" => "Вот день, когда благополучие Весов может решительным образом измениться, – и не обязательно в лучшую сторону!",
    "Суббота" => "Весы в субботу будут хозяином положения.",
    "Воскресенье" => "В воскресенье у Весов проснется особое чутье на все прекрасное – прежде всего, на деньги."
    ),
 "Скорпион" => array(
    "Понедельник" => "Сегодня у вас может быть много дел на работе или в личной жизни. Постарайтесь организоваться и не терять голову в суете.",
    "Вторник" => "Вы можете ощущать некоторое беспокойство по поводу своего здоровья или здоровья близких людей. Попробуйте обратить больше внимания на свое физическое и эмоциональное состояние.",
    "Среда" => "Сегодня вы можете ощущать неуверенность в своих способностях или решениях. Попробуйте не сомневаться в себе и принимать решения на основе своих убеждений.",
    "Четверг" => "Ваша коммуникабельность и способность к общению могут стать вашими сильными сторонами сегодня. Используйте эти качества, чтобы наладить контакты с людьми.",
    "Пятница" => "Сегодня у вас может быть возможность проявить свою креативность или творческие способности. Не бойтесь проявлять свою индивидуальность и выделяться из толпы.",
    "Суббота" => "Вы можете провести сегодня время со своими близкими или друзьями. Общение с людьми, которые вам дороги, может быть очень ценным.",
                    "Воскресенье" => "Сегодня вы можете получить новые знания или навыки, которые могут быть полезны в вашей работе или личной жизни. Будьте открыты к новым знаниям и опыту!"
    ),
  "Стрелец" => array(
    "Понедельник" => "В понедельник окружающим может казаться, что Скорпион умничает и несет несусветную ерунду. ",
    "Вторник" => "Во вторник центральное место в планах Скорпиона будут занимать два момента: поиск душевного равновесия и поиск удовольствий.",
    "Среда" => "В среду звезды гороскопа будут склонять Скорпиона бездумно плыть по течению, не обращая внимания на разного рода проблемы и недоразумения.",
    "Четверг" => "В четверг Скорпион будет чувствовать, что не в силах повлиять на обстоятельства, а тем более – изменить их в нужную сторону.",
    "Пятница" => "В пятницу планы Скорпиона могут изрядно грешить мегаломанией или, в крайнем случае, гигантизмом.",
    "Суббота" => "В субботу Скорпион легко может оказаться в центре всеобщего внимания.",
    "Воскресенье" => "В воскресенье граница между «надо» и «хочу» станет для Скорпиона совсем уж зыбкой."
    ),
  "Козерог" => array(
    "Понедельник" => "В понедельник лучшим решением для Козерога будет заняться чем-нибудь интеллектуально-полезным.",
    "Вторник" => "Во вторник главным врагом Козерога может стать его собственный язык",
    "Среда" => "В среду в душе у Козерога романтичность самым чудесным образом будет уживаться с практичностью и расчетливостью.",
    "Четверг" => "В четверг все мысли и планы Козерога будут отличаться удивительной ясностью и четкостью.",
    "Пятница" => "В пятницу день у Козерога полностью будет зависеть от того, с какой ноги он встанет. ",
    "Суббота" => "В субботу весь день Козерогу будет чего-то не хватать.",
    "Воскресенье" => "Даже если вы не творческий человек, в воскресенье сделайте исключение."
    ),
  "Водолей" => array(
    "Понедельник" => "В понедельник ничто так не будет раздражать Водолея, как прописные истины, озвученные кем-либо! ",
    "Вторник" => "Во вторник самолюбие Водолея будет подвергнуто самым решительным испытаниям.",
    "Среда" => "В среду у Водолея есть хороший шанс обогатить и разнообразить свой внутренний мир.",
    "Четверг" => "В четверг Водолей будет четко знать, чего он хочет, предпочитая при этом самые простые и естественные пути. ",
    "Пятница" => "В пятницу Водолею потребуется вся его выдержка!",
    "Суббота" => "В субботу Водолею непременно захочется сделать что-нибудь нужное и полезное.",
    "Воскресенье" => "В воскресенье в голову Водолея придут интересные идеи, которые могут благоприятно сказаться как на его карьере, так и на жизни вообще."
                                ),
  "Рыбы" => array(
    "Понедельник" => "В понедельник главный секрет успеха Рыб кроется в простоте!",
    "Вторник" => "Во вторник Рыбам лучше не принимать важные, ответственные решения.",
    "Среда" => "В среду Рыб будут то и дело одолевать острые приступы самоедства и самокопания.",
    "Четверг" => "В четверг Рыбы будут совершенно не настроены мириться с каким-либо вмешательством в свои дела и планы.",
    "Пятница" => "В пятницу голова Рыб будет буквально переполнена различного рода планами и проектами!",
    "Суббота" => "В субботу дела у Рыб обещают складываться легко и без лишних потрясений.",
    "Воскресенье" => "В воскресенье звезды гороскопа обещают предоставить Рыбам возможности для новых интересных встреч и знакомств. "
                                    ),


);
if(isset($_GET["birthday"])){

$birthday = $_GET["birthday"];

$dayOfWeek = $_GET["dayOfWeek"];


$zodiacSign = "";

$parts = explode("-", $birthday);
$month = intval($parts[1]);
$day = intval($parts[2]);
if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
$zodiacSign = "Водолей";
} elseif (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
$zodiacSign = "Рыбы";
} elseif (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
$zodiacSign = "Овен";
} elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
$zodiacSign = "Телец";
} elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
$zodiacSign = "Близнецы";
} elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
$zodiacSign = "Рак";
} elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
$zodiacSign = "Лев";
} elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
$zodiacSign = "Дева";
} elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
$zodiacSign = "Весы";
} elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
$zodiacSign = "Скорпион";
} elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
$zodiacSign = "Стрелец";
} elseif (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
$zodiacSign = "Козерог";
}


$horoscope = $horoscopes[$zodiacSign][$dayOfWeek];

echo "<h1>Гороскоп на сегодня для знака зодиака $zodiacSign:</h1>";
echo "<p>$horoscope</p>";
}
?>

<form method="get" class="decor">
<div class="form-left-decoration"></div>
<div class="form-right-decoration"></div>
<div class="circle"></div>
<div class="form-inner">
    <label for="birthday">Дата рождения:</label><br>
    <input type="date" name="birthday" id="birthday" required><br><br>
    <label for="dayOfWeek">День недели:</label><br>
    <select name="dayOfWeek" id="dayOfWeek" required class="assa">
        <option value="Понедельник">Понедельник</option>
        <option value="Вторник">Вторник</option>
        <option value="Среда">Среда</option>
        <option value="Четверг">Четверг</option>
        <option value="Пятница">Пятница</option>
        <option value="Суббота">Суббота</option>
        <option value="Воскресенье">Воскресенье</option>
    </select><br><br>
    <input type="submit" value="Получить гороскоп">
</form>
<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f8f8f8;
  color: #333;
}
.decor {
   position: relative;
   max-width: 400px;
   margin: 50px auto 0;
   background: white;
   border-radius: 30px;
}
.form-left-decoration, .form-right-decoration {
   content: "";
   position: absolute;
   width: 50px;
   height: 20px;
   background: #f69a73;
   border-radius: 20px;
}
.form-left-decoration {
   bottom: 60px;
   left: -30px;
}
.form-right-decoration {
   top: 60px;
   right: -30px;
}
.form-left-decoration:before, .form-left-decoration:after, .form-right-decoration:before, .form-right-decoration:after {
   content: "";
   position: absolute;
   width: 50px;
   height: 20px;
   border-radius: 30px;
   background: white;
}
.form-left-decoration:before {
   top: -20px;
}
.form-left-decoration:after {
   top: 20px;
   left: 10px;
}
.form-right-decoration:before {
   top: -20px;
   right: 0;
}
.form-right-decoration:after {
   top: 20px;
   right: 10px;
}
.circle {
   position: absolute;
   bottom: 80px;
   left: -55px;
   width: 20px;
   height: 20px;
   border-radius: 50%;
   background: white;
}
.form-inner {
   padding: 50px;
}
.assa{
  display: block;
   width: 100%;
   height: 42px;
   padding: 0 20px;
   margin-bottom: 10px;
   background: #E9EFF6;
   line-height: 40px;
   border-width: 0;
   border-radius: 20px;
   font-family: 'Roboto', sans-serif; 
}
.form-inner input, .form-inner textarea {
   display: block;
   width: 100%;
   padding: 0 20px;
   margin-bottom: 10px;
   background: #E9EFF6;
   line-height: 40px;
   border-width: 0;
   border-radius: 20px;
   font-family: 'Roboto', sans-serif;
}
.form-inner input[type="submit"] {
   margin-top: 30px;
   background: #f69a73;
   border-bottom: 4px solid #d87d56;
   color: white;
   font-size: 14px;
}
.form-inner input[type="submit"]:hover{
  background-color: white;
  border: 5px solid lighten(#3498db, 5%);
  color: black;
  cursor: pointer;
}
.form-inner textarea {
   resize: none;
}
.form-inner h3 {
   margin-top: 0;
   font-family: 'Roboto', sans-serif;
   font-weight: 500;
   font-size: 24px;
   color: #707981;
}
</style>
</body>
</html> 