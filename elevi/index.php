

<!doctype html>
<head></head>
<title>LIIS::Elevi formular::</title>
<html>
 <body bgcolor="#FFFFDA">
  <hr>
  <center>
   <img src="poze/sigla.png" weight="70" height="70">
   <hr>
   <h1><font color="#FF0000">Chestionarul pentru elevi (nivelurile gimnazial, liceal)</font></h1>
   <h2><font color="#FF0000">Răspunsurile marcate cu un cerculeţ permit selectarea unei singure variante, răspunsurile marcate cu un pătrăţel permit bifarea mai multor variante.<br><br>Powered by David Burcovschi </font></h2>
  </center>
  <hr>
  <br>
  <table border="0" align="center" bgcolor="#FFFFF2">
  <tr>
  <td>
  <form action="prelucrare.php" method="POST">
  <b>
  <font size="4">
  <!---Numar statie de lucru: <select name="nume">
  <option value="statie1">Statie 1</option>
  <option value="statie2">Statie 2</option>
  <option value="statie3">Statie 3</option>
  <option value="statie4">Statie 4</option>
  <option value="statie5">Statie 5</option>
  <option value="statie6">Statie 6</option>
  <option value="statie7">Statie 7</option>
  <option value="statie8">Statie 8</option>
  <option value="statie9">Statie 9</option>
  <option value="statie10">Statie 10</option>
  <option value="statie11">Statie 11</option>
  <option value="statie12">Statie 12</option>
  <option value="statie13">Statie 13</option>
  <option value="statie14">Statie 14</option>
  <option value="statie15">Statie 15</option>
  <option value="statie16">Statie 16</option>
  <option value="statie17">Statie 17</option>
  <option value="statie18">Statie 19</option>
  <option value="statie20">Statie 20</option>
  <option value="statie21">Statie 21</option>
  <option value="statie22">Statie 22</option>
  <option value="statie23">Statie 23</option>
  <option value="statie24">Statie 24</option>
  <option value="statie25">Statie 25</option>
  <option value="statie26">Statie 26</option>
  <option value="statie27">Statie 27</option>
  <option value="statie28">Statie 28</option>
  <option value="statie29">Statie 29</option>
  <option value="statie30">Statie 30</option>
  <option value="statie31">Statie 31</option>
  </select><br>
  --->
  Clasa:
  <select name="clasa">
  <option value="5A">Clasa 5 A</option>
  <option value="5B">Clasa 5 B</option>
  <option value="5C">Clasa 5 C</option>
  <option value="6A">Clasa 6 A</option>
  <option value="6B">Clasa 6 B</option>
  <option value="6C">Clasa 6 C</option>
  <option value="7A">Clasa 7 A</option>
  <option value="7B">Clasa 7 B</option>
  <option value="7C">Clasa 7 C</option>
  <option value="8A">Clasa 8 A</option>
  <option value="8B">Clasa 8 B</option>
  <option value="8C">Clasa 8 C</option>
  <option value="9A">Clasa 9 A</option>
  <option value="9B">Clasa 9 B</option>
  <option value="9C">Clasa 9 C</option>
  <option value="9D">Clasa 9 D</option>
  <option value="9E">Clasa 9 E</option>
  <option value="9F">Clasa 9 F</option>
  <option value="10A">Clasa 10 A</option>
  <option value="10B">Clasa 10 B</option>
  <option value="10C">Clasa 10 C</option>
  <option value="10D">Clasa 10 D</option>
  <option value="10E">Clasa 10 E</option>
  <option value="10F">Clasa 10 F</option>
  <option value="11A">Clasa 11 A</option>
  <option value="11B">Clasa 11 B</option>
  <option value="11C">Clasa 11 C</option>
  <option value="11D">Clasa 11 D</option>
  <option value="11E">Clasa 11 E</option>
  <option value="12A">Clasa 12 A</option>
  <option value="12B">Clasa 12 B</option>
  <option value="12C">Clasa 12 C</option>
  <option value="12D">Clasa 12 D</option>
  <option value="12E">Clasa 12 E</option>
  <option value="12F">Clasa 12 F</option>
  </select>
  <hr>
  <br>
  <br>
     1. Cum ai ajuns la această şcoală?<br><br>
    <input type="radio" name="1" value="a" > Este singura din localitate - cea mai aproape de domiciliu<br>
    <input type="radio" name="1" value="b" > A fost decizia părinţilor<br>
    <input type="radio" name="1" value="c" > Am optat pentru această şcoală în urma informării prealabile<br>
	<input type="radio" name="1" value=" " checked><br>
    <br><br><br>
    
    
    
    2. Dacă ai răspuns la întrebarea anterioară „am optat pentru această şcoală în urma informării prealabile”, cum ai aflat de ea (bifează toate situaţiile   aplicabile)?<br><br>
   <input type="checkbox" name="2[]" value="a"> De la alte persoane – elevi, absolvenţi, vecini, rude<br>
   <input type="checkbox" name="2[]" value="b">Din ziare<br>
   <input type="checkbox" name="2[]" value="c">De la Radio sau TV<br>
   <input type="checkbox" name="2[]" value="d">De pe Internet<br>
   <input type="checkbox" name="2[]" value="f" >Nu am raspuns<br>
   <input type="checkbox" name="2[]" value=" " checked><br>
   <br><br><br>

   
    3. Faci parte din Comitetul consultativ al elevilor pe clasă ?<br><br>					
   <input type="radio" name="3" value="a" > Da<br> 					
   <input type="radio" name="3" value="b"> Nu<br>
   <input type="radio" name="3" value=" " checked><br>
   <br><br><br>
   
   
    4. Dacă da, cât de des se întruneşte Comitetul consultativ al elevilor pe clasă?<br><br> 							
   <input type="radio" name="4" value="a" > Regulat, lunar sau mai des<br>						
   <input type="radio" name="4" value="b"> Regulat la 2-3 luni<br>		
   <input type="radio" name="4" value="c"> Regulat, o dată sau de două ori pe semestru<br> 							
   <input type="radio" name="4" value="d"> De câte ori este nevoie, fără o periodicitate anume<br>							
   <input type="radio" name="4" value="e"> Nu se întruneşte<br>					
   <input type="radio" name="4" value="f"> Nu ştiu<br>
   <input type="radio" name="4" value=" " checked><br>
   <br><br><br>

   
    5. Faci parte din Comitetul consultativ al elevilor pe şcoală ?<br><br>					
   <input type="radio" name="5" value="a" > Da<br>
   <input type="radio" name="5" value="b"> Nu<br>
   <input type="radio" name="5" value=" " checked><br>   
   <br><br><br>
  
  
    6. Dacă da, cât de des se întruneşte Comitetul consultativ al elevilor pe şcoală?<br><br> 					
   <input type="radio" name="6" value="a" > Regulat, lunar sau mai des<br>
   <input type="radio" name="6" value="b"> Regulat la 2-3 luni<br>		
   <input type="radio" name="6" value="c"> Regulat, o dată sau de două ori pe semestru<br>					
   <input type="radio" name="6" value="d"> De câte ori este nevoie, fără o periodicitate anume<br>				
   <input type="radio" name="6" value="e"> Nu se întruneşte<br>
   <input type="radio" name="6" value="f"> Nu ştiu<br>
   <input type="radio" name="6" value=" " checked><br>
   <br><br><br>


    7. Atunci când constaţi un aspect negativ, pe care îl comunici directorului sau unui cadru didactic<br>
	  (sau când soliciţi ceva), care sunt, de regulă, efectele comunicării cu unitatea şcolară?	<br><br>								
   <input type="radio" name="7" value="a" > Aproape întotdeauna am putut constata o îmbunătăţire a aspectului semnalat<br>								
   <input type="radio" name="7" value="b"> De regulă am putut constata o îmbunătăţire a aspectului semnalat<br>							
   <input type="radio" name="7" value="c"> Câteodată am  putut constata o îmbunătăţire a aspectului semnalat<br>								
   <input type="radio" name="7" value="d"> Foarte rar sau niciodată nu am putut constata o îmbunătăţire a aspectului semnalat<br>
   <input type="radio" name="7" value=" " checked><br>
   <br><br><br>   
   

    8. Ai făcut, în ultimul an şcolar, propuneri de îmbunătăţire a activităţii din şcoală?<br><br>					
   <input type="radio" name="8" value="a"> Da <br>				
   <input type="radio" name="8" value="b"> Nu <br>
   <input type="radio" name="8" value=" " checked><br>
   <br><br><br>
    
    
    9. Dacă ai răspuns „da” la întrebarea anterioară, ce s-a întâmplat cu cea mai recentă propunere făcută?<br><br>												
   <input type="radio" name="9" value="a"> A fost preluată şi aplicată direct<br>										
   <input type="radio" name="9" value="b"> Ο Am discutat despre propunere cu alte persoane (dirgintele, directorul, alte cadre didactice etc.) şi, apoi, a fost aplicată, total sau parţial<br>											
   <input type="radio" name="9" value="c"> Am discutat despre propunere cu alte persoane, dar propunerea nu a fost aplicată<br>										
   <input type="radio" name="9" value="d"> Nu s-a întâmplat nimic<br>
   <input type="radio" name="9" value="f" > Am raspuns cu NU mai sus<br> 
   <input type="radio" name="9" value=" " checked><br>   
   <br><br><br>
   
   
    10. Enumeră cel puţin trei evenimente (plăcute sau neplăcute) care s-au întâmplat în şcoală în ultima lună.<br><br>										
   1)<input type="text" name="10_1" value=""><br>
   2)<input type="text" name="10_2" value=""><br>
   3)<input type="text" name="10_3" value=""><br>
   <br><br><br>
   
   
    11. Enumeră cel puţin 5 activităţi derulate în şcoală în ultimele trei luni (indiferent dacă ai participat sau nu)<br><br>										
   1)<input type="text" name="11_1" value=""><br>
   2)<input type="text" name="11_2" value=""><br>
   3)<input type="text" name="11_3" value=""><br>
   4)<input type="text" name="11_4" value=""><br>
   4)<input type="text" name="11_5" value=""><br>
   <br><br><br>
   
   
    12. Enumeră cel puţin 2 activităţi derulate în şcoală în ultimele trei luni, la care ai participat, care s-au referit<br>
    	la comportamente dăunătoare sănătăţii (fumat, consum de alcool, mâncare nesănătoasă etc.) <br><br>																
   1)<input type="text" name="12_1" value=""><br>
   2)<input type="text" name="12_2" value=""><br>
   <br><br><br>
   
   
    13. La câte exerciţii privind comportarea în caz de cutremur, incendiu etc., ai participat în ultimele 3 luni?<br><br>									
   <input type="radio" name="13" value="a" > 2 sau mai multe<br>									
   <input type="radio" name="13" value="b"> 1<br>					
   <input type="radio" name="13" value="c"> Niciunul<br>							
   <input type="radio" name="13" value="d"> Nu ştiu<br>
   <input type="radio" name="13" value=" " checked><br>
   <br><br><br>   
   
   
    14. Cum comunici cu dirigintele, când este vorba de probleme personale?<br>							
       (bifează toate modalităţile pe care le utilizezi):<br><br>					
   <input type="checkbox" name="14[]" value="a" > Discuţii informale<br>						
   <input type="checkbox" name="14[]" value="b"> Consultaţii individuale<br>						
   <input type="checkbox" name="14[]" value="c"> Telefon (inclusiv SMS)<br>						
   <input type="checkbox" name="14[]" value="d"> Email<br>
   <input type="checkbox" name="14[]" value=" " checked><br>
   <br><br><br>


    15. Cât de des comunici (utilizând oricare dintre modalităţile de comunicare indicate mai sus) cu dirigintele, pentru probleme personale?<br><br>													
   <input type="radio" name="15" value="a" > Zilnic<br>												
   <input type="radio" name="15" value="b"> Săptămânal<br>													
   <input type="radio" name="15" value="c"> Lunar<br>												
   <input type="radio" name="15" value="d"> De 1-3 ori pe semestru<br>													
   <input type="radio" name="15" value="e"> O dată pe an sau mai rar<br>
   <input type="radio" name="15" value=" " checked><br>
   <br><br><br>


    16. Cum comunici cu directorul şcolii sau cu alt angajat al şcolii, când este vorba de probleme personale?<br>										
        (bifează toate modalităţile pe care le utilizezi)<br><br>
   <input type="checkbox" name="16[]" value="a" > Discuţii informale<br>										
   <input type="checkbox" name="16[]" value="b"> Consultaţii individuale<br>									
   <input type="checkbox" name="16[]" value="c"> Telefon (inclusiv SMS)<br>									
   <input type="checkbox" name="16[]" value="d"> Email<br>
   <input type="checkbox" name="16[]" value=" " checked><br>
   <br><br><br>


    17. Cât de des comunici (utilizând oricare dintre modalităţile de comunicare indicate mai sus) cu directorul
    <br>şcolii sau cu alt angajat al şcolii, pentru probleme personale?<br><br>																
   <input type="radio" name="17" value="a" > Zilnic<br>																
   <input type="radio" name="17" value="b"> Săptămânal<br>																
   <input type="radio" name="17" value="c"> Lunar<br>																
   <input type="radio" name="17" value="d"> De 1-3 ori pe semestru<br>																
   <input type="radio" name="17" value="e"> O dată pe an sau mai rar<br>
   <input type="radio" name="17" value=" " checked><br>
   <br><br><br>


    18. De câte ori, în ultimul semestru, ai stat de vorbă cu un consilier şcolar?<br><br> 							
   <input type="radio" name="18" value="a" > Mai mult de trei ori<br>							  
   <input type="radio" name="18" value="b"> De două sau de trei ori<br>							
   <input type="radio" name="18" value="c"> O dată<br>						
   <input type="radio" name="18" value="d"> Niciodată<br>
   <input type="radio" name="18" value=" " checked><br>
   <br><br><br>
   
   
    19. Cum te orientezi în şcoală?<br><br>								
   <input type="radio" name="19" value="a" > Pot ajunge uşor la orice spaţiu (sală de clasă, laborator, secretariat, cabinetul medical etc.)<br>							
   <input type="radio" name="19" value="b"> Identific doar spaţiile în care îmi desfăşor activitatea<br>								
   <input type="radio" name="19" value="c">Mi se întâmplă să nu găsesc anumite locuri – laboratoare, cabinete, secretariat etc.<br>
   <input type="radio" name="19" value=" " checked><br>
   <br><br><br>


    20. Te simţi în siguranţă în incinta şcolii?<br><br>							
   <input type="radio" name="20" value="a" > Întotdeauna mă simt în siguranţă<br>							
   <input type="radio" name="20" value="b"> De cele mai multe ori mă simt în siguranţă<br>							
   <input type="radio" name="20" value="c"> De cele mai multe ori nu mă simt în siguranţă<br>							
   <input type="radio" name="20" value="d"> Niciodată nu mă simt în siguranţă<br>
   <input type="radio" name="20" value=" " checked><br>
   <br><br><br>


    21. Dar în anexele şcolii (sală de sport, ateliere, curtea şcolii etc.)?<br><br>							
   <input type="radio" name="21" value="a" >Întotdeauna mă simt în siguranţă<br>							
   <input type="radio" name="21" value="b"> În general mă simt în siguranţă<br>						
   <input type="radio" name="21" value="c"> În general nu mă simt în siguranţă<br>							
   <input type="radio" name="21" value="d"> Niciodată nu mă simt în siguranţă<br>
   <input type="radio" name="21" value=" " checked><br>
   <br><br><br>


    22. Dar în vecinătatea şcolii (inclusiv pe drumul de acasă la şcoală şi înapoi)?<br><br>							
   <input type="radio" name="22" value="a" > Întotdeauna mă simt în siguranţă<br>							
   <input type="radio" name="22" value="b"> Ο În general mă simt în siguranţă<br>						
   <input type="radio" name="22" value="c"> În general nu mă simt în siguranţă<br>							
   <input type="radio" name="22" value="d"> Ο Niciodată nu mă simt în siguranţă<br>
   <input type="radio" name="22" value=" " checked><br>
   <br><br><br>


    23. Cum apreciezi nivelul de curăţenie din şcoală?<br><br>					
   <input type="radio" name="23" value="a" > Este foarte curat în toată şcoala<br>				
   <input type="radio" name="23" value="b"> În general, şcoala este curată<br>				
   <input type="radio" name="23" value="c"> Şcoala este mai degrabă murdară<br>					
   <input type="radio" name="23" value="d"> Este foarte murdar în toată şcoala<br>
   <input type="radio" name="23" value=" " checked><br>
   <br><br><br>


    24. Cum apreciezi progresul în dotarea bibliotecii şcolii (cărţi, CD-uri, alte materiale), în acest an şcolar faţă de cel precedent?<br><br>												
   <input type="radio" name="24" value="a" > Am constatat o îmbunătăţire considerabilă faţă de anul şcolar trecut<br>											
   <input type="radio" name="24" value="b"> Am constatat anumite îmbunătăţiri faţă de anul şcolar trecut<br>											
   <input type="radio" name="24" value="c"> Nu am constatat îmbunătăţiri faţă de anul şcolar trecut<br>											
   <input type="radio" name="24" value="d"> Nu ştiu – nu frecventez biblioteca<br>
   <input type="radio" name="24" value=" " checked><br>
   <br><br><br>
   
   
    25. Cum apreciezi progresul în dotarea cu calculatoare în acest an şcolar faţă de cel precedent?<br><br>									
   <input type="radio" name="25" value="a" > Am constatat o îmbunătăţire considerabilă faţă de anul şcolar trecut<br>									
   <input type="radio" name="25" value="b"> Am constatat anumite îmbunătăţiri faţă de anul şcolar trecut<br>					
   <input type="radio" name="25" value="c"> Nu am constatat îmbunătăţiri faţă de anul şcolar trecut<br>						
   <input type="radio" name="25" value="d"> Nu ştiu<br>
   <input type="radio" name="25" value=" " checked><br>
   <br><br><br>
   
   
    26. Cât de bine cunoşti modul în care se face evaluarea cadrelor didactice?<br><br>										
   <input type="radio" name="26" value="a" > Cunosc modul în care se face evaluarea cadrelor didactice, inclusiv rezultatele evaluării (calificativele obţinute)<br>										
   <input type="radio" name="26" value="b"> Cunosc doar modul în care se face evaluarea, fără a şti rezultatele<br>									
   <input type="radio" name="26" value="c"> Nu cunosc nici modul în care se face evaluarea şi nici rezultatele<br>
   <input type="radio" name="26" value=" " checked><br>
   <br><br><br>


    27. Ai fost solicitat, în acest an şcolar, să evaluezi cadre didactice din şcoală?<br><br>							
   <input type="radio" name="27" value="a" > Da<br>						
   <input type="radio" name="27" value="b"> Nu<br>
   <input type="radio" name="27" value=" " checked><br>
   <br><br><br>


    28. Dacă ai răpspuns „da” la întrebarea anterioară, care sunt acele cadre didactice evaluate (bifează toate situaţiile aplicabile):	<br><br>											
   <input type="checkbox" name="28[]" value="a" > Dirigintele<br>											
   <input type="checkbox" name="28[]" value="b"> Cadre didactice care predau la clasa în care învăţ<br>												
   <input type="checkbox" name="28[]" value="c"> Alte cadre didactice din şcoală<br>												
   <input type="checkbox" name="28[]" value="d"> Directorul sau directorul adjunct<br>
   <input type="checkbox" name="28[]" value="e"> Am raspuns cu NU la intrebarea anterioara<br>
   <input type="checkbox" name="28[]" value=" " checked><br>
   <br><br><br>


    29. Există, în şcoală, proiecte desfăşurate în parteneriat cu alte şcoli, cu instituţii din comunitate (primărie, bibliotecă, dispensar<br>
    	sau policlinică, poliţie, etc.) sau cu parteneri străini ?<br><br>																
   <input type="radio" name="29" value="a" > Da<br>																
   <input type="radio" name="29" value="b"> Nu<br>																
   <input type="radio" name="29" value="c"> Nu ştiu<br>
   <input type="radio" name="29" value=" " checked><br>
   <br><br><br> 



    30. Dacă ai răspuns „Da” la întrebarea anterioară, numeşte cel puţin un proiect de acest tip:<br><br>
   <input type="text" name="30" value=""><br>
   <br><br><br>
   
   
   
    31. Ai fost consultat, anul trecut, în privinţa alegerii disciplinelor opţionale din acest an şcolar?<br><br>									
   <input type="radio" name="31" value="a" > Da<br>									
   <input type="radio" name="31" value="b"> Nu<br>
   <input type="radio" name="31" value=" " checked><br>
   <br><br><br>


    32. Cum răspund cadrele didactice la cererile tale de ajutor individual în înţelegerea / aprofundarea celor predate?<br><br>																
   <input type="radio" name="32" value="a" > Toate cadrele didactice<br>																
   <input type="radio" name="32" value="b"> Majoritatea cadrelor didactice<br>															
   <input type="radio" name="32" value="c"> Unele cadre didactice<br>																
   <input type="radio" name="32" value="d"> Niciun cadru didactic<br>																
   <input type="radio" name="32" value="e"> Nu am solicitat /nu am avut nevoie de ajutor<br>
   <input type="radio" name="32" value=" " checked><br>
   <br><br><br> 		

	
    33. Cat de des esti ajutat?<br><br>																
   <input type="radio" name="33" value="a" > Sunt ajutat ori de câte ori am nevoie<br>																
   <input type="radio" name="33" value="b"> Sunt ajutat numai dacă întâmpin dificultăţi majore<br>															
   <input type="radio" name="33" value="c"> Sunt ajutat din când în când, atunci când insist<br>																
   <input type="radio" name="33" value="d"> Nu am solicitat – nu am avut nevoie de ajutor<br>
   <input type="radio" name="33" value=" " checked><br>
   <br><br><br>


    34. Cât de des ţi se explică, înainte de evaluare (teză, lucrare scrisă, ascultare orală) criteriile care vor fi folosite pentru evaluare şi notare?<br><br>														
   <input type="radio" name="34" value="a" > Înainte de fiecare evaluare<br>														
   <input type="radio" name="34" value="b"> Doar în momentele importante - cum ar fi înainte de teze<br>														
   <input type="radio" name="34" value="c"> Niciodată<br>
   <input type="radio" name="34" value=" " checked><br>
   <br><br><br>   
	

	
    35. Cât de des ţi se explică motivele pentru care ai obţinut o anumită notă?<br><br>														
   <input type="radio" name="35" value="a" > De fiecare dată când sunt evaluat şi notat<br>														
   <input type="radio" name="35" value="b" > Doar în momentele importante, de exemplu atunci când ne sunt prezentate rezultatele la teze<br>														
   <input type="radio" name="35" value="c" > Niciodată<br>
   <input type="radio" name="35" value=" " checked><br>
   <br><br><br>   
	

	
    36. Dacă la ore prezinţi alte informaţii sau idei personale, cum se comportă profesorii tăi? (un singur răspuns posibil)<br><br>														
   <input type="radio" name="36" value="a" > Profesorii sunt întotdeauna de acord cu ce spun<br>														
   <input type="radio" name="36" value="b"> Profesorii sunt de acord cu ce spun însă îmi cer să demonstrez, să argumentez<br>														
   <input type="radio" name="36" value="c"> Profesorii cer părerea colegilor mei, se provoacă o discuţie în clasă<br>														
   <input type="radio" name="36" value="d"> Profesorii îmi spun să stau jos şi să nu mai vorbesc<br>	
   <input type="radio" name="36" value=" " checked><br>   
   <br><br><br>														
	

	
    37. În momentul în care tu sau unul dintre colegii tăi aveţi rezultate slabe la învăţătură, cum se comportă profesorii?<br>
    	(sunt posibile mai multe răspunsuri)<br><br>														
   <input type="checkbox" name="37[]" value="a" > Pun note mici sau lasă corijenţi<br>														
   <input type="checkbox" name="37[]" value="b" > Dau mai mult de lucru pentru a putea învăţa mai bine<br>														
   <input type="checkbox" name="37[]" value="c" > Explică din nou lecţia respectivă<br>														
   <input type="checkbox" name="37[]" value="d" > Se interesează de motivul pentru care se obţin note slabe<br>														
   <input type="checkbox" name="37[]" value="e" > Ne arată unde greşim şi cum să învăţăm la materia respectivă<br>														
   <input type="checkbox" name="37[]" value="f" > Ne încurajează insistând pe rezultatele bune obţinute<br>
   <input type="checkbox" name="37[]" value=" " checked><br>
   <br><br><br>   
														


													
    38. În ce fel eşti încurajat să îţi evaluezi singur rezultatele şcolare?<br><br>														
   <input type="radio" name="38" value="a" > Toate cadrele didactice mă încurajează să mă autoevaluez<br>														
   <input type="radio" name="38" value="b" > Majoritatea cadrelor didactice mă încurajează să mă autoevaluez<br>														
   <input type="radio" name="38" value="c" > Unele cadre didactice mă încurajează să mă autoevaluez<br>														
   <input type="radio" name="38" value="d" > Niciun cadru didactic nu mă încurajează să mă autoevaluez<br>
   <input type="radio" name="38" value=" " checked><br>
   <br><br><br>   
 														
	
<!-- aici o sa avem un textarea -->

    39. În ce măsură eşti satisfăcut de următoarele aspecte ale vieţii şcolare? (prin acordarea unei note de la 5 la 1, nota 5 indicând nivelul maxim)<br><br>														
   1) Progresul personal realizat în ultimul an şcolar: 
   <select name="39_1">
    <option value=" "> </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	</select>
	<br>								
   2) Baza materială (săli de clasă, laboratoare, echipamente, material didactic etc.): 
      <select name="39_2">
    <option value=" "> </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	</select>
	<br>														
  3) Starea de curăţenie în şcoală 
   <select name="39_3">
    <option value=" "> </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	</select>
	<br>   
   4) Respectul arătat de personalul şcolii 
   <select name="39_4">
    <option value=" "> </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	</select>
	<br>   
   5) Echitatea evaluării şi notării (notele/calificativele obţinute sunt cele meritate) 
   <select name="39_5">
    <option value=" "> </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	</select>
	<br>   
   6) Informaţia primită în privinţa activităţilor desfăşurate în şcoală 
   <select name="39_6">
    <option value=" "> </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	</select>
	<br>   
   <br><br><br>   

	
    40. În ce măsură eşti satisfăcut de următoarele aspecte ale vieţii şcolare? (prin acordarea unei note de la 5 la 1, nota 5 indicând nivelul maxim)<br><br>														
   1) Informaţia primită de la şcoală în privinţa continuării studiilor, după absolvire 
   <select name="40_1">
    <option value=" "> </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	</select>
	<br>   
   2) Informaţia primită de la şcoală în privinţa activităţilor educative şi culturale din localitate 
   <select name="40_2">
    <option value=" "> </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
   </select>
	<br>      
   3) Modul în care şcoala răspunde solicitărilor de informaţii 
   <select name="40_3">
    <option value=" "> </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
   </select>
	<br>      
   <br><br><br>   

<!---pana aici--->
														
    41. Faci parte din Comisia de Evaluare si Asigurare a Calităţii (CEAC)?<br><br>														
   <input type="radio" name="41" value="a" > Da<br>														
   <input type="radio" name="41" value="b" > Nu<br>
   <input type="radio" name="41" value=" " checked><br>
   <br><br><br>   


														
    42. Dacă da, cât de des se întruneşte CEAC?<br><br> 														
   <input type="radio" name="42" value="a" > Regulat, lunar sau mai des<br>													
   <input type="radio" name="42" value="b" > Regulat la 2-3 luni<br>														
   <input type="radio" name="42" value="c" > Regulat, o dată sau de două ori pe semestru<br>														
   <input type="radio" name="42" value="d" > De câte ori este nevoie, fără o periodicitate anume<br>														
   <input type="radio" name="42" value="e" > Nu se întruneşte<br>														
   <input type="radio" name="42" value="f" > Nu ştiu<br>
   <input type="radio" name="42" value=" " checked><br>
   <br><br><br>   
    <input type="submit" name="Trimite!" value="Trimite"><br><br><br><br>
    </font>
   </b>
  </form>
  </td>
  </tr>
  </table>
 </body>
</html>
