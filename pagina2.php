<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'nav.html' ?>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chesapeake Water Watch Project</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <style>
        .container {
  position: relative;
  background: rgba(255, 255, 255, 0.2);
            color: #fff;
            padding: 10px;        }
  a {
    color: #ffff;
    text-decoration: none;
    background-color: transparent;
}

.navbar {
    margin-left: 0 auto;
    margin-right: 0 auto;
}
.navbar .links {
    margin-top: -30px;
}

.navbar .logo {
    margin-top: -40px
}

.navbar a {
    margin-top: -35px;
}


 /* Animación para resaltar tecnologías */
 @keyframes highlight {
            0% { background-color: red; }
            50% { background-color: orange; }
            100% { background-color: red; }
        }

        /* Estilo para resaltar tecnologías */
        .highlighted {
            animation: highlight 2s infinite;
        }
        </style>
</head>
<body>
   <!-- Header Section -->
<header class="jumbotron">
    <div class="containerv2">
        <h1 class="display-4">Intelligent Chatbot System Open Source Project</h1>
        <p class="lead">An open-source project aimed at developing an advanced chatbot that uses artificial intelligence technologies to interact effectively and personally with users.</p>
        <button id="applyButton" class="btn btn-primary btn-lg">Join</button>
    </div>
</header>

<!-- Modal -->
<div class="modal fade" id="applicationModal" tabindex="-1" role="dialog" aria-labelledby="applicationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applicationModalLabel">Application Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="applicationForm">
                    <div class="form-group">
                        <label for="area">Area of Application</label>
                        <input type="text" class="form-control" id="area" placeholder="Enter the area">
                    </div>
                    <div class="form-group">
                        <label for="description">Brief Description</label>
                        <textarea class="form-control" id="description" rows="3" placeholder="Enter the description"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitApplication">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- Project Details Section -->
<section class="container">
    <h2>Project Details</h2>
    <ul>
        <li><strong>Geographic Scope:</strong> Tidal regions of the Chesapeake Bay</li>
        <li><strong>Project Status:</strong> Active - recruiting volunteers</li>
        <li><strong>Participation Tasks:</strong> Data analysis, Data entry, Geolocation, Identification, Learning, Measurement, Observation, Problem solving, Sample analysis, Site selection and/or description, Specimen/sample collection</li>
        <li><strong>Start Date:</strong> 06/01/2021</li>
        <li><strong>Project Contact:</strong> <a href="mailto:contactoai@mail.com">contactoai@mail.com</a></li>
        <li><strong>Technologies Used:</strong> <span class="highlighted">Natural Language Processing (NLP)</span>, <span class="highlighted">Machine Learning</span>, <span class="highlighted">Neural Networks</span>, <span class="highlighted">NLP API Technologies</span>, <span class="highlighted">Web Development</span></li>
    </ul>
</section>

<!-- Federal Government Sponsors Section -->
<section class="container">
    <h2>Federal Government Sponsors</h2>
    <img src="img/logofic.png" alt="NASA Logo" style="height: 80px;">
    <!-- Add logos of other federal sponsors if available -->
</section>

<!-- Fields of Science Section -->
<section class="container">
    <h2>Fields of Science</h2>
    <ul>
        <li>Astronomy and space</li>
        <li>Biology</li>
        <li>Chemistry</li>
        <li>Climate and weather</li>
        <li>Computers and technology</li>
        <li>Ecology and environment</li>
        <li>Geology and earth science</li>
        <li>Nature and outdoors</li>
        <li>Ocean/water and marine</li>
    </ul>
</section>

<!-- Intended Outcomes Section -->
<section class="container">
    <h2>Intended Outcomes</h2>
    <p>The Intelligent Chatbot System open-source project aims to utilize natural language processing (NLP) technology and machine learning to develop an advanced chatbot capable of interacting effectively and personally with users in a variety of applications, from customer support to product recommendations and responses to frequently asked questions. Its ability for continuous learning and adaptation makes it a powerful solution for businesses and organizations looking to enhance their interaction with customers and users.</p>
    <p>If you're passionate about artificial intelligence and wish to contribute or learn more about this exciting open-source project, we invite you to join our community and explore the code on GitHub!</p>
</section>

    <!-- Add Bootstrap JavaScript and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>

    document.addEventListener('DOMContentLoaded', function () {
        const applyButton = document.getElementById('applyButton');
        const applicationForm = document.getElementById('applicationForm');
        const submitApplicationButton = document.getElementById('submitApplication');

        applyButton.addEventListener('click', function () {
            $('#applicationModal').modal('show');
        });

        submitApplicationButton.addEventListener('click', function () {
            const area = document.getElementById('area').value;
            const description = document.getElementById('description').value;

            // Here, you can send the data to your server or process it as needed.

            $('#applicationModal').modal('hide');

            Swal.fire({
                icon: 'success',
                title: 'Application Submitted!',
                text: 'Your application has been successfully submitted to join.',
                confirmButtonText: 'OK'
            });
        });
    });

</script>

  
</body>
</html>
