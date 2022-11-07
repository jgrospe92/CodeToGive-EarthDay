<!DOCTYPE html>
<html>
<head>
    <?php
    $this->view('Layout/Head');
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
    rel="canonical"
    href="https://getbootstrap.com/docs/5.2/examples/carousel/"
    />
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
    crossorigin="anonymous"
    /> 
    <!-- <link href="../styles/bootstrap.min.css" rel="stylesheet" /> -->
    <style>
        body {
        font-family: Arial, Helvetica, sans-serif;
        }

        * {
        box-sizing: border-box;
        }

        /* Style inputs */
        input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
        }

        input[type=submit] {
        background-color: #1bbac5;
        color: white;
        padding: 12px 20px;
        border: none;
        cursor: pointer;
        }

        input[type=submit]:hover {
        background-color: #05a098;
        }

        /* Style the container/contact section */
        .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 10px;
        }

        /* Create two columns that float next to eachother */
        .column {
        float: left;
        width: 50%;
        margin-top: 6px;
        padding: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
        .column, input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
        }
    </style>
</head>

<body>
<?php $this->view('Layout/Navigation'); ?>
    <main>
        <div class="container">
        <div style="text-align:center">
            <h2>Edit Event</h2>
        </div>
        <div class="row">
            
            <div class="column">
            <br>
            <br>
            <img src="/resources/images/eventearth.jpg" style="width:100%">
            </div>
            <div class="column">
            <form action="/action_page.php">
                <label for="fname">Name</label>
                <input type="text" id="fname" name="name" placeholder="Name">

                <label for="urgency">Urgency</label>
                <select id="urgency" name="urgency">
                <option value="High">High</option>
                <option value="Moderate">Moderate</option>
                <option value="Low">Low</option>
                </select>

                <label for="fname">Produce Quantity</label>
                <input type="text" id="pquantity" name="quantity" placeholder="Produce Quantity">

                <label for="subject">Info</label>
                <textarea id="subject" name="info" placeholder="Write something.." style="height:170px"></textarea>
                
                <input type="submit" value="Cancel">
                
                <input type="submit" value="Edit Event Submit">
            </form>
            </div>
        </div>
        </div>
    </main>
    <?php $this->view('Layout/Scripts'); ?>
    
</body>
</html>