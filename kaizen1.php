<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kaizen</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
     <link href="http://localhost/board/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link href="css/kaizen1.css" rel="stylesheet" />
  </head>
  <body>
    <div class="header">
      <a href="navigasi.php"><i class="header-left-stack fas fa-bars "></i></a>
      <div class="header-left-stack">KAIZEN TRACKING</div>
    </div>

    <div class="content">
      <div class="content-top">
        <div class="content-left">
          <div class="kaizen-month">
            <div class="title">Last 3 Month</div>
            <div>
              <canvas id="myChart"></canvas>
            </div>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
            // setup 
            const data = {
              labels: ['Jan', 'Feb', 'Mar'],
              datasets: [{
                label: 'Target',
                data: [100, 80, 80],
                backgroundColor: [
                  '#0263FF',
                ],
                borderColor: [
                  '#0263FF',
                ],
                borderWidth: 1,
                barPercentage: 0.9,
                
                categoryPercentage: 0.5
              },
            {
                label: 'Actual',
                data: [50, 70, 60, ],
                backgroundColor: [
                  '#92B6FF',
                ],
                borderColor: [
                  '#92B6FF',
                ],
                borderWidth: 1,
                barPercentage: 0.9,
               
                categoryPercentage: 0.5
              }]
            };

            // config 
            const config = {
              type: 'bar',
              data,
              options: {
                scales: {
                  y: {
                    beginAtZero: true
                  }
                }
              }
            };

            // render init block
            const myChart = new Chart(
              document.getElementById('myChart'),
              config
            );
            </script>
          </div>
        </div>
        <div class="content-right">
          <div class="kaizen-situation">
            <div class="title"> Current Situation </div><br>
             <div class="content-box-data">
              <div class="content-data">
                <div class="content-information">
                  <div class="title-data">Total</div>
                  <div class="title-data">Kaizen</div>
                  <div class="title-data-result">100</div>
                  <div class="title-data">Nearmiss</div>
                  <div class="title-data-result1">50</div>
                </div>
              </div>
              <div class="content-data">
                <div class="content-information">
                  <div class="title-data">Kaizen</div>
                  <div class="title-data">Target</div>
                  <div class="title-data-result">100</div>
                  <div class="title-data">Actual</div>
                  <div class="title-data-result1">50</div>
                </div>
              </div>
              <div class="content-data">
                <div class="content-information">
                  <div class="title-data">Nearmiss</div>
                  <div class="title-data">Target</div>
                  <div class="title-data-result">100</div>
                  <div class="title-data">Actual</div>
                  <div class="title-data-result1">50</div>
                </div>
              </div>
            </div>
          </div>
        </div> 
		  </div>
     
      <div class="content-center">
         <div class="card">
            <div class="card-header">
              <img class="card-header-img" src="img/foto.png">
              <div class="card-header-information">
                Operator 1
              </div>
            </div>
            <hr>
            <div class="card-body">
              <div class="card-body-information">Kaizen title       :  </div>
              <div class="card-body-information">Kaizen Ref.no  :  CSR-14-005-22109</div>
              <div class="card-body-information">Department     :  MCC</div>
              <div class="card-body-information-l2">
                <div class="card-body-information">Week Closed   : 2229</div>
                <div class="card-body-information-ln">Line :  Lot 11</div>
              </div>
            </div>
            <div class="button">
              <button class="btn-view">View</button>
            </div>
         </div>
         <div class="card">
            <div class="card-header">
              <img class="card-header-img" src="img/foto.png">
              <div class="card-header-information">
                Operator 1
              </div>
            </div>
             <hr>
            <div class="card-body">
              <div class="card-body-information">Kaizen title       :  </div>
              <div class="card-body-information">Kaizen Ref.no  :  CSR-14-005-22109</div>
              <div class="card-body-information">Department     :  MCC</div>
              <div class="card-body-information-l2">
                <div class="card-body-information">Week Closed   : 2229</div>
                <div class="card-body-information-ln">Line :  Lot 11</div>
              </div>
            </div>
            <div class="button">
              <button class="btn-view">View</button>
            </div>
         </div>
         <div class="card">
            <div class="card-header">
              <img class="card-header-img" src="img/foto.png">
              <div class="card-header-information">
                Operator 1
              </div>
            </div>
            <hr>
            <div class="card-body">
              <div class="card-body-information">Kaizen title       :  </div>
              <div class="card-body-information">Kaizen Ref.no  :  CSR-14-005-22109</div>
              <div class="card-body-information">Department     :  MCC</div>
              <div class="card-body-information-l2">
                <div class="card-body-information">Week Closed   : 2229</div>
                <div class="card-body-information-ln">Line :  Lot 11</div>
              </div>
            </div>
            <div class="button">
              <button class="btn-view">View</button>
            </div>
         </div>
         <div class="card">
            <div class="card-header">
              <img class="card-header-img" src="img/foto.png">
              <div class="card-header-information">
                Operator 1
              </div>
            </div>
            <hr>
            <div class="card-body">
              <div class="card-body-information">Kaizen title       :  </div>
              <div class="card-body-information">Kaizen Ref.no  :  CSR-14-005-22109</div>
              <div class="card-body-information">Department     :  MCC</div>
              <div class="card-body-information-l2">
                <div class="card-body-information">Week Closed   : 2229</div>
                <div class="card-body-information-ln">Line :  Lot 11</div>
              </div>
            </div>
            <div class="button">
              <button class="btn-view">View</button>
            </div>
         </div>
         
      </div>
       
      <div class="content-bottom"> 
        <div class="content-category">
          <div class="box">
            <img class="box-img" src="img/safety.png" alt="">
            <div class="box-information ">
              <div>Safety</div>
              <div>2</div>
            </div>
          </div>
        </div>
        <div class="content-category">
          <div class="box">
            <img class="box-img" src="img/trans.png" alt="">
            <div class="box-information ">
              <div>Transportasi</div>
              <div>2</div>
            </div>
          </div>
        </div>
        <div class="content-category">
          <div class="box">
            <img class="box-img" src="img/inven.png" alt="">
            <div class="box-information ">
              <div>Inventory</div>
              <div>2</div>
            </div>
          </div>
        </div>
        <div class="content-category">
          <div class="box">
            <img class="box-img" src="img/motion.png" alt="">
            <div class="box-information">
              <div>Motion</div>
              <div>2</div>
            </div>
          </div>
        </div>
        <div class="content-category">
          <div class="box">
            <img class="box-img" src="img/wait.png" alt="">
            <div class="box-information">
              <div>Waiting</div>
              <div>2</div>
            </div>
          </div>
        </div>
        <div class="content-category">
          <div class="box">
            <img class="box-img" src="img/product.png" alt="">
            <div class="box-information">
              <div>O.Product</div>
              <div>2</div>
            </div>
          </div>
        </div>
        <div class="content-category">
          <div class="box">
            <img class="box-img" src="img/process.png" alt="">
            <div class="box-information">
              <div>O.Process</div>
              <div>2</div>
            </div>
          </div>
        </div>
        <div class="content-category">
          <div class="box">
            <img class="box-img" src="img/defect.png" alt="">
            <div class="box-information">
              <div>Defect</div>
              <div>2</div>
            </div>
          </div>
        </div>
        <div class="content-category">
          <div class="box">
            <img class="box-img" src="img/skill.png" alt="">
            <div class="box-information">
              <div>Skill</div>
              <div>2</div>
            </div>
          </div>
        </div>
      </div>
		</div>
  </body>
</html>