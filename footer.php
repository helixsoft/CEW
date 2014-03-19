		<footer>
            <div class="container">
                <div class="five columns">
                    <nav class="footer_nav">
                        <li><a href="#">About</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Industry News</a></li>
                        <li><a href="#">Policy</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </nav>
                </div>
                <div class="offset-by-seven four columns"><p>&copy; 2011 Commitment Engineering Works.</p></div>
            </div>
        </footer>
         <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true&language=en"></script>
         <script src="<?php echo THEMEROOT?>/js/owl.carousel.min.js"></script>
        <script src="<?php echo THEMEROOT?>/js/main.js"></script>
        <script type="text/javascript">
        jQuery(document).ready(function($) {
            /* placeholder fix for older browser */
            if( !Modernizr.csstransforms3d ) {
                  $('[placeholder]').focus(function() {
                        var input = $(this);
                        if (input.val() == input.attr('placeholder')) {
                              input.val('');
                              input.removeClass('placeholder');
                        }
                  }).blur(function() {
                        var input = $(this);
                        if (input.val() == '' || input.val() == input.attr('placeholder')) {
                              input.addClass('placeholder');
                              input.val(input.attr('placeholder'));
                        }
                  }).blur().parents('form').submit(function() {
                        $(this).find('[placeholder]').each(function() {
                              var input = $(this);
                              if (input.val() == input.attr('placeholder')) {
                                    input.val('');
                              }
                        })
                  });
            }
            

            /* form processing */
            $("#contact-form").submit(function(){
                  
                  $(this).find('[placeholder]').each(function() {
                        
                        var input = $(this);
                        if (input.val() == input.attr('placeholder')) {
                              input.val('');
                        }
                        
                  });
                  
                  var processor = "<?php echo get_template_directory_uri(); ?>/contact.php",
                        str = $(this).serialize();
                  
                  $("#contact-form .success-message, #contact-form .alert-message, #contact-form .error-message ").hide();
                  
                  $.ajax({
                           
                     type: "POST",
                     url: processor,
                     data: str,
                     success: function(data) {
                              
                              //console.log(data);
                              $("#contact-form").append('<span class="feedback"></span>');
                                                   
                              if(data === 'OK') {
                              
                                    $("#contact-form .success-message").fadeIn();
                                    $("#contact-form").each(function(){
                                          this.reset();
                                    });
                                
                              } else if (data === 'ERROR') {
                              
                                    $("#contact-form .error-message").fadeIn();
                              
                              } else {
                                    
                                    $("#contact-form .alert-message").fadeIn().html( data );
                                    
                              }
                           
                     }
                           
                  });
            
                  return false;
                  
            });
        });
        </script>
<?php wp_footer();?>
</body>
</html>