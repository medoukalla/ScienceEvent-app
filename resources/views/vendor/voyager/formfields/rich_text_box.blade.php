<textarea 
    class="form-control richTextBox" 
    name="{{ $row->field }}" 
    id="richtextv2{{ $row->field }}">
    {{ old($row->field, $dataTypeContent->{$row->field} ?? '') }}
</textarea>

@push('javascript')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            tinymce.init({
                selector: '#richtextv2{{ $row->field }}',
                menubar: false,
                plugins: 'link image lists code',
                toolbar: 'undo redo | customCopy customPaste | styleselect | bold italic underline strikethrough | alignleft aligncenter alignright | link image | numlist bullist | outdent indent | blockquote | table | emoticons | forecolor backcolor',
                branding: false,
                height: 300,
                setup: function (editor) {
                    // Custom Copy Button
                    editor.ui.registry.addButton('customCopy', {
                        text: 'Copie',
                        onAction: function () {
                            const content = editor.getContent();
                            navigator.clipboard.writeText(content).then(function () {
                                console.log('Content copied to clipboard');
                            }).catch(function (err) {
                                console.error('Failed to copy content: ', err);
                                alert('Failed to copy content. Please use Ctrl+C instead.');
                            });
                        }
                    });

                    // Custom Paste Button
                    editor.ui.registry.addButton('customPaste', {
                        text: 'Coller',
                        onAction: function () {
                            // Ensure the paste operation is triggered by user interaction
                            navigator.clipboard.readText().then(function (text) {
                                editor.insertContent(text);
                            }).catch(function (err) {
                                console.error('Failed to paste content: ', err);
                                alert('Failed to paste content. Please use Ctrl+V instead.');
                            });
                        }
                    });
                },
                content_style: 'body { font-family:Arial,Helvetica,sans-serif; font-size:14px }',
            });
        });
    </script>
@endpush
