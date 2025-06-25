<div class="py-12">
    <form method="POST" action="">
        @csrf
        <div id="fb-editor"></div>
        <textarea id="form-data" name="form_data" hidden></textarea>
        <button type="submit" class="mt-4 px-4 py-2 bg-blue-600 text-white">Save Form</button>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>

<script src="https://formbuilder.online/assets/js/form-render.min.js"></script>
<script>
    jQuery(function($) {
        $(document.getElementById('fb-editor')).formBuilder({
            disableFields: ['button'], // Disable the button field if needed
            typeUserAttrs: {
                text: {
                    conditional: {
                        label: 'Show If',
                        options: {
                            show_if_1: 'Option 1',
                            show_if_2: 'Option 2',
                        }
                    }
                }
            }
        });
        $('form').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            var formData = fb.actions.getData('json'); // Get the form data in JSON format
            $('#form-data').val(formData); // Set the JSON data to the hidden textarea
            this.submit(); // Continue with the form submission
        });
    });
</script>