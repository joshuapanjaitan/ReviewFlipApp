<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Review</title>
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
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
        .ink{
            width:10%;
        }
        .tbl{
            background-color:gray;
            border-color:gray;
            margin-top:10px;
            margin-left:93%;
        }
        @media only screen and (max-width: 600px) {
        .tbl{
           
            margin-left:78%;
        }
        
}   
</style>
<body>
   
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h4>Review Product A</h4>
        <ul>
            <li><a href="#home">Item Details</a></li>
            <li><a href="#review" class = "active">Review</a></li>
            <li><a href="#contact">Comments</a></li>
            <li><a href="#about">Support</a></li>
        </ul>
        </div>
    </div>

    <!-- Input Review -->
   <div class="container">
    <div class="card">
        <div class="card-header">
        <form action="<?=base_url()?>cReview/tambah" method="post">
           <select class="browser-default custom-select ink" name="rating">
                <option selected>Rate Us</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
            </select>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <p>Enter your Review</p>
                <div class="form-group">
                    <textarea class="form-control" rows="5" id="comment" placeholder="Type your review here" name = "komen"></textarea>
                    <button type="submit" name="submit" class="btn btn-primary tbl">Review</button>
                </div>
            </form>
           
        </div>
        </div>
   </div>
</body>
</html>