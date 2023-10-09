<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


</head>
<body>

<div class="container mt-5">
    <h1>Project Details</h1>
    <form>
        <div class="mb-3">
            <label for="geographicScope" class="form-label">Geographic Scope:</label>
            <input type="text" class="form-control" id="geographicScope" name="geographicScope">
        </div>
        <div class="mb-3">
            <label for="projectStatus" class="form-label">Project Status:</label>
            <input type="text" class="form-control" id="projectStatus" name="projectStatus">
        </div>
        <div class="mb-3">
            <label for="participationTasks" class="form-label">Participation Tasks:</label>
            <textarea class="form-control" id="participationTasks" name="participationTasks" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="startDate" class="form-label">Start Date:</label>
            <input type="date" class="form-control" id="startDate" name="startDate">
        </div>
        <div class="mb-3">
            <label for="projectContact" class="form-label">Project Contact:</label>
            <input type="text" class="form-control" id="projectContact" name="projectContact">
        </div>
        <div class="mb-3">
            <label for="technologiesUsed" class="form-label">Technologies Used:</label>
            <input type="text" class="form-control" id="technologiesUsed" name="technologiesUsed">
        </div>
        <div class="mb-3">
            <label for="governmentSponsors" class="form-label">Federal Government Sponsors:</label>
            <input type="text" class="form-control" id="governmentSponsors" name="governmentSponsors">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="fieldsOfScience" class="form-label">Fields of Science:</label>
            <input type="text" class="form-control" id="fieldsOfScience" name="fieldsOfScience">
        </div>
        <div class="mb-3">
            <label for="intendedOutcomes" class="form-label">Intended Outcomes:</label>
            <textarea class="form-control" id="intendedOutcomes" name="intendedOutcomes" rows="3"></textarea>
        </div>
        <button type="button" class="btn btn-primary" id="submitApplication">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

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
                title: 'Application Published!',
                text: 'Your application has been successfully submitted to request list.',
                confirmButtonText: 'OK'
            });
        });
    });

</body>
</html>
