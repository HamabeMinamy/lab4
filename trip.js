function check(){
   var MPG=document.getElementById("MPG"); 
   var COST=document.getElementById("Cost"); 
   var CITY=document.getElementById("CITY"); 
   var choice=CITY.options[CITY.selectedIndex];
   var submit1=document.getElementById("submit");
   var flag=0;
   if(MPG.value==0||isNaN(MPG.value)==true||parseFloat(MPG.value)<0){
    alert("please enter a valid average MPG");
    flag=1;
   }
   else if (COST.value==0||isNaN(COST.value)==true||parseFloat(COST.value)<0){
    alert("please enter a valid average cost of a gallon of fuel");
    flag=1;
   }
   else if(choice.innerText==" "){
    alert("please choose a city you want to visit");
    flag=1;
   }
  if(flag==0){
     submit1.submit();
   }

}