/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
               $("#dataContent").load('ajaxGet.php') 
               
              
            });
            
            function press(){
                var order=document.getElementById("ordernumber").value;
                var status=document.getElementById("status").value;
                xmlhttp=new XMLHttpRequest();
                xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                        $("#dataContent").load('ajaxGet.php')
                        document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
                        
                    }
                }
                xmlhttp.open("POST","ajaxInsert.php?ordernumber="+order+"&status="+status,true);
                xmlhttp.send();
            }

