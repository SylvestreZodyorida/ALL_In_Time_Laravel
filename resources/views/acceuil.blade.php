@extends("layouts.master")

@section("contenu")
<br><br><br><br><br><br>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

  <div class="container marketing">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">All in Time 💡 : <span class="text-muted">Ce que vous pouvez faire.</span></h2>
        <p class="lead">
            ✅ Définir une liste d'activités à faire plus tard <br>
            ✅ Concevoir un programme de réalisation de vos tâches dans la semaine <br>
            ✅ Lancer un compte à rebour pour un évènement à venir
        </p>
      </div>
      <div class="col-md-5">
        <img class="acc_img" src="{{asset('img/checklist-1622517_1920.png')}}" alt="">
      </div>
    </div>

    <!--hr class="featurette-divider"-->

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">All in Time 💡 : <span class="text-muted">Rester informer .</span></h2>
        <p class="lead">
            ✅ Recevoir les derniers nouvelles d'ici et d'ailleurs <br>
            ✅ Envoyer et recevoir des messages <br>
        </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="acc_img1" src="{{asset('img/news-1644686_1280.png')}}" alt="">
      </div>
    </div>


    <div class="row featurette">
      <div class="col-md-7 p">
        <h2 class="featurette-heading fw-normal lh-1">All in Time 💡 : <span class="text-muted">Jour d'anniversaire.</span></h2>
        <p class="lead">
            ✅ Recevoir des notifiations le jour de l'anniversaire d'un contact <br>
            ✅ Envoyer des messages personnalisés ou automatiques <br>
        </p>
      </div>
      <div class="col-md-5">
        <img class="acc_img" src="{{asset('img/happy-birthday-1591223_1280.png')}}" alt="">
      </div>
      
    </div>
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">All in Time 💡 : <span class="text-muted">C'est la fête ! .</span></h2>
        <p class="lead">
            ✅ Restez n'importe oû et vivez pleinement des moments de fêtes <br>
            ✅ Découvrez et vivez en temps réel  <br>
        </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="acc_img1" src="{{asset('img/anniversary-157248_1280.png')}}" alt="">
      </div>
    </div>
    <div class="row featurette">
      <div class="col-md-7 p">
        <h2 class="featurette-heading fw-normal lh-1">All in Time 💡 : <span class="text-muted">Messagerie.</span></h2>
        <p class="lead">
            ✅ Envoyez et recevez des messages en temps réel <br>
            ✅ Restez connecté pour rester informé <br>
        </p>
      </div>
      <div class="col-md-5">
        <img class="acc_img" src="{{asset('img/cloud-709105_1920.png')}}" alt="">
      </div>
      
    </div>
  </div><!-- /.container -->

</div>


<br><!--{{asset('img/blog9.jpg')}}-->
