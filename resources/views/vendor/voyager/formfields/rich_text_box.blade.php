<textarea 
    class="form-control richTextBox" 
    name="{{ $row->field }}" 
    id="richtextv2{{ $row->field }}">
    {{ old($row->field, $dataTypeContent->{$row->field} ?? '') }}
</textarea>

@push('javascript')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Debugging: Verify if TinyMCE is loading
            console.log('TinyMCE loaded:', typeof tinymce !== 'undefined');

            tinymce.init({
                selector: '#richtextv2{{ $row->field }}', // Ensure this matches your textarea ID
                menubar: false, // Disable the menubar for simplicity
                plugins: 'link image lists code', // Add commonly used plugins
                toolbar: 'undo redo | styleselect | bold italic underline strikethrough | alignleft aligncenter alignright | link image | numlist bullist | outdent indent | blockquote | table | emoticons | forecolor backcolor', // Expanded toolbar
                branding: false, // Disable TinyMCE branding
                height: 300, // Editor height
                setup: function (editor) {
                    console.log('TinyMCE initialized:', editor.id);
                },
                content_style: 'body { font-family:Arial,Helvetica,sans-serif; font-size:14px }', // Styling inside the editor
            });
        });
    </script>
@endpush
