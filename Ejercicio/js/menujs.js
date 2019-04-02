
$("[id*=menu]").click(function(){
            var nameid=$(this).attr("id");
            
            nameid=nameid.substring(4);
            if (nameid.length >1){
            console.log(nameid);
            if ($("[id*=sub"+nameid+"]").css("display")!="none"){
                $("[id*=sub"+nameid+"]").css("display","none");
            }
            else{
                $("[id*=sub"+nameid+"]").show();
                $("[id*=sub"+nameid+"]").css("display","block");
            } 
        }
        });
        


