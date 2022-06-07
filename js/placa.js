//Functions responsible for auto-completion, signaling when filling in the Plate field
function tracoPlaca(n){
    if(n.value.length==3)
       n.value += '-';
   
 }