function validate() {
    
    var poruka = null;
    poruka = ime();
    if(poruka!=null)
        {
            forma.tbime.focus();
            $.notify(poruka);
            return false;
        }
    else {
        poruka = val();
        if(poruka!=null)
            {
                $.notify(poruka);
                forma.tbemail.focus();
                return false;
            }
        else {
            poruka = tekst();
            if(poruka !=null) {
                $.notify(poruka);
                forma.tbpitanje.focus();
                return false;
            }
            else return true;
        }
    }    
}

function val(){
    if(forma.tbemail.value=="")
        {
            return "Molimo unesite email adresu";
        }
    var reg=/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    
    if (reg.test(forma.tbemail.value)==false)
        {
            return "Email nije ispravno upisan";
        }
    return null;
 }


function ime(){
    if(forma.tbime.value=="")
        {
            return "Molimo da unesete Vaše ime i prezime";
        }
    var rega=/^[A-Z]{1}[a-z]{1,19}\s[A-Z]{1}[a-z]{1,29}$/;
    
    if(rega.test(forma.tbime.value)==false)
        {
            return "Molimo unesite ime i prezime sa početnim velikim slovima";
        }
    return null;
}
function tekst(){
    if(forma.tbpitanje.value=="")
        {
            return "Molimo da unesete Vaše pitanje";
        }
   var regb=/^{2,300}$/;
    if(regb.test(forma.tbpitanje.value)==false)
        {
            return "We couldn't save your response because it was either too short or too long";
        }
    return null;
}


function validacija() {
    
    var poruka = null;
    poruka = imeen();
    if(poruka!=null)
        {
            forma.tbime.focus();
            $.notify(poruka);
            return false;
        }
    else {
        poruka = valen();
        if(poruka!=null)
            {
                $.notify(poruka);
                forma.tbemail.focus();
                return false;
            }
        else {
            poruka = teksten();
            if(poruka !=null) {
                $.notify(poruka);
                forma.tbpitanje.focus();
                return false;
            }
            else return true;
        }
    }    
}

function valen(){
    if(forma.tbemail.value=="")
        {
            return "Please enter your email";
        }
    var reg=/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    
    if (reg.test(forma.tbemail.value)==false)
        {
            return "Please write your email correctly";
        }
    return null;
 }


function imeen(){
    if(forma.tbime.value=="")
        {
            return "Please enter your first and last name";
        }
    var rega=/^[A-Z]{1}[a-z]{1,19}\s[A-Z]{1}[a-z]{1,29}$/;
    
    if(rega.test(forma.tbime.value)==false)
        {
            return "Your have to enter your first and last name with first capital letter";
        }
    return null;
}
function teksten(){
    if(forma.tbpitanje.value=="")
        {
            return "Please enter your question";
        }
    var regb=/^{2,300}$/;
    if(regb.test(forma.tbpitanje.value)==false)
        {
            return "We couldn't save your response because it was either too short or too long";
        }
    return null;
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
            
            $('#pregled').css({visibility:"visible", opacity: 0.0}).animate({opacity: 1.0},400);
             
            $('.srafx').css({visibility:"visible", opacity: 0.0}).animate({opacity: 1.0},400);
            
            $('#blur').css({visibility:"visible", opacity: 0.0}).animate({opacity: 0.85},400);
            
            //$('#pregled').visibility="visible";
        });
      
      $('#velika').click(function() {
           $('#velika').attr('src', "");
          
          $('#pregled').css('visibility', 'hidden');
          $('#blur').css('visibility', 'hidden');
          $('.srafx').css('visibility', 'hidden');
          
      });
       $('.srafx').click(function() {
           $('#velika').attr('src', "");
          
          $('#pregled').css('visibility', 'hidden');
          $('#blur').css('visibility', 'hidden');
          $('.srafx').css('visibility', 'hidden');
          
      });
      
    });

