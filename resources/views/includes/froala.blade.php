<link rel="stylesheet" type="text/css" href="{{url('assets/froala/css/froala_editor.pkgd.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('assets/froala/css/plugins.pkgd.css')}}">
<link href="{{url('assets/froala/css/froala_style.min.css')}}" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{{url('assets/froala/js/froala_editor.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/froala/js/plugins.pkgd.min.js')}}"></script>
<script type="text/javascript">
  let editor = new FroalaEditor('#froala_description', {
    imageUploadParam: 'cover_image',

    // Set the image upload URL.
    imageUploadURL: "{{url('image-upload')}}",

    // Additional upload params.
    imageUploadParams: {_token: "{{csrf_token()}}"},

    // Set request type.
    imageUploadMethod: 'POST',
    toolbarSticky: false,
    imageStyles: {
            class1: 'img-responsive',
            class2: 'center-fr-image'
        },
        toolbarButtons: [
            'fullscreen', 'bold', 'italic', 'strikeThrough', 'subscript', 'superscript',
            'paragraphFormat', 'align', 'formatOL', 'formatUL', 'indent', 'outdent',
            'insertImage', 'insertLink', 'insertFile', 'insertVideo', 'insertTable', 'undo', 'redo', 'help', //'html'
        ],
        toolbarButtonsMD: [
            'fullscreen', 'bold', 'italic', 'strikeThrough', 'subscript', 'superscript',
            'paragraphFormat', 'align', 'formatOL', 'formatUL', 'indent', 'outdent',
            'insertImage', 'insertLink', 'insertFile', 'insertVideo', 'insertTable', 'undo', 'redo', 'help', //'html'
        ],
        toolbarButtonsSM: [
            'fullscreen', 'bold', 'italic',
            'paragraphFormat', 'formatOL', 'formatUL',
            'insertImage', 'insertLink', 'insertFile', 'insertVideo', 'insertTable', 'undo', 'redo', 'help', //'html'
        ],
        toolbarButtonsXS: [
            'fullscreen',
            'insertImage', 'insertLink', 'insertFile',  'insertVideo','insertTable','bold', 'italic','help',  //'html'
        ],
        heightMin: 250,
        heightMax: 700,
        placeholderText: 'It\'s all your space…',
        charCounterMax: 4000,
        pasteAllowedStyleProps:['font-family', 'font-size', 'background', 'color', 'width', 'text-align', 'vertical-align', 'background-color', 'padding', 'margin', 'height', 'margin-top', 'margin-left', 'margin-right', 'margin-bottom', 'text-decoration', 'font-style','font-weight', 'text-indent', 'border', 'border-.*'],
        pasteDeniedAttrs: ['style'],
        theme: 'gray',
        imageEditButtons: ['imageReplace','imageAlign', 'imageRemove', '|', 'imageLink', 'linkOpen', 'linkEdit', 'linkRemove', '-'],
        events: {
    'contentChanged': function () {
      $('#description').val(editor.html.get());
    }
  }


         });
</script>
