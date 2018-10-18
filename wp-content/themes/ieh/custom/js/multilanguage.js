(function($){
   $(document).ready(function(){
       var input = document.createElement("input");
       var token   = $('meta[property=token]').attr('content');
       input.setAttribute("type", "hidden");
       input.setAttribute("name", "_token");
       input.setAttribute("value", token);
       $("#menu-element").append(input);

       // Probably not necessary to use noConflict mode, but I did in fact need it
       // This just replaces the jQuery ($) with (j)
       var j = jQuery.noConflict();

       var appWeb = new Vue({
           el: '#body-pseudelement',
           data: {
               _token: token,
               language: 'pt',
               input_lang: false
           },
           watch: {
               input_lang : function(){
                    var that = this;

                    if(this.input_lang){
                        this.language = 'en';
                    }else{
                        this.language = 'pt';
                    }

                   setTimeout(function(){
                       that.changeLanguage();
                   }, 100);
               }
           },
           methods: {
               changeLanguage : function() {
                   // make AJAX POST call
                   j.ajax({
                       type: "POST",
                       url: urlBase + "/wp-admin/admin-ajax.php",
                       data: {
                           action: 'set_language_site',
                           data: {
                               'lang': this.language
                           }
                       },
                       success: function (response) {
                           console.log(response);
                       },
                       error: function (error) {
                           console.log('There seems to be an error with this search.' + error);
                       }
                   });
               }
           },
           beforeMount: function(){
               if(languageSession !== ''){
                   this.language = languageSession;
                   if(languageSession == 'pt'){
                       this.input_lang = false;
                   }else{
                       this.input_lang = true;
                   }
               }
           },
           created: function(){

           }
       });
   });
})( jQuery );