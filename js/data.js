//Functions responsible for auto-filling, of signs when filling in the Date field
        function barraNascimento(n){
           if(n.value.length==2)
              n.value += '/';
           if(n.value.length==5)
              n.value += '/';
        }
      