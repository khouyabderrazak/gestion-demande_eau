<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>laravel</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/sty.css">
        <link rel="icon" href="/images/royaumedumaroc.png">
        <link rel="stylesheet" href="/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500&family=Roboto:ital,wght@0,100;0,300;0,400;1,500&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;1,300;1,400&display=swap" rel="stylesheet">
    </head>
    <body>
        <script src="/js/jquery.js"></script>
        <nav class="navbar  nv1 navbar-expand-lg ">
            <div class="container">
            <a class="navbar" href="#">
                <img src="images/royaumedumaroc.png" alt="" width="100" height="100" class="text-left">
            </a>
            <div style="text-align:center;">
                <h2 >Service Provaincial</h2>
                <br>
                <h3>de l'eau de Safi</h3>
            </div>
            <a class="navbar" href="#">
                <img src="images/logo.png" alt="" width="50" height="50" class="text-right">
            </a>
            </div>
        </nav>

    <div class="text-center" style="margin-top:200px;">
        <h1>{{ $d[0]->id }} : رقم الملف </h1>
        <div class="head">
            <h3>المملكة المغربية </h3>
            <h3>وزارة التجهيز و النقل و اللوجيستيك و الماء </h3>
            <h3>المديرية الٍاقليمية للتجهيز و النقل و اللوجيستيك و الماء باً سفي</h3>
            <h3>المصلحة الاٍقليمية للماء باًسفي</h3><br>
        </div><br>

        <div class="text-center">
            <h4>{{ $d[0]->nom }} {{ $d[0]->prenom }} :     يشهد  رئيس  المصلحة  الاٍقليمية ان السيد </h4>
            <h4>{{ $d[0]->cin }} :   حامل  للبطاقة  الوطنية </h4>
            <h4>{{ $d[0]->created_at }} :  قد وضع  لذا هذه  المصلحة بتاريخ  </h4>

        </div>
        <p class="Nb">ملحوضة : هذا الوصل يثبت فقط إيداع ملف الترخيص لايمكن اعتباره ترخيصا بحفر اًو جلب ماء</p>

</div>

    <div class="" style="margin-top:200px;" >
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" >
          <div class="col-md-4 d-flex text-center" >
            <span class="ps-5" >{{ __('.15') }}</span>
          </div>
          <div class="col-md-4 d-flex align-items-center text-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-decoration-none ">
                {{ __('index.3') }}
            </a>
          </div>

          <ul class="nav col-md-4 d-flex text-center">
            <li class="ms-3 ps-5"><a class="" href="#"><i class="fab fa-instagram" style="color: black"></i></a></li>
            <li class="ms-3 ps-5"><a class="" href="#"><i class="fab fa-twitter" style="color: black"></i></a></li>
            <li class="ms-3 ps-5"><a class="" href="#"><i class="fab fa-facebook" style="color: black"></i></a></li>
          </ul>
        </footer>
    </div>
        <script src="/js/bootstrap.bundle.min.js"></script>
        <script src="/js/all.min.js"></script>

    </body>
</html>
