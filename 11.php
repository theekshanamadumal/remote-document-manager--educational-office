<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Salary increments</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
  </head>
  <body>
    <?php include_once("inc/head.php"); ?>
    <?php include_once("inc/ArticalHead.php"); ?>
      <div class="container-fluid text-left">
      <div class="row content">
        <div class="col-sm-1 sidenav"></div>
        <div class="col-sm-11 sidenav">
          <h3>වැටුප් වර්ධක අනුමත කිරීමේ සේවාව</h3>

          <div>
              
            <h4 class="bg-primary" style="width: 700px;">
              සම්පූර්ණ කල යුතු මූලික සුදුසුකම්
            </h4>
            
            <ol>
              <li style="width: 600px;">කාර්ය සාධනය යහපත් මට්ටමක පැවතීම හා කාර්ය සාධන ආකෘති පත්‍ර සම්පූර්ණ කර තිබීම</li>
              <li style="width: 600px;">විදුහල්පතිගේ/කොට්ඨාස අධ්‍යාපන අධ්‍යක්ෂකගේ නිර්දේශය</li>
              <li style="width: 600px;">
                වෛද්‍ය වාර්ථාව සම්පූර්ණ වී තිබීම</br>
                -පළමු වර්ධකය සඳහා
              </li>
              <li style="width: 600px;">
                පරිවාස කාලය ස්ථිර වී තිබීම</br>
                -තුන්වන වර්ධකය සඳහා
              </li>
              <li style="width: 600px;">
                අදාල නිළධාරියාට එරෙහිව විනයානුකූලව කටයුතු කර නොතිබීම
              </li>
              
            </ol>
          </div>
          
          <div>
            <h4 class="bg-primary" style="width: 700px;">අදාල අංශය</h4>
            <p>
                <mark>ගුරු ආයතන ශාඛාව</mark>
              </p>
              <p>
              <mark>සාමාන්‍ය පාලන ශාඛාව</mark>
                
              </p>
          </div>
          <div>
            <h4 class="bg-primary" style="width: 700px;">
              සේවාව ලබාදීමට ගතවන කාලය
            </h4>
          </div>
          <div><p>දින 01</p></div>
          <div>
             <form method="post">
              <input type="submit" name="Request" class="button" value="Request" />
            </form>
            <?php
              global $variable;
              $variable = 11;
              include_once('inc/request.php');
            ?>
          </div>
        </div>
      </div>
    </div>
    <?php include_once('inc/foot.php'); ?>
  </body>
</html>
