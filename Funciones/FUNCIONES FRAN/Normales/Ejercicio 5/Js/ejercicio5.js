   //con paremtros
   function promedioTresNotas(paNot1,paNot2,paNot3){
    paNot1=paNot1 
    paNot2=paNot2
    paNot3=paNot3
    let suma = paNot1 + paNot2 + paNot3
    return suma

   }
   
   function dividirNotas(paNot1, paNot2, paNot3) {
   let nota = promedioTresNotas(paNot1, paNot2, paNot3) / 3;
   return nota;
  }


  //con expresion
  const promedioTresNotasExp = function(paNot1,paNot2,paNot3){
   paNot1=paNot1 
   paNot2=paNot2
   paNot3=paNot3
   let suma = paNot1 + paNot2 + paNot3
   return suma

  }

  const  dividirNotasExp = function(paNot1, paNot2, paNot3){
   let nota = promedioTresNotas(paNot1, paNot2, paNot3) / 3;
   return nota;
  }

        
