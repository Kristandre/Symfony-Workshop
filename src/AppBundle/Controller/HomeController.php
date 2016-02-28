<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Weather;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{

 private $posts = array(
    array(
        'id'        => 1,
        'title'     => 'LA OSS SNAKKE OM NOE ANNET',
        'summary'   => "Jeg har egentlig vært litt kvalm av hele blogggreia de siste dagene. Kroppshysteri overalt...",
        'text'      => "Jeg har egentlig vært litt kvalm av hele blogggreia de siste dagene. Kroppshysteri overalt. Jeg vet at mange bare har ventet på at jeg skal komme med en uttalelse, men jeg er litt over hele greia. Jeg er ferdig med å påpeike mine egne \"feil\" og jeg har heller ingen interesse av å lese om eller kommentere andre sine såkalte skavanker. Det finnes så mye mer! For eksempel, nå har jeg fått en ny obsession - LEGO! Jeg har lyst til å bygge taj mahal som er et av de legosettene i verden med mest brikker. Så ja, sånn er livet mitt, haha. Men det settet koster 20 000 kr på ebay.. Så vi får se. Ganske sykt at jeg i det hele tatt har det oppe til vurdering.

        Nå er jeg på gardermoen, jeg og en venninne skal på ferie til Istanbul i 8 dager men vi har klart å booke oss inn på ulike fly. Så hun reiser litt før meg, og jeg er derfor her alene akkurat nå. Planene våre for Istanbul er shopping, kanskje litt fest, spise masse.. Og bare gå rundt, oppdage litt. Det er vårvarme der, så jeg har pakket en ganske lett koffert. Bare 1 kg overvekt denne gangen, hehe.

        Vel vel, vi snakkes fra Istanbul i kveld! Jeg oppdaterer dere når jeg er framme :-) ",
        'tags'   => array('cool','summer','outfit','travel'),
    ),
    array(
        'id'        => 2,
        'title'     => 'VIDEOBLOGG - TESTER UT TINDER',
        'summary'   => "Ny videoblogg! Vi fant ut at jeg skulle sjekke ut tinder...",
        'text'      => "Ny videoblogg! Vi fant ut at jeg skulle sjekke ut tinder. Og jeg ble litt gira først, det var jo nytt og spennende men appen ble slettet etter en dag og det er ikke noe jeg er interessert i lengre, haha. Jeg tror ærlig ikke man finner noe å hige etter der, jeg kjenner kule folk utenom den appen og for all del, det finnes sikkert fine folk der også. Men, det er ikke for meg! Om man vil finne kjærligheten, så finner man den ikke når man prøver, skjønner dere? Det komme bare helt brått og uventet. Og jeg vet hva jeg vil ha, og det er utenfor der.

Og her er en funfact som egentlig ikke er noe fun (hvorfor sier man funfact? Når har noen ever ledd av en \"funfact\"?) - jeg hadde nettopp våknet i denne videoen og var helt uten sminke. Så vet dere det ;-)))))) Viktig å påpeke at man ikke alltid er like fresh ;-))))",
        'tags'      => array('tinderislife','annonse'),
    ),
    array(
        'id'        => 3,
        'title'     => 'TIPS MOT STREKKMERKER',
        'summary'   => "Som dere vet har jeg endel strekkmerker på rumpe og lår. Disse begynte å dukke opp da jeg fylte 16 år, og med årene har de hverken bleknet eller blitt sterkere...",
        'text'      => "Som dere vet har jeg endel strekkmerker på rumpe og lår. Disse begynte å dukke opp da jeg fylte 16 år, og med årene har de hverken bleknet eller blitt sterkere. Jeg personlig mener ikke at det er noe galt i å ha litt strekkmerker, det er helt naturlig og kroppen forandrer seg jo med tiden. Men for noen år siden følte jeg det ikke slik. Jeg sjekket opp i mange muligheter for å få strekkmerkene mine fjernet, men alt var veldig dyrt, krevde mange behandlinger, ville ha vært smertefullt.. Ja, listen er lang. Så jeg lot det ligge, og idag tenker jeg ikke på det lengre. MEN, jeg vet at ikke alle føler det på den måten, og jeg kan relatere meg til usikkerheten. Så, da jeg for litt siden fikk tilbud om å teste Bio-Oil som er den mest solgte arr- og strekkmerkeproduktet i 20 land, tenkte jeg hvorfor ikke! Og nå? Vel, jeg har blitt litt avhengig av produktet.. Det er så bra!
        Bio-Oil brukes av mange som deres \"little beauty secret\", som en fuktighetsgivende olje som kan påføres på kvelden. Produktet har dokumentert effekt mot arr, strekkmerker, ujevn hudtone, aldrende og tørr hud. Så, ikke bare strekkmerker med andre ord, selv om det er hva jeg fokuserer på. Du kan velge å bruke det til noe annet, og det vil funke like bra.",
        'tags'   => array('annonse','summer','strekkmerker','travel'),
    ),
    array(
        'id'        => 4,
        'title'     => 'JEG HAR FÅTT KORT HÅR!',
        'summary'   => "Nå ble faktisk overassket over meg selv som har tatt tre selfier på samme sted, med to ulike antrekk og et uten klær...",
        'text'      => "Nå ble faktisk overassket over meg selv som har tatt tre selfier på samme sted, med to ulike antrekk og et uten klær. Her snakker vi effektivitet i selfiegamet! Uansett, jeg var hos Sara W på hendrix hair pilestredet idag og lysnet håret og.. KLIPTE MEG. Hvem hadde trodd? Jeg har alltid \"gjemt meg\" bak det lange håret, men nå er jeg komfortabel med meg selv og mitt eget utseende, og føler meg også faktisk best med kort hår.

Sara er best, hun er den jeg alltid bruker på hår. Da jeg sa jeg ville ha kort hår sa hun \"yes, nå kommer hele Norge til å juble!\". Haha.. Jeg vet ikke helt med det, men jeg er uansett veldig fornøyd. Dere kan sjekke Sara på instagram her!

Jeg er veldig glad nå! ",
        'tags'   => array('hår','selfie'),
    ),
     array(
         'id'        => 5,
         'title'     => 'SURREHODE PÅ TRIKKEN',
         'summary'   => "God morgen! Jeg har nettopp hatt et radiointervju, og nå sitter jeg på kontoret og jobber...",
         'text'      => "God morgen!

Jeg har nettopp hatt et radiointervju, og nå sitter jeg på kontoret og jobber. Omsider kom jeg meg fram, for hva skjedde egentlig tidligere i morges? Jeg var vel litt for trøtt for mitt eget beste, kan man si.. Jeg har ofte sett mennesker sove på trikken, jeg blir alltid så stressa da. Kommer de seg av? Rekker de jobb? Hvordan kan man være så trøtt at man sovner på trikken?.... har jeg tenkt.

Jeg sitter altså på samme tirkk som hver eneste dag, jeg tar den kun 2 stopp og så går jeg resten av veien. Dette er altså en veldig kort trikketur og daglig rutine for min del. Og så.. jeg rekker ikke sitte i mer enn to minutter før jeg sovner. Som en stein. Og jeg våkner altså når jeg er ved rikshospitalet som er et langt jævla stykke fra kontoret, jeg trenger vel nesten ikke forklare hvilket ansiktsutrykk jeg fikk da jeg (ved en ren tilfeldighet!!!) våkner av at noe falt i gulvet ved siden av meg. Herregud. Jeg fikk virkelig fart på meg, for å si det sånn.

I mangel på bilder av at jeg sover på trikken, slenger jeg ved to fra i morges og yogaøkten jeg hadde da. Jeg pleier å gjøre yoga de dagene jeg er ekstra trøtt, for å våkne litt til liv. Hjalp det? Tydeligvis ikke. Men det er veldig deilig, uansett. ",
         'tags'   => array('mennesker','life'),
     ),
     array(
         'id'        => 6,
         'title'     => 'HVOR ER DU KJÆRE?',
         'summary'   => "God morgen! Jeg har nettopp hatt et radiointervju, og nå sitter jeg på kontoret og jobber...",
         'text'      => "Hvor er du akkurat nå?

Kanskje er du på maldivene, i huset til Justin Bieber eller i publikumshavet av en konsert. Kanskje er du på stranden og ser flyktningstrømmene komme, kanskje er du halvveis inn i rumpa til Kylie Jenner eller kanskje du er ved barndomshjemmet ditt.

Hvor er du akkurat nå?

Det kunne ha vært et enkelt svar. For fysisk, så er du jo her. Du er i sofaen ved siden av meg. Du og jeg. Meg og deg. Vi to.  Jeg ser hva du har på deg, hvordan du puster og jeg kjenner hvordan du lukter. Jeg liker hvordan du er. Jeg liker deg. Jeg ser på deg. Du er jo rett her. I en grå sofa. Er den grå? Jeg vet ikke. Jeg ser bare deg. Sofaen kunne ha vært svart, hvit, rød eller grå. Du er så jævlig mye viktigere uansett.

Du og meg. Meg og deg. Vi to. Den grå sofaen din som kanskje er rød, men jeg gir meg faen for du er så deilig.

Oss to. En sofa. Og den forbanna mobilen din.

Hvor er du akkurat nå?

Er du på tinder? Er du halvveis inni neste date, er du på jakt etter flere likes? Oppdaterer du deg på verdens nytt, når det sitter et helt ekte menneske ved siden av deg med en historie? Et menneske som har gitt deg tiden sin, et menneske som kunne ha gjort noe annet - og så er du i en skjerm? Jeg vil be deg om å slutte. Du sier du hører, og jeg tror på deg sånn halvveis. Du forteller meg en ting, men hele du tilsier noe annet.

Hvor er du akkurat nå?

Er moren din død? Har du fått sparken fra jobben? Går bestekompisen din igjennom en skilsmisse? For omså, så er det greit. Da er det godkjent at du er halvveis her, at du ikke er med meg. For akkurat nå, så forsvinner jeg også. Jeg skal til å si noe morsomt, men jeg stopper meg selv. Kanskje du ikke hører på, for du er bare halvveis med meg. Jeg vil ikke at poenget mitt i en morsom historie skal drukne bort i lyden av den evige scrollingen din.

Hvor er jeg akkurat nå?

Månen lyser stort utenfor. Den er ganske fantastisk, den månen. Det er ingen vind der oppe som endrer på fotavtrykkene som en gang ble lagt der, de som har gått der har fotsporene der lengre enn mitt liv varer. Du er ikke månen, mine spor holder seg ikke på deg. Jeg vil ut i verdensrommet, og jeg vil kysse deg. Jeg vil kjenne deg, jeg vil være nær deg. Og du?

Kan du bare fortelle meg hvordan det er?

Du liker kanskje meg. Men du elsker likes.",
         'tags'   => array('live','love','laugh'),
     ),
     array(
         'id'        => 7,
         'title'     => 'DAGENS ANTREKK',
         'summary'   => "Jakke fra Zara / genser lindex / bukse dr.denim / sko",
         'text'      => "Jakke fra Zara / genser lindex / bukse dr.denim / sko her



Jeg og Joakim knipset disse bildene tidligere idag. FAEN som jeg gleder meg til han er ferdig med sweatshop-arbeidet sitt slik at vi kan ta bilder hver dag slik som før. Nå går det så lang tid mellom hver gang vi ser hverandre (en uke max, hehe) og jeg savner han veldig ellers.

Nå? Nå fortsetter dagen. Livet, as. Lei av det. ",
         'tags'   => array('outfait','lookatme'),
     ),
     array(
         'id'        => 8,
         'title'     => 'DEN EKTE MEG',
         'summary'   => "Jeg ser mandag, men jeg tenker på fredag. Jeg ser ansvar, men jeg tenker på... ",
         'text'      => "Jeg ser mandag, men jeg tenker på fredag. Jeg ser ansvar, men jeg tenker på.. Vin? Det er vel bare en sånn periode, regner jeg med. Jeg reiser på ferie om tre dager, og før det er motivasjonen litt sådeeer. Men, i dag tidlig sto jeg opp, dro til Joakim og spilte inn et par videoblogger som skal komme i ukene framover. Det endte med at jeg fikk meg tinder som et prosjekt til en video, og nå sitter jeg med 17 matcher og ingenting å snakke om - haha. Det er virkelig ikke min greie! Jeg er så dårlig på sånt, dessuten tror ingen på at jeg er ekte. Men da vet dere da, det var til en videoblogg. (bare en unnskyldning).

Vi rakk faktisk å skvise inn en powernap, jeg har gått igjennom bildene fra en shoot og snart skal jeg på et kurs. Det blir gøy! I kveld skal jeg nok en gang møte min venninne Tinashe, hun er så jævlig fantastisk. Glad jeg ble kjent med henne, jeg har så vanskelig for å slippe folk inn på meg og vise den ekte meg, jeg snakket med Joakim om det i sta. Det er så få mennesker jeg klarer å slappe av med, men når det først skjer så er jeg ganske kul. Ellers er jeg bare.. stille. Og kan virke litt sint. Men jeg er god med de som fortjener det, og Tinashe er absolutt en av de. Slike kommer ikke ofte!

Anyways, vi snakkes litt senere folkens.",
         'tags'   => array('reality','life'),
     ),
 );
    /**
     * @Route("/")
     */
    public function showAction(){


        return $this->render('home/home.html.twig', array(
            'posts' => $this->posts,
        ));
    }


    /**
     * @Route("post_show/{id}", name="post_show")
     */
    public function showPostAction($id){
        $myPost = array(
            'id'        => -1,
            'title'     => 'FEIL',
            'summary'   => "FEIL",
            'text'      => "FEIL",
            'tags'   => array('FEIL'),
        );
        foreach($this->posts as $post){
            if($post['id'] == $id){
                $myPost = $post;
                break;
            }
        }
        return $this->render('home/post.html.twig', array(
            'post' => $myPost,
        ));
    }

    /**
     * @Route("demo", name="weather_show")
     */
    public function showWeatherAction(){
        //Longitude and latitude for Trondheim
        $lat = 63.446827;
        $lon = 10.421906;

        $json = file_get_contents("http://api.openweathermap.org/data/2.5/forecast?lat=" . $lat . "&lon=" . $lon . "&appid=ae6126f2d1091c32197e3ebc253dbe76");
        $obj = json_decode($json);
        $weatherDataList = array();
        $city = $obj->city->name;
        foreach($obj->list as $weatherData){
            $weather = new Weather();
            $weather->setTemperature($weatherData->main->temp);
            $weather->setWeatherType($weatherData->weather[0]->description);
            $weather->setTime(new \DateTime($weatherData->dt_txt));
            $weather->setCity($city);
            $weatherDataList[] = $weather;
        }

        return $this->render('demo/demo.html.twig', array(
            'weatherDataList' => $weatherDataList,
        ));
    }
}
