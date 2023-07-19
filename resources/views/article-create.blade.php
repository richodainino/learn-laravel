<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="{{ asset('assets/vendor/ckeditor5/build/ckeditor.js') }}"></script>
    <title>CKE5 in Laravel</title>
</head>
<body>
    <h1>Classic editor</h1>
    <form action="/articles" method="post">
        @csrf
        <textarea name="content" id="editor">
            &lt;p&gt;This is some sample content.&lt;/p&gt;
        </textarea>
        <p><input type="submit" value="Submit"></p>
    </form>
    
    @push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    @endpush

    @stack('scripts')
</body>
</html>