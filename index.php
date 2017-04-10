<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DevOps Assessment Tool</title>


    <!-- Bootstrap stuff -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">DevOps Assessment Tools</a>
            </div>
        </nav>

    </div>

     <div class="container">
    
      <!--<div class="table-responsive">-->
        
        <table cellpadding="0" cellspacing="0" border="0">
       
            <thead class="tbl-header">
            <tr>
              <th><span>Levels</span></th>
              <td></td>
              <th>Continuous Integration</th>
              <td></td>
              <th>Automation</th>
              <td></td>
              <th>Continuous Deployment</th>
              <td></td>
              <th>Monitoring</th>
            </tr>
          </thead>

         
    
          <tbody id="myTable">
            <tr>            
                    <th scope="row">4</th>
                    <td><input id="c1" type="checkbox" name="ci_check[]" value="07" /></td>
                     <td>Piplelined enabled for Build Platform      </td>
                     <td><input id="c1" type="checkbox" name="au_check[]" value="07" /></td>
                     <td>Code Coverage Meets build promotion Criteteria (Eg.85%)     </td>
                     <td><input id="c1" type="checkbox" name="cd_check[]" value="07" /></td>
                     <td>One Click Roll back to the previous stable release version</td>
                     <td><input id="c1" type="checkbox" name="mo_check[]" value="07" /></td>
                     <td>Has "Self-Healing" Capability in Pre-prod</td>


            </tr>

            <tr>            
                    <th scope="row">3</th>
                    <td><input id="c1" type="checkbox" name="ci_check[]" value="06"/></td>
                     <td>Completely adheres to the "Continuous  Delivery Principles"      </td>
                     <td><input id="c1" type="checkbox" name="au_check[]" value="06"/></td>
                     <td>90% of the existing functional test cases are integrated with automated deployments     </td>
                   <td><input id="c1" type="checkbox" name="cd_check[]" value="06"/></td>
                     <td>Automated Dpeloyment for Configs ,Properities and DB scripts in All Environment</td>
                     <td><input id="c1" type="checkbox" name="mo_check[]" value="06"/></td>
                     <td>Log Moniroting available for both Pre-Prod & Prod Apps</td>


            </tr>
            <tr>            
                    <th scope="row">2</th>
                    <td><input id="c1" type="checkbox" name="ci_check[]" value="05"/></td>
                     <td>Each  Commit/Merge to Git triggers  a Build and creates Deployable artifacts in Nexus </td>
                     <td><input id="c1" type="checkbox" name="au_check[]" value="05"/></td>
                     <td>Automated regression test suites and are run during E2E testing phase</td>
                     <td><input id="c1" type="checkbox" name="cd_check[]" value="05"/></td>
                     <td>Automated Dpeloyment for Code in All Enviroment</td>
                     <td><input id="c1" type="checkbox" name="mo_check[]" value="05"/></td>
                     <td>Availability or performance or Monitoring is available in All Pre-Prod App/DB servers</td>


            </tr>
            <tr>            
                    <th scope="row">1</th>
                    <td><input id="c1" type="checkbox" name="ci_check[]" value="05"/></td>
                     <td>We maintain Centrailized version control system for code and Dependencis in GIT</td>
                     <td><input id="c1" type="checkbox" name="au_check[]" value="05"/></td>
                     <td>Functional test are  Developed and Integrated with existing test suites for stories in each sprint</td>
                     <td><input  id="c1"type="checkbox" name="cd_check[]" value="05"/></td>
                     <td>Code Deployment is automated through Jenkins / Ansible</td>
                     <td><input id="c1" type="checkbox" name="mo_check[]" value="05"/></td>
                     <td>Functional / Performance Monitoring is available in Production</td>


            </tr>
            <tr>            
                    <th scope="row">0</th>
                    <td><input id="c1" type="checkbox" name="ci_check[]" value="01" class="check"/></td>
                     <td>Not on Recommanded centralized Repo (GIT) and Centrailized Build Platform</td>
                     <td><input  id="c1" type="checkbox" name="au_check[]" value="01" class="check"/></td>
                     <td>Automated Unit tests exists and excercised. </td>
                     <td><input  id="c1" type="checkbox" name="cd_check[]" value="01" class="check"/></td>
                     <td>We do a Manual code Deployment</td>
                     <td><input  id="c1" type="checkbox" name="mo_check[]" value="05" class="check"/></td>
                     <td>Production Health Monitoring is available</td>


            </tr>
</tbody>
</table>
<div class="text-right">
    <div class="message" id="message"></div>
    <br>
    <button type="button" id="calculate" class="btn btn-success" data-toggle="modal" data-target="#myModal" >Calculate Score</button>
    <button type="button" id="reset" onclick="handleChange()" class="btn btn-warning">Reset</button>
    <button type="button" id="save" class="btn btn-info">Submit Result</button>
    <button type="button" id="retrive"  class="btn btn-primary">Prevous Results</button>
</div>
<p>
<br>
<h4 style="color: #00FF30;">Note:</h4>
<p style="color: white;">1. If any of the objectives are not in scope,you earn full ponts for that level<br>
2. When Successfully achieve an objective, The weight of the objective is added to your score<br>
3. The Total score is the cumulative  sum of all the scores in each objective at different level<br>
</p>

</p>
</div>

</div>
</div>


  <!-- Modal -->
  <div class="modal modal-wide" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog ezCustTrans">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Score and Badge</h4>
        </div>
        <div class="modal-body">
        <div class= "contaner-fluid">
        <div class="row">
        <div class="col-md-5"></div>
            <div class="col-md-4"><p><h2 id="noofscore"></h2></p></div>
        
        </div>
        <div class="row">
         <div class="col-md-4"></div>
         <div class="col-md-4"> <img id="myimage" src="img/star.png" width="150" height="150"></div>

        </div>

        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  

  </div></div></table>



  <script type="text/javascript">
    
function handleChange(cb) {
    var allCB = document.querySelectorAll("input[id='c1']");
    for(var i=0; i< allCB.length; i++){
        allCB[i].checked=false;
    }
}

  </script>
        
    

<script>
    $(document).ready(function(){
        //alert("hii");
    $("#calculate").click(function(){
        
        var cal=00;
        
        var ci=00;
        var checked = []
        $("input[name='ci_check[]']:checked").each(function ()
        {
            checked.push(parseInt($(this).val()));
            ci=ci + Number($(this).val());
        });
        
        var au=0;
        var checked_au = []
        $("input[name='au_check[]']:checked").each(function ()
        {
            checked_au.push(parseInt($(this).val()));
            au = au + Number($(this).val());
        });
        
        var cd=0;
        var checked_cd = []
        $("input[name='cd_check[]']:checked").each(function ()
        {
            checked_cd.push(parseInt($(this).val()));
            cd = cd + Number($(this).val());
        });
        
        var mo=0;
        var checked_mo = []
        $("input[name='mo_check[]']:checked").each(function ()
        {
            checked_mo.push(parseInt($(this).val()));
            mo = mo + Number($(this).val());
        });
        
        cal = ci+au+cd+mo;
        
        
       
        if ( cal <= 15 )
        {
            
                  document.getElementById('myimage').src = 'img/bronze.png';
        
        $("#noofscore").html(cal);
      }
        
        else if (cal >=16 && cal <=25)
        {
            $("#noofscore").html(cal);
          document.getElementById('myimage').src = 'img/bronze.png';
        }
        else if( cal >= 26 && cal <= 60)
        {
          $("#noofscore").html(cal);
            document.getElementById('myimage').src = 'img/silver.png';
        }
        else if (cal >= 61 && cal <=80)
        {
          $("#noofscore").html(cal);
            document.getElementById('myimage').src = 'img/gold.png';
        }
        else if (cal >= 81 && cal <=100)
        {
          $("#noofscore").html(cal);
            document.getElementById('myimage').src = 'img/star.png';

        }
        else 
        {
          $("#noofscore").html(cal);
            document.getElementById('myimage').src = 'img/sar.png';
        }

        
    });
});

</script>
<script>
    $(document).ready(function(){
        //alert("hii");
    $("#save").click(function(){
        
        var ci=0;
        var checked = []
        $("input[name='ci_check[]']:checked").each(function ()
        {
            checked.push(parseInt($(this).val()));
            ci=ci + Number($(this).val());
        });
        
        var au=0;
        var checked_au = []
        $("input[name='au_check[]']:checked").each(function ()
        {
            checked_au.push(parseInt($(this).val()));
            au = au + Number($(this).val());
        });
        
        var cd=0;
        var checked_cd = []
        $("input[name='cd_check[]']:checked").each(function ()
        {
            checked_cd.push(parseInt($(this).val()));
            cd = cd + Number($(this).val());
        });
        
        var mo=0;
        var checked_mo = []
        $("input[name='mo_check[]']:checked").each(function ()
        {
            checked_mo.push(parseInt($(this).val()));
            mo = mo + Number($(this).val());
        });
        
            $.ajax({
			type: "POST",
			url: "save_ajax.php",
			data: "ci="+ci+"&au="+au+"&cd="+cd+"&mo="+mo,
			success: function(html){
			$("#message").html(html);
			}
			});
			return false;
        
    });
});
</script>
  
 

</body>
</html>
