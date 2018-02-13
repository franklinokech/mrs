/* Scipt to check if the page has jquery enabled*/
 
  window.onload = function() {
    if (window.jQuery) {  
        // jQuery is loaded  
        alert("Yeah!");
    } else {
        // jQuery is not loaded
        alert("Doesn't Work");
    }
}
/*End of script to verify jquery*/
