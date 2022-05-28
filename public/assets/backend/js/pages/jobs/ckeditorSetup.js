ClassicEditor
.create( document.querySelector( '.ckEditor' ), {
    // plugins: [ Essentials, Paragraph, Bold, Italic ],
    toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
} )
.catch( error => {
    console.error( error.stack );
} );
