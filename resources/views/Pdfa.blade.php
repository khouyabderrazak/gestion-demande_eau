<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- <link rel="stylesheet" type="text/css" href="css/sty.css"> --}}
  <link rel="icon" href="/images/royaumedumaroc.png">
  <title>Document</title>
</head>
<body>
    <div style="padding-top:50px;">
          <div  style="text-align:center;">
             <h1>{{ $numero }} : رقم الملف </h1>  
          </div>
          <div style="text-align:center;" >
                <h3>المملكة المغربية </h3>
                <h3>وزارة التجهيز و النقل و اللوجيستيك و الماء </h3>
                <h3>المديرية الٍاقليمية للتجهيز و النقل و اللوجيستيك و الماء باً سفي</h3>
                <h3>المصلحة الاٍقليمية للماء باًسفي</h3><br>
          </div>
           
           <br>

            <div style="text-align:center;">
                <h4 lang="ar">{{ $nom }} {{ $prenom }} :      ان السيد </h4>
                <h4>{{ $cin }} :   حامل  للبطاقة  الوطنية </h4>
                <h4>{{ $created_at}} :  قد وضع  لذا هذه  المصلحة بتاريخ  </h4>
            </div>
            <br>
            <p style="text-align: center;">ملحوضة : هذا الوصل يثبت فقط إيداع ملف الترخيص لايمكن اعتباره ترخيصا بحفر اًو جلب ماء</p>
            <img src="images/tempot1.png" class="" alt="" width="500" height="200"  style="">

        </div> 
        <br>
          <div  style="margin-top:150px;position:fixed;bottom:0;" >
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" >
               <div class="col-md-4 d-flex text-center" >
                 <span class="ps-5" >{{ __('index.15') }}</span>
               </div>
              <div class="col-md-4 d-flex align-items-center text-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-decoration-none ">
                    {{ __('index.3') }}
                </a>
              </div>
            </footer>
        </div>
     </body>
</html>