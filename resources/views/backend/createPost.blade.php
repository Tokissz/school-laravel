<link href="../../css/style.css" rel="stylesheet">
<div class="container">
    <form action="../../process/back-process/createPost.php" method="post">
        <textarea id="content" name="content">
        </textarea>
        <div><button type="submit" name="btnsumbit">Submit</button></div>
    </form>
</div>
<!-- <script src="https://cdn/.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script> -->
<!-- <script src="../../../assets//ckeditor//ckeditor.js"></script> -->


<script>
    ClassicEditor
        .create(document.querySelector('#content'), {
                // toolbar: {
                //     items: [
                //         'undo', 'redo',
                //         '|', 'heading',
                //         '|', 'bold', 'italic',
                //         '|', 'link', 'insertImage', 'insertTable', 'mediaEmbed', 'blockQuote',
                //         '|', 'bulletedList', 'numberedList', 'outdent', 'indent'
                //     ]
                // },
                ckfinder: {
                    // uploadUrl: 'https://ckeditor.com/apps/ckfinder/3.5.0/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
                    uploadUrl : '../../process/back-process/uploadPicture.php'

                }

                // simpleUpload: {
                //     // The URL that the images are uploaded to.
                //     uploadUrl: '../../process/back-process/uploadPicture.php',
                // }

            }


        )
        .then(editor => {
            console.log(editor);
            window.editor = editor;
        })
        .catch(error => {
            console.error(error);
        });
</script>