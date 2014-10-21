

<!-- Fixed navbar -->

        <?php

       include('header.php');
        require 'Login.php';
        echo'<blockquote>
  <p>CONTROL ESCOLAR</p>

</blockquote>';
        $login = new Login();
        $login->mostrarFormulario();

        include('footer.php');
       ?>


<!-- Bootstrap core JavaScript
================================================== -->


