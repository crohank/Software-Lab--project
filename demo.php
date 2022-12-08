
<html>
    <head>
        <link rel="stylesheet" href="RailwayHomePage.css"/>
        <script src="https://kit.fontawesome.com/063aa87341.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id = "sectionhomepage">
            <div class = "homepage">
                <nav class="navbar navbar-expand-lg navbar-dark nav">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav elements">
                        <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-link active" href="#">Live Status</a>
                        <a class="nav-link active" href="#" data-toggle="modal" data-target="#ticketModal">Ticket Reservation</a>
                        <a class="nav-link active" href="#" data-toggle="modal" data-target="#exampleModal">Enquiry</a>
                        <a class="nav-link active" href="#">About</a>
                        <a class="nav-link active" href="#">Team</a>
                        <a class="nav-link active" href="#">Contact</a>
                      </div>
                    </div>
                </nav>
                <form action="RailwayHomePage.html" method="POST">
                <div class = "d-flex flex-columns justify-content-center buttons">
                    <button class = "btn" id = "button">LOGOUT</button>
                </div>
                </form>
            </div>
        </div>
               <!-- Modal -->
                <div class="modal fade" id="ticketModal" tabindex="-1" aria-labelledby="ticketModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="ticketModalLabel">Enter Detials</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                            <input type="text" id="Form-source" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="Form-source" aria-placeholder="name">Source</label>
                            </div>
                            <div class="md-form mb-5">
                            <input type="email" id="Form-destination" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="Form-destination">Destination</label>
                            </div>
        
                            <div class="md-form mb-4">
                            <input type="text" id="Form-seats" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="Form-seats" class="w-40">Number of seats</label>
                            </div>
        
                            <div class="md-form mb-4">
                            <input type="text" id="Form-type" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="Form-type">Train no</label>
                            </div>
        
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </div>
                </div>
        
        <!-- Modal -->
 
        <form action="equiry.php" method="POST">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="complaintModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="complaintModalLabel">Complaint Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                    <input type="text" id="Form-name" class="form-control validate" name="uname">
                    <label data-error="wrong" data-success="right" for="Form-name" aria-placeholder="name">Your name</label>
                    </div>
                    <div class="md-form mb-5">
                    <input type="email" id="Form-email" class="form-control validate" name="mail">
                    <label data-error="wrong" data-success="right" for="Form-email">Your email</label>
                    </div>

                    <div class="md-form mb-4">
                    <textarea id="Form-complaint" name="sub" rows="5" cols="50" class="form-control validate">
                    </textarea>
                    <label data-error="wrong" data-success="right" for="Form-complaint">Subject</label>
                    </div>

                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </div>
        </div>
        </form>
        
        <script type="text/javascript" src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/js/ccbp-ui-kit.js"></script>
       
    </body>
</html>