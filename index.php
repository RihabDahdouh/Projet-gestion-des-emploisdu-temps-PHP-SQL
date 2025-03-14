<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesmenutest.css">
</head>
<body>
    <p>Ecole Nationale des Sciences Appliquées de Kénitra</p>
    <div class="cont s--inactive">
        <!-- cont inner start -->
        <div class="cont__inner">
          <!-- el start -->
          <div class="el">
            <div class="el__overflow">
              <div class="el__inner">
                <div class="el__bg"></div>
                <div class="el__preview-cont">
                  <button class="el__heading">Espace Etudiant</button>
                </div>
                <div class="el__content">
                  <div class="el__text"><button><a href="affichage_etudiant.php">Emploi de temps</a></button> </div>
                  <div class="el__close-btn"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- el end -->
          <!-- el start -->
          <div class="el">
            <div class="el__overflow">
              <div class="el__inner">
                <div class="el__bg"></div>
                <div class="el__preview-cont">
                  <button class="el__heading">Espace Enseignant</button>
                </div>
                <div class="el__content">
                  <div class="el__text"><button><a href="login.php">Se connecter</a></button> </div>
                  <div class="el__close-btn"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- el end -->
          <!-- el start -->
          <div class="el">
            <div class="el__overflow">
              <div class="el__inner">
                <div class="el__bg"></div>
                <div class="el__preview-cont">
                  <button class="el__heading">Administration</button>
                </div>
                <div class="el__content">
                  <div class="el__text"><button><a href="login.php">Se connecter</a></button> </div>
                  <div class="el__close-btn"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- el end -->
          
        </div>
        <!-- cont inner end -->
      </div>
      <!-- java script -->
      <script type="text/javascript" >
        var $cont = document.querySelector('.cont');
        var $elsArr = [].slice.call(document.querySelectorAll('.el'));
        var $closeBtnsArr = [].slice.call(document.querySelectorAll('.el__close-btn'));

        setTimeout(function() {
        $cont.classList.remove('s--inactive');
        }, 200);

        $elsArr.forEach(function($el) {
        $el.addEventListener('click', function() {
            if (this.classList.contains('s--active')) return;
            $cont.classList.add('s--el-active');
            this.classList.add('s--active');
        });
        });

        $closeBtnsArr.forEach(function($btn) {
        $btn.addEventListener('click', function(e) {
            e.stopPropagation();
            $cont.classList.remove('s--el-active');
            document.querySelector('.el.s--active').classList.remove('s--active');
        });
        });
    </script>
</body>
</html>