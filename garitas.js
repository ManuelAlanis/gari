

function conversion (time) 
{
    var minutes = Math.floor( time / 60 );
    var seconds = time % 60;
    
    seconds = seconds < 10 ? '0' + seconds : seconds;
    var result = minutes + ":" + seconds; 
    
    return result;
}
function innerTimes (varysidro0,varysidro1,varysidro2,varotay0,varotay1,varotay2,vartecate0,vartecate1,vartecate2) 
{	
    //color primera caja
    if (varysidro0<=30) {
      $( "#square_standard0" ).addClass( "blue" );
    };
    if (varysidro0>30) {
      $( "#square_standard0" ).addClass( "orange" );
    };
    if (varysidro0>=120) {
      $( "#square_standard0" ).addClass( "red" );
    };


    //color segunda caja
    if (varysidro1<=30) {
      $( "#square_sentri0" ).addClass( "blue" );
    };
    if (varysidro1>30) {
      $( "#square_sentri0" ).addClass( "orange" );
    };
    if (varysidro1>=120) {
      $( "#square_sentri0" ).addClass( "red" );
    };

        //color tercera caja
    if (varysidro2<60&&varysidro2>30) {
      $( "#square_readyline0" ).addClass( "orange" );
    };
    if (varysidro2<=30) {
      $( "#square_readyline0" ).addClass( "blue" );
    };
    if (varysidro2>=120) {
      $( "#square_readyline0" ).addClass( "red" );
    };
    //color cuarta caja
    // if (varysidro3<60&&varysidro3>30) {
    //   $( "#square_peatonal0" ).addClass( "orange" );
    // };
    // if (varysidro3<=30) {
    //   $( "#square_peatonal0" ).addClass( "blue" );
    // };
    // if (varysidro3>=120) {
    //   $( "#square_peatonal0" ).addClass( "red" );
    // };

    // Otay
    if (varotay0<60&&varotay0>30) {
      $( "#square_standard1" ).addClass( "orange" );
    };
    if (varotay0<=30) {
      $( "#square_standard1" ).addClass( "blue" );
    };
    if (varotay0>=120) {
      $( "#square_standard1" ).addClass( "red" );
    };
    //color segunda caja
    if (varotay1<60&&varotay1>30) {
      $( "#square_sentri1" ).addClass( "orange" );
    };
    if (varotay1<=30) {
      $( "#square_sentri1" ).addClass( "blue" );
    };
    if (varotay1>=120) {
      $( "#square_sentri1" ).addClass( "red" );
    };
    //color tercera caja
    if (varotay2<60&&varotay2>30) {
      $( "#square_readyline1" ).addClass( "orange" );
    };
    if (varotay2<=30) {
      $( "#square_readyline1" ).addClass( "blue" );
    };
    if (varotay2>=120) {
      $( "#square_readyline1" ).addClass( "red" );
    };
    //TECATE
    // Otay
    if (vartecate0<60&&vartecate0>30) {
      $( "#square_standard2" ).addClass( "orange" );
    };
    if (vartecate0<=30) {
      $( "#square_standard2" ).addClass( "blue" );
    };
    if (vartecate0>=120) {
      $( "#square_standard2" ).addClass( "red" );
    };
    //color segunda caja
    if (vartecate1<60&&vartecate1>30) {
      $( "#square_sentri2" ).addClass( "orange" );
    };
    if (vartecate1<=30) {
      $( "#square_sentri2" ).addClass( "blue" );
    };
    if (vartecate1>=120) {
      $( "#square_sentri2" ).addClass( "red" );
    };
    //color tercera caja
    if (vartecate2<60&&vartecate2>30) {
      $( "#square_readyline2" ).addClass( "orange" );
    };
    if (vartecate2<=30) {
      $( "#square_readyline2" ).addClass( "blue" );
    };
    if (vartecate2>=120) {
      $( "#square_readyline2" ).addClass( "red" );
    };
    varysidro0=conversion(varysidro0);
    varysidro1=conversion(varysidro1);
    varysidro2=conversion(varysidro2);
    varotay0=conversion(varotay0);
    varotay1=conversion(varotay1);
    varotay2=conversion(varotay2);
    vartecate0=conversion(vartecate0);
    vartecate1=conversion(vartecate1);
    vartecate2=conversion(vartecate2);


    document.getElementById('timerysidro0').innerHTML=varysidro0;
    document.getElementById('timerysidro1').innerHTML=varysidro1;
    document.getElementById('timerysidro2').innerHTML=varysidro2;
    // document.getElementById('timerysidro3').innerHTML=varysidro3;
    // innerHTML Otay
    document.getElementById('timerotay0').innerHTML=varotay0;
    document.getElementById('timerotay1').innerHTML=varotay1;
    document.getElementById('timerotay2').innerHTML=varotay2;
    // document.getElementById('timerotay3').innerHTML=varotay3;

    document.getElementById('timertecate0').innerHTML=vartecate0;
    document.getElementById('timertecate1').innerHTML=vartecate1;
    document.getElementById('timertecate2').innerHTML=vartecate2;
    
}