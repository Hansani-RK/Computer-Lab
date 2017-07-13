<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>CIS</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" >

        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

        <style type="text/css">
            @font-face {
                font-family: 'Raleway', sans-serif;
            }
            body{
                font-family: 'Raleway', Segoe Print;
                background: #0099FF url(../images/bg.jpg) repeat top left;
                font-weight: 600;
                font-size: 15px;
                color: black;
                overflow-y: scroll;


            }
            body{background:url(images/dddxx.jpg);
                background-attachment:fixed;
                background-size:cover;
                
                
            }
            .add-item-root{
                margin-top:70px;
                font-size: large;
                background-color: rgba(255, 224, 109, 0.72);
                border-radius: 8px;
            }
            .add-item{
                margin-bottom: 10px;
            }
            .add-item-sub-label{
                
            }
            .add-item-sub-label p{
                margin-bottom: 0px !important;
                margin-top:3px !important;
            }
            .add-item-container{
                margin-left: 10%;
                margin-right: 10%;
            }
            .row add-item{

            }
            .form-control{
                float: right;
                font-family: 'Raleway', Arial;
                font-weight: 400;
                font-size: 18px;
                color: black;
            }
            .add-item-root-sub{
                margin-top: 35px;
                margin-bottom: 25px;
            }
            .text-lable{
                font-weight: bold;
                font-size: 17px;
            }
            .item-root-title{
                 font-size: 30px;
            }
			
							#u1{
								list-style-type: none;
								margin: 0;
								padding: 0;
								overflow: hidden;
								background-color: #808000; 
							}
							#l1{
								 float: left;
                                 text-align: center;
                                padding: 5px 10px;
							}
                            #l2{
                                 float: right;
                                 text-align: center;
                                padding: 14px 30px;
                            }
							#a1{
								display: block;
								color: white;
								text-align: center;
								padding: 14px 30px;
								text-decoration: none;
                                font-weight: 600;
							}
							#a2{
								display: block;
								color: white;
								text-align: center;
								padding: 14px 16px;
								text-decoration: none;
                                font-weight: 600;
							}
							#a2:hover:not(.ac){
									 background-color: #BDB76B;
								}
								.ac{
								background-color:#BDB76B;
}




        </style>

    </head>
	
	
	
	
    <body> 
	
        <div class="container">
           
            <header>
			
				<ul id="u1">
                  <li id="l1"><a class="ac" href="home.php" id="a1"><b>Home</b></a></li>
                  <li id="l1"><a href="addItem.php" id="a2"><b>Add new</b></a></li>
                  <li id="l1"><a href="repair.php" id="a2"><b>Repair</b></a></li>
                  <li id="l1"><a href="bb.php" id="a2"><b>Borrow</b></a></li>
                  <li id="l1"><a href="search1.php" id="a2"><b>Search Item </b></a></li>

                  


                  <form action="logout.php">
                    <li id="l2"><button onclick="document.getElementById('id01').style.display='block'"  class="btn btn-primary">Logout</button></li>
<!--<p>
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn">Logout</button>
  <input type="submit" name="submit" value="Submit" class="btn btn-primary">
</p>-->
        </form>


                </ul>
				
				
			
            </header>
			
			
			<form action="addItem1.php" method="POST">
            <section>               
                <div class="add-item-container">
                    <div class="row add-item-root">
                            <div class="col-md-offset-1 col-md-10 add-item-root-sub">
                                <div class="add-item-sub-root">
                                        <div class="row">
                                            <p class="item-root-title">Add item details here</p>
                                        </div>
                                        <div class="row add-item">
                                                <div class="col-md-3 add-item-sub-label">
                                                    <p class="text-label">Item code</p>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="i_code">
                                                </div>
                                        </div>
                                        <div class="row add-item">
                                                <div class="col-md-3 add-item-sub-label">
                                                    <p class="text-label">Item Name</p>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="name">
                                                </div>
                                        </div>
                                        <div class="row add-item">
                                                <div class="col-md-3 add-item-sub-label">
                                                    <p class="text-label">Added date</p>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="ad">
                                                </div>
                                        </div>
                                        <div class="row add-item">
                                                <div class="col-md-3 add-item-sub-label">
                                                    <p class="text-label">Availability</p>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="r_lab">
                                                </div>
                                        </div>
                                         
                                        <div class="row">
                                                                                       
                                            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
											<input type="submit" name="search" value="Search" class="btn btn-primary">
											
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </section>
			</form>
        </div>
    </body>
</html>