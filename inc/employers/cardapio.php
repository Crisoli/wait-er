<!DOCTYPE html>
<html width= 100%;>

<head>
    
   <!--Import materialize.css-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
   <!--Let browser know website is optimized for mobile-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
<body>
    <nav>
        <ul class="hide-on-med-and-down">
            <li><a href="#!">First Sidebar Link</a></li>
            <li><a href="#!">Second Sidebar Link</a></li>
        </ul>
        <ul id="slide-out" class="side-nav fixed">
            <li class="bold"><a href="#!" class="waves-effect waves-teal">First Sidebar Link</a></li>
            <li class="bold"><a href="#!" class="">Second Sidebar Link</a></li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header waves-effect waves-teal">Dropdown<i class="mdi-navigation-arrow-drop-down"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#!">First</a></li>
                                <li><a href="#!">Second</a></li>
                                <li><a href="#!">Third</a></li>
                                <li><a href="#!">Fourth</a></li>
                            </ul>
                         </div>
                    </li>
                </ul>
            </li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse">
         <i class="material-icons">menu</i>
         
         
         
         
           <nav>
        <ul class="hide-on-med-and-down">
            <li><a href="#!">First Sidebar Link</a></li>
            <li><a href="#!">Second Sidebar Link</a></li>
        </ul>
        <ul id="slide-out" class="side-nav fixed">
            <li class="bold"><a href="#!" class="waves-effect waves-teal">First Sidebar Link</a></li>
            <li class="bold"><a href="#!" class="">Second Sidebar Link</a></li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header waves-effect waves-teal">Dropdown<i class="mdi-navigation-arrow-drop-down"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#!">First</a></li>
                                <li><a href="#!">Second</a></li>
                                <li><a href="#!">Third</a></li>
                                <li><a href="#!">Fourth</a></li>
                            </ul>
                         </div>
                    </li>
                </ul>
            </li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse">
         <i class="material-icons">menu</i>
  </nav>
  <!--Import jQuery before materialize.js-->
  <script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
  <script>
    $('.button-collapse').sideNav({
        menuWidth: 300, // Default is 240
        closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    });
    $('.collapsible').collapsible();
  </script>
         
         
  </nav>
  <!--Import jQuery before materialize.js-->
  <script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
  <script>
    $('.button-collapse').sideNav({
        menuWidth: 300, // Default is 240
        closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    });
    $('.collapsible').collapsible();
  </script>
</body>


<style type="text/css">
        header, main, footer {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
    }
</style>