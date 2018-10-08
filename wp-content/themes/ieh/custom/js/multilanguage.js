(function($){
   $(document).ready(function(){
       var input = document.createElement("input");
       var token   = $('meta[property=token]').attr('content');
       input.setAttribute("type", "hidden");
       input.setAttribute("name", "_token");
       input.setAttribute("value", token);
       $("#menu-element").append(input);

       var appWeb = new Vue({
           el: '#body-pseudelement',
           data: {
               _token: token,
               language: 'pt',
               input_lang: false,
           },
           watch: {
               input_lang : function(){
                    if(this.input_lang){
                        this.language = 'en';
                    }else{
                        this.language = 'pt';
                    }
               }
           },
           methods: {
               changeLanguage : function(event){
                   // make AJAX POST call
                   $.ajax({
                       type: 'POST',
                       url: 'wp-admin.php?wp_ajax_language_set_session',
                       data: {
                           'lang' : this.language
                       },
                       success: function (response) {
                           console.log(response);
                       }
                   });
               }
           }
       });
   });
})( jQuery );