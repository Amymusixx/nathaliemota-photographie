<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
      $(document).ready(function(){
        $("#ref").val("<?php the_field('reference');?>");
      });
    </script>
<!-- The Modal -->
<div id="myModal" class="modal animate__animated">

  <!-- Modal content -->
  <div class="modal-content">
    <div><img class="img-modale" src=<?php echo get_stylesheet_directory_uri() . '/assets/images/contact-header.png' ?>>
</div>
   <div><?php echo do_shortcode('[contact-form-7 id="76b6ff6" title="Contact"]') ?></div>
   <span class="modal-close">&times;</span>
  </div>

</div>