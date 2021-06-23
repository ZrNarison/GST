$(document).ready(function(){
   var ch =$("#checkbox");
   var psw =$("#password");
   
   ch.click(function(){
      if(ch.prop("checked")){
         psw.attr("type","text");
      }else{
         psw.attr("type","password");
      }
   });
    var pnd=$("#Mpanambady");
   var vd=$("#mbd");
   var ctt=$("#Citiation");
   ctt.Onchange(function(){
      alert("kjdkjfdkfdkfdk")
   })  
});

$(document).ready(function(){
   $("#formbox").validate({
      rules:{
         n_box:{
            required:true,
            number:true,
            minlength:1,
            maxlength:3
         },
         loge:{
            required:true,
            number:true,
            minlength:6,
            maxlength:10
         },
         sec:{
            required:true,
            number:true,
            minlength:4,
            maxlength:7
         }
      },
      messages:{
         n_box:{
            required:'Le champ ne doit pas vide',
            number:'En nombre SVP !',
            maxlength:'box inéxistant'},
            loge:{
               required:'Coût du logement du nouveau box',
               number:'En nombre SVP !',
               minlength:'Le montant est tres faible',
               maxlength:'Montant dépasse la normale'
            },
            sec:{
               required:'Coût de gardiennage',
               number:'En nombre SVP !',
               minlength:'Le montant ajouter trop faible',
               maxlength:'Montant dépasse la normale'
            }
         }
      }),
   $("#formclient").validate({
      rules:{num_bo:{required:true,},nom_ver:{required:true,minlength:1},date_nais:{required:true},lieu_nais:{required:true},cin:{required:true,number:true,minlength:12,maxlength:12},date_cin:{required:true,},mere:{required:true},photo_client:{required:true},activite:{required:true},date_enga:{required:true},caution:{required:true,number:true,minlength:5,maxlength:7},adress:{required:true},tel:{required:true,number:true,minlength:10,maxlength:10},mail:{email:true},Citiation:{required:true},nb_enf:{number:true},nif:{number:true,minlength:10,maxlength:10},stat:{number:true,minlength:17,maxlength:17},rc:{number:true},c_banc:{number:true},meti:{required:true},p_resp:{required:true,
            minlength:1,
            maxlength:2
         }
      },
      messages:{
         num_bo:{
            required:'Séléctionné un N° box'
         },
         nom_ver:{
            required:'Saisissez une nom '
         },
         date_nais:{
            required:'Date de naissance doit rémplir'
         },
         lieu_nais:{
            required:'Lieu de naissance ne doit pas vide'
         },
         mere:{
            required:'Filiation mére ne doit pas vide '
         },
         photo_client:{
            required:"Une photo, pour mieux l'en connaitre"
         },
         activite:{
            required:"On devez renseigner ce qu'ils vont faire avec"
         },
         date_enga:{
            required:"Date d'y rentré en activé"
         },
         caution:{
            required:"Précisé une somme à chaque reservation",
            number:"En nombre SVP !",
            minlength:"Minimium de somme versé doit 5 chiffres",
            maxlength:"Maximium de valeur "
         },
         adress:{
            required:"Veuillez précisé l'adress de votre client"
         },
         tel:{
            required:"Contact",
            number:"En noombre SVP",
            minlength:"Contact incomplete",
            maxlength:"Contact incorrect"
         },
         cin:{
            required:"Numero Carte d'Identité National obligatoire",
            number:"En chiffre svp !",
            minlength:"N° CIN incomplète",
            maxlength:"N° CIN trop long"
         },
         date_cin:{
            required:"Date délivrance !",
         },
         mail:{
            email:"adress email incorrect"
         },
         Citiation:{
            required:"Cituation de familliale !"
         },
         nb_enf:{
            number:"en nombre svp!"
         },
         nif:{
            number:"en nombre svp!",
            minlength:"NIF trop court",
            maxlength:"NIF trop long"
         },
         stat:{
            number:"en nombre svp!",
            minlength:"STAT trop court",
            maxlength:"STAT trop long"
         },
         rc:{
            number:"en nombre svp!"
         },
         c_banc:{
            number:"en nombre svp"
         },
         meti:{
            required:"Quelle metier faudra t-il en faire"
         },
         p_resp:{
            required:"en nombre",
            minlength:"Minimium",
            maxlength:"Maximium"
         }
      }
   }),
   $("#hofatrano").validate({
      rules:{
         num_bo:{
            required:true
         },
         d_pres:{
            required:true
         },
         nom_ver:{
            required:true
         },
         somme_ver:{
            required:true,
            number:true,
            minlength:5,
            maxlength:7,}},
      messages:{
         num_bo:{
            required:'Une box SVP!'
         },
         d_pres:{
            required:"Veuillez preciser une date"
         },
         nom_ver:{
            required:"Nom du client"
         },
         somme_ver:{
            required:"La somme vérsé",
            number:"En nombre SVP!",
            minlength:"Somme minimale à 5 chiffres",
            maxlength:"Somme maximale à 7 chiffres",}
      }
   }),
   $("#formlogin").validate({
      rules:{
         use:{
            required:true
         },
         password:{
            required:true,
            minlength:4,
            maxlength:12,
         }},
      messages:{
         use:{
            required:"Séléctionné votre compte"
         },
         password:{
            required:"Tapez vos mot de pass",
            minlength:"Mot de pass trop court",
            maxlength:"On a jamais accépté cette mot de pass"
         }
      }
   }),
   $("#formEditCompte").validate({
      rules:{
         ancinom:{
            required:true
         },
         nouvnom:{
            required:true
         },
         anmdps:{
            required:true,
            minlength:4,
            maxlength:12
         },
         modps:{
            required:true,
            minlength:4,
            maxlength:12
         },
         comdps:{
            required:true,
            minlength:4,
            maxlength:12,
            equalTo:"#ncode"
         }
      },
      messages:{
         ancinom:{
            required:"Votre nom svp!"
         },
         nouvnom:{
            required:"Vos nouveau nom svp!"
         },
         anmdps:{
            required:"Tapez ici votre mot de pass",
            minlength:"Mot de pass trop court",
            maxlength:"Mot de pass trop long"
         },
         modps:{
            required:"Veuillez tapez votre nouveau mot de pass",
            minlength:"Mot de pass trop court",
            maxlength:"Mot de pass trop long"
         },
         comdps:{
            required:"Veuillez confirmé votre nouveau mot de pass",
            minlength:"Mot de pass trop court",
            maxlength:"MOt de pass trop long",
            equalTo:"Mot de pass different"
         }
      }
   }),
   $("#formnewcompte").validate({
      rules:{
         nom_c:{
            required:true
         },
         mdp:{
            required:true,
            minlength:4,
            maxlength:12
         },
         cmdp:{
            required:true,
            equalTo:"#mdps"
         }
      },
      messages:{
         nom_c:{
            required:"Saisir une nom"
         },
         mdp:{
            required:"Mot de pass",
            minlength:"Mot de pass trop court",
            maxlength:"Mot de pass trop long"
         },
         cmdp:{
            required:"Code de confirmation",
            equalTo:"Mot de pass different"
         }
      }
   }),
   $("#formJirama").validate({
      rules:{
         num_bo:{
            required:true
         },
         datepcpt:{
            required:true
         },
         v_ant:{
            required:true,
            number:true,
            minlength:5,
            maxlength:5
         },
         datecpt:{
            required:true
         },
         nomcpt:{
            required:true
         },
         sommecpt:{
            required:true,
            number:true,
            minlength:3,
            maxlength:7
         }},
         messages:{
            num_bo:{
               required:"Selectionner un box"
            },
            datepcpt:{
               required:"une date"
            },
            v_ant:{
               required:"Veillez saisir le chiffre sur le compteur",
               number:"en nombre svp!",
               minlength:"chiffre de rélèvé insuffisant",
               maxlength:"Chiffre de rélève incorrect"
            },
            datecpt:{
               required:"Une date"
            },
            nomcpt:{
               required:"Nom du client svp!"
            },
            sommecpt:{
               required:"Somme versant",
               number:"En nombre svp",
               minlength:"Somme insuffisante",
               maxlength:"Somme incorrect"
            }
      }
   })
});




