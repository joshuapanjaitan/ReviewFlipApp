<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment</title>
</head>
<style>
     .jumbotron{
        background-color:#f7f7f7;
        padding-bottom:0;
        padding-top:30px;
    }
        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #f7f7f7;
        }

        li {
        float: left;
        }

        li a {
        display: block;
        color: black;
        text-align: center;
        padding: 16px;
        text-decoration: none;
        }

        li a:hover {
            background-color: white;
            text-decoration:none;
        }
        .active{
            background-color: white;
            text-decoration:none;
        }
        .tbl{
            margin-left:81%;
            margin-top:2%;
        }
        .a-comment{
            margin-bottom:5%;
        }
        .komentar{
            width:90%;
            margin-left:10%;
        }
        .kotak{
            width:50px;
            height:50px;
            background-color:gray;
            float:left;
            text-align:center;
            color:white;
        }
        .odin{
            margin-top : 3% !important;
            background-color:white !important;
            margin-bottom:3%;
        }
        .date{
            margin-left:80%;
        }
        .reply{
            margin-top:1%;
            
        }
        .reply-a{
            display:none;
        }
        .balas{
            margin-left:91%;
        }
        .bawah{
            margin-bottom:5%;
        }
       
</style>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h4>Review Product A</h4>
            <ul>
                <li><a href="#home">Item Details</a></li>
                <li><a href="#review">Review</a></li>
                <li><a href="#contact" class = "active">Comments</a></li>
                <li><a href="#about">Support</a></li>
            </ul>
            </div>
        </div>


        <!-- Comment -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h5>73 Comment Founds</h5>

                        <!-- Comment orang lain -->
                        <div class="card a-comment">
                            <div class="card-header">
                                Username <span class="date">Date</span>
                            </div>
                            <div class="card-body">
                                
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti autem minima quas quis quidem aut. Repellat officia nemo fugiat, ratione numquam laborum porro ipsum accusantium ipsam libero quia, sequi labore.</p>
                                
                            </div>
                            <!-- Akhir Comment orang lain -->


                            
                            <!-- Balas komentar -->
                            <div class="card-footer">
                                <a href = "#" id="pemicu" class="balas"> Reply</a>
                                
                                <div class="input-group mb-3 reply reply-a" id="target">
                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">reply</button>
                                    </div>
                                    </div>
                            </div>
                        </div>


                        <!-- Akgir comment orang lain -->
                       

                        <!-- Pagination -->

                    <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-end odin">
                        <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#">></a>
                        </li>
                    </ul>
                    </nav>
                </div>
            <!-- End of Pagination -->

                </div>
            </div>
        </div>


        <div class="container bawah">
            <div class="row">
                <div class="col-lg-8">
                <div class="card">
                            <div class="card-body">
                            <div class="kotak"><span>User</span></div>
                            <input type="comment" class="form-control komentar"  aria-describedby="emailHelp" placeholder="enter comment">
                            <button type="button" class="btn btn-info tbl">Post Comment</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <script>
        $(document).ready(function(){
           $('#pemicu').click(function(){
               $('#target').removeClass("reply-a");
               $('#pemicu').hide();
            });
        });
        </script>
</body>
</html>