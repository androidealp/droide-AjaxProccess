$( function() {
  $.widget('custom.AjaxProccess',{
    options: {
        getUrl: 0,
        getData:0,
        dataReturn:0,
        enableShow:0,
        beforeSend:'',
    },

    _create: function() {
      dataReturn = this.options.dataReturn;
      if(this.options.enableShow == 1)
      {
        this.element.show('slow');
      }
      this._sendAjax(dataReturn, this.element);

   },


   _sendAjax(dataReturn = 0, getElement, myObject = this)
   {

     if(!dataReturn){
       $.ajax({
         url:this.options.getUrl,
         data:this.options.getData,
         method:'POST',
         dataType:'JSON',
         beforeSend:function(){

           //myObject.options.beforeSend

           if(myObject.options.getData == 0)
           {
              getElement.html('aguarde....');
           }

         },
         success:function(data){
           if(typeof data == 'object'){
             getElement.html(data.mensagem);
             if(typeof data.getData != 'undefined'){
                myObject.options.getData = data.getData;
             }

              myObject._sendAjax(data.return,getElement,myObject);
           }// detecto o tipo
         }
       });

     } // fim do if

   }


  });

});
