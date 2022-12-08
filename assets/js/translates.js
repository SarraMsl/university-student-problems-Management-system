let arabic = document.getElementById("arabic");
let hom = document.getElementById("hom");
let home = document.getElementById("home");
let french = document.getElementById("french");
let sen= document.getElementById("sen");
let serv = document.getElementById("serv");
let servi = document.getElementById("servi");
let interas = document.getElementById("interas");
let offer = document.getElementById("offer");
let offere = document.getElementById("offere");
let abou = document.getElementById("abou");
let contac = document.getElementById("contac");
let conta = document.getElementById("conta");
let about = document.getElementById("about");

let Languages = document.getElementById("Languages");
let arabe = document.getElementById("arabe");
let english = document.getElementById("english");
let Signin = document.getElementById("Signin");
let welcome = document.getElementById("welcome");
let start = document.getElementById("start");
let rest = document.getElementById("rest");
let  Adrdess= document.getElementById("Adrdess");
let  Recently= document.getElementById("Recently");
let Aboutus = document.getElementById("Aboutus");
let  Enjoy= document.getElementById("Enjoy");
let Gain = document.getElementById("Gain");
let Earn = document.getElementById("Earn");
let  waste= document.getElementById("waste");
let  Take= document.getElementById("Take");
let  Maintain= document.getElementById("Maintain");
let  Infinty= document.getElementById("Infinty");
let  Unlimited= document.getElementById("Unlimited");
let  Watch= document.getElementById("Watch");
let View = document.getElementById("View");
let  mob= document.getElementById("mob");
let  place= document.getElementById("place");
let  people= document.getElementById("people");
let  tool= document.getElementById("tool");
let  hands= document.getElementById("hands");
let provided = document.getElementById("provided");
let  like= document.getElementById("like");
let successful = document.getElementById("successful");
let  all= document.getElementById("all");
let  bymob= document.getElementById("bymob");
let  bypeopel= document.getElementById("bypeopel");
let users = document.getElementById("users");
let visitors = document.getElementById("visitors");
let Offerofax = document.getElementById("Offerofax");
let Offerofaxmob = document.getElementById("Offerofaxmob");
let  See= document.getElementById("See");
let tab1 = document.getElementById("tab1");
let tab2 = document.getElementById("tab2");
let  Startt= document.getElementById("Startt");
let  Endd= document.getElementById("Endd");
let  Fromm= document.getElementById("Fromm");
let  Too= document.getElementById("Too");
let Amountt = document.getElementById("Amountt");
let  Actionn= document.getElementById("Actionn");
let  Start1= document.getElementById("Start1");
let  End= document.getElementById("End");
let  From= document.getElementById("From");
let Amount = document.getElementById("Amount");
let  Action= document.getElementById("Action");
let hello = document.getElementById("hello");
let more = document.getElementById("more");
let  Log= document.getElementById("Log");
let  one= document.getElementById("one");
let  con= document.getElementById("con");
let  co= document.getElementById("co");

let  adr= document.getElementById("adr");
let  Email= document.getElementById("Email");
let  Emaill= document.getElementById("Emaill");

let  cal= document.getElementById("cal");
let  ca= document.getElementById("ca");

let  Loading= document.getElementById("Loading");
let  messg= document.getElementById("messg");
let  sendm= document.getElementById("sendm");
let   Noffer1= document.getElementById("Noffer1");
let orde= document.getElementById("orde");










arabic.onclick = ()=>{
    setLanugage("arabic");
    localStorage.setItem("Lang","arabic");
};

french.onclick = ()=>{
    setLanugage("french");
    localStorage.setItem("Lang","french");
};
english.onclick = ()=>{
    setLanugage("english");
    localStorage.setItem("Lang","english");
};

onload = ()=>{
    setLanugage(localStorage.getItem("Lang"));
};
function setLanugage(getLanuage){
if(getLanuage === "arabic"){
  hello.innerHTML="مرحبا";
  more.innerHTML="هل انت مستعد لمعرفة المزيد";
    Log.innerHTML="سجيل الدخول إلى الموقع. تعال. نحن في انتظارك 😜";
    one.innerHTML="التسجيل/تسجيل الدخول";
  co.innerHTML="نحن مستعدون دائمًا لتزويدك بأعلى مستوى من الدعم. العلاقة بيننا وبين كل عميل مهمة جدًا بالنسبة لنا. اتصل بنا ..";

    hom.innerHTML = " الصفحة الرئيسية";
    serv.innerHTML = "الخدمات";
    servi.innerHTML = "الخدمات";
    abou.innerHTML = "حولنا";

    interas.innerHTML = "التفاعلات ";
    intera.innerHTML = "التفاعلات ";
    orde.innerHTML="من أجل تسهيل خدمة صرف الأموال ورفع أعباء المستخدمين الأعداء ، وصعوبات الصرف ومشاكل النقل ، بالإضافة إلى الحفاظ على صحتك المهددة بفيروس كوفيد 19 وغيره من الفيروسات ، نضع تحت تصرفكم ما يلي الخدمات.";
    offer.innerHTML = "العروض";
    offere.innerHTML = "العروض";
    Languages.innerHTML = "اللغة";
    contac.innerHTML = "تواصل معنا";
    conta.innerHTML = "تواصل معنا";
    con.innerHTML="نحن مستعدون دائمًا لتزويدك بأعلى مستوى من الدعم. العلاقة بيننا وبين كل عميل مهمة جدًا بالنسبة لنا. اتصل بنا.";
    Adrdess.innerHTML="موقعنا";
    sendm.innerHTML="إرسال الرسالة"; 
    messg.innerHTML="  تم إرسال الرسالة بنجاح, شكرا";

    Email.innerHTML="الايمايل";
    Emaill.innerHTML="الايمايل";

    cal.innerHTML="الهاتف";
    ca.innerHTML="الهاتف";

home.innerHTML="الصفحة الرئيسية";
Services.innerHTML = "الخدمات";
about.innerHTML = "حولنا";


    english.innerHTML = "الانجليزية";
    arabic.innerHTML = "العربية ";
    french.innerHTML = "الفرنسية";
    Signin.innerHTML = "التسجيل/تسجيل الدخول";
    welcome.innerHTML = "Transfer Money!مرحبا بكم في";
    start.innerHTML = "انطلق معنا ووفر وقت الانتظار";
    rest.innerHTML = "هل انت جاهز لتستمتع بالراحة معنا ";
    Recently.innerHTML = "في الآونة الأخيرة ، أصبحت مشكلة السيولة تشكل تحديًا للمواطنين وكذلك للحكومة ، خاصة مع انتشار جائحة كوفيد 19 الذي يشكل تهديدًا على صحة المواطنين ، مما يجعل التباعد الجسدي شرطًا أساسيًا ، خاصة في المؤسسات. والأماكن. الذين لديهم طوابير. لذا ، كيف يمكن تسهيل هذه الخطوات بحيث يتم تقليل قوائم الانتظار مع الحفاظ على نفس جودة الخدمة. لحل هذه المشكلة تم اقتراح تطوير هذا الموقع الإلكتروني الذي يهدف إلى تقديم خدمات يعتبر وسيطًا ليقترح على الأشخاص الذين يرغبون في إرسال الأموال بحيث تتم العملية دون المرور عبر مكتب البريد أو البنك";
    Aboutus.innerHTML = "عنا";
    Enjoy .innerHTML = "تمتع براحتك وسعادتك";
    Gain.innerHTML = "احصل على راحتك من خلال مقابلة شخص معين بدلاً من الانتظار والتعب من الوقوف";
    Earn.innerHTML = "اكسب وقتك";
    waste .innerHTML = "لا تضيع الوقت في الانتظار ليوم كامل";
    Take.innerHTML = "حافظ على صحتك";
    Maintain.innerHTML = "حافظ على صحتك من الأمراض المعدية والفيروسات مثل الكورونا عن طريق تجنب الاتصال بالعديد من الأشخاص في طوابير";
    Infinty.innerHTML = "اللامحدودية في التبادل";
    Unlimited.innerHTML = "تبادل  غير محدود للأموال بدون قيود أو عوائق";
    Watch.innerHTML = "شاهد العروض";
    View.innerHTML = "الاطلاع على العروض المقدمة من قبل الآخرين والقدرة على التواصل معهم بعد التسجيل في الموقع";
    mob.innerHTML = "التبادل عن طريق ميزة بريدي موب";
    place.innerHTML = "يمكنك تقديم عرض إذا كان لديك نقود على شكل أوراق نقدية وترغب في وضعها كرصيد في حسابك ، أو العكس ، وفي هذه الحالة تساعدك هذه الخدمة";
    people.innerHTML = "التبادل عن طريق ميزة الاشخاص ";
    sen.innerHTML = "يمكنك تقديم عرض إذا كنت ترغب في إرسال أموال إلى شخص أو مؤسسة في دولة أخرى لمقابلة شخص آخر يعكس العملية التي تريدها وبالتالي تقوم بالمبادلة بوضع الأموال بعد الاتفاق في الطرف الآخر كصديق له من نفس حالتك ، على سبيل المثال ، وصديق لك من نفس الولاية ، فهذا العرض يساعدك في هذه الحالة";
    tool.innerHTML = "وسيلة التواصل";
    hands.innerHTML = "نضع بين يديك وسيلة اتصال للشخص الذي تريد التبادل معه عند اختبار العرض المناسب لك";
    provided.innerHTML = "تفاعلات المستخدمين مع الخدمات المقدمة من قبلنا لا تترددوا في الانضمام إلينا بسرعة  ";
    like.innerHTML = "أحببت الخدمة";  
    successful.innerHTML = "العمليات الناجحة";
    all.innerHTML = "كل العمليات";
    bymob.innerHTML = " العمليات عن طريق ميزة بريدي موب";
    bypeopel.innerHTML = "العمليات عن طريق ميزة الاشخاص ";
    users.innerHTML = " المستخدمين";
    visitors.innerHTML = "الزوار ";
    Offerofax .innerHTML = " العروض  عن طريق  التبادل بميزة الاشخاص";
    Offerofaxmob.innerHTML = " العروض  عن طريق  التبادل بميزة بريدي موب ";
    See.innerHTML = "اطلع على العروض المتوفرة داخل الموقع وإذا كنت ترغب في الحصول على مزيد من المعلومات لصاحب العرض المناسب لك ، قم بتسجيل الدخول إلى الموقع";
    tab1.innerHTML = " بريدي موب";
    tab2.innerHTML = "  الاشخاص";
    Start1.innerHTML = "يبدأ ";
     From.innerHTML = "من ";
    End.innerHTML = " ينتهي";
    To.innerHTML = "الى ";
    Amount.innerHTML = "المبلغ ";
    Action.innerHTML = " ";
    Fromm.innerHTML = "من ";
    Startt.innerHTML = "يبدأ ";
    Endd.innerHTML = " ينتهي";
    Too.innerHTML = "الى ";
    Amountt.innerHTML = "المبلغ ";
    Actionn.innerHTML = " ";
   

    adr.innerHTML="";

    Loading.innerHTML="";
    Noffer1.innerHTML="";
    }  else if(getLanuage === "english"){
    hom.innerHTML = " Home";
    serv.innerHTML = "Services";
    servi.innerHTML = "Services";
    abou.innerHTML = "About Us ";

    interas.innerHTML = "Interactions ";
    intera.innerHTML = "Interactions ";
    co.innerHTML="We are always ready to provide you with the highest level of support. The relationship between us and each customer is very important to us. call us..";
    orde.innerHTML="In orde to facilitate the exchange of money service and to lift the burdens of our enemies users, the difficulties of exchange and the trouble of transportation, in addition to preserving your health threatened by Covid 19 and other viruses, we put at your disposal the following service.";
    offer.innerHTML = "Offer";
    offere.innerHTML = "Offer";
    Languages.innerHTML = "Languages";
    contac.innerHTML = " Contact";
    conta.innerHTML = " Contact ";
    con.innerHTML="We are always ready to provide you with the highest level of support. The relationship between us and each customer is very important to us. call us..";
    Adrdess.innerHTML="Adrdess";
    sendm.innerHTML="Send Message"; 
    messg.innerHTML=" Your message has been sent. Thank you!";

    Email.innerHTML="Email";
    Emaill.innerHTML="Email";

    cal.innerHTML="Call";
    ca.innerHTML="Call";

    home.innerHTML="Home";
    Services.innerHTML = "Services";
    about.innerHTML = "about";
    english.innerHTML = "English";
    arabic.innerHTML = "Arabic ";
    french.innerHTML = "French";
    hello.innerHTML="Hello Dear";
    more.innerHTML="Are you ready to know more?";
    Log.innerHTML="Log in to the site. Come on. We are waiting for you 😜";
    one.innerHTML="Sign in/Sign up";
    Signin.innerHTML = "Sign in/Sign up";
    welcome.innerHTML = " Welcome To Transfer Money! ";
    start.innerHTML = "Start With Us And Save Your Waiting Time";
    rest.innerHTML = "Are you ready to rest with us";
    Recently.innerHTML = " Recently, the liquidity problem has become a challenge for the citizens as well as the government, especially with the spread of the covid 19 pandemic, which poses a threat to the health of the citizens, which makes physical distancing a paramount condition, especially in institutions and places. who have queues. So, how to facilitate these steps so that queues are reduced while maintaining the same quality of service. To solve this problem it has been proposed to develop this site web that aims to provide services it is considered an intermediary to suggest to people who want to send money so that the process takes place without going through the post office or the bank";
    Aboutus.innerHTML = "About us";
    Enjoy .innerHTML = "Enjoy your comfort and happiness";
    Gain.innerHTML = "Gain your comfort by meeting a specific person instead of waiting and getting tired of standing up";
    Earn.innerHTML = "Earn your time";
    waste .innerHTML = "Don't waste time in queuing for a whole day";
    Take.innerHTML = "Take care of your health";
    Maintain.innerHTML = "Maintain your health from infectious diseases and viruses such as corona by avoiding contact with multiple people in queues";
    Infinty.innerHTML = "Infinty in exchange";
    Unlimited.innerHTML = "Unlimited money exchange without restrictions or obstacles";
    Watch.innerHTML = "Watch offer";
    View.innerHTML = "View the offers made by others and the ability to communicate with them after registering on the site";
    mob.innerHTML = "exchange by baridi mob feature";
    place.innerHTML = " You can place an offer if you have money in the form of banknotes and want to put it as a balance in your account, or vice versa, in this case, this service helps you";
    people.innerHTML = " exchange by people feature";
    sen.innerHTML = "You can place an offer if you want to send money to a person or institution in another state to meet with another person who reverses the process you want and therefore you exchange by placing the money after agreement in the other party as a friend of his from the same state as you, for example, and a friend of yours from the same state, this offer helps you in this case";
    tool.innerHTML = "comunnication tool";
    hands.innerHTML = "We put in your hands a means of communication for the person you want to exchange with when testing the ideal offer for you";
    provided.innerHTML = "Users interactions with the services provided by us are encouraged and do not hesitate to join us quickly ";
    like.innerHTML = " like our service ";  
    successful.innerHTML = "successful operations";
    all.innerHTML = "all operations ";
    bymob.innerHTML = "operations by mob  feature";
    bypeopel.innerHTML = "operations by people feature";
    users.innerHTML = " users";
    visitors.innerHTML = "visitors ";
    Offerofax .innerHTML = " Offer of exchange by people feature";
    Offerofaxmob.innerHTML = "Offer of exchange baridi mob feature ";
    See.innerHTML = "See the offers available within the site and if you want to get more information for the owners of the appropriate offer for you, log in to the site";
    tab1.innerHTML = " mob ";
    tab2.innerHTML = "person  ";
    Start1.innerHTML = " Start";
     From.innerHTML = " From";
    End.innerHTML = "End ";
    Amount.innerHTML = "Amount ";
    Action.innerHTML = "Action ";
    Fromm.innerHTML = " From";
    Startt.innerHTML = "Start ";
    Endd.innerHTML = "End ";
    Too.innerHTML = "To ";
    Amountt.innerHTML = "Amount ";
    Actionn.innerHTML = "Action ";
   

    adr.innerHTML="";

    Loading.innerHTML="Loading";
    Noffer1.innerHTML="";
    }
    else if(getLanuage === "french"){
       
    hello.innerHTML="Bienvenue";
    more.innerHTML="Êtes-vous prêt à en savoir plus";
    Log.innerHTML="Connectez-vous au site. Viens ici. Nous vous attendons 😜";
    one.innerHTML="Inscription/Connexion";
    hom.innerHTML = " Accueil";
    serv.innerHTML = "Service";
    servi.innerHTML = "Service";
    abou.innerHTML = "A propos";

    interas.innerHTML = "Interactions ";
    intera.innerHTML = "Interactions ";
    co.innerHTML="Nous sommes toujours prêts à vous fournir le plus haut niveau d'assistance. La relation entre nous et chaque client est très importante pour nous. Contactez-nous ..";
    orde.innerHTML="Afin de faciliter le service de change et d'alourdir les charges des usagers ennemis, difficultés de change et problèmes de transport, en plus de préserver votre santé menacée par le virus Covid-19 et autres virus, nous mettons à votre disposition les services suivants.";
    offer.innerHTML = "offres";
    offere.innerHTML = "offres";
    Languages.innerHTML = "langue";
    contac.innerHTML = "Contacter ";
    conta.innerHTML = " Contacter ";
    con.innerHTML="Nous sommes toujours prêts à vous fournir le plus haut niveau d'assistance. La relation entre nous et chaque client est très importante pour nous. Contactez-nous.";
    Adrdess.innerHTML="Adresse";
    sendm.innerHTML="Envoyer le message"; 
    messg.innerHTML=" Message envoyé avec succès, merci";

    Email.innerHTML="e-mail";
    Emaill.innerHTML="e-mail";

    cal.innerHTML="téléphone";
    ca.innerHTML="téléphone";

    home.innerHTML="Accueil";
    Services.innerHTML = "Service";
    about.innerHTML = "A propos";
    english.innerHTML = "Anglais";
    arabic.innerHTML = "Arabe ";
    french.innerHTML = "Français";
    Signin.innerHTML = "Inscription/Connexion";
    welcome.innerHTML = " Bienvenue à Transfer Money!";
    start.innerHTML = "Rejoignez-nous et économisez du temps d'attente";
    rest.innerHTML = "Êtes-vous prêt à vous reposer avec nous ";
    Recently.innerHTML = "Récemment, le problème de liquidité est devenu un défi pour les citoyens ainsi que pour le gouvernement, notamment avec la propagation de la pandémie de Covid-19, qui fait peser une menace sur la santé des citoyens, faisant de la distanciation physique un préalable, notamment dans les institutions. et lieux. qui ont des files d'attente. Alors, comment faciliter ces démarches pour réduire les files d'attente tout en conservant la même qualité de service. Pour résoudre ce problème, il a été proposé de développer ce site Internet, qui vise à fournir des services considérés comme un intermédiaire, pour proposer aux personnes qui souhaitent envoyer de l'argent que le processus se déroule sans passer par la poste ou la banque.";
    Aboutus.innerHTML = "A propos";
    Enjoy .innerHTML = "Profitez de votre confort et de votre bonheur";
    Gain.innerHTML = "Mettez-vous à l'aise en rencontrant une personne spécifique au lieu d'attendre et de vous lasser de rester debout";
    Earn.innerHTML = "gagnez votre temps";
    waste .innerHTML = "Ne perdez pas de temps à attendre une journée entière";
    Take.innerHTML = "prends soin de ta santé";
    Maintain.innerHTML = "Restez en bonne santé contre les maladies infectieuses et les virus tels que le corona en évitant tout contact avec de nombreuses personnes dans les files d'attente.";
    Infinty.innerHTML = "Infini d'échange";
    Unlimited.innerHTML = "Échange d'argent illimité sans restrictions ni entraves";
    Watch.innerHTML = "Voir les offres";
    View.innerHTML = "Voir les offres faites par d'autres et la possibilité de communiquer avec eux après s'être inscrit sur le site";
    mob.innerHTML = "Echangez via la fonctionnalité de my mail mob";
    place.innerHTML = "Vous pouvez faire une offre si vous avez de l'argent sous forme de billets de banque et que vous souhaitez le mettre en solde sur votre compte, ou vice versa, auquel cas ce service vous aide";
    people.innerHTML = "Fonction d'échange par personnes ";
    sen.innerHTML = "Vous pouvez faire une offre si vous souhaitez envoyer de l'argent à une personne ou une institution dans un autre pays pour rencontrer une autre personne qui reflète le processus que vous souhaitez et donc vous échangez l'argent après accord de l'autre partie en tant qu'ami à lui du même état comme vous, par exemple, et un de vos amis du même état, cette offre vous aide dans ce cas.";
    tool.innerHTML = "moyens de communication";
    hands.innerHTML = "Nous mettons entre vos mains un moyen de communication pour la personne avec qui vous souhaitez échanger lors du test de la bonne offre pour vous";
    provided.innerHTML = "Interactions des utilisateurs avec les services que nous fournissons N'hésitez pas à nous rejoindre rapidement  ";
    like.innerHTML = "j'ai adoré le service";  
    successful.innerHTML = "opérations réussies";
    all.innerHTML = "toutes les opérations";
    bymob.innerHTML = " Opérations via la fonctionnalité de mon mail mob";
    bypeopel.innerHTML = "Fonction d'opérations par des personnes ";
    users.innerHTML = " utilisateurs";
    visitors.innerHTML = "Visiteurs ";
    Offerofax .innerHTML = " Offres par échange avec l'avantage des personnes";
    Offerofaxmob.innerHTML = " Offres par échange avec la fonctionnalité de my mail mob ";
    See.innerHTML = "Consultez les offres disponibles sur le site et si vous souhaitez obtenir plus d'informations sur le propriétaire de l'offre qui vous convient, connectez-vous au site";
    tab1.innerHTML = " Baridi Mob";
    tab2.innerHTML = "  personnes";
    Start1.innerHTML = "débuté ";
     From.innerHTML = "depuis ";
    End.innerHTML = " terminer";
    Amount.innerHTML = "quantité ";
    Action.innerHTML = " Action";
    Fromm.innerHTML = "depuis ";
    Startt.innerHTML = "débuté ";
    Endd.innerHTML = " terminer";
    Too.innerHTML = "à ";
    Amountt.innerHTML = "quantité ";
    Actionn.innerHTML = " Action";
  
    adr.innerHTML="";

    Loading.innerHTML="";
    Noffer1.innerHTML="";
    }
  }