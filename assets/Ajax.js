$( function() {

  $.fn.droideProcess = function(options) {

    defaults = {
      getUrl: 0,
      getData:0,
      enableShow:0,
      element:0,
      method:'post',
      beforeSend:function(){
      },
    };

    var settings = $.extend(defaults, options );
    settings.element = this;
    if(settings.enableShow == 1)
      {
        settings.element.show('slow');
      }
      _sendAjax(settings, settings.element);


  };


  function _sendAjax(settings = {}, myObject = this)
  {

    if(!settings.getData.stopExec){

      $.ajax({
        url:settings.getUrl,
        data:settings.getData,
        method:settings.method,
        dataType:'JSON',
        beforeSend:settings.beforeSend.call(myObject),
        success:function(data){
          if(typeof data == 'object'){
            myObject.html(data.mensagem);
            if(typeof data.getData != 'undefined'){
               settings.getData  = data.getData;
               console.log(settings.getData.stopExec);
            }else{
              console.log(data);
            }

             _sendAjax(settings,myObject);
          }// detecto o tipo
        }
      });

    } // fim do if

  }

});
