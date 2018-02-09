var da=0;
var ne=0;
var output = new Array();
function writeText (form) {
   if(document.getElementById('da').checked || document.getElementById('ne').checked) {
     if(document.getElementById('da').checked) {
  da=da+1;
  document.getElementById('da1').innerHTML=da;
}else   {
    
     document.getElementById('da1').innerHTML=da;
    
    }
    
     if(document.getElementById('ne').checked) {
  ne=ne+1;
  document.getElementById('ne1').innerHTML=ne;
}else   {
     document.getElementById('da1').innerHTML=da;
    }
   }
}

function val(){
    if(forma.tbemail.value=="")
        {
            $.notify("Molimo unesite email adresu");
            forma.tbemail.focus();
            return false;
        }
    var reg=/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    
    if (reg.test(forma.tbemail.value)==false)
        {
            $.notify("Email nije ispravno upisan");
            forma.tbemail.focus();
            return false;
        }
    return true;
 }


function ime(){
    if(forma.tbime.value=="")
        {
            $.notify("Molimo da unesete Vaše ime i prezime");
            forma.tbime.focus();
            return false;
        }
    var rega=/^[A-Z]{1}[a-z]{2,19}\s[A-Z]{1}[a-z]{3,29}$/;
    
    if(rega.test(forma.tbime.value)==false)
        {
            $.notify("Molimo unesite ime i prezime ispravno");
            forma.tbime.focus();
            return false;
        }
    return true;
}
function tekst(){
    if(forma.tbpitanje.value=="")
        {
            $.notify("Molimo da unesete Vaše pitanje");
            forma.tbpitanje.focus();
            return false;
        }
    var regb=/^[ -~]{2,200}$/;
    if(regb.test(forma.tbpitanje.value)==false)
        {
            $.notify("Molimo da nam postavite pitanje ili da ga skratite ukoliko je predugo");
            forma.tbpitanje.focus();
            return false;
        }
    return true;
}
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

  $(document).ready(function(){
        $('.image').click(function(){
             //$(this).css('width', function(_ , cur){
               //   return cur === '1000px' ? '100%' : '1000px'
        //    });
            
            var path = $(this).prop('src').slice(0,-4) + '1.jpg';
            
            $('#velika').attr('src', path);
            
            $('#pregled').css('visibility', 'visible');
            
            //$('#pregled').visibility="visible";
        });
      
      $('#velika').click(function() {
           $('#velika').attr('src', "");
          $('#pregled').css('visibility', 'hidden');
          
      });
      
      
    });

