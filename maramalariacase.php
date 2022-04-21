<htm>
    <head>
        <title>afyacheckTZ</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <div id="maindiv">
            <div id="menu">
                <h1>AfyacheckTZ</h1>
                <ul>
                    <li><a href="index.php">DASHBOARD</a></li>
                    <li><a href="covid19regions.php">COVID-19</a></li>
                    <li><a href="hivaidsregions.php">HIV/AIDS</a></li>
                    <li><a href="tbregions.php">TB</a></li>
                    <li><a href="malariaregions.php">MALARIA</a></li>
                     <li><a href="#">LOGIN</a></li>
                    
                </ul>
                
            </div>
            <div id="middlee">
                <br><br/>
                <center>
                    <h1>MALARIA CASE IN MARA REGION</h1>
                
                    <table>
                        <tr>
                            <th>TOTAL CASE</th>
                            <th>ACTIVE CASE</th>
                            <th style="color: red">TOTAL DEATH</th>
                            <th>TOTAL RECOVERED</th>
                           
                        </tr>
                        <tr>
                            <td style="text-align: center;"><?php
$conna= mysqli_connect("localhost", "root", "");
$dba=mysqli_select_db($conna, "afyacheck");
$sqla="select count(disease) AS total FROM patientdetails WHERE region='mara' AND disease='malaria'";
$resulta= mysqli_query($conna,$sqla);
 $valuea= mysqli_fetch_assoc($resulta);
 $num_rowsa=$valuea['total'];
 echo $num_rowsa;


?></td>
                            <td style="text-align: center;"><?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='positive'  AND region='mara' AND disease='malaria'";
$result= mysqli_query($conn,$sql);
$value= mysqli_fetch_assoc($result);
$num_rows=$value['total'];
 echo $num_rows;


?></td>
                            <td style="text-align: center;"><?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='death' AND region='mara' AND disease='malaria'";
$result= mysqli_query($conn,$sql);
$value= mysqli_fetch_assoc($result);
$num_rows=$value['total'];
 echo $num_rows;


?></td>
                            <td style="text-align: center;"><?php
$conn= mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn, "afyacheck");
$sql="select count(disease) AS total FROM patientdetails WHERE status='recovered' AND region='mara' AND disease='malaria'";
$result= mysqli_query($conn,$sql);
 $value= mysqli_fetch_assoc($result);
 $num_rows=$value['total'];
 echo $num_rows;


?></td>
                        </tr>
                        
                    </table>  
                    
                    <a href="maradistrictmalariacase.php"><button>VIEW IN DISTRICTS</button></a>
                    
                    
                   
                </center>
                
                
            </div>
        </div>
    </body>
        
        
</htm>