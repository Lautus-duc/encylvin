<div class="row">  
    <div  class="card-panel green lighten-2">
      <h1> <a href="/index.php" ><img src="logo_Encylvin.jpg" style="width:70px;height:90px;"> </a>
        <span class="green-text text-darken-4 "><?php echo "ncylvin" ?></span></h1>
              
              <!-- Dropdown Trigger -->
            <a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Menu !</a>

              <!-- Dropdown Structure -->
            <ul id='dropdown1' class='dropdown-content'>
              </li><li><a href="#!"><img src="logo_encylvin_menu.jpg" style="width:50px;height:50px;"></a></li>
              <li><a href="#!">two</a></li>
              <li class="divider" tabindex="-1"></li>
              <li><a href="#!">three</a></li>
              <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
              <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
            </ul>
        
    </div> 
</div>
<script type="text/javascript">
   M.AutoInit();
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });
</script>