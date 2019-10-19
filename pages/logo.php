<div class="row align-items-center justify-content-center">
  <div class="col-sg">
    <img class="logo" src="images/logo.png">
  </div>  
</div>




<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<div class="menu-overlay"></div>
<div class="menu-opening">
  <a href="#" class="menu-open">
    <i class="fas fa-bars fa-3x" style="color:white"></i>
  </a>
</div>







<div class="side-menu-wrapper" >
  <ul>
    <li>
      <a href="index.php" rel="nofollow" style="color: white;">
        Início</br>
        <div class="libras">Início</div>
      </a>
    </li>
    <li>
      <a id="clickShow" data-toggle="modal" data-target="#modalTutorial" style="cursor: pointer;color: white">
        Tutorial</br>
        <span class="libras">Tutorial</span>
      </a>
    </li>    
    <li>
      <a id="clickShow" data-toggle="modal" data-target="#modalCreditos" style="cursor: pointer;color: white">
        Créditos<br>
        <span class="libras">Créditos</span>
      </a>
    </li>
    <li>
      <a href="app/LibrasGame.apk" rel="nofollow" style="color: white;">
        Download</br>
        <span class="libras">Download</span>
      </a>
    </li>
    <li>
      <a href="play.php" rel="nofollow" style="color: white;">
        Voltar</br>
        <span class="libras">Voltar</span>
      </a>
    </li>
  </ul>
</div>


<style type="text/css">
  .menu-opening{
    position: absolute;
    top: 5px;
    left: 5px;
    padding: 4px 7px 4px 7px;
    border-radius: 3px;
    width: auto;
    color: white;
    background-image: url('images/nums/black_bg_nums.png');
    background-position: center center;
    background-color: #011747;
  }
  .side-menu-wrapper { /* style menu wrapper */
  background: rgba(0,0,0,.90);
  padding: 40px 0 0 40px;
  position: fixed; /* Fixed position */
  top: 0;
  right: 0; /* Sidebar initial position. "right" for right positioned menu */
  height: 100%;
  z-index: 2;
  transition: 0.5s; /* CSS transition speed */
  width: 250px;
  font: 30px "Courier New", Courier, monospace;
  box-sizing: border-box;
}
.side-menu-wrapper > ul{ /* css ul list style */
  list-style:none;
  padding:0;
  margin:0;
    overflow-y: auto; /* enable scroll for menu items */
  height:95%;
}
.side-menu-wrapper > ul > li > a { /* links */
    display: block;
    border-bottom: 1px solid #131313;
    padding: 6px 4px 6px 4px;
    transition: 0.3s;
  text-decoration: none;
}
.side-menu-wrapper > a.menu-close { /* close button */
    padding: 8px 0 4px 23px;
    display: block;
    margin: -30px 0 -10px -20px;
    font-size: 35px;
    text-decoration: none;
}

.menu-overlay { /* overlay */
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgba(0,0,0,.7);
    overflow-y: auto;
    overflow-x: hidden;
    text-align: center;
    opacity: 0;
    transition: opacity 1s;
}
</style>

<script type="text/javascript">
  var slide_wrp     = ".side-menu-wrapper"; //Menu Wrapper
var open_button   = ".menu-open"; //Menu Open Button
var close_button  = ".menu-close"; //Menu Close Button
var overlay     = ".menu-overlay"; //Overlay

//Initial menu position
$(slide_wrp).hide().css( {"right": -$(slide_wrp).outerWidth()+'px'}).delay(50).queue(function(){$(slide_wrp).show()}); 

$(open_button).click(function(e){ //On menu open button click
  e.preventDefault();
  $(slide_wrp).css( {"right": "0px"}); //move menu right position to 0
  setTimeout(function(){
    $(slide_wrp).addClass('active'); //add active class
  },50);
  $(overlay).css({"opacity":"1", "width":"100%"});
});

$(close_button).click(function(e){ //on menu close button click
  e.preventDefault();
  $(slide_wrp).css( {"right": -$(slide_wrp).outerWidth()+'px'}); //hide menu by setting right position 
  setTimeout(function(){
    $(slide_wrp).removeClass('active'); // remove active class
  },50);
  $(overlay).css({"opacity":"0", "width":"0"});
});

$(document).on('click', function(e) { //Hide menu when clicked outside menu area
  if (!e.target.closest(slide_wrp) && $(slide_wrp).hasClass("active")){ // check menu condition
    $(slide_wrp).css( {"right": -$(slide_wrp).outerWidth()+'px'}).removeClass('active');
    $(overlay).css({"opacity":"0", "width":"0"});
  }
});
</script>