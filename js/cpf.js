function carCpf(n){
    if(n.value.length==3)
       n.value += '.';
    if(n.value.length==7)
       n.value += '.';
       if(n.value.length==11)
       n.value += '-';
 }
