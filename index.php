<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>IOT Smart Home</title>
   <style>
      .bg-white {
         background-color: #fff !important;
      }

      .center {
         text-align: center;
      }
   </style>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="background-color: #1e1e1e;">
   <div class="container-fluid vh-100 pt-5">
      <h1 class="text-uppercase text-white text-center py-5">smart home</h1>
      <div class="container mt-4">
         <div class="row justify-content-center rounded p-2 bg- text-white text-center">
            <h2 class="text-capitalize p-2 col">
               <svg class="mr-2" fill="#fff" width="64px" height="64px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
               <!-- <title>temperature-three-quarters</title> -->
               <path d="M20.75 6.008c0-6.246-9.501-6.248-9.5 0v13.238c-1.235 1.224-2 2.921-2 4.796 0 3.728 3.022 6.75 6.75 6.75s6.75-3.022 6.75-6.75c0-1.875-0.765-3.572-2-4.796l-0.001-0zM16 29.25c-2.9-0-5.25-2.351-5.25-5.251 0-1.553 0.674-2.948 1.745-3.909l0.005-0.004 0.006-0.012c0.13-0.122 0.215-0.29 0.231-0.477l0-0.003c0.001-0.014 0.007-0.024 0.008-0.038l0.006-0.029v-13.52c-0.003-0.053-0.005-0.115-0.005-0.178 0-1.704 1.381-3.085 3.085-3.085 0.060 0 0.12 0.002 0.179 0.005l-0.008-0c0.051-0.003 0.11-0.005 0.17-0.005 1.704 0 3.085 1.381 3.085 3.085 0 0.063-0.002 0.125-0.006 0.186l0-0.008v13.52l0.006 0.029 0.007 0.036c0.015 0.191 0.101 0.36 0.231 0.482l0 0 0.006 0.012c1.076 0.966 1.75 2.361 1.75 3.913 0 2.9-2.35 5.25-5.25 5.251h-0zM16.75 21.367v-11.522c0-0.414-0.336-0.75-0.75-0.75s-0.75 0.336-0.75 0.75v0 11.522c-1.164 0.338-2 1.394-2 2.646 0 1.519 1.231 2.75 2.75 2.75s2.75-1.231 2.75-2.75c0-1.252-0.836-2.308-1.981-2.641l-0.019-0.005zM26.5 2.25c-1.795 0-3.25 1.455-3.25 3.25s1.455 3.25 3.25 3.25c1.795 0 3.25-1.455 3.25-3.25v0c-0.002-1.794-1.456-3.248-3.25-3.25h-0zM26.5 7.25c-0.966 0-1.75-0.784-1.75-1.75s0.784-1.75 1.75-1.75c0.966 0 1.75 0.784 1.75 1.75v0c-0.001 0.966-0.784 1.749-1.75 1.75h-0z"></path>
               </svg>
               Temperature : <span class="text-uppercase" id="state-temp"></span> °C
            </h2>
            <h2 class="text-capitalize p-2 col">
               <svg class="mr-2" fill="#fff" width="64px" height="64px" viewBox="0 0 32 32" id="icon" xmlns="http://www.w3.org/2000/svg">
               <defs>
                  <style>
                     .cls-1 {
                     fill: none;
                     }
                  </style>
               </defs>
               <title>humidity--alt</title>
               <path d="M26,12a3.8978,3.8978,0,0,1-4-3.777,3.9017,3.9017,0,0,1,.6533-2.0639L25.17,2.4141a1.0381,1.0381,0,0,1,1.6592,0L29.3154,6.11A3.9693,3.9693,0,0,1,30,8.223,3.8978,3.8978,0,0,1,26,12Zm0-7.2368L24.3438,7.2257A1.89,1.89,0,0,0,24,8.223a2.0139,2.0139,0,0,0,4,0,1.98,1.98,0,0,0-.375-1.0466Z" transform="translate(0)"/>
               <path d="M23.5,30H8.5A6.4962,6.4962,0,0,1,7.2,17.1381a8.9938,8.9938,0,0,1,17.6006,0A6.4964,6.4964,0,0,1,23.5,30ZM16,12a7,7,0,0,0-6.9414,6.1452l-.0991.8122-.8155.064A4.4962,4.4962,0,0,0,8.5,28h15a4.4962,4.4962,0,0,0,.3564-8.9786l-.8154-.064-.0986-.8122A7.0022,7.0022,0,0,0,16,12Z" transform="translate(0)"/>
               <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" class="cls-1" width="32" height="32"/>
               </svg>
               Humidity : <span class="text-uppercase" id="state-humidity"></span> %
            </h2>
         </div>
         <div class="row mt-4">


            <div class="rounded bg- col-12 py-5">
               <div class="d-flex flex-wrap justify-content-center col-12 mx-auto">
                  <div class="border rounded p-4 m-3 col-12 col-md-3 bg-white text-center">
                     <p>Status</p>
                     <h2 class="text-capitalize">
                        lampu 1 : <span class="text-uppercase" id="state-lampu1"></span>
                     </h2>
                  </div>
                  <div class="border rounded p-4 m-3 col-12 col-md-3 bg-white text-center">
                     <p>Status</p>
                     <h2 class="text-capitalize">
                        lampu 2 : <span class="text-uppercase" id="state-lampu2"></span>
                     </h2>
                  </div>
                  <!-- <div class="border rounded p-2 m-3 col-12 col-md-3 bg-white text-center">
                     <h2 class="text-capitalize p-2">
                        lampu 3 : <span class="text-uppercase" id="state-lampu3"></span>
                     </h2>
                  </div> -->
                  <div class="border rounded p-4 m-3 col-12 col-md-3 bg-white text-center">
                     <p>Status</p>
                     <h2 class="text-capitalize">
                        pintu : <span class="text-uppercase" id="state-pintu"></span>
                     </h2>
                  </div>
                  <!-- <div class="border rounded p-2 m-3 col-12 col-md-3 bg-white text-center">
                     <h2 class="text-capitalize p-2">
                        pagar : <span class="text-uppercase" id="state-pagar"></span>
                     </h2>
                  </div> -->
               </div>
            </div>
         </div>
         <div class="row" style="margin-top: 20px">
            <p class="row mx-auto text-white">Switch</p>
            <div class="rounded d-flex flex-wrap justify-content-center col-12 bg- py-2">

               <div class="rounded p-2 m-2 text-center">
                  <button class="btn btn-primary btn-lg text-capitalize" id="btn-lampu1">lampu 1</button>
               </div>
               <div class="rounded p-2 m-2 text-center">
                  <button class="btn btn-primary btn-lg text-capitalize" id="btn-lampu2">lampu 2</button>
               </div>
               <!-- <div class="rounded p-2 m-2 text-center">
                  <button class="btn btn-primary btn-lg text-capitalize" id="btn-lampu3">lampu 3</button>
               </div> -->
               <div class="rounded p-2 m-2 text-center">
                  <button class="btn btn-primary btn-lg text-capitalize" id="btn-pintu">pintu</button>
               </div>
               <!-- <div class="rounded p-2 m-2 text-center">
                  <button class="btn btn-primary btn-lg text-capitalize" id="btn-pagar">pagar</button>
               </div> -->
            </div>
         </div>
      </div>
   </div>
   </div>



   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

   <script>
      $(document).ready(function() {
         let link = "http://localhost/moduliot/getindicator.php"
         let linkupdate = "http://localhost/moduliot/updatedata.php?indikator="

         $("#btn-pagar").on("click", function() {
            $.get(linkupdate + 'pagar');
         });
         $("#btn-pintu").on("click", function() {
            $.get(linkupdate + 'pintu');
         });
         $("#btn-lampu1").on("click", function() {
            $.get(linkupdate + 'lampu1');
         });
         $("#btn-lampu2").on("click", function() {
            $.get(linkupdate + 'lampu2');
         });
         $("#btn-lampu3").on("click", function() {
            $.get(linkupdate + 'lampu3');
         });

         function getData() {
            $.getJSON(link,
               function(data, textStatus, jqXHR) {
                  let statePagar = data.pagar
                  // console.log(statePagar);
                  if (statePagar == 0) {
                     $("#state-pagar").html("off");
                  } else {
                     $("#state-pagar").html("on");
                  }

                  let statePintu = data.pintu
                  // console.log(statePintu);
                  if (statePintu == 0) {
                     $("#state-pintu").html("off");
                  } else {
                     $("#state-pintu").html("on");
                  }

                  let stateLampu1 = data.lampu1
                  // console.log(stateLampu1);
                  if (stateLampu1 == 0) {
                     $("#state-lampu1").html("off");
                  } else {
                     $("#state-lampu1").html("on");
                  }

                  let stateLampu2 = data.lampu2
                  // console.log(stateLampu2);
                  if (stateLampu2 == 0) {
                     $("#state-lampu2").html("off");
                  } else {
                     $("#state-lampu2").html("on");
                  }
                  let stateLampu3 = data.lampu3
                  // console.log(stateLampu3);
                  if (stateLampu3 == 0) {
                     $("#state-lampu3").html("off");
                  } else {
                     $("#state-lampu3").html("on");
                  }

               }
            );
         }

         function dht() {
            $.getJSON("http://localhost/moduliot/getdht.php",
               function(data, textStatus, jqXHR) {
                  const temp = data.temp
                  const humidity = data.humidity
                  $("#state-temp").html(temp);
                  $("#state-humidity").html(humidity);
               }

            )
         }

         setInterval(() => {
            getData()
            dht()
         }, 500);
      });
   </script>

</body>

</html>