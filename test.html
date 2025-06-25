<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="UTF-8"> 
    <title>FormBuilder + jQuery + PDF</title> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script src="https://formbuilder.online/assets/js/form-render.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
</head>

<body> 
    <div id="form-container" style="padding:20px; border:1px solid #ccc;"></div>
    <br>
    <button id="generate-pdf">Download Form as PDF</button>

    <script>
        // Your FormBuilder JSON data
        var formData = [{
            "type": "text",
            "label": "First Name",
            "className": "form-control",
            "name": "first-name"
        }, {
            "type": "text",
            "label": "Last Name",
            "className": "form-control",
            "name": "last-name"
        }, {
            "type": "textarea",
            "label": "Message",
            "className": "form-control",
            "name": "message"
        }];
        
        // Render form using FormBuilder
        $('#form-container').formRender({
            formData: JSON.stringify(formData)
        });

        // Display formData using alert
        alert(JSON.stringify(formData));

        // Button click to generate PDF
        $('#generate-pdf').on('click', function() {
            // Use html2canvas to capture the form as an image
            html2canvas($('#form-container')[0]).then(function(canvas) {
                var imgData = canvas.toDataURL('image/png');
                var pdf = new jspdf.jsPDF();
                var pdfWidth = pdf.internal.pageSize.getWidth();
                var imgProps = pdf.getImageProperties(imgData);
                var pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;
                pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
                pdf.save('form-download.pdf'); // Save the PDF
            });
        });
    </script> 
</body>

</html>
