
      <?php
          if ($_POST['username'] == "bymikiii" && $_POST['password'] == "1234"){
            echo "Uspesne prihlaseny!<br>";
            $username = $_POST['username'];
            echo "Vitaj ".$username."!";
          } else {
            echo "Nespravne meno alebo heslo!";
            header('Location: Login.php');
          }
      ?>
