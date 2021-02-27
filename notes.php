<?php require "conn.php";
$id= $_GET['parent_id'];

$sql = "SELECT * FROM `dynamic` where parent_id=$id";
$subject="SELECT * FROM notes where parent_id=$id";
 $result = mysqli_query($conn, $sql); 
 $res = mysqli_query($conn, $sql); 
$single=mysqli_fetch_assoc($res);
 $sub_res = mysqli_query($conn, $subject); 

 $rstl = mysqli_query($conn, $sql);
 $sub_row = mysqli_fetch_assoc($sub_res);
$num=$single['topic_id'];
 ?>
<!DOCTYPE html>
<html lang="en">


<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="IAS,Coaching,Councelling" />
  <meta name="author" content="Abhijeet Sarkar" />
  <meta name="robots" content="" />
  <meta name="description" content="IAS institute: coaching classes" />
  <meta property="og:title" content="IAS institute: coaching classes" />
  <meta property="og:description" content="IAS institute: coaching classes" />
  <meta property="og:image" content="" />
  <meta name="format-detection" content="telephone=no">
  
  <!-- FAVICONS ICON -->
  <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- PAGE TITLE HERE -->
  <title>Notes for:<?php echo $sub_row['subject_name']; ?></title>
  <!-- MOBILE SPECIFIC -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <!-- STYLESHEETS -->
  
  
  <link rel="stylesheet" type="text/css" href="css/plugins.css">
  
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/templete.css">
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
  <link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
<!--js-->
  <script defer src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script defer src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script defer src="js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS -->
<script defer src="js/custom-new.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style type="text/css">
    
   a{
    color:black;
   }  
h1{
  text-align: center;
}
</style>


  
</head>

<body>
<?php include 'header.php'; ?>
<div class="container-fluid d-xl-inline d-lg-inline d-md-inline d-sm-none d-none">
	<div class="slide-item-img"><img src="images/main-slider/slide1.jpg" class="" alt=""/></div>
    <div class="container-fluid">
		<div class="row">
		<div class="col-md-3">

		<p></p>
  <div class="content-box scroll">
  	<div class="font">
  		<ul class="menu">
  			<h3>MUST READ...</h3>
        
    	<?php

     if (mysqli_num_rows($result) > 0) 
     {
                                        

        while($row = mysqli_fetch_assoc($result)) {
                                            ?>                          
                                        
                                    
        <li><a href ="#<?php echo $row["topic_id"];?>" class="menu-btn"><?php echo $row["topic"];?></a></li>     
                            
               
                <?php }
                                } 
                            
                                    ?>
  
  </ul>
  	</div>
  
</div>
</div>

<div class="col-md-9">
	<p></p>
<div class="form scroll justify">
      <?php

     if (mysqli_num_rows($rstl) > 0) 
     {
                                        

        while($rowm = mysqli_fetch_assoc($rstl)) {
                                            ?>                          
                                        
                                    
       <div class="menu-content  <?php echo $rowm['topic_id'] ;?> ">
                        <?php echo $rowm['message'] ;?>
                       </div>     
               
                <?php }
                 } else{ 
                  echo '<script>swal({
  title: "NO New Notes!",
  text: "Please! Check back Later.",
  icon: "warning",
  button: "Ok!",
}).then(function() {
  window.location = "index.php";
  });</script>';
                                       } ?>




     
      </div>
    </div>
  </div>
</div>
</div>


  <!-- <div class="menu-content Threads"><h3>THREATS TO INDIA&#39;s INTERNAL SECURITY</h3><hr>
<p>India faces challenges to internal security through state and non-state sponsored terrorism activities, naxalism, insurgency, mass movements &#39;supported by external actors, communalism, drug and human trafficking, attack on India&#39;s financial health through counterfeit currencies, cyber attacks aided by external actors add fuel to the existing challenges.</p>


<img style="height:400px;width: 400px;text-align: center;" src="images/notes/infographics.jpg">


<p><b>TERRORISM:</b>Terrorism aided by external state and non-state actors, has been affecting India&#39;s internal peace and security. Pakistan has been using state-sponsored and state-supported crostborder terrorism (primarily in Jammu &amp; Kashmir) as an instrument of its state policy. China had, at one stage, provided shelter and support to ethnic-separatist militancy (ULFA militants) in the northeast:Various militant groups operating in India&#39;s northeast have often found safe haven .and operational bases in Bangladesh.</p>

<p><b>INSURGENCY:</b>Various groups are involyed in the insurgency in northeast India. In the region several armed factions operate. Some groups call fora separate state, others, for regional autonomy while some extreme groups demand complete independence.</p>
<p>Demands of the insurgent groups have been wide-ranging. While groups like the United Liberation Front of Assam (ULFA), NSCN-IM (National Socialist Council of Nagaland: Isak-Muivah group) aim at establishing independent states outfits, such as the I3odo Liberation Tigers (BLT) demanded separate states for their tribal constituency fringe outfits, such as the United People&#39;s Democratic Solidarity (UPDS) and Dim Halani Daogah (DHD), confining their activities to the geographical limits of separate districts in Assam, have fought for maximum autonomy, within the purview of the Indian constitution. Reasons behind dissent against the Indian State too have been diverse. The National Liberation Front of Tripura (NLFT) and the All Tripura Tiger Force (ATTF) insurgencies in Tripura are rooted in the sense of alienation of the indigenous tribals as a result of the unhindered migration from Bangladesh (formerly East Bengal/East Pakistan).</p>
<p>The ULFA, too started highlighting among others, Assam&#39;s sorry plight as a result of Bangladeshi migration. Several outfits operating in the valley areas of Manipur protest against the forcible accession of the state to the Indian union and subsequent neglect of their language and the delayed statehood conferred on the state apathy shown by the central government to the population suffering from a famine triggered the militancy in Mizoram spearheaded by the.Mizo National Front (MNF).

  
<p><b>NAXALISM:</b>Though initiated as a movement with a cause of land reforms, naxalism has taken a violent and dangerous turn aiming at overpowering democratic structure of India, through violent means of terrorism. The financial, ideological, technological and ammunition support from external state and non-state actors has led to its expansion into &quot;Red Corridor&quot;.</p>

<p><b>CYBER ATTACKS:</b>The growth of Internet technology and cloud-based systems in the past few years had created room. for cyber &nbsp;espionage and warfare. Nations are electronically connected and everythifig is in digital form, attracting attacks is cyberspace. The organised groups, individuals and state sponsored organisations are venturing into this new area of warfare. India faced a severe test during the coin Commonwealth Games when cyber attacks from Pakistan and China sought to damage information systems. It is reported that most of the attacks, India deals with, originate from countries like the US, China, Russia, a few east European countries and Iran.</p>


<p><b>COUNTERFEIT CURRENCIES:</b>Fake/Counterfeit Currency poses a huge security related threats and socio-economic problems. Its impact on general crime on society is serious as more and more educated unemployed youth are attracted towards the counterfeit racket. The menace of Counterfeit Currency therefore is also dubbed as &#39;economic terrorism&#39; confronted by India. Apparently, it is difficult to distinguish between fake and real currency as counterfeits are now printed with state of the art technology using security paper that is made available only to state actors. This clearly indicates involvement of government agencies in the neighbourhood: Pumping fake currencies is one of the sub-conventional warfare strategies pursued by Pakistan against India, an attempt to subvert the Indian economy and to fund terror networks.</p>
<p>Fake Indian currency notes principally originate from Pakistan, but are smuggled through various routes, in different ways. The popular routes are via UAE, Nepal and Bangladesh. Fake notes from Dubai are transported through air with the help of bona fide passengers or couriers appointed for the purpose. Thailand, Malaysia, Myanmar and Sri Lanka are also used as transit points.

  <p>Recently, National Investigation Agency (NIA) has established a clear link between Pakistan and Jammu and Kashmir based terror outfits pooling their resources to circulate fake Indian-currency and using it to fund jihadi activities in India. In a case related to smuggling of counterfeit currency, the NIAs probe has resealed the role of Hizbul Mujahideen, which operates from J&amp;K, in circulating fake currency.</p>

<p><b>COMMUNALISM:</b>India faces problems of law and order due to caste and ethnic conflicts. Recent Assam violence is an indicator of the same. There are many incidences of communal violence in recent past. There are reports which suggest that financial and ideological support to the domestic extremist organisations are generally sourced from external religious organisations.



<b>DRUG AND HUMAN TRAFFICKING</b>
<p>For the last three decades, India has become a transit hub, as well as, a destination for heroin and hashish produced in the &#39;Golden Triangle&#39; and the &#39;Golden Crescent&#39;. In addition, various psychotropic and pharmaceutical preparations and precursor chemicals produced domestically, as well as, in various parts of the world are also trafficked through Indian territory.</p>
<p>It has been estimated that money generated from the illegal sale of narcotics accounted for 15 percent of the finances of militant groups in Jammu and Kashmir. Similarly Northeast insurgent groups like the Nationalist Socialist Council of Nagaland (Isak-Muivah) are known to channelize drugs into India to finance their operations.</p>
<p>Along with the above mentioned challenges to internal security, the alleged involvement of international NGOs through their funding to domestic NGOs in mobilising local people against developmental projects, as seen in the ongoing agitation against Kudankulam Nuclear power plant, also threatens the internal peace and security in India. Therefore, in this globalising era, India being the biggest democracy in the world, faces major challenges to internal security through the external state and non-state actors.</p>

</div>
  <div class="menu-content Doctrine">
<h3>INDIAN NUCLEAR DOCTRINE</h3><hr>
<p><b>The Indian Nuclear Doctrine rests on three pillars:</b> credible minimum deterrence; civilian command and control; no first use. In the Indian context, the idea of credible minimum deterrence which combines the credibility of India&#39;s nuclear threat along with its capability to pull off a retaliatory nuclear strike that promises assured destruction falls short in face of sub-conventional threats for three major reasons:.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>First, non-state actors cannot be deterred because they are free of obligations that come with the legitimacy of being recognised players in the international system.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Second, they cannot be identified territorially, thus the idea of retaliatory attack gives way, one which forms the base of the Indian nuclear doctrine.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Third, as these non-state actors do not share the same value-systems and world-views as the Indian state the whole process of rational calculations which is imperative to influence and deter adversaries is diluted.</p>
<p>The No First Use (NFU) of nuclear weapons is the second pillar of the Indian nuclear doctrine which is challenged by the non-state actors. Any retaliation on foreign territory using nuclear wmpons would be the first use by India against that country. The 2003, CCS review of India&#39;s nuclear doctrine complicates this situation further. It pits India&#39;s nuclear weapons use In retaliation to not only a nuclear attack, but even against attacks using other Weapons of Mass Destruction (AND), namely chemical and biological weapons.</p>
<p>Recently, there has been much speculation about a shift in India&#39;s nuclear doctrine. There is a debate that why should India hind herself to no first use? The recent omission of the word &quot;minimum&quot; from the nuclear posture, could be a clear indication of such a shift, es this document is the official doctrine of the Indian military.




  <p>Minimal deterrence is the status wherein a nation maintains the minimum number of nuclear weapons to inflict unacceptable damage on an adversary even after suffering a nuclear attack. Hence an arsenal.of this size would be maintained to deter nuclear conflict mainly through the threat of retaliation or punishment. While this would certainly cap India&#39;s arsenal size and keep such an arsenal -minimal,&quot; it is important to note that the arsenal size would also depend on an adverSary&#39;s ability to carry out a so-called decapitating first strike. Hence there have been calls for keeping India&#39;s nuclear arsenal open-ended so as to properly address future scenarios. In light of this argument, one must note recent technological developments such as MIRV technology, Pakistan&#39;s Babur III submarine-launched missile and growing concern over Pakistan&#39;s expanding nuclear arsenal to achieve full-spectrum deterrence.</p>
<p>All this is likely to pray on the minds of policymakers and may even force them to drop the idea of maintaining a minimum force size. But does this indeed point to shift in India&#39;s nuclear posture, from counter-value targeting to counter-force targeting? A counter-force doctrine, would certainly require a greater force structure. Assuming that most Pakistani nuclear weapons are kept in hardened underground bunkers (and taking into account the inverse square law), accuracy would indeed have to be very high to adopt a credible first strike doctrine. As the reliability of Indian systems is not very high and their accuracy is quite questionable,India would require a very large force structure to ensure a credible counter-force doctrine.</p>
<p>Hence while India is seeing the spare for large-scale conventional wars receding,the Indian Army may be making a new. push for limited conventional operations in a nuclear epvironment. But it will be crucial to understand.</p>
<p>what economic constraints and international fallout such a doctrinal shift will face. Hence the government must undertake a holistic approach to any change in India&#39;s nuclear posture, and not solely a military one.</p>
</div>
  <div class="menu-content Agencies"><h3>VARIOUS SECURITY FORCES AND AGENCIES AND THEIR MANDATE</h3><hr>
<b>Ministry of Home Affairs</b>
<p>Ministry of Home Affairs (MHA) extends manpower and financial support, guidance and expertise to the State Governments for the maintenance of security, peace and harmony; without trampling upon the constitutional rights of the States.</p>
<p><b>Under the Government of India (Allocation of Business) Rules, 1961, the Ministry of Home Affairs has the following&nbsp; constituent Departments:</b></p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Department of Border Management</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Department of Home</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Department of Internal Security</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Department of Jammu &amp; Kashmir (J&amp;K) Affairs</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Department of Official Language</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Department of States</p>


 
<b>CENTRAL ARMED POLICE FORCES:</b>
<p>There are six Central Armed Police Fames (CA PFs), namely Border Security Force (BSF), Central Industrial Security Force (CISF), Central Reserve Police Force (CRPF), Indo-Tibetan Border Police (ITBP), Sashastra Seema Sal (SSB) and National Security Guards (NSG) and one Central Paramilitary Force (CPMF) i.e. Assani Rifles (AR) under the Ministry of Home Affairs. Out of these, AR, BSF, ITBP and SSB are the &#39;Border Guarding Forces&#39; while CRPF assists the State Governments/UT Administrations in matters related to maintenance of Public Order. CRPF is also teamed and equipped for assisting them in internal security/counterinsurgency duties. The Rapid Action Force (RAF) and Commando Battalion for Resolute Action (CoBRA) are specialised wings of the CRPF to deal with the riots and Left Wing with Extremism/insurgency, respectively. CISF provides security and protection to vital installations, Public Sector Undertakings (PSUs), airports, industrial unit, itnportant national museum, Government buildings in Delhi and other important sensitive organisations. NSG is a specialised Force for counter-terrorism and anti-hijacking operations. It is also entrusted with the task of securing high risk VIPs as well provide sky marshals.</p>
<b>BORDER SECURITY FORCE (BSF):</b>
<p>BSF was raised in 1965, with the strength of 25 Battalions and 3 Coys and the multiplicity of State Forces, Over the years, the Force has grown in size and as on date it has 186 Battalions (including 3 NDRF Units), Major Training Institutions, i 1.Subsidiary Training Centres, and a minor Training Institutions. Its operational responsibility is spread</p>
<p>over 6,386.36 km of International Border with Pakistan and Bangladesh. It is also deployed on Line of Control (LoC) in J&amp;K under the Operational control of the Army. The Border Security Force has two formed police units deployed with United Nation Stabilisations Mission Haiti and United Nations Congo Stabilisations Missions in Democratic Republic of Congo.</p>
  <b>Central Industrial Security Force (CISF):</b>
<p>Raised in the year inan,Cen,naltndcttniaiSeciailyFnmno (CISF) is providing security cover to 330 units including 50 domestic and international undertakings. In a span of four decades, the Force has grown manifold and has a sanctioned strength of 104,418 personnel as on 31.12.2016. CISF is currently providing security cover to S30 units which includes Atomic Power Plants, Space Installations, Defence Production Units, Heavy Engineering, Steel Plants, Fertiliser Units,Airports, Hydro electric/thermal power plants, sensitive government buildings and heritage monuments (including the Taj Mahal and Red Fort) and important Private Sector Units.</p>

<b>CENTRAL RESERVE POLICE FORCE (CRPF):</b>

<p>Initially raised as the &#39;Crown Representative Police&#39; on 27.07.1939 at Neemuch, Madhya Pradesh, the Force was rechristened as Central Reserve Police Force (CRPF) after Independence. Since then, the Force has grown in its strength and capabilities. Presently, it has a strength of 239 Battalions and 43 Group Centres, 20 Training Institutions, 7 Arms Workshops and 3 Central Weapon Stores.</p>
<p>The CRPF has become the largest Central Armed Paramilitary Force of the country. The Force is presently. handling a wide range of duties covering law and order, counterinsurgency, antimilitancy and anti-naxal operations. The Force plays a key role in assisting the State Governments and UT Administrations in maintaining public order and countering subversive activities of Naxalites/militant groups/Insurgents.</p>


<b>COMMONDO BATTALIONS FOR RESOLUTE ACTION (CoBRA)</b>
<p>&nbsp;&quot;CoBRA&mdash;Commando Battalion for Resolute Action, a specialised Force has been only. Also known as Jungle Warrior, CoBRA are selected from amongst the CRPF personnel who have the right aptitude and zeal. 10 CoBRA battalions raised between 200.11 have been trained, equipped and deployed in LWE affected states of Chhattisgarli, Bihar, Orissa, Jharkhand, Madhya Pradesh, Maharashtra, WestBengal. Andhra Pradesh and also Assam and Meghalaya.&nbsp;It is one of the hest Central Armed Police in the country.</p>

<b>INDO-TIBETIAN BORDER POLICE FORCE (ITBPF)</b>
<p>&nbsp;The ITBP was raised in the wake of the Chinese aggression in 1962 with a modest strength of 4 Bns under the principle of One Border One Force&#39;. Today, ITBPF guards 3,498 km of Indo-China Border and is manning 173 Border Out Posts (B0Ps) with an altitudes ranging from 9.000 feet to 18,750 feet in-the Western, Middle and Eastern Sector of the Indo-China Border along the Himalayas from Karakoram Pass in Ladakh to Jachep La in Arunachal Pradesh.</p>

<b>NATIONAL SECURITY GUARD (NSG)</b>
<p>&nbsp;The NSG was set up in 1984 as a Federal Contingency Deployment Force for conthating terrorist activities with a view to neutmlise the threats posed by anti-national elements. NSG is a t00% deputationist Force made up of personnel from Army, CAPF, State Police and other Organisations. NSG Commandos are trained for high-risk tasks like counter-hijack, counter-terrorist&raquo; and bomb disposal operations. They are also assigned the task of providing mobile security protection to designated protectees.</p>

<b>SASHASTRA STERNA BAL (SSB)</b>
<p>&nbsp;The Special Service Bureau which was precursor to the present Sashastra Seema Bal was set up in early 1963 in the wake of India-China conflict of 1962 to build up the morale and capability of the border population against threats across &#39; the border. It became a Border Guarding Force in 2001 under the Ministry of Home Affairs and was rechristened as &quot;Sashastra Seema Bal&quot; with an amended charter of ditties. It has been given the border guarding responsibilities along the lndo-Nepal Border (INB) and I ndo-Bhutan Border (IBB).</p>

</div>
  <div class="menu-content CAPF"><h3>CENTRAL ARMED POLICE FORCES</h3><hr>
<p>There are six Central Armed Police Fames (CA PFs), namely Border Security Force (BSF), Central Industrial Security Force (CISF), Central Reserve Police Force (CRPF), Indo-Tibetan Border Police (ITBP), Sashastra Seema Sal (SSB) and National Security Guards (NSG) and one Central Paramilitary Force (CPMF) i.e. Assani Rifles (AR) under the Ministry of Home Affairs. Out of these, AR, BSF, ITBP and SSB are the &#39;Border Guarding Forces&#39; while CRPF assists the State Governments/UT Administrations in matters related to maintenance of Public Order. CRPF is also teamed and equipped for assisting them in internal security/counterinsurgency duties. The Rapid Action Force (RAF) and Commando Battalion for Resolute Action (CoBRA) are specialised wings of the CRPF to deal with the riots and Left Wing with Extremism/insurgency, respectively. CISF provides security and protection to vital installations, Public Sector Undertakings (PSUs), airports, industrial unit, itnportant national museum, Government buildings in Delhi and other important sensitive organisations. NSG is a specialised Force for counter-terrorism and anti-hijacking operations. It is also entrusted with the task of securing high risk VIPs as well provide sky marshals.</p>


<b>COMMANDO BATTALIONS FOR RESOLUTE ACTION (CoBRA)</b>
<p>&nbsp;&quot;CoBRA&mdash;Commando Battalion for Resolute Action, a specialised Force has been only. Also known as Jungle Warrior, CoBRA are selected from amongst the CRPF personnel who have the right aptitude and zeal. 10 CoBRA battalions raised between 200.11 have been trained, equipped and deployed in LWE affected states of Chhattisgarli, Bihar, Orissa, Jharkhand, Madhya Pradesh, Maharashtra, WestBengal. Andhra Pradesh and also Assam and Meghalaya.&nbsp;It is one of the hest Central Armed Police in the country.</p>


</div>
  <div class="menu-content BSF"><h3>BORDER SECURITY FORCE (BSF)</h3><hr>
<p>BSF was raised in )965, with the strength of 25 Battalions and 3 Coys and the multiplicity of State Forces, Over the years, the Force has grown in size and as on date it has 186 Battalions (including 3 NDRF Units), Major Training Institutions, i 1.Subsidiary Training Centres, and a minor Training Institutions. Its operational responsibility is spread</p>
<p>over 6,386.36 km of International Border with Pakistan and Bangladesh. It is also deployed on Line of Control (LoC) in J&amp;K under the Operational control of the Army. The Border Security Force has two formed police units deployed with United Nation Stabilisations Mission Haiti and United Nations Congo Stabilisations Missions in Democratic Republic of Congo.</p>

<b>INDO-TIBETAN BORDER POLICE FORCE (ITBPF)</b>
<p>&nbsp;The ITBP was raised in the wake of the Chinese aggression in 1962 with a modest strength of 4 Bns under the principle of One Border One Force&#39;. Today, ITBPF guards 3,498 km of Indo-China Border and is manning 173 Border Out Posts (B0Ps) with an altitudes ranging from 9.000 feet to 18,750 feet in-the Western, Middle and Eastern Sector of the Indo-China Border along the Himalayas from Karakoram Pass in Ladakh to Jachep La in Arunachal Pradesh.</p>

</div>
  <div class="menu-content CISF"><h3>CENTRAL INDUSTRIAL SECURITY FORCE (CISF)</h3><hr>
<p>Raised in the year inan,Cen,naltndcttniaiSeciailyFnmno (CISF) is providing security cover to 330 units including 50 domestic and international undertakings. In a span of four decades, the Force has grown manifold and has a sanctioned strength of 104,418 personnel as on 31.12.2016. CISF is currently providing security cover to S30 units which includes Atomic Power Plants, Space Installations, Defence Production Units, Heavy Engineering, Steel Plants, Fertiliser Units,&nbsp; Airports, Hydro electric/thermal power plants, sensitive government buildings and heritage monuments (including the Taj Mahal and Red Fort) and important Private Sector Units.</p>

<b>NATIONAL SECURITY GUARD (NSG)</b>
<p>&nbsp;The NSG was set up in 1984 as a Federal Contingency Deployment Force for conthating terrorist activities with a view to neutmlise the threats posed by anti-national elements. NSG is a t00% deputationist Force made up of personnel from Army, CAPF, State Police and other Organisations. NSG Commandos are trained for high-risk tasks like counter-hijack, counter-terrorist&raquo; and bomb disposal operations. They are also assigned the task of providing mobile security protection to designated protectees.</p>

</div>
  <div class="menu-content CRPF"><h3>CENTRAL RESERVE POLICE FORCE (CRPF)</h3><hr>
<p>Initially raised as the &#39;Crown Representative Police&#39; on 27.07.1939 at Neemuch, Madhya Pradesh, the Force was rechristened as Central Reserve Police Force (CRPF) after Independence. Since then, the Force has grown in its strength and capabilities. Presently, it has a strength of 239 Battalions and 43 Group Centres, 20 Training Institutions, 7 Arms Workshops and 3 Central Weapon Stores.</p>
<p>The CRPF has become the largest Central Armed Paramilitary Force of the country. The Force is presently. handling a wide range of duties covering law and order, counterinsurgency, antimilitancy and anti-naxal operations. The Force plays a key role in assisting the State Governments and UT Administrations in maintaining public order and countering subversive activities of Naxalites/militant groups/Insurgents.</p>

<b>SASHASTRA STERNA BAL (SSB)</b>
<p>&nbsp;The Special Service Bureau which was precursor to the present Sashastra Seema Bal was set up in early 1963 in the wake of India-China conflict of 1962 to build up the morale and capability of the border population against threats across &#39; the border. It became a Border Guarding Force in 2001 under the Ministry of Home Affairs and was rechristened as &quot;Sashastra Seema Bal&quot; with an amended charter of ditties. It has been given the border guarding responsibilities along the lndo-Nepal Border (INB) and Indo-Bhutan Border (IBB).</p>

</div>
  <div class="menu-content Other"><h3>OTHER POLICE ORGANISATIONS AND INSTITUTIONS</h3><hr>
<b>National Crime Records Bureau</b>
<p>the National Crime Records Bureau (NCNB) was not up in 1986, to function as a repository of information on crime and criminals operating in the states and Union Territories (LIT). This enables the investigators and others to analyse crime, collect and process the crime statistics and finger prints; coordinate, guide and assist the State Crime Record Bureau and provide training to the police officers. NCR B endeavors to empower Indian Police with Information Technology and Criminal Intelligence; to enable them to effectively and efficiently enforce the lay and improve public service delivery.</p>
<b>Indian Coast Guard</b>
<p>The Coast Guard is the principal agency for enforcement of provisiOns of all national enactment, in force, in the maritime zones of India and provideo following services to the nation and marine community:</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Ensuring safety and protection of the artificial islands, offshore installations and other structure in our maritime zones.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Providing protection to fishermen and assistance to them at sea, while in distress.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Preservation and protection of our maritime environtnent including prevention and control of maritime pollution.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Assistance to the Department of Custom and other</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Authorities in anti-Smuggling operations.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Enforcement of MZI Acts.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Initiating measures for the safety of life and property at sea.</p>
</div>
  <div class="menu-content NCRB"><h3>National Crime Records Bureau</h3><hr>
<p>the National Crime Records Bureau (NCNB) was not up in 1986, to function as a repository of information on crime and criminals operating in the states and Union Territories (LIT). This enables the investigators and others to analyse crime, collect and process the crime statistics and finger prints; coordinate, guide and assist the State Crime Record Bureau and provide training to the police officers. NCR B endeavors to empower Indian Police with Information Technology and Criminal Intelligence; to enable them to effectively and efficiently enforce the lay and improve public service delivery.</p>
</div>
  <div class="menu-content Coast"><h3>Indian Coast Guard</h3><hr>
<p>The Coast Guard is the principal agency for enforcement of provisiOns of all national enactment, in force, in the maritime zones of India and provideo following services to the nation and marine community:</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Ensuring safety and protection of the artificial islands, offshore installations and other structure in our maritime zones.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Providing protection to fishermen and assistance to them at sea, while in distress.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Preservation and protection of our maritime environtnent including prevention and control of maritime pollution.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Assistance to the Department of Custom and other</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Authorities in anti-Smuggling operations.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Enforcement of MZI Acts.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Initiating measures for the safety of life and property at sea.</p>
</div>
  <div class="menu-content Intelligence"><h3>INTELLIGENCE AGENCIES</h3><hr>
<b>Research And Analysis Wing (RAW)</b>
<p>The Research and Analysis Wing (RAW) is India&#39;s foreign intelligence figency. RAW has engaged in espionage against Pakistan and other neigtibouring countrie, It has enjoyed the backing of successive Indian governments, in these efforts. Working directly under the Prime Minister, the structure and operations of the Research &amp; Analysis Wing are kept secret from Parliament.</p>
<p>Founded in 1968, RAW focused largely on Pakistan. Its formation was initially motivated by&#39; reports of Pakistan supplying weapons to Sikh militants, and providing shelter and training to guerrillas, in Pakistan. Consequently, considerable attention is paid by RAW to Pakistan and China, countries that are traditional rivals of India. RAW has evolved from its origins as a part of the Intelligence Bureau to develop into India&#39;s predotninant intelligence organisation. RAW has an extensive network of agents and anti-government elements within Pakistan, including dissident elements from various sectarian and ethnic groups of Sindh and Punjab.</p>
<b>Intelligence Bureau</b>
<p>The Intelligence Bureau is India&#39;s internal intelligence agency and reputedly: the world&#39;s oldest intelligence agency. It was recast as the Central Intelligence Bureau in 1947, under the Ministry of Home Affairs.</p>
<p>Shrouded in secrecy, the IB is used to garner intelligence from within India, and also execute counterintelligence and counterterrorism tasks. The Bureau comprises employees from loot enforcement agencies, mostly from the Indian Police Service (IPS) and the military. However, the Director of Intelligence Bureau (DIB) has always been an IPS officer. In addition to the domestic intelligence responsibilities, the IB is particularly tasked with intelligence collection in border areas, following the 1951 recommendations of the Himmat Singh ji Committee. The IB was also tasked with other external intelligence responsibilities as of 1951 until 1968, when the Research and Analysis Wing was formed. One known task of the IB is to clear licences to amateur radio enthusiasts. The IB also passes on intelligence between other Indian intelligence agencies and the police. The Bureau also grants the necessary security clearances to Indian diplomats arid judge, before they take the oath. On rare occasions, IB officers interact with the media during a crisis situation.</p>
<b>National Investigation Agency (NIA)</b>
<p>Keeping various terrorist activities happening in India in vie, it was felt that there was a need for setting up of an agency at the Central level for investigation of offences related to terrorism and certain other Acts, which have national ramifications. The Government, after due consideration and examination of the issues involved, proposed to enact a legislation to make provisions for the establishment of a National Investigation Agency, in a concurrent jurisdiction framework; with provisions for taldng up specific cases under specific Acts for investigation.</p>
<p>Accordingly, the NIA Act was enacted on 31-12-08, and the National Investigation Agency (NIA) was born. At present, NIA is functioning as the Central Counter Terrorism Law Enforcement Agency in India. The NIA aims to set the standards of excellence in counter terrorism and other national security related investigations, at thenational level by developing into a. highly trained, partnership oriented workforce.</p>
<b>National Counter Terrorism Centre (NCTC)</b>

<p>The National Counter Terrorism Centre (Ncrc) is a proposed federal anti-terror agency to he created in India, modelled on the National Counter terrorism Centre of the USA. The proposal arose after the 2008, Minnbai attacks, ohaot/tl attacks, where several intelligence and operational failures revealed the need for a federal agency with real time intelligence inputs of actionable value specifically to counter terrorist acts against India. The proposal has however met with much criticism from the Chief Ministers of various states, who see this as a means of &#39;weakening India&#39;s federalism.</p>
<p>The NCTC was mooted as an apex body, a single and effective point of control for all counter terrorism measures. The NCTC is modelled on the American NCTC and Britain&#39;s Joint Terrorism Analysis Centre. The NCTC will derive its powers from the Unlawful Activities Prevention Act, 1967. It is to be a part of the Intelligence Bureau and will be headed by a Director who will report to the Director 1B and the Home Secretary. But the modified original draft of NCTC says that this system does not come under purview of Intelligence Bureau and states are taken into confidence, &bull; before the centre carries on any operation in their territories. NCTC will execute counter-terror operations and collect, collate and disseminate data on terrorism, besides maintaining a database on terrorists and their associate, including their families. The NCTC has been empowered to analyse intelligence shared by agencies like the Intelligence Bureau and select what it deems suitable. It has also been granted powers to conduct searches and arrests in any part of India and out formulate responses to terror threats.</p>

</div>
  <div class="menu-content RAW">
<h3>Research and Analysis Wing (RAW)</h3><hr>
<p>The Research and Analysis Wing (RAW) is India&#39;s foreign intelligence figency. RAW has engaged in espionage against Pakistan and other neigtibouring countrie, It has enjoyed the backing of successive Indian governments, in these efforts. Working directly under the Prime Minister, the structure and operations of the Research &amp; Analysis Wing are kept secret from Parliament.</p>
<p>Founded in 1968, RAW focused largely on Pakistan. Its formation was initially motivated by&#39; reports of Pakistan supplying weapons to Sikh militants, and providing shelter and training to guerrillas, in Pakistan. Consequently, considerable attention is paid by RAW to Pakistan and China, countries that are traditional rivals of India. RAW has evolved from its origins as a part of the Intelligence Bureau to develop into India&#39;s predotninant intelligence organisation. RAW has an extensive network of agents and anti-government elements within Pakistan, including dissident elements from various sectarian and ethnic groups of Sindh and Punjab.</p>
<p>RAW has a long history of activity in Bangladesh, supporting both secular forces and the area&#39;s Hindu minority. The involvement of RAW in East Pakistan is said to date from the 1960s, when RAW supported Mujibur Rahman, leading up to his general election victory, in 1970. RAW also provided training and arms to the Bangladeshi freedom fighters, known as Mukti Bahini. RAW&#39;s aid was instrumental in Bangladesh&#39;s gaining independence from Pakistan, in 1971.</p>
</div>
  <div class="menu-content IB"><h3>Intelligence Bureau</h3><hr>
<p>The Intelligence Bureau is India&#39;s internal intelligence agency and reputedly: the world&#39;s oldest intelligence agency. It was recast as the Central Intelligence Bureau in 1947, under the Ministry of Home Affairs.</p>
<p>Shrouded in secrecy, the IB is used to garner intelligence from within India, and also execute counterintelligence and counterterrorism tasks. The Bureau comprises employees from loot enforcement agencies, mostly from the Indian Police Service (IPS) and the military. However, the Director of Intelligence Bureau (DIB) has always been an IPS officer. In addition to the domestic intelligence responsibilities, the IB is particularly tasked with intelligence collection in border areas, following the 1951 recommendations of the Himmat Singh ji Committee. The IB was also tasked with other external intelligence responsibilities as of 1951 until 1968, when the Research and Analysis Wing was formed. One known task of the IB is to clear licences to amateur radio enthusiasts. The IB also passes on intelligence between other Indian intelligence agencies and the police. The Bureau also grants the necessary security clearances to Indian diplomats arid judge, before they take the oath. On rare occasions, IB officers interact with the media during a crisis situation.</p>
</div>
  <div class="menu-content NIA"><h3>National Investigation Agency (NIA)</h3><hr>
<p>Keeping various terrorist activities happening in India in vie, it was felt that there was a need for setting up of an agency at the Central level for investigation of offences related to terrorism and certain other Acts, which have national ramifications. The Government, after due consideration and examination of the issues involved, proposed to enact a legislation to make provisions for the establishment of a National Investigation Agency, in a concurrent jurisdiction framework; with provisions for taldng up specific cases under specific Acts for investigation.</p>
<p>Accordingly, the NIA Act was enacted on 31-12-08, and the National Investigation Agency (NIA) was born. At present, NIA is functioning as the Central Counter Terrorism Law Enforcement Agency in India. The NIA aims to set the standards of excellence in counter terrorism and other national security related investigations, at thenational level by developing into a. highly trained, partnership oriented workforce.</p>
</div>
  <div class="menu-content NCTC"><h3>National Counter Terrorism Centre (NCTC)</h3><hr>
    <p> The National Counter Terrorism Centre (Ncrc) is a proposed federal anti-terror agency to he created in India, modelled on the National Counter terrorism Centre of the USA. The proposal arose after the 2008, Minnbai attacks, ohaot/tl attacks, where several intelligence and operational failures revealed the need for a federal agency with real time intelligence inputs of actionable value specifically to counter terrorist acts against India. The proposal has however met with much criticism from the Chief Ministers of various states, who see this as a means of &#39;weakening India&#39;s federalism.</p>
<p>The NCTC was mooted as an apex body, a single and effective point of control for all counter terrorism measures. The NCTC is modelled on the American NCTC and Britain&#39;s Joint Terrorism Analysis Centre. The NCTC will derive its powers from the Unlawful Activities Prevention Act, 1967. It is to be a part of the Intelligence Bureau and will be headed by a Director who will report to the Director 1B and the Home Secretary. But the modified original draft of NCTC says that this system does not come under purview of Intelligence Bureau and states are taken into confidence, &bull; before the centre carries on any operation in their territories. NCTC will execute counter-terror operations and collect, collate and disseminate data on terrorism, besides maintaining a database on terrorists and their associate, including their families. The NCTC has been empowered to analyse intelligence shared by agencies like the Intelligence Bureau and select what it deems suitable. It has also been granted powers to conduct searches and arrests in any part of India and out formulate responses to terror threats.</p>
</div>
  <div class="menu-content Army"><h3>REFORMS IN THE INDIAN ARMY TO ENHANCE COMBAT CAPABILITY</h3><hr>
<p>A Committee of Experts (CoE) was constituted by Ministry of Defence under the chairmanship of Lt. Gen. &bull; (Retd) D.B. Shekatkar to recommend measures to enhance combat capability and rebalance defence expenditure of the armed forces. The Committee submitted its report in December 2016. The Report was taken up by the Ministry of Defence to frame key action points and roadmap for implementation. Action has already been initiated on the following:</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Optimization of Signals Establishments to include Radio Monitoring Companies, Corps Air Support Signal Regiments, Air Formation Signal Regiments, Composite Signal Regiments and merger of Corps Operating and Engineering Signal Regiments.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Restructuring of repair echelons in the Army to include Base Workshops, Advance Base Workshops and Static/Station Workshops in the field Army</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Redeployment of Ordnance echelons to include Vehicle Depots, Ordnance Depots and Central Ordnance Depots apart from streamlining inventory control mechanisms</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Better utilization of Supply and TransPortation echelons and Anitnal Transport Units.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Closure of Military Farms and Army Postal Establishments in peace locations.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Enhancement in standards for recruitment of clerical staff and drivers in the Army.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Improving the efficiency of the National Cadet Corps.</p>
<b>Police Reforms</b>
<p>&#39;Public order&#39; and &#39;Police&#39; figure as Entry I and 2 respectively, in List II (State List) in the Seventh Schedule of our Constitution, thereby making State Governments primarily responsible for maintaining public order.</p>
<b>Problems in the Existing Police Functioning in India</b>
<p>The major problems in the functioning of the Indian police have been brought to the fore recently through high profile cases such as the disappearance and killings of a large number of children in Nithari Village of U.P. and Sheena Bora and Sunanda Pushkar murder cases, wherein callousness, collusion, shoddy investigation and &#39;hostile witnesses&#39; made a mockery of the entire criminal justice system. A media-led outcry and interventions by the judiciary have ensured belated remedial action in a few cases. But the failure in countless other cases continues unaddressed.</p>
<p>It is argued that the traditional snobbery and system of patronage have continued, corruption levels have gone up and no also the extent of political interference. There is a propensity to resort to physical violence and coercion, even during investigations rather than taking recourse to scientific and sophisticated methods to gather evidence. The emphasis, therefore, is on the oral evidence or confession, rather than on forensic evidence.</p>
<p>It would not, however, be fair to place the entire blame on the police for the failure of the criminal justice system, because there are many factors responsible for the present situation. These could be broadly classified as follows:</p>
<b>⦁ Problems related to general administration:</b>
<p>&rarr; Poor enforcement of laws and general failure of administration;</p>
<p>&rarr; Large gap between aspirations of the people and opportunities with resultant deprivation and alienation;</p>
<p>&rarr; Lack of coordination between various government agencies.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Problems related to police:</p>
<p>&rarr; Problems of organisation, infrastructure and environment;</p>
<p>&rarr; Unwarranted political interference;</p>
<p>&rarr; Lack of empowerment of the cutting edge functionaries;</p>
<p>&rarr; Lack of motivation at the lower levels due to poor</p>
<p>&rarr; career prospects, and hierarchical shackles;</p>
<p>&rarr; Lack of modern technology/methods of investigation;</p>
<p>&rarr; Obsolete intelligence gathering techniques and infrastructures; and</p>
<p>&rarr; Divorce of authority from accountability.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Problems of organisational behaviour:</p>
<p>&rarr; Inadequate training; and</p>
<p>&rarr; Entrenched attitudes of arrogance, insensitivity and patronage.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Problems of stress due to overburdening:</p>
<p>&rarr; Multiplication of functions, with crime prevention and investigation taking a back seat;</p>
<p>&rarr; Shortage of personnel and long working hours; and</p>
<p>&rarr; Too large a population to handle.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Problems related to ethical functioning:</p>
<p>&rarr; Corruption, collusion and extortion at different levels</p>
<p>&rarr; Insensitivity to human rights; and</p>
<p>&rarr; Absence of transparent recruitment and personnel policies.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Problems related to prosecution:</p>
<p>&rarr; Best talent not attracted as public prosecutors;</p>
<p>&rarr; Lack of coordination between the investigation and the prosecution agencies; and</p>
<p>&rarr; Mistrust of police in admitting evidence.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Problems related to the judicial process/criminal justice administration:</p>
<p>&rarr; Large pendency of cases;</p>
<p>&rarr; Low conviction rates;</p>
<p>&rarr; No emphasis on ascertaining truth; and Absence of victims&#39; perspective and rights.</p>
<b>Difficulties expressed by Police</b>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Excessive workload due to inadequacy of manpower and long working hours even on holidays and the absence of shift system;</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Non-cooperative attitude of the public at large;</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Inadequacy of logistical and forensic backup support;</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Inadequacy of trained investigating personnel; &nbsp;&bull;</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Inadequacy of the state-of-the-art training facilities in investigation, particularly in-service training;</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Lack of coordination with other subsystem of the Criminal Justice System in crime prevention, control and search for truth;</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Distrust of the laws and courts;</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Lack of laws to deal effectively the emerging areas of crime such as organised crime, money laundering etc.;</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Misuse of bail and anticipatory bail provisions;</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Directing police for other tasks which are not a part of police functions;</p>







<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Interrupting investigation work by being withdrawn tbr law and order duties in the midst of investigation.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Political and execution interference;&nbsp;</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Existing preventive laws being totally ineffective in curbing criminal tendencies of hardened criminals and recidivists.</p>
<b>Supreme Court directives for Police Reforms in Prakash Singh Case, 2006</b>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Constitute a State Security Commission (SSC) to ensure that the state government does not exercise unwarranted influence or pressure on the police. SSC will also lay cloo,&bull;it broad policy guideline and evaluate the pertbrmance of the state police.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Ensure that the DGP &nbsp;is appointed through the merit-based transparent process and secure a minimum tenure of two years.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Even police otlicers on operational ditties (including Superintendents of Police incharge of Districts and Station House Officer in-charge of a police station) are also provided i0ini0000 tenure of 2 years.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Separation of investigative and law and order functions of the police.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Set up a Police Establishment Board to decide on transfers, postings, promotions and other service related matters of police officers of and below the rank of Deputy Superintendent of Police (DSP) and recommend the same for officers above the rank of DSP.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Set up Police Complaints Authority at state and district level to inquire into public complaints against police officers in cases of serious misconduct.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Set up National Security Commission at the Union level to prepare a panel for selection and placement of Chiefs of the Central Police Organisations with a minimum tenure of two years.</p>
<b>Evidence based Policing</b>
<p>Evidence-based policing was a movement launched in the U.S. and the U.K. It emphasizes the value of statistical analysis and empirical research. When left alone to practice individually, officers often Oct upon their own perception of the facts, which often or out to be wrong. Ell!&#39; rectifies this by stressing to work based on statistics, changing practices and measuring the success of those changes with risk-adjusted outcomes. e.g. One strategy is identifying &#39;hot spots of crime and spotting problematic individuals in a community.</p>
<p>The prediction task requires an analysis of events which are either crimes by themselves or border on crimes defined by law. There are certain geographic areas in each police jurisdiction which report more incidents than others. EBI&#39; goes beyond statistics and pinpoints the time and opportunities presented to a potential offender.&nbsp;</p>
</div>
  <div class="menu-content Modernization"><h3>Modernization of Police Force scheme</h3><hr>
<p>The Union Cabinet has given its approval for implementation of umbrella scheme of -Modernisation of Police Forces (MPF)&quot; for years 2017-18 to 2019-20. The financial outlay for the scheme over the three year&#39;s period is Rs. 25,060 crore, out of which the Central Government share will be Rs. 18,636 crore and the States&#39; share will he Rs. 6,404 crore.</p>
<b>Salient Features</b>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Special provision has been made under the Scheme for internal security, law and order, women security, availability of modern weapons, mobility of police forces, logistics support, hiring of helicopters, upgradation of police wireless, National Satellite Network, CCTNS project, E-prison project etc.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Under the umbrella scheme, central budget outlay of Rs. 10,132 crore has been earmarked for internal security related expenditure for Jammu &amp; Kashmir ,North Eastern States and left wing extremism affected States.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Scheme of Special Central Assistance (SCA) for 36 worst LWE affected districts has been introduced with an outlay of Rs. 3,000 crore to tackle the issue of underdevelopment in these district.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>An outlay of Rs. 100 crore has been earmarked in the North Eastern States for police infrastructure upgradation. training institutes, investigation facilities etc.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Implementation of this scheme would bolster the Government&#39;s ability to address challenges faced in different theatres such as areas affected by LWE.Jammu and Kashmir and North East effectively and undertake development interventions which will catalyze in improving the quality of life in these areas and help combat these challenges effectively at the same time.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>New initiatives are being introduced to provide assistance to States for upgradation of police infrastructure, forensic science laboratories, institutions and the equipment available with them to plug critical gaps in the criminal justice system. Police Stations will be integrated to set up a national database of crime and criminals&#39; records. It will be linked with other pillars of criminal justice system such as prism, forensic science laboratories and prosecution offices. &nbsp;.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>The umbrella scheme also provides for setting up of a Smteof Art forensic science laboratory in Amravati, Andhra Pradesh and upgradation of Sardar Patel Global Centre for Security, Counter Terrorism and Anti Insurgency in Jaipur and Gujarat Forensic Sciences University in Gandhinagar.</p>
<p>It is expected that the umbrella scheme, &quot;Modernisation of Police Forces (MPF)&quot; will go a long way to boost the capability and efficiency of Central and State Police Forces by modernizing them.</p>
</div>
  <div class="menu-content Security"><h3>Role of Media in Internal Security Challenges</h3><hr>
<b>The Role of Media in Public Order</b>
<p>While maintaining public order is an important aspect of the State&#39;s effart to earn the approval of its people, equally &bull; important. for the purpose of legitimacy, is the people&#39;s perception regarding its ability to do so. It is here that the positive role of the media emerges quite significantly. The increasing exposure of the general public to audio-visual and print media influences people&#39;s perception, towards the capabilities of the State.</p>
<p>Technology has endowed the electronic media with three major attributes&mdash;instantaneity, spontaneity and locality. Instantaneity has provided it with a ringside view in real time, spontaneity has allowed, it cover events as they untbld and locality has provided it With the power to bring the farthest corner of the globe into a household.</p>
<p>In the context of maintenance of public order, the role of the media could go a long may in preventing rumour mongering and incorrect or mischievous coverage by a small section of the media which could be supportive of . partisan elements. The central issue, thus, is hoW to have an effective interface with the media. Given the technological environment in which the media functions today, the fact that there is no monopoly over sources of information and the need to have an informed public control measures are neither feasible nor desirable.</p>
<p>To ensure that government officials interact with the media in a professional manner, media management modules should be integrated in various training programmes. Media persons may also be associated with such training modules. Emphasis on local language media would obviously be useful.</p>
<b>Whether Media should be Regulated?</b>
<p>The debate on whether the media needs to be regulated is an ongoing one. The answer is both in the affirmative and in the negative. Dr. Manmohan Singh, the former PM of India, has been quoted in the India Today of to Oct. 2005, &quot;Newspapers can&#39;t be mere platforms of entertainment and gosiip. They can&#39;t be purveyors of justice. They must serve a larger purpose.&quot; Mr. Narendra Modi, the current PM of the nation, while speaking on the occasion of the Golden Jubilee of the Press Council of India on 16 Nov. 2010, has said, &quot;...there should be no government interference in the functioning of the media...freedom of expression needs to be followed, but there must be limits.&quot; &bull;</p>
<p>A Code of Conduct for the media does exist; there is also a regulatory body that exists; but, is it effective enough to enforce it? What one media organisation may find as saleable news may not be very palatable to another. This is not in the least a suggestion for regulating the news content, for self-accountability gives media the necessary freedom of expression and a certain degree of independence. It, however, should be careful to write/talk about issues that are sensitive to national security. The PM too has expressed a similar opinion referring to the telecast of the angry reactions of the families of the passengers onboard the Indian Airlines flight IC-814, during the Kandahar hijacking in 1999. The round-the-clock reportage emboldened the terrorists to think that they could get any concession from the Indian Government with such pressure.</p>
<b>Social Networking sites and linked challenges</b>
<p>Social networking sites can be valuable sales and marketing tools, as well as fun diversions. Inherent in these applications are security risks that can put the individual or a company in a compromising position or at a serious risk. Aside from not using these sites at all, end-user education, alongside documented policies and procedures, is the most fundamental protection that exists. A well-informed tone will not only help to maintain security, but will also educate others on these issues and establish best practices which can be standardised and updated as applications stature or as new applications come along.</p>
</div>
  <div class="menu-content Social"><h3>Major threats from Social Networking sites</h3><hr>
<b>Social Networking Worms</b>
<p>Social networking Worms include Koobface, which has become, according to the researchers, the largest Web 2.0 botnet.&quot; It is specifically designed to propagate across social networks (e.g., Facebook, mySpace, Twitter, his, Friendster and Bebo), enlist more machines into its botnet, and hijack more accounts to send more Spam to enlist more machines.</p>
<b>Phishing</b>
<p>Phishing is the attempt to obtain sensitive information such as usernames, password, and credit card details (and money), often for malicious reason, by disguising as a trustworthy entity in an electronic communication. The word is a neologism created as a homophone of &#39;fishing due to the similarity of using a bait in an attempt to catch a victim.</p>
<b>Trojan horse</b>
<p>In computing, a Trojan horse, or Trojan, is any malicious computer program which misleads users of its true intent. The term is derived from the Ancient Greek story of the deceptive wooden horse that led to the fall of the city of Troy. Trojans are generally spread by some form of social. engineering, for example where a user is duped into executing an e-mail attachment disguised to be unsuspicious, (e.g., a routine torn to be filled in), or by drive-by download.&nbsp;</p>
<b>Data leaks</b>
<p>Social networks are all about sharing. Unfortunately, many users share a bit too much about the organisation&mdash;projects, products, financial, organisational changes, scandals, or other sensitive information. Even spouses sometimes over-share how much their significant other is working late on top-secret project, and a few too many of the details associated.with said project. The resulting issues include the embarrassing, the damaging and the legal.</p>






<b>Botnet</b>
<p>A Nutlet is a number of internet-connected devices, each of which is running one or more bots. Botnets can be used to perform Distributed Denial-of-Service attack (DDoS attack), steal data. send span), and allows the attacker to amess the device and its connection. The owner can control the botnet using Command and Control (C&amp;C) software.</p>
<b>Advanced persistent threats</b>
<p>One of the key elements of Advanced Persistent Threats (APT) is the gathering of intelligence of persons of interest (e.g., executives, officers, high-networth individuals), for which social networks can be a treasure trove of data. Perpetrators of APTs use this information to further their threats&mdash;placing more intelligence gathering (e.g., mahvare, trojans), and then gaining access to the sensitive systems.</p>
<b>Impersonation</b>
<p>The social network accounts of several prominent individuals with thousands of followers have been hacked. Admittedly, most of the impersonators aren&#39;t distributing malware, but some of the hacked accounts certainly have (e.g. Guy Kawasaki).</p>
<b>NATGRID</b>
<p>NATGRID is the integrated intelligence grid connecting databases of core security agencies of the Government of India to collect comprehensive patterns of intelligence that can be readily accessed by intelligence agencies. It was conceived in the wake of the 2008 Mumbai attacks.</p>
<b>Functioning .</b>
<p>NATGRID is an intelligence sharing network that collates data from the standalone databases of the various agencies and ministries of the Indian government. It is to counterterrorism measure that collects and collates a host of information from government databases including tax and bank account details, credit card transactions, visa and immigration records and itineraries of rail and air travel. This combined data will be made available to Ii central agencies.</p>
<b>Need for Revamp</b>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>In its present form, NATGRID suffers from many inadequacies, some due to bureaucratic red tape and others due to fundamental flaws in the system.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Social media and other platforms have become recruitment &#39; sites and propaganda machines for terrorist groups, and formal banking channels are used as much as informal ones to transact terror funding.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Weaknesses in.India&#39;s intelligence gathering and action networks.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>India is not far from the days when cyber warfare will become its primary security issue.</p>
<b>Criticisms</b>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>The state Police or different defence departments a7 not mentioned among the 10 &quot;user agencies&quot; who will be able to electronically access 21 sensitise databases.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>NATGRID effectiveness will be reduced if the Central agencies are not willing to share current intelligence with the State agencies.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>NATGRID faced opposition on charges of possible violations of privacy and leakage of confidential personal information.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>NATGRID will have access to all kinds of data under one roof and can also prove to be counterproductive if misused.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>NATGRID also faces issues like consolidating data . from a huge population, lack of compatibility with data sets in regional languages, risk of spies ratting out vital information to outside sources and security from external attacks.</p>

</div>
  <div class="menu-content Cctns"><h3>The Crime and Criminal Tracking Network and Systems (CCTNS)</h3><hr>
<p>CCTNS is a mission mode project under the National, e-Governance Plan being implemented by the Ministry of Home Affairs. The project aims at creating a comprehensive and integrated system and a nationwide networked solution for connecting more than 15,000 police stations and nearly 6,000 higher offices in 28 States and 7 UTs of the country for sharing of real-time crime and criminal information. The project has been conceptualised based on the principle of &#39;Centralised Planning and Decentralised Implementation&#39;. A Core Application Software (CAS) is being developed with common definitions, scheme and specifications at the Central level which would be handed over to the States/UTs for State specific customisation. However, States which have been allowed to continue to run on their existing applications have to align their existing software to facilitate information exchange with CAS.</p>
<p>The States/UTs have complete operational independence in project implementation. The implementation is through Bundle of Services wherein a System Integrator agency implements all the requisite services as defined by Service level agreements with the States/UTs. A strong governance mechanism with various Committees has also been created as a part of CCTNS project to ensure quality and for timely completion of project.</p>
<b>Achievements under CCTNS Project</b>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>More than 83% police stations in the country are entering 100% FIRs through CCTNS software.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>120 lakhs FIR have been entered in CCTNS system till dote. Legacy Crime records since 2004 have also been migrated to the CCTNS database. In all around seven crore records are now available in the national crime database.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>31 States/trrs have launched their portals wl lich provide various services like registration of complaints, verification of criminal antecedents/litigation of individuals/property, obtaining NOC front police for events for law and order clearance, search of missing person, matching unidentified dead bodies, vehicle related enquiries; antecedent verification For issue of passport etc.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Software Ibr Prosecutions and Forensics has been developed and is currently being rolled out in Bihar, Telangana and Ptulticherry.</p>
<b>Cyber Security</b>
<p>Information Technology (IT) has exposed the user to a huge data hank of infortnation, regarding everything and anything. However, it has also &#39;added a new dimension to terrorism. Recent reports suggest that the terrorist is also getting equipped to utilise cyber space to carry out terrorist attacks. The possibility of such attacks in future cannot be denied. Terrorism related to cyber is popularly known&bull;as &#39;cyber terrorism.</p>

</div>
  <div class="menu-content Cyber"><h3>Cyber Terrorism</h3><hr>
<p>Cyber terrorism is the convergence of terrorism and cyber space. It is generally understood to mean unlawful attacks and threats of attacks against computers, networks, and information stored therein, when done to intimidate or coerce a government or its people in furtherance of political or social objectives, further, to qualify as cyber terrorist, an attack should result in violence against persons or property or at least cause enough harm to generate fear, attacks that lead to death or bodily injury, explosions, plane crashes, water contamination or severe economic loss would be examples.</p>
<b>Methods of Attacks</b>
<p>The most popular weapon in cyber terrorism is the use of computer viruses and wont&#39;s. That is why in some cases of cyber terrorism it is also called &#39;computer terrorism&#39;.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span><b>Physical attack:</b>The computer infrastructure is damaged by using conventional methods like bombs, fire etc.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span><b>Syntactic attack:</b>The computer infrastructure is damaged by modifying the logic of the system in order to introduce delay or make the system unpredictable. Computer viruses and Trojans are used in this type of attack.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span><b>Semantic attack:</b>This is more treacherous as it exploits the confidence of the user in the system. During the &nbsp;attack, the information keyed in the system during entering and exiting the system is modified without the users knowledge in order to induce emirs.</p>
<b>Tools of Cyber Terrorism</b>
<p>Cyber terrorists use certain tools and methods to unleash this nets age terrorism. These are:</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span><b>Hacking:</b>The most popular method used by a terrorist. It is a generic term used for any kind of unauthorised access to a computer or a network of computers. Some ingredient technologies like packet sniffing, tempest attack, password cracking and buffer outflow facilitate hacking.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span><b>Trojans:</b>Programmes which pretend to do one thing while actually they arc meant for doing something darer.., like the wooden Trojan Horse of the Century RC.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span><b>Computer viruses:</b>It is a computer programme, which infects other computer programmes by modifying them. They spread very fast.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span><b>Computer worms:</b>The term &#39;worm&#39; in relation to computers is a self-contained programme or a set of programmes that is able to spread functional copies of itself or its segments to other computer system. usually . via network connections.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span><b> E-Mail related crime:</b>Usually, worms and viruses have to attach themselves tda host programme to be injected. Certain entails are used as host by viruses and worms. E-mails are also used for spreading disinformation, threats and defamatory stuff.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span><b>Denial of service:</b>These attacks are aimed at denying authorised persons access to a computer or computer network.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span><b>Cryptology:</b>Teriorists have started using encryption, high frequency encrypted voice/data links etc. It would be a Herculean task to decrypt the information terrorist is sending, by using a 51e bit symmetric encryption.</p>


</div>
  <div class="menu-content Forwards"><h3>Challenges to India&#39;s National Security</h3><hr>
<p> sectors like income tax, pa&nbsp;e-governance. Sectors like police&nbsp; The travel sector is also heavily relian&nbsp; Indian banks have gone on full-scale compu isation. This has also brought in concepts of e-commerce an anking. The stock markets have also not remained inutune. To mate havoc in the country, tliese are lucrative targets to paralyze the economic and financial institution. The damage done can be catastrophic and irreversible.</p>
<b>Existing Counter Cyber Security Initiatives</b>
<p> <b>National Informatics Centre (NIC):</b>A premier organisation, providing network backbone and e-governance support to the Central Government, State Governments, Union Territories, Districts and other Governments bodies. It provides wide range of information and communication technology&#39; services, including nationwide conununication network for decentralised planning improvement in Government services and wider transparency of national and local governments.</p>
<p><b>Indian Computer Emergency Response Team (CertIn):</b> Cert-In is the most important constituent of India&#39;s cyber contmuttity. Its mandate states, &#39;ensure security of cyber space in the country by enhancing the security communications and information infrastructure, through proactive action and effective &nbsp;collaboration aimed at security incident prevention and response and security assurance&#39;.</p>
<p><b>National Information Security Assurance Programme (NISAP):</b> This is for Government and critical infrastructures. The highlights are:</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Government and critical infrastructures should have a security policy and create a point of contact.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Mandatory for organisations to implement security contr61 and report any security incident to Cert-In.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Cert-In to create a panel of auditor for IT security.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>All organisations to be subject to a third party audit from this panel once a year.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Cert-In to be reported about security compliance on periodic basis by the organisations.</p>
<b>Challenges and Concerns</b>
<p><b>Some challenges and concerns are highlighted below:</b>Lack of awareness and the culture of cyber security at individual as well as institutional level.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Lack of trained and qualified manpower to implement the counter measures.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Too tnany information security organisations, which have become weak due to &#39;turf wars&#39; or financial compulsions.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>A weak IT Act which has become redundant due to non-exploitation and age old cyber laws.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>No email account policy especially for the defence forces, police and the agency personnel.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Cyber attacks have some not only from terrorists but also from the neighbouring countries, inimical to our national interegts.</p>
<b9>Way Forward</b>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Need to sensitise the common citizens about the dangers of cyber terrorism. Coot-In should engage academic institutions and follow an aggressive strategy.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Joint efforts by all Government agencies including defence forces to attract qualified skilled personnel for implementation of counter measures.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Cyber security not to be given more lip service and the organisations dealing with the satne should be given all support. No bureaucratic dominance should be permitted.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Agreements relating to cyber security should be given the same importance as other conventional agreements.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>More investment, in this field, iii terms of finance and manpower.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Indian agencies working after cyber security should also keep a close vigil on the developments in the IT sector of our potential adversaries.</p>
<b>Budapest Convention on Cyber Crime</b>
<p>Recently, India is reconsidering its position on becoming a member of the Budapest Convention because of the surge in cyber crime, especially after a push for digital India. The&nbsp;</p>
<p>move, however, is being opposed by the Intelligence Bureau (IB) on the grounds that sharing data with foreign law enforcement agencies infringes on national sovereignty and may jeopardise the rights of individuals.</p>
<p>The Budapest Convention provides for the criminalisation of conduct, ranging from illegal access, data and systems interference to computer-related fraud and child pornography, procedural law tools to make investigation of cybercrime and securing of e-evidence in relation to any crime more effective, and international police and judicial cooperation on cybercrime and e-evidence. The Convention has 56 members, including the US and the UK.</p>
<b>Cyber Swachhta Kendra to Tackle Malware</b>
<p>Government has established the &quot;Cyber Swachhta Kendra&quot;&#39; which is a Botnet Cleaning and Malware Analysis Centre. It is part of Digital India initiative to create a secure cyber space by detecting botnet infections and providing information and enabling citizens for removal of BOTs/malware. It is being operated by CERT.in. Also, the Kendra will strive to create awarenels among citizens to secure their data, computers, mobile phones and devices such as home routers. It also collaborates with Department of Telecommunications, Internet Service Providers, Antivirus companies and academia to carry out its work.</p></div>
  <div class="menu-content Laundering"><h3>Money Laundering</h3><hr>
<p>Money Laundering refers to the conversion or &quot;Laundering&quot; of money which is illegally obtained, so as to make it appear to originate from a legitimate source. Money Laundering is being employed by launderers, worldwide, to conceal criminal activity associated with it such as drug/arms trafficking, terrorism and extortion. The illegal, or dirty, money is put through a cycle of transactions, or washed, so that it comes out the other end as legal, or clean money. In other words, the source of illegally obtained funds is obscured through a succession of transfers and deals in.order that those same funds can eventually be made to appear as legitimate income.&quot;</p>
<p>Thus, money laundering is not an independent crime, it depends upon another crime (predicate offence), the proceeds of which is the subject matter of the crime in money laundering. Hiding or disguising the source of certain proceeds will of course, not amount to money laundering, unless these proceeds were obtained from a criminal activity.</p>
<b>Money Laundering: An Organised Crime</b>
<p>Money laundering has a close nexus with the organised crime. Money launderers accumulate enormous profits through drug trafficking, international frauds, arms dealing, etc. Cash transactions are predominantly used for Money Laundering, as they facilitate the concealment of the true ownership and origin of money.</p>
<p>It is well-recognised that through the huge profits,the criminals earn from drug trafficking and other illegal mesns: money laundering could contaminate and corrupt the structure of the State, at all the levels; this definitely leads to corruption. Further, this adds to constant pursuit of profits and the expansion into new areas of criminal activity.</p>
<b>The Process of Money Laundering</b>
<b>&nbsp;Placement</b>
<p>&quot;Placement&#39; refers to the physical disposal of the bulk cash proceeds derived from illegal activity. This is the first step of the money laundering process and the ultimate aim of this phase is to remove the cash from the location of acquisition, so as to avoid detection from the authorities This is achieved by investing criminal money into the legal financial system by opening up a bank account in the name of unknown individuals or organisations and depositing the money in that account.</p>
<b>Layering</b>
<p>&quot;Layering&quot; refers to the separation of illicit proceeds from their source by creating complex layers of financial transactions. Layering conceals the audit trail and provides anonymity. This is achieved by moving money to offshore bank accounts in the name of shell companies, purchasing high value commodities like diamonds and transferring the same to the different jurisdictions. Now, Electronic Funds Transfer (EFT) has become a boon for such layering exercise.</p>
<b>Integration</b>
<p>&quot;Integration&quot; refers to the reinjection of the laundered proceeds back into the economy in such a way that they reenter the financial system as normal business funds. The launderers normally accomplish this by setting up unknown institutions in nations where secrecy is guaranteed. New forms of business give a platform for integration exercise. There.are other ways like capital market investments, real estate acquisition, the catering industry, the gold market, and the diamond market.</p>
<b>Some Techniques of Money Laundering</b>
<b>Hawala &nbsp;</b>
<p>Hawala is an alternative or parallel remittance system. It exists and operates outside of, or parallel to &#39;traditional&#39; banking or financial channels. In the Hawala networks, the money is not moved physically. A typical hawala transaction would be like .from example a resident in USA of Indian origin, doing some business, wants to send some money to his relatives in India. The person has option either to send the money through formal channel of banking system or through the hawala system. The commission in hawala is less than the bank charges and is without any complications.</p>
<b>Structuring deposits</b>
<p>Also known as mulling, this method entails breaking up large amounts of money into smaller, less suspicious&nbsp;</p>
<p>amounts. The money is then deposited into one or more bank accounts either by multiple people (smurfs) or by a single person, over an extended period of time.</p>
<b>Third-party cheques</b>
<p>Utilising counter cheques or banker&#39;s drafts drawn on different institutions and clearing them via various third-party accounts. Third party cheques and traveller&#39;s cheques are often purchased using proceeds of crime. Since these are negotiable in many countries, the nexus with the source money is difficult to establish.</p>
<b>Credit cards</b>
<p>Clearing credit and charge card balances at the counters of different banks. Such cards have a number of uses and can be used across international borders. For example, to purchase assets, for payment of services or goods received or in a global network of cash-dispensing machines.</p>
<b>Harmful Effects of Money Laundering</b>
<p>Money laundering threatens national governments and international relations between them through corruption of officials and legal systems. It undermines free enterprise and threatens financial stability by crowding out the private sector, because legitimate businesses cannot compete with the lower prices for goods and services that businesses using laundered funds can offer. There are few specific challenges which are posed by money laundering activities, throughout the world.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Terrorism</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Threat to Banking System</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Threat to Economic and Political Stability</p>
<b>Regulation of Money Laundering in India</b>
<p>In India, before the enactment of the Prevention of Money Laundering Act, 2002 (PM LA, 2002 hereinafter), the following statutes addressed scantily the issue in question:</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>The Conservation of Foreign Exchange and Prevention of Smuggling Activities Act, 1974</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>The Income Tax Act, 1961</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>The Benami Transactions (Prohibition) Act, 1988</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>The Indian Penal Code, 1860 and Code of Criminal Procedure, 1975</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>The Narcotic Drugs and Psychotropic Substances Act, 1985</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>The Prevention of Illicit Traffic in Narcotic Drugs and Psychotropic Substances Act, 1988</p>
<p>However, this was not sufficient with thegrowth of varied areas of generating illegal money by selling antiques, rare animal flesh and skin, human organ, and many such varied new areas of generating money which was illegal.</p>

</div>
  <div class="menu-content Marketing"><h3>Black Money</h3><hr>
  <p> black money can be defined as &#39;assets or resources that have neither been reported to the pubic authorities at the time of their generation nor disclosed at any point of time during their possession&#39;. Black money can be generated through:</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Illegal activities like crime, drug trade, terrorism and corruption, or</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Failing to pay dues to the public exchequer in one form or another.</p>
<p>In the second case, activities might be legal but the perpetrator may simply have failed to report the income generated to avoid paying the tax. Thus, &#39;Black money&#39; can be defined as assets or resources that have neither been reported to the public authorities at the time of their generation nor disclosed at any point of time during their possession. There are various ways through which black money can be generated:</p>
<p><b>Concealed income:</b> In search and seizure action under section 132 of Income Tax Act, the Investigation Wing of the Central Board of Direct Taxes or CBDT detected concealed income of Rs. 19,938 crow in the last two financial years. . </p>
<p><b>Under-reporting:</b> Surveys under section 133A of Income Tax Act are an important tool for ensuring that businesses are carried out according to the rules and taxes are paid in time, particularly in the micro, small and medium enterprises (MSME) and unorganised sector.</p>
<p><b>Mispricing:</b> The Directorate of Transfer Pricing has detected mispricing of Rs. 67,768 crore in the last two financial years (Rs. 44,531 crore in the current financial year). This has effectively stopped transfer to equivalent amount of profits out of the country.</p>
<p><b>Real estate sector:</b> The real estate sector in India constitutes about t t percent of the GDP. Investment in property is a common means of parking unaccounted money and a large number of transactions in real estate are not reported or are under-reported.</p>
<p><b>PAN cards and returns:</b> There is thus a huge gap between the number of entities to whom PAN has been allotted visS-vis the number of deductors filing income tax returns.</p>
<p><b>Misuse of corporate structure:</b> The Vodafone tax case provides an instance of the misuse of corporate structure for avoiding the payment of tax..</p>
<b>Recent Initiative for Curbing Black Money</b>
<p>The Government has taken several steps to effectively tackle the issue of black money, particularly black money stashed away abroad. Such measures include policy-level initiatives; more effective enforcement action on the ground; putting in place robust legislative and administrative frameworks, systems and processes with due focus on capacity building and integration of information and its mining through appropriate use of information technology. Recent major initiatives in this regard include: &#39;</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Constitution of the Special Investigation Team (SlT) on Black Money under Chairmanship and Vice-Chairmanship of two former Judges of hon&#39;ble Supreme Court.</p>

<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Recognising various limitations under the existing legislation [Income-tax Act, 1961, etc.], enactment of a Comprehensive new law&mdash;The Black Money (Undisclosed Foreign Income and Assets) and Imposition of Tax Act, 2016&#39; to specifically and more effectively tackle the issue of black money stashed away abroad.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Constitution of Multi-Agency Group (MAG) consisting of officers of Central Board of Direct Taxes (CBDT),Reserve Bank of India (RBI), Enforcement Directorate(ED) and Financial Intelligence Unit (FIU) for coordinated investigation into recent revelations in Panama paper leaks.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Proactively engaging with foreign governments with a view to facilitate and enhance the exchange of information under Tax Treaties.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Renegotiation of existing tax treaties with other countries to bring the Article on Exchange of Information to International Standards and expanding India&#39;s treaty network by signing new Tax Treaties.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Proactively furthering global efforts for Automatic Exchange of Information (AEOI) and Common Reporting Standards (CRS), inter alia, by joining the Multilateral Competent Authority Agreement and having information sharing arrangement with USA under its Foreign Account Tax Compliance Act (FATCA).</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Enabling attachment and confiscation of property equivalent in value held within the country where the property/proceeds of crime is taken or held outside the country by amending the Prevention of Money Laundering Act, 2002 through the Finance Act, 2015.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Introduction of the Benami Transactions (Prohibition) Amendment Bill, 2015 to amend the Benami Transactions (Prohibition) Act, 1988 with a view to, inter alia, enable confiscation of Benami property and provide for prosecution.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Initiation of the information technology based &#39;<b>Project Insight&#39;</b> by the Income Tax Department for strengthening the nonintrusive information driven approach for improving tax compliance and effective utilisation of available information. &#39;Project Insight&#39; has been initiated by the Department for data mining, collection, collation and processing of such information for effective risk management with a new to widening and deepening tax base.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Other legislative measures including amendments in the Income-tax Act.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>According high priority to the cases involving black money stashed away abroad for investigation and other follow-up actions including prosecutions he appropriate cases</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>&#39;The Income Declaration Scheme, 2016&#39; (the scheme) has been introduced vide the Finance Act, 2016, with effect from 1st June &#39;2016. The scheme provides for an opportunity to all the persons who have not paid full taxes in the past to come forward and declare the undisclosed income and pay tax, surcharge and penalty, totalling to forty-five percent of such undisclosed income declared.</p>

</div>
  <div class="menu-content Extremism"><h3>Left Wing Extremism</h3><hr>
<p>The terms, Naxalites or Maoists, are used to refer to militant far-left radical Communist groups operating in India. Inspired by the doctrines of Mao Zedong,axalites work to overthrow the government and upper classes by violence. The Indian Ministry of Home Affairs (MHA), describes the objectives of Naxalites as destroying state legitimacy with the ultimate object of. attaining political power by violent means&quot;. They are consulered as a terrorist organisation under the Unlawful Activities (Prevention) Aft of India (1067). The movement started in West Bengal, m the early seventies but has since spread to the rural areas in central and eastern India. The MHA notes that Naxahtes attach themselves to civil society and front organisations on issues such as displacement, land reforms and acquisition where they can increase their mass support.</p>
<p>The Government already has a comprehensive National Policy and a multipronged action plan to deal with Left Wing Extremism comprising of security relatedmeasures, developmental interventions and ensuring rights and entitlements of local communities etc. However, this is only one part of the solution. An examination of the reasons behind the Naxalite movement indicates that military force on its own will not be enough to counter India&#39;s biggest security threat.</p>
<b>Causes of the Threat</b>
<p>The causes of the Maoist movement in India are structural. Economical, political and cultural dimensions are closely linked. The first is the economic situation which is exploited by Naxalites and their extreme left ideology. It seems much like a catch-22 situation. On the one hand, India has experienced relatively fast economic growth, which has led to the increased levels of national wealth. To facilitate and continue this development,. business need more land and natural resources such as minerals. On the other hand, this economic growth has been uneven among regions, and has widened the disparity between the rich and the poor. Proponents of these business argue that these regions need economic development, if they are to catch up with their richer counterparts.</p>
<p>Second, the alienation that is being exploited by the Maoists has a social, communal and regional dimension. The battle can also be described between India&#39;s most neglected people and the nation&#39;s most powerful industrial businesses. The adivasis make up about 8.4 percent of the population and live in severe poverty. They live in remote areas where government administration is weak and there is a lack of government services. These indigenous people have the lowest literacy rates in the country and highest rites of infant mortality. Given this socio-economic alienation, it is easy to see how the Naxalite&#39;s ideology is popular among the rural poor and indigenous tribes, and why the adivasis view the guerrillas as their &quot;saviours&quot;.</p>
<b>Solutions</b>
<p>In order to comprehensively dissolve the Naxalite threat, the government has to address its root causes. Socio-economic alienation and the dissatisfaction with die widening economic and political inequality will not be solved by the military force alone, which seems to be the main instrument employed by the government. The problem calls for a three-pronged solution: social and economic development, mutelateral dialogue and military force.</p>
<b>Socio-economic development</b>
<p>As the Naxalites are fuelled by discontent from the marginalised and the poor, a larger percentage of the national budget must be allocated to addressing the needs of these regions. More of the national expenditure needs to be focused on developing these poorer regions through initiatives regarding health, education, social welfare and rural and urban development.</p>
<b>Dialogue</b>
<p>Second, the government should initiate sincere dialogue with these marginalised groups, the Naxalites and state leaders. The popularity of Naxalites with the ad ivasis is a reflection of the fact that the government hoe been unaware or &quot;unapologetically indifferent to their plight&quot;. By communicating and starting a dialogue between these stakeholders, these groups will feel that they are being listened to.</p>
<b>Military</b>
<p>Currently, the main instrument employed by the government to address the Naxalite threat is the increasing use of the military. While some military force is still needed to combat against the Maoist guerrillas, it should not be the only solution. By only addressing the issue by brute force, government risks alienating civilians who are caught in the middle. Coercion of the state will only encourage people to rally it.</p>
<b>Development Schemes in the Naxal Affected Districts</b>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>The Additional Central Assistance (ACA) for the LWE affected districts, being implemented by the NITI Aayog and the Road Requirement Plan (RRP-I), being implemented by the Ministry of Road Transport &amp; Highways, are the two major developmental schemes, which focus specifically on the LWE affected districts.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>The Additional Central Assistance for LWE affected districts, which focuses. on creation of public Mfrastructure and services, was earlier being implemented as the Integrated Action Plan (tAP) since the year 2010-1 5. The Scheme which initially covered GO districts, now covers 88 districts including 76 LWE affected districts in the to LOVE affected States (Andhra Pradesh-04,Bihar-11, Chhattisgarli-14, Jharkhand-17, Madhya Pradesh-10, Maharashtra-04, Odisha-18, Telangana-04, Uttar Pradesh-03 and West Bengal-03). The fund allocation per district per year under the scheme was Rs. 25.00 crore in the year 2010-11 and Rs. 30.00 crores in the subsequent years.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Besides, two Skill Development related Schemes, namely, &#39;ROSHNI&#39; and &#39;Skill Development in districts affected by Left Wing Extremism&#39; are also being implemented by the Nlinistry of Rural Development and Ministry of Labour and Employment respectively.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>ROSHNI is a special initiative under, Pandit Deen Dayal Upadhyaya Grameen Kaushalya Yojana (Formerly Ajeevika Skills), launched in June 9.0 t 3 for training and placement of rural poor youth from 27 LWE affected districts in 09 States (Andhra Pradesh-01, Bihar-02, Chliattisgarh-08,</p>
<p>Jharkhand-06, Madhya Pradesh-01, Maharashtra-01, Odisha-06, Uttar Pradesh-01 and West Bengal-01 ). In addition, the &#39;Ministry of Communication &amp; IT is implementing the Universal Service Obligation Fund (USOF) supported Scheme of Mobile Services in LWE affected areas in the 10 lAVE affected States.</p>

</div>
  <div class="menu-content Terrorism"><h3>Linkages of Organized Crime with Terrorism</h3><hr>
<b>Terrorism</b>
<p>It is somewhat surprising that despite terrorism being recognised as a global phenomenon, attempts in die past for arriving at an internationally accepted definition of terrorism have proved to be futile. According to some observers, this ambivalence is primarily due to two reasons: firstly, a &#39;terrorist&#39; in one country may be viewed as a &#39;freedom fighter&#39; in another; secondly. it is known that some States resort to or encourage various kinds of criminal acts, clandestinely, through their own agencies or hired agents to subvert or to otherwise destabilise another lawfully established government.</p>
<p>While member-states of &#39;the United Nations have not arrived at a consensus regarding the definition of terrorism; the UN&#39;s &#39;academic consensus definition&#39;, given by Alex If Schmid, is perhaps the most widely accepted one. According to him: &quot;Terrorism is an ammity-inspiring method of repealed violent actionemployed by (semi-) dandestine individual, group or stale actors, for idiosyncratic, criminal or political reasons, whereby&mdash;in contrast to assassination&mdash;the direct targets of violence are not the main targets. The immediate human victims of violence are generally chosen randomly (targets of opportunity) or selectively (representative or symbolic targets) from alas-get population, and serve as message generators. Threat and violence-. based communication processes between terrorist (organisation), (imperiled) vidirns, and main targets are used to manipulate the main target (audience(s)), turning it into alas-gel of terror, a target of demands, or a target of action, depending on wheghe,. intimidation, coercion, or propaganda is primarily sought&quot;.</p>
<b>Position in India</b>
<p>The first special laW which attempted to define terrorism was the Terrorist and Disruptive Activities (Prevention) Act, 1987, which was followed by the Prevention of Terrorism Act, 2002 (POTA). With the repeal of the latter in 2004, the Unlawful Activities (Prevention) Act, 1967 was amended to include the definition of a &#39;terrorist act&#39;.</p>
<p>The Unlawful Activities (Prevention) Act, 1967, which was amended in 2004, defines a &#39;terrorist act thus&mdash;&quot;whosoever, with intent to threaten the unity; integrity; security or sovereignty of India or to strike terror in the people or any section of the people in India or in any foreign country, does any act by using bombs, dynamite or other explosive substances or inflammable substances or firearms or other lethal weapons or poisons or noxious gases or other chemicals or by any other substances, (whether biological or otherwise) of a hazardus nature, in such a manner as to cause, or likely to cause, death of or injuries to any person or people or loss of or damage to, or destruction of, property or disruption of any supplies or services essential to the life of the community in . India or in any foreign country or causes damage or destrudion of any property or equipment used or intended to he used for the defence of India or in connection with any other purposes of the Government of India, any State Government or any of their agencies, or detains any person and threatens to kill or injure such person in order to compel the Government in India or the Government of a foreign country or any other person to do or abstain from doing any act, commits a terrorist act&quot;.</p>
<b>Types of Terrorism</b>
<p>Terrorists are motivated by different goals and objective. &nbsp;We can categorise India&#39;s Internal Security in the Depending on the &#39;objectives of the group/groups,nature of terrorism also differs. The major types of terrorist operations commonly identified globally include:</p>
<b>Ethno-National Terrorism</b>
<p>Ethinic terroirsm can be defined as deliberate violence by a subnational ethnic group to advance its cause.such violence usually focuses either on the creation of a separate state or on the elevation of the status of one ethnic group over others.Tamil Nationalist groups in Sri Lanka and insurgent groups in northeast India are examples of this</p>
<b>Religious Terrorism</b>
<p>Present-day terrorist activities around the world are motivated largely by religious imperatives. The practitioners of terrorism, motivated either in whole or in part by a religious imperative, consider violence as a divine duty or a sacramental act.</p>
<b>Ideology-oriented Terrorism</b>
<p>Any ideology can be used to support the use of violence and terrorism. Ideology oriented terrorism is generally classified into two: Left wing terrorism and Right wing terrorism.</p>
<b>State-sponsored Terrorism</b>
<p>State-sponsored terrorism on a massive scale reappeared in international politics in the 1960s and 1970. In the recent times, some countries have embraced terrorism as a deliberate instrument of foreign policy. One distinction of state sponsored terrorism from other forms of terrorist activity is that it is initiated to obtain certain clearly defined foreign policy objectives, rather than grabbing media attention or targeting the potential audience.</p>
<b>Narco-terrorism</b>
<p>Though initially used in the context of drug trafficking related terrorism in South America, the term has come to be associated with terrorist groups and activities, around the world and more no in the Central and South-East Asia. Narco-terrorism has been defined as &#39;the attempt by narcotics traffickers to influence the policies of the Government by systematic threat or use by violence&#39;.</p>
</div>
  <div class="menu-content Internal">
<h3>Security Challenges and Management of security in Border Areas</h3><hr>
<p>Internal Security Challenges in India, are no more local in nature and has inter-state and nationwide ramifications. `Internal security&#39; is an important aspect of National Security. The National Security has three main objectives:</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Safeguarding territorial integrity,</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Preserving sovereignty, and</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Maintaining domestic peace.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>India&#39;s Internal Security Problems</p>
<b>India's Internal Security Problems</b>
<p>We can categorise India&#39;s Internal Security in the following categories:</p>
<p><b>Problem of National Building:</b>India&#39;s Multiethnic,multicultural fabric has been adversely affected by the problem of unequal development, caste tensions and ethnic violence. This has raised. the questions on the process of Nation Building, with the development of equal society, as enshrined in the Constitution.</p>
<b>Ethnic Conflicts/Fundamentalism</b>
<p>Under this category, we can include the following problems:</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Jamtnu &amp; Kashmir Problem</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Insurgency in North-East</p>
<b>Problems of Ideological Differences</b>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Left Wing Extremism</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Terrorism</p>
<b>Security threats due to Globalization</b>
<p>In the realm of Internal Security, globalisation has led to new threat, risks and a blurring distinction between external and internal threats. The principal elements that compound regional destabilisation in South Asia include:</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>Rising challenges to state power, the progressiw weakening of government, and widening spheres of non-rvernance and disorder.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>The restructuring of the global geopolitical architecture.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>The release of a variety of violent nationalist and sub&not;qationalist movements across Asia and Eastern Europe.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>An increasing polarisation between &quot;globalising powers&quot; and those that are, or perceive themselves as being marginalised by globalisation--stresses that are further aggravated by the inequalities and inequities that characterise contemporary globalisation processes.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>The resurgence of radical political ideologies of mass mobilisation, including religious&mdash;particularly but not exclusively Islamist&mdash;extremism, ethnic fimdamentalism, and Maoism, across wide regions.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>The emergence of &quot;new ways of warfare&mdash;specifically terrorism and sub-conventional wars&mdash;and their adoption by both non-state actors and a number of state entities to secure political goals.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>The proliferation of technological force multipliers and sophisticated weapons and explosives among non-state groups, facilitated by irresponsibl, predatory, and rogue states.</p>
<b>Security Issues in Border Areas</b>
<p>India has 15,106.7 km of land border and a coastline of 7,516.6 km, including island territories. Securing the country&#39;s borders against interests hostile to the country and putting in place systems that arc able to interdict such elements while facilitating legitimate trade and comm.&#39;ce are among the principal objectives of border management. The Department of Border Management was created in the Ministry of Home Affairs in January, 2004, to pay focused attention to the issues relating to management of international land and coastal border, strengthening of border policing and guarding, creation of infrastructure like roads, fencing &amp; flood lighting along borders and implementation of Border Area Development Programme (BADP).</p>
<p>As a part of the strategy to secure the borders as also Increase infrastructure in the border areas of the country, several initiatives have been taken by the Department of Border Management. These inclitde construction of fencing, floodlighting and roads, along Indo-Pakistan and Indo&not;Bangladesh borders; development of Integrated Cheek Posts (ICPs) at various locations on the international borders of the country; and construction of roads, along Indo-China and Indo-Nepal border,</p>
<b>Indo-Bangladesh Border.</b>
<p>The Indian side of the Indo-Bangladesh border passes &bull; through West Bengal (2,216.7 km), Assam (265 km), Meghalaya (445 km), Tripura (856 km) and Mizoram (318 km). The entire stretch consists of plain, riverine belts, hills and jungle, The area is heavily populated and is cultivated right upto the border. The Indo-Bangladesh border is marked by a high degree of porosity and checking illegal cross border activities lins been a major challenge. The main problem is of illegal migration from Bangladesh into India.</p>
<p>In order to prevent illegal immigration and other anti-national activities from across the border, the Government of India had sanctioned the construction of border roads and fencing in two phases. The total length of Indo&not;Bangladesh border sanctioned to be fenced is 3,352.52 km; out of this, 2,762.11 km of fencing has been completed (up to 31.12.2012). There have been some problems in construction of fencing in certain stretches on this border due to riverine/ low lying areas, population residing within 150 yards of the border, pending land acquisition cases and protests by border population, which has led to delay in completion of the project. .</p>
<p>A three-tier mechanism was set up between India bilateral institutional and Bangladesh in 1594 to resolve security and border management issues. The first level talks is at Director General (DG), Border Security Force (BSF) and DG, Border Guards; Bangladesh (BGB) level, the second is a Joint Working Group (JWG) at the level of Joint Secretaries of both the countries and the third is at Home Secretary level. First Home Minister Level talks were held at Dhaka in July 2011, during which Coordinated Border Management Plan (CBMP) was signed between the two countries for proper management of international border... In the fourth Home Ministers level talks held in January 2013 between India and Bangladesh at Dhaka, Extradition Treaty and Revised Travel Arrangements between the two countries were signed.</p>
<b>Indo-Pakistan Border</b>
<p>India shares 5,323 km [including Line of Control (LoC) in Jammu &amp; Kashmir (J&amp;K) sector] of its land border with Pakistan. This border runs along &#39;the States of Gujarat, Rajasthan, Punjab and J&amp;K. The Indo-Pakistan border has varied terrain and distinct geographical feature, This border is characterised by attempts of infiltration by the terrorists and smuggling of arms, ammunition and contraband, the LoC being the most active and live portion of the border.</p>
<p>Border fencing and floodlighting work along the entire Indo-Pakistan border had been completed except for some work, mainly in Gujarat sector of Indo-Pak border. There has been time overrun in completing the projects due to unforeseen circumstances and natural calamities including the devastating earthquake in 2001, unprecedented rains and held up in Gujarat Sector due to waterlogging ill the area. Presently, 656 Border Outposts (BOPS) already held by BSF along the IPB. A proposal for construction of 96 Composite BOPs (out of 656 BOPs) along the Indo&not;Pakistan border has been sanctioned. The construction of these Composite BOPs will provide the entire necessary infrastructure for the accommodation, logistic support and the combat functions of the BSF troops deployed on the Indo-Pakistan borders.</p>
<b>India-China Border</b>
<p>India&#39;s long border with China is divided into two sectors-Eastern sector mainly concerned with the state of Arunachal Pradesh and Western sector concerned with the states of Jammu and Kashmir and Himachal Pradesh. Close on the heels of Doldam standoff, the defence ministry has decided to significantly enhance infrastructure along the nearly 4,000 km-long Sino-India border including around the areas of dispute. According to several military and intelligence sources, India is at least a decade away from matching the infrastructure on the Chinese side, where most posts have direct road access. Across Tibet, Massive infrastructure projects have come up providing easy access to the border for the Chinese military.</p>
<p>The 17 Mountain Strike Corps, whiCh is India&#39;s first dedicated strike corps for mountain operations, was originally supposed to have three full divisions. Now it has been scaled down to two, of which just one division has been raised until now. With two division, the 17 Corps would have&bull; about 60,000 men, against the original plan of Over 90,000.</p>
<p>According to latest statistics, only 24 of the 73 roads identified along the Line of Actual Control with China have been completed until now Of the total, 61 roads with a length of 3409.27 km, are with the Border Roads Organisation while other 12 were entrusted to agencies At the Central Public Works Department, NBCC and State Public Works Departments.</p>
<p>India is also constructing some critical bridgei in the northeast which will cut down time for troop movement. The recently inaugurated 2.2-km Dhola-Sadiya bridge will cut down the distance between Assam and Arunachal Pradesh by 165 km.</p>
<b>Indo-Nepal Border</b>
<p>India and Nepal share an open border of 1,751 km. The main challenges are to check misuse of open border by the terrorists and criminals for illegal and anti-national activities and to improve the security along this border. 51&nbsp;</p>
<p>border to far. A Secretary level bilateral mechanism in the shape of an India-Bhutan Group on Border Management and Security is in existence. This mechanism has proved to be very useful in assessing threat perception of the two countries from groups attempting to she advantage of this open border and in discussing ways of improving the security environment in border areas.</p>
<p>Indo-Myanmar Border</p>
<p>India shares a 1,640 km long border with Myanmar. Arunachal Pradesh, Nagaland, Manipur and Mizoram are the States which share the border with Myanmar. Assam Rifles has been deployed for counterinsurgency and border guarding role on this border.</p>
<p>The Union Home Minikry has constituted another committee to examine methods to curb the misuse of free movement along the Myanmar border, indicating a significant shift in India&#39;s policy towards Myanmar, a friendly country, with which it shares unfenced borders and unhindered movement of people across the border. Free movement regime is being misused by militants and trans-border criminals who smuggle weapons, contraband goods and fake Indian currency notes. Taking advantage of the free-movement regime, occasionally they enter India, commit crimes and escape to their relatively safer hideouts.</p>
<b> What is Free Movement Regime (FMR)?</b>
<p>The tribal communities, particularly Nagas,Singhpos. Kukis, Mizos etc. claim that the boundary between</p>
<p>and Myanmar is inconsistent with the traditional limits of the region they inhabited and they still continue to have trans-border linkages with their kiths and kins.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>The FMR is thus an arrangement to alleviate insecurity of tribals living along India and Myanmar border.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>It permits tribes residing along the border to travel 16 km across the boundary without visa restriction.</p>
<p>⦁<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>While India allows Myanmarese nationals to any 72 hours without visa, Myanmar allows Jay of &nbsp;only 24 hours. To resolve this parallel discusikila between the two governments have been going on.</p>
<b>Rohingyas: A national security threat</b>
<p>The Centre recently filed an affidavit in the Supreme Court on the issue of deportation of Rohingya Muslims from India and told the apex court that the presence of Rohingyas in the country posed national security threats while pointing out that intelligence inputs suggested links of some Rohingya immigrants with Pak-based terror groups. It also told the SC that the decision whether or not to allow refugees to settle in the country was best left to the Executive. The Supreme Court had told the government to file the affidavit after a plea was put before it against the deportation of the illegal immigrants to Myanmar.</p>
<p>The plea against deportations was based on grounds of violation of conventions of international human rights. The Home Ministry in July expressed concerns that the Rohingya immigrants pose a challenge to the country&#39;s security and that they may be recruited by terror outfits. The Central Ministry had then directed state governments that they must set up district-level task forces to identify and deport illegal immigrants.</p>
<p>The Centre informed Parliament on August 9 citing data available at the time that there were at least 14,000 Rohingya immigrants registered with UNHCR living in India. The immigrants are spread over Jammu, Hyderabad, Haryana, Uttar Pradesh, Delhi-NCR and Rajasthan. Rohingya immigrants hail from Myanmar&#39;s Rakhine state and according to the prevailing constitutional and political situation in the country, are considered a stateless people.</p>
<b>Port Security</b>
<p>The security of 12 major ports of the country is being looked after by the CISF. These major ports are also subject to periodical security audits by the Intelligence Bureau. However, no security norms for the 187 minor ports of the country have so far been evolved. The Ministry of Shipping has constituted a Working Group in July, 2009, for standardisation of ports security. The Working Group was mandated to draft the broad guidelines and prescribe uniform security standards for the ports. The Working Group has submitted its report, which is under consideration in the Ministry of Shipping.</p>


</div>
  <div class="menu-content Building"><p>Problem of National Building:India&#39;s Multiethnic,</p>
<p>multicultural fabric has been adversely affected by the problem of unequal development, caste tensions and ethnic violence. This has raised. the questions on the process of Nation Building, with the development of equal society, as enshrined in the Constitution.</p>

</div>
<div class="menu-content Ethinic"><p>Ethnic Conflicts/Fundamentalism</p>
<p>Under this category, we can include the tbllowing problems:</p>
<p><br></p>
<p>&bull; Jamtnu &amp; Kashmir Problem</p>
<p>&bull; Insurgency in North-East</p>
</div>
  <div class="menu-content Idiological"><p>Problems of Ideological Differences</p>
<p>&bull; Left Wing Extremism</p>
<p>&bull; Terrorism</p>
</div>
  <div class="menu-content Globalization"><p>Security threats due to Globalization</p>
<p>&bull; In the realm of Internal Security, globalisation has led to new threat, risks and a blurring distinction between external and internal threats. The principal elements that compound regional destabilisation in South Asia include:</p>
<p>&bull; Rising challenges to state power, the progressiw weakening of government, and widening spheres of non-rvernance and disorder.</p>
<p>&bull; The restructuring of the global geopolitical architecture.</p>
<p>&bull; The release of a variety of violent nationalist and sub&not;qationalist movements across Asia and Eastern Europe.</p>
<p>&bull; An increasing polarisation between &quot;globalising powers&quot; and those that are, or perceive themselves as being marginalised by globalisation--stresses that are further aggravated by the inequalities and inequities that characterise contemporary globalisation processes.</p>
<p>&bull; The resurgence of radical political ideologies of mass mobilisation, including religious&mdash;particularly but not exclusively Islamist&mdash;extremism, ethnic fimdamentalism, and Maoism, across wide regions.</p>
<p>&bull; The emergence of &quot;new ways of warfare&mdash;specifically terrorism and sub-conventional wars&mdash;and their adoption by both non-state actors aitd a number of state entities to secure political goals.</p>
<p>&bull; The proliferation of technological force multipliers and sophisticated weapons and explosives among non-state groups, facilitated by irresponsibl, predatory, and rogue states.</p>
</div>
  <div class="menu-content Border"><p>Security Issues in Border Areas</p>
<p>India has 15,106.7 km of land border and a coastline of 7,516.6 km, including island territories. Securing the country&#39;s borders against interests hostile to the country and putting in place systems that arc able to interdict such elements while facilitating legitimate trade and comm.&#39;ce are among the principal objectives of border management. The Department of Border Management was created in the Ministry of Home Affairs in January, 2004, to pay focused attention to the issues relating to management of international land and coastal border, strengthening of border policing and guarding, creation of infrastructure like roads, fencing &amp; flood lighting along borders and implementation of Border Area Development Programme (BADP).</p>
<p>As a part of the strategy to secure the borders as also Increase infrastructure in the border areas of the country, several initiatives have been taken by the Department of</p>
<p>&nbsp;</p>
<p>Border Management. These inclitde construction of fencing, floodlighting and roads, along Indo-Pakistan and Indo&not;Bangladesh borders; development of Integrated Cheek Posts (ICPs) at various locations on the international borders of the country; and construction of roads, along Indo-China and Indo-Nepal border,</p>
</div>
  <div class="menu-content Bangladesh"><p>Indo-Bangladesh Border.</p>
<p>The Indian side of the Indo-Bangladesh border passes &bull; through West Bengal (2,216.7 km), Assam (265 km), Meghalaya (445 km), Tripura (856 km) and Mizoram (318 km). The entire stretch consists of plain, riverine belts, hills and jungle, The area is heavily populated and is cultivated right upto the border. The Indo-Bangladesh border is marked by a high degree of porosity and checking illegal cross border activities lins been a major challenge. The main problem is of illegal migration from Bangladesh into India.</p>
<p>In order to prevent illegal immigration and other anti-national activities from across the border, the Government of India had sanctioned the construction of border roads and fencing in two phases. The total length of Indo&not;Bangladesh border sanctioned to be fenced is 3,352.52 km; out of this, 2,762.11 km of fencing has been completed (up to 31.12.2012). There have been some problems in construction of fencing in certain stretches on this border due to riverine/ low lying areas, population residing within 150 yards of the border, pending land acquisition cases and protests by border population, which has led to delay in completion of the project. .</p>
<p>A three-tier mechanism was set up between India bilateral institutional and Bangladesh in 1594 to resolve security and border management issues. The first level talks is at Director General (DG), Border Security Force (BSF) and DG, Border Guards; Bangladesh (BGB) level, the second is a Joint Working Group (JWG) at the level of Joint Secretaries of both the countries and the third is at Home Secretary level. First Home Minister Level talks were held at Dhaka in July 2011, during which Coordinated Border Management Plan (CBMP) was signed between the two countries for proper management of international border... In the fourth Home Ministers level talks held in January 2013 between India and Bangladesh at Dhaka, Extradition Treaty and Revised Travel Arrangements between the two countries were signed.</p>
</div>
  <div class="menu-content Pakistan"><p>Indo-Pakistan Border</p>
<p>India shares 5,323 km [including Line of Control (LoC) in Jammu &amp; Kashmir (J&amp;K) sector] of its land border with Pakistan. This border runs along &#39;the States of Gujarat, Rajasthan, Punjab and J&amp;K. The Indo-Pakistan border has varied terrain and distinct geographical feature, This border is characterised by attempts of infiltration by the terrorists and smuggling of arms, ammunition and contraband, the LoC being the most active and live portion of the border.</p>
<p><br></p>
<p>Border fencing and floodlighting work along the entire Indo-Pakistan border had been completed except for some work, mainly in Gujarat sector of Indo-Pak border. There has been time overrun in completing the projects due to unforeseen circumstances and natural calamities including the devastating earthquake in 2001, unprecedented rains and held up in Gujarat Sector due to waterlogging ill the area. Presently, 656 Border Outposts (BOPS) already held by BSF along the IPB. A proposal for construction of 96 Composite BOPs (out of 656 BOPs) along the Indo&not;Pakistan border has been sanctioned. The construction of these Composite BOPs will provide the entire necessary infrastructure for the accommodation, logistic support and the combat functions of the BSF troops deployed on the Indo-Pakistan borders.</p>
</div>
  <div class="menu-content China"><p>India-China Border</p>
<p>India&#39;s long border with China is divided into two sectors-Eastern sector mainly concerned with the state of Arunachal Pradesh and Western sector concerned with the states of Jammu and Kashmir and Himachal Pradesh. Close on the heels of Doldam standoff, the defence ministry has decided to significantly enhance infrastructure along the nearly 4,000 km-long Sino-India border including around the areas of dispute. According to several military and intelligence sources, India is at least a decade away from matching the infrastructure on the Chinese side, where most posts have direct road access. Across Tibet, Massive infrastructure projects have come up providing easy access to the border for the Chinese military.</p>
<p>The 17 Mountain Strike Corps, whiCh is India&#39;s first dedicated strike corps for mountain operations, was originally supposed to have three full divisions. Now it has been scaled down to two, of which just one division has been raised until now. With two division, the 17 Corps would have&bull; about 60,000 men, against the original plan of Over 90,000.</p>
<p>According to latest statistics, only 24 of the 73 roads identified along the Line of Actual Control with China have been completed until now Of the total, 61 roads with a length of 3409.27 km, are with the Border Roads Organisation while other 12 were entrusted to agencies At the Central Public Works Department, NBCC and State Public Works Departments.</p>
<p>India is also constructing some critical bridgei in the northeast which will cut down time for troop movement. The recently inaugurated 2.2-km Dhola-Sadiya bridge will cut down the distance between Assam and Arunachal Pradesh by 165 km.</p>
</div>
  <div class="menu-content Nepal"><p>IndO-Nepal Border</p>
<p>India and Nepal share an open border of 1,751 km. The main challenges are to check misuse of open border by the terrorists and criminals for illegal and anti-national activities and to improve the security along this border. 51&nbsp;</p></div>
  <div class="menu-content Bhutan"><p>border to far. A Secretary level bilateral mechanism in the shape of an India-Bhutan Group on Border Management and Security is in existence. This mechanism has proved to be very useful in assessing threat perception of the two countries from groups attempting to she advantage of this open border and in discussing ways of improving the security environment in border areas.</p>
</div>
  <div class="menu-content Myanmar"><p>Indo-Myanmar Border</p>
<p>India shares a 1,640 km long border with Myanmar. Arunachal Pradesh, Nagaland, Manipur and Mizoram are the States which share the border with Myanmar. Assam Rifles has been deployed for counterinsurgency and border guarding role on this border.</p>
<p>The Union Home Minikry has constituted another committee to examine methods to curb the misuse of free movement along the Myanmar border, indicating a significant shift in India&#39;s policy towards Myanmar, a friendly country, with which it shares unfenced borders and unhindered movement of people across the border. Free movement regime is being misused by militants and trans-border criminals who smuggle weapons, contraband goods and fake Indian currency notes. Taking advantage of the free-movement regime, occasionally they enter India, commit crimes and escape to theirrelatively safbr hideouts. </div>
  <div class="menu-content Rohingyas"><p>Rohingyas: A national security threat</p>
<p>The Centre recently filed an affidavit in the Supreme Court on the issue of deportation of Rohingya Muslims from India and told the apex court that the presence of Rohingyas in the country posed national security threats while pointing out that intelligence inputs suggested links of some Rohingya immigrants with Pak-based terror groups. It also told the SC that the decision whether or not to allow refugees to settle in the country was best left to the Executive. The Supreme Court had told the government to file the affidavit after a plea was put before it against the deportation of the illegal immigrants to Myanmar.</p>
<p>The plea against deportations was based on grounds of violation of conventions of international human rights. The Home Ministry in July expressed concerns that the Rohingya immigrants pose a challenge to the country&#39;s security and that they may be recruited by terror outfits. The Central Ministry had then directed state governments that they must set up district-level task forces to identify and deport illegal immigrants.</p>
<p>The Centre informed Parliament on August 9 citing data available at the time that there were at least 14,000 Rohingya immigrants registered with UNHCR living in India. The immigrants are spread over Jammu, Hyderabad, Haryana, Uttar Pradesh, Delhi-NCR and Rajasthan. Rohingya immigrants hail from Myanmar&#39;s Rakhine state and according to the prevailing constitutional and political situation in the country, are considered a stateless people.</p>


</div>
  <div class="menu-content Port"><p>Port Security</p>
<p>The security of 12 major ports of the country is being looked after by the CISF. These major ports are also subject to periodical security audits by the Intelligence Bureau. However, no security norms for the 187 minor ports of the country have so far been evolved. The Ministry of Shipping has constituted a Working Group in July, 2009, for standardisation of ports security. The Working Group was mandated to draft the broad guidelines and prescribe uniform security standards for the ports. The Working Group has submitted its report, which is under consideration in the Ministry of Shipping.</p></div>
   -->
  

<!--mobile view content-->
<div class="container d-xl-none d-lg-none d-md-none d-sm-inline d-inline ">
      <div class="content-box scroll">
                <div class="font">
                  <h1>MUST READ...</h1>
                  
                    <div class="accordion mobile-box" id="accordionExample">
                      <?php
                      $query="SELECT * FROM dynamic";
                      $mobile_view=mysqli_query($conn,$query);
     if (mysqli_num_rows($mobile_view) > 0) 
     {
                                        

        while($row1 = mysqli_fetch_assoc($mobile_view)) {
                                            ?>                          
                                        
                                    
             
                            
               
                      <!-- loop start -->
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <a class="collapsed" href="javascript:;" data-toggle="collapse" data-target="#<?php echo $row1["topic_id"];?>" aria-expanded="true" aria-controls="collapseOne">
                      <?php echo $row1["topic"];?>
                    </a>
                  </div>
                  <div id="<?php echo $row1["topic_id"];?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" style="text-align: justify;">
                      <?php echo $row1["message"];?>
                    </div>
                  </div>
                </div>
                <?php }
                                } 
                            
                                    ?>
                
               <!-- loop end   -->
            </div>
 				 			
        
    </div>
</div>
</div>
        
<!--mobile view content end-->
</p>
</div>
  


<?php include 'testimonial.php'; ?>
<?php include 'footer.php'; ?>
			<!-- LOADING JS -->


  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script type="text/javascript">
	var $content = $('.menu-content');

function showContent(type) {
  $content.hide().filter('.' + type).show();
}

$('.menu').on('click', '.menu-btn', function(e) {
  showContent(e.currentTarget.hash.slice(1));
  e.preventDefault();
}); 

// show 'about' content only on page load (if you want)
showContent('<?php echo $num ?>');
</script>




</body>
</html>
