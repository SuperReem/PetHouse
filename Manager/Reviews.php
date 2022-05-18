<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews | Admin</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
    <script src="https://kit.fontawesome.com/e920294da5.js" crossorigin="anonymous"></script>
    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <!--External CSS-->
    <link rel="stylesheet" href="Style/Reviews.css">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<script>

     function show(){
         document.getElementById("div").style.display ='block';
      }
      function closeDiv(){
         document.getElementById("div").style.display ='none';
      }
      

</script>
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            
            <div class="col py-3 pt-5 ps-5">
            <?php include 'PHP/ManagerReviews.php'?>
                <div class="card w-100 pb-3" style="box-shadow: 1px 1px 15px 1px #ebebeb; border:none;border-radius:25px; padding: 4px;">
                    <div class="card-body">
                      <h5 class="card-title pb-3"> <i class="fa-solid fa-user" style="padding-right: 10px;" onclick="show()"></i>Noura</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <div>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star" style="color: gray;"></i>
                      </div>
                    </div>
                  </div>

                  <div class="pb-3"></div>
                  <div class="card w-100 pb-3" style="box-shadow: 1px 1px 15px 1px #ebebeb; border:none;border-radius:25px; padding: 4px;">
                    <div class="card-body">
                      <h5 class="card-title pb-3"> <i class="fa-solid fa-user" style="padding-right: 10px;" onclick="show()"></i>Mark</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <div>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star" style="color: gray;"></i>
                      </div>
                    </div>
                  </div>
                  <div class="pb-3"></div>
                  <div class="card w-100 pb-3" style="box-shadow: 1px 1px 15px 1px #ebebeb; border:none;border-radius:25px; padding: 4px;">
                    <div class="card-body">
                      <h5 class="card-title pb-3"> <i class="fa-solid fa-user" style="padding-right: 10px;" onclick="show()"></i>Ghada</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <div>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star" style="color: gray;"></i>
                      </div>
                    </div>
                  </div>
                  <div class="pb-3"></div>
                  <div class="card w-100 pb-3" style="box-shadow: 1px 1px 15px 1px #ebebeb; border:none;border-radius:25px; padding: 4px;">
                    <div class="card-body">
                      <h5 class="card-title pb-3"> <i class="fa-solid fa-user" style="padding-right: 10px;" onclick="show()"></i>Raya</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <div>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star" style="color: gray;"></i>
                      </div>
                    </div>
                  </div> 
                  
                  <div class="pb-3"></div>
                  <div class="card w-100 pb-3 b-none" style="box-shadow: 1px 1px 15px 1px #ebebeb; border:none;border-radius:25px; padding: 4px;">
                    <div class="card-body">
                      <h5 class="card-title pb-3"> <i class="fa-solid fa-user" style="padding-right: 10px;" onclick="show()"></i>Reem</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <div>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star" style="color: gray;"></i>
                      </div>
                    </div>
                  </div>
            </div>        
        </div>
    </div>   
</body>
</html>