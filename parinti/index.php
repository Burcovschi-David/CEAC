<!doctype html>
<head></head>
<title>LIIS::Elevi formular::</title>
<html>
 <body bgcolor="#FFFFDA">
  <hr>
  <center>
   <img src="poze/sigla.png" weight="70" height="70">
   <hr>
   <h1><font color="#FF0000">Chestionarul pentru parinti (nivelurile gimnazial, liceal )</font></h1>
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
     1. De ce ati optat pentru a aduce copiii dumneavoastra la aceasta scoala?<br><br>
    <input type="radio" name="1" value="a" > Este singura din localitate - cea mai aproape de domiciliu<br>
    <input type="radio" name="1" value="b" > A fost decizia copilului<br>
    <input type="radio" name="1" value="c" > Am optat pentru această şcoală în urma informării prealabile<br>
	<input type="radio" name="1" value=" " checked><br>
    <br><br><br>
    
    
    
    2. Daca ati raspuns la intrebarea anterioara " am optat pentru aceasta scoala in urma informarii prealabile", cum ati aflat de ea(bifati toate situatiile aplicabile)?<br><br>
   <input type="checkbox" name="2[]" value="a"> De la alte persoane – elevi, absolvenţi, vecini, rude<br>
   <input type="checkbox" name="2[]" value="b">Din ziare<br>
   <input type="checkbox" name="2[]" value="c">De la Radio sau TV<br>
   <input type="checkbox" name="2[]" value="d">De pe Internet<br>
   <input type="checkbox" name="2[]" value="f" >Nu am raspuns<br>
   <input type="checkbox" name="2[]" value=" " checked><br>
   <br><br><br>

   
    3. Faci parte din Comitetul de parinti pe clasă ?<br><br><!--- aici am ramas --->					
   <input type="radio" name="3" value="a" > Da<br> 					
   <input type="radio" name="3" value="b"> Nu<br>
   <input type="radio" name="3" value=" " checked><br>
   <br><br><br>
   
   
    4. Dacă da, cât de des se întruneşte Comitetul parintilor pe clasă?<br><br> 							
   <input type="radio" name="4" value="a" > Regulat, lunar sau mai des<br>						
   <input type="radio" name="4" value="b"> Regulat la 2-3 luni<br>		
   <input type="radio" name="4" value="c"> Regulat, o dată sau de două ori pe semestru<br> 							
   <input type="radio" name="4" value="d"> De câte ori este nevoie, fără o periodicitate anume<br>							
   <input type="radio" name="4" value="e"> Nu se întruneşte<br>					
   <input type="radio" name="4" value="f"> Nu ştiu<br>
   <input type="radio" name="4" value=" " checked><br>
   <br><br><br>

   
    5. Faci parte din Comitetul de parinti pe şcoală ?<br><br>					
   <input type="radio" name="5" value="a" > Da<br>
   <input type="radio" name="5" value="b"> Nu<br>	
   <input type="radio" name="5" value=" " checked><br>   
   <br><br><br>
  
  
    6. Dacă da, cât de des se întruneşte Comitetul de parinti pe şcoală?<br><br> 					
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
   <input type="radio" name="8" value="a" > Da <br>				
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
   5)<input type="text" name="11_5" value=""><br>
   <br><br><br>
   
   
    12. Enumeră cel puţin 2 activităţi derulate în şcoală în ultimele trei luni, la care ai participat, care s-au referit<br>
    	la comportamente dăunătoare sănătăţii (fumat, consum de alcool, mâncare nesănătoasă etc.) <br><br>																
   1)<input type="text" name="12_1" value=""><br>
   2)<input type="text" name="12_2" value=""><br>
   <br><br><br>
   
   
    13. La câte exerciţii privind comportarea în caz de cutremur, incendiu etc., s-au realizat in scoala în ultimele 3 luni?<br><br>									
   <input type="radio" name="13" value="a" > 2 sau mai multe<br>									
   <input type="radio" name="13" value="b"> 1<br>					
   <input type="radio" name="13" value="c"> Niciunul<br>							
   <input type="radio" name="13" value="d"> Nu ştiu<br>
   <input type="radio" name="13" value=" " checked><br>
   <br><br><br>   
   
   
    14. Cum comunici cu dirigintele/invatatorul copilului dumneavoastra?(bifati toate modalitatile care le utilizati)<br>							
       (bifează toate modalităţile pe care le utilizezi):<br><br>					
   <input type="checkbox" name="14[]" value="a" > Discuţii informale<br>						
   <input type="checkbox" name="14[]" value="b"> Consultaţii individuale<br>						
   <input type="checkbox" name="14[]" value="c"> Telefon (inclusiv SMS)<br>						
   <input type="checkbox" name="14[]" value="d"> Email<br>
   <input type="checkbox" name="14[]" value=" " checked><br>
   <br><br><br>


    15. Cum comunicati cu ceilalti profesori?(utilizând oricare dintre modalităţile de comunicare indicate mai sus)?<br><br>													
   <input type="radio" name="15" value="a" > Zilnic<br>												
   <input type="radio" name="15" value="b"> Săptămânal<br>													
   <input type="radio" name="15" value="c"> Lunar<br>												
   <input type="radio" name="15" value="d"> De 1-3 ori pe semestru<br>													
   <input type="radio" name="15" value="e"> O dată pe an sau mai rar<br>
   <input type="radio" name="15" value=" " checked><br>
   <br><br><br>


    16. Cum comunicati cu directorul şcolii?(bifează toate modalităţile pe care le utilizezi)<br><br>
   <input type="checkbox" name="16[]" value="a" > Discuţii informale<br>										
   <input type="checkbox" name="16[]" value="b"> Consultaţii individuale<br>									
   <input type="checkbox" name="16[]" value="c"> Telefon (inclusiv SMS)<br>									
   <input type="checkbox" name="16[]" value="d"> Email<br>
   <input type="checkbox" name="16[]" value=" " checked><br>
   <br><br><br>


    17. Cât de des comunici (utilizând oricare dintre modalităţile de comunicare indicate mai sus) cu invatatorul/dirigintele copilului dumneavoastra ?<br><br>																
   <input type="radio" name="17" value="a" > Zilnic<br>																
   <input type="radio" name="17" value="b"> Săptămânal<br>																
   <input type="radio" name="17" value="c"> Lunar<br>																
   <input type="radio" name="17" value="d"> De 1-3 ori pe semestru<br>																
   <input type="radio" name="17" value="e"> O dată pe an sau mai rar<br>
   <input type="radio" name="17" value="f"> Nu comunic in nici un fel<br>
   <input type="radio" name="17" value=" " checked><br>
   <br><br><br>


    18. Dar cu ceilalti profesori?<br><br> 							
   <input type="radio" name="18" value="a" > Zilnic<br>																
   <input type="radio" name="18" value="b"> Săptămânal<br>																
   <input type="radio" name="18" value="c"> Lunar<br>																
   <input type="radio" name="18" value="d"> De 1-3 ori pe semestru<br>																
   <input type="radio" name="18" value="e"> O dată pe an sau mai rar<br>
   <input type="radio" name="18" value="f"> Nu comunic in nici un fel<br>
   <input type="radio" name="18" value=" " checked><br>
   <br><br><br>
   
   
    19. Dar cu directorul/directorul adjunct?<br><br>								
   <input type="radio" name="19" value="a" > Zilnic<br>																
   <input type="radio" name="19" value="b"> Săptămânal<br>																
   <input type="radio" name="19" value="c"> Lunar<br>																
   <input type="radio" name="19" value="d"> De 1-3 ori pe semestru<br>																
   <input type="radio" name="19" value="e"> O dată pe an sau mai rar<br>
   <input type="radio" name="19" value="f"> Nu comunic in nici un fel<br>
   <input type="radio" name="19" value=" " checked><br>
   <br><br><br>

    20. De cate ori , in ultimul semestru ati stat de vorba cu un consilier scolar?<br><br>							
   <input type="radio" name="20" value="a" > Mai mult de trei ori<br>							
   <input type="radio" name="20" value="b"> De doua sau de trei ori<br>							
   <input type="radio" name="20" value="c"> Odata<br>							
   <input type="radio" name="20" value="d"> Niciodată<br>
   <input type="radio" name="20" value=" " checked><br>
   <br><br><br>


    21. Cum va orientati in scoala?<br><br>							
   <input type="radio" name="21" value="a" >Pot ajunge usor la orice spatiu din scoala<br> (sala de clasa sau laborator in care invata copilul meu, secretariat, cabinetul medical, cancelaria profesorilor, cabinetul directorului etc.)<br>							
   <input type="radio" name="21" value="b"> Stiu unde sunt spatiile importante pentru mine (sala de clasa in care invata copilul meu, secretariatul/cabinetul directorului etc.)<br>						
   <input type="radio" name="21" value="c"> De obicei nu ma orientez in scoala - nu gasesc locurile unde am de rezolvat anumite probleme<br>		
   <input type="radio" name="21" value=" " checked><br>   
   <br><br><br>

   
   
    22. Care este nivelul de siguranta pentru elevi/copii in incinta scolii?<br><br>							
   <input type="radio" name="22" value="a" > Foarte mare<br>							
   <input type="radio" name="22" value="b"> Mare<br>						
   <input type="radio" name="22" value="c"> Mediu<br>							
   <input type="radio" name="22" value="d"> Mic<br>
   <input type="radio" name="22" value="d">Foarte mic<br>
   <input type="radio" name="22" value=" " checked><br>
   <br><br><br>
   
   
   
    23. Dar in anexele scolii (sala de sport, curtea scolii)?<br><br>							
   <input type="radio" name="23" value="a" > Foarte mare<br>							
   <input type="radio" name="23" value="b"> Mare<br>						
   <input type="radio" name="23" value="c"> Mediu<br>							
   <input type="radio" name="23" value="d"> Mic<br>
   <input type="radio" name="23" value="d">Foarte mic<br>
   <input type="radio" name="23" value=" " checked><br>
   <br><br><br>



    24. Dar în vecinătatea şcolii (inclusiv pe drumul de acasă la şcoală şi înapoi)?<br><br>							
   <input type="radio" name="24" value="a" > Foarte mare<br>							
   <input type="radio" name="24" value="b"> Mare<br>						
   <input type="radio" name="24" value="c"> Mediu<br>							
   <input type="radio" name="24" value="d"> Mic<br>
   <input type="radio" name="24" value="d">Foarte mic<br>
   <input type="radio" name="24" value=" " checked><br>
   <br><br><br>


    25. Cum apreciezi nivelul de curăţenie din şcoală?<br><br>					
   <input type="radio" name="25" value="a" > Este foarte curat în toată şcoala<br>				
   <input type="radio" name="25" value="b"> În general, şcoala este curată<br>				
   <input type="radio" name="25" value="c"> Şcoala este mai degrabă murdară<br>					
   <input type="radio" name="25" value="d"> Este foarte murdar în toată şcoala<br>
   <input type="radio" name="25" value=" " checked><br>
   <br><br><br>


    26. Cum apreciezi progresul în dotarea bibliotecii şcolii (cărţi, CD-uri, alte materiale), în acest an şcolar faţă de cel precedent?<br><br>												
   <input type="radio" name="26" value="a" > Am constatat o îmbunătăţire considerabilă faţă de anul şcolar trecut<br>											
   <input type="radio" name="26" value="b"> Am constatat anumite îmbunătăţiri faţă de anul şcolar trecut<br>											
   <input type="radio" name="26" value="c"> Nu am constatat îmbunătăţiri faţă de anul şcolar trecut<br>											
   <input type="radio" name="26" value="d"> Nu ştiu – nu frecventez biblioteca<br>
   <input type="radio" name="26" value=" " checked><br>
   <br><br><br>
   
   
    27. Cum apreciezi progresul în dotarea cu calculatoare în acest an şcolar faţă de cel precedent?<br><br>									
   <input type="radio" name="27" value="a" > Am constatat o îmbunătăţire considerabilă faţă de anul şcolar trecut<br>									
   <input type="radio" name="27" value="b"> Am constatat anumite îmbunătăţiri faţă de anul şcolar trecut<br>					
   <input type="radio" name="27" value="c"> Nu am constatat îmbunătăţiri faţă de anul şcolar trecut<br>						
   <input type="radio" name="27" value="d"> Nu ştiu<br>
   <input type="radio" name="27" value=" " checked><br>
   <br><br><br>
   
   
    28. Cât de bine cunoşti modul în care se face evaluarea cadrelor didactice?<br><br>										
   <input type="radio" name="28" value="a" > Cunosc modul în care se face evaluarea cadrelor didactice, inclusiv rezultatele evaluării (calificativele obţinute)<br>										
   <input type="radio" name="28" value="b"> Cunosc doar modul în care se face evaluarea, fără a şti rezultatele<br>									
   <input type="radio" name="28" value="c"> Nu cunosc nici modul în care se face evaluarea şi nici rezultatele<br>
   <input type="radio" name="28" value=" " checked><br>
   <br><br><br>


    29. Ati fost solicitat, în acest an şcolar, să evaluati cadre didactice din şcoală?<br><br>							
   <input type="radio" name="29" value="a" > Da<br>						
   <input type="radio" name="29" value="b"> Nu<br>
   <input type="radio" name="29" value=" " checked><br>
   <br><br><br>


    30. Dacă ai răpspuns „da” la întrebarea anterioară, care sunt acele cadre didactice evaluate (bifează toate situaţiile aplicabile):	<br><br>											
   <input type="checkbox" name="treizeci[]" value="a" > Dirigintele sau invatatorul copilului dvs.<br>											
   <input type="checkbox" name="treizeci[]" value="b"> Cadre didactice care predau la clasa în care învata copilul dvs.<br>												
   <input type="checkbox" name="treizeci[]" value="c"> Alte cadre didactice din şcoală<br>												
   <input type="checkbox" name="treizeci[]" value="d"> Directorul sau directorul adjunct<br>
   <input type="checkbox" name="treizeci[]" value="e"> Am raspuns cu NU la intrebarea anterioara<br>
   <input type="checkbox" name="treizeci[]" value=" " checked><br>
   <br><br><br>


    31. Există, în şcoală, proiecte desfăşurate în parteneriat cu alte şcoli, cu instituţii din comunitate (primărie, bibliotecă, dispensar<br>
    	sau policlinică, poliţie, etc.) sau cu parteneri străini ?<br><br>																
   <input type="radio" name="31" value="a" > Da<br>																
   <input type="radio" name="31" value="b"> Nu<br>																
   <input type="radio" name="31" value="c"> Nu ştiu<br>
   <input type="radio" name="31" value=" " checked><br>
   <br><br><br> 



    32. Dacă ai răspuns „Da” la întrebarea anterioară, numeşte cel puţin un proiect de acest tip:<br><br>
   1)<input type="text" name="32" value=""><br>
   <br><br><br>
   
   
   
    33. Ai fost consultat, anul trecut, în privinţa alegerii disciplinelor opţionale din acest an şcolar?<br><br>									
   <input type="radio" name="33" value="a" > Da<br>									
   <input type="radio" name="33" value="b"> Nu<br>
   <input type="radio" name="33" value=" " checked><br>
   <br><br><br>


    34. Cum răspund cadrele didactice la cererile tale de ajutor <b>individual</b>, pentru copilul dvs. , in intelegerea / aprofundarea celor predate?<br><br>																
   <input type="radio" name="34" value="a" > Toate cadrele didactice<br>																
   <input type="radio" name="34" value="b"> Majoritatea cadrelor didactice<br>															
   <input type="radio" name="34" value="c"> Unele cadre didactice<br>																
   <input type="radio" name="34" value="d"> Niciun cadru didactic<br>																
   <input type="radio" name="34" value="e"> Nu am solicitat /nu am avut nevoie de ajutor<br>
   <input type="radio" name="34" value=" " checked><br>
   <br><br><br> 		

	
    35. Cat de des a fost ajutat?<br><br>																
   <input type="radio" name="35" value="a" > Copilul meu a fost ajutat ori de câte ori am nevoie<br>																
   <input type="radio" name="35" value="b"> Copilul meu a fost ajutat numai dacă a întâmpinat dificultăţi majore<br>															
   <input type="radio" name="35" value="c"> Copilul meu a fost ajutat din când în când, atunci când insist<br>																
   <input type="radio" name="35" value="d"> Nu am solicitat – nu a avut nevoie de ajutor<br>
   <input type="radio" name="35" value=" " checked><br>
   <br><br><br>


    36. Cât de des vi se explică, înainte de evaluare (teză, lucrare scrisă, ascultare orală) criteriile care vor fi folosite pentru evaluare şi notare?<br><br>														
   <input type="radio" name="36" value="a" > Înainte de fiecare evaluare<br>														
   <input type="radio" name="36" value="b"> Doar în momentele importante - cum ar fi înainte de teze<br>														
   <input type="radio" name="36" value="c"> Niciodată<br>
   <input type="radio" name="36" value="d">Nu stiu, nu ma intereseaza<br>
   <input type="radio" name="36" value=" " checked><br>
   <br><br><br>   
	

	
    37. Cât de des vi se explică motivele pentru care copilul dvs a obţinut o anumită notă?<br><br>														
   <input type="radio" name="37" value="a" > De fiecare dată când este evaluat şi notat<br>														
   <input type="radio" name="37" value="b" > Doar în momentele importante, de exemplu atunci când sunt prezentate rezultatele la teze<br>														
   <input type="radio" name="37" value="c" > Niciodată<br>
   <input type="radio" name="37" value="d">Nu stiu, nu ma intereseaza<br>
   <input type="radio" name="37" value=" " checked><br>
   <br><br><br>   
	

														
	

	
    38. În momentul în care copilul dvs are rezultate slabe la învăţătură, cum actioneaza profesorii?<br>
    	(sunt posibile mai multe răspunsuri)<br><br>														
   <input type="checkbox" name="38[]" value="a" > Pun note mici sau lasă corijenţi<br>														
   <input type="checkbox" name="38[]" value="b" > Dau mai mult de lucru pentru a putea învăţa mai bine<br>														
   <input type="checkbox" name="38[]" value="c" > Explică din nou lecţia respectivă<br>														
   <input type="checkbox" name="38[]" value="d" > Se interesează de motivul pentru care se obţin note slabe<br>														
   <input type="checkbox" name="38[]" value="e" > Arată unde se greşeste şi cum să învete la materia respectivă<br>														
   <input type="checkbox" name="38[]" value="f" > Incurajează copiii insistând pe rezultatele bune obţinute<br>
   <input type="checkbox" name="38[]" value=" " checked><br>
   <br><br><br>   
														


													
    39. Ati fost consultat in elaborarea bugetului scolii in anul scolar curent?<br><br>														
   <input type="radio" name="39" value="a" > Da<br>														
   <input type="radio" name="39" value="b" > Nu<br>														
   <input type="radio" name="39" value="c" > Nu ma intereseaza<br>
   <input type="radio" name="39" value=" " checked><br>   
   <br><br><br>   
   
   
   
    40. Ati fost informat , in vreun fel(afisare, la sedintele cu parintii etc.) in legatura cu modul in care a fost cheltuit bugetul scolii?<br><br>														
   <input type="radio" name="40" value="a" > Da<br>														
   <input type="radio" name="40" value="b" > Nu<br>														
   <input type="radio" name="40" value="c" > Nu ma intereseaza<br>	
   <input type="radio" name="40" value=" " checked><br>   
   <br><br><br>
   
   
   
 		<!-- aici am ramas -->												
	
<!-- aici o sa avem un textarea -->

    41. În ce măsură eşti satisfăcut de următoarele aspecte ale vieţii şcolare? (prin acordarea unei note de la 5 la 1, nota 5 indicând nivelul maxim)<br><br>														
   1) Progresul copilului dvs realizat în ultimul an şcolar
    <select name="41_1">
	 <option value=" "> </option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
    </select><br>	 
   2) Baza materială (săli de clasă, laboratoare, echipamente, material didactic etc.)
    <select name="41_2">
	 <option value=" "> </option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
    </select><br>	  
   3) Starea de curăţenie în şcoală
    <select name="41_3">
	 <option value=" "> </option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
    </select><br>	   
   4) Respectul arătat de personalul şcolii fata de dvs si copilul dvs
    <select name="41_4">
	 <option value=" "> </option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
    </select><br>	      
   5) Echitatea evaluării şi notării (notele/calificativele obţinute sunt cele meritate)
    <select name="41_5">
	 <option value=" "> </option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
    </select><br>	      
   6) Informaţia primită în privinţa activităţilor desfăşurate în şcoală    
   <select name="41_6">
	 <option value=" "> </option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
    </select><br>	   														
   
   <br><br><br>   

	
    42. În ce măsură sunteti satisfăcut de următoarele aspecte ale vieţii şcolare? (prin acordarea unei note de la 5 la 1, nota 5 indicând nivelul maxim)<br><br>														
   1) Informaţia primită de la şcoală în privinţa continuării studiilor, după absolvire
    <select name="42_1">
	 <option value=" "> </option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
    </select><br>	   												
  2) Informaţia primită de la şcoală în privinţa activităţilor educative şi culturale din localitate
    <select name="42_2">
	 <option value=" "> </option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
    </select><br>	      
   3) Modul în care şcoala răspunde solicitărilor de informaţii														
      <select name="42_3">
	 <option value=" "> </option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
    </select><br>	
   <br><br><br>   

<!---pana aici--->
														
    43. Faceti parte din Comisia de Evaluare si Asigurare a Calităţii (CEAC)?<br><br>														
   <input type="radio" name="43" value="a" > Da<br>														
   <input type="radio" name="43" value="b" > Nu<br>
   <input type="radio" name="43" value=" " checked><br>
   <br><br><br>   


														
    44. Dacă da, cât de des se întruneşte CEAC?<br><br> 														
   <input type="radio" name="44" value="a" > Regulat, lunar sau mai des<br>													
   <input type="radio" name="44" value="b" > Regulat la 2-3 luni<br>														
   <input type="radio" name="44" value="c" > Regulat, o dată sau de două ori pe semestru<br>														
   <input type="radio" name="44" value="d" > De câte ori este nevoie, fără o periodicitate anume<br>														
   <input type="radio" name="44" value="e" > Nu se întruneşte<br>														
   <input type="radio" name="44" value="f" > Nu ştiu<br>
   <input type="radio" name="44" value=" " checked><br>
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
