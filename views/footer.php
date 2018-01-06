

<?php
/*
Script to display footer
 */
  $start_year = '2018';    // Date your site was created
  $curr_year  = date('Y'); // The current year

  // A one-liner to determine if the copyright is a single year or a range
  $copyright = ($curr_year > $start_year) ? $start_year . '-' . $curr_year : $start_year;
?>
<footer>
  Copyright &copy; <?php echo $copyright; ?> Kenya MRS
</footer>
