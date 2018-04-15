<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>jQuery UI Autocomplete functionality</title>
   <link href="<?php echo base_url('assets'); ?>/plugins/jqueryui/jquery-ui.min.css" rel="stylesheet">
   <script src="<?php echo base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
   <script src="<?php echo base_url('assets'); ?>/plugins/jqueryui/jquery-ui.min.js"></script>
   <!-- Javascript -->
   <script>
      $(function() {
         // var availableTutorials = [
         // "ActionScript",
         // "Boostrap",
         // "C",
         // "C++",
         // ];
         var kota = [
         {"label":"Cianjur"},{"label":"Cianjur"},{"label":"Bandung"},{"label":"Jakarta"},{"label":"Bali"}
         ];
         $( "#automplete-2" ).autocomplete({
            source: kota,
            autoFocus:true
         });
      });
   </script>
</head>
<body>
   <!-- HTML --> 
   <div class="ui-widget">
      <p>Type "a" or "s"</p>
      <label for="automplete-2">Tags: </label>
      <input id="automplete-2">
   </div>
</body>
</html>