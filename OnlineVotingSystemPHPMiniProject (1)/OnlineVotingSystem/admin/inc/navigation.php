
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online voting system</title>
    <style>
        ul {
            justify-content: center;
          list-style-type: none;
          margin-left: -1%;
          margin-right: -1%;
          margin-left: -1%;
          padding-top: 0px;
          overflow: hidden;
          background-color: #042642;
        }
        li {
          float: left;
        }
        li a {
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }
        li a:hover {
          background-color: #748491;
          text-decoration: none;
        }
        .first ul{
         width: 102%;
         justify-content: center;
         padding-left: 170px;
         /* padding-right: 170px; */


        }
       
        </style> 
</head>
<body>
    <div class="first">
        <ul>
          <li><a class="active" href="index.php?homepage=1">Home</a></li>
          <li><a href="index.php?addElectionPage=1">Add Elections</a></li>
          <li><a href="index.php?addCandidatePage=1">Add Candidates</a></li>
          <li style="padding-left: 800px;"><a class="active" href="logout.php">Logout</a></li>
        </ul> 
    </div>
</body>
</html>


