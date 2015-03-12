var myAjax = function(){
    this.httpRequest;
    this.makeRequestObject = function(){
        if(window.XMLHttpRequest){
            this.httpRequest = new XMLHttpRequest();
        }
        if(!httpRequest){
            console.log("Cannot create XMLHTTP instance");
            return false;
        }
    
    }


    


}